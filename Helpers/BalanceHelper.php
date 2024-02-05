<?php

class BalanceHelper {
    const SOLUTION_SHARE = 'share';

    public function getCoinBalances(array $firstPersonSolutions, array $secondPersonSolutions): array
    {
        $firstPerson  = new Person();
        $secondPerson = new Person();

        $firstPerson->setSolutions($firstPersonSolutions);
        $secondPerson->setSolutions($secondPersonSolutions);

        $this->executeSolutions($firstPersonSolutions, $firstPerson, $secondPerson);
        $this->executeSolutions($secondPersonSolutions, $secondPerson, $firstPerson);

        return [$firstPerson->getBalance(), $secondPerson->getBalance()];
    }

    public function executeSolutions(array $solutions, Person $sharer, Person $receiver): void
    {
        foreach ($solutions as $solution) {
            if ($solution === self::SOLUTION_SHARE) {
                $sharer->share();
                $receiver->receive();
            }
        }
    }
}
