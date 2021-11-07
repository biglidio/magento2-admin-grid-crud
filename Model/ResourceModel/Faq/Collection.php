<?php

namespace Biglidio\AnsweredQuestions\Model\Faq;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Biglidio\AnsweredQuestions\Model\Faq as FaqModel;
use Biglidio\AnsweredQuestions\Model\ResourceModel\Faq as FaqResourceModel;

class Collection extends AbstractCollection
{
    
    public function _construct()
    {
        $this->_init(FaqModel::class, FaqResourceModel::class);
    }
}