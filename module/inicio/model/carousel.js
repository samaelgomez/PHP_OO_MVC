$(document).on("ready",()=>{
    let stored_page = window.localStorage.getItem('loaded_page')
    console.log(stored_page)
    if(stored_page === null || stored_page === "home") {

        api("GET", "controller_home.php?op=carousel")
        .then((data)=>{
            console.log(data)
            let slide_bubble = ""
            let slides = ""
            let count = 0
            
            for(row in data){
                count ++
                slide_bubble += `<a href="#slide-${count}">${count}</a>` //Concatena slide_bubble y el codigo
                slides += `
                    <div id="slide-${count}">
                        <img src="${data[row].image_path}">
                    </div>
                `
            }
            $(".slides").after(slide_bubble) // Coloca las bubble debajo del slider
                $(".slides").append(slides) // Coloca las imágenes en los contenedores
        })
        .catch((err)=>{
            console.log(err)
        })
        }else{
            $(".slides").html("")
        }
    })