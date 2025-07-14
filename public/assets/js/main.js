const sField = document.getElementById('longLink');

const getUrlForm = document.getElementById('getUrlForm')
const history = document.getElementById('history')
const loader = document.getElementById('loader')

document.getElementById('clear-longLink').addEventListener('click', ()=>{
    document.querySelector('.result').style.display = 'none'
    sField.value = '';
})

// const place_lilUrl = document.getElementById('lilUrl')

getUrlForm.addEventListener('submit', (e)=>{
    e.preventDefault();
    let formData = new FormData(getUrlForm)
    fetch('/getLilUrl', {
        method: 'post',
        body: formData
    })
        .then((response) => response.json())
        .then((data)=>{
            if (data.answer === 'success'){
                document.querySelector('.lilUrl').innerText = data.lilUrl
                document.querySelector('.result').style.display = 'block'
                document.getElementById('lilUrl').style.pointerEvents = '';
                document.querySelector('.instruction').innerText = "click to copy"
                sField.value = '';
                document.getElementById('history').innerHTML = '';

                document.getElementById('history').innerHTML = data.history;
            }
        })
})

let lilUrl = document.getElementById('lilUrl');
lilUrl.addEventListener('click', (e)=>{
    // e.preventDefault();
    this.disabled = 'disabled';
    let range = document.createRange();
    range.selectNode(document.querySelector("#lilUrl"))
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    try{
        let res = document.execCommand("copy");
        if (res){
            window.getSelection().removeAllRanges();
            let res = document.getElementById('result');
            res.style.color = 'red';
            document.querySelector('.instruction').innerText = "link is copied!"
            document.getElementById('lilUrl').style.pointerEvents = 'none';
        }
    } catch (err){
        console.log("error: " + err)
    }
})

window.addEventListener('load', ()=>{
    fetch('/getHistory', {
        method: 'post'
    })
        .then((response)=>response.json())
        .then((data)=>{
            loader.style.display = 'block';
            setTimeout(()=>{
                let history = document.getElementById('history');
                history.innerHTML = data.history
                new Mark()
                loader.style.display = 'none'
            }, 500)
        })
})



