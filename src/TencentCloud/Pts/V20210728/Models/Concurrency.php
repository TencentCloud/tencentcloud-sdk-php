<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method void setIterationCount(integer $IterationCount) 设置运行次数
 * @method integer getMaxRequestsPerSecond() 获取最大RPS
 * @method void setMaxRequestsPerSecond(integer $MaxRequestsPerSecond) 设置最大RPS
 * @method integer getGracefulStopSeconds() 获取优雅终止任务的等待时间
 * @method void setGracefulStopSeconds(integer $GracefulStopSeconds) 设置优雅终止任务的等待时间
 * @method integer getResources() 获取资源数
 * @method void setResources(integer $Resources) 设置资源数
 * @method string getMode() 获取压力模型
 * @method void setMode(string $Mode) 设置压力模型
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
     */
    public $IterationCount;

    /**
     * @var integer 最大RPS
     */
    public $MaxRequestsPerSecond;

    /**
     * @var integer 优雅终止任务的等待时间
     */
    public $GracefulStopSeconds;

    /**
     * @var integer 资源数
     */
    public $Resources;

    /**
     * @var string 压力模型
     */
    public $Mode;

    /**
     * @param array $Stages 多阶段配置数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IterationCount 运行次数
     * @param integer $MaxRequestsPerSecond 最大RPS
     * @param integer $GracefulStopSeconds 优雅终止任务的等待时间
     * @param integer $Resources 资源数
     * @param string $Mode 压力模型
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

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
