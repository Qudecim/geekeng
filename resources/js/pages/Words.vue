<template>

    <a-button type="primary" @click="modal_add_word = true">Add word</a-button>

    <a-modal v-model:visible="modal_add_word" title="Add word" @ok="add_word">
        <a-input v-model:value="english" placeholder="English" />
        <br /><br />
        <a-input v-model:value="russian" placeholder="Russian" />
        <br /><br />
        <a-checkbox v-model:checked="isPhrase">Фраза</a-checkbox>
    </a-modal>

</template>

<script>
export default {
    name: "Words",
    data() {
        return {
            modal_add_word: false,
            english: '',
            russian: '',
            isPhrase: false
        }
    },
    methods: {
        add_word() {
            console.log('add word')
        },
    }
}
</script>

<style scoped>

</style>
