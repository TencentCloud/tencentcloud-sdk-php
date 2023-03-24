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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogTagValue请求参数结构体
 *
 * @method integer getStartTime() 获取起始时间
 * @method void setStartTime(integer $StartTime) 设置起始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method string getGroupField() 获取聚合字段
 * @method void setGroupField(string $GroupField) 设置聚合字段
 * @method integer getPage() 获取页数
 * @method void setPage(integer $Page) 设置页数
 * @method integer getLimit() 获取每页数据大小
 * @method void setLimit(integer $Limit) 设置每页数据大小
 * @method array getFilter() 获取筛选条件
 * @method void setFilter(array $Filter) 设置筛选条件
 */
class DescribeLogTagValueRequest extends AbstractModel
{
    /**
     * @var integer 起始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var string 聚合字段
     */
    public $GroupField;

    /**
     * @var integer 页数
     */
    public $Page;

    /**
     * @var integer 每页数据大小
     */
    public $Limit;

    /**
     * @var array 筛选条件
     */
    public $Filter;

    /**
     * @param integer $StartTime 起始时间
     * @param integer $EndTime 结束时间
     * @param string $EventBusId 事件集ID
     * @param string $GroupField 聚合字段
     * @param integer $Page 页数
     * @param integer $Limit 每页数据大小
     * @param array $Filter 筛选条件
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("GroupField",$param) and $param["GroupField"] !== null) {
            $this->GroupField = $param["GroupField"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }
    }
}
