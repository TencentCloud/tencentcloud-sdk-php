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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引生命周期字段
 *
 * @method string getWarmEnable() 获取是否开启warm阶段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmEnable(string $WarmEnable) 设置是否开启warm阶段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarmMinAge() 获取warm阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmMinAge(string $WarmMinAge) 设置warm阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColdEnable() 获取是否开启cold阶段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColdEnable(string $ColdEnable) 设置是否开启cold阶段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColdMinAge() 获取cold阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColdMinAge(string $ColdMinAge) 设置cold阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrozenEnable() 获取是否开启frozen阶段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrozenEnable(string $FrozenEnable) 设置是否开启frozen阶段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrozenMinAge() 获取frozen阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrozenMinAge(string $FrozenMinAge) 设置frozen阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColdAction() 获取/
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColdAction(string $ColdAction) 设置/
注意：此字段可能返回 null，表示取不到有效值。
 */
class IndexPolicyField extends AbstractModel
{
    /**
     * @var string 是否开启warm阶段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmEnable;

    /**
     * @var string warm阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmMinAge;

    /**
     * @var string 是否开启cold阶段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColdEnable;

    /**
     * @var string cold阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColdMinAge;

    /**
     * @var string 是否开启frozen阶段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrozenEnable;

    /**
     * @var string frozen阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrozenMinAge;

    /**
     * @var string /
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColdAction;

    /**
     * @param string $WarmEnable 是否开启warm阶段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WarmMinAge warm阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColdEnable 是否开启cold阶段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColdMinAge cold阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrozenEnable 是否开启frozen阶段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrozenMinAge frozen阶段转入时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColdAction /
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
        if (array_key_exists("WarmEnable",$param) and $param["WarmEnable"] !== null) {
            $this->WarmEnable = $param["WarmEnable"];
        }

        if (array_key_exists("WarmMinAge",$param) and $param["WarmMinAge"] !== null) {
            $this->WarmMinAge = $param["WarmMinAge"];
        }

        if (array_key_exists("ColdEnable",$param) and $param["ColdEnable"] !== null) {
            $this->ColdEnable = $param["ColdEnable"];
        }

        if (array_key_exists("ColdMinAge",$param) and $param["ColdMinAge"] !== null) {
            $this->ColdMinAge = $param["ColdMinAge"];
        }

        if (array_key_exists("FrozenEnable",$param) and $param["FrozenEnable"] !== null) {
            $this->FrozenEnable = $param["FrozenEnable"];
        }

        if (array_key_exists("FrozenMinAge",$param) and $param["FrozenMinAge"] !== null) {
            $this->FrozenMinAge = $param["FrozenMinAge"];
        }

        if (array_key_exists("ColdAction",$param) and $param["ColdAction"] !== null) {
            $this->ColdAction = $param["ColdAction"];
        }
    }
}
