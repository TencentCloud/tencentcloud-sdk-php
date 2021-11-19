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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关注点类型
 *
 * @method integer getConcernType() 获取关注点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcernType(integer $ConcernType) 设置关注点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEntityType() 获取实体类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntityType(integer $EntityType) 设置实体类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConcern() 获取关注点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcern(string $Concern) 设置关注点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatisticsCount() 获取最近数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatisticsCount(integer $StatisticsCount) 设置最近数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConcernInfo extends AbstractModel
{
    /**
     * @var integer 关注点类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcernType;

    /**
     * @var integer 实体类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntityType;

    /**
     * @var string 关注点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Concern;

    /**
     * @var integer 最近数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatisticsCount;

    /**
     * @param integer $ConcernType 关注点类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EntityType 实体类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Concern 关注点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StatisticsCount 最近数量
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
        if (array_key_exists("ConcernType",$param) and $param["ConcernType"] !== null) {
            $this->ConcernType = $param["ConcernType"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("Concern",$param) and $param["Concern"] !== null) {
            $this->Concern = $param["Concern"];
        }

        if (array_key_exists("StatisticsCount",$param) and $param["StatisticsCount"] !== null) {
            $this->StatisticsCount = $param["StatisticsCount"];
        }
    }
}
