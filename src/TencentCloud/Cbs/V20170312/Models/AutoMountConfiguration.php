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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了新购云硬盘时自动将云硬盘初始化并挂载至云服务器内部的配置。
 *
 * @method array getInstanceId() 获取要挂载到的实例ID。
 * @method void setInstanceId(array $InstanceId) 设置要挂载到的实例ID。
 * @method array getMountPoint() 获取子机内的挂载点。
 * @method void setMountPoint(array $MountPoint) 设置子机内的挂载点。
 * @method string getFileSystemType() 获取文件系统类型，支持的有 ext4、xfs。
 * @method void setFileSystemType(string $FileSystemType) 设置文件系统类型，支持的有 ext4、xfs。
 */
class AutoMountConfiguration extends AbstractModel
{
    /**
     * @var array 要挂载到的实例ID。
     */
    public $InstanceId;

    /**
     * @var array 子机内的挂载点。
     */
    public $MountPoint;

    /**
     * @var string 文件系统类型，支持的有 ext4、xfs。
     */
    public $FileSystemType;

    /**
     * @param array $InstanceId 要挂载到的实例ID。
     * @param array $MountPoint 子机内的挂载点。
     * @param string $FileSystemType 文件系统类型，支持的有 ext4、xfs。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MountPoint",$param) and $param["MountPoint"] !== null) {
            $this->MountPoint = $param["MountPoint"];
        }

        if (array_key_exists("FileSystemType",$param) and $param["FileSystemType"] !== null) {
            $this->FileSystemType = $param["FileSystemType"];
        }
    }
}
