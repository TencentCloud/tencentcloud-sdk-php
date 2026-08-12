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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CFS存储的配置
 *
 * @method string getId() 获取<p>cfs的实例的ID</p>
 * @method void setId(string $Id) 设置<p>cfs的实例的ID</p>
 * @method string getPath() 获取<p>存储的路径</p>
 * @method void setPath(string $Path) 设置<p>存储的路径</p>
 * @method string getMountType() 获取<p>cfs的挂载类型，可选值为：STORAGE、SOURCE 分别表示存储拓展模式和数据源模式，默认为 STORAGE</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMountType(string $MountType) 设置<p>cfs的挂载类型，可选值为：STORAGE、SOURCE 分别表示存储拓展模式和数据源模式，默认为 STORAGE</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取<p>协议 1: NFS, 2: TURBO</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置<p>协议 1: NFS, 2: TURBO</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPresetStorage() 获取<p>是否平台预置存储</p>
 * @method void setIsPresetStorage(boolean $IsPresetStorage) 设置<p>是否平台预置存储</p>
 */
class CFSConfig extends AbstractModel
{
    /**
     * @var string <p>cfs的实例的ID</p>
     */
    public $Id;

    /**
     * @var string <p>存储的路径</p>
     */
    public $Path;

    /**
     * @var string <p>cfs的挂载类型，可选值为：STORAGE、SOURCE 分别表示存储拓展模式和数据源模式，默认为 STORAGE</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MountType;

    /**
     * @var string <p>协议 1: NFS, 2: TURBO</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var boolean <p>是否平台预置存储</p>
     */
    public $IsPresetStorage;

    /**
     * @param string $Id <p>cfs的实例的ID</p>
     * @param string $Path <p>存储的路径</p>
     * @param string $MountType <p>cfs的挂载类型，可选值为：STORAGE、SOURCE 分别表示存储拓展模式和数据源模式，默认为 STORAGE</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol <p>协议 1: NFS, 2: TURBO</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPresetStorage <p>是否平台预置存储</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("MountType",$param) and $param["MountType"] !== null) {
            $this->MountType = $param["MountType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("IsPresetStorage",$param) and $param["IsPresetStorage"] !== null) {
            $this->IsPresetStorage = $param["IsPresetStorage"];
        }
    }
}
