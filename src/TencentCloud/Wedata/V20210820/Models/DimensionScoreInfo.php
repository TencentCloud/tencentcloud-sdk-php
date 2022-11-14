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
 * 维度评分信息
 *
 * @method string getName() 获取维度名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置维度名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getWeight() 获取权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(float $Weight) 设置权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserId() 获取设置人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(integer $UserId) 设置设置人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取设置人名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置设置人名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间 时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间 时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJoinTableNumber() 获取参与评估表数量
 * @method void setJoinTableNumber(integer $JoinTableNumber) 设置参与评估表数量
 * @method float getScore() 获取评分
 * @method void setScore(float $Score) 设置评分
 */
class DimensionScoreInfo extends AbstractModel
{
    /**
     * @var string 维度名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var float 权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var integer 设置人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 设置人名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var integer 更新时间 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 参与评估表数量
     */
    public $JoinTableNumber;

    /**
     * @var float 评分
     */
    public $Score;

    /**
     * @param string $Name 维度名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Weight 权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserId 设置人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 设置人名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JoinTableNumber 参与评估表数量
     * @param float $Score 评分
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

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("JoinTableNumber",$param) and $param["JoinTableNumber"] !== null) {
            $this->JoinTableNumber = $param["JoinTableNumber"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
