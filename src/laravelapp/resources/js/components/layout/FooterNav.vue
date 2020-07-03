<template>
  <footer class="footer" :mode="mode">
    <div class="container is-fluid">
      <div class="content has-text-centered">
        <p>
          <strong>Bulma</strong> by
          <a href="http://jgthms.com">Jeremy Thomas</a>. The source
          code is licensed
          <a
            href="http://opensource.org/licenses/mit-license.php"
          >MIT</a>. The website content is licensed
          <a
            href="http://creativecommons.org/licenses/by-nc-sa/4.0/"
          >CC BY NC SA 4.0</a>.
        </p>
      </div>
    </div>
  </footer>
</template>
<script>
export default {
  name: "FooterNav",
  props: ["mode"]
};
</script>
<style lang="scss" scoped>
.footer {
  margin-top: 10vh;
  padding: 2rem 1.5rem;
}
</style>
