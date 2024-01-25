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
 * DescribeDsEvent请求参数结构体
 *
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getEventName() 获取事件名称/项目名称
 * @method void setEventName(string $EventName) 设置事件名称/项目名称
 * @method string getEventType() 获取事件类型GENERAL、TIME_SERIES
 * @method void setEventType(string $EventType) 设置事件类型GENERAL、TIME_SERIES
 * @method string getEventSubType() 获取事件子类型SECOND、MIN、HOUR、DAY
 * @method void setEventSubType(string $EventSubType) 设置事件子类型SECOND、MIN、HOUR、DAY
 * @method string getDatetimeFormat() 获取日期格式
 * @method void setDatetimeFormat(string $DatetimeFormat) 设置日期格式
 * @method string getCreationTimeStart() 获取创建开始时间
 * @method void setCreationTimeStart(string $CreationTimeStart) 设置创建开始时间
 * @method string getCreationTimeEnd() 获取创建结束时间
 * @method void setCreationTimeEnd(string $CreationTimeEnd) 设置创建结束时间
 * @method array getOrderFields() 获取排序参数
 * @method void setOrderFields(array $OrderFields) 设置排序参数
 * @method array getOwnerNameList() 获取责任人筛选
 * @method void setOwnerNameList(array $OwnerNameList) 设置责任人筛选
 * @method string getTaskCycleType() 获取任务周期筛选
 * @method void setTaskCycleType(string $TaskCycleType) 设置任务周期筛选
 * @method array getTimeToLive() 获取0表示自定义，其他的表示固定参数，单位为天
 * @method void setTimeToLive(array $TimeToLive) 设置0表示自定义，其他的表示固定参数，单位为天
 */
class DescribeDsEventRequest extends AbstractModel
{
    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 事件名称/项目名称
     */
    public $EventName;

    /**
     * @var string 事件类型GENERAL、TIME_SERIES
     */
    public $EventType;

    /**
     * @var string 事件子类型SECOND、MIN、HOUR、DAY
     */
    public $EventSubType;

    /**
     * @var string 日期格式
     */
    public $DatetimeFormat;

    /**
     * @var string 创建开始时间
     */
    public $CreationTimeStart;

    /**
     * @var string 创建结束时间
     */
    public $CreationTimeEnd;

    /**
     * @var array 排序参数
     */
    public $OrderFields;

    /**
     * @var array 责任人筛选
     */
    public $OwnerNameList;

    /**
     * @var string 任务周期筛选
     */
    public $TaskCycleType;

    /**
     * @var array 0表示自定义，其他的表示固定参数，单位为天
     */
    public $TimeToLive;

    /**
     * @param integer $PageSize 分页大小
     * @param integer $PageNumber 页码
     * @param string $ProjectId 项目id
     * @param string $EventName 事件名称/项目名称
     * @param string $EventType 事件类型GENERAL、TIME_SERIES
     * @param string $EventSubType 事件子类型SECOND、MIN、HOUR、DAY
     * @param string $DatetimeFormat 日期格式
     * @param string $CreationTimeStart 创建开始时间
     * @param string $CreationTimeEnd 创建结束时间
     * @param array $OrderFields 排序参数
     * @param array $OwnerNameList 责任人筛选
     * @param string $TaskCycleType 任务周期筛选
     * @param array $TimeToLive 0表示自定义，其他的表示固定参数，单位为天
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }

        if (array_key_exists("DatetimeFormat",$param) and $param["DatetimeFormat"] !== null) {
            $this->DatetimeFormat = $param["DatetimeFormat"];
        }

        if (array_key_exists("CreationTimeStart",$param) and $param["CreationTimeStart"] !== null) {
            $this->CreationTimeStart = $param["CreationTimeStart"];
        }

        if (array_key_exists("CreationTimeEnd",$param) and $param["CreationTimeEnd"] !== null) {
            $this->CreationTimeEnd = $param["CreationTimeEnd"];
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("OwnerNameList",$param) and $param["OwnerNameList"] !== null) {
            $this->OwnerNameList = $param["OwnerNameList"];
        }

        if (array_key_exists("TaskCycleType",$param) and $param["TaskCycleType"] !== null) {
            $this->TaskCycleType = $param["TaskCycleType"];
        }

        if (array_key_exists("TimeToLive",$param) and $param["TimeToLive"] !== null) {
            $this->TimeToLive = $param["TimeToLive"];
        }
    }
}
