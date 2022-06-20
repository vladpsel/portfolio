const app = Vue.createApp({
  data() {
    return {
      posts: [],
    }
  },
  methods: {

    async getPosts() {
      try {
        let response = await axios.get('/api/v1/posts');
        this.posts = response.data.posts;
      } catch (e) {
        console.log(e);
      }
    }

  },
  mounted() {
    this.getPosts();
  },
})

app.component('navButtons', {
  data() {
    return {
      buttons: [
        {
          year: 2022,
          isCurrent: true,
        },
        {
          year: 2021,
          isCurrent: false,
        },
        {
          year: 2020,
          isCurrent: false,
        },
        {
          year: 'All',
          isCurrent: false,
        },
      ]
    }
  },
  methods: {
    activateFilter(button) {
      this.buttons.forEach((item) => {
        item.isCurrent = false
      });
      button.isCurrent = true;
    }
  },
  template: `
  <ul class="top-nav-list list f-center mb-34">
    <li
      v-for="(button, index) in buttons"
      :key=button
    >
      <button type="button" name="button"
        :class="{
          'tab-btn': true,
          'active': button.isCurrent
        }"
        @click="activateFilter(button)"
      >

        {{ button.year }}
      </button>
    </li>

  </ul>
  `
})

app.component('portfolioCases', {
  data() {
    return {};
  },
  props: {
    posts: {
      type: Object,
    }
  },
  methods: {

  },
  template: `
  <ul class="case-list list-two-items list full np mx-w mb-34" v-bind:posts="posts">
    <li
      v-for="(post, i) in posts"
      :key=post
    >
      <a :href="post.link" class="content">
        <div class="img-wrp mb-18">
          <img :src="post.thumbnail" alt="">
        </div>
        <h2 class="subtitle-sm full np text-right">
        {{ post.title }}
        </h2>
      </a>
    </li>
  </ul>
  `
})

app.mount('#vueApp');
