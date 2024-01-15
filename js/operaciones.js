const getChartEntregas = (datos) => {
  if (!datos || !Array.isArray(datos)) {
      console.error('Error: datos no está definido o no es un array');
      return {};
  }

  // Adaptar la estructura de datos según el formato que devuelve la función PHP
  const source = datos.map(item => ({
      conjunto: item.CONJUNTO.toString(),
      'Pendiente': item.pendiente || 0,
      'Entregado': item.entregado || 0
  }));

  console.log(source);

  return {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
      title: {
          text: 'Entregas'
      },
      tooltip: {
          trigger: 'axis',
          axisPointer: {
              type: 'shadow'
          }
      },
      legend: {},
      grid: {
          left: '3%',
          right: '4%',
          bottom: '3%',
          containLabel: true
      },
      xAxis: {
          type: 'value',
          boundaryGap: [0, 0.01]
      },
      yAxis: {
          type: 'category',
          data: source.map(conjunto => conjunto.conjunto)
      },
      series: [
          {
              name: 'Pendiente',
              type: 'bar',
              data: source.map(item => item.Pendiente)
          },
          {
              name: 'Entregado',
              type: 'bar',
              data: source.map(item => item.Entregado)
          }
      ]
  };
};

const getChartGarantias = (data) => {
  if (!data || !Array.isArray(data)) {
      console.error('Error: data no está definido o no es un array');
      return {};
  }

  const colorPalette = ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'];

  const xAxisData = data.map(item => item.CONJUNTO);
  const seriesDataVigente = data.map(item => item.totalVigente);
  const seriesDataVencido = data.map(item => item.totalVencido);

  return {
      color: colorPalette,
      title: {
          text: 'Garantías'
      },
      tooltip: {
          trigger: 'axis',
          axisPointer: {
              type: 'shadow'
          }
      },
      legend: {},
      grid: {
          left: '3%',
          right: '4%',
          bottom: '3%',
          containLabel: true
      },
      xAxis: {
          type: 'value',
          boundaryGap: [0, 0.01]
      },
      yAxis: {
          type: 'category',
          data: xAxisData,
      },
      series: [
          {
              name: 'Vigente',
              type: 'bar',
              data: seriesDataVigente
          },
          {
              name: 'Vencido',
              type: 'bar',
              data: seriesDataVencido
          }
      ]
  };
};
const getChartEstCobranza = (datos) => {
  if (!datos || !Array.isArray(datos)) {
      console.error('Error: datos no está definido o no es un array');
      return {};
  }

  const conjuntos = [...new Set(datos.map(item => item.conjunto))];
  const seriesData = [];

  conjuntos.forEach(conjunto => {
      const conjuntoData = { conjunto, estatusCobranza: {}, count: 0 };
      seriesData.push(conjuntoData);
  });

  datos.forEach(item => {
      const conjuntoIndex = conjuntos.indexOf(item.conjunto);
      if (conjuntoIndex !== -1) {
          const estatusCobranza = item.estatus_cobranza || 'N/A';
          seriesData[conjuntoIndex].estatusCobranza[estatusCobranza] = parseInt(item.count);
          seriesData[conjuntoIndex].count += parseInt(item.count);
      }
  });

  return {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
      title: {
          text: 'Estatus cobranza'
      },
      legend: {
          data: Object.keys(seriesData[0].estatusCobranza)
      },
      xAxis: {
          type: 'category',
          data: conjuntos,
          axisLabel: {
              interval: 0,
              rotate: 45,
              margin: 10,
              formatter: function (value) {
                  return value;
              }
          }
      },
      yAxis: {
          type: 'value'
      },
      tooltip: {
          trigger: 'axis',
          axisPointer: {
              type: 'shadow'
          },
          formatter: function (params) {
              const conjunto = params[0].axisValue;
              let content = `<strong>${conjunto}</strong><br/>`;
              params.forEach(param => {
                  content += `${param.marker} ${param.seriesName}: ${param.value}<br/>`;
              });
              return content;
          }
      },
      series: Object.keys(seriesData[0].estatusCobranza).map(estatus => ({
          name: estatus,
          type: 'bar',
          data: conjuntos.map(conjunto => seriesData.find(item => item.conjunto === conjunto).estatusCobranza[estatus] || 0),
      }))
  };
};



const getChartPEVentas = () => {
    return  {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
      title: {
        text: 'Punto de equilibrio'
    },
        legend: {},
        tooltip: {},
        dataset: {
          source: [
            ['product', 'Ingresos', 'Egresos', 'Punto de Equilibrio'],
            ['2019', 43.3, 85.8, 93.7],
            ['2020', 83.1, 73.4, 55.1],
            ['2021', 86.4, 65.2, 82.5],
            ['2022', 72.4, 53.9, 39.1]
          ]
        },
        xAxis: { type: 'category' },
        yAxis: {},
        // Declare several bar series, each will be mapped
        // to a column of dataset.source by default.
        series: [{ type: 'bar' }, { type: 'bar' }, { type: 'line' }]
      };
};


const getChartPEIngresoR = () =>{
    return  {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
      title: {
        text: 'P.E. VS INGRESOS'
    },
        legend: {
          orient: 'vertical',
          left: 'right',
        },
        tooltip: {},
        dataset: {
          source: [
            ['product', 'Ingresos', 'Egresos', 'Punto de Equilibrio'],
            ['2019', 43.3, 85.8, 93.7],
            ['2020', 83.1, 73.4, 55.1],
            ['2021', 86.4, 65.2, 82.5],
            ['2022', 72.4, 53.9, 39.1]
          ]
        },
        xAxis: { type: 'category' },
        yAxis: {},
        series: [{ type: 'bar' }, { type: 'bar' }, { type: 'line' }]
      };
};

const getChartTipoUso = (datos) => {
  if (!datos || !Array.isArray(datos)) {
      console.error('Error: datos no está definido o no es un array');
      return {};
  }

  const colores = ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'];

  // Convertir los porcentajes a números y redondear a dos decimales
  datos.forEach(dato => {
      dato.porcentaje = parseFloat(dato.porcentaje).toFixed(2);
  });

  return {
      color: colores,
      title: {
          text: 'Tipo de Uso',
          subtext: 'Datos de Ejemplo',
          left: 'center',
      },
      tooltip: {
          trigger: 'item',
          formatter: '{b}: {c}%'
      },
      legend: {
          orient: 'vertical',
          left: 'left',
      },
      series: [
          {
              name: 'Tipo de Uso',
              type: 'pie',
              radius: '50%',
              data: datos.map((dato) => ({
                  value: dato.porcentaje,
                  name: dato.USO,
              })),
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



const getChartOcupacion = (data) => {
  const colorPalette = ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'];

  const seriesData = data.map(item => ({
      value: item.porcentaje,
      name: item.ocupacion
  }));

  return {
      title: {
          text: 'Ocupación',
          left: 'center'
      },
      tooltip: {
          trigger: 'item',
          formatter: '{a} <br/>{b}: {c}%'
      },
      legend: {
          top: '5%',
          left: 'center',
          data: data.map(item => item.ocupacion),
      },
      series: [
          {
              name: 'Ocupación',
              type: 'pie',
              radius: '50%',
              center: ['50%', '50%'],
              avoidLabelOverlap: false,
              label: {
                  show: true,
                  position: 'outside',
                  formatter: '{b}: {d}%'
              },
              emphasis: {
                  label: {
                      show: true,
                      fontSize: 14,
                      fontWeight: 'bold'
                  }
              },
              labelLine: {
                  show: true,
                  length: 10,
                  length2: 5
              },
              data: seriesData,
              color: colorPalette,
          }
      ]
  };
};

const getChartGiro = (datos) => {
  const seriesData = datos.map(item => ({ value: item.porcentaje, name: item.GIRO }));

  return {
      title: {
          text: 'Giro',
          left: 'center'
      },
      tooltip: {
          trigger: 'item',
          formatter: '{a} <br/>{b}: {c}%'
      },
      legend: {
          orient: 'vertical',
          left: 'left',
          data: datos.map(item => item.GIRO),
      },
      series: [
          {
              name: 'Giro',
              type: 'pie',
              radius: '50%',
              center: ['50%', '50%'],
              avoidLabelOverlap: false,
              label: {
                  show: true,
                  position: 'outside',
                  formatter: '{b}: {d}%'
              },
              emphasis: {
                  label: {
                      show: true,
                      fontSize: 12,
                      fontWeight: 'bold'
                  }
              },
              labelLine: {
                  show: true,
                  length: 10,
                  length2: 5
              },
              data: seriesData
          }
      ]
  };
};





const getChartDeudaActual = (data) => {
  const conjuntos = data.map(item => item.CONJUNTO);
  const deudas = data.map(item => item.totalDeuda);

  return {
      title: {
          text: 'Deuda Actual',
          left: 'center'
      },
      xAxis: {
          type: 'category',
          data: conjuntos,
          axisLabel: {
              interval: 0,
              rotate: 45,
              margin: 10,
              formatter: function (value) {
                  return value;
              }
          }
      },
      yAxis: {
          type: 'value'
      },
      tooltip: {
          trigger: 'axis',
          axisPointer: {
              type: 'shadow'
          },
          formatter: '{b}: {c}'
      },
      series: [
          {
              data: deudas,
              type: 'bar',
              showBackground: true,
              backgroundStyle: {
                  color: 'rgba(180, 180, 180, 0.2)'
              }
          }
      ]
  };
};


const initCharts = (entregasPorConjunto, vigencia, usos, cobranza, ocupacion, giro, deuda) => {
  const chartDeudaActual = echarts.init(document.getElementById("chartDeudaActual"));
  const chartEntregas = echarts.init(document.getElementById("chartEntregas"));
   const chartGarantias = echarts.init(document.getElementById("chartGarantias"));
   const chartEstCobranza = echarts.init(document.getElementById("chartEstCobranza"));
   const chartPEVentas = echarts.init(document.getElementById("chartPEVentas"));
   const chartPEIngresoR = echarts.init(document.getElementById("chartPEIngresoR"));
   const chartTipoUso = echarts.init(document.getElementById("chartTipoUso"));
   const chartOcupacion = echarts.init(document.getElementById("chartOcupacion"));
   const chartGiro = echarts.init(document.getElementById("chartGiro"));

 chartDeudaActual.setOption(getChartDeudaActual(deuda));
  chartEntregas.setOption(getChartEntregas(entregasPorConjunto));  // Cambiado a getChartEntregas
  chartGarantias.setOption(getChartGarantias(vigencia));
   chartEstCobranza.setOption(getChartEstCobranza(cobranza));
   chartPEVentas.setOption(getChartPEVentas());
   chartPEIngresoR.setOption(getChartPEIngresoR());
  chartTipoUso.setOption(getChartTipoUso(usos));
   chartOcupacion.setOption(getChartOcupacion(ocupacion));
   chartGiro.setOption(getChartGiro(giro));
};

window.addEventListener('load', () => {
  fetch('http://localhost/nave/clases/crud.php')
    .then(response => response.json())
    .then(data => {
      console.log(data.entregasPorConjunto); // Imprime los datos en la consola
      initCharts(data.entregasPorConjunto, data.vigencia, data.usos, data.cobranza, data.ocupacion, data.giro, data.deuda);
    })
    .catch(error => console.error('Error al obtener datos de MySQL:', error));
});

