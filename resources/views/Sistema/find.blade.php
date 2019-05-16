@extends('layouts.default')
@section('content')
<div class="row">
		<section class="content">
			<div class="col-md-8 col-md-offset-2">

				<div class="panel panel-default">
					<div class="panel-heading">
				    		<h3 class="panel-title">Pesquisar Sistemas</h3>
				 	</div>
					<div class="panel-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Sigla</th>
                        <th scope="col">Email de Atendimento</th>
                        <th scope="col">URL</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
					
                    @foreach ($results as $result)

                    

                        <tr>
                            <th scope="row">{{ $result->id }}</th>
                            <td>{{ $result->descricao }}</td>
                            <td>{{ $result->sigla }}</td>
                            <td>{{ $result->email }}</td>
                            <td>{{ $result->url }}</td>
                            <td>@if ($result->status === 0)
                                    ATIVO
                                @elseif ($result->status === 1)
                                    INATIVO
                                @endif

                                </td>
                            <td>Editar</td>
                        </tr>
                    @endforeach

                    </tbody>
                    </table>
			    			
			    		 <div class="row">
							
							<div class="col-xs-12 col-sm-12 col-md-12">
								
								<a href="{{ route('sistema.index') }}" class="btn btn-info btn-block" >Voltar</a>
							</div>	
							
					     </div>
			    		
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection