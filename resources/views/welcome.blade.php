@extends('layouts.layout')

@section('content')
       
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                @foreach($testMonitor as $testMonitorItem)
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="fa fa-thermometer-full"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">C°  <span class="count">{{$testMonitorItem->temperature}}</span></div>
                                            <div class="stat-heading">Temperatura</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-drop"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{$testMonitorItem->salinidad}}</span></div>
                                            <div class="stat-heading">Salinidad</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-eyedropper"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{$testMonitorItem->ph}}</span></div>
                                            <div class="stat-heading">Ph</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Traffic </h4>
                            </div>
                            <div class="row">

                                <div class="col-lg-8">
                                    <div class="card-body">
                                         <h1>Home Construction<br>
                                                & Remodeling</h1>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p>
                                    </div>
                                </div>
                            </div> <!-- /.row -->
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <strong class="card-header">Calculadora</strong>



                                 <div class="row">
                                     <div class="col-lg-6">
                                            <div class="card">
                                                 <div class="card-header">
                                                        </div>
                                                         <div class="card-body">
                                <!-- Credit Card -->
                                                <div id="pay-invoice">
                                                <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Calculo de amoniaco toxico</h3>
                                        </div>
                                        <hr>
                                        <div id="form" >
                                            <div class="form-group text-center">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><i class="text-muted fa fa-thermometer-full"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-tint"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-eercast"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-free-code-camp"></i></li>
                                                </ul>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-TAN" class="control-label mb-1">TAN</label>
                                                <input id="cc-TAN" name="cc-tan" type="number" step="0.01" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div>
                                                <button id="calculating-button" type="button" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Calcular</span>
                                                </button>
                                            </div>
                                            <div class="form-group">
                                                <div class="card-body">
                                                    <label class="control-label">Amoniaco NH3</label>
                                                    <div class="card-body">
                                                        <label id="amoniacoNH3"></label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="card-body">
                                                    <label class="control-label">Amoniaco Ionizado</label>
                                                    <div class="card-body">
                                                        <label id="amoniacoIonizadoId"></label>
                                                    </div>
                                                    
                                                </div>
                                                <div id="idRegistrar" style="visibility: hidden;">
                                                <button id="registrar-button" type="button" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Registrar</span>
                                                </button>
                                            </div>
                                               
                                            </div>
                                            
                                        </div>
                                                </div>
                                                </div>

                                                </div>
                                                 </div> <!-- .card -->

                                                </div><!--/.col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Company</strong><small> Form</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">Company</label><input type="text" id="company" placeholder="Enter your company name" class="form-control"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">VAT</label><input type="text" id="vat" placeholder="DE1234567890" class="form-control"></div>
                                <div class="form-group"><label for="street" class=" form-control-label">Street</label><input type="text" id="street" placeholder="Enter street name" class="form-control"></div>
                                <div class="row form-group">
                                    <div class="col-8">
                                        <div class="form-group"><label for="city" class=" form-control-label">City</label><input type="text" id="city" placeholder="Enter your city" class="form-control"></div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Postal Code</label><input type="text" id="postal-code" placeholder="Postal Code" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="country" class=" form-control-label">Country</label><input type="text" id="country" placeholder="Country name" class="form-control"></div>
                            </div>
                        </div>
                    </div>

                  

                   
    
                </div>

<!--  Traffic  -->
                <div class="row" id="grafica">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Traffic </h4>
                            </div>
                            <div class="row">

                                <div class="col-lg-8">
                                    <div class="card-body">

                                        {!! $charttemp->container() !!}
                                        

                                    </div>
                                </div>
                            </div> <!-- /.row -->
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->






                            </div>
                        </div>
                    </div>
                </div>



                <div class="clearfix"></div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    <!-- /#right-panel -->


 {!! $charttemp->script() !!}


@include('layouts.footer')            



@endsection