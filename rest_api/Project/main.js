async function getPosts() {
	let posts=await requestAsync('posts', 'GET', null);
	// let res= await fetch('http://server.ru/posts');
	// let posts= await res.json();
	
	document.querySelector('.posts').innerHTML='';
	posts.forEach((post)=>{
		document.querySelector('.posts').innerHTML+=`
		<div class="col-3">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">${post.title}</h5>
					<p class="card-text">${post.body}</p>
					<button class="btn btn-danger" onclick="deletePost(${post.id})">Удалить</button>
				</div>
			</div>
		</div>`
	})
};

async function addPost() {
	const title=document.getElementById('title').value,
		body=document.getElementById('body').value;

	let formData=new FormData();
	formData.append('title', title);
	formData.append('body', body);

	const data= await requestAsync('posts', 'POST', formData);

	console.log(data);

	if(data.status==="true"){
		document.getElementById('title').value='';
		document.getElementById('body').value='';
	}

	getPosts();
};

async function deletePost(id) {
	const data= await requestAsync('posts/'+id, 'DELETE', null);

	console.log(data);
	getPosts();
}

async function requestAsync(path, method, data) {
	let res= await fetch('http://server.ru/'+path, {
		method: method,
		body: data,
	});
	let answer=await res.json();
	return answer;
}

getPosts();