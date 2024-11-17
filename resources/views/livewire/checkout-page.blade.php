<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
	<h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
		Checkout
	</h1>
	<form wire:submit.prevent="placeOrder">
		<div class="grid grid-cols-12 gap-4">
			<div class="md:col-span-12 lg:col-span-8 col-span-12">
				<!-- Card -->
				<div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
					<!-- Shipping Address -->
					<div class="mb-6">
						<h2 class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
							Personal Details
						</h2>
						<div class="grid grid-cols-2 gap-4">
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="first_name">
									First Name
								</label>
								<input wire:model="first_name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="first_name" type="text">
								</input>
							</div>
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="last_name">
									Last Name
								</label>
								<input class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="last_name" type="text">
								</input>
							</div>
						</div>
						
						<div class="grid grid-cols-4 gap-4 mt-4">
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="first_name">
									SR-Code
								</label>
								<input wire:model="first_name" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="first_name" type="text">
								</input>
							</div>
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="last_name">
									Department
								</label>
								<select class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="department" name="department">
									<option value="" disabled selected>Select department</option>
									<option value="CAS">College of Arts and Sciences</option>
									<option value="CABEIHM">College of Accountancy, Business, Economics and International Hospitality Management</option>
									<option value="CET">College of Engineering Technology</option>
									<option value="CICS">College of Informatics and Computing Sciences</option>
									<option value="CTE">College of Teacher Education</option>
									<option value="N/A">None</option>
									<!-- Add more departments as needed -->
								</select>
							</div>
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="first_name">
									Course
								</label>
								<select id="course" class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
									<option value="" disabled selected>Select a course</option>
								</select>
							</div>
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="last_name">
									Section
								</label>
								<input class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="last_name" type="text">
								</input>
							</div>
						</div>
						<div class="grid grid-cols-2 gap-4 mt-4">
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="first_name">
									Phone Number
								</label>
								<div class="relative">
									<span class="absolute left-3 top-2 text-gray-500 dark:text-gray-300">(+63)</span>
									<input 
										wire:model="phone_number" 
										id="phone_number" 
										type="text" 
										maxlength="10"
										class="pl-16 w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none"
										oninput="formatPhoneNumber(this)"
									>
								</div>
							</div>
							<div>
								<label class="block text-gray-700 dark:text-white mb-1" for="last_name">
									Email Address
								</label>
								<input class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none" id="last_name" type="text" placeholder="{{auth()->user()->email ?? ''}}" disabled>
								</input>
							</div>
						</div>
						
						
					</div>
					<div class="text-lg font-semibold mb-4">
						Select Payment Method
					</div>
					<ul class="grid w-full gap-6 md:grid-cols-2">
						<li>
							<input class="hidden peer" id="hosting-small" name="hosting" required="" type="radio" value="hosting-small" />
							<label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700" for="hosting-small">
								<div class="block">
									<div class="w-full text-lg font-semibold">
										Select Payment Option
									</div>
								</div>
								<svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
									</path>
								</svg>
							</label>
						</li>
						<li>
							<input class="hidden peer" id="hosting-big" name="hosting" type="radio" value="hosting-big">
							<label class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700" for="hosting-big">
								<div class="block">
									<div class="w-full text-lg font-semibold">
										-
									</div>
								</div>
								<svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none" viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
									</path>
								</svg>
							</label>
							</input>
						</li>
					</ul>
				</div>
				<!-- End Card -->
			</div>
			<div class="md:col-span-12 lg:col-span-4 col-span-12">
				<div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
					<div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
						ORDER SUMMARY
					</div>
					<div class="flex justify-between mb-2 font-bold">
						<span>
							Subtotal
						</span>
						<span>
							{{Number::currency($grand_total, 'PHP')}}
						</span>
					</div>
					
					<hr class="bg-slate-400 my-4 h-1 rounded">
					<div class="flex justify-between mb-2 font-bold">
						<span>
							Grand Total
						</span>
						<span>
							{{Number::currency($grand_total, 'PHP')}}
						</span>
					</div>
					</hr>
				</div>
				<button class="bg-green-500 mt-4 w-full p-3 rounded-lg text-lg text-white hover:bg-green-600">
					Place Order
				</button>
				<div class="bg-white mt-4 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
					<div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
						Cart Summary
					</div>
					<ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
						@foreach ($cart_items as $cart_item)
							<li class="py-3 sm:py-4" wire:key="{{$cart_item['product_id']}}">
								<div class="flex items-center">
									<div class="flex-shrink-0">
										<img alt="{{$cart_item['name']}}" class="w-12 h-12 rounded-full" src="{{url('storage', $cart_item['image'])}}">
										</img>
									</div>
									<div class="flex-1 min-w-0 ms-4">
										<p class="text-sm font-medium text-gray-900 truncate dark:text-white">
											{{$cart_item['name']}}
										</p>
										<p class="text-sm text-gray-500 truncate dark:text-gray-400">
											Quantity: {{$cart_item['quantity']}}
										</p>
									</div>
									<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
										{{Number::currency($cart_item['total_amount'], 'PHP')}}
									</div>
								</div>
							</li>
						@endforeach
						
					</ul>
				</div>
			</div>
		</div>
	</form>
</div>
<script>
    const courses = {
        CAS: ['Bachelor of Science in Psychology', 'Bachelor of Science in Criminology'],
        CABEIHM: ['Bachelor of Science in Management Accounting', 'Bachelor of Science in Business Administration Major in Human Resource Management',
			'Bachelor of Science in Business Administration Major in Financial Management', 'Bachelor of Science in Business Administration Major in Marketing Management', 
			'Bachelor of Science in Business Administration Major in Hospitality Management', 'Bachelor of Science in Business Administration Major in Tourism Management'
		],
        CET: ['Bachelor of Computer Engineering Technology', 'Bachelor of Food Engineering Technology', 'Bachelor of Civil Engineering Technology', 'Bachelor of Electrical Engineering Technology',
			'Bachelor of Electronics Engineering Technology', 'Bachelor of Mechanical Engineering Technology', 'Bachelor of Mechatronics Engineering Technology', 'Bachelor of Automotive Engineering Technology',
			'Bachelor of Drafting Engineering Technology', 'N/A'
		 ],
        CICS: ['Bachelor of Science in Information Technology', 'Bachelor of Science in Information Technology Major in Business Analytics', 'Bachelor of Science in Information Technology Major in Network Technology', 'Bachelor of Science in Information Technology Major in Service Management',],
        CTE: [
            'Bachelor of Secondary Education Major in Social Studies',
            'Bachelor of Secondary Education Major in English',
            'Bachelor of Secondary Education Major in Filipino',
            'Bachelor of Secondary Education Major in Mathematics',
            'Bachelor of Secondary Education Major in Sciences',
            'Bachelor of Elementary Education',
            'Bachelor of Physical Education'
        ],
        "N/A": []
    };

    const departmentSelect = document.getElementById('department');
    const courseSelect = document.getElementById('course');

    departmentSelect.addEventListener('change', function() {
        const selectedDepartment = departmentSelect.value;

        // Clear the course dropdown
        courseSelect.innerHTML = '<option value="" disabled selected>Select a course</option>';

        if (selectedDepartment && courses[selectedDepartment]) {
            // Populate course options based on selected department
            courses[selectedDepartment].forEach(course => {
                const option = document.createElement('option');
                option.value = course;
                option.textContent = course;
                courseSelect.appendChild(option);
            });
        }
    });
	function formatPhoneNumber(input) {
        let value = input.value;
        // Remove all non-numeric characters
        value = value.replace(/\D/g, '');
        // Remove the leading '0' if it exists
        if (value.startsWith('0')) {
            value = value.slice(1);
        }
        // Update the input value
        input.value = value;
    }
</script>