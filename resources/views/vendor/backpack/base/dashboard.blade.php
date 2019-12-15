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
                    <div class="chart-wrapper">
                        <div class="chartjs-size-monitor"
                            style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="social-box-chart-1" height="96" width="243" class="chartjs-render-monitor"
                            style="display: block; width: 243px; height: 96px;"></canvas>
                        <div id="social-box-chart-1-tooltip" class="chartjs-tooltip top"
                            style="opacity: 0; left: 122px; top: 25.6px;">
                            <div class="tooltip-header">
                                <div class="tooltip-header-item">April</div>
                            </div>
                            <div class="tooltip-body">
                                <div class="tooltip-body-item"><span class="tooltip-body-item-color"
                                        style="background-color: rgb(255, 255, 255);"></span><span
                                        class="tooltip-body-item-label">My First dataset</span><span
                                        class="tooltip-body-item-value">84</span></div>
                            </div>
                        </div>
                    </div>
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
                    <div class="chart-wrapper">
                        <div class="chartjs-size-monitor"
                            style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="social-box-chart-2" height="96" width="243" class="chartjs-render-monitor"
                            style="display: block; width: 243px; height: 96px;"></canvas>
                    </div>
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
                    <div class="chart-wrapper">
                        <div class="chartjs-size-monitor"
                            style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="social-box-chart-3" height="96" width="243" class="chartjs-render-monitor"
                            style="display: block; width: 243px; height: 96px;"></canvas>
                    </div>
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
                    <div class="chart-wrapper">
                        <div class="chartjs-size-monitor"
                            style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="social-box-chart-4" height="96" width="243" class="chartjs-render-monitor"
                            style="display: block; width: 243px; height: 96px;"></canvas>
                    </div>
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
        <div class="col-md-12">
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
                                <th class="text-center">Payment Method</th>
                                <th>Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar"><img class="img-avatar" src="img/avatars/1.jpg"
                                            alt="admin@bootstrapmaster.com"><span
                                            class="avatar-status badge-success"></span></div>
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
                                <td class="text-center"><i class="fa fa-cc-mastercard" style="font-size:24px"></i></td>
                                <td>
                                    <div class="small text-muted">Last login</div><strong>10 sec ago</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar"><img class="img-avatar" src="img/avatars/2.jpg"
                                            alt="admin@bootstrapmaster.com"><span
                                            class="avatar-status badge-danger"></span></div>
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
                                <td class="text-center"><i class="fa fa-cc-visa" style="font-size:24px"></i></td>
                                <td>
                                    <div class="small text-muted">Last login</div><strong>5 minutes ago</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar"><img class="img-avatar" src="img/avatars/3.jpg"
                                            alt="admin@bootstrapmaster.com"><span
                                            class="avatar-status badge-warning"></span></div>
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
                                <td class="text-center"><i class="fa fa-cc-stripe" style="font-size:24px"></i></td>
                                <td>
                                    <div class="small text-muted">Last login</div><strong>1 hour ago</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar"><img class="img-avatar" src="img/avatars/4.jpg"
                                            alt="admin@bootstrapmaster.com"><span
                                            class="avatar-status badge-secondary"></span></div>
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
                                <td class="text-center"><i class="fa fa-paypal" style="font-size:24px"></i></td>
                                <td>
                                    <div class="small text-muted">Last login</div><strong>Last month</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar"><img class="img-avatar" src="img/avatars/5.jpg"
                                            alt="admin@bootstrapmaster.com"><span
                                            class="avatar-status badge-success"></span></div>
                                </td>
                                <td>
                                    <div>Agapetus Tadeáš</div>
                                    <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                </td>
                                <td class="text-center"><i class="flag-icon flag-icon-es h4 mb-0" id="es"
                                        title="es"></i></td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>22%</strong></div>
                                        <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10,
                                                2015</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 22%"
                                            aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-center"><i class="fa fa-google-wallet" style="font-size:24px"></i></td>
                                <td>
                                    <div class="small text-muted">Last login</div><strong>Last week</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <div class="avatar"><img class="img-avatar" src="img/avatars/6.jpg"
                                            alt="admin@bootstrapmaster.com"><span
                                            class="avatar-status badge-danger"></span></div>
                                </td>
                                <td>
                                    <div>Friderik Dávid</div>
                                    <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                </td>
                                <td class="text-center"><i class="flag-icon flag-icon-pl h4 mb-0" id="pl"
                                        title="pl"></i></td>
                                <td>
                                    <div class="clearfix">
                                        <div class="float-left"><strong>43%</strong></div>
                                        <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10,
                                                2015</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 43%"
                                            aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-center"><i class="fa fa-cc-amex" style="font-size:24px"></i></td>
                                <td>
                                    <div class="small text-muted">Last login</div><strong>Yesterday</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
