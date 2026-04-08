<?php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

new #[Layout('layouts.app-admin')] class extends Component
{
    use WithPagination; // 🔑 enable pagination methods
    
    public function delete($roleId)
    {
        $role = Role::findOrFail($roleId);
        $role->delete();
        session()->flash('message', 'Role deleted successfully.');
    }

    #[Computed]
    public function totalRolesCount()
    {
        return Role::count();
    }
    
    #[Computed()]
    public function roles()
    {
        return Role::with('permissions')
            ->select('id','name','created_at')
            ->latest()
            ->paginate(5);
    }
    
};