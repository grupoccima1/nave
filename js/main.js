const getOptionChart1 = (datos) => {
  if (!Array.isArray(datos) || !datos.every(item => 'year' in item && 'totalSum' in item && 'cobradoSum' in item && 'deudaCapitalSum' in item)) {
    console.error('Error: datos no está definido o no tiene la estructura esperada');
    return {};
  }

  const years = datos.map(item => item.year);

  const source = years.map(year => {
    const yearData = datos.find(item => item.year === year);
    return {
      product: year.toString(),
      'Venta': yearData ? yearData.totalSum : 0,
      'Cobrado': yearData ? yearData.cobradoSum : 0,
      'Deuda Capital': yearData ? yearData.deudaCapitalSum : 0
    };
  });

  return {
    title: {
      text: 'Cobranza',
      left: 'right'
    },
    legend: {},
    tooltip: {
      trigger: 'axis'
    },
    dataset: {
      dimensions: ['product', 'Venta', 'Cobrado', 'Deuda Capital'],
      source: source
    },
    xAxis: { type: 'category' },
    yAxis: {},
    series: Array.from({ length: 3 }, (_, i) => ({
      type: 'bar',
      color: getColor(i)
    }))
  };
};

// Función para obtener colores dinámicos
const getColor = (index) => {
  const colors = ['#F28463', '#2FBEAB', '#4A5489'];
  return colors[index % colors.length];
};


const getOptionChart2 = (datos) => {
  // Verificar si datos tiene la propiedad 'porcentajes'
  if (datos && datos.porcentajes) {
    // Colores para los estados 'AL CORRIENTE' y 'MOROSO'
    const colors = ['#405189', '#0ab39c'];

    // Construir los datos para la serie de pastel
    const pieData = datos.porcentajes.map(({ ESTATUS, porcentaje }) => ({
      value: porcentaje !== null ? parseFloat(porcentaje.toFixed(2)) : 0,
      name: ESTATUS,
    }));

    return {
      color: colors,
      title: {
        text: '% de Morosidad',
        subtext: 'General',
        left: 'right',
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
  } else {
    // Manejar el caso en que los datos no tengan la estructura esperada
    console.error('Los datos no tienen la estructura esperada:', datos);
    return {}; // Otra opción es retornar un objeto vacío o null
  }
};

const getOptionChart3 = (datos) => {
  const xAxisData = datos.map((item) => item._id);

  const seriesData = datos.map((item) => ({
      product: item._id,
      'Al Corriente': item.estados.find((estado) => estado.ESTATUS === 'AL CORRIENTE')?.count || 0,
      'Moroso': item.estados.find((estado) => estado.ESTATUS === 'MOROSO')?.count || 0,
  }));

  return {
      title: {
          text: 'Morosidad',
          left: 'right'
      },
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb'],
      legend: {},
      tooltip: {
        trigger: 'axis',
      },
      dataset: {
          dimensions: ['product', 'Al Corriente', 'Moroso'],
          source: seriesData,
      },
      xAxis: {
          type: 'category',
          data: xAxisData,
          axisLabel: { interval: 0, rotate: 45, fontSize: 10 }, 
      },
      yAxis: {},
      series: [ { type: 'bar', color: '#2FBEAB' }, { type: 'bar', color: '#4A5489' }],
  };
};


const getOptionChart4 = (datos) => {
  // Filtrar datos nulos o indefinidos
  const filteredData = datos.filter(item => item.year && item.percentage);

  // Construir los datos para la serie de pastel
  const pieData = filteredData.map(({ year, percentage }) => ({
      value: parseFloat(percentage) ? parseFloat(percentage).toFixed(2) : 0,  // Mantener dos decimales
      name: year ? year.toString() : 'Desconocido',
  }));

  return {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
      title: {
          text: 'Ventas Anuales',
          left: 'right',
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
              center: ['60%', '50%'],
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
  const years = Array.from(new Set(data.map(item => Number(item.year))));
  const monthsInSpanish = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
  const monthsInEnglish = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

  return {
    color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb'],
    title: {
      text: 'Ventas Por Mes',
      left: 'left'
    },
    tooltip: {
      trigger: 'axis'
    },
    legend: {
      data: years.map(year => year.toString()), 
      orient: 'vertical',
      left: 'right'
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
      data: monthsInSpanish,
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
      data: monthsInEnglish.map((month, index) => {
        const item = data.find(entry => Number(entry.year) === year && entry.month === month);
        return item ? Number(item.totalSum) : 0;
      })
    }))
  };
};


const getOptionChart6 = (data) => {
  const conjuntos = [...new Set(data.map(item => item.CONJUNTO))];
  const disponibilidades = [...new Set(data.map(item => item.DISPONIBILIDAD))];

  const datasetSource = conjuntos.map(conjunto => {
    const row = { product: conjunto };
    disponibilidades.forEach(disponibilidad => {
      const match = data.find(item => item.CONJUNTO === conjunto && item.DISPONIBILIDAD === disponibilidad);
      row[disponibilidad] = match ? match.count : 0;
    });
    return row;
  });

  return {
    title: {
      text: 'Disponibilidad',
      left: 'right'
    },
    color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb'],
    legend: {},
    tooltip: {
      trigger: 'axis',
    },
    dataset: {
      dimensions: ['product', ...disponibilidades],
      source: datasetSource,
    },
    xAxis: {
      type: 'category',
      axisLabel: {
        rotate: 45,
      },
    },
    yAxis: {},
    series: disponibilidades.map(disponibilidad => ({
      type: 'bar',
      name: disponibilidad,
    })),
  };
};


const initCharts = (datosNaves, datosN, datosE, datosR, datosT, datosU) => {
  const chart1 = echarts.init(document.getElementById("chart1"));
  const chart2 = echarts.init(document.getElementById("chart2"));
  const chart3 = echarts.init(document.getElementById("chart3"));
  const chart4 = echarts.init(document.getElementById("chart4"));
  const chart5 = echarts.init(document.getElementById("chart5"));
  const chart6 = echarts.init(document.getElementById("chart6"));

  chart1.setOption(getOptionChart1(datosNaves)); // Modificación aquí
  chart2.setOption(getOptionChart2(datosN)); // Ajusta según tus necesidades
  chart3.setOption(getOptionChart3(datosE)); // Ajusta según tus necesidades
  chart4.setOption(getOptionChart4(datosR)); // Ajusta según tus necesidades
  chart5.setOption(getOptionChart5(datosT)); // Ajusta según tus necesidades
  chart6.setOption(getOptionChart6(datosU)); // Ajusta según tus necesidades
};

window.addEventListener('load', () => {
  // Obtén los datos de MySQL y pásalos a initCharts
  // Supongamos que obtienes los datos de alguna manera, por ejemplo, a través de una petición AJAX
  fetch('http://localhost/nave/clases/crud.php')
  .then(response => response.json())
  .then(data => initCharts(data.datosNaves, data.datosN, data.datosE, data.datosR, data.datosT, data.datosU))
  .catch(error => console.error('Error al obtener datos de MySQL:', error));

});
