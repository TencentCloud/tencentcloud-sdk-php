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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GooseFSVolume
 *
 * @method string getVolumeName() 获取<p>存储卷名</p>
 * @method void setVolumeName(string $VolumeName) 设置<p>存储卷名</p>
 * @method string getClusterId() 获取<p>gooseFS实例ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>gooseFS实例ID</p>
 * @method string getNamespace() 获取<p>gooseFS 命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>gooseFS 命名空间</p>
 * @method string getSubPath() 获取<p>在命名空间中的挂载路径</p>
 * @method void setSubPath(string $SubPath) 设置<p>在命名空间中的挂载路径</p>
 * @method string getFuseVersion() 获取<p>FuseVERSION描述</p>
 * @method void setFuseVersion(string $FuseVersion) 设置<p>FuseVERSION描述</p>
 * @method string getClientVersion() 获取<p>Client Version描述，例如 GOOSE-1.5.2</p>
 * @method void setClientVersion(string $ClientVersion) 设置<p>Client Version描述，例如 GOOSE-1.5.2</p>
 * @method string getMountOptions() 获取<p>默认挂载参数</p>
 * @method void setMountOptions(string $MountOptions) 设置<p>默认挂载参数</p>
 * @method string getJvmOptions() 获取<p>默认JVM参数</p>
 * @method void setJvmOptions(string $JvmOptions) 设置<p>默认JVM参数</p>
 */
class GooseFSVolume extends AbstractModel
{
    /**
     * @var string <p>存储卷名</p>
     */
    public $VolumeName;

    /**
     * @var string <p>gooseFS实例ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>gooseFS 命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>在命名空间中的挂载路径</p>
     */
    public $SubPath;

    /**
     * @var string <p>FuseVERSION描述</p>
     */
    public $FuseVersion;

    /**
     * @var string <p>Client Version描述，例如 GOOSE-1.5.2</p>
     */
    public $ClientVersion;

    /**
     * @var string <p>默认挂载参数</p>
     */
    public $MountOptions;

    /**
     * @var string <p>默认JVM参数</p>
     */
    public $JvmOptions;

    /**
     * @param string $VolumeName <p>存储卷名</p>
     * @param string $ClusterId <p>gooseFS实例ID</p>
     * @param string $Namespace <p>gooseFS 命名空间</p>
     * @param string $SubPath <p>在命名空间中的挂载路径</p>
     * @param string $FuseVersion <p>FuseVERSION描述</p>
     * @param string $ClientVersion <p>Client Version描述，例如 GOOSE-1.5.2</p>
     * @param string $MountOptions <p>默认挂载参数</p>
     * @param string $JvmOptions <p>默认JVM参数</p>
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }

        if (array_key_exists("FuseVersion",$param) and $param["FuseVersion"] !== null) {
            $this->FuseVersion = $param["FuseVersion"];
        }

        if (array_key_exists("ClientVersion",$param) and $param["ClientVersion"] !== null) {
            $this->ClientVersion = $param["ClientVersion"];
        }

        if (array_key_exists("MountOptions",$param) and $param["MountOptions"] !== null) {
            $this->MountOptions = $param["MountOptions"];
        }

        if (array_key_exists("JvmOptions",$param) and $param["JvmOptions"] !== null) {
            $this->JvmOptions = $param["JvmOptions"];
        }
    }
}
