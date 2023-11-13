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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过去七天（不算当天）表的热度值
 *
 * @method string getTableId() 获取表ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDayTime() 获取统计日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDayTime(string $DayTime) 设置统计日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getHeat() 获取表热度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeat(float $Heat) 设置表热度
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMaxHeat() 获取表热度最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxHeat(float $MaxHeat) 设置表热度最大值
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableHeat extends AbstractModel
{
    /**
     * @var string 表ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 统计日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DayTime;

    /**
     * @var float 表热度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Heat;

    /**
     * @var float 表热度最大值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxHeat;

    /**
     * @param string $TableId 表ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DayTime 统计日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Heat 表热度
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MaxHeat 表热度最大值
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("DayTime",$param) and $param["DayTime"] !== null) {
            $this->DayTime = $param["DayTime"];
        }

        if (array_key_exists("Heat",$param) and $param["Heat"] !== null) {
            $this->Heat = $param["Heat"];
        }

        if (array_key_exists("MaxHeat",$param) and $param["MaxHeat"] !== null) {
            $this->MaxHeat = $param["MaxHeat"];
        }
    }
}
