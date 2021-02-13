document.addEventListener("DOMContentLoaded", () => {

  axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
  };

  const VeeValidate = window.VeeValidate;
  const ValidationObserver = VeeValidate.ValidationObserver; // Watch form
  const ValidationProvider = VeeValidate.ValidationProvider; // Watch each field
  const VeeValidateRules = window.VeeValidateRules; // Validation rules

  Vue.component('validation-provider', VeeValidate.ValidationProvider);
  Vue.component('validation-observer', VeeValidate.ValidationObserver);
  Object.keys(VeeValidateRules).forEach(function (rule) {
    VeeValidate.extend(rule, VeeValidateRules[rule]);
  });

  VeeValidate.configure({
    classes: {
      valid: 'is-valid',
      invalid: 'is-invalid',
      dirty: ['is-dirty', 'is-dirty'], // multiple classes per flag!
    }
  });

  VeeValidate.localize("ja", {
    code: "ja",
    messages: {
      alpha: "アルファベットのみ使用できます",
      alpha_num: "英数字のみ使用できます",
      alpha_dash: "英数字とハイフン、アンダースコアのみ使用できます",
      alpha_spaces: "アルファベットと空白のみ使用できます",
      between: "{min}から{max}の間でなければなりません",
      confirmed: "｢{_field_}｣が一致しません",
      digits: "{length}桁の数字でなければなりません",
      dimensions: "幅{width}px、高さ{height}px以内でなければなりません",
      email: "有効なメールアドレスではありません",
      excluded: "不正な値です",
      ext: "有効なファイル形式ではありません",
      image: "有効な画像形式ではありません",
      is: "｢{_field_}｣が一致しません",
      length: "{length}文字でなければなりません",
      max_value: "{max}以下でなければなりません",
      max: "{length}文字以内にしてください",
      mimes: "有効なファイル形式ではありません",
      min_value: "{min}以上でなければなりません",
      min: "{length}文字以上でなければなりません",
      numeric: "数字のみ使用できます",
      integer: "整数値のみ使用できます",
      oneOf: "有効な値ではありません",
      regex: "｢{_field_}｣のフォーマットが正しくありません",
      required: "入力必須項目です",
      required_if: "入力必須項目です",
      size: "{size}KB以内でなければなりません"
    }
  });

  new Vue({
    el: '#contact',
    data: {
      formLabelClass: 'form-label fw-bold font-serif',
      formInputClass: 'contact-input form-control form-control-lg rounded-0',
      notification: '',
      state: '',
      isProcessing: false,
      form: {
        name: '',
        email: '',
        subject: '',
        message: ''
      },
    },
    methods: {
      onSubmit() {
        this.isProcessing = true;
        axios.post('/api/message', this.form)
          .then(res => {
            this.notification = res.data.notification;
            this.state = res.data.state;
            Object.keys(this.form).forEach(prop => this.form[prop] = '');
            this.$refs.observer.reset();
            this.isProcessing = false;
          })
          .catch(error => {
            this.notification = error.response.data.notification;
            this.state = error.response.data.state;
            this.isProcessing = false;
          })


      }
    }
  });
});
