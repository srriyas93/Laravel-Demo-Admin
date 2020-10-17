@extends("layout.header")
@extends("layout.left-sidebar")
@extends("layout.right-sidebar")
@section("title","Add new News")
 
<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add new News</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item active">Add new News</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form method="POST" action="/news" enctype="multipart/form-data">
            <div class="row clearfix">
                @csrf
                <div class="col-sm-12">
                <strong>News Title*</strong>
                    <div class="form-group">
                        <input id="news_title" name="news_title" type="text" class="form-control" required/>
                    </div>
                </div>
                <div class="col-sm-12">
                <strong>Description*</strong>
                    <div class="form-group">
                    <!--    <input id="news_short_description" name="news_short_description" type="text" class="form-control" required/>-->
                        <textarea id="news_description" name="news_description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                <strong>Image*</strong>(600px*400px)
                    <div class="form-group">
                        <input id="news_image" name="news_image" type="file" class="form-control" required/>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-danger waves-effect">PUBLISH NEWS</button>
                <button type="button" class="btn btn-danger bg-grey waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</section>

@extends("layout.footer")