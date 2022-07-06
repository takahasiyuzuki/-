<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>無題ドキュメント</title>
<style>
#wrapSampleForm {
    width: 500px;
    margin: 10px;
    padding: 10px;
    border: 1px solid gray;
    border-radius: 10px;
}
#wrapSampleForm {
    background-color: #f0f8ff;
}
#sampleTable {
    background-color: #ffffcc;
}
#sampleTable th {
    color: #000000 !important;
}
#sampleTable th,
#sampleTable td {
    font-size: 15px !important;
    border: 1px solid gray;
    background-color: #ffffcc;
}
#tableName {
    width: 20%;
}
#formArea {
    width: 15%;
}
#formAge {
    width: 15%;
}
#tableComent {
    width: 50%;
}
#sampleForm * {
    margin: 0 0 7px 0;
    vertical-align: text-top;
}

</style>
</head>

<body>


	<div id="wrapSampleForm">
    <form id="sampleForm" method="post" action="{{ route('crate') }}">
        @csrf
        【入力欄】
        <br>
        商品名：<input type="text" name="product_name">
        <br />
        メーカー：
            <select name="company_id">
                <option value="1" selected>1</option>
                <option>2</option>
                <option>3</option>
            </select>
        <br />
        価格：<input type="text" name="price">
        <br />
		在庫数：<input type="text" name="stock">
		<br />
        コメント：<input name="comment">コメント</textarea>
        <br />
        画像:<input type="file" name="img_path">
        <br />
    <!-- <button onclick="appendToTable()" type="submit">追加</button> -->
    <button  type="submit">追加</button>
</form>

<div class="mypage2">
<a href="{{ url('/mypage2') }}">商品情報登録画面</a>
</div>

<div class="mypage3">
<a href="{{ url('/mypage3') }}">商品情報詳細画面</a>
</div>


</div>
<table id="sampleTable">
    <tr>
        <th id="tableName">商品名</th>
        <th id="tableArea">メーカー</th>
        <th id="tableEn">価格</th>
		<th id="tableZaiko">在庫数</th>
        <th id="tableComent">コメント</th>
	    <th id="tableGazou">画像</th> 
		
    </tr>
    @foreach ($Products as $lalaproduct)
    <tbody>
        <td>{{ $lalaproduct->product_name }}</td>
        <td>{{ $lalaproduct->company_id }}</td>
        <td>{{ $lalaproduct->price }}</td>
        <td>{{ $lalaproduct->stock }}</td>
        <td>{{ $lalaproduct->comment }}</td>
        <td>{{ $lalaproduct->img_path }}</td>
        <td>id</td>
    </tbody>
    @endforeach
</table>

<script type="text/javascript">
function appendToTable() {
    var $formObject = document.getElementById( "sampleForm" );
    var $tableObject = document.getElementById( "sampleTable" );
    var $tr = "<tr>";
    $tr += "<td>" + $formObject.formName.value + "</td>";
    $tr += "<td>" + $formObject.formArea.value + "</td>";
    $tr += "<td>" + $formObject.formEn.value + "</td>";
	$tr += "<td>" + $formObject.formZaiko.value + "</td>";
    $tr += "<td>" + $formObject.formComent.value + "</td>";
	$tr += "<td>" + $formObject.formGazou.value + "</td>";
    $tr += "</tr>";
    $tableObject.insertAdjacentHTML( "beforeend", $tr );
}
	
</script>
</body>
</html>