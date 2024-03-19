<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UtilisateurRequest extends FormRequest
{
 // le user est autorisé à faire cette requête ?
 public function authorize(): bool { return true;}
 // les règles de validation
 public function rules(): array {
 return [ 'qte' => ['required','numeric'],'nom' => ['required', 'alpha'], ];
 }
 // fonction appelée si la validation échoue
 public function failedValidation(Validator $validator)
 { throw new HttpResponseException(
 response()->json([ 'status' => 0,
 'message' => $validator->errors()]));
 }
}
