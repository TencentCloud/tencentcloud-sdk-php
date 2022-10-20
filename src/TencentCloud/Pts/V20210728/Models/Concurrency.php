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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 并发模式的施压配置
 *
 * @method array getStages() 获取多阶段配置数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStages(array $Stages) 设置多阶段配置数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIterationCount() 获取运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIterationCount(integer $IterationCount) 设置运行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRequestsPerSecond() 获取最大RPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRequestsPerSecond(integer $MaxRequestsPerSecond) 设置最大RPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGracefulStopSeconds() 获取优雅终止任务的等待时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGracefulStopSeconds(integer $GracefulStopSeconds) 设置优雅终止任务的等待时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class Concurrency extends AbstractModel
{
    /**
     * @var array 多阶段配置数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Stages;

    /**
     * @var integer 运行次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IterationCount;

    /**
     * @var integer 最大RPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRequestsPerSecond;

    /**
     * @var integer 优雅终止任务的等待时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GracefulStopSeconds;

    /**
     * @param array $Stages 多阶段配置数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IterationCount 运行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRequestsPerSecond 最大RPS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GracefulStopSeconds 优雅终止任务的等待时间
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
        if (array_key_exists("Stages",$param) and $param["Stages"] !== null) {
            $this->Stages = [];
            foreach ($param["Stages"] as $key => $value){
                $obj = new Stage();
                $obj->deserialize($value);
                array_push($this->Stages, $obj);
            }
        }

        if (array_key_exists("IterationCount",$param) and $param["IterationCount"] !== null) {
            $this->IterationCount = $param["IterationCount"];
        }

        if (array_key_exists("MaxRequestsPerSecond",$param) and $param["MaxRequestsPerSecond"] !== null) {
            $this->MaxRequestsPerSecond = $param["MaxRequestsPerSecond"];
        }

        if (array_key_exists("GracefulStopSeconds",$param) and $param["GracefulStopSeconds"] !== null) {
            $this->GracefulStopSeconds = $param["GracefulStopSeconds"];
        }
    }
}
