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
 * GetActiveDeviceCount返回参数结构体
 *
 * @method array getActiveDeviceList() 获取激活设备统计
 * @method void setActiveDeviceList(array $ActiveDeviceList) 设置激活设备统计
 * @method integer getPeriod() 获取查询粒度，0:day, 1:week, 2:month, 不传默认为day
 * @method void setPeriod(integer $Period) 设置查询粒度，0:day, 1:week, 2:month, 不传默认为day
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getDevGroup() 获取设备组
 * @method void setDevGroup(string $DevGroup) 设置设备组
 * @method string getLicenseType() 获取license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权
 * @method void setLicenseType(string $LicenseType) 设置license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权
 * @method string getAppId() 获取租户ID
 * @method void setAppId(string $AppId) 设置租户ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetActiveDeviceCountResponse extends AbstractModel
{
    /**
     * @var array 激活设备统计
     */
    public $ActiveDeviceList;

    /**
     * @var integer 查询粒度，0:day, 1:week, 2:month, 不传默认为day
     */
    public $Period;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 设备组
     */
    public $DevGroup;

    /**
     * @var string license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权
     */
    public $LicenseType;

    /**
     * @var string 租户ID
     */
    public $AppId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ActiveDeviceList 激活设备统计
     * @param integer $Period 查询粒度，0:day, 1:week, 2:month, 不传默认为day
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $DevGroup 设备组
     * @param string $LicenseType license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权
     * @param string $AppId 租户ID
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ActiveDeviceList",$param) and $param["ActiveDeviceList"] !== null) {
            $this->ActiveDeviceList = [];
            foreach ($param["ActiveDeviceList"] as $key => $value){
                $obj = new ActiveDeviceList();
                $obj->deserialize($value);
                array_push($this->ActiveDeviceList, $obj);
            }
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
