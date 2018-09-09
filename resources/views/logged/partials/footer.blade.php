<footer id="footer">
    <p>&copy; 2018 <a href=" index.html ">bbbk.2ap.pl</a></p>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src=" js/script.js "></script>
</body>

<script>
    $(document).ready(function() {
        $('#menu-icon').click(function() {
            $('#nav-list-mobile').toggleClass('hidden');
        });

        $('#add-new-board').click(function() {
            $('#add-new-board-container').toggleClass('hidden');
        });

        $('#add-new-board-cancel').click(function() {
            $('#add-new-board-container').toggleClass('hidden');
        });

        $('.add-new-task-button').click(function() {
            $(this).toggleClass('hidden').parent().children('.add-new-task-container').toggleClass('hidden');
        });

        $('.add-new-page-button').click(function() {
            $(this).toggleClass('hidden').parent().children('.add-new-page-container').toggleClass('hidden');
        });

        $('.add-new-task-cancel').click(function() {
            $(this).parent().parent().parent().toggleClass('hidden').parent().children('.add-new-task-button').toggleClass('hidden');
        });

        $('#add-new-page-cancel').click(function() {
            $(this).parent().parent().parent().toggleClass('hidden').parent().children('.add-new-page-button').toggleClass('hidden');
        });

        $('.boards-list-element-update').click(function(e) {
            $(this).parent().parent().toggleClass('hidden').parent().parent().children('.boards-list-element-updateform').toggleClass('hidden');

            e.preventDefault();
        });

        $('.boards-list-element-delete').click(function(e) {
            $(this).parent().toggleClass('hidden').parent().children('.boards-list-element-deleteform').toggleClass('hidden');

            e.preventDefault();
        });

        $('.boards-list-element-cancel').click(function(e) {
            $(this).parent().parent().toggleClass('hidden').parent().children('.boards-list-board').children('a').toggleClass('hidden');

            e.preventDefault();
        });

        $('.page-list-element-update').click(function(e) {
            $(this).parent().toggleClass('hidden').parent().children('span, .page-element-title').toggleClass('hidden').parent().children('.boards-list-element-updateform').toggleClass('hidden');
            e.preventDefault();
        });

        $('.page-list-element-cancel').click(function(e) {
            $(this).parent().parent().toggleClass('hidden').parent().children('span, .page-element-title').toggleClass('hidden').parent().children('.page-list-menu').toggleClass('hidden');
            e.preventDefault();
        });

        $('.page-list-element-delete').click(function(e) {
            $(this).parent().toggleClass('hidden').parent().children('.boards-list-element-deleteform').toggleClass('hidden');

            e.preventDefault();
        });

        $('.form-cancel').click(function(e) {
            $(this).parent().toggleClass('hidden').parent().children('.boards-list-menu, .page-list-menu').toggleClass('hidden');

            e.preventDefault();
        });

        $('.user-model-edit').click(function(e) {
            $(this).parent().toggleClass('hidden').parent().children('form').toggleClass('hidden');

            // $('#user-name').toggleClass('hidden');
            //    $('#user-name-edit').toggleClass('hidden');

            e.preventDefault();
        });

        $('.user-edit-anuluj').click(function(e) {
            $(this).parent().parent().parent().toggleClass('hidden').parent().children('#user-edit-name').toggleClass('hidden');
            e.preventDefault();
        });

        $('.page-list-element-edite').click(function(e) {
            $(this).parent().parent().children('.task-edit-window').toggleClass('hidden');

            e.preventDefault();
        });

        $('.close-window').click(function(e) {
            $(this).parent().parent().toggleClass('hidden');

            e.preventDefault();
        });

    });

</script>

</html>
