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
 * ModelAlias 积分系数配置
 *
 * @method float getInputCachedCoefficient() 获取<p>缓存命中输入积分系数。</p><p>用于 provider prompt cache 命中的输入 token。</p><p>取值范围：[0, 5000]</p><p>默认值：3</p>
 * @method void setInputCachedCoefficient(float $InputCachedCoefficient) 设置<p>缓存命中输入积分系数。</p><p>用于 provider prompt cache 命中的输入 token。</p><p>取值范围：[0, 5000]</p><p>默认值：3</p>
 * @method float getInputCoefficient() 获取<p>输入积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：25</p>
 * @method void setInputCoefficient(float $InputCoefficient) 设置<p>输入积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：25</p>
 * @method float getOutputCoefficient() 获取<p>输出积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：100</p>
 * @method void setOutputCoefficient(float $OutputCoefficient) 设置<p>输出积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：100</p>
 */
class Coefficient extends AbstractModel
{
    /**
     * @var float <p>缓存命中输入积分系数。</p><p>用于 provider prompt cache 命中的输入 token。</p><p>取值范围：[0, 5000]</p><p>默认值：3</p>
     */
    public $InputCachedCoefficient;

    /**
     * @var float <p>输入积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：25</p>
     */
    public $InputCoefficient;

    /**
     * @var float <p>输出积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：100</p>
     */
    public $OutputCoefficient;

    /**
     * @param float $InputCachedCoefficient <p>缓存命中输入积分系数。</p><p>用于 provider prompt cache 命中的输入 token。</p><p>取值范围：[0, 5000]</p><p>默认值：3</p>
     * @param float $InputCoefficient <p>输入积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：25</p>
     * @param float $OutputCoefficient <p>输出积分系数。</p><p>取值范围：[1, 5000]</p><p>默认值：100</p>
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
        if (array_key_exists("InputCachedCoefficient",$param) and $param["InputCachedCoefficient"] !== null) {
            $this->InputCachedCoefficient = $param["InputCachedCoefficient"];
        }

        if (array_key_exists("InputCoefficient",$param) and $param["InputCoefficient"] !== null) {
            $this->InputCoefficient = $param["InputCoefficient"];
        }

        if (array_key_exists("OutputCoefficient",$param) and $param["OutputCoefficient"] !== null) {
            $this->OutputCoefficient = $param["OutputCoefficient"];
        }
    }
}
