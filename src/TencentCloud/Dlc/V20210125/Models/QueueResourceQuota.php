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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 队列维度单条资源配额数据（含总量、已用量、可用量）
 *
 * @method string getResourceType() 获取<p>资源类型标识。CPU / HM_CPU 类计费项统一映射为 "CU"；GPU 类计费项取卡型简称（如 "T4"、"H20"）</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型标识。CPU / HM_CPU 类计费项统一映射为 "CU"；GPU 类计费项取卡型简称（如 "T4"、"H20"）</p>
 * @method string getUnit() 获取<p>资源单位。CU 类为 "core"；GPU 类为 "card"</p>
 * @method void setUnit(string $Unit) 设置<p>资源单位。CU 类为 "core"；GPU 类为 "card"</p>
 * @method float getTotal() 获取<p>配额总量，由 resource_usage 最大值（index 1）× spec 折算得出</p>
 * @method void setTotal(float $Total) 设置<p>配额总量，由 resource_usage 最大值（index 1）× spec 折算得出</p>
 * @method float getUsed() 获取当前已使用量，计费 spec 口径：队列内业务容器（ray-head/ray-worker）的 Pod limits 之和，经 kube_pod_labels 按 local queue 过滤。依赖 kube_pod_labels 指标采集，未开启时恒为 0
 * @method void setUsed(float $Used) 设置当前已使用量，计费 spec 口径：队列内业务容器（ray-head/ray-worker）的 Pod limits 之和，经 kube_pod_labels 按 local queue 过滤。依赖 kube_pod_labels 指标采集，未开启时恒为 0
 * @method float getAvailable() 获取<p>可用量（总量 - 已使用量，截断至 0）。当 used 超出 total 时（例如配额尚未生效或数据短暂不一致），返回 0 而非负数</p>
 * @method void setAvailable(float $Available) 设置<p>可用量（总量 - 已使用量，截断至 0）。当 used 超出 total 时（例如配额尚未生效或数据短暂不一致），返回 0 而非负数</p>
 */
class QueueResourceQuota extends AbstractModel
{
    /**
     * @var string <p>资源类型标识。CPU / HM_CPU 类计费项统一映射为 "CU"；GPU 类计费项取卡型简称（如 "T4"、"H20"）</p>
     */
    public $ResourceType;

    /**
     * @var string <p>资源单位。CU 类为 "core"；GPU 类为 "card"</p>
     */
    public $Unit;

    /**
     * @var float <p>配额总量，由 resource_usage 最大值（index 1）× spec 折算得出</p>
     */
    public $Total;

    /**
     * @var float 当前已使用量，计费 spec 口径：队列内业务容器（ray-head/ray-worker）的 Pod limits 之和，经 kube_pod_labels 按 local queue 过滤。依赖 kube_pod_labels 指标采集，未开启时恒为 0
     */
    public $Used;

    /**
     * @var float <p>可用量（总量 - 已使用量，截断至 0）。当 used 超出 total 时（例如配额尚未生效或数据短暂不一致），返回 0 而非负数</p>
     */
    public $Available;

    /**
     * @param string $ResourceType <p>资源类型标识。CPU / HM_CPU 类计费项统一映射为 "CU"；GPU 类计费项取卡型简称（如 "T4"、"H20"）</p>
     * @param string $Unit <p>资源单位。CU 类为 "core"；GPU 类为 "card"</p>
     * @param float $Total <p>配额总量，由 resource_usage 最大值（index 1）× spec 折算得出</p>
     * @param float $Used 当前已使用量，计费 spec 口径：队列内业务容器（ray-head/ray-worker）的 Pod limits 之和，经 kube_pod_labels 按 local queue 过滤。依赖 kube_pod_labels 指标采集，未开启时恒为 0
     * @param float $Available <p>可用量（总量 - 已使用量，截断至 0）。当 used 超出 total 时（例如配额尚未生效或数据短暂不一致），返回 0 而非负数</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }
    }
}
