const getChartEngregas = () => {
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
          data: ['Santa Rosa', 'Beta', 'Gamma']
        },
        series: [
          {
            name: 'Pendiente',
            type: 'bar',
            data: [18203, 23489, 29034]
          },
          {
            name: 'Entregado',
            type: 'bar',
            data: [19325, 23438, 31000]
          }
        ]
      };
};
const getChartGarantias = () => {
    return {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
        title: {
          text: 'Garantias'
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
          data: ['Santa Rosa', 'Beta', 'Gamma']
        },
        series: [
          {
            name: 'Vigente',
            type: 'bar',
            data: [18203, 23489, 29034]
          },
          {
            name: 'Vencido',
            type: 'bar',
            data: [19325, 23438, 31000]
          }
        ]
      };
};

const getChartEstCobranza = () => {
    return {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
        xAxis: {
          type: 'category',
          data: ['Beta', 'Gamma', 'Santa Rosa' ]
        },
        yAxis: {
          type: 'value'
        },
        series: [
          {
            data: [120, 200, 150 ],
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
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
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
        series: [{ type: 'bar' }, { type: 'bar' }, { type: 'line' }]
      };
};

const getChartTipoUso = () =>{
    return {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
        title: {
          text: 'Tipo de Uso',
          subtext: 'Datos de Ejemplo',
          left: 'center'
        },
        tooltip: {
          trigger: 'item'
        },
        legend: {
          orient: 'vertical',
          left: 'left'
        },
        series: [
          {
            name: 'Access From',
            type: 'pie',
            radius: '50%',
            data: [
              { value: 1048, name: 'Propio' },
              { value: 735, name: 'Propio/Renta' },
              { value: 580, name: 'Propio/Venta' },
              { value: 484, name: 'Renta' },
              { value: 300, name: 'Renta/Venta' },
              { value: 300, name: 'Sin Definir' }
            ],
            emphasis: {
              itemStyle: {
                shadowBlur: 10,
                shadowOffsetX: 0,
                shadowColor: 'rgba(0, 0, 0, 0.5)'
              }
            }
          }
        ]
      };
};
const initCharts = () => {
    const chartEntregas = echarts.init(document.getElementById("chartEntregas"));
    const chartGarantias = echarts.init(document.getElementById("chartGarantias"));
    const chartEstCobranza = echarts.init(document.getElementById("chartEstCobranza"));
    const chartPEVentas = echarts.init(document.getElementById("chartPEVentas"));
    const chartPEIngresoR = echarts.init(document.getElementById("chartPEIngresoR"));
    const chartTipoUso = echarts.init(document.getElementById("chartTipoUso"));

    chartEntregas.setOption(getChartEngregas());
    chartGarantias.setOption(getChartGarantias());
    chartEstCobranza.setOption(getChartEstCobranza());
    chartPEVentas.setOption(getChartPEVentas());
    chartPEIngresoR.setOption(getChartPEIngresoR());
    chartTipoUso.setOption(getChartTipoUso());

};
window.addEventListener('load', () => {
    initCharts();
});