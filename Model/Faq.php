<?php

namespace Biglidio\AnsweredQuestions\Model;

use Magento\Framework\Model\AbstractModel;
use Biglidio\AnsweredQuestions\Model\ResourceModel\Faq as FaqResourceModel;

class Faq extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(FaqResourceModel::class);
    }
}