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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务自动伸缩配置。
 *
 * @method integer getMinInstanceCount() 获取<p>最小实例数量。当配置了伸缩策略并且策略处于有效期时，将不会生效。</p>
 * @method void setMinInstanceCount(integer $MinInstanceCount) 设置<p>最小实例数量。当配置了伸缩策略并且策略处于有效期时，将不会生效。</p>
 * @method array getScalingPolicies() 获取<p>伸缩策略列表。最多支持 5 个策略。</p>
 * @method void setScalingPolicies(array $ScalingPolicies) 设置<p>伸缩策略列表。最多支持 5 个策略。</p>
 */
class InferenceAutoScalingConfig extends AbstractModel
{
    /**
     * @var integer <p>最小实例数量。当配置了伸缩策略并且策略处于有效期时，将不会生效。</p>
     */
    public $MinInstanceCount;

    /**
     * @var array <p>伸缩策略列表。最多支持 5 个策略。</p>
     */
    public $ScalingPolicies;

    /**
     * @param integer $MinInstanceCount <p>最小实例数量。当配置了伸缩策略并且策略处于有效期时，将不会生效。</p>
     * @param array $ScalingPolicies <p>伸缩策略列表。最多支持 5 个策略。</p>
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
        if (array_key_exists("MinInstanceCount",$param) and $param["MinInstanceCount"] !== null) {
            $this->MinInstanceCount = $param["MinInstanceCount"];
        }

        if (array_key_exists("ScalingPolicies",$param) and $param["ScalingPolicies"] !== null) {
            $this->ScalingPolicies = [];
            foreach ($param["ScalingPolicies"] as $key => $value){
                $obj = new InferenceScalingPolicy();
                $obj->deserialize($value);
                array_push($this->ScalingPolicies, $obj);
            }
        }
    }
}
