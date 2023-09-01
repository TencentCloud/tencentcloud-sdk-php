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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标伸缩行为
 *
 * @method AutoScalerRules getScaleUp() 获取扩容行为配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleUp(AutoScalerRules $ScaleUp) 设置扩容行为配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AutoScalerRules getScaleDown() 获取缩容行为配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleDown(AutoScalerRules $ScaleDown) 设置缩容行为配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoScalerBehavior extends AbstractModel
{
    /**
     * @var AutoScalerRules 扩容行为配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleUp;

    /**
     * @var AutoScalerRules 缩容行为配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleDown;

    /**
     * @param AutoScalerRules $ScaleUp 扩容行为配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AutoScalerRules $ScaleDown 缩容行为配置
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
        if (array_key_exists("ScaleUp",$param) and $param["ScaleUp"] !== null) {
            $this->ScaleUp = new AutoScalerRules();
            $this->ScaleUp->deserialize($param["ScaleUp"]);
        }

        if (array_key_exists("ScaleDown",$param) and $param["ScaleDown"] !== null) {
            $this->ScaleDown = new AutoScalerRules();
            $this->ScaleDown->deserialize($param["ScaleDown"]);
        }
    }
}
