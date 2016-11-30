    <!-- FOOTER -->
            <footer class="footer">
                &copy; 2016 The Develovers
            </footer>
            <!-- END FOOTER -->
        </div>
        <!-- END CONTENT WRAPPER -->
    </div>
    <!-- END WRAPPER -->
    
   
</body>

</html>

    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
        });
    </script>
    <!-- end of global js -->
</body>
</html>

