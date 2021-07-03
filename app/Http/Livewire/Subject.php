<?php

namespace App\Http\Livewire;

use App\Models\Subject as SB;
use Livewire\Component;

class Subject extends Component
{
    public $subjects, $name, $description, $image, $subject_uuid;
    public $updateMode = false;

    public function render()
    {
        $this->subjects = SB::all();
        return view('livewire.subject');
    }

    /**
     * Reset Input Fields after form submit
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->description = '';
    }

    /**
     * Save the data into model.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);
  
        SB::create($validatedDate);
  
        session()->flash('success', 'Subject Created Successfully.');
  
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $subject = SB::findOrFail($id);
        $this->subject_uuid = $id;
        $this->name = $subject->name;
        $this->description = $subject->description;
  
        $this->updateMode = true;
    }

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);
  
        $subject = SB::find($this->subject_uuid);
        $subject->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('success', 'Subject Updated Successfully.');
        $this->resetInputFields();
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        SB::find($id)->delete();
        session()->flash('success', 'Subject Deleted Successfully.');
    }
}
