<div class="w-2/4 mt-50">
    <ul role="list" class="divide-y divide-gray-100 animate-pulse">
        @foreach (range(1, 5) as $index)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <!-- Avatar Skeleton -->
                    <div class="size-12 flex-none rounded-full bg-gray-200 dark:bg-gray-700"></div>

                    <div class="min-w-0 flex-auto space-y-2">
                        <!-- Nama Skeleton -->
                        <div class="h-4 w-32 rounded bg-gray-200 dark:bg-gray-700"></div>
                        <!-- Email Skeleton -->
                        <div class="h-3 w-48 rounded bg-gray-200 dark:bg-gray-700"></div>
                    </div>
                </div>

                <!-- Joined Date Skeleton -->
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end self-center">
                    <div class="h-3 w-20 rounded bg-gray-200 dark:bg-gray-700"></div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
