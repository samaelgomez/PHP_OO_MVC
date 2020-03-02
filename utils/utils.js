/* 

api("method", "url", data)
        .then((data)=>{
            console.log(data)
        })
        .catch((err)=>{
            console.log(err)
        })

*/

const api = (method, url, data=undefined) => {
    return new Promise(function(resolve, reject) {
        $.ajax({
            url: "module/inicio/controller/" + url,
            type: method,
            data: data,
            dataType: "json"
        })
        .done(function(data){
            console.log(data)
                resolve(data)
            })
        .fail(function(err){
            reject(err);
        })
    })
};
