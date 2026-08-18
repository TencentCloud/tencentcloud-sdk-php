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
 * @method string getFileSystemId() 获取<p>文件系统 ID,通过<a href="https://cloud.tencent.com/document/api/582/38170">查询文件系统列表</a>获取</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统 ID,通过<a href="https://cloud.tencent.com/document/api/582/38170">查询文件系统列表</a>获取</p>
 * @method string getUserType() 获取<p>指定配额类型，包括Uid、Gid，Dir，分别代表用户配额，用户组配额，目录配额</p>
 * @method void setUserType(string $UserType) 设置<p>指定配额类型，包括Uid、Gid，Dir，分别代表用户配额，用户组配额，目录配额</p>
 * @method string getUserId() 获取<p>UID/GID信息</p>
 * @method void setUserId(string $UserId) 设置<p>UID/GID信息</p>
 * @method integer getCapacityHardLimit() 获取<p>容量硬限制，单位GiB。设置范围10-10000000。</p>
 * @method void setCapacityHardLimit(integer $CapacityHardLimit) 设置<p>容量硬限制，单位GiB。设置范围10-10000000。</p>
 * @method integer getFileHardLimit() 获取<p>文件硬限制，单位个。设置范围1000-100000000</p>
 * @method void setFileHardLimit(integer $FileHardLimit) 设置<p>文件硬限制，单位个。设置范围1000-100000000</p>
 * @method string getDirectoryPath() 获取<p>需设置配额的目录路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。不同目录之间不可存在包含关系。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需对挂载路径下的 test1/test2 设置配额，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需对挂载路径下的 test1/test2 设置配额，则入参值为 /cfs/subdir/test1/test2</li></ul>
 * @method void setDirectoryPath(string $DirectoryPath) 设置<p>需设置配额的目录路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。不同目录之间不可存在包含关系。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需对挂载路径下的 test1/test2 设置配额，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需对挂载路径下的 test1/test2 设置配额，则入参值为 /cfs/subdir/test1/test2</li></ul>
 */
class SetUserQuotaRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统 ID,通过<a href="https://cloud.tencent.com/document/api/582/38170">查询文件系统列表</a>获取</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>指定配额类型，包括Uid、Gid，Dir，分别代表用户配额，用户组配额，目录配额</p>
     */
    public $UserType;

    /**
     * @var string <p>UID/GID信息</p>
     */
    public $UserId;

    /**
     * @var integer <p>容量硬限制，单位GiB。设置范围10-10000000。</p>
     */
    public $CapacityHardLimit;

    /**
     * @var integer <p>文件硬限制，单位个。设置范围1000-100000000</p>
     */
    public $FileHardLimit;

    /**
     * @var string <p>需设置配额的目录路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。不同目录之间不可存在包含关系。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需对挂载路径下的 test1/test2 设置配额，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需对挂载路径下的 test1/test2 设置配额，则入参值为 /cfs/subdir/test1/test2</li></ul>
     */
    public $DirectoryPath;

    /**
     * @param string $FileSystemId <p>文件系统 ID,通过<a href="https://cloud.tencent.com/document/api/582/38170">查询文件系统列表</a>获取</p>
     * @param string $UserType <p>指定配额类型，包括Uid、Gid，Dir，分别代表用户配额，用户组配额，目录配额</p>
     * @param string $UserId <p>UID/GID信息</p>
     * @param integer $CapacityHardLimit <p>容量硬限制，单位GiB。设置范围10-10000000。</p>
     * @param integer $FileHardLimit <p>文件硬限制，单位个。设置范围1000-100000000</p>
     * @param string $DirectoryPath <p>需设置配额的目录路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。不同目录之间不可存在包含关系。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需对挂载路径下的 test1/test2 设置配额，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需对挂载路径下的 test1/test2 设置配额，则入参值为 /cfs/subdir/test1/test2</li></ul>
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
