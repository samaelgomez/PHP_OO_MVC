function make_list(data) {
    let product_header = ""
    let product_content = ""
    product_header += `
                        <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(view/img/bg-img/3.jpg);">
                            <div class="container h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-12">
                                        <div class="breadcrumb-text">
                                            <h2 id='category_name'>${data.category_name}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>`
        product_content =` <section class="articles-area section-padding-0-100">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-8">
                                            <div class="mt-100" id="header_container">
                    `
        data.list.map((element)=>{
            return product_content += `
                                        <div class="single-articles-area d-flex flex-wrap mb-30">
                                            <div class="article-thumbnail" id=${element.VideogameName}>
                                                <img src=${element.VideogameImage} alt=""></img>
                                            </div>
                                            <div class="article-content">
                                                <p class="post-title">${element.VideogameName}</a>
                                                <div class="post-meta">
                                                    <a href="#" class="post-date">July 12, 2018</a>
                                                    <a href="#" class="post-comments">2 Comments</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                                            </div>
                                        </div>
                                     `
        })
        product_content += `
            </div></div></div></div></section>
            `
            return {header:product_header,content:product_content}
}

function game_details(data) {

    console.log(data[0].VideogameName)

    let product_content = ""
    
    product_content =`
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="single-game-review-area style-2 mt-70">
                    <div class="game-content">
                        <span class="game-tag">Adventure</span>
                        <a href="single-game-review.html" class="game-title">${data[0].VideogameName.replace("_", " ")}</a>
                        <div class="game-meta">
                            <a href="#" class="game-date">July 12, 2018</a>
                            <a href="#" class="game-comments">2 Comments</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                        <p>Pegi: ${data[0].VideogamePegi}</p>
                        <p>Edition: ${data[0].VideogameEdition}</p>
                        <p>Languages: ${data[0].VideogameLanguages}</p>
                        <!-- Download & Rating Area -->
                        <div class="download-rating-area">
                            <div class="download-area">
                                <a href="#"><img src="view/img/core-img/app-store.png" alt=""></a>
                                <a href="#"><img src="view/img/core-img/google-play.png" alt=""></a>
                            </div>
                            <div class="rating-area mt-30">
                                <h3>8.2</h3>
                                <div class="stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- *** Barfiller Area *** -->
            <div class="col-12 col-md-6">
                <div class="egames-barfiller">
                    <a href="#"><img src="${data[0].VideogameImage}"></a>
                </div>
            </div>
        </div>
    </div>
    `

    return product_content;

}

$(document).on("ready",async ()=>{
let stored_page = window.localStorage.getItem('loaded_page')
    switch (stored_page) {
        case "selected_category_list":
        await api("POST", "controller_home.php?op=get_products", {data:{filters:{product_category:[window.localStorage.getItem('category')]}}})
        .then((data)=>{
            console.log(data)
            let html = make_list({list:data,category_name:window.localStorage.getItem('category')})
            $(".product_header").append(html.header);
            $(".product_content").append(html.content);
        })
        .catch((err)=>{
            console.log(err)
        })
            break;

        case "game_details":
            await api("POST", "controller_home.php?op=get_details", {data:{product_name:[window.localStorage.getItem('selected_game')]}})
            .then((data)=>{
                console.log(data)
                let html = game_details(data)
                $(".filters").html("")
                $(".videogame_details").append(html);
            })
            .catch((err)=>{
                console.log(err)
            })
                break;
    
        default:
            $(".product_header").html("")
            $(".product_content").html("")
            break;
    }
    $("body").on("click",".reloader",function(e) {
        console.log(e.target.id)
        if (stored_page!==null) {
            window.localStorage.removeItem('loaded_page')
            window.localStorage.removeItem('category')
            location.reload();
        }
    })

    $("body").on("click",".article-thumbnail",function(e) {
        console.log(e.target.id)
        window.localStorage.removeItem('category')
        window.localStorage.setItem('loaded_page', 'game_details')
        window.localStorage.setItem('selected_game', e.target.id)
        location.reload();
    })

    let checked_filters = [];
    let  filtros = {edition:[],languages:[],pegi:[]}
    $(".filter_check").on("click",function(e) {
        
        if (e.target.checked) {
            filtros = {edition:[],languages:[],pegi:[]};
            checked_filters.push({name:e.target.value, type:e.target.classList[1]})
            console.log(checked_filters)
        } else {
            filtros = {edition:[],languages:[],pegi:[]};
            checked_filters = checked_filters.filter((filter)=>filter.name != e.target.value)
            console.log(checked_filters)
        }
    })
    $("#filter_button_submit").on("click",function(e) {
        console.log(checked_filters)
        checked_filters.forEach((filter)=>{
            console.log(filter.type);
            
            return filtros = {... filtros , [filter.type]:[...filtros[filter.type], filter.name ]} // ... adds to filtros
        })
        console.log(filtros);
        api("POST", "controller_home.php?op=get_products", {data:{filters:filtros}})
            .then((data)=>{
                console.log(data)
                $(".product_header").html("")
                $(".product_content").html("")
                let html = make_list({list:data,category_name:window.localStorage.getItem('category')})
                $(".product_header").append(html.header);
                $(".product_content").append(html.content);
            })
            .catch((err)=>{
                console.log(err)
            })
    })
})