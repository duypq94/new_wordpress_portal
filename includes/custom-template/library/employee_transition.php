<div class="employee-transistion">
	<div >
		<div class="select" >
			<p><b>TIMELINE: </b>&nbsp;&nbsp;
				<select name="timeline" id="timeline" onchange=singleSelectChangeValue()>
					<option value="2017">2017</option>                      
					<option value="2018" selected="selected">2018</option>
					<option value="2019">2019</option>
				</select>
			</p>
		</div>
		<div style="text-align: center;" >
			<table id="table" class="table"></table>
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
			for(var i = 0; i<4; i++) {
				result[i] = response.data.values[i][12];
			}
		})
		.catch(function (error) {console.log(error);});
	return result;
}

async function renderTable(){
	var newArr = new Array([4], [13]); 
	var changeValue = new Array([4], [13]); 
	var renderValue;
	var selObj = document.getElementById("timeline");
	var selValue = selObj.options[selObj.selectedIndex].text;
	var lastMonthValue = await checkLastMonth();
	await axios.get(`https://sheets.googleapis.com/v4/spreadsheets/1w1jC8OG5z64eu8B0Ur_4NGip_0Im6TaKEBSOtAoNkT4/values/${selValue}?key=AIzaSyACRi5yaAcwIOF9QY3Fo1ful5AAyC38NEI`)
  	.then(function (response) 
		{
	  	for(var i = 0; i<4; i++){
		  		if(!newArr[i]) {
					newArr[i]=[];
		  		}
		  		if(!changeValue[i]) {
					changeValue[i]=[];
		  		}
				for(var j = 0; j<13; j++){
					if(response.data.values[i][j]) {
						newArr[i][j]=response.data.values[i][j];
						if( j === 1 && lastMonthValue.length === 4){
							count= response.data.values[i][j]-lastMonthValue[i];
						} else {
							count= response.data.values[i][j]-response.data.values[i][j-1];
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
				} 
	  	}
		renderValue = `
		<tr>
			<th>&nbsp;</th>
				<th>1月</th>
				<th>2月</th>
			<th>3月</th>
			<th>4月</th>
			<th>5月</th>
			<th>6月</th>
			<th>7月</th>
			<th>8月</th>
			<th>9月</th>
			<th>10月</th>
			<th>11月</th>
			<th>12月</th>
			</tr>
			<tr>
				<td>正社員</td>	
			<td>${newArr[1][1]} <br>${changeValue[1][1]}</td>
			<td>${newArr[1][2]} <br>${changeValue[1][2]}</td>
			<td>${newArr[1][3]} <br>${changeValue[1][3]}</td>
			<td>${newArr[1][4]} <br>${changeValue[1][4]}</td>
			<td>${newArr[1][5]} <br>${changeValue[1][5]}</td>
			<td>${newArr[1][6]} <br>${changeValue[1][6]}</td>
			<td>${newArr[1][7]} <br>${changeValue[1][7]}</td>
			<td>${newArr[1][8]} <br>${changeValue[1][8]}</td>
			<td>${newArr[1][9]} <br>${changeValue[1][9]}</td>
			<td>${newArr[1][10]} <br>${changeValue[1][10]}</td>
			<td>${newArr[1][11]} <br>${changeValue[1][11]}</td>
			<td>${newArr[1][12]} <br>${changeValue[1][12]}</td>
			</tr>
			<tr>
			<td>派遣</td>
			<td>${newArr[2][1]} <br>${changeValue[2][1]}</td>
			<td>${newArr[2][2]} <br>${changeValue[2][2]}</td>
			<td>${newArr[2][3]} <br>${changeValue[2][3]}</td>
			<td>${newArr[2][4]} <br>${changeValue[2][4]}</td>
			<td>${newArr[2][5]} <br>${changeValue[2][5]}</td>
			<td>${newArr[2][6]} <br>${changeValue[2][6]}</td>
			<td>${newArr[2][7]} <br>${changeValue[2][7]}</td>
			<td>${newArr[2][8]} <br>${changeValue[2][8]}</td>
			<td>${newArr[2][9]} <br>${changeValue[2][9]}</td>
			<td>${newArr[2][10]} <br>${changeValue[2][10]}</td>
			<td>${newArr[2][11]} <br>${changeValue[2][11]}</td>
			<td>${newArr[2][12]} <br>${changeValue[2][12]}</td>
			</tr>
			<tr>
			<td>業務委託</td>
			<td>${newArr[3][1]} <br>${changeValue[3][1]}</td>
			<td>${newArr[3][2]} <br>${changeValue[3][2]}</td>
			<td>${newArr[3][3]} <br>${changeValue[3][3]}</td>
			<td>${newArr[3][4]} <br>${changeValue[3][4]}</td>
			<td>${newArr[3][5]} <br>${changeValue[3][5]}</td>
			<td>${newArr[3][6]} <br>${changeValue[3][6]}</td>
			<td>${newArr[3][7]} <br>${changeValue[3][7]}</td>
			<td>${newArr[3][8]} <br>${changeValue[3][8]}</td>
			<td>${newArr[3][9]} <br>${changeValue[3][9]}</td>
			<td>${newArr[3][10]} <br>${changeValue[3][10]}</td>
			<td>${newArr[3][11]} <br>${changeValue[3][11]}</td>
			<td>${newArr[3][12]} <br>${changeValue[3][12]}</td>
			</tr>`
		document.getElementById('table').innerHTML= renderValue;
			}).catch(function (error) { console.log(error);});
}

async function singleSelectChangeValue() {
	await renderTable();
}
</script>
