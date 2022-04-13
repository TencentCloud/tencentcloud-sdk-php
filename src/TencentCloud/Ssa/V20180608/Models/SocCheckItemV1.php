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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检查项相关信息
 *
 * @method string getCheckId() 获取检查项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckId(string $CheckId) 设置检查项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取配置要求
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置配置要求
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取检查项类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置检查项类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取检查对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置检查对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取默认风险等级 2:低危 3:中危 4:高危
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置默认风险等级 2:低危 3:中危 4:高危
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStandard() 获取相关规范
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandard(string $Standard) 设置相关规范
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsFree() 获取检查项是否付费 1:免费 2:付费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsFree(integer $IsFree) 设置检查项是否付费 1:免费 2:付费
注意：此字段可能返回 null，表示取不到有效值。
 */
class SocCheckItemV1 extends AbstractModel
{
    /**
     * @var string 检查项id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckId;

    /**
     * @var string 配置要求
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 检查项类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 检查对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var integer 默认风险等级 2:低危 3:中危 4:高危
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 相关规范
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Standard;

    /**
     * @var integer 检查项是否付费 1:免费 2:付费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsFree;

    /**
     * @param string $CheckId 检查项id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 配置要求
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 检查项类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 检查对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 默认风险等级 2:低危 3:中危 4:高危
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Standard 相关规范
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsFree 检查项是否付费 1:免费 2:付费
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
        if (array_key_exists("CheckId",$param) and $param["CheckId"] !== null) {
            $this->CheckId = $param["CheckId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Standard",$param) and $param["Standard"] !== null) {
            $this->Standard = $param["Standard"];
        }

        if (array_key_exists("IsFree",$param) and $param["IsFree"] !== null) {
            $this->IsFree = $param["IsFree"];
        }
    }
}
