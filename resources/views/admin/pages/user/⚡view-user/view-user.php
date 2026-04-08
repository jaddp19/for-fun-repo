<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts.app-admin')] class extends Component
{
    use WithPagination; // 🔑 enable pagination methods
    
    public function delete($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();
        session()->flash('message', 'User deleted successfully.');
    }
    
    /**
     * Computed property: total number of users.
     */
    #[Computed]
    public function totalUsersCount()
    {
        return User::count();
    }
    
    /**
     * Computed property: paginated users with roles.
     */
    #[Computed()]
    public function users()
    {
        
        return User::with('roles:id,name')
            ->select('id', 'name', 'email', 'created_at')
            ->latest()
            ->paginate(5);
    }
};