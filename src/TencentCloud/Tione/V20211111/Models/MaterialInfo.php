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
 * 物料信息
 *
 * @method string getStorageType() 获取存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method CosPathInfo getCosPathInfo() 获取Cos存储信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosPathInfo(CosPathInfo $CosPathInfo) 设置Cos存储信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaterialName() 获取物料名，支持Code、Model
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaterialName(string $MaterialName) 设置物料名，支持Code、Model
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaterialType() 获取物料类型，支持PreSet(预置)、 Custom(自定义)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaterialType(string $MaterialType) 设置物料类型，支持PreSet(预置)、 Custom(自定义)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMountPath() 获取训练任务挂载路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMountPath(string $MountPath) 设置训练任务挂载路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class MaterialInfo extends AbstractModel
{
    /**
     * @var string 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var CosPathInfo Cos存储信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosPathInfo;

    /**
     * @var string 物料名，支持Code、Model
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaterialName;

    /**
     * @var string 物料类型，支持PreSet(预置)、 Custom(自定义)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaterialType;

    /**
     * @var string 训练任务挂载路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MountPath;

    /**
     * @param string $StorageType 存储类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param CosPathInfo $CosPathInfo Cos存储信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaterialName 物料名，支持Code、Model
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaterialType 物料类型，支持PreSet(预置)、 Custom(自定义)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MountPath 训练任务挂载路径
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("CosPathInfo",$param) and $param["CosPathInfo"] !== null) {
            $this->CosPathInfo = new CosPathInfo();
            $this->CosPathInfo->deserialize($param["CosPathInfo"]);
        }

        if (array_key_exists("MaterialName",$param) and $param["MaterialName"] !== null) {
            $this->MaterialName = $param["MaterialName"];
        }

        if (array_key_exists("MaterialType",$param) and $param["MaterialType"] !== null) {
            $this->MaterialType = $param["MaterialType"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }
    }
}
