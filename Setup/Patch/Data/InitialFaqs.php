<?php

namespace Biglidio\AnsweredQuestions\Setup\Patch\Data;

use Biglidio\AnsweredQuestions\Model\ResourceModel\Faq;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class InitialFaqs implements DataPatchInterface
{
    /** @var ModuleSetupDataInterface */
    protected $moduleSetupData;
    
    /** @var ResourceConnection */
    protected $resourceConnection;

    /**
     * InitialFaqs constructor
     *
     * @param ModuleDataSetupInterface $moduleSetupData
     * @param ResourceConnection $resourceConnection
     */
    public function __construct(
        ModuleDataSetupInterface $moduleSetupData,
        ResourceConnection $resourceConnection
    )
    {
        $this->moduleSetupData = $moduleSetupData;
        $this->resourceConnection = $resourceConnection;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply(): self
    {
        $connection = $this->resourceConnection->getConnection();
        $data = [
            [
                'question' => 'What is your best selling item?',
                'answer' => 'The item you buy!',
                'published' => 1
            ],
            [
                'question' => 'What is your customer support number?',
                'answer' => '212-867-5309. Ask for Jenny!',
                'published' => 1
            ],
            [
                'question' => 'When will I get my order?',
                'answer' => 'When it gets delivered, silly!',
                'published' => 0
            ]
        ];
        $connection->insertMultiple(Faq::MAIN_TABLE, $data);

        return $this;
    }
}