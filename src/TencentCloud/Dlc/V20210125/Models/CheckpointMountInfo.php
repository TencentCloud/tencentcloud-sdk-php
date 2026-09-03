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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Checkpoint 挂载摘要
 *
 * @method string getStorageType() 获取<p>存储类型：COS / CFS / CFS_TURBO / GOOSEFS</p>
 * @method void setStorageType(string $StorageType) 设置<p>存储类型：COS / CFS / CFS_TURBO / GOOSEFS</p>
 * @method string getMountPath() 获取<p>容器内挂载路径</p>
 * @method void setMountPath(string $MountPath) 设置<p>容器内挂载路径</p>
 * @method string getVolumeSubPath() 获取<p>COS key 前缀 或 CFS/GooseFS 子路径</p>
 * @method void setVolumeSubPath(string $VolumeSubPath) 设置<p>COS key 前缀 或 CFS/GooseFS 子路径</p>
 * @method string getBucket() 获取<p>实际访问的 COS bucket</p>
 * @method void setBucket(string $Bucket) 设置<p>实际访问的 COS bucket</p>
 * @method string getRegion() 获取<p>COS region</p>
 * @method void setRegion(string $Region) 设置<p>COS region</p>
 * @method boolean getPlatformManaged() 获取<p>是否平台托管桶（影响凭证选择）</p>
 * @method void setPlatformManaged(boolean $PlatformManaged) 设置<p>是否平台托管桶（影响凭证选择）</p>
 * @method string getSnapshotKey() 获取<p>快照在平台 COS 桶中的 key（仅 CFS/GooseFS 有值）</p>
 * @method void setSnapshotKey(string $SnapshotKey) 设置<p>快照在平台 COS 桶中的 key（仅 CFS/GooseFS 有值）</p>
 */
class CheckpointMountInfo extends AbstractModel
{
    /**
     * @var string <p>存储类型：COS / CFS / CFS_TURBO / GOOSEFS</p>
     */
    public $StorageType;

    /**
     * @var string <p>容器内挂载路径</p>
     */
    public $MountPath;

    /**
     * @var string <p>COS key 前缀 或 CFS/GooseFS 子路径</p>
     */
    public $VolumeSubPath;

    /**
     * @var string <p>实际访问的 COS bucket</p>
     */
    public $Bucket;

    /**
     * @var string <p>COS region</p>
     */
    public $Region;

    /**
     * @var boolean <p>是否平台托管桶（影响凭证选择）</p>
     */
    public $PlatformManaged;

    /**
     * @var string <p>快照在平台 COS 桶中的 key（仅 CFS/GooseFS 有值）</p>
     */
    public $SnapshotKey;

    /**
     * @param string $StorageType <p>存储类型：COS / CFS / CFS_TURBO / GOOSEFS</p>
     * @param string $MountPath <p>容器内挂载路径</p>
     * @param string $VolumeSubPath <p>COS key 前缀 或 CFS/GooseFS 子路径</p>
     * @param string $Bucket <p>实际访问的 COS bucket</p>
     * @param string $Region <p>COS region</p>
     * @param boolean $PlatformManaged <p>是否平台托管桶（影响凭证选择）</p>
     * @param string $SnapshotKey <p>快照在平台 COS 桶中的 key（仅 CFS/GooseFS 有值）</p>
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }

        if (array_key_exists("VolumeSubPath",$param) and $param["VolumeSubPath"] !== null) {
            $this->VolumeSubPath = $param["VolumeSubPath"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PlatformManaged",$param) and $param["PlatformManaged"] !== null) {
            $this->PlatformManaged = $param["PlatformManaged"];
        }

        if (array_key_exists("SnapshotKey",$param) and $param["SnapshotKey"] !== null) {
            $this->SnapshotKey = $param["SnapshotKey"];
        }
    }
}
