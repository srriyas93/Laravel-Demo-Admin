@extends("layout.header")
@extends("layout.left-sidebar")
@extends("layout.right-sidebar")
@section("title","News")

<!-- Main Content -->
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>News</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                            <li class="breadcrumb-item active">News</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                        <button class="btn btn-success btn-icon float-right" ><a href="/news/create"><i class="zmdi zmdi-plus"></i></a></button>
                    </div>
                </div>
            </div>
            <div id="DisplayPlan" class="container-fluid">
                <div class="row clearfix">
                    <div id="DisplayPlan" class="col-md-12 col-sm-12 col-xs-12">
                                <div class="card project_list">
                                    <div class="table-responsive">
                                    <!--<h6><strong><i class="zmdi zmdi-chart"></i></strong></h6>-->
                                    <table class="table table-hover c_table theme-color">
                                            <thead>
                                                <tr>
                                                    <th>News Title</th>
                                                    <th>Description</th>
                                                    <th>Published Date</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($News as $news) 
                                            <tr>
                                              
                                                <td><strong>{{$news -> title}}</strong></td>
                                                <td><strong>{{$news -> description}}</strong></td>
                                                <td><strong>{{\Carbon\Carbon::parse($news->created_at)->format('d/m/Y')}}</strong></td>
                                                
                                            <td class="aligncenter">
                                                <div class="btn-group dropleft">
                                                    <a id="btndropdown" class="mousehand" data-toggle="dropdown" href="javascript:void()" data-activates="dropdown" aria-expanded="false"><i class="zmdi zmdi-hc-fw"></i></a>
                                                    <div id="dropdown"class="dropdown-menu">
                                                        <a class="dropdown-item" href="/news/{{$news->id}}/edit" title="Edit">
                                                            <i class="zmdi zmdi-hc-fw margin-right10"></i>Edit
                                                        </a>                                                        
                                                    </div>
                                                </div>
                                            </td>       
                                            </tr>
                                            @endforeach
                                            </tbody>
                                    </table>
                                    </div>
                                </div>                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    @extends("layout.footer")