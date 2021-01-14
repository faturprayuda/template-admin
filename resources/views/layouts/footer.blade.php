{{-- script load all source first --}}
<script>
    document.addEventListener('DOMContentLoaded', function(){
    // your code goes here
    document.getElementsByTagName('BODY')[0].style.display = 'block';
}, false);
</script>

@livewireScripts

@yield('script')

</body>

</html>
