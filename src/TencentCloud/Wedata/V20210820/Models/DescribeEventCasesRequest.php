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
 * DescribeEventCases请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getCategory() 获取事件实例目录
 * @method void setCategory(string $Category) 设置事件实例目录
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取每页数目
 * @method void setPageSize(integer $PageSize) 设置每页数目
 * @method string getEventName() 获取事件名称
 * @method void setEventName(string $EventName) 设置事件名称
 * @method string getEventType() 获取事件类型
 * @method void setEventType(string $EventType) 设置事件类型
 * @method string getEventSubType() 获取事件分割类型
 * @method void setEventSubType(string $EventSubType) 设置事件分割类型
 * @method string getEventBroadcastType() 获取事件广播类型
 * @method void setEventBroadcastType(string $EventBroadcastType) 设置事件广播类型
 * @method string getStatus() 获取事件实例状态
 * @method void setStatus(string $Status) 设置事件实例状态
 * @method string getCreationTimeStart() 获取事件实例最小创建时间
 * @method void setCreationTimeStart(string $CreationTimeStart) 设置事件实例最小创建时间
 * @method string getCreationTimeEnd() 获取事件实例最大创建时间
 * @method void setCreationTimeEnd(string $CreationTimeEnd) 设置事件实例最大创建时间
 * @method string getEventTriggeredTimeStart() 获取事件实例最小触发时间
 * @method void setEventTriggeredTimeStart(string $EventTriggeredTimeStart) 设置事件实例最小触发时间
 * @method string getEventTriggeredTimeEnd() 获取事件实例最大触发时间
 * @method void setEventTriggeredTimeEnd(string $EventTriggeredTimeEnd) 设置事件实例最大触发时间
 * @method string getLogTimeStart() 获取事件实例最小消费时间
 * @method void setLogTimeStart(string $LogTimeStart) 设置事件实例最小消费时间
 * @method string getLogTimeEnd() 获取事件实例最大消费时间
 * @method void setLogTimeEnd(string $LogTimeEnd) 设置事件实例最大消费时间
 * @method string getDimension() 获取事件实例数据时间
 * @method void setDimension(string $Dimension) 设置事件实例数据时间
 */
class DescribeEventCasesRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 事件实例目录
     */
    public $Category;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 每页数目
     */
    public $PageSize;

    /**
     * @var string 事件名称
     */
    public $EventName;

    /**
     * @var string 事件类型
     */
    public $EventType;

    /**
     * @var string 事件分割类型
     */
    public $EventSubType;

    /**
     * @var string 事件广播类型
     */
    public $EventBroadcastType;

    /**
     * @var string 事件实例状态
     */
    public $Status;

    /**
     * @var string 事件实例最小创建时间
     */
    public $CreationTimeStart;

    /**
     * @var string 事件实例最大创建时间
     */
    public $CreationTimeEnd;

    /**
     * @var string 事件实例最小触发时间
     */
    public $EventTriggeredTimeStart;

    /**
     * @var string 事件实例最大触发时间
     */
    public $EventTriggeredTimeEnd;

    /**
     * @var string 事件实例最小消费时间
     */
    public $LogTimeStart;

    /**
     * @var string 事件实例最大消费时间
     */
    public $LogTimeEnd;

    /**
     * @var string 事件实例数据时间
     */
    public $Dimension;

    /**
     * @param string $ProjectId 项目ID
     * @param string $Category 事件实例目录
     * @param integer $PageNumber 页码
     * @param integer $PageSize 每页数目
     * @param string $EventName 事件名称
     * @param string $EventType 事件类型
     * @param string $EventSubType 事件分割类型
     * @param string $EventBroadcastType 事件广播类型
     * @param string $Status 事件实例状态
     * @param string $CreationTimeStart 事件实例最小创建时间
     * @param string $CreationTimeEnd 事件实例最大创建时间
     * @param string $EventTriggeredTimeStart 事件实例最小触发时间
     * @param string $EventTriggeredTimeEnd 事件实例最大触发时间
     * @param string $LogTimeStart 事件实例最小消费时间
     * @param string $LogTimeEnd 事件实例最大消费时间
     * @param string $Dimension 事件实例数据时间
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
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

        if (array_key_exists("EventBroadcastType",$param) and $param["EventBroadcastType"] !== null) {
            $this->EventBroadcastType = $param["EventBroadcastType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreationTimeStart",$param) and $param["CreationTimeStart"] !== null) {
            $this->CreationTimeStart = $param["CreationTimeStart"];
        }

        if (array_key_exists("CreationTimeEnd",$param) and $param["CreationTimeEnd"] !== null) {
            $this->CreationTimeEnd = $param["CreationTimeEnd"];
        }

        if (array_key_exists("EventTriggeredTimeStart",$param) and $param["EventTriggeredTimeStart"] !== null) {
            $this->EventTriggeredTimeStart = $param["EventTriggeredTimeStart"];
        }

        if (array_key_exists("EventTriggeredTimeEnd",$param) and $param["EventTriggeredTimeEnd"] !== null) {
            $this->EventTriggeredTimeEnd = $param["EventTriggeredTimeEnd"];
        }

        if (array_key_exists("LogTimeStart",$param) and $param["LogTimeStart"] !== null) {
            $this->LogTimeStart = $param["LogTimeStart"];
        }

        if (array_key_exists("LogTimeEnd",$param) and $param["LogTimeEnd"] !== null) {
            $this->LogTimeEnd = $param["LogTimeEnd"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }
    }
}
