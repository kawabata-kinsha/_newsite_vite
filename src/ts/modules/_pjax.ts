export class Pjax {
	protected link: string;
	protected target: string;
	protected delaytime: number;


	constructor(link: string, target: string, delaytime: number){
		this.link = link;
		this.target = target;
		this.delaytime = delaytime;
		this.init();
	}

	private init(){
		window.addEventListener("load", () => {
			this.onLoad();
		});

		document.querySelectorAll(this.link).forEach((link) => {
			link.addEventListener('click', (e) => {
				this.onClick(e, e.target);
			});
		});

		window.addEventListener('popstate',(e) => {
			this.onPopState(e);
		});
	}

	private onClick(e: any, self: any){
		e.preventDefault();
		const path: string = self.getAttribute('href');
		const title: string = '';
		if(path === ''){
			console.log(false);
		}else{
			this.beforeFetch();

			history.pushState(this.pushStateObj(path), title, path);
			setTimeout(() => {
				this.ajax(path);
			}, this.delaytime);
		}
	}

	private onPopState(e: any){
		this.beforeFetch();
		setTimeout(() => {
			this.ajax(this.getTarget(e));
		}, this.delaytime)
	}

	private ajax(path: string){
		const promise = fetch(path);
		promise.then((response) => {
			return response.text();
		}).then((data) => {
			const parser = new DOMParser();
			const html = parser.parseFromString(data, "text/html");
			this.changeTitle(html);
			this.changeBodyClass(html);
			this.changeContents(html);
			this.afterFetch();
		});
	}

	private pushStateObj(path: string){
		const state: { 'path': string} = {'path': path};
		return state;
	}

	private getTarget(e: any){
		const state = e.state;
		return state.path;
	}

	private changeTitle(html: Document){
		const el = html.querySelector('title');
		if(el){
			const nextTitle = el.innerText;
			document.title = nextTitle;
		}
	}
	private changeBodyClass(html: Document){
		const htmlBody = html.querySelector('body');
		const el = document.querySelector('body');
		if(htmlBody && el){
			const bodyClassList = el.classList['value'];
			el.setAttribute('class', bodyClassList);
		}
	}

	private changeContents(html: Document){
		const htmlTarget = html.querySelector(this.target);
		const el = document.querySelector(this.target);
		if(htmlTarget && el){
			const nextContents =  htmlTarget.innerHTML;
			el.innerHTML = nextContents;
		}
	}

	protected onLoad(){}

	protected beforeFetch(){}

	protected afterFetch(){}

}
