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
 * 终端自定义分组列表数据
 *
 * @method integer getId() 获取终端自定义分组id
 * @method void setId(integer $Id) 设置终端自定义分组id
 * @method string getDeviceVirtualGroupName() 获取自定义分组名称
 * @method void setDeviceVirtualGroupName(string $DeviceVirtualGroupName) 设置自定义分组名称
 * @method integer getDeviceCount() 获取设备数
 * @method void setDeviceCount(integer $DeviceCount) 设置设备数
 * @method integer getOsType() 获取系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）
 * @method void setOsType(integer $OsType) 设置系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）
 * @method string getItime() 获取创建时间
 * @method void setItime(string $Itime) 设置创建时间
 * @method string getUtime() 获取更新时间
 * @method void setUtime(string $Utime) 设置更新时间
 */
class DeviceVirtualDeviceGroupsDetail extends AbstractModel
{
    /**
     * @var integer 终端自定义分组id
     */
    public $Id;

    /**
     * @var string 自定义分组名称
     */
    public $DeviceVirtualGroupName;

    /**
     * @var integer 设备数
     */
    public $DeviceCount;

    /**
     * @var integer 系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）
     */
    public $OsType;

    /**
     * @var string 创建时间
     */
    public $Itime;

    /**
     * @var string 更新时间
     */
    public $Utime;

    /**
     * @param integer $Id 终端自定义分组id
     * @param string $DeviceVirtualGroupName 自定义分组名称
     * @param integer $DeviceCount 设备数
     * @param integer $OsType 系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）
     * @param string $Itime 创建时间
     * @param string $Utime 更新时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DeviceVirtualGroupName",$param) and $param["DeviceVirtualGroupName"] !== null) {
            $this->DeviceVirtualGroupName = $param["DeviceVirtualGroupName"];
        }

        if (array_key_exists("DeviceCount",$param) and $param["DeviceCount"] !== null) {
            $this->DeviceCount = $param["DeviceCount"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("Itime",$param) and $param["Itime"] !== null) {
            $this->Itime = $param["Itime"];
        }

        if (array_key_exists("Utime",$param) and $param["Utime"] !== null) {
            $this->Utime = $param["Utime"];
        }
    }
}
