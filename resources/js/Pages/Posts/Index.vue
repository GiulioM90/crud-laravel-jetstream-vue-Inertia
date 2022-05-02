<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';

defineProps({
	posts: Array
})
</script>

<template>
    <AppLayout title="Posts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Posts
            </h2>
        </template>
     <!-- This is an example component -->
<div class="w-9/12 mx-auto my-8">

	<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <Link href="/post-create" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Create post</Link>
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr>

						<th scope="col" class="px-6 py-3">
							Id
						</th>
						<th scope="col" class="px-6 py-3">
							Title
						</th>
						<th scope="col" class="px-6 py-3">
							Description
						</th>
						<th scope="col" class="px-6 py-3">
							Created at
						</th>
					

					</tr>
				</thead>
				<tbody>
					<tr v-for="post in posts" :key="post.id"
						class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
				
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
							{{post.id}}
						</th>
						<td class="px-6 py-4">
							{{post.title}}
						</td>
						<td class="px-6 py-4">
							{{post.description}}
						</td>
						<td class="px-6 py-4">
							{{post.created_at}}
						</td>
						<td class="px-6 py-4">
							<Link :href="`/post-edit/${post.id}`" class="rounded p-2 text-white bg-indigo-600 hover:bg-indigo-700"> Modify </Link>
						</td>
						<td class="px-6 py-4">
							<Link :href="`/post-delete/${post.id}`" method="delete" as="button" type="button" class="rounded p-2 text-white bg-indigo-600 hover:bg-indigo-700"> Delete </Link>
						</td>
					</tr>
			

				</tbody>
			</table>
		</div>
	</div>
    </AppLayout>
</template>


