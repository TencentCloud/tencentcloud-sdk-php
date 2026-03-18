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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登录配置中密码更新配置策略，用于管理使用用户名密码登录方式时，密码的过期策略和更新策略。例如，首次登录需要更新密码、定期过期密码等策略。
 *
 * @method boolean getFirstLoginUpdate() 获取首次登录强制修改密码开关。开启后，用户首次登录时将强制要求修改密码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstLoginUpdate(boolean $FirstLoginUpdate) 设置首次登录强制修改密码开关。开启后，用户首次登录时将强制要求修改密码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPeriodUpdate() 获取定期强制修改密码开关。开启后，用户需按照 PeriodValue 和 PeriodType 指定的周期定期修改密码，超过周期未修改将在登录时强制要求修改。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodUpdate(boolean $PeriodUpdate) 设置定期强制修改密码开关。开启后，用户需按照 PeriodValue 和 PeriodType 指定的周期定期修改密码，超过周期未修改将在登录时强制要求修改。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPeriodValue() 获取定期修改密码的周期数值，与 PeriodType 配合使用。例如 PeriodValue 为 6，PeriodType 为 MONTH，表示每 6 个月需修改一次密码。当 PeriodUpdate 为 true 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodValue(integer $PeriodValue) 设置定期修改密码的周期数值，与 PeriodType 配合使用。例如 PeriodValue 为 6，PeriodType 为 MONTH，表示每 6 个月需修改一次密码。当 PeriodUpdate 为 true 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPeriodType() 获取定期修改密码的周期时间单位，与 PeriodValue 配合使用。取值范围：
WEEK：周
MONTH：月
YEAR：年
当 PeriodUpdate 为 true 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodType(string $PeriodType) 设置定期修改密码的周期时间单位，与 PeriodValue 配合使用。取值范围：
WEEK：周
MONTH：月
YEAR：年
当 PeriodUpdate 为 true 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PasswordUpdateLoginConfig extends AbstractModel
{
    /**
     * @var boolean 首次登录强制修改密码开关。开启后，用户首次登录时将强制要求修改密码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstLoginUpdate;

    /**
     * @var boolean 定期强制修改密码开关。开启后，用户需按照 PeriodValue 和 PeriodType 指定的周期定期修改密码，超过周期未修改将在登录时强制要求修改。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodUpdate;

    /**
     * @var integer 定期修改密码的周期数值，与 PeriodType 配合使用。例如 PeriodValue 为 6，PeriodType 为 MONTH，表示每 6 个月需修改一次密码。当 PeriodUpdate 为 true 时必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodValue;

    /**
     * @var string 定期修改密码的周期时间单位，与 PeriodValue 配合使用。取值范围：
WEEK：周
MONTH：月
YEAR：年
当 PeriodUpdate 为 true 时必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodType;

    /**
     * @param boolean $FirstLoginUpdate 首次登录强制修改密码开关。开启后，用户首次登录时将强制要求修改密码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PeriodUpdate 定期强制修改密码开关。开启后，用户需按照 PeriodValue 和 PeriodType 指定的周期定期修改密码，超过周期未修改将在登录时强制要求修改。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PeriodValue 定期修改密码的周期数值，与 PeriodType 配合使用。例如 PeriodValue 为 6，PeriodType 为 MONTH，表示每 6 个月需修改一次密码。当 PeriodUpdate 为 true 时必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PeriodType 定期修改密码的周期时间单位，与 PeriodValue 配合使用。取值范围：
WEEK：周
MONTH：月
YEAR：年
当 PeriodUpdate 为 true 时必填。
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
        if (array_key_exists("FirstLoginUpdate",$param) and $param["FirstLoginUpdate"] !== null) {
            $this->FirstLoginUpdate = $param["FirstLoginUpdate"];
        }

        if (array_key_exists("PeriodUpdate",$param) and $param["PeriodUpdate"] !== null) {
            $this->PeriodUpdate = $param["PeriodUpdate"];
        }

        if (array_key_exists("PeriodValue",$param) and $param["PeriodValue"] !== null) {
            $this->PeriodValue = $param["PeriodValue"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }
    }
}
