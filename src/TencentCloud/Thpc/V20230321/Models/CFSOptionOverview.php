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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CFS存储选项概览信息。
 *
 * @method string getLocalPath() 获取文件系统本地挂载路径。
 * @method void setLocalPath(string $LocalPath) 设置文件系统本地挂载路径。
 * @method string getRemotePath() 获取文件系统远程挂载ip及路径。
 * @method void setRemotePath(string $RemotePath) 设置文件系统远程挂载ip及路径。
 * @method string getProtocol() 获取文件系统协议类型。
<li>NFS 3.0。
<li>NFS 4.0。
<li>TURBO。
 * @method void setProtocol(string $Protocol) 设置文件系统协议类型。
<li>NFS 3.0。
<li>NFS 4.0。
<li>TURBO。
 * @method string getStorageType() 获取文件系统存储类型，默认值SD；其中 SD 为通用标准型标准型存储， HP为通用性能型存储， TB为turbo标准型， TP 为turbo性能型。
 * @method void setStorageType(string $StorageType) 设置文件系统存储类型，默认值SD；其中 SD 为通用标准型标准型存储， HP为通用性能型存储， TB为turbo标准型， TP 为turbo性能型。
 */
class CFSOptionOverview extends AbstractModel
{
    /**
     * @var string 文件系统本地挂载路径。
     */
    public $LocalPath;

    /**
     * @var string 文件系统远程挂载ip及路径。
     */
    public $RemotePath;

    /**
     * @var string 文件系统协议类型。
<li>NFS 3.0。
<li>NFS 4.0。
<li>TURBO。
     */
    public $Protocol;

    /**
     * @var string 文件系统存储类型，默认值SD；其中 SD 为通用标准型标准型存储， HP为通用性能型存储， TB为turbo标准型， TP 为turbo性能型。
     */
    public $StorageType;

    /**
     * @param string $LocalPath 文件系统本地挂载路径。
     * @param string $RemotePath 文件系统远程挂载ip及路径。
     * @param string $Protocol 文件系统协议类型。
<li>NFS 3.0。
<li>NFS 4.0。
<li>TURBO。
     * @param string $StorageType 文件系统存储类型，默认值SD；其中 SD 为通用标准型标准型存储， HP为通用性能型存储， TB为turbo标准型， TP 为turbo性能型。
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
        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
