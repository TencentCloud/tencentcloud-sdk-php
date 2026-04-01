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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateTrafficMirrorDirection请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取流量镜像实例ID
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像实例ID
 * @method string getDirection() 获取流量镜像采集方向。取值范围：

- EGRESS - 出方向采集

- INGRESS - 入方向采集

- ALL - 出入双向采集

- NO-DIRECTION - 不区分采集方向（新模式）。切换为该模式后将不再支持按方向采集，需通过 CreateTrafficMirrorFilterRules 接口创建带方向的过滤规则，过滤规则支持设置优先级和单独编辑。
 * @method void setDirection(string $Direction) 设置流量镜像采集方向。取值范围：

- EGRESS - 出方向采集

- INGRESS - 入方向采集

- ALL - 出入双向采集

- NO-DIRECTION - 不区分采集方向（新模式）。切换为该模式后将不再支持按方向采集，需通过 CreateTrafficMirrorFilterRules 接口创建带方向的过滤规则，过滤规则支持设置优先级和单独编辑。
 */
class UpdateTrafficMirrorDirectionRequest extends AbstractModel
{
    /**
     * @var string 流量镜像实例ID
     */
    public $TrafficMirrorId;

    /**
     * @var string 流量镜像采集方向。取值范围：

- EGRESS - 出方向采集

- INGRESS - 入方向采集

- ALL - 出入双向采集

- NO-DIRECTION - 不区分采集方向（新模式）。切换为该模式后将不再支持按方向采集，需通过 CreateTrafficMirrorFilterRules 接口创建带方向的过滤规则，过滤规则支持设置优先级和单独编辑。
     */
    public $Direction;

    /**
     * @param string $TrafficMirrorId 流量镜像实例ID
     * @param string $Direction 流量镜像采集方向。取值范围：

- EGRESS - 出方向采集

- INGRESS - 入方向采集

- ALL - 出入双向采集

- NO-DIRECTION - 不区分采集方向（新模式）。切换为该模式后将不再支持按方向采集，需通过 CreateTrafficMirrorFilterRules 接口创建带方向的过滤规则，过滤规则支持设置优先级和单独编辑。
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
        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
