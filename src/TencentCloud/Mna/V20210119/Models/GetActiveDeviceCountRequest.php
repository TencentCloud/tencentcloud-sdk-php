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
 * GetActiveDeviceCount请求参数结构体
 *
 * @method integer getPeriod() 获取查询粒度。0:day, 1:week, 2:month, 不传默认为day
 * @method void setPeriod(integer $Period) 设置查询粒度。0:day, 1:week, 2:month, 不传默认为day
 * @method integer getStartTime() 获取开始时间。单位秒
 * @method void setStartTime(integer $StartTime) 设置开始时间。单位秒
 * @method integer getEndTime() 获取结束时间。单位秒
 * @method void setEndTime(integer $EndTime) 设置结束时间。单位秒
 * @method string getDevGroup() 获取设备组, 不传查询全部
 * @method void setDevGroup(string $DevGroup) 设置设备组, 不传查询全部
 * @method integer getLicenseType() 获取license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权
 * @method void setLicenseType(integer $LicenseType) 设置license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权
 */
class GetActiveDeviceCountRequest extends AbstractModel
{
    /**
     * @var integer 查询粒度。0:day, 1:week, 2:month, 不传默认为day
     */
    public $Period;

    /**
     * @var integer 开始时间。单位秒
     */
    public $StartTime;

    /**
     * @var integer 结束时间。单位秒
     */
    public $EndTime;

    /**
     * @var string 设备组, 不传查询全部
     */
    public $DevGroup;

    /**
     * @var integer license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权
     */
    public $LicenseType;

    /**
     * @param integer $Period 查询粒度。0:day, 1:week, 2:month, 不传默认为day
     * @param integer $StartTime 开始时间。单位秒
     * @param integer $EndTime 结束时间。单位秒
     * @param string $DevGroup 设备组, 不传查询全部
     * @param integer $LicenseType license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权
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

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }
    }
}
