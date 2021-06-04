// Element inside which you want to see the chart
let element = document.querySelector('#gaugeArea')

// Properties of the gauge
let gaugeOptions = {
    hasNeedle: true,
    needleColor: 'gray',
    needleUpdateSpeed: 1000,
    arcColors: ['rgb(44, 151, 222)', 'lightgray'],
    arcDelimiters: [30],
    rangeLabel: ['0', '100'],
    centralLabel: '50',
}

// Drawing and updating the chart
GaugeChart.gaugeChart(element, 300, gaugeOptions).updateNeedle(50)
