<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cube Algorithm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Cube Algorithm</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="https://github.com/henryalejo/rappilaravel">Git Hub Code</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="row" style="min-height:50px">
    </div>
    <div class="container">
      <div class="row">
        <div class="" id="cubeform">
            <?=Form::open(['route' => 'cube.algorithm', 'class' => 'form-vertical'])?>
            <fieldset class="form-group">
              <h2>
                <?=Form::label('datatext','Write The test Case Here')?>
              </h2>
            <?=Form::textarea('testcases  ', 'testcase', ['id'=>'datatext', 'class'=>'form-control'], ['required'])?>
            <?=Form::submit('Evaluate', ['class'=>'btn btn-success form-control'])?>
          </fieldset>
            <?=Form::close()?>
          </div>
      </div>
      <div class="row">
        <h3>Result</h3>
      </div>
      <div class="row">
        <div class="jumbotron">
          <div class="">
            my result
          </div>
        </div>
      </div>
    </div>

    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
