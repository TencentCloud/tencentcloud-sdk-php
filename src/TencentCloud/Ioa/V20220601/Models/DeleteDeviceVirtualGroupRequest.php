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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDeviceVirtualGroup请求参数结构体
 *
 * @method string getDomainInstanceId() 获取管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method void setDomainInstanceId(string $DomainInstanceId) 设置管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method integer getDeviceVirtualGroupId() 获取必填，终端自定义分组id
 * @method void setDeviceVirtualGroupId(integer $DeviceVirtualGroupId) 设置必填，终端自定义分组id
 * @method integer getOsType() 获取必填，系统类型（0: win，1：linux，2: mac，4：android，5：ios，-1：全系统（SaaS一体化版本） ； 不传默认为0）(只支持32位)
 * @method void setOsType(integer $OsType) 设置必填，系统类型（0: win，1：linux，2: mac，4：android，5：ios，-1：全系统（SaaS一体化版本） ； 不传默认为0）(只支持32位)
 */
class DeleteDeviceVirtualGroupRequest extends AbstractModel
{
    /**
     * @var string 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     */
    public $DomainInstanceId;

    /**
     * @var integer 必填，终端自定义分组id
     */
    public $DeviceVirtualGroupId;

    /**
     * @var integer 必填，系统类型（0: win，1：linux，2: mac，4：android，5：ios，-1：全系统（SaaS一体化版本） ； 不传默认为0）(只支持32位)
     */
    public $OsType;

    /**
     * @param string $DomainInstanceId 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     * @param integer $DeviceVirtualGroupId 必填，终端自定义分组id
     * @param integer $OsType 必填，系统类型（0: win，1：linux，2: mac，4：android，5：ios，-1：全系统（SaaS一体化版本） ； 不传默认为0）(只支持32位)
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
        if (array_key_exists("DomainInstanceId",$param) and $param["DomainInstanceId"] !== null) {
            $this->DomainInstanceId = $param["DomainInstanceId"];
        }

        if (array_key_exists("DeviceVirtualGroupId",$param) and $param["DeviceVirtualGroupId"] !== null) {
            $this->DeviceVirtualGroupId = $param["DeviceVirtualGroupId"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }
    }
}
