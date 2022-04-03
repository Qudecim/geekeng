<template>
    <a-layout style="min-height: 100vh">

        <a-layout-sider v-model:collapsed="collapsed" collapsible>
            <div class="logo" />
            <a-menu v-model:selectedKeys="selectedKeys" theme="dark" mode="inline">

                <a-menu-item key="1">
                    <router-link to="/">
                        <pie-chart-outlined />
                        <span>Home</span>
                    </router-link>
                </a-menu-item>

                <a-menu-item key="2">
                    <router-link to="/words">
                        <pie-chart-outlined />
                        <span>Words</span>
                    </router-link>
                </a-menu-item>

                <a-menu-item key="3">
                    <router-link to="/training">
                        <pie-chart-outlined />
                        <span>Training</span>
                    </router-link>
                </a-menu-item>

            </a-menu>
        </a-layout-sider>

        <a-layout>
            <a-layout-content style="margin: 16px">
                <router-view></router-view>
            </a-layout-content>
        </a-layout>

    </a-layout>
</template>
<script>
import { PieChartOutlined, DesktopOutlined, UserOutlined, TeamOutlined, FileOutlined } from '@ant-design/icons-vue';
import { defineComponent, ref } from 'vue';
export default defineComponent({
    components: {
        PieChartOutlined,
        DesktopOutlined,
        UserOutlined,
        TeamOutlined,
        FileOutlined,
    },

    data() {
        return {
            collapsed: ref(false),
            selectedKeys: ref(['1']),
        };
    },

});
</script>
<style>
#components-layout-demo-side .logo {
    height: 32px;
    margin: 16px;
    background: rgba(255, 255, 255, 0.3);
}

.site-layout .site-layout-background {
    background: #fff;
}
[data-theme='dark'] .site-layout .site-layout-background {
    background: #141414;
}
</style>
