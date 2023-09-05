<template>
  <div id="footer" class="contrainer-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-sm columnFooter">
        <span>
          <h5>Get in touch</h5>
          <div>
            <i class="fas fa-map-marker-alt"></i> 123 Street, New York, USA
          </div>
          <div><i class="fas fa-phone"></i>+012 345 67890</div>
          <div><i class="fas fa-envelope"></i> info@example.com</div>
          <div id="share">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-youtube"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
        </span>
      </div>

      <div class="col-12 col-sm columnFooter">
        <span>
          <h5>Quick Links</h5>
          <div><a href="">About Us</a></div>
          <div><a href="">Contact Us</a></div>
          <div><a href="">Our Services</a></div>
          <div><a href="">Privacy Policy</a></div>
          <div><a href="">Term & Condition</a></div>
        </span>
      </div>

      <div class="col-12 col-sm columnFooter" id="newsletter">
        <span>
          <h5>Newsletter</h5>
          <div>Dolor amet sit justo amet elitr clita ipsum elitr est</div>
          <div class="row">
            <input class="col-12 col-lg-8 py-3 py-lg-0" type="text" placeholder="Your email" />
            <button class="col-12 col-lg-4 ">SIGNUP</button>
          </div>
        </span>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6 d-flex justify-content-center align-items-end">
        ©<a href="">Presto.it</a>, All Right Reserved.
        <a href="">Alessio Piras</a>
      </div>
    </div>
  </div>
</template>
  
  <script>
export default {
  name: "footer",
  components: {},
};
</script>
  
  <style lang="scss">
#footer {
  padding: 80px 0 10px 0;
  color: rgb(144, 146, 148);
  background-color: rgb(33, 37, 41);
  .columnFooter,.col-sm {
    display: flex;
    justify-content: center;
    div {
      margin: 7px 0;
    }
  }

  h5 {
    margin: 20px 0;
    color: rgb(0, 185, 142);
  }

  a {
    color: rgb(144, 146, 148);
    text-decoration: underline;
  }

  #newsletter {
    div:last-of-type {
      display: inline-block;
      border: 1px solid white;
      border-radius: 10px;
      padding: 6px;
      input {
        background-color: rgba($color: #000000, $alpha: 0);
        border: none; color: white;
      }
      button {
        border-radius: 5px;
        padding: 8px;
      }
    }
  }

  .col-6 {
    height: 50px;
    margin: 20px;
    a {
      color: rgb(51, 132, 255);
    }
  }

  #share {
    color: white;
    i {
      padding: 10px;
      border: 1px solid white;
      border-radius: 5px;
    }
  }
}
</style>
  