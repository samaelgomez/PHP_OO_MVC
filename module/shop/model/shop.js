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
                                            <div class="article-thumbnail">
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
            
            return filtros = {... filtros , [filter.type]:[...filtros[filter.type], filter.name ]}
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