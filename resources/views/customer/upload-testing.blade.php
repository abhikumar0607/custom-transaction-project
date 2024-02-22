@extends('customer.layouts.master')

@section('content')
<body class="materialdesign">
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            @include('customer.layouts.sidebar')
        </div>
        <div class="content-inner-all">
            @include('customer.layouts.top-header')
            <!-- welcome Project, sale area start-->
            <div class="report-saction">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="report-one-dashboard">
                                <h2>Uplaod BOE Pdf File</h2>
                                <p>Generate detailed reports of customs declarations and inventory stock</p>
                                @if (Session::has('success'))
                                    {{ session()->get('success') }}
                                @endif
                                @if (Session::has('unsuccess'))
                                    {{ session()->get('unsuccess') }}
                                @endif
                                <form method="POST" action="{{ route('customer.submit.boe.pdf.file') }}" enctype="multipart/form-data">
                                    @csrf
                                    <select name="pdf_type" required>
                                        <option value="">Please Select</option>
                                        <option value="boe_4_pdf_file">BOE 4 PDF File</option>
                                        <option value="boe_5_pdf_file">BOE 5 PDF File</option>
                                    </select>
                                    <input type="file" name="boe_pdf_filr" value="" required>
                                    <input type="submit" value="Upload">
                                </form>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
@endsection
