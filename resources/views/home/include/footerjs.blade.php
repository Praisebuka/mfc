
        <!--=============== SCROLL REVEAL===============-->
        <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @if(session('success'))
            <script>
                swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#3085d6',
                });
            </script>
        @endif

        @if(session('error'))
            <script>
                swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: '{{ session('error') }}',
                    confirmButtonColor: '#d33',
                });
            </script>
        @endif

        @if(session('resp'))
            <script>
                swal.fire({
                    icon: '{{ session('resp.icon') }}',
                    title: '{{ session('resp.title') }}',
                    text: '{{ session('resp.text') }}',
                    confirmButtonColor: '#d33',
                });
            </script>
        @endif



    </body>
</html>