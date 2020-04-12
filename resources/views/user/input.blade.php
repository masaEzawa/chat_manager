@extends('layouts.app')

@section('content')

	<!-- メインコンテンツ -->
	<div class="card">
		<div class="card-header">ユーザー一覧</div>
		
		<div class="card-body">

			{{ Form::model( $data, ['method' => 'post', 'route' => [ $route . '.comp' ] ] ) }}
			
				{{ Form::hidden( 'id', null ) }}
				<div class="row">
					<div class="panel panel-default col-sm-12">
						<table class="table table-bordered tbl-txt-center tbl-input-line">
							<tbody>
								{{-- ユーザー名 --}}
								<tr>
									<th class="bg-primary"> ユーザー名 <span class="color-dpink">※</span></th>
									<td>
										<?php
										$addClass = ( $errors->has('name') )? ' is-invalid' : ''; 
										?>
										{{ Form::text('name', null, ['class' => 'form-control' . $addClass]) }}
										@if($errors->has('name'))
											<div class="invalid-feedback">
											　　{{ $errors->first('name') }}
											</div>
										@endif 
									</td>
								</tr>

								{{-- メールアドレス --}}
								<tr>
									<th class="bg-primary">メールアドレス <span class="color-dpink">※</span></th>
									<td>
										<?php
										$addClass = ( $errors->has('email') )? ' is-invalid' : ''; 
										?>
										{{ Form::text('email', null, ['class' => 'form-control' . $addClass]) }}
										@if($errors->has('email'))
											<div class="invalid-feedback">
											　　{{ $errors->first('email') }}
											</div>
										@endif 
									</td>
								</tr>

								

								{{-- パスワード --}}
								<tr>
									<th class="bg-primary">パスワード</th>
									<td>
										{{-- 編集の時 --}}
										@if( isset( $input_mode ) && $input_mode === "edit" )
											<a href="">パスワードを変更する</a>
										@else
											<?php
											$addClass = ( $errors->has('password') )? ' is-invalid' : ''; 
											?>
											{{ Form::text('password', null, ['class' => 'form-control' . $addClass]) }}
											@if($errors->has('password'))
												<div class="invalid-feedback">
												　　{{ $errors->first('password') }}
												</div>
											@endif 
										@endif
									</td>
								</tr>
							
								{{-- 機能権限 --}}
								<tr>
									<th class="bg-primary">機能権限 <span class="color-dpink">※</span></th>
									<td>
										<?php
										$roles = \Config('const.roles');
										$roles = ['' => '----'] + $roles;
										$addClass = ( $errors->has('user_type') )? ' is-invalid' : ''; 
										?>
										{{ Form::select('user_type', $roles, null, ['class' => 'form-control' . $addClass]) }}
										@if($errors->has('user_type'))
											<div class="invalid-feedback">
											　　{{ $errors->first('user_type') }}
											</div>
										@endif 
									</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>

				<div class="row">
					{{-- 戻るボタン --}}
					<div class="col-sm-2">
						<button type="button" onClick="location.href='{{ url( $route . '/' ) }}'" class="btn btn-warning btn-block btn-embossed">
							<i class="fa fa-mail-reply"></i> 戻る
						</button>
					</div>
					
					{{-- 確認画面 --}}
					<div class="col-sm-4 offset-sm-2">
						{{ Form::submit( '登録', ['class' => 'btn btn-info btn-block btn-embossed']) }}
					</div>

					<div class="col-sm-2">
					</div>
				</div>
			{{ Form::close() }}

		</div>
  	</div>

@stop
