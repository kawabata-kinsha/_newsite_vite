export class PageScroll {

    $el: JQuery;
    duration: number;
    easing: string;
    num: number;

    constructor(el:string ,duration:number, num:number, easing:string = 'swing'){
        this.$el = $(el);
        this.duration = duration;
        this.easing = easing;
        this.num = num;
        this.event();
    }

    event(){
        this.$el.on('click', (e) => {
            e.preventDefault();
            const hash = $(e.currentTarget).attr('href');
            this.animation(hash);
        });
    }

    animation(hash: any){
        const offset = $(hash).offset();
        if(offset){
            $('html,body').animate({ scrollTop: offset.top - this.num}, this.duration, this.easing);
        }
    }
}