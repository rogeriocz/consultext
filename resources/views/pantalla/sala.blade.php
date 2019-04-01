@extends('layout')

@section('content')
<meta HTTP-EQUIV="REFRESH" CONTENT="30;URL=http://localhost/consultaext/public/data">
<div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <!-- <div class="panel-heading">Urgencias</div> -->
                            <div class="table-responsive">
                                <table class="table table-hover manage-u-table">
                                    <thead>
                                        
                                        <tr>
                                            <th width="70" class="text-center">ESTATUS</th>
                                            <th>FICHA</th>
                                            <th>COD</th>
                                            <th>NOMBRE</th>
                                            <th>FECHA</th>
                                            {{--<th width="250">CATEGORY</th>
                                            <th width="300">MANAGE</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datos as $pacientes)
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td> {{$pacientes->nombre_completo}}
                                                <br/><span class="text-muted">Ficha: {{$pacientes->ficha}} , Cod: {{$pacientes->num_fam}}</span></td>
                                             <td>{{$pacientes->fecha_creacion}}
                                                <br/><span class="text-muted"> <!-- Past : teacher --> </span></td>
                                             <td> <!--daniel@website.com -->
                                                <br/><span class="text-muted"> <!--999 - 444 - 555--> </span></td>
                                            <td>
                                                <br/><span class="text-muted"> <!--10: 55 AM--></span></td>
                                            <td>
                                               <!--  <select class="form-control">
                                                    <option>Modulator</option>
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                    <option>Subscriber</option>
                                                </select> -->
                                            </td>
                                            <td>
                                                <!-- <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button> -->
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$datos->links()}}
                            </div>
                        </div>
                    </div>
                </div>
@stop