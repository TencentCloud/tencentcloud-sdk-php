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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecentSessionList请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getPageNumber() 获取页码，从1开始
 * @method void setPageNumber(integer $PageNumber) 设置页码，从1开始
 * @method integer getPageSize() 获取每页个数
 * @method void setPageSize(integer $PageSize) 设置每页个数
 * @method string getDeviceId() 获取设备ID，支持过滤远端设备或现场设备
 * @method void setDeviceId(string $DeviceId) 设置设备ID，支持过滤远端设备或现场设备
 * @method integer getStartTime() 获取时间范围的起始时间。时间范围最大为最近两小时，若不传或超出范围，则起始时间按两小时前计算
 * @method void setStartTime(integer $StartTime) 设置时间范围的起始时间。时间范围最大为最近两小时，若不传或超出范围，则起始时间按两小时前计算
 * @method integer getEndTime() 获取时间范围的结束时间。时间范围最大为最近两小时，若不传或超出范围，则结束时间按当前时间计算
 * @method void setEndTime(integer $EndTime) 设置时间范围的结束时间。时间范围最大为最近两小时，若不传或超出范围，则结束时间按当前时间计算
 */
class DescribeRecentSessionListRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 页码，从1开始
     */
    public $PageNumber;

    /**
     * @var integer 每页个数
     */
    public $PageSize;

    /**
     * @var string 设备ID，支持过滤远端设备或现场设备
     */
    public $DeviceId;

    /**
     * @var integer 时间范围的起始时间。时间范围最大为最近两小时，若不传或超出范围，则起始时间按两小时前计算
     */
    public $StartTime;

    /**
     * @var integer 时间范围的结束时间。时间范围最大为最近两小时，若不传或超出范围，则结束时间按当前时间计算
     */
    public $EndTime;

    /**
     * @param string $ProjectId 项目ID
     * @param integer $PageNumber 页码，从1开始
     * @param integer $PageSize 每页个数
     * @param string $DeviceId 设备ID，支持过滤远端设备或现场设备
     * @param integer $StartTime 时间范围的起始时间。时间范围最大为最近两小时，若不传或超出范围，则起始时间按两小时前计算
     * @param integer $EndTime 时间范围的结束时间。时间范围最大为最近两小时，若不传或超出范围，则结束时间按当前时间计算
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
