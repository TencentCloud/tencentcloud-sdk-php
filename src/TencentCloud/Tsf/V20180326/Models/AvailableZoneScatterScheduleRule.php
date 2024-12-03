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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 打散调度规则
 *
 * @method string getScatterDimension() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScatterDimension(string $ScatterDimension) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxUnbalanceQuantity() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxUnbalanceQuantity(integer $MaxUnbalanceQuantity) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsForceSchedule() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsForceSchedule(boolean $IsForceSchedule) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 */
class AvailableZoneScatterScheduleRule extends AbstractModel
{
    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScatterDimension;

    /**
     * @var integer -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxUnbalanceQuantity;

    /**
     * @var boolean -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsForceSchedule;

    /**
     * @param string $ScatterDimension -
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxUnbalanceQuantity -
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsForceSchedule -
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
        if (array_key_exists("ScatterDimension",$param) and $param["ScatterDimension"] !== null) {
            $this->ScatterDimension = $param["ScatterDimension"];
        }

        if (array_key_exists("MaxUnbalanceQuantity",$param) and $param["MaxUnbalanceQuantity"] !== null) {
            $this->MaxUnbalanceQuantity = $param["MaxUnbalanceQuantity"];
        }

        if (array_key_exists("IsForceSchedule",$param) and $param["IsForceSchedule"] !== null) {
            $this->IsForceSchedule = $param["IsForceSchedule"];
        }
    }
}
