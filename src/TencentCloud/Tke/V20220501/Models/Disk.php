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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点系统盘和数据盘配置
 *
 * @method string getDiskType() 获取云盘类型
 * @method void setDiskType(string $DiskType) 设置云盘类型
 * @method integer getDiskSize() 获取云盘大小(G）
 * @method void setDiskSize(integer $DiskSize) 设置云盘大小(G）
 * @method boolean getAutoFormatAndMount() 获取是否自动化格式盘并挂载
 * @method void setAutoFormatAndMount(boolean $AutoFormatAndMount) 设置是否自动化格式盘并挂载
 * @method string getFileSystem() 获取文件系统
 * @method void setFileSystem(string $FileSystem) 设置文件系统
 * @method string getMountTarget() 获取挂载目录
 * @method void setMountTarget(string $MountTarget) 设置挂载目录
 * @method string getDiskId() 获取云盘ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskId(string $DiskId) 设置云盘ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class Disk extends AbstractModel
{
    /**
     * @var string 云盘类型
     */
    public $DiskType;

    /**
     * @var integer 云盘大小(G）
     */
    public $DiskSize;

    /**
     * @var boolean 是否自动化格式盘并挂载
     */
    public $AutoFormatAndMount;

    /**
     * @var string 文件系统
     */
    public $FileSystem;

    /**
     * @var string 挂载目录
     */
    public $MountTarget;

    /**
     * @var string 云盘ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskId;

    /**
     * @param string $DiskType 云盘类型
     * @param integer $DiskSize 云盘大小(G）
     * @param boolean $AutoFormatAndMount 是否自动化格式盘并挂载
     * @param string $FileSystem 文件系统
     * @param string $MountTarget 挂载目录
     * @param string $DiskId 云盘ID
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("AutoFormatAndMount",$param) and $param["AutoFormatAndMount"] !== null) {
            $this->AutoFormatAndMount = $param["AutoFormatAndMount"];
        }

        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = $param["FileSystem"];
        }

        if (array_key_exists("MountTarget",$param) and $param["MountTarget"] !== null) {
            $this->MountTarget = $param["MountTarget"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }
    }
}
