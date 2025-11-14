@if(Session::has('success'))
<div class="fixed top-6 right-6 flex items-center p-4 rounded-xl shadow-2xl bg-white border border-blue-200 z-50 transform transition-all duration-300 hover:scale-[1.02]" id="alert">


    <p class="text-base font-medium text-green-500">
        {{Session('success')}}
    </p>
    <script>
        //hide alert after 3 seconds with slide in and slide out effect
        setTimeout(function(){
            var alert = document.getElementById('alert');
            alert.style.transition = 'all 0.5s ease-in-out';
            alert.style.transform = 'translateY(-100%)';
            alert.style.opacity = '0';
            setTimeout(function(){
                alert.remove();
            }, 500);
        }, 3000);
    </script>

</div>
@endif
