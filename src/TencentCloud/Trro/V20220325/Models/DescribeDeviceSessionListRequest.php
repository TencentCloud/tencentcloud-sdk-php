<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * DescribeDeviceSessionList请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method integer getPageNumber() 获取<p>页码，从1开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从1开始</p>
 * @method integer getPageSize() 获取<p>每页个数</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页个数</p>
 * @method string getDeviceId() 获取<p>设备ID</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>设备ID</p>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 */
class DescribeDeviceSessionListRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>页码，从1开始</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页个数</p>
     */
    public $PageSize;

    /**
     * @var string <p>设备ID</p>
     */
    public $DeviceId;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param integer $PageNumber <p>页码，从1开始</p>
     * @param integer $PageSize <p>每页个数</p>
     * @param string $DeviceId <p>设备ID</p>
     * @param integer $StartTime <p>开始时间</p>
     * @param integer $EndTime <p>结束时间</p>
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
