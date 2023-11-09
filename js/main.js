const getOptionChart1 = () => {
    return {
      legend: {},
      tooltip: {},
      dataset: {
        dimensions: ['product', 'Venta', 'Cobrado', 'Deuda Capital'],
        source: [
          { product: '2015', 'Venta': 43.3, 'Cobrado': 85.8, 'Deuda Capital': 93.7 },
          { product: '2016', 'Venta': 83.1, 'Cobrado': 73.4, 'Deuda Capital': 55.1 },
          { product: '2017', 'Venta': 86.4, 'Cobrado': 65.2, 'Deuda Capital': 82.5 },
          { product: '2018', 'Venta': 86.4, 'Cobrado': 65.2, 'Deuda Capital': 82.5 },
          { product: '2019', 'Venta': 86.4, 'Cobrado': 65.2, 'Deuda Capital': 82.5 },
          { product: '2020', 'Venta': 86.4, 'Cobrado': 65.2, 'Deuda Capital': 82.5 },
          { product: '2021', 'Venta': 86.4, 'Cobrado': 65.2, 'Deuda Capital': 82.5 },
          { product: '2022', 'Venta': 86.4, 'Cobrado': 65.2, 'Deuda Capital': 82.5 },
        ]
      },
      xAxis: { type: 'category' },
      yAxis: {},
      // Declare several bar series, each will be mapped
      // to a column of dataset.source by default.
      series:  [{ type: 'bar', color:'#F28463' }, { type: 'bar', color:'#2FBEAB' }, { type: 'bar', color:'#4A5489' }]
    };
};
const getOptionChart2 = () => {
    return  {
      color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb'],
      title: {
        text: '% de Morosidad',
        subtext: 'General',
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
            { value: 86, name: 'Al Corriente' },
            { value: 14, name: 'Morosidad' },
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
const getOptionChart3 = () => {
  return {
    color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb'],
    legend: {},
    tooltip: {},
    dataset: {
      dimensions: ['product', 'Al Corriente', 'Moroso'],
      source: [
        { product: 'AERO','Al Corriente': 43.3, 'Moroso': 85.8 },
        { product: 'BTA','Al Corriente': 83.1, 'Moroso': 73.4 },
        { product: 'CAL','Al Corriente': 86.4, 'Moroso': 65.2 },
        { product: 'CEL','Al Corriente': 72.4, 'Moroso': 53.9 },
        { product: 'GAM','Al Corriente': 72.4, 'Moroso': 53.9 },
        { product: 'GII','Al Corriente': 72.4, 'Moroso': 53.9 },
        { product: 'P ESC','Al Corriente': 72.4, 'Moroso': 53.9 },
        { product: 'PRES','Al Corriente': 72.4, 'Moroso': 53.9 },
        { product: 'SAN L','Al Corriente': 72.4, 'Moroso': 53.9 },
        { product: 'STA R','Al Corriente': 72.4, 'Moroso': 53.9 },
      ]
    },
    xAxis: { type: 'category' },
    yAxis: {},
    // Declare several bar series, each will be mapped
    // to a column of dataset.source by default.
    series: [{ type: 'bar', color:'#4A5489' }, { type: 'bar', color:'#2FBEAB' }]
  };
};

const getOptionChart4 =() =>{
  return {
    color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb', '#68A2B9', '#87A9E2', '#002856'],
    title: {
      text: 'Ventas Anuales',
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
        name: 'Ventas Anuales',
        type: 'pie',
        radius: '50%',
        data: [
          { value: 1048, name: '2015' },
          { value: 735, name: '2016' },
          { value: 580, name: '2017' },
          { value: 484, name: '2018' },
          { value: 400, name: '2019' },
          { value: 300, name: '2020' },
          { value: 20, name: '2021' },
          { value: 50, name: '2022' }
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

const getOptionChart5 =() =>{
  return {
    color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb'],
    title: {
      text: 'Ventas Por Mes'
    },
    tooltip: {
      trigger: 'axis'
    },
    legend: {
      data: ['2018', '2019', '2020', '2021', '2022']
      // data: ['Email', 'Union Ads', 'Video Ads', 'Direct', 'Search Engine']
    },
    grid: {
      left: '3%',
      right: '4%',
      bottom: '3%',
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
      data: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Ags', 'Sep', 'Oct', 'Nov', 'Dic']
    },
    yAxis: {
      type: 'value'
    },
    series: [
      {
        name: '2018',
        type: 'line',
        stack: 'Total',
        data: [120, 132, 101, 134, 90, 230, 210, 101, 134, 90, 230, 210]
      },
      {
        name: '2019',
        type: 'line',
        stack: 'Total',
        data: [220, 182, 191, 234, 290, 330, 310, 191, 234, 290, 330, 310]
      },
      {
        name: '2020',
        type: 'line',
        stack: 'Total',
        data: [150, 232, 201, 154, 190, 330, 410, 310, 310, 310, 310, 310]
      },
      {
        name: '2021',
        type: 'line',
        stack: 'Total',
        data: [320, 332, 301, 334, 390, 330, 320, 330, 330, 330, 330, 330]
      },
      {
        name: '2022',
        type: 'line',
        stack: 'Total',
        data: [820, 932, 901, 934, 1290, 1330, 1320, 1320, 1320, 1320, 1320, 1320]
      }
    ]
  };
};

const getOptionChart6 = () =>{
  return {
    color: ['#405189', '#0ab39c', '#f06548', '#f7b84b', '#299cdb'],
    legend: {},
    tooltip: {},
    dataset: {
      dimensions: ['product', 'Apartado', 'Disponible', 'Vendido', 'Otro', 'Valor'],
      source: [
        { product: 'AERO','Apartado': 43.3, 'Disponible': 85.8, 'Vendido': 85.8, 'Otro': 85.8, 'Valor': 85.8 },
        { product: 'BTA','Apartado': 83.1, 'Disponible': 73.4, 'Vendido': 73.4, 'Otro': 73.4, 'Valor': 73.4 },
        { product: 'CAL','Apartado': 86.4, 'Disponible': 65.2, 'Vendido': 65.2, 'Otro': 65.2, 'Valor': 65.2 },
        { product: 'CEL','Apartado': 72.4, 'Disponible': 53.9, 'Vendido': 53.9, 'Otro': 53.9, 'Valor': 53.9 },
        { product: 'GAM','Apartado': 72.4, 'Disponible': 53.9, 'Vendido': 53.9, 'Otro': 53.9, 'Valor': 53.9 },
        { product: 'GII','Apartado': 72.4, 'Disponible': 53.9, 'Vendido': 53.9, 'Otro': 53.9, 'Valor': 53.9 },
        { product: 'P ESC','Apartado': 72.4, 'Disponible': 53.9, 'Vendido': 53.9, 'Otro': 53.9, 'Valor': 53.9 },
        { product: 'PRES','Apartado': 72.4, 'Disponible': 53.9, 'Vendido': 53.9, 'Otro': 53.9, 'Valor': 53.9 },
        { product: 'SAN L','Apartado': 72.4, 'Disponible': 53.9, 'Vendido': 53.9, 'Otro': 53.9, 'Valor': 53.9 },
        { product: 'STA R','Apartado': 72.4, 'Disponible': 53.9, 'Vendido': 53.9, 'Otro': 53.9, 'Valor': 53.9 },
      ]
    },
    xAxis: { type: 'category' },
    yAxis: {},
    series: [{ type: 'bar' }, { type: 'bar' }, { type: 'bar' }, { type: 'bar' }, { type: 'bar' }]
  };
};
const initCharts = () => {
    const chart1 = echarts.init(document.getElementById("chart1"));
    const chart2 = echarts.init(document.getElementById("chart2"));
    const chart3 = echarts.init(document.getElementById("chart3"));
    const chart4 = echarts.init(document.getElementById("chart4"));
    const chart5 = echarts.init(document.getElementById("chart5"));
    const chart6 = echarts.init(document.getElementById("chart6"));

    chart1.setOption(getOptionChart1());
    chart2.setOption(getOptionChart2());
    chart3.setOption(getOptionChart3());
    chart4.setOption(getOptionChart4());
    chart5.setOption(getOptionChart5());
    chart6.setOption(getOptionChart6());
};
window.addEventListener('load', () => {
    initCharts();
});