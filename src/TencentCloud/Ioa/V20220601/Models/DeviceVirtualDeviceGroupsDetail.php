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
 * @method integer getId() 获取<p>终端自定义分组id</p>
 * @method void setId(integer $Id) 设置<p>终端自定义分组id</p>
 * @method string getDeviceVirtualGroupName() 获取<p>自定义分组名称</p>
 * @method void setDeviceVirtualGroupName(string $DeviceVirtualGroupName) 设置<p>自定义分组名称</p>
 * @method integer getDeviceCount() 获取<p>设备数</p>
 * @method void setDeviceCount(integer $DeviceCount) 设置<p>设备数</p>
 * @method integer getOsType() 获取<p>系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）</p>
 * @method void setOsType(integer $OsType) 设置<p>系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）</p>
 * @method string getItime() 获取<p>创建时间</p>
 * @method void setItime(string $Itime) 设置<p>创建时间</p>
 * @method string getUtime() 获取<p>更新时间</p>
 * @method void setUtime(string $Utime) 设置<p>更新时间</p>
 */
class DeviceVirtualDeviceGroupsDetail extends AbstractModel
{
    /**
     * @var integer <p>终端自定义分组id</p>
     */
    public $Id;

    /**
     * @var string <p>自定义分组名称</p>
     */
    public $DeviceVirtualGroupName;

    /**
     * @var integer <p>设备数</p>
     */
    public $DeviceCount;

    /**
     * @var integer <p>系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）</p>
     */
    public $OsType;

    /**
     * @var string <p>创建时间</p>
     */
    public $Itime;

    /**
     * @var string <p>更新时间</p>
     */
    public $Utime;

    /**
     * @param integer $Id <p>终端自定义分组id</p>
     * @param string $DeviceVirtualGroupName <p>自定义分组名称</p>
     * @param integer $DeviceCount <p>设备数</p>
     * @param integer $OsType <p>系统类型（0: win，1：linux，2: mac，4：android，5：ios  ）</p>
     * @param string $Itime <p>创建时间</p>
     * @param string $Utime <p>更新时间</p>
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
