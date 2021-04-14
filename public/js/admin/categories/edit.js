function edit(path, name) {
    axios.put(path, {
        name: name
    });
}