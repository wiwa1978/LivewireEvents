<?php

namespace App\Models;

use App\Models\User;
use App\Enums\AnimalType;
use App\Enums\AnimalStatus;
use App\Enums\ApprovalState;
use App\Enums\AnimalLocation;
use App\Enums\AnimalPublishState;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'user_id', 'slug', 'featured', 'published_state', 'published_at', 'approval_state', 'publish_price', 'feature_price', 'animal_type', 'location', 'age', 'gender', 'status', 'size', 'description', 'breed', 'reason_adoption', 'sterilized', 'chipped', 'passport', 'vaccinated', 'rabies', 'medicins', 'special_food', 'behavioural_problem', 'kids_friendly_6y', 'kids_friendly_14y', 'cats_friendly', 'dogs_friendly', 'environment',
        'affectionate', 'well_behaved', 'playful', 'everybody_friendly', 'needs_garden', 'potty_trained', 'car_friendly', 'home_alone', 'knows_commands','experience_required', 'environment', 'photo_main', 'photos_additional', 'videos', 'youtube_links', 'unpublish_reason', 'unpublish_at'

    ];

    protected $casts = [
        'animal_type'       =>  AnimalType::class,
        'location'          =>  AnimalLocation::class,
        'status'            =>  AnimalStatus::class,
        'publish_state'     =>  AnimalPublishState::class,
        'approval_state'    =>  ApprovalState::class,
        'videos'            =>  'array',
        'photos_additional' =>  'array',
        'youtube_links'     =>  'array',
        'chipped'           =>  'boolean',
        'passport'          =>  'boolean',
        'vaccinated'        =>  'boolean',
        'rabies'            =>  'boolean',
        'medicins'          =>  'boolean',
        'special_food'      =>  'boolean',
        'behavioural_problem'   =>  'boolean',
        'affectionate'      =>  'boolean',
        'well_behaved'      =>  'boolean',
        'playful'           =>  'boolean',
        'everybody_friendly' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeDogs($query)
    {
        return $query->where('animal_type', AnimalType::Dog);
    }

    public function scopeCats($query)
    {
        return $query->where('animal_type', AnimalType::Cat);
    }

    public function scopeOthers($query)
    {
        return $query->where('animal_type', AnimalType::Other);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeNotFeatured($query)
    {
        return $query->where('featured', false);
    }

}
