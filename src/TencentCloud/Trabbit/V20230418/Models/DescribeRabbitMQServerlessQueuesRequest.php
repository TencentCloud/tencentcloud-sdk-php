<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQServerlessQueues请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getVirtualHost() 获取Vhost参数
 * @method void setVirtualHost(string $VirtualHost) 设置Vhost参数
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method integer getLimit() 获取分页Limit
 * @method void setLimit(integer $Limit) 设置分页Limit
 * @method string getSearchWord() 获取搜索关键词
 * @method void setSearchWord(string $SearchWord) 设置搜索关键词
 * @method string getQueueType() 获取队列类型筛选，不填或 "all"：classic 和 quorum 队列；"classic"：筛选 classic 队列；"quorum"：筛选 quorum 队列
 * @method void setQueueType(string $QueueType) 设置队列类型筛选，不填或 "all"：classic 和 quorum 队列；"classic"：筛选 classic 队列；"quorum"：筛选 quorum 队列
 * @method string getSortElement() 获取排序依据的字段：
ConsumerNumber - 在线消费者数量；
MessageHeapCount - 消息堆积数；
MessageRateInOut - 生产消费速率之和；
MessageRateIn - 生产速率；
MessageRateOut - 消费速率；
 * @method void setSortElement(string $SortElement) 设置排序依据的字段：
ConsumerNumber - 在线消费者数量；
MessageHeapCount - 消息堆积数；
MessageRateInOut - 生产消费速率之和；
MessageRateIn - 生产速率；
MessageRateOut - 消费速率；
 * @method string getSortOrder() 获取排序顺序，ascend 或 descend
 * @method void setSortOrder(string $SortOrder) 设置排序顺序，ascend 或 descend
 */
class DescribeRabbitMQServerlessQueuesRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string Vhost参数
     */
    public $VirtualHost;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var integer 分页Limit
     */
    public $Limit;

    /**
     * @var string 搜索关键词
     */
    public $SearchWord;

    /**
     * @var string 队列类型筛选，不填或 "all"：classic 和 quorum 队列；"classic"：筛选 classic 队列；"quorum"：筛选 quorum 队列
     */
    public $QueueType;

    /**
     * @var string 排序依据的字段：
ConsumerNumber - 在线消费者数量；
MessageHeapCount - 消息堆积数；
MessageRateInOut - 生产消费速率之和；
MessageRateIn - 生产速率；
MessageRateOut - 消费速率；
     */
    public $SortElement;

    /**
     * @var string 排序顺序，ascend 或 descend
     */
    public $SortOrder;

    /**
     * @param string $InstanceId 实例Id
     * @param string $VirtualHost Vhost参数
     * @param integer $Offset 分页Offset
     * @param integer $Limit 分页Limit
     * @param string $SearchWord 搜索关键词
     * @param string $QueueType 队列类型筛选，不填或 "all"：classic 和 quorum 队列；"classic"：筛选 classic 队列；"quorum"：筛选 quorum 队列
     * @param string $SortElement 排序依据的字段：
ConsumerNumber - 在线消费者数量；
MessageHeapCount - 消息堆积数；
MessageRateInOut - 生产消费速率之和；
MessageRateIn - 生产速率；
MessageRateOut - 消费速率；
     * @param string $SortOrder 排序顺序，ascend 或 descend
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }

        if (array_key_exists("SortElement",$param) and $param["SortElement"] !== null) {
            $this->SortElement = $param["SortElement"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
