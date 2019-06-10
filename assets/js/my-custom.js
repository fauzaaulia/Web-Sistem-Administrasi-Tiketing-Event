$(function (Menu) {

    //Menu--------------
    $('.addMenuButton').on('click', function (m) {

        $('#menuModalLabel').html('Add New Menu');
        $('.modal-footer button[type=submit]').html('Add');
        $('#id').val('');
        $('#menu').val('');
        $('#priority').val('');
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
                $('#priority').val(data.priority);
            }
        });

    });

    //Sub-Menu--------------
    $('.addSubMenuButton').on('click', function (sm) {

        $('#subMenuModalLabel').html('Add New Submenu');
        $('.modal-footer button[type=submit]').html('Add');
        $('#id').val('');
        $('#title').val('');
        $('#menu_id').val('');
        $('#url').val('');
        $('#icon').val('');
        $('#is_active').val(1);
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

});

$(function (Admin) {

    //Admin-Role--------------
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

});

$(function (Event) {

    //Events--------------
    $('.addEventButton').on('click', function () {

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

    $('.showModalEditEvent').on('click', function () {

        $('#eventModalLabel').html('Edit Events');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-content form').attr('action', 'http://localhost/web-sate/events/updateevent');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/web-sate/events/geteditevent',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#user_id').val(data.user_id);
                $('#name').val(data.event);
                $('#date').val(data.date);
                $('#location').val(data.location);
                $('#address').val(data.address);
                $('#phone').val(data.phone);
                $('#is_active').val(data.is_active);
            }
        });

    });

    //Info Event--------------
    $('.infoEventModal').on('click', function () {

        $('#infoEventModalLabel').html('Info Events');
        $('#name2').html('Namanya');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/web-sate/events/geteditevent',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $("#name2").html(data.event);
                $('#date2').html(data.date);
                $('#location2').html(data.location);
                $('#address2').html(data.address);
                $('#phone2').html(data.phone);
                $('#is_active').html(data.is_active);
            }
        });

    });

});

$(function () { //Ticket--------------

    // Add Ticket--------------
    $('.addTicketButton').on('click', function (r) {
        $('#ticketModalLabel').html('Add New Ticket');
        $('.modal-footer button[type=submit]').html('Add');
        $('#event_id').val('');
        $('#ticket').val('');
        $('#price').val('');
        $('#total').val('');
        $('#is_active').val(1);
    });

    // Edit Ticket--------------
    $('.showEditTicketModal').on('click', function (r) {

        $('#ticketModalLabel').html('Edit Ticket');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-content form').attr('action', 'http://localhost/web-sate/tickets/updateticket');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/web-sate/tickets/geteditticket',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id);
                $('#event_id').val(data.event_id);
                $('#ticket').val(data.ticket);
                $('#price').val(data.price);
                $('#total').val(data.total);
                $('#is_active').val(data.is_active);
            }
        });

    });

    // Edit Ticket--------------
    $('.showInfoTicketModal').on('click', function (r) {

        $('#infoTicketModalLabel').html('Info Ticket');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-content form').attr('action', 'http://localhost/web-sate/tickets/updateticket');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/web-sate/tickets/geteditticket',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#event2').html(data.event_id);
                $('#ticket2').html(data.ticket);
                $('#price2').html(data.price);
                $('#total2').html(data.total);
                $('#is_active').html(data.is_active);
            }
        });

    });

});

// Member Active----------------
$(function () {
    $('.member_active').on('click', function () {

        const memberId = $(this).data('member');

        if ($('.member_active').attr('checked') == "checked") {

            $.ajax({
                url: 'http://localhost/web-sate/admin/changememberactive',
                type: 'post',
                data: {
                    memberId: memberId,
                    memberActive: 0
                },
                success: function () {
                    document.location.href = "http://localhost/web-sate/admin/list";
                }
            });

        } else {

            $.ajax({
                url: 'http://localhost/web-sate/admin/changememberactive',
                type: 'post',
                data: {
                    memberId: memberId,
                    memberActive: 1
                },
                success: function () {
                    document.location.href = "http://localhost/web-sate/admin/list";
                }
            });

        }
    })
});

// Seller Active----------------
$(function () {
    $('.seller_active').on('click', function () {

        const sellerId = $(this).data('seller');

        if ($('.seller_active').attr('checked') == "checked") {

            $.ajax({
                url: 'http://localhost/web-sate/member/changeselleractive',
                type: 'post',
                data: {
                    sellerId: sellerId,
                    sellerActive: 0
                },
                success: function () {
                    document.location.href = "http://localhost/web-sate/member/list";
                }
            });

        } else {

            $.ajax({
                url: 'http://localhost/web-sate/member/changeselleractive',
                type: 'post',
                data: {
                    sellerId: sellerId,
                    sellerActive: 1
                },
                success: function () {
                    document.location.href = "http://localhost/web-sate/member/list";
                }
            });

        }
    })
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});