<?php

namespace App;

use App\Patterns\Contracts\Io\Reader;
use App\Patterns\Contracts\Io\Writer;
use App\Patterns\Structure\Cinema;
use App\Patterns\Structure\Document;
use App\Patterns\Structure\DocumentState;
use App\Patterns\Structure\Editor;
use App\Patterns\Structure\NewsPapper;
use App\Patterns\Structure\PostOffice;
use App\Patterns\Structure\PostSubscribers;
use App\Patterns\Structure\QuickSorting;
use App\Patterns\Structure\RejectState;
use App\Patterns\Structure\SortStrategy;
use App\Patterns\Structure\SquareGenerator;
use App\Patterns\Structure\StripeGenerator;
use App\Patterns\Structure\SuccessState;

class Patterns
{
    /**
     * @param Writer $writer
     * @param Reader $reader
     * @throws \Exception
     */
    public function start(Writer $writer, Reader $reader): void
    {
        $writer->writeln("Map generator...");

        $this->run($writer, $reader);

    }

    /**
     * @param Writer $writer
     * @param Reader $reader
     */
    public function run(Writer $writer, Reader $reader): void
    {
        $writer->writeln('');
        $a = $reader->read();

        $splitString = str_split($a);

        $scopes = [];
        $this->findSkope($splitString, $scopes);
        foreach ($scopes as $key => $ar) {
            $arr = $splitString;
            $peace = array_slice($arr, intval($ar[0]), intval($ar[1] - $ar[0] - 1));
            $this->peaceMathEx($peace);
        }
    }

    /**
     * @param $splitString
     * @return array
     */
    private function findSkope(&$splitString , &$scopes)
    {
        $leftSkope = null;

        $rightSkope = null;

        foreach ($splitString as $key => $values) {
            if (in_array('(', $splitString)) {
                if ($values == '(') {
                    $leftSkope = $key;
                }
                if ($values == ')') {
                    $rightSkope = $key;
                    $scopes[] = [$leftSkope, $rightSkope];
                    unset($splitString[$leftSkope]);
                    unset($splitString[$rightSkope]);
                    $this->findSkope($splitString, $scopes);
                }
            }
        }
        return $scopes;
    }

    /**
     * @param $peaceArr
     */
    private function peaceMathEx($peaceArr)
    {
        foreach ($peaceArr as $key => $value) {
            if ($value == '*') {
                $rightNumber = $this->findRightNumber($peaceArr, $key);
                $leftNumber = $this->findLeftNumber($peaceArr, $key);
                print_r($rightNumber); print_r('  '); print_r($leftNumber);
            }
        }
    }

    /**
     * @param $peaceArr
     * @param $key
     * @return null|string
     */
    private function findRightNumber($peaceArr, $key)
    {
        $rightNumber = null;

        for ($i = $key + 1; $i <= count($peaceArr) - 1; $i++) {

            if (!in_array($peaceArr[$i], ['+', '-', '*', '/'])) {
                $rightNumber .= $peaceArr[$i];
            } else {
                break;
            }

        }
        return $rightNumber;
    }

    /**
     * @param $peaceArr
     * @param $key
     * @return null|string
     */
    private function findLeftNumber($peaceArr, $key)
    {
        $rightNumber = null;

        for ($i = $key-1; $i >=0; $i--) {

            if (!in_array($peaceArr[$i], ['+', '-', '*', '/'])) {
                $rightNumber .= $peaceArr[$i];
            } else {
                break;
            }

        }
        return $rightNumber;
    }

    /**
     * Abstract Factory pattern
     * @param Writer $writer
     * @param Reader $reader
     */
    public function cinemaGetter(Writer $writer, Reader $reader)
    {
        $writer->writeln('set language');
        $language = $reader->read();
        $cinema = new Cinema();
        $specifications = $cinema->createSpecification($language);
        print_r($specifications);
    }

    /**
     * Factory Method pattern
     * @return mixed
     */
    public function generateTetris()
    {
        $classNames = [SquareGenerator::class, StripeGenerator::class];
        $generator = array_rand($classNames);
        return $generator->returnFigure();
    }

    /**
     * Observer pattern
     */
    public function createPostSender()
    {
        $news = new NewsPapper();
        $postClass = new PostOffice();
        $subscriber = new PostSubscribers();
        $postClass->setSubscribers($subscriber);
        return $postClass->sendEdition($news);
    }

    /**
     * strategy pattern
     */
    public function arraySort()
    {
        $array = [5,2,6,5,8,4,2];
        $quickSort = new QuickSorting();
        $sorter = new SortStrategy($quickSort);
        print_r($sorter->strategySort($array));
    }

    /**
     * @return DocumentState|mixed
     */
    public function documentState()
    {
        $document = new Document();
        $docState = new DocumentState(new SuccessState());
        $document->setState($docState);
        $document->getState();
        $docState->setState(new RejectState());
        $document->getState();
        $docState->setState(new SuccessState());
        $document->getState();
    }

    /**
     * memento
     */
    public function editorMemento()
    {
        $editor = new Editor();
        $editor->setContext('oooo');
        $editor->setContext('aaaa');
        $save = $editor->saveContext();
        $editor->setContext('ggg');
        $text = $editor->getMemoryContext($save);
        print_r($text);
    }

}
