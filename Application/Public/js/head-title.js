Vue.component('header-item', {
  props: ['message', 'backUrl'],
  template: `<header class="evaluate-header"><router-link :to="backUrl"><span><i class="iconfont">&#xe697;</i></span></router-link> <div><span>{{message}}</span></div> </header>`
})