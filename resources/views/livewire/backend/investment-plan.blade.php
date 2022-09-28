@section('title', 'Investment Plans')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Investment Plans</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/Authorized/Admin-Investment-Plan-Add">Dashboards</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <form class="row g-3 needs-validation" novalidate method="POST" action="">
            @csrf
            <div class="col-md-3">
                <label for="PlanTitle" class="form-label">Plan Title</label>
                <input type="text" class="form-control" id="PlanTitle" name="PlanTitle"
                    placeholder="e.g => 110% Plan" required>
                <div class="invalid-feedback">
                    Enter Plan Title!
                </div>
            </div>
            <div class="col-md-3">
                <label for="PlanProfit" class="form-label">Plan Profit</label>
                <input type="number" class="form-control" id="PlanProfit" name="PlanProfit"
                    placeholder="e.g => 110% Plan" required>
                <div class="invalid-feedback">
                    Enter Plan Profit!
                </div>
            </div>
            <div class="col-md-3">
                <label for="MinDeposit" class="form-label">Min Deposit</label>
                <input type="number" class="form-control" id="MinDeposit" name="MinDeposit" placeholder="e.g => $10"
                    required>
                <div class="invalid-feedback">
                    Enter MinDeposit!
                </div>
            </div>
            <div class="col-md-3">
                <label for="MaxDeposit" class="form-label">Max Deposit</label>
                <input type="number" class="form-control" id="MaxDeposit" name="MaxDeposit" placeholder="e.g => $100"
                    required>
                <div class="invalid-feedback">
                    Enter MaxDeposit!
                </div>
            </div>
            <div class="col-md-3">
                <label for="RefDeposit" class="form-label">Referral Link</label>
                <input type="number" class="form-control" id="RefDeposit" name="RefDeposit" placeholder="e.g => 10%"
                    required>
                <div class="invalid-feedback">
                    Enter RefDeposit!
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
</div>
<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="assets/js/pages/datatables.init.js"></script>
<div class="row pt-lg-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Datatables</h5>
            </div>
            <div class="card-body">
                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="example_length"><label>Show <select name="example_length"
                                        aria-controls="example" class="form-select form-select-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control form-control-sm" placeholder=""
                                        aria-controls="example"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example"
                                class="table table-bordered dt-responsive nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed"
                                style="width: 100%;" aria-describedby="example_info">
                                <thead>
                                    <tr>
                                        <th class="sorting" style="width: 33.4px;">SR No.</th>
                                        <th class="sorting" style="width: 33.4px;">Plan Title</th>
                                        <th class="sorting" style="width: 33.4px;">Plan Profit</th>
                                        <th class="sorting" style="width: 33.4px;">Min Deposite</th>
                                        <th class="sorting" style="width: 33.4px;">Max Deposite</th>
                                        <th class="sorting" style="width: 33.4px;">Ref Deposit</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($InvestmentPlan as $plan)
                                        <tr class="odd">
                                            <td class="sorting" style="width: 33.4px;">{{ $plan->id }}</td>
                                            <td class="sorting" style="width: 33.4px;">{{ $plan->PlanTitle }}</td>
                                            <td class="sorting" style="width: 33.4px;">{{ $plan->PlanProfit }}</td>
                                            <td class="sorting" style="width: 33.4px;">{{ $plan->MinDeposit }}</td>
                                            <td class="sorting" style="width: 33.4px;">{{ $plan->MaxDeposit }}</td>
                                            <td class="sorting" style="width: 33.4px;">{{ $plan->RefDeposit }}</td>
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
</div>
