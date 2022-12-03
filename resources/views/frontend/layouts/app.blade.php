<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="EasyLoan - is the Loan Company Website Template.">
        <meta name="keywords" content="Loan Company, Loan Agency, Students Loan, Car Loan, Home Loan, Loan Product, Personal Loan, Bad credit, Loan Advisor, Financial Website Template, Banking, Loan provider, Bootstrap Template, Landing Page, EasyLoan, Loan HTML Template">
        <meta name="author" content="">
    
        <title>@yield('title') | {{ config('app.name') }}</title>
        <link rel="shortcut icon" href="{{asset('/')}}assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="{{asset('/')}}assets/img/favicon.ico" type="image/x-icon">
    
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('/')}}assets/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom Fonts -->
        <link href="{{asset('/')}}assets/css.css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="{{asset('/')}}assets/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('/')}}assets/assets/simple-line-icons/css/simple-line-icons.css">
    
        <!-- Preloader CSS -->
        <link rel="stylesheet" href="{{asset('/')}}assets/css/preloader.css">
    
        <!-- Jquery UI CSS -->
        <link href="{{asset('/')}}assets/assets/jquery/ui/jquery-ui.css" rel="stylesheet">
    
        <!-- Custom CSS -->
        <link href="{{asset('/')}}assets/css/custom.css" rel="stylesheet">
    
        <!-- Responsive CSS -->
        <link href="{{asset('/')}}assets/css/responsive.css" rel="stylesheet">
    
        <meta name="csrf-token" content="{{ csrf_token() }}">

      <link href="https://bfloanserve.com/assets/mobirise/css/mbr-additional.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        @livewireStyles
    </head>
    


<body>
    @include('frontend.includes.header')


    <main class="main-content">
        @yield('content')
    </main>
   
    @include('frontend.includes.footer')

    @livewireScripts
</body>

</html>