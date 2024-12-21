{{--  <style src="{{ asset('dashboard/assets/multiSelect/css/searchSelect.css') }}"></style>
<div>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#about">About</a>
    <a href="#base">Base</a>
    <a href="#blog">Blog</a>
    <a href="#contact">Contact</a>
    <a href="#custom">Custom</a>
    <a href="#support">Support</a>
    <a href="#tools">Tools</a>
  </div>
</div>
</div>
<script src="{{ asset('dashboard/assets/multiSelect/js/searchSelect.js') }}"></script>  --}}
<style src="{{ asset('dashboard/assets/multiSelect/css/searchSelect.css') }}"></style>

<div class="col-12">
    <label for="customername-field" class="form-label">{{ trans('Dashboard/orders.order') }}</label>
    <div class="dropdown">
        <button onclick="myFunction()" class="form-control dropbtn">
            {{ $selectedOrder ? $selectedOrder->name : 'Choose Order' }}
        </button>
        <div id="myDropdown" class="dropdown-content">
            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
            @foreach ($orders as $order)
                <a href="#" onclick="selectOrder('{{ $order->id }}')">{{ $order->name }}</a>
            @endforeach
        </div>
    </div>
    <span class="form-text text-muted">{{ trans('Dashboard/orders.order') }}</span>
</div>
<br>

<script src="{{ asset('dashboard/assets/multiSelect/js/searchSelect.js') }}"></script>
<script>
    function selectOrder(orderId) {
        // You can customize this function to handle the selection logic
        // For now, let's assume you want to update the button text
        var selectedOrderName = document.getElementById("myDropdown").querySelector('a[href="#"][onclick^="selectOrder"][onclick$="'+orderId+'"]').innerText;
        document.querySelector(".dropbtn").innerText = selectedOrderName;
        
        // You may also want to update any hidden input field for form submission
        document.getElementById("order_id").value = orderId;

        // Close the dropdown after selection if needed
        closeDropdown();
    }

    function closeDropdown() {
        document.getElementById("myDropdown").classList.remove("show");
    }

    // Add your existing JavaScript functions for dropdown functionality here
</script>
