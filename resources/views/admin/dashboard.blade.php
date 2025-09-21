<x-layouts.app title="Dashboard Admin">
  <h1>Selamat datang admin!</h1>
  <form method="POST" action="/logout">
    @csrf
    <button>Logout</button>
  </form>
</x-layouts.app>
