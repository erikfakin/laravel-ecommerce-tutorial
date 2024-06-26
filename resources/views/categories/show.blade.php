<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $product->name }}
        </h2>
    </x-slot>


    <div class="bg-white">
        <div class="pt-6">
            <x-products.delete-button id="{{ $product->id }}" />
            <nav aria-label="Breadcrumb">
                <ol role="list"
                    class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="{{ route('products.index') }}"
                                class="mr-2 text-sm font-medium text-gray-900">Proizvodi</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li class="text-sm">
                        <a href="{{ route('products.category', ['categorySlug' => $product->category->slug]) }}"
                            aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">
                            {{ $product->category->name }}
                        </a>
                    </li>
                </ol>
            </nav>

            <!-- Image  -->
            <div class="mt-6 max-w-2xl sm:px-6">
                <div class="hidden overflow-hidden rounded-lg lg:block">
                    <img src="{{ asset('/storage/' . $product->image->src) }}" alt="{{ $product->image->alt }}"
                        class="h-full w-full object-cover object-center">
                </div>
            </div>

            <!-- Product info -->
            <div
                class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->name }}</h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Informacije o proizvodu</h2>
                    <p class="text-3xl tracking-tight text-gray-900">
                        {{ number_format($product->price, 2, '.', '') }} €
                    </p>

                    <x-products.addToCart :productId="$product->id" />
                </div>

                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only">Opis</h3>

                        <div class="space-y-6">
                            <p class="text-base text-gray-900">
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
