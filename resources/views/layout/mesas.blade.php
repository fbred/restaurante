@extends('layout.template')

@section('content')


        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-light">
                        Mesa 01

                        <div class="card-actions">
                            <a  class="btn" data-target="#modal-1">
                                <i class="fa fa-pencil-alt" data-toggle="modal" data-target="#modal-1"></i>
                            </a>

                            <a href="#" class="btn">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="mb-4">

                            <img src="{{asset('imgs/mesa.png')}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-light">
                        Mesa 03

                        <div class="card-actions">
                            <a  class="btn" data-target="#modal-1">
                                <i class="fa fa-pencil-alt" data-toggle="modal" data-target="#modal-1"></i>
                            </a>

                            <a href="#" class="btn">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="mb-4">

                            <img src="{{asset('imgs/mesa.png')}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-light">
                        Mesa 04

                        <div class="card-actions">
                            <a  class="btn" data-target="#modal-1">
                                <i class="fa fa-pencil-alt" data-toggle="modal" data-target="#modal-1"></i>
                            </a>

                            <a href="#" class="btn">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="mb-4">

                            <img src="{{asset('imgs/mesa.png')}}">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Pedido</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="single-select">Example select</label>
                            <select id="single-select" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <label for="single-select">Example select</label>
                            <select id="single-select" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <div class="card">
                            <div class="card-header bg-light">
                                Striped Rows
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Sales</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-nowrap">Samsung Galaxy S8</td>
                                            <td>31,589</td>
                                            <td>$800</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="text-nowrap">Google Pixel XL</td>
                                            <td>99,542</td>
                                            <td>$750</td>
                                            <td>3%</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="text-nowrap">iPhone X</td>
                                            <td>62,220</td>
                                            <td>$1,200</td>
                                            <td>0%</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="text-nowrap">OnePlus 5T</td>
                                            <td>50,000</td>
                                            <td>$650</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="text-nowrap">Google Nexus 6</td>
                                            <td>400</td>
                                            <td>$400</td>
                                            <td>7%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar Pedidos</button>
                    </div>
                </div>
            </div>


@endsection