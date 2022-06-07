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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标数据
 *
 * @method string getTaskId() 获取训练任务id
 * @method void setTaskId(string $TaskId) 设置训练任务id
 * @method integer getTimestamp() 获取时间戳.unix timestamp,单位为秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置时间戳.unix timestamp,单位为秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEpoch() 获取本次上报数据所处的训练周期数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEpoch(integer $Epoch) 设置本次上报数据所处的训练周期数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStep() 获取本次上报数据所处的训练迭代次数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStep(integer $Step) 设置本次上报数据所处的训练迭代次数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalSteps() 获取训练停止所需的迭代总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalSteps(integer $TotalSteps) 设置训练停止所需的迭代总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPoints() 获取数据点。数组元素为不同指标的数据。数组长度不超过10。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoints(array $Points) 设置数据点。数组元素为不同指标的数据。数组长度不超过10。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetricData extends AbstractModel
{
    /**
     * @var string 训练任务id
     */
    public $TaskId;

    /**
     * @var integer 时间戳.unix timestamp,单位为秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var integer 本次上报数据所处的训练周期数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Epoch;

    /**
     * @var integer 本次上报数据所处的训练迭代次数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Step;

    /**
     * @var integer 训练停止所需的迭代总数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalSteps;

    /**
     * @var array 数据点。数组元素为不同指标的数据。数组长度不超过10。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Points;

    /**
     * @param string $TaskId 训练任务id
     * @param integer $Timestamp 时间戳.unix timestamp,单位为秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Epoch 本次上报数据所处的训练周期数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Step 本次上报数据所处的训练迭代次数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalSteps 训练停止所需的迭代总数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Points 数据点。数组元素为不同指标的数据。数组长度不超过10。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Epoch",$param) and $param["Epoch"] !== null) {
            $this->Epoch = $param["Epoch"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }

        if (array_key_exists("TotalSteps",$param) and $param["TotalSteps"] !== null) {
            $this->TotalSteps = $param["TotalSteps"];
        }

        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new DataPoint();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }
    }
}
