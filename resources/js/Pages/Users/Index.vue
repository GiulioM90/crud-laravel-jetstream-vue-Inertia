<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
defineProps({
    users: Array
})
</script>

<template>
    <AppLayout title="Users">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Utenti
            </h2>
        </template>
     <!-- This is an example component -->
<div class="max-w-2xl mx-auto my-8">

	<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr>

						<th scope="col" class="px-6 py-3">
							Id
						</th>
						<th scope="col" class="px-6 py-3">
							Username
						</th>
						<th scope="col" class="px-6 py-3">
							User Email
						</th>
						<th scope="col" class="px-6 py-3">
							Created at
						</th>

					</tr>
				</thead>
				<tbody>
					<tr v-for="user in users" :key="user.id"
						class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
				
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
							{{user.id}}
						</th>
						<td class="px-6 py-4">
							{{user.name}}
						</td>
						<td class="px-6 py-4">
							{{user.email}}
						</td>
						<td class="px-6 py-4">
							{{user.created_at}}
						</td>
					</tr>
			

				</tbody>
			</table>
		</div>
	</div>
    </AppLayout>
</template>


