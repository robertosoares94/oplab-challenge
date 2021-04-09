<?php
require_once ('Node.php');

/**
 * Class LinkedList
 */
class LinkedList
{

    public $head = null;

    /**
     * Creates a list with a give set of nodes.
     * @param array $nodes
     */
    public function __construct(...$nodes)
    {
        foreach ($nodes as $node) {
            $this->append($node);
        }
    }

    /**
     * Appends a node to the linked list.
     * @param mixed $data
     */
    public function append($data): void
    {
        if ($this->head == null) {
            $this->head = new Node($data);
            return;
        }

        $current = $this->head;

        while ($current->next != null) {
            $current = $current->next;
        }

        $current->next = new Node($data);
    }

    /**
     * Prepends a node to the head of the list.
     * @param mixed $data
     */
    public function prepend($data): void
    {
        $newHead = new Node($data);
        $newHead->next = $this->head;
        $this->head = $newHead;
    }

    /**
     * Deletes a node matching the given data.
     * @param mixed $data
     */
    public function delete($data): void
    {
        if ($this->head == null) {
            return;
        }

        if ($this->head->data == $data) {
            $this->head = $this->head->next;
            return;
        }

        $current = $this->head;

        while ($current->next != null) {
            if ($current->next->data == $data) {
                $current->next = $current->next->next;
                return;
            }

            $current = $current->next;
        }
    }

    public function __toString()
    {
        $current = $this->head;
        $string = '';

        while ($current != null) {
            $string .= $current->data;

            if ($current->next != null) {
                $string .= ', ';
            }

            $current = $current->next;
        }

        return $string;
    }
}

// Test algorithm
$list = new LinkedList();
$list->append('Middle');
$list->append('Last');
$list->prepend('First');


print $list;