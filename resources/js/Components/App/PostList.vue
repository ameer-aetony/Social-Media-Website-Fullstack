<script setup>
import PostItem from '@/Components/App/PostItem.vue';
const post = {
    user: {
        id: 1,
        username: 'ameer aetony',
        avatar: 'https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/7b/7bbb130426b7de29fa27879bb5daf8260188bc9a_full.jpg'
    },
    body: `<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti praesentium molestiae ipsam reprehenderit qui nesciunt odio perferendis, nobis eos commodi harum hic, repellat voluptatem soluta quae autem laborum. Reiciendis, assumenda?</p>`,
    group: null,
    attachments: [
        {
            id: 1,
            name:'r.jpg',
            url: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFM2dHIaN0i-90PMc3fSp2sYvVg05nnVBgkNweQ7WE5w&s',
            mime: 'image/png'
        },
        {
            id: 2,
            name:'a.jpg',
            url: 'https://images.unsplash.com/opengraph/1x1.png?blend=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1438761681033-6461ffad8d80%3Fblend%3D000000%26blend-alpha%3D10%26blend-mode%3Dnormal%26crop%3Dfaces%252Cedges%26h%3D630%26mark%3Dhttps%253A%252F%252Fimages.unsplash.com%252Fopengraph%252Fsearch-input.png%253Fh%253D84%2526txt%253Drandom%252Bpeople%2526txt-align%253Dmiddle%25252Cleft%2526txt-clip%253Dellipsis%2526txt-color%253D000000%2526txt-pad%253D80%2526txt-size%253D40%2526txt-width%253D660%2526w%253D750%2526auto%253Dformat%2526fit%253Dcrop%2526q%253D60%26mark-align%3Dmiddle%252Ccenter%26mark-w%3D750%26w%3D1200%26auto%3Dformat%26fit%3Dcrop%26q%3D60%26ixid%3DM3wxMjA3fDB8MXxzZWFyY2h8M3x8cmFuZG9tJTIwcGVvcGxlfGVufDB8fHx8MTcxNTI3Mzk4M3ww%26ixlib%3Drb-4.0.3&blend-w=1&h=630&mark=https%3A%2F%2Fimages.unsplash.com%2Fopengraph%2Flogo.png&mark-align=top%2Cleft&mark-pad=50&mark-w=64&w=1200&auto=format&fit=crop&q=60',
            mime: 'image/png'
        },

        {
            id: 2,
            name:'document',
            url: '',
            mime: 'docx/png'
        }
    ],
    created_at: '2024-05-10 15:11'

}

const post2 = {
    user: {
        id: 1,
        username: 'wael salaum',
        avatar: 'https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/7b/7bbb130426b7de29fa27879bb5daf8260188bc9a_full.jpg'
    },
    body: `<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti praesentium molestiae ipsam reprehenderit qui nesciunt odio perferendis, nobis eos commodi harum hic, repellat voluptatem soluta quae autem laborum. Reiciendis, assumenda?</p>`,
    group: {
        id: 1,
        name: 'laravel developer'
    },
    created_at: '2024-05-10 15:11'

}
</script>

<template>
    <div class="h-screen overflow-auto" >
        <div>
            <PostItem :post="post" />
            <PostItem :post="post2" />
            <PostItem :post="post2" />
            <PostItem :post="post2" />
            <PostItem :post="post2" />
            <PostItem :post="post2" />
        </div>
    </div>
</template>
