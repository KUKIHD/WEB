<?php
// Интерфейс итератора
interface MyIterator {
    public function hasNext(): bool;
    public function next(): ?string;
}

// Конкретный итератор
class ConcreteIterator implements MyIterator {
    private array $items = [];
    private int $position = 0;

    public function __construct(array $items) {
        $this->items = $items;
    }

    public function hasNext(): bool {
        return $this->position < count($this->items);
    }

    public function next(): ?string {
        if ($this->hasNext()) {
            return $this->items[$this->position++];
        }
        return null;
    }
}

// Коллекция
class Collection {
    private array $items = [];

    public function addItem(string $item): void {
        $this->items[] = $item;
    }

    public function getIterator(): MyIterator {
        return new ConcreteIterator($this->items);
    }
}

// Пример использования
$collection = new Collection();
$collection->addItem("Элемент 1");
$collection->addItem("Элемент 2");
$collection->addItem("Элемент 3");

$iterator = $collection->getIterator();
while ($iterator->hasNext()) {
    echo $iterator->next() . "\n";
}
?>