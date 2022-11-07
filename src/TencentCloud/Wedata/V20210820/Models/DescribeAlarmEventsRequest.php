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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmEvents请求参数结构体
 *
 * @method array getFilters() 获取过滤条件(key可以是：AlarmLevel,AlarmIndicator,KeyWord)
 * @method void setFilters(array $Filters) 设置过滤条件(key可以是：AlarmLevel,AlarmIndicator,KeyWord)
 * @method array getOrderFields() 获取排序字段（AlarmTime）
 * @method void setOrderFields(array $OrderFields) 设置排序字段（AlarmTime）
 * @method integer getTaskType() 获取类型(201表示实时，202表示离线)
 * @method void setTaskType(integer $TaskType) 设置类型(201表示实时，202表示离线)
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getPageNumber() 获取当前页
 * @method void setPageNumber(integer $PageNumber) 设置当前页
 * @method integer getPageSize() 获取每页记录数
 * @method void setPageSize(integer $PageSize) 设置每页记录数
 */
class DescribeAlarmEventsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件(key可以是：AlarmLevel,AlarmIndicator,KeyWord)
     */
    public $Filters;

    /**
     * @var array 排序字段（AlarmTime）
     */
    public $OrderFields;

    /**
     * @var integer 类型(201表示实时，202表示离线)
     */
    public $TaskType;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 当前页
     */
    public $PageNumber;

    /**
     * @var integer 每页记录数
     */
    public $PageSize;

    /**
     * @param array $Filters 过滤条件(key可以是：AlarmLevel,AlarmIndicator,KeyWord)
     * @param array $OrderFields 排序字段（AlarmTime）
     * @param integer $TaskType 类型(201表示实时，202表示离线)
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $ProjectId 项目ID
     * @param integer $PageNumber 当前页
     * @param integer $PageSize 每页记录数
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

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
