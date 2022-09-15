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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCmqQueues请求参数结构体
 *
 * @method integer getOffset() 获取分页时本页获取队列列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
 * @method void setOffset(integer $Offset) 设置分页时本页获取队列列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
 * @method integer getLimit() 获取分页时本页获取队列的个数，如果不传递该参数，则该参数默认为20，最大值为50。
 * @method void setLimit(integer $Limit) 设置分页时本页获取队列的个数，如果不传递该参数，则该参数默认为20，最大值为50。
 * @method string getQueueName() 获取根据QueueName进行过滤
 * @method void setQueueName(string $QueueName) 设置根据QueueName进行过滤
 * @method array getQueueNameList() 获取CMQ 队列名称列表过滤
 * @method void setQueueNameList(array $QueueNameList) 设置CMQ 队列名称列表过滤
 * @method boolean getIsTagFilter() 获取标签过滤查找时，需要设置为 true
 * @method void setIsTagFilter(boolean $IsTagFilter) 设置标签过滤查找时，需要设置为 true
 * @method array getFilters() 获取过滤器。目前支持按标签过滤，标签的Name需要加前缀“tag:”，例如：tag:负责人、tag:环境、tag:业务
 * @method void setFilters(array $Filters) 设置过滤器。目前支持按标签过滤，标签的Name需要加前缀“tag:”，例如：tag:负责人、tag:环境、tag:业务
 */
class DescribeCmqQueuesRequest extends AbstractModel
{
    /**
     * @var integer 分页时本页获取队列列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
     */
    public $Offset;

    /**
     * @var integer 分页时本页获取队列的个数，如果不传递该参数，则该参数默认为20，最大值为50。
     */
    public $Limit;

    /**
     * @var string 根据QueueName进行过滤
     */
    public $QueueName;

    /**
     * @var array CMQ 队列名称列表过滤
     */
    public $QueueNameList;

    /**
     * @var boolean 标签过滤查找时，需要设置为 true
     */
    public $IsTagFilter;

    /**
     * @var array 过滤器。目前支持按标签过滤，标签的Name需要加前缀“tag:”，例如：tag:负责人、tag:环境、tag:业务
     */
    public $Filters;

    /**
     * @param integer $Offset 分页时本页获取队列列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0
     * @param integer $Limit 分页时本页获取队列的个数，如果不传递该参数，则该参数默认为20，最大值为50。
     * @param string $QueueName 根据QueueName进行过滤
     * @param array $QueueNameList CMQ 队列名称列表过滤
     * @param boolean $IsTagFilter 标签过滤查找时，需要设置为 true
     * @param array $Filters 过滤器。目前支持按标签过滤，标签的Name需要加前缀“tag:”，例如：tag:负责人、tag:环境、tag:业务
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("QueueNameList",$param) and $param["QueueNameList"] !== null) {
            $this->QueueNameList = $param["QueueNameList"];
        }

        if (array_key_exists("IsTagFilter",$param) and $param["IsTagFilter"] !== null) {
            $this->IsTagFilter = $param["IsTagFilter"];
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
