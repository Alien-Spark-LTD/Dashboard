@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('content')
    <!-- KPI Cards -->
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md bg-soft-primary rounded">
                                <iconify-icon icon="solar:wallet-bold-duotone" class="avatar-title fs-28 text-primary"></iconify-icon>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1">Monthly Revenue</p>
                            <h3 class="mb-0">
                                <span class="amount">30M</span>
                                <span class="currency">₫</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light bg-opacity-50 py-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="text-muted fs-12">Placeholder value</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md bg-soft-success rounded">
                                <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="avatar-title fs-28 text-success"></iconify-icon>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1">Monthly Clients</p>
                            <h3 class="mb-0">0</h3>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light bg-opacity-50 py-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="text-muted fs-12">Placeholder value</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md bg-soft-warning rounded">
                                <iconify-icon icon="solar:briefcase-bold-duotone" class="avatar-title fs-28 text-warning"></iconify-icon>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1">Total Projects</p>
                            <h3 class="mb-0">0</h3>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light bg-opacity-50 py-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="text-muted fs-12">Placeholder value</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md bg-soft-info rounded">
                                <iconify-icon icon="solar:clock-circle-bold-duotone" class="avatar-title fs-28 text-info"></iconify-icon>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1">Avg. Delivery Time</p>
                            <h3 class="mb-0">0 days</h3>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light bg-opacity-50 py-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="text-muted fs-12">Placeholder value</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Quick Actions</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-2">
                        <a href="javascript:void(0);" class="btn btn-primary">
                            <iconify-icon icon="solar:bag-smile-bold-duotone" class="me-1"></iconify-icon>
                            New Order
                        </a>
                        <a href="javascript:void(0);" class="btn btn-success">
                            <iconify-icon icon="solar:user-plus-bold-duotone" class="me-1"></iconify-icon>
                            New Client
                        </a>
                        <a href="javascript:void(0);" class="btn btn-warning">
                            <iconify-icon icon="solar:folder-add-bold-duotone" class="me-1"></iconify-icon>
                            New Project
                        </a>
                        <a href="javascript:void(0);" class="btn btn-info">
                            <iconify-icon icon="solar:card-send-bold-duotone" class="me-1"></iconify-icon>
                            New Payment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tables Row -->
    <div class="row">
        <!-- Recent Orders -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Recent Orders</h4>
                    <a href="javascript:void(0);" class="btn btn-sm btn-soft-primary">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-3">Client</th>
                                    <th>Package</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th class="pe-3">Deadline</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-primary rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-primary">JD</span>
                                            </div>
                                            <span>John Doe</span>
                                        </div>
                                    </td>
                                    <td>Basic Plan</td>
                                    <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                    <td>11.500.000 VNĐ</td>
                                    <td class="pe-3">Jan 15, 2026</td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-info rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-info">AS</span>
                                            </div>
                                            <span>Alice Smith</span>
                                        </div>
                                    </td>
                                    <td>Premium Plan</td>
                                    <td><span class="badge bg-warning-subtle text-warning">In Progress</span></td>
                                    <td>27.600.000 VNĐ</td>
                                    <td class="pe-3">Feb 20, 2026</td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-danger rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-danger">MJ</span>
                                            </div>
                                            <span>Mike Johnson</span>
                                        </div>
                                    </td>
                                    <td>Standard Plan</td>
                                    <td><span class="badge bg-danger-subtle text-danger">Cancelled</span></td>
                                    <td>17.250.000 VNĐ</td>
                                    <td class="pe-3">Jan 30, 2026</td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-success rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-success">EW</span>
                                            </div>
                                            <span>Emma Wilson</span>
                                        </div>
                                    </td>
                                    <td>Enterprise Plan</td>
                                    <td><span class="badge bg-info-subtle text-info">Pending</span></td>
                                    <td>57.500.000 VNĐ</td>
                                    <td class="pe-3">Mar 10, 2026</td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-warning rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-warning">RB</span>
                                            </div>
                                            <span>Robert Brown</span>
                                        </div>
                                    </td>
                                    <td>Basic Plan</td>
                                    <td><span class="badge bg-success-subtle text-success">Completed</span></td>
                                    <td>11.500.000 VNĐ</td>
                                    <td class="pe-3">Feb 05, 2026</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Projects -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Active Projects</h4>
                    <a href="javascript:void(0);" class="btn btn-sm btn-soft-primary">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-3">Project</th>
                                    <th>Client</th>
                                    <th>Progress</th>
                                    <th class="pe-3">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-3 fw-semibold">Website Redesign</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-primary rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-primary fs-10">AC</span>
                                            </div>
                                            <span>Acme Corp</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress progress-sm w-50" style="width: 80px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%;"></div>
                                            </div>
                                            <span class="fs-12">75%</span>
                                        </div>
                                    </td>
                                    <td class="pe-3"><span class="badge bg-success-subtle text-success">On Track</span></td>
                                </tr>
                                <tr>
                                    <td class="ps-3 fw-semibold">Mobile App</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-info rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-info fs-10">TG</span>
                                            </div>
                                            <span>TechGo</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress progress-sm w-50" style="width: 80px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 45%;"></div>
                                            </div>
                                            <span class="fs-12">45%</span>
                                        </div>
                                    </td>
                                    <td class="pe-3"><span class="badge bg-warning-subtle text-warning">Delayed</span></td>
                                </tr>
                                <tr>
                                    <td class="ps-3 fw-semibold">CRM Integration</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-success rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-success fs-10">SS</span>
                                            </div>
                                            <span>StartupHub</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress progress-sm w-50" style="width: 80px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 90%;"></div>
                                            </div>
                                            <span class="fs-12">90%</span>
                                        </div>
                                    </td>
                                    <td class="pe-3"><span class="badge bg-success-subtle text-success">On Track</span></td>
                                </tr>
                                <tr>
                                    <td class="ps-3 fw-semibold">E-commerce Platform</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-danger rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-danger fs-10">GD</span>
                                            </div>
                                            <span>GlobalData</span>
                                            </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress progress-sm w-50" style="width: 80px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;"></div>
                                            </div>
                                            <span class="fs-12">30%</span>
                                        </div>
                                    </td>
                                    <td class="pe-3"><span class="badge bg-info-subtle text-info">Starting</span></td>
                                </tr>
                                <tr>
                                    <td class="ps-3 fw-semibold">API Development</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-warning rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-warning fs-10">NF</span>
                                            </div>
                                            <span>NextFlow</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="progress progress-sm w-50" style="width: 80px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%;"></div>
                                            </div>
                                            <span class="fs-12">60%</span>
                                        </div>
                                    </td>
                                    <td class="pe-3"><span class="badge bg-success-subtle text-success">On Track</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Payments -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Pending Payments</h4>
                    <a href="javascript:void(0);" class="btn btn-sm btn-soft-primary">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-3">Client</th>
                                    <th>Amount</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th class="pe-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-primary rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-primary">AC</span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold d-block">Acme Corp</span>
                                                <span class="text-muted fs-12">Invoice #INV-001</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="fw-semibold">34.500.000 VNĐ</td>
                                    <td>
                                        <span class="text-danger">Jan 25, 2026</span>
                                    </td>
                                    <td><span class="badge bg-danger-subtle text-danger">Overdue</span></td>
                                    <td class="pe-3">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-soft-success">Mark Paid</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-info rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-info">TG</span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold d-block">TechGo</span>
                                                <span class="text-muted fs-12">Invoice #INV-002</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="fw-semibold">63.250.000 VNĐ</td>
                                    <td>
                                        <span>Feb 15, 2026</span>
                                    </td>
                                    <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                    <td class="pe-3">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-soft-success">Mark Paid</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-success rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-success">SS</span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold d-block">StartupHub</span>
                                                <span class="text-muted fs-12">Invoice #INV-003</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="fw-semibold">20.470.000 VNĐ</td>
                                    <td>
                                        <span>Feb 28, 2026</span>
                                    </td>
                                    <td><span class="badge bg-warning-subtle text-warning">Pending</span></td>
                                    <td class="pe-3">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-soft-success">Mark Paid</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-danger rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-danger">GD</span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold d-block">GlobalData</span>
                                                <span class="text-muted fs-12">Invoice #INV-004</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="fw-semibold">73.600.000 VNĐ</td>
                                    <td>
                                        <span class="text-danger">Feb 01, 2026</span>
                                    </td>
                                    <td><span class="badge bg-danger-subtle text-danger">Overdue</span></td>
                                    <td class="pe-3">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-soft-success">Mark Paid</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-soft-warning rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-warning">NF</span>
                                            </div>
                                            <div>
                                                <span class="fw-semibold d-block">NextFlow</span>
                                                <span class="text-muted fs-12">Invoice #INV-005</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="fw-semibold">25.300.000 VNĐ</td>
                                    <td>
                                        <span>Mar 05, 2026</span>
                                    </td>
                                    <td><span class="badge bg-info-subtle text-info">Scheduled</span></td>
                                    <td class="pe-3">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-soft-success">Mark Paid</a>
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

@section('script')
@endsection
