<div class="card py-3 m-b-30">
<div class="card-body">

<h4>Thông tin khách hàng</h4><br>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Chọn nhà hàng</label>
<select name="store_id" class="form-control" required="required" id="store_id">
<option value="">Chọn</option>
@foreach($users as $u)
<option value="{{ $u->id }}">{{ $u->name }}</option>
@endforeach
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Số điện thoại</label>
{!! Form::text('phone',$data->phone,['id' => 'code','required' => 'required','class' => 'form-control','onchange' => 'getUser(this.value)'])!!}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Tên khách hàng</label>
{!! Form::text('name',$data->name,['id' => 'name','required' => 'required','class' => 'form-control'])!!}
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Địa chỉ</label>
{!! Form::text('address',$data->address,['id' => 'address','required' => 'required','class' => 'form-control'])!!}
</div>
</div>
</div>
</div>

<div class="card py-3 m-b-30">
<div class="card-body">

<h4>Chi tiết đơn hàng</h4><br>

@if($data->id)

@include('admin.order.item')

@endif

<span id="item"></span>

<br>
<button type="button" class="btn btn-info" onClick="AddMore();">Thêm sản phẩm</button>

</div>
</div>

<button type="submit" class="btn btn-success btn-bold">Lưu thay đổi</button>

<SCRIPT>

function getUser(id)
{

var xmlhttp;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
	xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
	var t = JSON.parse(xmlhttp.responseText);

	if(t.name)
	{
		document.getElementById("name").value=t.name;
	}
	
	if(t.address)
	{
		document.getElementById("address").value=t.address;
	}
}
}
	xmlhttp.open("GET","{{ Asset(env('admin').'/getUser') }}/"+id,true);
	xmlhttp.send();
}

function AddMore() {
    
    var sid = document.getElementById("store_id").value;
	
	$("<DIV>").load("{{ Asset(env('admin').'/orderItem?store_id=') }}"+sid, function() {
	
	$("#item").append($(this).html());
	
	});


}
function Remove(id) {
	$(id).remove();
}
</SCRIPT>
<br>