@extends('layouts.default')
@section('content')
	<div class="row">
		<section class="content">
			<div class="col-md-8 col-md-offset-2">
				  @if (count($errors) > 0)
			        <div class="alert alert-danger">
			            <strong>Opsss!</strong> Aconteceu algo não esperado!<br><br>
			            <ul>
			                @foreach ($errors->all() as $error)
			                    <li>{{ $error }}</li>
			                @endforeach
			            </ul>
			        </div>
			    @endif
			    @if(Session::has('success'))
				    <div class="alert alert-info">
				      {{Session::get('success')}}
				    </div>
				@endif
				<div class="panel panel-default">
					<div class="panel-heading">
				    		<h3 class="panel-title">Manter Sistema - TE001 - Pesquisa de Sistema</h3>
				 	</div>
					<div class="panel-body">
			
					
						<div class="table-container">
    						<form method="POST" action="/sistema/find"  role="form">
    						{{ csrf_field() }}
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="url">Descricao</label>

			    					<div class="form-group">
			                <input type="text" name="descricao" id="descricao" class="form-control input-sm" maxlength="100">
			    					</div>
			    				</div>
			    				<div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="url">Sigla</label>

			    					<div class="form-group">
			    						<input type="text" name="sigla" id="sigla" class="form-control input-sm" maxlength="10">
			    					</div>
			    				</div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="url">Email de atendimento do sistema</label>

			    					<div class="form-group">
			    						<input type="text" name="email" id="email" class="form-control input-sm" maxlength="100">
			    					</div>
			    				</div>

			    			</div>
	   		
			    			
			    		 <div class="row">
							
							<div class="col-xs-4 col-sm-4 col-md-4">
                            <input type="submit"  value="Pesquisar" class="btn btn-success btn-block">
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
								<input type="reset"  value="Limpar Pesquisa" class="btn btn-warning btn-block">
                                </div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
								<a href="{{ route('sistema.create') }}" class="btn btn-primary btn-block" >Novo Sistema</a>
							</div>	
							
					     </div>
			    		</form>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection