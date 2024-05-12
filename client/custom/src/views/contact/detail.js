Espo.define('custom:views/contact/detail', ['views/detail'], function (Dep) {

    return Dep.extend({
        

        setup: function () {
            
            Dep.prototype.setup.call(this);
           

            this.menu.dropdown.push({
                label: 'Find Contacts',
                name: 'findContacts',
                acl: 'edit',
                action: this.findContactsByEmail.bind(this)
            });
            console.log('Contact Detail View Loaded');

        },
       
        findContactsByEmail: function () {
            var email = this.model.get('emailAddress');
            console.log(email);

            // $.ajax({
            //     url: 'Autocrm/action/FindContactsByEmail?email=' + encodeURIComponent(email),
            //     type: 'GET',
            //     success: function (data) {
            //         var names = data.map(contact => `${contact.first_name} ${contact.last_name}`).join(', ');
            //         alert("Contacts with email " + email + ": " + names);
            //     },
            //     error: function () {
            //         alert('No contacts found or there was an error.');
            //     }
            // });

            Espo.Ajax.getRequest('Autocrm/action/FindContactsByEmail?email=' + email)
                .then(function (response) {
                    console.log('Data:', response);
                })
                .catch(function (error) {
                    console.error('Failed:', error);
                });
        }
        
    });
});