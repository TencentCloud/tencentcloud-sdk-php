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
 * SearchLog请求参数结构体
 *
 * @method integer getStartTime() 获取起始时间unix 毫秒时间戳
 * @method void setStartTime(integer $StartTime) 设置起始时间unix 毫秒时间戳
 * @method integer getEndTime() 获取结束时间unix 毫秒时间戳
 * @method void setEndTime(integer $EndTime) 设置结束时间unix 毫秒时间戳
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method integer getPage() 获取页码
 * @method void setPage(integer $Page) 设置页码
 * @method integer getLimit() 获取每页数据大小
 * @method void setLimit(integer $Limit) 设置每页数据大小
 * @method array getFilter() 获取筛选条件
 * @method void setFilter(array $Filter) 设置筛选条件
 * @method array getOrderFields() 获取排序数组
 * @method void setOrderFields(array $OrderFields) 设置排序数组
 * @method string getOrderBy() 获取排序方式，asc 从旧到新，desc 从新到旧
 * @method void setOrderBy(string $OrderBy) 设置排序方式，asc 从旧到新，desc 从新到旧
 */
class SearchLogRequest extends AbstractModel
{
    /**
     * @var integer 起始时间unix 毫秒时间戳
     */
    public $StartTime;

    /**
     * @var integer 结束时间unix 毫秒时间戳
     */
    public $EndTime;

    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var integer 页码
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
     * @var array 排序数组
     */
    public $OrderFields;

    /**
     * @var string 排序方式，asc 从旧到新，desc 从新到旧
     */
    public $OrderBy;

    /**
     * @param integer $StartTime 起始时间unix 毫秒时间戳
     * @param integer $EndTime 结束时间unix 毫秒时间戳
     * @param string $EventBusId 事件集ID
     * @param integer $Page 页码
     * @param integer $Limit 每页数据大小
     * @param array $Filter 筛选条件
     * @param array $OrderFields 排序数组
     * @param string $OrderBy 排序方式，asc 从旧到新，desc 从新到旧
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

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = $param["OrderFields"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
