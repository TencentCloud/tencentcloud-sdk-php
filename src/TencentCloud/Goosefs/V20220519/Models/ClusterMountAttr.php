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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端集群挂载信息
 *
 * @method string getStorageFileSystemId() 获取挂载的文件系统Id
 * @method void setStorageFileSystemId(string $StorageFileSystemId) 设置挂载的文件系统Id
 * @method string getMountPoint() 获取客户端集群挂载点。入参是节点的自定义挂载点，出参是集群的默认挂载点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMountPoint(string $MountPoint) 设置客户端集群挂载点。入参是节点的自定义挂载点，出参是集群的默认挂载点
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterMountAttr extends AbstractModel
{
    /**
     * @var string 挂载的文件系统Id
     */
    public $StorageFileSystemId;

    /**
     * @var string 客户端集群挂载点。入参是节点的自定义挂载点，出参是集群的默认挂载点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MountPoint;

    /**
     * @param string $StorageFileSystemId 挂载的文件系统Id
     * @param string $MountPoint 客户端集群挂载点。入参是节点的自定义挂载点，出参是集群的默认挂载点
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("StorageFileSystemId",$param) and $param["StorageFileSystemId"] !== null) {
            $this->StorageFileSystemId = $param["StorageFileSystemId"];
        }

        if (array_key_exists("MountPoint",$param) and $param["MountPoint"] !== null) {
            $this->MountPoint = $param["MountPoint"];
        }
    }
}
