    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        
        <span class="fs-4">Contact book</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('home.index') }}">Home</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('about.index') }}">About</a>
         <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('contacts.index') }}">Contacts</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('contacts.create') }}">Add new contact</a>
        
      </nav>
    </div>