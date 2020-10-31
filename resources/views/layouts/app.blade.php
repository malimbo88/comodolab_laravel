{{-- Layouts / app.blade.php --}}

<!DOCTYPE html>
<html lang="en" dir="ltr">

  {{-- Head --}}
  @include("partials.head")

  <body>

    {{-- Wrapper --}}
    <div class="main_wrapper">

      {{-- Header --}}
      @include("partials.header")

      {{-- Main --}}
      <main>
        @yield('content')
      </main>
      {{-- end Main --}}

      {{-- Footer --}}
      @include("partials.footer")

    </div>
    {{-- end Wrapper --}}

    {{-- Javascript--}}
    <script type="text/javascript" src="{{ asset("js/app.js") }}"></script>
    {{-- end Javascript --}}

  </body>
</html>
