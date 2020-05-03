<template>
    <div v-if="">
        <div v-for="data in datas" class="chat-box">
            <div v-if="data.from_user_id === target_userid" class="chat-face">
                <img src="https://lh3.googleusercontent.com/-2_U6eFWc8Tw/AAAAAAAAAAI/AAAAAAAAAAA/AAKWJJMRPew_24TI-XNFMczYgNs0hWUpjA.CMID/s192-c/photo.jpg" alt="誰かのチャット画像です。" width="90" height="90">
            </div>
            <div v-else class="chat-face">
                <img src="https://pbs.twimg.com/profile_images/1223671265770164224/Fj0bUIcC_x96.jpg" alt="自分のチャット画像です。" width="90" height="90">
            </div>
            <div class="chat-area">
            <div class="chat-hukidashi someone">
                @{{ data.message }}
            </div>
            
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ChatComponent",
        data () {
            return {
                datas: null
                target_userid: null
            }
        },
        mounted () {
            axios
            .get('chat_create/ajax_get_data') //ここにURLを入れる
            .then(response => (this.datas = response.data))
            .catch((e) => { alert(e); });
        }
    }
</script>
