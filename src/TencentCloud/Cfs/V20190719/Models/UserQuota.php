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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件系统配额信息
 *
 * @method string getUserType() 获取指定配额类型，包括Uid、Gid、Dir
 * @method void setUserType(string $UserType) 设置指定配额类型，包括Uid、Gid、Dir
 * @method string getUserId() 获取UID/GID信息
 * @method void setUserId(string $UserId) 设置UID/GID信息
 * @method integer getCapacityHardLimit() 获取容量硬限制，单位GiB
 * @method void setCapacityHardLimit(integer $CapacityHardLimit) 设置容量硬限制，单位GiB
 * @method integer getFileHardLimit() 获取文件硬限制，单位个
 * @method void setFileHardLimit(integer $FileHardLimit) 设置文件硬限制，单位个
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method integer getCapacityUsed() 获取容量使用，单位GiB
 * @method void setCapacityUsed(integer $CapacityUsed) 设置容量使用，单位GiB
 * @method integer getFileUsed() 获取文件使用个数，单位个
 * @method void setFileUsed(integer $FileUsed) 设置文件使用个数，单位个
 * @method string getDirectoryPath() 获取目录配额的目录绝对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDirectoryPath(string $DirectoryPath) 设置目录配额的目录绝对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取配置规则状态，inavailable---配置中，available --已生效，deleting--删除中，deleted 已删除，failed--配置失败
 * @method void setStatus(string $Status) 设置配置规则状态，inavailable---配置中，available --已生效，deleting--删除中，deleted 已删除，failed--配置失败
 */
class UserQuota extends AbstractModel
{
    /**
     * @var string 指定配额类型，包括Uid、Gid、Dir
     */
    public $UserType;

    /**
     * @var string UID/GID信息
     */
    public $UserId;

    /**
     * @var integer 容量硬限制，单位GiB
     */
    public $CapacityHardLimit;

    /**
     * @var integer 文件硬限制，单位个
     */
    public $FileHardLimit;

    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var integer 容量使用，单位GiB
     */
    public $CapacityUsed;

    /**
     * @var integer 文件使用个数，单位个
     */
    public $FileUsed;

    /**
     * @var string 目录配额的目录绝对路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DirectoryPath;

    /**
     * @var string 配置规则状态，inavailable---配置中，available --已生效，deleting--删除中，deleted 已删除，failed--配置失败
     */
    public $Status;

    /**
     * @param string $UserType 指定配额类型，包括Uid、Gid、Dir
     * @param string $UserId UID/GID信息
     * @param integer $CapacityHardLimit 容量硬限制，单位GiB
     * @param integer $FileHardLimit 文件硬限制，单位个
     * @param string $FileSystemId 文件系统ID
     * @param integer $CapacityUsed 容量使用，单位GiB
     * @param integer $FileUsed 文件使用个数，单位个
     * @param string $DirectoryPath 目录配额的目录绝对路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 配置规则状态，inavailable---配置中，available --已生效，deleting--删除中，deleted 已删除，failed--配置失败
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
        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("CapacityHardLimit",$param) and $param["CapacityHardLimit"] !== null) {
            $this->CapacityHardLimit = $param["CapacityHardLimit"];
        }

        if (array_key_exists("FileHardLimit",$param) and $param["FileHardLimit"] !== null) {
            $this->FileHardLimit = $param["FileHardLimit"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("CapacityUsed",$param) and $param["CapacityUsed"] !== null) {
            $this->CapacityUsed = $param["CapacityUsed"];
        }

        if (array_key_exists("FileUsed",$param) and $param["FileUsed"] !== null) {
            $this->FileUsed = $param["FileUsed"];
        }

        if (array_key_exists("DirectoryPath",$param) and $param["DirectoryPath"] !== null) {
            $this->DirectoryPath = $param["DirectoryPath"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
