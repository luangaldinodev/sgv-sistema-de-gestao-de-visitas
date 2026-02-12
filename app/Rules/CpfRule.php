<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CpfRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! $this->isValidCpf($value)) {
            $fail('O CPF informado é inválido.');
        }
    }

    private function isValidCpf(string $cpf): bool
    {
        // Remove tudo que não for número
        $cpf = preg_replace('/\D/', '', $cpf);

        // Deve ter exatamente 11 dígitos
        if (strlen($cpf) !== 11) {
            return false;
        }

        // Caso o cidadão não saiba o CPF
        if ($cpf !== '99999999999'){
            // Evita CPFs com todos os dígitos iguais
            if (preg_match('/^(\d)\1{10}$/', $cpf)) {
                return false;
            }
        }

        // Validação dos dígitos verificadores
        for ($t = 9; $t < 11; $t++) {
            $soma = 0;

            for ($i = 0; $i < $t; $i++) {
                $soma += $cpf[$i] * (($t + 1) - $i);
            }

            $digito = (10 * $soma) % 11;
            $digito = ($digito === 10) ? 0 : $digito;

            if ($cpf[$t] != $digito) {
                return false;
            }
        }

        return true;
    }
}
