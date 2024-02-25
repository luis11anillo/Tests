<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div x-data="select" class="relative w-60 pr-10 sm:pr-2 sm:w-36" @click.outside="open = false">
    <button @click="toggle" :class="(open) && 'ring-blue-600'" class="flex w-full items-center justify-between rounded bg-white p-2">
        <span x-text="(category == '') ? 'Categor&iacute;as' : category"></span>
        <i class="fas fa-chevron-down text-xl"></i>
    </button>

    <ul class="z-2 absolute mt-1 w-full rounded bg-gray-50" x-show="open">
        <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setCategory('Software CRM')">Software CRM</li>
        <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setCategory('Ventas')">Ventas</li>
        <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setCategory('DataCRM')">DataCRM</li>
        <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setCategory('Marketing')">Marketing</li>
        <li class="cursor-pointer select-none p-2 hover:bg-gray-200" @click="setCategory('Servicio al Cliente')">Servicio al Cliente</li>
    </ul>
</div>


<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("select", () => ({
            open: false,
            category: "",

            toggle() {
                this.open = !this.open;
            },

            setCategory(val) {
                this.category = val;
                this.open = false;
            },
        }));
    });
</script>