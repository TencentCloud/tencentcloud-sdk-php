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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费项内容
 *
 * @method string getSpecId() 获取计费项标签
 * @method void setSpecId(string $SpecId) 设置计费项标签
 * @method string getSpecName() 获取计费项名称
 * @method void setSpecName(string $SpecName) 设置计费项名称
 * @method string getSpecAlias() 获取计费项显示名称
 * @method void setSpecAlias(string $SpecAlias) 设置计费项显示名称
 * @method boolean getAvailable() 获取是否售罄
 * @method void setAvailable(boolean $Available) 设置是否售罄
 * @method array getAvailableRegion() 获取当前资源售罄时，可用的区域有哪些
 * @method void setAvailableRegion(array $AvailableRegion) 设置当前资源售罄时，可用的区域有哪些
 * @method array getSpecFeatures() 获取当前计费项支持的特性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecFeatures(array $SpecFeatures) 设置当前计费项支持的特性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecType() 获取计费项类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecType(string $SpecType) 设置计费项类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGpuType() 获取GPU类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuType(string $GpuType) 设置GPU类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategoryId() 获取计费项CategoryId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryId(string $CategoryId) 设置计费项CategoryId
注意：此字段可能返回 null，表示取不到有效值。
 */
class Spec extends AbstractModel
{
    /**
     * @var string 计费项标签
     */
    public $SpecId;

    /**
     * @var string 计费项名称
     */
    public $SpecName;

    /**
     * @var string 计费项显示名称
     */
    public $SpecAlias;

    /**
     * @var boolean 是否售罄
     */
    public $Available;

    /**
     * @var array 当前资源售罄时，可用的区域有哪些
     */
    public $AvailableRegion;

    /**
     * @var array 当前计费项支持的特性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecFeatures;

    /**
     * @var string 计费项类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecType;

    /**
     * @var string GPU类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuType;

    /**
     * @var string 计费项CategoryId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryId;

    /**
     * @param string $SpecId 计费项标签
     * @param string $SpecName 计费项名称
     * @param string $SpecAlias 计费项显示名称
     * @param boolean $Available 是否售罄
     * @param array $AvailableRegion 当前资源售罄时，可用的区域有哪些
     * @param array $SpecFeatures 当前计费项支持的特性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecType 计费项类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GpuType GPU类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CategoryId 计费项CategoryId
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
        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("SpecAlias",$param) and $param["SpecAlias"] !== null) {
            $this->SpecAlias = $param["SpecAlias"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("AvailableRegion",$param) and $param["AvailableRegion"] !== null) {
            $this->AvailableRegion = $param["AvailableRegion"];
        }

        if (array_key_exists("SpecFeatures",$param) and $param["SpecFeatures"] !== null) {
            $this->SpecFeatures = $param["SpecFeatures"];
        }

        if (array_key_exists("SpecType",$param) and $param["SpecType"] !== null) {
            $this->SpecType = $param["SpecType"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }
    }
}
