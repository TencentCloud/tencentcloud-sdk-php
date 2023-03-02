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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 家庭成员详情
 *
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelation() 获取关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelation(string $Relation) 设置关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeOfDeath() 获取死亡时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeOfDeath(string $TimeOfDeath) 设置死亡时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeType() 获取时间类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeType(string $TimeType) 设置时间类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class RelativeHistoryDetailBlock extends AbstractModel
{
    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Relation;

    /**
     * @var string 死亡时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeOfDeath;

    /**
     * @var string 时间类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeType;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Relation 关系
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeOfDeath 死亡时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeType 时间类型
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }

        if (array_key_exists("TimeOfDeath",$param) and $param["TimeOfDeath"] !== null) {
            $this->TimeOfDeath = $param["TimeOfDeath"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }
    }
}
