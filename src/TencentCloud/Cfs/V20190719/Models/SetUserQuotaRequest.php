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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetUserQuota请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统 ID,通过[查询文件系统列表](https://cloud.tencent.com/document/api/582/38170)获取
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID,通过[查询文件系统列表](https://cloud.tencent.com/document/api/582/38170)获取
 * @method string getUserType() 获取指定配额类型，包括Uid、Gid，Dir，分别代表用户配额，用户组配额，目录配额
 * @method void setUserType(string $UserType) 设置指定配额类型，包括Uid、Gid，Dir，分别代表用户配额，用户组配额，目录配额
 * @method string getUserId() 获取UID/GID信息
 * @method void setUserId(string $UserId) 设置UID/GID信息
 * @method integer getCapacityHardLimit() 获取容量硬限制，单位GiB。设置范围10-10000000。
 * @method void setCapacityHardLimit(integer $CapacityHardLimit) 设置容量硬限制，单位GiB。设置范围10-10000000。
 * @method integer getFileHardLimit() 获取文件硬限制，单位个。设置范围1000-100000000
 * @method void setFileHardLimit(integer $FileHardLimit) 设置文件硬限制，单位个。设置范围1000-100000000
 * @method string getDirectoryPath() 获取需设置目录配额的目录绝对路径，不同目录不可存在包含关系
 * @method void setDirectoryPath(string $DirectoryPath) 设置需设置目录配额的目录绝对路径，不同目录不可存在包含关系
 */
class SetUserQuotaRequest extends AbstractModel
{
    /**
     * @var string 文件系统 ID,通过[查询文件系统列表](https://cloud.tencent.com/document/api/582/38170)获取
     */
    public $FileSystemId;

    /**
     * @var string 指定配额类型，包括Uid、Gid，Dir，分别代表用户配额，用户组配额，目录配额
     */
    public $UserType;

    /**
     * @var string UID/GID信息
     */
    public $UserId;

    /**
     * @var integer 容量硬限制，单位GiB。设置范围10-10000000。
     */
    public $CapacityHardLimit;

    /**
     * @var integer 文件硬限制，单位个。设置范围1000-100000000
     */
    public $FileHardLimit;

    /**
     * @var string 需设置目录配额的目录绝对路径，不同目录不可存在包含关系
     */
    public $DirectoryPath;

    /**
     * @param string $FileSystemId 文件系统 ID,通过[查询文件系统列表](https://cloud.tencent.com/document/api/582/38170)获取
     * @param string $UserType 指定配额类型，包括Uid、Gid，Dir，分别代表用户配额，用户组配额，目录配额
     * @param string $UserId UID/GID信息
     * @param integer $CapacityHardLimit 容量硬限制，单位GiB。设置范围10-10000000。
     * @param integer $FileHardLimit 文件硬限制，单位个。设置范围1000-100000000
     * @param string $DirectoryPath 需设置目录配额的目录绝对路径，不同目录不可存在包含关系
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
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

        if (array_key_exists("DirectoryPath",$param) and $param["DirectoryPath"] !== null) {
            $this->DirectoryPath = $param["DirectoryPath"];
        }
    }
}
