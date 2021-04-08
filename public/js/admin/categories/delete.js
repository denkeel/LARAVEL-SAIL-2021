function remove(event, path) {
    event.currentTarget.parentElement.parentElement.remove();

    httpRequest = new XMLHttpRequest();
    csrf = document.querySelector('meta[name="csrf-token"]').content;

    httpRequest.open('DELETE', path, true);
    //httpRequest.setRequestHeader('_token', csrf);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send(`_token=${csrf}`);
    //console.log(csrf);
}