<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method string getInstanceId() 获取<p>实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例Id</p>
 * @method string getVirtualHost() 获取<p>Vhost参数</p>
 * @method void setVirtualHost(string $VirtualHost) 设置<p>Vhost参数</p>
 * @method integer getOffset() 获取<p>分页Offset</p>
 * @method void setOffset(integer $Offset) 设置<p>分页Offset</p>
 * @method integer getLimit() 获取<p>分页Limit</p>
 * @method void setLimit(integer $Limit) 设置<p>分页Limit</p>
 * @method string getSearchWord() 获取<p>搜索关键词</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>搜索关键词</p>
 * @method string getQueueType() 获取<p>队列类型筛选，不填或 &quot;all&quot;：classic 和 quorum 队列；&quot;classic&quot;：筛选 classic 队列；&quot;quorum&quot;：筛选 quorum 队列</p>
 * @method void setQueueType(string $QueueType) 设置<p>队列类型筛选，不填或 &quot;all&quot;：classic 和 quorum 队列；&quot;classic&quot;：筛选 classic 队列；&quot;quorum&quot;：筛选 quorum 队列</p>
 * @method string getSortElement() 获取<p>排序依据的字段：<br>messages_ready - 消息堆积数；<br>publish - 生产速率；<br>deliver - 消费速率；<br>consumers - 在线消费者数量；</p>
 * @method void setSortElement(string $SortElement) 设置<p>排序依据的字段：<br>messages_ready - 消息堆积数；<br>publish - 生产速率；<br>deliver - 消费速率；<br>consumers - 在线消费者数量；</p>
 * @method string getSortOrder() 获取<p>排序顺序，asc 或 desc</p>
 * @method void setSortOrder(string $SortOrder) 设置<p>排序顺序，asc 或 desc</p>
 */
class DescribeRabbitMQServerlessQueuesRequest extends AbstractModel
{
    /**
     * @var string <p>实例Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Vhost参数</p>
     */
    public $VirtualHost;

    /**
     * @var integer <p>分页Offset</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页Limit</p>
     */
    public $Limit;

    /**
     * @var string <p>搜索关键词</p>
     */
    public $SearchWord;

    /**
     * @var string <p>队列类型筛选，不填或 &quot;all&quot;：classic 和 quorum 队列；&quot;classic&quot;：筛选 classic 队列；&quot;quorum&quot;：筛选 quorum 队列</p>
     */
    public $QueueType;

    /**
     * @var string <p>排序依据的字段：<br>messages_ready - 消息堆积数；<br>publish - 生产速率；<br>deliver - 消费速率；<br>consumers - 在线消费者数量；</p>
     */
    public $SortElement;

    /**
     * @var string <p>排序顺序，asc 或 desc</p>
     */
    public $SortOrder;

    /**
     * @param string $InstanceId <p>实例Id</p>
     * @param string $VirtualHost <p>Vhost参数</p>
     * @param integer $Offset <p>分页Offset</p>
     * @param integer $Limit <p>分页Limit</p>
     * @param string $SearchWord <p>搜索关键词</p>
     * @param string $QueueType <p>队列类型筛选，不填或 &quot;all&quot;：classic 和 quorum 队列；&quot;classic&quot;：筛选 classic 队列；&quot;quorum&quot;：筛选 quorum 队列</p>
     * @param string $SortElement <p>排序依据的字段：<br>messages_ready - 消息堆积数；<br>publish - 生产速率；<br>deliver - 消费速率；<br>consumers - 在线消费者数量；</p>
     * @param string $SortOrder <p>排序顺序，asc 或 desc</p>
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
