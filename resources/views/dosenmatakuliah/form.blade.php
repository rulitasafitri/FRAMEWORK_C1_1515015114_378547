<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id">Dosen</label>
		<div class="col-sm-10">
		{!! Form::select('dosen_id',$dosen->listDosenDanNip(),null,['class'=>'form-control','id' => 'dosen_id','placeholder'=>"dosen"]) !!}
	</div>	
</div>

<div class="form-group">
		<label class="col-sm-2 control-label" id="matakuliah_id">Matakuliah</label>
	<div class="col-sm-10">
		{!! Form::select('matakuliah_id',$matakuliah->listMatakuliahdanDosen('title','id'),null,['class'=>'form-control','id' => 'matakuliah_id','placeholder'=>"matakuliah"]) !!}
	</div>
</div>
