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
 * 测绘结果
 *
 * @method array getStatistics() 获取测绘类型统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatistics(array $Statistics) 设置测绘类型统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResult() 获取测绘结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(array $Result) 设置测绘结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskCount() 获取测绘任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCount(integer $TaskCount) 设置测绘任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskMaxCount() 获取最大测绘任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskMaxCount(integer $TaskMaxCount) 设置最大测绘任务数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Results extends AbstractModel
{
    /**
     * @var array 测绘类型统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Statistics;

    /**
     * @var array 测绘结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var integer 测绘任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCount;

    /**
     * @var integer 最大测绘任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskMaxCount;

    /**
     * @param array $Statistics 测绘类型统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Result 测绘结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskCount 测绘任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskMaxCount 最大测绘任务数
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
        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = [];
            foreach ($param["Statistics"] as $key => $value){
                $obj = new AssetTypeStatistic();
                $obj->deserialize($value);
                array_push($this->Statistics, $obj);
            }
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = [];
            foreach ($param["Result"] as $key => $value){
                $obj = new MappingResult();
                $obj->deserialize($value);
                array_push($this->Result, $obj);
            }
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("TaskMaxCount",$param) and $param["TaskMaxCount"] !== null) {
            $this->TaskMaxCount = $param["TaskMaxCount"];
        }
    }
}
