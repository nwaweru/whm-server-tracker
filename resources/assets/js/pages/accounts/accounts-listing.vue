<template>
    <div class="box">
        <!-- Main container -->
        <div>
            <nav class="level mb-3">
                <!-- Left side -->
                <div class="level-left">
                    <div class="level-item">

                    </div>
                </div>

                <!-- Right side -->
                <div class="level-right">
                    <p class="level-item"></p>
                    <p class="level-item"></p>
                    <p class="level-item"></p>
                    <p class="level-item"></p>
                </div>
            </nav>
        </div>

        <table class="table is-narrow is-fullwidth is-aligned-center">
            <thead>
            <tr class="no-hover">
                <th>Domain</th>
                <th>Server</th>
                <th>Username</th>
                <th>Backups</th>
                <th>Plan</th>
                <th><abbr title="Disk Used">Used</abbr> / <abbr title="Disk Limit">Limit</abbr></th>
                <th><abbr title="Disk Usage">Usage</abbr></th>
                <th></th>
            </tr>
            </thead>
            <tfoot>
            <tr class="no-hover">
                <td colspan="7">
                    <!-- Pagination -->
                    <nav class="pagination mt-1">
                        <a class="pagination-previous" title="This is the first page" disabled>Previous</a>
                        <a class="pagination-next">Next page</a>
                        <ul class="pagination-list">
                            <li>
                                <a class="pagination-link is-current">1</a>
                            </li>
                            <li>
                                <a class="pagination-link">2</a>
                            </li>
                            <li>
                                <a class="pagination-link">3</a>
                            </li>
                        </ul>
                    </nav>
                </td>
            </tr>
            </tfoot>
            <tbody>
            <tr v-for="item in items">
                <td>
                    <a href="#">{{ item.domain }}</a>
                </td>
                <td>
                    {{ item.server.name }}
                </td>
                <td>{{ item.user }}</td>
                <td>
                    <span class="tag is-success is-rounded" v-if="item.backup">Yes</span>
                    <span class="tag is-danger is-rounded" v-if="! item.backup">No</span>
                </td>
                <td>{{ item.plan }}</td>
                <td>{{ item.disk_used }} / {{ item.disk_limit }}</td>
                <td>{{ item.disk_usage }}</td>
                <td>
                    <div class="field is-grouped is-pulled-right">
                        <p class="control">
                            <b-dropdown position="is-bottom-left">
                                <button class="button" slot="trigger">
                                    <span class="icon">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </span>
                                </button>

                                <b-dropdown-item has-link>
                                    <a :href="item.domain_url" target="_blank">
                                        <span class="icon is-small">
                                            <i class="fa fa-globe"></i>
                                        </span>
                                        <span>View Site</span>
                                    </a>
                                </b-dropdown-item>

                                <hr class="dropdown-divider">

                                <b-dropdown-item has-link>
                                    <a :href="item.cpanel_url" target="_blank">
                                        <span class="icon is-small">
                                            <i class="fa fa-link"></i>
                                        </span>
                                        <span>Access cPanel</span>
                                    </a>
                                </b-dropdown-item>

                                <b-dropdown-item has-link>
                                    <a :href="item.whm_url" target="_blank">
                                        <span class="icon is-small">
                                            <i class="fa fa-link"></i>
                                        </span>
                                        <span>Access Server WHM</span>
                                    </a>
                                </b-dropdown-item>
                            </b-dropdown>
                        </p>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</template>
<script>
    export default {

        data() {
            return {
                items: false,
            };
        },

        created() {
            this.fetch();
        },

        methods: {
            fetch() {
                axios.get('/api/accounts')
                    .then(response => this.items = response.data);
            },

            menuAction(action, item) {
                switch (action) {
                    case 'site':
                        window.location.href = `/servers/${item.id}`;
                        break;

                    case 'cpanel':
                        window.location.href = `/servers/${item.id}/edit`;
                        break;

                    case 'whm':
                        window.location.href = `/servers/${item.id}/edit`;
                        break;

                    default:
                        break;
                }
            }
        }

    }
</script>