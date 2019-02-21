<?php 
	/* 
	Template Name: Linkspage
	*/
?>

<div id="testId"></div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
axios.get('https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=3678.T&interval=5min&outputsize=full&apikey=82XHKCB1898RMDMK')
  .then(function (response) {
    document.getElementById("testId").innerHTML=`
    <table>
    <tbody>
        <tr>
            <td width="400">open</td>
            <td width="400">${response.data[Object.keys(response.data)[1]][Object.keys((response.data[Object.keys(response.data)[1]]))[0]]['1. open']}</td>        
        </tr>
        <tr>
            <td width="400">high</td>
            <td width="400">メーリングリスト作成</td>
        <tr>
            <td width="400">low</td>
            <td width="400">メーリングリスト作成</td>
        </tr>
        <tr>
            <td width="400">close</td>
            <td width="400">メーリングリスト作成</td>
        </tr>
        <tr>
            <td width="400">volume</td>
            <td width="400">メーリングリスト作成</td>
        </tr>
    </tbody>
    </table>`
    // handle success
    console.log([Object.keys((response.data[Object.keys(response.data)[1]]))[0]]);
    console.log((response.data[Object.keys(response.data)[1]])[Object.keys((response.data[Object.keys(response.data)[1]]))[0]]);
    
  })
</script>