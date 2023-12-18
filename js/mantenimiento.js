const getChartReportes = () => {
    return {
        title: {
          text: 'Reportes',
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
              { value: 16, name: 'Beta' },
              { value: 3, name: 'Comercializacion' },
              { value: 29, name: 'Gamma' },
              { value: 3, name: 'Habitta' },
              { value: 3, name: 'Santa Rosa' },
              { value: 1, name: 'Corporativo' }
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
const getChartMantenimiento = () => {
    return {
        title: {
          text: 'Tipo de Mantenimiento',
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
              { value: 89, name: 'Correctivo' },
              { value: 9, name: 'Preventivo' },
              { value: 2, name: 'Otro' },
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


const getChartArea = () =>{
    return {
        title: {
          text: 'Area de Mantenimiento',
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
                { value: 1048, name: 'Cisterna' },
                { value: 735, name: 'Electrico' },
                { value: 580, name: 'Estructural' },
                { value: 484, name: 'Hidraulico' },
                { value: 300, name: 'Techumbres' }
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
const getChartGarantia = () =>{

    return {
        title: {
            text: 'Garantia',
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




const initCharts = () => {
    const chartReportes = echarts.init(document.getElementById("chartReportes"));
    const chartMantenimiento = echarts.init(document.getElementById("chartMantenimiento"));
    const chartArea = echarts.init(document.getElementById("chartArea"));
    const chartGarantia = echarts.init(document.getElementById("chartGarantia"));
    const chartOcupacion = echarts.init(document.getElementById("chartOcupacion"));
    const chartGiro = echarts.init(document.getElementById("chartGiro"));

    chartReportes.setOption(getChartReportes());
    chartMantenimiento.setOption(getChartMantenimiento());
    chartArea.setOption(getChartArea());
    chartGarantia.setOption(getChartGarantia());
    chartOcupacion.setOption(getChartOcupacion());
    chartGiro.setOption(getChartGiro());
};
window.addEventListener('load', () => {
    initCharts();
});