<?php

interface Animal {
    public function say();
}

class Dog implements Animal {
    public function say() {
        return 'woof-woof';
    }
}

class Cat implements Animal {
    public function say() {
        return 'meow';
    }
}

class AnimalVoiceProducer {
    public function makeVoice(Animal $animal) {
        return $animal->say();
    }
}

$voiceProducer = new AnimalVoiceProducer();
echo $voiceProducer->makeVoice(new Dog()) . PHP_EOL;
echo $voiceProducer->makeVoice(new Cat()) . PHP_EOL;
