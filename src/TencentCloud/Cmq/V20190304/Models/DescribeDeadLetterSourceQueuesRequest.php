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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDeadLetterQueueName() 获取死信队列名称
 * @method void setDeadLetterQueueName(string $DeadLetterQueueName) 设置死信队列名称
 * @method integer getLimit() 获取limit
 * @method void setLimit(integer $Limit) 设置limit
 * @method integer getOffset() 获取offset
 * @method void setOffset(integer $Offset) 设置offset
 * @method array getFilters() 获取过滤死信队列源队列名称，目前仅支持SourceQueueName过滤
 * @method void setFilters(array $Filters) 设置过滤死信队列源队列名称，目前仅支持SourceQueueName过滤
 */

/**
 *DescribeDeadLetterSourceQueues请求参数结构体
 */
class DescribeDeadLetterSourceQueuesRequest extends AbstractModel
{
    /**
     * @var string 死信队列名称
     */
    public $DeadLetterQueueName;

    /**
     * @var integer limit
     */
    public $Limit;

    /**
     * @var integer offset
     */
    public $Offset;

    /**
     * @var array 过滤死信队列源队列名称，目前仅支持SourceQueueName过滤
     */
    public $Filters;
    /**
     * @param string $DeadLetterQueueName 死信队列名称
     * @param integer $Limit limit
     * @param integer $Offset offset
     * @param array $Filters 过滤死信队列源队列名称，目前仅支持SourceQueueName过滤
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
        if (array_key_exists("DeadLetterQueueName",$param) and $param["DeadLetterQueueName"] !== null) {
            $this->DeadLetterQueueName = $param["DeadLetterQueueName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
