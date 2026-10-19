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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * video配置。
 *
 * @method string getRoutingStrategy() 获取<p>模型内路由策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutingStrategy(string $RoutingStrategy) 设置<p>模型内路由策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RoutingStrategyArgs getRoutingStrategyArgs() 获取<p>路由参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoutingStrategyArgs(RoutingStrategyArgs $RoutingStrategyArgs) 设置<p>路由参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumRetries() 获取<p>同一模型请求重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumRetries(integer $NumRetries) 设置<p>同一模型请求重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaitSeconds() 获取<p>同步超时时间</p><p>取值范围：[0, 60]</p><p>单位：秒</p>
 * @method void setWaitSeconds(integer $WaitSeconds) 设置<p>同步超时时间</p><p>取值范围：[0, 60]</p><p>单位：秒</p>
 */
class ImageConfig extends AbstractModel
{
    /**
     * @var string <p>模型内路由策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoutingStrategy;

    /**
     * @var RoutingStrategyArgs <p>路由参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoutingStrategyArgs;

    /**
     * @var integer <p>同一模型请求重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumRetries;

    /**
     * @var integer <p>同步超时时间</p><p>取值范围：[0, 60]</p><p>单位：秒</p>
     */
    public $WaitSeconds;

    /**
     * @param string $RoutingStrategy <p>模型内路由策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RoutingStrategyArgs $RoutingStrategyArgs <p>路由参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumRetries <p>同一模型请求重试次数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaitSeconds <p>同步超时时间</p><p>取值范围：[0, 60]</p><p>单位：秒</p>
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
        if (array_key_exists("RoutingStrategy",$param) and $param["RoutingStrategy"] !== null) {
            $this->RoutingStrategy = $param["RoutingStrategy"];
        }

        if (array_key_exists("RoutingStrategyArgs",$param) and $param["RoutingStrategyArgs"] !== null) {
            $this->RoutingStrategyArgs = new RoutingStrategyArgs();
            $this->RoutingStrategyArgs->deserialize($param["RoutingStrategyArgs"]);
        }

        if (array_key_exists("NumRetries",$param) and $param["NumRetries"] !== null) {
            $this->NumRetries = $param["NumRetries"];
        }

        if (array_key_exists("WaitSeconds",$param) and $param["WaitSeconds"] !== null) {
            $this->WaitSeconds = $param["WaitSeconds"];
        }
    }
}
