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
 * SmartOptimizerWrittenPolicy
 *
 * @method string getWrittenEnable() 获取none/enable/disable/default
 * @method void setWrittenEnable(string $WrittenEnable) 设置none/enable/disable/default
 * @method WrittenAdvancePolicy getAdvancePolicy() 获取用户自定义高级参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancePolicy(WrittenAdvancePolicy $AdvancePolicy) 设置用户自定义高级参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmartOptimizerWrittenPolicy extends AbstractModel
{
    /**
     * @var string none/enable/disable/default
     */
    public $WrittenEnable;

    /**
     * @var WrittenAdvancePolicy 用户自定义高级参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancePolicy;

    /**
     * @param string $WrittenEnable none/enable/disable/default
     * @param WrittenAdvancePolicy $AdvancePolicy 用户自定义高级参数
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
        if (array_key_exists("WrittenEnable",$param) and $param["WrittenEnable"] !== null) {
            $this->WrittenEnable = $param["WrittenEnable"];
        }

        if (array_key_exists("AdvancePolicy",$param) and $param["AdvancePolicy"] !== null) {
            $this->AdvancePolicy = new WrittenAdvancePolicy();
            $this->AdvancePolicy->deserialize($param["AdvancePolicy"]);
        }
    }
}
