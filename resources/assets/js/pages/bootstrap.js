/*
 |--------------------------------------------------------------------------
 | Server Tracker Components
 |--------------------------------------------------------------------------
 |
 | Here we will load the Server Tracker components which makes up the core
 | client application.
 */

/**
 * Global Components ...
 */
Vue.component('search-box', require('./global/search-box.vue').default);

/**
 * Account Components ...
 */
Vue.component('accounts-listing', require('./accounts/accounts-listing.vue').default);

/**
 * Dashboard Components ...
 */
Vue.component('dashboard-stats', require('./dashboard/dashboard-stats.vue').default);
Vue.component('dashboard-servers', require('./dashboard/dashboard-servers.vue').default);
Vue.component('dashboard-latest-accounts', require('./dashboard/dashboard-latest-accounts.vue').default);

/**
 * Server Components ...
 */
Vue.component('servers-listing', require('./servers/servers-listing.vue').default);
Vue.component('servers-edit', require('./servers/servers-edit.vue').default);
Vue.component('servers-show', require('./servers/servers-show.vue').default);

/**
 * User Components ...
 */
Vue.component('users-listing', require('./users/users-listing.vue').default);
Vue.component('users-edit', require('./users/users-edit.vue').default);

/**
 * Search Components ...
 */
Vue.component('search-servers', require('./search/search-servers.vue').default);
Vue.component('search-accounts', require('./search/search-accounts.vue').default);
