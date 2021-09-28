<template>
  <div>
    <li class="list-group-item" :class="className">
      <slot></slot>
    </li>

    <small class="badge float-right" :class="badgeClass">You</small>
  </div>
</template>

<script>
export default {
  props: {
    color: {
      type: String,
    },
  },

  computed: {
    className() {
      return "list-group-item-" + this.color;
    },

    badgeClass() {
      return "badge-" + this.color;
    },
  },
};
</script>

<style>
</style>