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
 * L2模型内路由算法策略参数
 *
 * @method float getLeastBusyBuffer() 获取<p>最低繁忙路由算法相对近优容差。</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低繁忙路由算法生效。0 表示请求仅会路由到在途数最小的上游大模型部署，0.10 表示请求路由到的上游大模型部署在途请求数最多比最小在途数高10%，依次类推。</p>
 * @method void setLeastBusyBuffer(float $LeastBusyBuffer) 设置<p>最低繁忙路由算法相对近优容差。</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低繁忙路由算法生效。0 表示请求仅会路由到在途数最小的上游大模型部署，0.10 表示请求路由到的上游大模型部署在途请求数最多比最小在途数高10%，依次类推。</p>
 * @method float getUsageBasedBuffer() 获取<p>用量均衡路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅用量均衡路由算法生效。0 表示请求仅会路由到TPM最低的上游大模型部署；0.10 表示请求最多会路由到比TPM最小值高10%的上游大模型部署，依次类推。</p>
 * @method void setUsageBasedBuffer(float $UsageBasedBuffer) 设置<p>用量均衡路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅用量均衡路由算法生效。0 表示请求仅会路由到TPM最低的上游大模型部署；0.10 表示请求最多会路由到比TPM最小值高10%的上游大模型部署，依次类推。</p>
 * @method float getLowestLatencyBuffer() 获取<p>最低延迟路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低延迟路由算法生效。0 表示请求仅会路由到延迟最低的上游大模型部署；0.10 表示请求最多会路由到比延迟最小值高10%的上游大模型部署，依次类推。</p>
 * @method void setLowestLatencyBuffer(float $LowestLatencyBuffer) 设置<p>最低延迟路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低延迟路由算法生效。0 表示请求仅会路由到延迟最低的上游大模型部署；0.10 表示请求最多会路由到比延迟最小值高10%的上游大模型部署，依次类推。</p>
 * @method float getLowestCostBuffer() 获取<p>最低积分系数路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低积分系数路由算法生效。0 表示请求仅会路由到积分系数最低的上游大模型部署；0.10 表示请求最多会路由到比积分系数最小值高10%的上游大模型部署，依次类推。</p>
 * @method void setLowestCostBuffer(float $LowestCostBuffer) 设置<p>最低积分系数路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低积分系数路由算法生效。0 表示请求仅会路由到积分系数最低的上游大模型部署；0.10 表示请求最多会路由到比积分系数最小值高10%的上游大模型部署，依次类推。</p>
 */
class RoutingStrategyArgs extends AbstractModel
{
    /**
     * @var float <p>最低繁忙路由算法相对近优容差。</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低繁忙路由算法生效。0 表示请求仅会路由到在途数最小的上游大模型部署，0.10 表示请求路由到的上游大模型部署在途请求数最多比最小在途数高10%，依次类推。</p>
     */
    public $LeastBusyBuffer;

    /**
     * @var float <p>用量均衡路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅用量均衡路由算法生效。0 表示请求仅会路由到TPM最低的上游大模型部署；0.10 表示请求最多会路由到比TPM最小值高10%的上游大模型部署，依次类推。</p>
     */
    public $UsageBasedBuffer;

    /**
     * @var float <p>最低延迟路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低延迟路由算法生效。0 表示请求仅会路由到延迟最低的上游大模型部署；0.10 表示请求最多会路由到比延迟最小值高10%的上游大模型部署，依次类推。</p>
     */
    public $LowestLatencyBuffer;

    /**
     * @var float <p>最低积分系数路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低积分系数路由算法生效。0 表示请求仅会路由到积分系数最低的上游大模型部署；0.10 表示请求最多会路由到比积分系数最小值高10%的上游大模型部署，依次类推。</p>
     */
    public $LowestCostBuffer;

    /**
     * @param float $LeastBusyBuffer <p>最低繁忙路由算法相对近优容差。</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低繁忙路由算法生效。0 表示请求仅会路由到在途数最小的上游大模型部署，0.10 表示请求路由到的上游大模型部署在途请求数最多比最小在途数高10%，依次类推。</p>
     * @param float $UsageBasedBuffer <p>用量均衡路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅用量均衡路由算法生效。0 表示请求仅会路由到TPM最低的上游大模型部署；0.10 表示请求最多会路由到比TPM最小值高10%的上游大模型部署，依次类推。</p>
     * @param float $LowestLatencyBuffer <p>最低延迟路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低延迟路由算法生效。0 表示请求仅会路由到延迟最低的上游大模型部署；0.10 表示请求最多会路由到比延迟最小值高10%的上游大模型部署，依次类推。</p>
     * @param float $LowestCostBuffer <p>最低积分系数路由算法相对近优容差</p><p>取值范围：[0, 100]</p><p>默认值：0</p><p>仅最低积分系数路由算法生效。0 表示请求仅会路由到积分系数最低的上游大模型部署；0.10 表示请求最多会路由到比积分系数最小值高10%的上游大模型部署，依次类推。</p>
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
        if (array_key_exists("LeastBusyBuffer",$param) and $param["LeastBusyBuffer"] !== null) {
            $this->LeastBusyBuffer = $param["LeastBusyBuffer"];
        }

        if (array_key_exists("UsageBasedBuffer",$param) and $param["UsageBasedBuffer"] !== null) {
            $this->UsageBasedBuffer = $param["UsageBasedBuffer"];
        }

        if (array_key_exists("LowestLatencyBuffer",$param) and $param["LowestLatencyBuffer"] !== null) {
            $this->LowestLatencyBuffer = $param["LowestLatencyBuffer"];
        }

        if (array_key_exists("LowestCostBuffer",$param) and $param["LowestCostBuffer"] !== null) {
            $this->LowestCostBuffer = $param["LowestCostBuffer"];
        }
    }
}
