 <script>
google.load('visualization', '1', {packages: ['controls']});
google.setOnLoadCallback(drawChart);

function drawChart () {
    var data = new google.visualization.DataTable();
		data.addColumn('string', 'Book');
		data.addColumn('number', 'Climax Day');
		data.addColumn('number', 'Diagon Alley');
		data.addColumn('number', 'Dumbledores Office');
		data.addColumn('number', 'Dursleys');
		data.addColumn('number', 'Forbidden Forest');
		data.addColumn('number', 'Grimmauld Place');
		data.addColumn('number', 'Hogsmeade');
		data.addColumn('number', 'Hogwarts Express');
		data.addColumn('number', 'Memories');
		data.addColumn('number', 'Ministry of Magic');
		data.addColumn('number', 'Quidditch');
		data.addColumn('number', 'The Burrow');

    data.addRows([
		['Sorcerers Stone',0.00730038022813688,0.00425855513307985,0,0.011254752851711,0.00243346007604563,0,0,0.00334600760456274,0,0,0.00197718631178707,0],
		['Chamber of Secrets',0.013384030418251,0.00380228136882129,0.00106463878326996,0.00608365019011407,0.00212927756653992,0,0,0,0.00136882129277567,0,0.00121673003802281,0.0044106463878327],
		['Prisoner of Azkaban',0.0226615969581749,0.00638783269961977,0,0.00669201520912548,0,0,0.0044106463878327,0.00288973384030418,0,0,0.00319391634980989,0],
		['Goblet of Fire',0.0212927756653992,0,0.00714828897338403,0.00821292775665399,0.000760456273764259,0,0.0047148288973384,0.00121673003802281,0.00304182509505703,0,0.00182509505703422,0.00821292775665399],
		['Order of the Phoenix',0.0320912547528517,0,0.0129277566539924,0.0147528517110266,0.0091254752851711,0.0308745247148289,0.00745247148288973,0.00349809885931559,0.00243346007604563,0.0226615969581749,0.00136882129277567,0],
		['Half-Blood Prince',0.0229657794676806,0.004106463878327,0.0260076045627376,0.0044106463878327,0,0,0.00365019011406844,0.00501901140684411,0.0115589353612167,0,0.00121673003802281,0.0139923954372624],
		['Deathly Hallows',0.0559695817490494,0.00501901140684411,0.00821292775665399,0.0101901140684411,0.00684410646387833,0.016425855513308,0.00532319391634981,0,0.00730038022813688,0.00653992395437262,0,0.0229657794676806],
		['All Books',0.175665399239544,0.023574144486692,0.055361216730038,0.0615969581749049,0.0212927756653992,0.0473003802281369,0.0255513307984791,0.0159695817490494,0.0257034220532319,0.0292015209125475,0.0107984790874525,0.0495817490494297]
  ]);

    var columnsTable = new google.visualization.DataTable();
    columnsTable.addColumn('number', 'colIndex');
    columnsTable.addColumn('string', 'colLabel');
    var initState= {selectedValues: []};
    // put the columns into this data table (skip column 0)
    for (var i = 1; i < data.getNumberOfColumns(); i++) {
        columnsTable.addRow([i, data.getColumnLabel(i)]);
        // you can comment out this next line if you want to have a default selection other than the whole list
        initState.selectedValues.push(data.getColumnLabel(i));
    }
    // you can set individual columns to be the default columns (instead of populating via the loop above) like this:
    // initState.selectedValues.push(data.getColumnLabel(4));
    
    var chart = new google.visualization.ChartWrapper({
        chartType: 'ColumnChart',
        containerId: 'chart2_div',
        dataTable: data,
        options: {
            title: 'Harry Potter Series Stats',
            width: 800,
            height: 600,
			vAxis: {
				title: 'Percent of Series',
				format: 'percent'
			},
			hAxis: {
				title: 'Book'
			}
        }
		
    });
    
    var columnFilter = new google.visualization.ControlWrapper({
        controlType: 'CategoryFilter',
        containerId: 'colFilter2_div',
        dataTable: columnsTable,
        options: {
            filterColumnLabel: 'colLabel',
            ui: {
                label: 'Columns',
                allowTyping: false,
                allowMultiple: true,
                allowNone: false,
                selectedValuesLayout: 'belowStacked'
            }
        },
        state: initState
    });
    
    function setChartView () {
        var state = columnFilter.getState();
        var row;
        var view = {
            columns: [0]
        };
        for (var i = 0; i < state.selectedValues.length; i++) {
            row = columnsTable.getFilteredRows([{column: 1, value: state.selectedValues[i]}])[0];
            view.columns.push(columnsTable.getValue(row, 0));
        }
        // sort the indices into their original order
        view.columns.sort(function (a, b) {
            return (a - b);
        });
        chart.setView(view);
        chart.draw();
    }
    google.visualization.events.addListener(columnFilter, 'statechange', setChartView);
    
    setChartView();
    columnFilter.draw();
}

</script>
		<h2>Percent of Series</h2>

    <div class="row text-center" style="margin-top: 20px">
	<div class="col-lg-3 text-center">
		<div id="colFilter2_div"></div>
	</div>
    <div class="col-lg-9 text-center">
		<div id="chart2_div"></div>
	</div>
	</div>