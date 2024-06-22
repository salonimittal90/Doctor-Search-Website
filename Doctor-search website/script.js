
        const btn = document.querySelector('#searchBtn');
        btn.addEventListener('click',(e)=>{
            e.preventDefault()
             
            const data= document.querySelector("#specialist");
             console.log(data.value)
            
             if(data.value=="General Doctor"){
                
                     window.location.href="doctors.html"
                    }
                        else {
                       
                          window.location.href="pdoctors.html"
                    }

             

        })