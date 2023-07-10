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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataTransformInfo请求参数结构体
 *
 * @method array getFilters() 获取<br><li> taskName

按照【加工任务名称】进行过滤。
类型：String

必选：否

<br><li> taskId

按照【加工任务id】进行过滤。
类型：String

必选：否

<br><li> srctopicId

按照【源topicId】进行过滤。
类型：String

必选：否

每次请求的Filters的上限为10，Filter.Values的上限为100。
 * @method void setFilters(array $Filters) 设置<br><li> taskName

按照【加工任务名称】进行过滤。
类型：String

必选：否

<br><li> taskId

按照【加工任务id】进行过滤。
类型：String

必选：否

<br><li> srctopicId

按照【源topicId】进行过滤。
类型：String

必选：否

每次请求的Filters的上限为10，Filter.Values的上限为100。
 * @method integer getOffset() 获取分页的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0。
 * @method integer getLimit() 获取分页单页限制数目，默认值为20，最大值100。
 * @method void setLimit(integer $Limit) 设置分页单页限制数目，默认值为20，最大值100。
 * @method integer getType() 获取默认值为2.   1: 获取单个任务的详细信息 2：获取任务列表
 * @method void setType(integer $Type) 设置默认值为2.   1: 获取单个任务的详细信息 2：获取任务列表
 * @method string getTaskId() 获取Type为1， 此参数必填
 * @method void setTaskId(string $TaskId) 设置Type为1， 此参数必填
 */
class DescribeDataTransformInfoRequest extends AbstractModel
{
    /**
     * @var array <br><li> taskName

按照【加工任务名称】进行过滤。
类型：String

必选：否

<br><li> taskId

按照【加工任务id】进行过滤。
类型：String

必选：否

<br><li> srctopicId

按照【源topicId】进行过滤。
类型：String

必选：否

每次请求的Filters的上限为10，Filter.Values的上限为100。
     */
    public $Filters;

    /**
     * @var integer 分页的偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 分页单页限制数目，默认值为20，最大值100。
     */
    public $Limit;

    /**
     * @var integer 默认值为2.   1: 获取单个任务的详细信息 2：获取任务列表
     */
    public $Type;

    /**
     * @var string Type为1， 此参数必填
     */
    public $TaskId;

    /**
     * @param array $Filters <br><li> taskName

按照【加工任务名称】进行过滤。
类型：String

必选：否

<br><li> taskId

按照【加工任务id】进行过滤。
类型：String

必选：否

<br><li> srctopicId

按照【源topicId】进行过滤。
类型：String

必选：否

每次请求的Filters的上限为10，Filter.Values的上限为100。
     * @param integer $Offset 分页的偏移量，默认值为0。
     * @param integer $Limit 分页单页限制数目，默认值为20，最大值100。
     * @param integer $Type 默认值为2.   1: 获取单个任务的详细信息 2：获取任务列表
     * @param string $TaskId Type为1， 此参数必填
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
