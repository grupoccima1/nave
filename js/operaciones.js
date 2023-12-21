const getChartEntregas = (datos) => {
  if (!datos || !Array.isArray(datos)) {
      console.error('Error: datos no está definido o no es un array');
      return {};
  }

  // Extraer conjuntos únicos de los datos
  const conjuntos = [...new Set(datos.map(item => item._id))];

  const source = conjuntos.map(conjunto => {
      const conjuntoData = datos.find(item => item._id === conjunto);
      return {
          conjunto: conjunto.toString(),
          'Pendiente': conjuntoData ? conjuntoData.pendiente || 0 : 0,
          'Entregado': conjuntoData ? conjuntoData.entregado || 0 : 0
      };
  });

  console.log(source);

  return {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
      title: {
          text: 'Entregas',
          left: 'right'
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
          data: conjuntos.map(conjunto => conjunto.toString())
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
  const colorPalette = ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'];

  const xAxisData = data.map(item => item.conjunto);
  const seriesDataVigente = data.map(item => item.totalVigente);
  const seriesDataVencido = data.map(item => item.totalVencido);

  return {
      color: colorPalette,
      title: {
          text: 'Garantias',
          left: 'right'
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
  const conjuntos = datos.map(item => item.conjunto);
  const seriesData = datos.map(item => item.estatusCobranza.reduce((acc, curr) => acc + curr.count, 0));

  return {
    title: {
      text: 'Estatus Cobranza',
      left: 'right'
      },  
    color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
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
      tooltip: {
        trigger: 'axis'
      },
      yAxis: {
          type: 'value'
      },
      series: [
          {
              data: seriesData,
              type: 'bar',
              showBackground: true,
              backgroundStyle: {
                  color: 'rgba(180, 180, 180, 0.2)'
              }
          }
      ]
  };
};

const getChartPEVentas = () => {
    return  {
      title: {
        text: 'Punto de Equilibrio Ventas ',
        left: 'right'
        },
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
        legend: {},
        tooltip: {
          trigger:'axis'
        },
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
      title: {
        text: 'Punto de Equilibrio',
        left: 'right'
        },
        color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
        legend: {},
        tooltip: {
          trigger: 'axis'
        },
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
  const colores = ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'];

 
  const etiquetas = datos.map((dato) => dato.USO);
  const porcentajes = datos.map((dato) => dato.porcentaje);

  return {
      color: colores,
      title: {
          text: 'Tipo de Uso',
          subtext: 'Datos de Ejemplo',
          left: 'center',
      },
      tooltip: {
          trigger: 'item',
      },
      legend: {
          orient: 'vertical',
          left: 'left',
      },
      series: [
          {
              name: 'Access From',
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

const getChartOcupacion = () =>{

  return {
      title: {
          text: 'Ocupacion',
          left: 'center'
      },
      tooltip: {
        trigger: 'item'
      },
      legend: {
        top: '5%',
        left: 'center'
      },
      series: [
        {
          name: 'Access From',
          type: 'pie',
          radius: ['40%', '70%'],
          avoidLabelOverlap: false,
          label: {
            show: false,
            position: 'center'
          },
          emphasis: {
            label: {
              show: true,
              fontSize: 40,
              fontWeight: 'bold'
            }
          },
          labelLine: {
            show: false
          },
          data: [
            { value: 84, name: 'SI' },
            { value: 12, name: 'NO' },
            { value: 4, name: 'NO SE' },
          ]
        }
      ]
    };
};
const getChartGiro = () =>{

  return {
      title: {
          text: 'Giro',
          left: 'center'
      },
      tooltip: {
        trigger: 'item'
      },
      legend: {
        top: '5%',
        left: 'center'
      },
      series: [
        {
          name: 'Access From',
          type: 'pie',
          radius: ['40%', '70%'],
          avoidLabelOverlap: false,
          label: {
            show: false,
            position: 'center'
          },
          emphasis: {
            label: {
              show: true,
              fontSize: 40,
              fontWeight: 'bold'
            }
          },
          labelLine: {
            show: false
          },
          data: [
            { value: 84, name: 'SI' },
            { value: 12, name: 'NO' },
            { value: 4, name: 'NO SE' },
          ]
        }
      ]
    };
};

const getChartDeudaActual = () =>{
    return {
        title: {
            text: 'Deuda Actual',
            left: 'right'
        },
        tooltip: {
          trigger: 'axis',
          axisPointer: {
            type: 'shadow'
          }
        },
        xAxis: {
            type: 'category',
            data: ['Beta', 'Gamma', 'Santa Rosa']
          },
          yAxis: {
            type: 'value'
          },
          series: [
            {
              data: [0, 0, 150],
              type: 'bar'
            }
          ]
        
    };
}

const initCharts = (entregasPorConjunto, vigencia, usos, cobranza) => {
  const chartDeudaActual = echarts.init(document.getElementById("chartDeudaActual"));
  const chartEntregas = echarts.init(document.getElementById("chartEntregas"));
  const chartGarantias = echarts.init(document.getElementById("chartGarantias"));
  const chartEstCobranza = echarts.init(document.getElementById("chartEstCobranza"));
  const chartPEVentas = echarts.init(document.getElementById("chartPEVentas"));
  const chartPEIngresoR = echarts.init(document.getElementById("chartPEIngresoR"));
  const chartTipoUso = echarts.init(document.getElementById("chartTipoUso"));
  const chartOcupacion = echarts.init(document.getElementById("chartOcupacion"));
  const chartGiro = echarts.init(document.getElementById("chartGiro"));

  
  
    chartDeudaActual.setOption(getChartDeudaActual());  // Cambiar a getChartEntregas
  chartEntregas.setOption(getChartEntregas(entregasPorConjunto));  // Cambiar a getChartEntregas
  chartGarantias.setOption(getChartGarantias(vigencia));
  chartEstCobranza.setOption(getChartEstCobranza(cobranza));
  chartPEVentas.setOption(getChartPEVentas());
  chartPEIngresoR.setOption(getChartPEIngresoR());
  chartTipoUso.setOption(getChartTipoUso(usos));
  chartOcupacion.setOption(getChartOcupacion());
  chartGiro.setOption(getChartGiro());
};

window.addEventListener('load', () => {
  initCharts(entregasPorConjunto, vigencia, usos, cobranza);
});
