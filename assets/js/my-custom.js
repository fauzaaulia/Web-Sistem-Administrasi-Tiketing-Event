$(function () {

    //Menu
    $('.addMenuButton').on('click', function (m) {

        $('#menuModalLabel').html('Add New Menu');
        $('.modal-footer button[type=submit]').html('Add');
        $('#id').val('');
        $('#menu').val('');
    });

    $('.showModalEdit').on('click', function (m) {

        $('#menuModalLabel').html('Edit Menu');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-content form').attr('action', 'http://localhost/web-sate/menu/updatemenu');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/web-sate/menu/geteditmenu',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#menu').val(data.menu);
            }
        });

    });

    //Sub-Menu
    $('.addSubMenuButton').on('click', function (sm) {
        $('#subMenuModalLabel').html('Add New Submenu');
        $('.modal-footer button[type=submit]').html('Add');
        $('#id').val('');
        $('#title').val('');
        $('#menu_id').val('');
        $('#url').val('');
        $('#icon').val('');
        $('#is_active').val('');
    });

    $('.showModalEditSub').on('click', function (sm) {

        $('#subMenuModalLabel').html('Edit Sub Menu');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-content form').attr('action', 'http://localhost/web-sate/menu/updatesubmenu');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/web-sate/menu/geteditsubmenu',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#title').val(data.title);
                $('#menu_id').val(data.menu_id);
                $('#url').val(data.url);
                $('#icon').val(data.icon);
                $('#is_active').val(data.is_active);
            }
        });

    });

    //Admin-Role
    $('.addAdminRoleButton').on('click', function (r) {
        $('#adminRoleModalLabel').html('Add New Role');
        $('.modal-footer button[type=submit]').html('Add');
        $('#id').val('');
        $('#role').val('');
    });

    $('.showEditAdminRoleModal').on('click', function (r) {

        $('#adminRoleModalLabel').html('Edit Role');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-content form').attr('action', 'http://localhost/web-sate/admin/updaterole');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/web-sate/admin/geteditrole',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#role').val(data.role);
            }
        });

    });

    //Events
    $('.addEventButton').on('click', function (ev) {

        $('#eventModalLabel').html('Add New Event');
        $('.modal-footer button[type=submit]').html('Add');
        $('#id').val('');
        $('#user_id').val(12);
        $('#name').val('');
        $('#date').val('');
        $('#location').val('');
        $('#address').val('');
        $('#phone').val('');
        $('#is_active').val(1);
    });

    $('.showModalEditEvent').on('click', function (ev) {

        $('#eventModalLabel').html('Edit Events');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-content form').attr('action', 'http://localhost/wpu-login/events/updateevent');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/wpu-login/events/geteditevent',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#user_id').val(data.user_id);
                $('#name').val(data.name);
                $('#date').val(data.date);
                $('#location').val(data.location);
                $('#address').val(data.address);
                $('#phone').val(data.phone);
                $('#is_active').val(data.is_active);
            }
        });

    });

});