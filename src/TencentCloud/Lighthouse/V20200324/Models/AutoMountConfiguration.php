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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动挂载并初始化该数据盘。
 *
 * @method string getInstanceId() 获取待挂载的实例ID。指定的实例必须处于“运行中”状态。
 * @method void setInstanceId(string $InstanceId) 设置待挂载的实例ID。指定的实例必须处于“运行中”状态。
 * @method string getMountPoint() 获取实例内的挂载点。仅Linux操作系统的实例可传入该参数, 不传则默认挂载在“/data/disk”路径下。
 * @method void setMountPoint(string $MountPoint) 设置实例内的挂载点。仅Linux操作系统的实例可传入该参数, 不传则默认挂载在“/data/disk”路径下。
 * @method string getFileSystemType() 获取文件系统类型。取值: “ext4”、“xfs”。仅Linux操作系统的实例可传入该参数, 不传则默认为“ext4”。
 * @method void setFileSystemType(string $FileSystemType) 设置文件系统类型。取值: “ext4”、“xfs”。仅Linux操作系统的实例可传入该参数, 不传则默认为“ext4”。
 */
class AutoMountConfiguration extends AbstractModel
{
    /**
     * @var string 待挂载的实例ID。指定的实例必须处于“运行中”状态。
     */
    public $InstanceId;

    /**
     * @var string 实例内的挂载点。仅Linux操作系统的实例可传入该参数, 不传则默认挂载在“/data/disk”路径下。
     */
    public $MountPoint;

    /**
     * @var string 文件系统类型。取值: “ext4”、“xfs”。仅Linux操作系统的实例可传入该参数, 不传则默认为“ext4”。
     */
    public $FileSystemType;

    /**
     * @param string $InstanceId 待挂载的实例ID。指定的实例必须处于“运行中”状态。
     * @param string $MountPoint 实例内的挂载点。仅Linux操作系统的实例可传入该参数, 不传则默认挂载在“/data/disk”路径下。
     * @param string $FileSystemType 文件系统类型。取值: “ext4”、“xfs”。仅Linux操作系统的实例可传入该参数, 不传则默认为“ext4”。
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
