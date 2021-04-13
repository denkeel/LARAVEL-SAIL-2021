function edit(path, name) {
    csrf = document.querySelector('meta[name="csrf-token"]').content;
    category = { 'name': 'wad' };
    //console.log(JSON.stringify(category));
    fetch(path, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json;charset=utf-8',
            'Accept': 'application/json, text/plain, */*',
            'X-CSRF-Token': csrf,
            'name': name
        }
    })
}