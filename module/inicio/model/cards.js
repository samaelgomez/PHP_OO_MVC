$(document).on("ready",()=>{
    let stored_page = window.localStorage.getItem('loaded_page')
    console.log(stored_page)
    if(stored_page === null || stored_page === "home") {
    
        api("GET", "controller_home.php?op=categories")
        .then((data)=>{
            console.log(data)
            let card_container = "";
            data.map((element)=>{
                console.log(element.product_category);
                return card_container += `
                <div class="custom_card" id=${element.product_category}>
                    <div class="content">
                        <div class="front">
                            <img src="${element.image_path}" id=${element.product_category}>
                        </div>
                    </div>
                </div>
                `
            })
            $(".cards").append(card_container)
        })
        .catch((err)=>{
            console.log(err)
        })
    }else{
        $(".cards").html("")
    }

        $("body").on("click",".custom_card",function(e) {
            console.log(e.target.id)
            window.localStorage.setItem('loaded_page', 'selected_category_list')
            window.localStorage.setItem('category', e.target.id)
            location.reload();
        })
    })