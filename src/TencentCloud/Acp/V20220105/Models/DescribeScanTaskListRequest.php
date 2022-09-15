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
namespace TencentCloud\Acp\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanTaskList请求参数结构体
 *
 * @method integer getSource() 获取任务来源, -1:所有, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
 * @method void setSource(integer $Source) 设置任务来源, -1:所有, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
 * @method integer getPlatform() 获取应用平台, 0:android, 1:ios, 2:小程序
 * @method void setPlatform(integer $Platform) 设置应用平台, 0:android, 1:ios, 2:小程序
 * @method string getTaskStatuses() 获取任务状态,可多值查询,例如:"1,2,3" 0:默认值(待检测/待咨询), 1.检测中, 2:待评估, 3:评估中, 4:任务完成/咨询完成, 5:任务失败, 6:咨询中;
 * @method void setTaskStatuses(string $TaskStatuses) 设置任务状态,可多值查询,例如:"1,2,3" 0:默认值(待检测/待咨询), 1.检测中, 2:待评估, 3:评估中, 4:任务完成/咨询完成, 5:任务失败, 6:咨询中;
 * @method string getTaskTypes() 获取任务类型,可多值查询,采用逗号分隔,例如:"0,1" 0:基础版, 1:专家版, 2:本地化
 * @method void setTaskTypes(string $TaskTypes) 设置任务类型,可多值查询,采用逗号分隔,例如:"0,1" 0:基础版, 1:专家版, 2:本地化
 * @method integer getPageNo() 获取页码
 * @method void setPageNo(integer $PageNo) 设置页码
 * @method integer getPageSize() 获取页码大小
 * @method void setPageSize(integer $PageSize) 设置页码大小
 * @method string getAppName() 获取应用名称或小程序名称(可选参数)
 * @method void setAppName(string $AppName) 设置应用名称或小程序名称(可选参数)
 * @method string getStartTime() 获取查询时间范围, 查询开始时间(2021-09-30 或 2021-09-30 10:57:34)
 * @method void setStartTime(string $StartTime) 设置查询时间范围, 查询开始时间(2021-09-30 或 2021-09-30 10:57:34)
 * @method string getEndTime() 获取查询时间范围, 查询结束时间(2021-09-30 或 2021-09-30 10:57:34)
 * @method void setEndTime(string $EndTime) 设置查询时间范围, 查询结束时间(2021-09-30 或 2021-09-30 10:57:34)
 */
class DescribeScanTaskListRequest extends AbstractModel
{
    /**
     * @var integer 任务来源, -1:所有, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
     */
    public $Source;

    /**
     * @var integer 应用平台, 0:android, 1:ios, 2:小程序
     */
    public $Platform;

    /**
     * @var string 任务状态,可多值查询,例如:"1,2,3" 0:默认值(待检测/待咨询), 1.检测中, 2:待评估, 3:评估中, 4:任务完成/咨询完成, 5:任务失败, 6:咨询中;
     */
    public $TaskStatuses;

    /**
     * @var string 任务类型,可多值查询,采用逗号分隔,例如:"0,1" 0:基础版, 1:专家版, 2:本地化
     */
    public $TaskTypes;

    /**
     * @var integer 页码
     */
    public $PageNo;

    /**
     * @var integer 页码大小
     */
    public $PageSize;

    /**
     * @var string 应用名称或小程序名称(可选参数)
     */
    public $AppName;

    /**
     * @var string 查询时间范围, 查询开始时间(2021-09-30 或 2021-09-30 10:57:34)
     */
    public $StartTime;

    /**
     * @var string 查询时间范围, 查询结束时间(2021-09-30 或 2021-09-30 10:57:34)
     */
    public $EndTime;

    /**
     * @param integer $Source 任务来源, -1:所有, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
     * @param integer $Platform 应用平台, 0:android, 1:ios, 2:小程序
     * @param string $TaskStatuses 任务状态,可多值查询,例如:"1,2,3" 0:默认值(待检测/待咨询), 1.检测中, 2:待评估, 3:评估中, 4:任务完成/咨询完成, 5:任务失败, 6:咨询中;
     * @param string $TaskTypes 任务类型,可多值查询,采用逗号分隔,例如:"0,1" 0:基础版, 1:专家版, 2:本地化
     * @param integer $PageNo 页码
     * @param integer $PageSize 页码大小
     * @param string $AppName 应用名称或小程序名称(可选参数)
     * @param string $StartTime 查询时间范围, 查询开始时间(2021-09-30 或 2021-09-30 10:57:34)
     * @param string $EndTime 查询时间范围, 查询结束时间(2021-09-30 或 2021-09-30 10:57:34)
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("TaskStatuses",$param) and $param["TaskStatuses"] !== null) {
            $this->TaskStatuses = $param["TaskStatuses"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
