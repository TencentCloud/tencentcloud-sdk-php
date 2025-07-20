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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 磁盘售卖类型
 *
 * @method string getDeviceType() 获取磁盘对应的实例类型。仅支持单节点基础型和集群版。
 * @method void setDeviceType(string $DeviceType) 设置磁盘对应的实例类型。仅支持单节点基础型和集群版。
 * @method array getDiskType() 获取可以选择的磁盘类型列表。
 * @method void setDiskType(array $DiskType) 设置可以选择的磁盘类型列表。
 */
class DiskTypeConfigItem extends AbstractModel
{
    /**
     * @var string 磁盘对应的实例类型。仅支持单节点基础型和集群版。
     */
    public $DeviceType;

    /**
     * @var array 可以选择的磁盘类型列表。
     */
    public $DiskType;

    /**
     * @param string $DeviceType 磁盘对应的实例类型。仅支持单节点基础型和集群版。
     * @param array $DiskType 可以选择的磁盘类型列表。
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
        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }
    }
}
