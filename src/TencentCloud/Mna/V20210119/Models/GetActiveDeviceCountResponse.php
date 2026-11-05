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
 * @method array getActiveDeviceList() 获取<p>激活设备统计</p>
 * @method void setActiveDeviceList(array $ActiveDeviceList) 设置<p>激活设备统计</p>
 * @method integer getPeriod() 获取<p>查询粒度，0:day, 1:week, 2:month, 不传默认为day</p>
 * @method void setPeriod(integer $Period) 设置<p>查询粒度，0:day, 1:week, 2:month, 不传默认为day</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method string getDevGroup() 获取<p>设备组</p>
 * @method void setDevGroup(string $DevGroup) 设置<p>设备组</p>
 * @method string getLicenseType() 获取<p>license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权</p>
 * @method void setLicenseType(string $LicenseType) 设置<p>license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权</p>
 * @method string getAppId() 获取<p>租户ID</p>
 * @method void setAppId(string $AppId) 设置<p>租户ID</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetActiveDeviceCountResponse extends AbstractModel
{
    /**
     * @var array <p>激活设备统计</p>
     */
    public $ActiveDeviceList;

    /**
     * @var integer <p>查询粒度，0:day, 1:week, 2:month, 不传默认为day</p>
     */
    public $Period;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>设备组</p>
     */
    public $DevGroup;

    /**
     * @var string <p>license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权</p>
     */
    public $LicenseType;

    /**
     * @var string <p>租户ID</p>
     */
    public $AppId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ActiveDeviceList <p>激活设备统计</p>
     * @param integer $Period <p>查询粒度，0:day, 1:week, 2:month, 不传默认为day</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param string $DevGroup <p>设备组</p>
     * @param string $LicenseType <p>license类型, 不传查询全部, 1: 租户月付，2：厂商月付，3：永久授权</p>
     * @param string $AppId <p>租户ID</p>
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
