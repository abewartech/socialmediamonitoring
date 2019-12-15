@extends(backpack_view('blank'))
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-facebook">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="text-value">9.823</div>
                            <div>Jumlah Mention</div>
                        </div>
                        <div class="col">
                            <i class="fab fa-facebook-square fa-5x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-twitter">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="text-value">9.823</div>
                            <div>Jumlah Mention</div>
                        </div>
                        <div class="col">
                            <i class="fab fa-twitter-square fa-5x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white ig">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="text-value">9.823</div>
                            <div>Jumlah Mention</div>
                        </div>
                        <div class="col">
                            <i class="fab fa-instagram fa-5x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="text-value">9.823</div>
                            <div>Jumlah Mention</div>
                        </div>
                        <div class="col">
                            <i class="fab fa-youtube fa-5x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4 class="card-title mb-0">Jumlah Mention</h4>
                            <div class="small text-muted">November 2017</div>
                        </div>

                        <div class="col-sm-7 d-none d-md-block">
                            <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                                <label class="btn btn-outline-secondary">
                                    <input id="option1" type="radio" name="options" autocomplete="off"> Day
                                </label>
                                <label class="btn btn-outline-secondary active">
                                    <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Month
                                </label>
                                <label class="btn btn-outline-secondary">
                                    <input id="option3" type="radio" name="options" autocomplete="off"> Year
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="chart-wrapper">
                        <canvas id="myChart" height="405" width="1027"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Sentimen</h4>
                    <canvas class="mb-0" id="myPie" height="auto" width="100%"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="brand-card">
                <div class="brand-card-header bg-facebook"><i class="fab fa-facebook-square"></i>
                </div>
                <div class="brand-card-body">
                    <div>
                        <div class="text-value">89k</div>
                        <div class="text-uppercase text-muted small">friends</div>
                    </div>
                    <div>
                        <div class="text-value">459</div>
                        <div class="text-uppercase text-muted small">feeds</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="brand-card">
                <div class="brand-card-header bg-twitter"><i class="fab fa-twitter-square"></i>
                </div>
                <div class="brand-card-body">
                    <div>
                        <div class="text-value">973k</div>
                        <div class="text-uppercase text-muted small">followers</div>
                    </div>
                    <div>
                        <div class="text-value">1.792</div>
                        <div class="text-uppercase text-muted small">tweets</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="brand-card">
                <div class="brand-card-header ig"><i class="fab fa-instagram"></i>
                </div>
                <div class="brand-card-body">
                    <div>
                        <div class="text-value">500+</div>
                        <div class="text-uppercase text-muted small">contacts</div>
                    </div>
                    <div>
                        <div class="text-value">292</div>
                        <div class="text-uppercase text-muted small">feeds</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="brand-card">
                <div class="brand-card-header bg-danger"><i class="fab fa-youtube"></i>
                </div>
                <div class="brand-card-body">
                    <div>
                        <div class="text-value">894</div>
                        <div class="text-uppercase text-muted small">followers</div>
                    </div>
                    <div>
                        <div class="text-value">92</div>
                        <div class="text-uppercase text-muted small">circles</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Komparasi Sentimen per Topik</div>
                <div class="card-body p-0">
                    <table class="table table-responsive-sm table-striped mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center"><i class="icon-people"></i></th>
                                <th>User</th>
                                <th class="text-center">Country</th>
                                <th>Usage</th>
                                <th>Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar">1</div>
                                </td>
                                <td>
                                    <div>Yiorgos Avraamu</div>
                                    <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                </td>
                                <td class="text-center"><i class="flag-icon flag-icon-us h4 mb-0" id="us"
                                        title="us"></i></td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>50%</strong></div>
                                        <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10,
                                                2015</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small text-muted">Last login</div><strong>10 sec ago</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar">2</div>
                                </td>
                                <td>
                                    <div>Avram Tarasios</div>
                                    <div class="small text-muted"><span>Recurring</span> | Registered: Jan 1, 2015</div>
                                </td>
                                <td class="text-center"><i class="flag-icon flag-icon-br h4 mb-0" id="br"
                                        title="br"></i></td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>10%</strong></div>
                                        <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10,
                                                2015</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small text-muted">Last login</div><strong>5 minutes ago</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar">3</div>
                                </td>
                                <td>
                                    <div>Quintin Ed</div>
                                    <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                </td>
                                <td class="text-center"><i class="flag-icon flag-icon-in h4 mb-0" id="in"
                                        title="in"></i></td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>74%</strong></div>
                                        <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10,
                                                2015</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 74%"
                                            aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small text-muted">Last login</div><strong>1 hour ago</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar">4</div>
                                </td>
                                <td>
                                    <div>Enéas Kwadwo</div>
                                    <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                </td>
                                <td class="text-center"><i class="flag-icon flag-icon-fr h4 mb-0" id="fr"
                                        title="fr"></i></td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>98%</strong></div>
                                        <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10,
                                                2015</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 98%"
                                            aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small text-muted">Last login</div><strong>Last month</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
        <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Komparasi Topik</h4>
                    <canvas class="mb-0" id="myDonat" height="auto" width="100%"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
