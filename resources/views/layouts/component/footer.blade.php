      <!-- Footer -->
      <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Develophed <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="#" target="_blank">Admin</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://1.envato.market/AVD6j" target="_blank">Dashboard</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{url('assets/js/oneui.app.min.js')}}"></script>
	
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{url('assets/js/lib/jquery.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{url('assets/js/plugins/datatables/jquery.dataTables.min.j')}}s"></script>
    <script src="{{url('assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/datatables-buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/datatables-buttons-jszip/jszip.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{url('assets/js/plugins/datatables-buttons/buttons.print.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/datatables-buttons/buttons.html5.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{url('assets/js/pages/be_tables_datatables.min.js')}}"></script>	
        <script src="{{url('assets/plugins/notifications/js/lobibox.min.js')}}"></script>
        <script src="{{url('assets/plugins/notifications/js/notifications.min.js')}}"></script>   

        <script>
            @if (Session::has('success'))
                Lobibox.notify('success', {
                    pauseDelayOnHover: true,
                    continueDelayOnInactiveTab: false,
                    position: 'top right',
                    icon: 'bi bi-bookmark-check-fill',
                    msg: "{{ Session::get('success')}}"
                });
            @endif
        </script>
        <script>
            @if ($message = Session::get('error'))
            Lobibox.notify('error', {
                pauseDelayOnHover: true,
                continueDelayOnInactiveTab: false,
                position: 'top right',
                icon: 'bi bi-bookmark-x',
                msg: "{{ Session::get('error')}}"
            });			
            @endif
        </script>   

	
  </body>
</html>
