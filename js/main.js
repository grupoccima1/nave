const getOptionChart1 = (datos) => {
  if (!datos || !Array.isArray(datos)) {
    console.error('Error: datos no está definido o no es un array');
    return {};  // Devolver un objeto vacío o manejar el error de otra manera según tus necesidades
  }

  const years = datos.map(item => item._id); // Obtener años desde los datos de MongoDB

  const source = years.map(year => {
    const yearData = datos.find(item => item._id === year);
    return {
      product: year.toString(),
      'Venta': yearData ? yearData.totalSum : 0,
      'Cobrado': yearData ? yearData.cobradoSum : 0,
      'Deuda Capital': yearData ? yearData.deudaCapitalSum : 0
    };
  });
  console.log(source);
  return {
    legend: {},
    tooltip: {},
    dataset: {
      dimensions: ['product', 'Venta', 'Cobrado', 'Deuda Capital'],
      source: source
    },
    xAxis: { type: 'category' },
    yAxis: {},
    series: [
      { type: 'bar', color: '#F28463' },
      { type: 'bar', color: '#2FBEAB' },
      { type: 'bar', color: '#4A5489' }
    ]
  };
};

const getOptionChart2 = (datos) => {
  // Colores para los estados 'AL CORRIENTE' y 'MOROSO'
  const colors = ['#405189', '#0ab39c'];

  // Construir los datos para la serie de pastel
  const pieData = datos[0].porcentajes.map(({ ESTATUS, porcentaje }) => ({
      value: porcentaje !== null ? parseFloat(porcentaje.toFixed(2)) : 0,
      name: ESTATUS,
  }));

  return {
      color: colors,
      title: {
          text: '% de Morosidad',
          subtext: 'General',
          left: 'center',
      },
      tooltip: {
          trigger: 'item',
          formatter: '{a} <br/>{b}: {c}%'
      },
      legend: {
          orient: 'vertical',
          left: 'left',
      },
      series: [
          {
              name: 'Morosidad',
              type: 'pie',
              radius: '50%',
              data: pieData,
              emphasis: {
                  itemStyle: {
                      shadowBlur: 10,
                      shadowOffsetX: 0,
                      shadowColor: 'rgba(0, 0, 0, 0.5)',
                  },
              },
          },
      ],
  };
};







const getOptionChart3 = (datos) => {
  const xAxisData = datos.map((item) => item._id);

  const seriesData = datos.map((item) => ({
      product: item._id,
      'Al Corriente': item.estados.find((estado) => estado.ESTATUS === 'AL CORRIENTE')?.count || 0,
      'Moroso': item.estados.find((estado) => estado.ESTATUS === 'MOROSO')?.count || 0,
  }));

  return {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb'],
      legend: {},
      tooltip: {},
      dataset: {
          dimensions: ['product', 'Al Corriente', 'Moroso'],
          source: seriesData,
      },
      xAxis: {
          type: 'category',
          data: xAxisData,
          axisLabel: { interval: 0, rotate: 45, fontSize: 10 }, // Ajuste para mostrar todos los nombres y reducir el tamaño de la letra
      },
      yAxis: {},
      series: [{ type: 'bar', color: '#4A5489' }, { type: 'bar', color: '#2FBEAB' }],
  };
};




const getOptionChart4 = (datos) => {
  // Filtrar datos nulos o indefinidos
  const filteredData = datos.filter(item => item._id && item.percentage);

  // Construir los datos para la serie de pastel
  const pieData = filteredData.map(({ _id, percentage }) => ({
      value: percentage.toFixed(2),  // Mantener dos decimales
      name: _id ? _id.toString() : 'Desconocido',
  }));

  return {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
      title: {
          text: 'Ventas Anuales',
          left: 'center',
      },
      tooltip: {
          trigger: 'item',
          formatter: '{a} <br/>{b}: {c}%',  // Mostrar el porcentaje en el tooltip
      },
      legend: {
          orient: 'vertical',
          left: 'left',
      },
      series: [
          {
              name: 'Ventas Anuales',
              type: 'pie',
              radius: '50%',
              data: pieData,
              emphasis: {
                  itemStyle: {
                      shadowBlur: 10,
                      shadowOffsetX: 0,
                      shadowColor: 'rgba(0, 0, 0, 0.5)',
                  },
              },
          },
      ],
  };
};




const getOptionChart5 = (data) => {
  const years = Array.from(new Set(data.map(item => item.year)));
  const months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

  return {
    color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb'],
    title: {
      text: 'Ventas Por Mes'
    },
    tooltip: {
      trigger: 'axis'
    },
    legend: {
      data: years.map(year => year.toString())
    },
    grid: {
      left: '3%',
      right: '4%',
      bottom: '15%', // Aumenta el espacio en la parte inferior para mostrar los nombres de los meses completos
      containLabel: true
    },
    toolbox: {
      feature: {
        saveAsImage: {}
      }
    },
    xAxis: {
      type: 'category',
      boundaryGap: false,
      data: months,
      axisLabel: {
        interval: 0, // Muestra todos los meses
        rotate: 45, // Rota las etiquetas para mayor legibilidad
        formatter: function (value) {
          return value.substring(0, 3); // Muestra solo las primeras 3 letras de cada mes
        }
      }
    },
    yAxis: {
      type: 'value'
    },
    series: years.map(year => ({
      name: year.toString(),
      type: 'line',
      stack: 'Total',
      data: months.map(month => {
        const item = data.find(entry => entry.year === year && entry.month === month);
        return item ? item.totalSum : 0;
      })
    }))
  };
};




const getOptionChart6 = (data) => {
  const conjuntos = [...new Set(data.map(item => item.conjunto))];
  const disponibilidades = [...new Set(data.map(item => item.disponibilidad))];

  const datasetSource = conjuntos.map(conjunto => {
    const row = { product: conjunto };
    disponibilidades.forEach(disponibilidad => {
      const match = data.find(item => item.conjunto === conjunto && item.disponibilidad === disponibilidad);
      row[disponibilidad] = match ? match.count : 0;
    });
    return row;
  });

  return {
    color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb'],
    legend: {},
    tooltip: {},
    dataset: {
      dimensions: ['product', ...disponibilidades],
      source: datasetSource,
    },
    xAxis: {
      type: 'category',
      axisLabel: {
        rotate: 45, // Ajusta el ángulo de rotación según sea necesario
      },
    },
    yAxis: {},
    series: disponibilidades.map(disponibilidad => ({ type: 'bar' })),
  };
};


const initCharts = (datosNaves,datosN, datosE, datosR, datosT, datosU) => {
  const chart1 = echarts.init(document.getElementById("chart1"));
  const chart2 = echarts.init(document.getElementById("chart2"));
  const chart3 = echarts.init(document.getElementById("chart3"));
  const chart4 = echarts.init(document.getElementById("chart4"));
  const chart5 = echarts.init(document.getElementById("chart5"));
  const chart6 = echarts.init(document.getElementById("chart6"));

  chart1.setOption(getOptionChart1(datosNaves));
  chart2.setOption(getOptionChart2(datosN));
  chart3.setOption(getOptionChart3(datosE));
  chart4.setOption(getOptionChart4(datosR));
  chart5.setOption(getOptionChart5(datosT));
  chart6.setOption(getOptionChart6(datosU));
};


window.addEventListener('load', () => {
    initCharts(datosNaves, datosN, datosE, datosR, datosT, datosU);
});