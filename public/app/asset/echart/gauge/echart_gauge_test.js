class echart_gauge_test
{
    constructor() 
    {
        

    }

    initial_v1()
    {
        this.option = {
        series: [
            {
            type: 'gauge',
            startAngle: 180,
            endAngle: 0,
            center: ['50%', '75%'],
            radius: '90%',
            min: 0,
            max: 1,
            splitNumber: 8,
            axisLine: {
                lineStyle: {
                width: 6,
                color: [
                    [0.25, '#FDDD60'],
                    [0.5, '#58D9F9'],
                    [0.75, '#7CFFB2'],
                    [1, '#FF6E76']
                ]
                }
            },
            pointer: {
                icon: 'path://M12.8,0.7l12,40.1H0.7L12.8,0.7z',
                length: '12%',
                width: 20,
                offsetCenter: [0, '-60%'],
                itemStyle: {
                color: 'auto'
                }
            },
            axisTick: {
                length: 12,
                lineStyle: {
                color: 'auto',
                width: 2
                }
            },
            splitLine: {
                length: 20,
                lineStyle: {
                color: 'auto',
                width: 5
                }
            },
            axisLabel: {
                color: '#464646',
                fontSize: 20,
                distance: -60,
                rotate: 'tangential',
                formatter: function (value) {
                if (value === 0.875) {
                    return 'D';
                } else if (value === 0.625) {
                    return 'C';
                } else if (value === 0.375) {
                    return 'B';
                } else if (value === 0.125) {
                    return 'A';
                }
                return '';
                }
            },
            title: {
                offsetCenter: [0, '-10%'],
                fontSize: 20
            },
            detail: {
                fontSize: 30,
                offsetCenter: [0, '-35%'],
                valueAnimation: true,
                formatter: function (value) {
                return Math.round(value * 100) + '';
                },
                color: 'inherit'
            },
            data: [
                {
                value: 0.6,
                name: 'H'
                },
            ]
            }
        ]
        };

        return this;
    }

    
    
}

// 檔案會太多，有需要再拆
class echart_gauge_v1
{
    

    static update(obj, val)
    {
        obj.option.series[0].data[0].value = val;
        obj.chart.setOption(obj.option);
    }
}

class echart_gauge_v2
{
    

    static update(obj, val)
    {
        obj.option.series[0].data[0].value = val;
        obj.chart.setOption(obj.option);
    }
}

// 使用方式，客製化自己寫
class echart_gauge_test_ extends echart_gauge_test
{
    constructor(name, theme = "dark")
    {
        super();
        this.dom_chart = $(`${name}`)[0];
        this.chart = echarts.init(this.dom_chart, theme);
    }

    
}