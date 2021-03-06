<?php include 'header.php'; ?>
<script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>
</head>
<body>
<?php include 'nav.php'; ?>


  <div class="container">
    <div class="row" style="margin-top: 20px">
		<div class="col-lg-12 text-center">
			<h1>Harry Potter Book Content Stats</h1>
		</div>
	</div>
	<div class="row" style="margin-top: 20px">
		<div class="col-lg-3"></div>
		<div class="col-lg-6 text-center">
			<h5>I've gone through the Harry Potter books to see how many pages take place in a certain place, doing a certain activity, etc...  You can see those stats below.</h5>
		</div>
		<div class="col-lg-3"></div>
	</div>
	<div class="row" style="margin-top: 20px">
		<div class="col-lg-3"></div>
		<div class="col-lg-6 text-center">
			<a class="btn btn-primary" href="#book" role="button">Percent of Each Book</a>
			<a class="btn btn-primary" href="#series" role="button">Percent of Entire Series</a>
			<a class="btn btn-primary" href="#explanation" role="button">Explanation</a>
		</div>
		<div class="col-lg-3"></div>
	</div>
<!-- Summary Explanation and Navigation Start -->
	
<!-- Summary Explanation and Navigation End -->
<!-- Percent of Book Chart Start -->
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
['Sorcerers Stone',0.101479915433404,0.0591966173361522,0,0.156448202959831,0.0338266384778013,0,0,0.0465116279069767,0,0,0.0274841437632135,0],
['Chamber of Secrets',0.164485981308411,0.0467289719626168,0.0130841121495327,0.0747663551401869,0.0261682242990654,0,0,0,0.0168224299065421,0,0.0149532710280374,0.0542056074766355],
['Prisoner of Azkaban',0.233908948194662,0.0659340659340659,0,0.0690737833594976,0,0,0.0455259026687598,0.0298273155416013,0,0,0.032967032967033,0],
['Goblet of Fire',0.123131046613896,0,0.0413368513632366,0.0474934036939314,0.00439753737906772,0,0.0272647317502199,0.00703605980650836,0.0175901495162709,0,0.0105540897097625,0.0474934036939314],
['Order of the Phoenix',0.137102014294997,0,0.055230669265757,0.0630279402209227,0.0389863547758285,0.13190383365822,0.0318388564002599,0.0149447693307342,0.0103963612735543,0.096816114359974,0.00584795321637427,0],
['Half-Blood Prince',0.146601941747573,0.0262135922330097,0.166019417475728,0.0281553398058252,0,0,0.0233009708737864,0.0320388349514563,0.0737864077669903,0,0.00776699029126214,0.0893203883495146],
['Deathly Hallows',0.300653594771242,0.0269607843137255,0.0441176470588235,0.0547385620915033,0.0367647058823529,0.0882352941176471,0.0285947712418301,0,0.0392156862745098,0.0351307189542484,0,0.123366013071895]
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
        containerId: 'chart_div',
        dataTable: data,
        options: {
            title: 'Harry Potter Book Stats',
            width: 800,
            height: 600,
			vAxis: {
				title: 'Percent of Book',
				format: 'percent'
			},
			hAxis: {
				title: 'Book'
			}
        }
		
    });
    
    var columnFilter = new google.visualization.ControlWrapper({
        controlType: 'CategoryFilter',
        containerId: 'colFilter_div',
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
			<h2 id="book">Percent of Books</h2>

    <div class="row text-center" style="margin-top: 20px">
	<div class="col-lg-3 text-center">
		<div id="colFilter_div"></div>
	</div>
    <div class="col-lg-9 text-center">
		<div id="chart_div"></div>
	</div>
	</div>
	<!-- Percent of Book Chart End -->
	<br><br><br>
	<!-- Percent of Series Chart Start -->
	<div id="series">
	<?php include 'chart2.php';?>
	<!-- Percent of Series Chart End -->
	<br><br><br>
	<!--Category Explanations Start -->
	<h1 id="explanation">Explanation</h1>
	<div class="row">
		<div class="col-lg-2 text-center"></div>
		<div class="col-lg-8">
			<h2>Percent of each book explanation</h2>
			<h6>For each section, I find the start page (S) and end page (E). I also have the total number of pages for the book the section is in (T).<br><br> I then do the following equation:<br><br>(E-S)/T=% of book <br><br>I then add up the % of book for all the sections in a category (i.g. Quidditch).</h6>
			<h5><b>Example:</b></h5>
			<table class="table">
				<thead>
					<tr>
						<th>Book</th>
						<th>T</th>
						<th>Category</th>
						<th>S</th>
						<th>E</th>
						<th>% of book</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Prisoner of Azkaban</td>
						<td>637</td>
						<td>Quidditch</td>
						<td>256</td>
						<td>262</td>
						<td>0.009419152</td>
					</tr>
					<tr>
						<td>Prisoner of Azkaban</td>
						<td>637</td>
						<td>Quidditch</td>
						<td>381</td>
						<td>386</td>
						<td>0.007849294</td>
					<tr>
						<td>Prisoner of Azkaban</td>
						<td>637</td>
						<td>Quidditch</td>
						<td>450</td>
						<td>460</td>
						<td>0.015698587</td>
					</tr>	
					<tr>
						<td><b>TOTAL SUM</b></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><b>.032967033 or 3.2967%</b></td>
					</tr>					
				</tbody>
			</table>
			<br>
			<h2>Percent of series explanation</h2>
			<h6>For each section, I find the start page (S) and end page (E). I also have the total number of pages for the SERIES (Z) or for me, <b>6575</b>.<br><br>I then do the following equation:<br><br>(E-S)/Z=% of series<br><br>I then add up the % of the entire series in a category (i.g. Dursleys).</h6>
			<h5><b>Example:</b> <i>(Z=6575)</i></h5>
			<table class="table">
				<thead>
					<tr>
						<th>Book</th>
						<th>Category</th>
						<th>S</th>
						<th>E</th>
						<th>% of series (E-S)/Z</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Sorcerer's Stone</td>
						<td>Dursleys</td>
						<td>28</td>
						<td>98</td>
						<td>0.010646388</td>
					</tr>
					<tr>
						<td>Sorcerer's Stone</td>
						<td>Dursleys</td>
						<td>135</td>
						<td>139</td>
						<td>0.000608365</td>
					</tr>
					<tr>
						<td>Chamber of Secrets</td>
						<td>Dursleys</td>
						<td>1</td>
						<td>41</td>
						<td>0.00608365</td>
					</tr>
					<tr>
						<td>Prisoner of Azkaban</td>
						<td>Dursleys</td>
						<td>1</td>
						<td>45</td>
						<td>0.006692015</td>
					</tr>
					<tr>
						<td>Goblet of Fire</td>
						<td>Dursleys</td>
						<td>24</td>
						<td>78</td>
						<td>0.008212928</td>
					</tr>
					<tr>
						<td>Order of the Phoenix</td>
						<td>Dursleys</td>
						<td>1</td>
						<td>98</td>
						<td>0.014752852</td>
					</tr>
					<tr>
						<td>Half-Blood Prince</td>
						<td>Dursleys</td>
						<td>61</td>
						<td>90</td>
						<td>0.004410646</td>
					</tr>
					<tr>
						<td>Deathly Hallows</td>
						<td>Dursleys</td>
						<td>23</td>
						<td>90</td>
						<td>0.010190114</td>
					</tr>

					<tr>
						<td><b>TOTAL SUM</b></td>
						<td></td>
						<td></td>
						<td></td>
						<td><b>0.061596958 or 6.1597%</b></td>
					</tr>					
				</tbody>
			</table>
			<br>
			<h2>Category Explanation</h2>
			<table class="table">
			  <thead>
				<tr>
				  <th scope="col">Category</th>
				  <th scope="col">Explanation</th>
				</tr>
			  </thead>
			  <tbody>
			  	<tr>
				  <td>Climax Day</td>
				  <td>I made a chart showing how much of each Harry Potter book is dedicated to the "climax day", starting at the beginning of the day and going until Harry falls asleep, or the book skips to the next day. I looked through each book and found the page where the day starts when the climax happens, and the page it ends on. For example, in Harry Potter and the Goblet of Fire (which has 1137 pages), on page 947, it says: "Breakfast was a very noisy affair at the Gryffindor table on the morning of the third task." On page 1087, it says: "Before he could finish the potion, before he could say another word, his exhaustion had carried him off to sleep." P.S. I included the time travel in Prisoner of Azkaban, even though Harry did briefly pass out between the Dementor attack and waking in the hospital wing. You can view the starting and ending quotes I used here - <a href="climaxdayquotes.jpg" target="_blank">Climax Day Quotes</a></td>
				</tr>
				<tr>
				  <td>Diagon Alley</td>
				  <td>When Harry arrives and leaves Diagon Alley.</td>
				</tr>
				<tr>
				  <td>Dumbledore's Office</td>
				  <td>When Harry arrives and leaves Dumbledore's office. This DOES include time spent in the Pensieve.</td>
				</tr>
				  <td>Dursleys</td>
				  <td>This sums up Harry's time with the Dursleys. The prologue with the Dursleys in Sorcerer's Stone begins when Petunia finds Harry on the front step.</td>
				</tr>
				<tr>
				  <td>Forbidden Forest</td>
				  <td>Starting and ending when Harry goes past the trees in the Forbidden Forest.</td>
				<tr>
				  <td>Grimmauld Place</td>
				  <td>When Harry arrives and leaves Grimmauld Place.</td>
				</tr>
				<tr>
				  <td>Hogsmeade</td>
				  <td>Starting and ending when Harry leaves or comes back from a journey to Hogsmeade. Travel in the secret tunnels to Hogsmeade is included.</td>
				</tr>
				<tr>
				  <td>Hogwarts Express</td>
				  <td>Getting onto the train and leaving it.</td>
				</tr>
				<tr>
				  <td>Memories</td>
				  <td>This includes all Pensieve pages, along with Tom Riddle's Diary flashback in the Chamber of Secrets and Voldemorts flashback in Deathly Hallows.</td>
				</tr>
				<tr>
				<tr>
				  <td>The Ministry of Magic</td>
				  <td>Entering and leaving the Ministry of Magic. Entering the red telephone box is included as being in the Ministry.</td>
				</tr>
				  <td>Quidditch</td>
				  <td>Starting whistle to snitch catch. This sums up all games played.</td>
				</tr>
				<tr>	
				  <td>The Burrow</td>
				  <td>When Harry arrives and leaves the Burrow.</td>		
			  </tbody>
			</table>
		</div>
		<div class="col-lg-2 text-center"></div>
	</div>
	<!--Category Explanations End -->
<?php include 'footer.php'; ?>