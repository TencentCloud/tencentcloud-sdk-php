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
 * 表评分统计信息
 *
 * @method integer getLevel() 获取等级 1、2、3、4、5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置等级 1、2、3、4、5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScale() 获取占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScale(integer $Scale) 设置占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableNumber() 获取表数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableNumber(integer $TableNumber) 设置表数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableScoreStatisticsInfo extends AbstractModel
{
    /**
     * @var integer 等级 1、2、3、4、5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var integer 占比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scale;

    /**
     * @var integer 表数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableNumber;

    /**
     * @param integer $Level 等级 1、2、3、4、5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Scale 占比
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableNumber 表数量
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("TableNumber",$param) and $param["TableNumber"] !== null) {
            $this->TableNumber = $param["TableNumber"];
        }
    }
}
