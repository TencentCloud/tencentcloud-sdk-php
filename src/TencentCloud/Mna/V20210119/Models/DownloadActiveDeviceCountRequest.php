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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadActiveDeviceCount请求参数结构体
 *
 * @method integer getPeriod() 获取<p>查询粒度。0:day, 1:week, 2:month, 不传默认为day</p>
 * @method void setPeriod(integer $Period) 设置<p>查询粒度。0:day, 1:week, 2:month, 不传默认为day</p>
 * @method integer getStartTime() 获取<p>开始时间。单位秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间。单位秒</p>
 * @method integer getEndTime() 获取<p>结束时间。单位秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间。单位秒</p>
 * @method string getDevGroup() 获取<p>设备组, 不传查询全部</p>
 * @method void setDevGroup(string $DevGroup) 设置<p>设备组, 不传查询全部</p>
 * @method string getApplicationId() 获取<p>应用ID，指控制台上设备管理中的动态设备应用ID，不传查询全部。</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>应用ID，指控制台上设备管理中的动态设备应用ID，不传查询全部。</p>
 * @method integer getLicenseType() 获取<p>license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权</p>
 * @method void setLicenseType(integer $LicenseType) 设置<p>license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权</p>
 */
class DownloadActiveDeviceCountRequest extends AbstractModel
{
    /**
     * @var integer <p>查询粒度。0:day, 1:week, 2:month, 不传默认为day</p>
     */
    public $Period;

    /**
     * @var integer <p>开始时间。单位秒</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间。单位秒</p>
     */
    public $EndTime;

    /**
     * @var string <p>设备组, 不传查询全部</p>
     */
    public $DevGroup;

    /**
     * @var string <p>应用ID，指控制台上设备管理中的动态设备应用ID，不传查询全部。</p>
     */
    public $ApplicationId;

    /**
     * @var integer <p>license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权</p>
     */
    public $LicenseType;

    /**
     * @param integer $Period <p>查询粒度。0:day, 1:week, 2:month, 不传默认为day</p>
     * @param integer $StartTime <p>开始时间。单位秒</p>
     * @param integer $EndTime <p>结束时间。单位秒</p>
     * @param string $DevGroup <p>设备组, 不传查询全部</p>
     * @param string $ApplicationId <p>应用ID，指控制台上设备管理中的动态设备应用ID，不传查询全部。</p>
     * @param integer $LicenseType <p>license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权</p>
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DevGroup",$param) and $param["DevGroup"] !== null) {
            $this->DevGroup = $param["DevGroup"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }
    }
}
