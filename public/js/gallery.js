class gellaryAPI {
	constructor (insertId, apiLink){
		this.insertId = insertId,
		this.apiLink = apiLink,
		this.imgLinks = [],
		this.htmlImgs = '',
		this.error = false
	}
	getJson (url) {
		return new Promise(function(resolve, reject) {
			var xhr;
			xhr = new XMLHttpRequest();
			xhr.onreadystatechange = () => {
				if (xhr.readyState === 4) {
					xhr.status === 200 ? resolve(xhr.responseText) : reject('error');
				}
			}
			xhr.timeout = 15000;
			xhr.ontimeout = () => {
				reject('error');
			}
			xhr.open('GET', url, true);
			xhr.send();
		})
	}
	addImages () {
		this.getJson (this.apiLink)
        .then(imgs => {this.imgLinks = JSON.parse(imgs); 
        	if (this.imgLinks[0].response == 0){this.error = true;}; 
        	this.getHtml ();
        	this.getBig ()
        })
        .catch(error => console.log(error));
	}
	getHtml () {
		if (!this.error){
			for (var i = 0; i < this.imgLinks[0].imgs.length; i++) {
				this.htmlImgs += `<img src='/public/img/small/${this.imgLinks[0].imgs[i].imgLink}'>`;
			}
		}
		document.getElementById(this.insertId).innerHTML = this.htmlImgs;
	}
	getBig () {
		var img = document.getElementById(this.insertId);
		var items = img.getElementsByTagName('img');
		var bigImg = document.getElementById('big-img');
		for(let i = 0; i < items.length; i++){
			items[i].addEventListener("click", function() {
		  		let link = items[i].getAttribute('src');
		  		bigImg.innerHTML = `<img src='${link.replace('/small','')}'>`;

			});
		}
	}
}

let gallery = new gellaryAPI ('gallery', 'http://php1/API/getImages.php?get_image=all');
gallery.addImages();