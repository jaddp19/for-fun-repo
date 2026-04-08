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
        session()->flash('message', 'Employee deleted successfully.');
    }
    
    /**
     * Computed property: total number of users.
     */
    #[Computed]
    public function totalUsersCount()
    {
        return User::role('employee')->count();
    }
    
    /**
     * Computed property: paginated users with roles.
     */
    #[Computed()]
    public function users()
    {
        
        return User::role('employee')
            ->with('roles:id,name')
            ->select('id', 'name', 'email', 'created_at')
            ->latest()
            ->paginate(5);
    }
};