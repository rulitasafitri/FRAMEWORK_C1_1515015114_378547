<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama Mahasiswa</label>
		<div class="col-sm-10">
		{!! Form::text('nama_mahasiswa',null,['class'=>'form-control','id'=>'nama_mahasiswa','placeholder'=>"nama"]) !!}
	</div>	
</div>
<div class="form-group">
		<label class="col-sm-2 control-label" id="nim">Nim Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::text('nim',null,['class'=>'form-control','id'=>'nim','placeholder'=>"nim"]) !!}
	</div>
</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="alamat">Alamat</label>
		<div class="col-sm-10">
		{!! Form::textarea('alamat_mhs',null,['class'=>'form-control','id'=>'alamat_mhs','placeholder'=>"alamat"]) !!}	
	</div>
</div>

<div class="form-group">
		<label class="col-sm-2 control-label">UserName</label>
		<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"username"]) !!}	
	</div>
</div>

<div class="form-group">
		<label class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"password"]) !!}	
	</div>
</div>

