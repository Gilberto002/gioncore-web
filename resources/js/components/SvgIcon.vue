<template>
  <svg v-if="name === 'brain'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
    <path d="M9.5 2C8 2 6.5 3 6.5 4.5c0 .5.1 1 .3 1.4C5.2 6.6 4 8.2 4 10c0 1.1.4 2.1 1 2.9-.6.7-1 1.7-1 2.6C4 17.4 5.6 19 7.5 19c.3 0 .7 0 1-.1.5.7 1.3 1.1 2 1.1s1.5-.4 2-1.1c.3.1.7.1 1 .1 1.9 0 3.5-1.6 3.5-3.5 0-.9-.4-1.9-1-2.6.6-.8 1-1.8 1-2.9 0-1.8-1.2-3.4-2.8-4.1.2-.4.3-.9.3-1.4C14.5 3 13 2 11.5 2"/>
    <circle cx="12" cy="10" r="1"/>
    <path d="M12 11v4"/>
  </svg>
  <svg v-else-if="name === 'code'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
    <polyline points="16 18 22 12 16 6"/>
    <polyline points="8 6 2 12 8 18"/>
  </svg>
  <svg v-else-if="name === 'mobile'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
    <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
    <line x1="12" y1="18" x2="12.01" y2="18"/>
  </svg>
  <svg v-else-if="name === 'cloud'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
    <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/>
  </svg>
  <svg v-else-if="name === 'shield'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
  </svg>
  <svg v-else-if="name === 'chart'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
    <line x1="18" y1="20" x2="18" y2="10"/>
    <line x1="12" y1="20" x2="12" y2="4"/>
    <line x1="6" y1="20" x2="6" y2="14"/>
    <line x1="2" y1="20" x2="22" y2="20"/>
  </svg>
  <svg v-else viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
    <circle cx="12" cy="12" r="10"/>
  </svg>
</template>
<script setup>
defineProps({ name: String })
</script>