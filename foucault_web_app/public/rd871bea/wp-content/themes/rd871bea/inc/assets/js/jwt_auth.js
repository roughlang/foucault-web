/**
 * 
 * {{login}}
 * 
 * 
 * 
 * 
 * if it can not login with jwt, all logout. 
 * - delete jwt in localStorage.
 * - create new api that all logout on laravel system in case pushing api.
 */
const app = Vue.createApp({
  data() {
    return {
      message: 'JWT from laravel to wordpess',
      localStorageKey: 'd7ad483d',
      accsessToken: null,
      token_type: null,
      expires_in: null,
      user: {},
      login: false,
    };
  },
  methods: {
    /**
     * Authenticate on Wordpress side with an access token (JWT) issued by Laravel
     * 
     */
    loginAuthentication() {
      /* get the rghlAccessToken on local storage */
      const accsessTokenAll = localStorage.getItem(this.localStorageKey);
      if (accsessTokenAll) {
        const accsessTokenAllObject = JSON.parse(accsessTokenAll);
        this.accsessToken = accsessTokenAllObject.access_token;
      } else {
        this.login = false;
        window.location.href = '/login';
      }
      
      if (this.accsessToken === null) {
        this.login = false;
      } else if (this.accsessToken) {
        /* get user */
        let form = new FormData();
        form.append('email', this.email);
        form.append('password', this.password);
        let config = {
          headers: {
            'Authorization': 'Bearer ' + this.accsessToken
          }
        };
        axios.post('/api/auth/me', form, config)
        .then(response => {
          this.user = response.data;
          // console.log(this.user.id);
          // console.log(this.user.user_unique_id);
          // console.log(this.user.name);
          // console.log(this.user.email);
          // console.log(this.user.created_at);
          if (this.user.id && this.user.user_unique_id) {
            this.login = true;
          } else {
            this.login = false;
            window.location.href = '/login';
          }
        })
        .catch(error => {
          console.log(error.response.data.errors);
          this.login = false;
          window.location.href = '/login';
        })
        .finally(() => {
          console.log(this.login);
        })
      }
    }
  },
  mounted() {
    this.loginAuthentication();
  }
});
app.mount('#nav');
