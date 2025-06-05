<?php
// app/Models/Note.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NoteModel extends Model
{
use HasFactory;

protected $fillable = ['title', 'content', 'user_id'];

public function toArray (): array
{

    return ['title' =>$this->title,
        'content' =>$this->content,
        'user_id' =>$this->user_id];

}
    public static function fromArray(array $data): self
    {
        $note = new self();
        $note->title = $data['title'] ?? '';
        $note->content = $data['content'] ?? '';
        $note->user_id = $data['user_id'];
        return $note;
    }
}

