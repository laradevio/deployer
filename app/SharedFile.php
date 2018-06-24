<?php declare(strict_types=1);

namespace REBELinBLUE\Deployer;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use REBELinBLUE\Deployer\Traits\BroadcastChanges;
use REBELinBLUE\Deployer\Traits\HasTarget;

/**
 * Shared files or directories for a project.
 */
class SharedFile extends Model
{
    use SoftDeletes, BroadcastChanges, HasTarget;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'file', 'target_type', 'target_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
