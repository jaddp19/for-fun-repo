<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
  <!-- Contact Hero -->
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Grid -->
    <div class="grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center">
      
      <!-- Text + Form -->
      <div class="lg:col-span-3">
        <h1 class="block text-3xl font-bold text-red-700 sm:text-4xl md:text-5xl lg:text-6xl">
          Contact Us
        </h1>
        <p class="mt-3 text-lg text-black dark:text-white">
          Got questions or need support?  
          <br>We’re here to help you manage sales, inventory, and customer service with confidence.
        </p>

        <!-- Contact Form -->
        <form class="mt-5 space-y-4">
          <div>
            <label for="name" class="block text-sm font-medium text-black dark:text-white">Name</label>
            <input type="text" id="name" name="name"
              class="mt-1 block w-full rounded-lg border border-red-700 bg-white dark:bg-black text-black dark:text-white px-4 py-2 placeholder:text-gray-500 focus:border-red-700 focus:ring-red-700 sm:text-sm"
              placeholder="Your name">
          </div>

          <div>
            <label for="email" class="block text-sm font-medium text-black dark:text-white">Email</label>
            <input type="email" id="email" name="email"
              class="mt-1 block w-full rounded-lg border border-red-700 bg-white dark:bg-black text-black dark:text-white px-4 py-2 placeholder:text-gray-500 focus:border-red-700 focus:ring-red-700 sm:text-sm"
              placeholder="you@example.com">
          </div>

          <div>
            <label for="message" class="block text-sm font-medium text-black dark:text-white">Message</label>
            <textarea id="message" name="message" rows="4"
              class="mt-1 block w-full rounded-lg border border-red-700 bg-white dark:bg-black text-black dark:text-white px-4 py-2 placeholder:text-gray-500 focus:border-red-700 focus:ring-red-700 sm:text-sm"
              placeholder="Write your message here..."></textarea>
          </div>

          <button type="submit"
            class="w-full py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-red-700 text-white focus:outline-hidden focus:bg-red-600">
            Send Message
          </button>
        </form>
      </div>

      <!-- Image -->
      <div class="lg:col-span-4 mt-10 lg:mt-0">
        <img class="w-full rounded-xl border-4 border-red-700"
          src="https://images.pexels.com/photos/374016/pexels-photo-374016.jpeg"
          alt="Contact Image">
      </div>
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Contact Hero -->
</div>

