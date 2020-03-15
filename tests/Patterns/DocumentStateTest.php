<?php

namespace AppTests\Patterns;

use App\Patterns\Structure\Document;
use App\Patterns\Structure\DocumentState;
use App\Patterns\Structure\RejectState;
use PHPUnit\Framework\TestCase;

class DocumentStateTest extends TestCase
{
    /**
     * @test
     */
    public function testDocumentState()
    {
        //$document = new Document();

//        $docState = $this->getMockBuilder(DocumentState::class)
//            ->disableOriginalConstructor()
//
//            ->getMock();


        $rejectcStatus = $this->getMockBuilder(RejectState::class)
            ->disableOriginalConstructor()
            ->getMock();
        $ob = new DocumentState(new RejectState());

        $reflection = new \ReflectionClass($ob);
        $reflection_property = $reflection->getProperty('state');
        $reflection_property->setAccessible(true);

        $reflection_property->setValue($ob, new RejectState());
//        $docState = $this->getMockBuilder(DocumentState::class)
//            ->disableOriginalConstructor()
//
//            ->getMock();

//
//        $docState->expects($this->once())
//            ->method('setState')
//            ->with($rejectcStatus)
//            ->will($this->returnValue($rejectcStatus));



//
//        $doc->expects($this->once())
//            ->method('setState')
//            ->with($rejectcStatus)
//            ->will($this->returnValue($rejectcStatus));


        $this->AssertEquals($ob->writeState(), 'reject');

    }

}