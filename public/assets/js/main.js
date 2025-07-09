const sField = document.getElementById('longLink');

const getUrlForm = document.getElementById('getUrlForm')
const btnGetUrl = document.getElementById('btn-get-url')

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
            // console.log(data)
            if (data.answer === 'success'){
                // place_lilUrl.innerHTML = "<a id='aLink'>" + data.lilUrl + "</a>"
                document.querySelector('.lilUrl').innerText = data.lilUrl
                document.querySelector('.result').style.display = 'block'
                document.getElementById('lilUrl').style.pointerEvents = '';
                document.querySelector('.instruction').innerText = "click to copy"
                sField.value = '';
            }
            // console.log('string 26: '+place_lilUrl.innerText)

        })
})

let lilUrl = document.getElementById('lilUrl');
lilUrl.addEventListener('click', (e)=>{
    // e.preventDefault();
    this.disabled = 'disabled';
    console.log('yap')
    console.log()
    let range = document.createRange();
    range.selectNode(document.querySelector("#lilUrl"))
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    try{
        let res = document.execCommand("copy");
        console.log(res);
        if (res){
            window.getSelection().removeAllRanges();
            let res = document.getElementById('result');
            res.style.color = 'red';
            document.querySelector('.instruction').innerText = "link is copied!"
            document.getElementById('lilUrl').style.pointerEvents = 'none';
            // console.log(msg)OrJXe2
        }

    } catch (err){
        console.log("error: " + err)
    }

})

