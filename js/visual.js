var chart;
AmCharts.ready(function () {
    chart = new AmCharts.AmSerialChart();
    chart.dataProvider = generateChartData();
    chart.categoryField = "category";
    chart.marginRight = 0;
    chart.marginTop = 0;
    chart.autoMarginOffset = 0;
    chart.depth3D = 20;
    chart.angle = 30;
    var categoryAxis = chart.categoryAxis;
    categoryAxis.labelRotation = 90;
    categoryAxis.dashLength = 5;
    categoryAxis.gridPosition = "start";

    var valueAxis = new AmCharts.ValueAxis();
    valueAxis.title = "Amount Spent";
    valueAxis.dashLength = 5;
    chart.addValueAxis(valueAxis);
           
    var graph = new AmCharts.AmGraph();
    graph.valueField = "value";
    graph.colorField = "color";
    graph.balloonText = "[[category]]: [[value]]";
    graph.type = "column";
    graph.lineAlpha = 0;
    graph.fillAlphas = 1;
    chart.addGraph(graph);

    chart.write("chartdiv");
});

function addRow() {
    jQuery('<div class="data-row"><input class="data-cell data-category"/><input class="data-cell data-value" type="number" step="10"/><input class="data-button delete-button" type="button" value="X"/></div>').appendTo('#data-table').each(function () {
        initRowEvents(jQuery(this));
    });
}

function generateChartData() {
    var chartData = [];
    jQuery('.data-row').each(function () {
        var category = jQuery(this).find('.data-category').val();
        var value = jQuery(this).find('.data-value').val();
        if (category != '') {
            chartData.push({
                category: category,
                value: value
            });
        }
    });
    return chartData;
}

function initRowEvents(scope) {
    scope.find('.data-cell')
        .attr('title', 'Click to edit')
        .on('keypress keyup change', function () {
            
            chart.dataProvider = generateChartData();
            chart.validateData();
        }).end().find('.delete-button').click(function () {
           
            $(this).parents('.data-row').remove();
            chart.dataProvider = generateChartData();
            chart.validateData();
        });
}

jQuery(function () {
    initRowEvents(jQuery(document));
});