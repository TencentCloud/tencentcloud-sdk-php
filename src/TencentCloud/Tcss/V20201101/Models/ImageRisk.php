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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器安全镜像高危行为信息
 *
 * @method integer getBehavior() 获取高危行为
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBehavior(integer $Behavior) 设置高危行为
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取种类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置种类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevel() 获取风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(string $Level) 设置风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstructionContent() 获取解决方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstructionContent(string $InstructionContent) 设置解决方案
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageRisk extends AbstractModel
{
    /**
     * @var integer 高危行为
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Behavior;

    /**
     * @var integer 种类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 解决方案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstructionContent;

    /**
     * @param integer $Behavior 高危行为
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 种类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Level 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstructionContent 解决方案
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
        if (array_key_exists("Behavior",$param) and $param["Behavior"] !== null) {
            $this->Behavior = $param["Behavior"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("InstructionContent",$param) and $param["InstructionContent"] !== null) {
            $this->InstructionContent = $param["InstructionContent"];
        }
    }
}
