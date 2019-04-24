<div class="employee-transistion">
	<div >
		<div class="select" >
			<p><b>TIMELINE: </b>&nbsp;&nbsp;
				<select name="timeline" id="timeline" onchange=singleSelectChangeValue()>
					<option value="2017">2017</option>                      
					<option value="2018">2018</option>
					<option value="2019" selected="selected">2019</option>
				</select>
			</p>
		</div>
    <br>
    <h5>MDHD</h5>
		<div style="text-align: center; margin-top: 10px;" >
			<table id="table_mdhd_nichi" class="table"></table>
		</div>
		<br>
    <h5>MDHD</h5>
		<div style="text-align: center; margin-top: 10px;" >
			<table id="table_mdhd_matsujitsu" class="table"></table>
		</div>
		<br>
    <h5>MD</h5>
		<div style="text-align: center; margin-top: 10px;" >
			<table id="table_md_nichi" class="table"></table>
		</div>
		<br>
    <h5>MD</h5>
		<div style="text-align: center; margin-top: 10px;" >
			<table id="table_md_matsujitsu" class="table"></table>
		</div>
	</div>
</div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
renderTable();

async function checkLastMonth() {
	var selObj = document.getElementById("timeline");
	var selValue = selObj.options[selObj.selectedIndex].value;
	var lastMonth = selValue - 1 ;
	var result = [];
	await axios.get(`https://sheets.googleapis.com/v4/spreadsheets/1w1jC8OG5z64eu8B0Ur_4NGip_0Im6TaKEBSOtAoNkT4/values/${lastMonth}?key=AIzaSyACRi5yaAcwIOF9QY3Fo1ful5AAyC38NEI`)
		.then(function (response) {
			for(var i = 0; i<11; i++) {
				result[i] = response.data.values[i][12];
			}
		})
		.catch(function (error) {console.log(error);});
	return result;
}

function writeTable(response, location, title, lastMonthValue){
  var newArr = new Array([10], [13]); 
	var changeValue = new Array([10], [13]); 
  var taps = new Array(11);
  var month = 0;
  taps[0] = `<th>${response.data.values[location][0]}</th>`;
  taps[1] = '<td><b>役員</b></td>	';
  taps[2] = '<td><b>社員<br>（執行役員含）</b></td>	';
  taps[3] = '<td><b>社員内<br>（出向出し）</b></td>	';
  taps[4] = '<td><b>社員<br>（出向受け）</b></td>	';
  taps[5] = '<td><b>嘱託</b></td>';
  taps[6] = '<td><b>契約社員</b></td>';
  taps[7] = '<td><b>アルバイト</b></td>';
  taps[8] = '<td><b>パート</b></td>';
  taps[9] = '<td><b>派遣</b></td>';
  taps[10] = '<td style="background-color: #fff2cc;"><b>合計</b></td>';
	for(var i = 0; i<11; i++){
    tabtitle = title + i.toString()
		if(!newArr[i]) {
					newArr[i]=[];
		  		}
		  		if(!changeValue[i]) {
					changeValue[i]=[];
		  		}
        var row = i + location; 
				for(var j = 1; j<13; j++){
					if(response.data.values[row][j]) {
						newArr[i][j]=response.data.values[row][j];
						if( j === 1 && lastMonthValue.length === 10){
							count= response.data.values[row][j]-lastMonthValue[i];
						} else {
							count= response.data.values[row][j]-response.data.values[row][j-1];
						}
							if(Number.isNaN(count) || count === 0) {
								changeValue[i][j]="";
							} else {
								if(count > 0) {
									changeValue[i][j]=`(<i style="color: green;">+${count}</i>)`;
								} 
								if(count < 0) {
									changeValue[i][j]=`(<i style="color: red;">${count}</i>)`;
								}
							}
					} else {
						newArr[i][j] = "ー";
						changeValue[i][j]="";
					}
          switch(i) {
            case 0:
             taps[0] +=`<th>${j}月</th>`;
             break;
            case 10:
             taps[10] +=`<td style="background-color: #fff2cc;">${newArr[i][j]} <br>${changeValue[i][j]}</td>`;
             break;
            default:
             taps[i] +=`<td>${newArr[i][j]} <br>${changeValue[i][j]}</td>`;
          }
				} 
        document.getElementById(tabtitle).innerHTML= taps[i];
	  	}
}

async function renderTable(){
	var renderValue;
	var selObj = document.getElementById("timeline");
	var selValue = selObj.options[selObj.selectedIndex].text;
	var lastMonthValue = await checkLastMonth();
	var tabelMDHD1 = "";
	var tabelMDHD2 = "";
	var tabelMD1 = ""; 
	var tabelMD2 = "";
	await axios.get(`https://sheets.googleapis.com/v4/spreadsheets/1w1jC8OG5z64eu8B0Ur_4NGip_0Im6TaKEBSOtAoNkT4/values/${selValue}?key=AIzaSyACRi5yaAcwIOF9QY3Fo1ful5AAyC38NEI`)
  	.then(function (response) 
		{
			for(var i = 0; i < 11; i++){
				tabelMDHD1 += `<tr id="mdhd_nichi_${i}"></tr>`;
				tabelMDHD2 += `<tr id="mdhd_matsujitsu_${i}"></tr>`;
				tabelMD1 += `<tr id="md_nichi_${i}"></tr>`;
				tabelMD2 += `<tr id="md_matsujitsu_${i}"></tr>`;
			}
		document.getElementById('table_mdhd_nichi').innerHTML= tabelMDHD1;
		document.getElementById('table_mdhd_matsujitsu').innerHTML= tabelMDHD2;
		document.getElementById('table_md_nichi').innerHTML= tabelMD1;
		document.getElementById('table_md_matsujitsu').innerHTML= tabelMD2;
    writeTable(response,1,"mdhd_nichi_","");
		writeTable(response,14,"mdhd_matsujitsu_","");
		writeTable(response,27,"md_nichi_","");
		writeTable(response,40,"md_matsujitsu_","");
			}).catch(function (error) { console.log(error);});
}

async function singleSelectChangeValue() {
	await renderTable();
}
</script>
