function edit(path, name) {
    axios.put(path, {
        name: name
    }).then(() => {
        errors.list = [];
        window.dispatchEvent(new CustomEvent("errors-load"));
    }).catch((serverError) => {
        let formErrorsCollection = serverError.response.data.errors;

        for (let fieldErrorsObjectKey in formErrorsCollection) {
            if (formErrorsCollection.hasOwnProperty(fieldErrorsObjectKey)) {
                let fieldErrorsArray = formErrorsCollection[fieldErrorsObjectKey]
                errors.list = errors.list.concat(fieldErrorsArray);
            }
        }
        
        window.dispatchEvent(new CustomEvent("errors-load"));
    });
}