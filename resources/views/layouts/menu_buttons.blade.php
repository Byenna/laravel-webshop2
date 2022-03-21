<div class='welcome_menu'>
    <select @change="filter()" v-model="filters" class="btn btn-primary">
        <option selected value="all">All Products</option>
        <option value="machines">Machines</option>
        <option value="beans">Beans</option>
        <option value="cups">cups</option>
    </select>

        
    
    <button class="btn btn-primary" type="button" id="dropdownMenuButton1"
    data-bs-toggle="dropdown" aria-expanded="false">More Information &#9662;
    </button>
    

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="{{ URL::to('/contact') }}" style="color:#cad2c5"> Contact us</a></li>
        <li><a class="dropdown-item" href="{{ URL::to('/about') }}"
                style="color:#cad2c5">About</a></li>
    </ul>

    <div><a href="{{ url('/') }}" class="btn btn-primary">Home</a></div>
</div>
