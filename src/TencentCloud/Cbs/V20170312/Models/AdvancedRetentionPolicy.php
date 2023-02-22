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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定期快照高级保留策略，四个参数都为必选参数
 *
 * @method integer getDays() 获取保留最新快照Days天内的每天最新的一个快照，取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDays(integer $Days) 设置保留最新快照Days天内的每天最新的一个快照，取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeeks() 获取保留最新快照Weeks周内的每周最新的一个快照，取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeeks(integer $Weeks) 设置保留最新快照Weeks周内的每周最新的一个快照，取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonths() 获取保留最新快照Months月内的每月最新的一个快照， 取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonths(integer $Months) 设置保留最新快照Months月内的每月最新的一个快照， 取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getYears() 获取保留最新快照Years年内的每年最新的一个快照，取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYears(integer $Years) 设置保留最新快照Years年内的每年最新的一个快照，取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
 */
class AdvancedRetentionPolicy extends AbstractModel
{
    /**
     * @var integer 保留最新快照Days天内的每天最新的一个快照，取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Days;

    /**
     * @var integer 保留最新快照Weeks周内的每周最新的一个快照，取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weeks;

    /**
     * @var integer 保留最新快照Months月内的每月最新的一个快照， 取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Months;

    /**
     * @var integer 保留最新快照Years年内的每年最新的一个快照，取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Years;

    /**
     * @param integer $Days 保留最新快照Days天内的每天最新的一个快照，取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weeks 保留最新快照Weeks周内的每周最新的一个快照，取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Months 保留最新快照Months月内的每月最新的一个快照， 取值范围：[0, 100]
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Years 保留最新快照Years年内的每年最新的一个快照，取值范围：[0, 100]
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
        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("Weeks",$param) and $param["Weeks"] !== null) {
            $this->Weeks = $param["Weeks"];
        }

        if (array_key_exists("Months",$param) and $param["Months"] !== null) {
            $this->Months = $param["Months"];
        }

        if (array_key_exists("Years",$param) and $param["Years"] !== null) {
            $this->Years = $param["Years"];
        }
    }
}
