@extends('admin.components.main')
@section('main-section')


          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Icons</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Base</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Line Awesome</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Font Awesome Icons</div>
                    <div class="card-category">
                      Modern Font Icon from
                      <a class="link" href="https://fontawesome.com"
                        >Font Awesome</a
                      >
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="row-demo-icon" class="row"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endsection