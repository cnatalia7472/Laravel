{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}
@extends('layouts.dashboard')
@section('page-title', ' - Domains')
@section('javascript-after')
    <script src="{{ asset('assets/backend/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/tables/datatables/extensions/buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/domains-datatables.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/notifications/bootbox.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/demo_pages/components_modals.js') }}"></script>
@endsection
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{ $organization->company_name }}</span> - Domains</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-cart-add"></i><span>Purchase Domain</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-search4"></i> <span>WHOIS Lookup</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="learning_detailed.html" class="breadcrumb-item">Organizations</a>
                    <a href="learning_detailed.html" class="breadcrumb-item">{{ $organization->company_name }}</a>
                    <span class="breadcrumb-item active">Domains</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        <div class="card">
            <div class="card-header header-elements-inline">
                @if($organization->company_name !== "Global View")  {{-- Hide the create new domain button if global view is used --}}
                    <button type="button" class="btn bg-primary" id="prompt">New Domain <i class="icon-plus2 ml-2"></i></button>
                @endif
            </div>

            <table class="table datatable-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Domain Name</th>
                    <th>Registrar</th>
                    <th>Registration Date</th>
                    <th>Expiration Date</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @if (count($domains) > 0)
                @foreach($domains as $domain)
                <tr>
                    <td>{{ $domain->id }}</td>
                    <td><a href="http://{{ $domain->domain_name }}.{{ $domain->domain_tld }}">{{ $domain->domain_name }}.{{ $domain->domain_tld }}</a></td>
                    <td>{{ $domain->registrar }}</td>
                    <td>{{ $domain->registration_date }}</td>
                    <td>{{ $domain->expiration_date }}</td>
                    <td><span class="badge badge-success">{{ $domain->status }}</span></td>
                    <td>{{ $domain->created_at }}</td>
                    <td>{{ $domain->updated_at }}</td>
                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                    @endforeach
                @else
                    <tr>
                        <td>No entries</td> {{-- TODO:  Center text --}}
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection