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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 抓取目标数
 *
 * @method integer getTotal() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUp() 获取在线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUp(integer $Up) 设置在线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDown() 获取不在线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDown(integer $Down) 设置不在线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnknown() 获取未知状态数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnknown(integer $Unknown) 设置未知状态数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Targets extends AbstractModel
{
    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer 在线数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Up;

    /**
     * @var integer 不在线数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Down;

    /**
     * @var integer 未知状态数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unknown;

    /**
     * @param integer $Total 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Up 在线数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Down 不在线数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Unknown 未知状态数
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Up",$param) and $param["Up"] !== null) {
            $this->Up = $param["Up"];
        }

        if (array_key_exists("Down",$param) and $param["Down"] !== null) {
            $this->Down = $param["Down"];
        }

        if (array_key_exists("Unknown",$param) and $param["Unknown"] !== null) {
            $this->Unknown = $param["Unknown"];
        }
    }
}
