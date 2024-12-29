<?php 
namespace App\Models;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model {

    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['title', 'author_id', 'category_id', 'slug', 'body'];

    protected $with = ['author', 'category'];
    public function author(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters) {

        $query->when(isset($filters['search']) ? $filters['search'] : false, function($query, $search) {
            $query->where('title', 'like' , '%' . $search . '%');
        });

        $query->when(isset($filters['category']) ? $filters['category'] : false, function($query, $category) {
            $query->whereHas('category', fn($query) => $query->where('slug', $category));
        });

        $query->when(isset($filters['author']) ? $filters['author'] : false, function($query, $author) {
            $query->whereHas('author', fn($query) => $query->where('username', $author));
        });
    }
}
?>
