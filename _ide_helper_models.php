<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Pagina
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property string $texto
 * @property string|null $imagem
 * @property string|null $mapa
 * @property string|null $email
 * @property string $tipo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereImagem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereMapa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereTexto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereTipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pagina whereUpdatedAt($value)
 */
	class Pagina extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

