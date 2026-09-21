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
 * 积分分档匹配条件
 *
 * @method integer getInputTokensAbove() 获取<p>仅 chat；单位 K Token（1K=1000 Token）；非负整数，最大 2147483647；非空数组首条必须为 0，数组内严格递增、无重复；输入总 Token 严格超过阈值×1000，取满足条件的最大阈值，整单选价</p>
 * @method void setInputTokensAbove(integer $InputTokensAbove) 设置<p>仅 chat；单位 K Token（1K=1000 Token）；非负整数，最大 2147483647；非空数组首条必须为 0，数组内严格递增、无重复；输入总 Token 严格超过阈值×1000，取满足条件的最大阈值，整单选价</p>
 * @method string getResolution() 获取<p>video 仅 480p／720p／768p／1024p／1080p／2k／4k，统一小写；只校验全局枚举，不校验模型支持子集；列表内不重复</p>
 * @method void setResolution(string $Resolution) 设置<p>video 仅 480p／720p／768p／1024p／1080p／2k／4k，统一小写；只校验全局枚举，不校验模型支持子集；列表内不重复</p>
 */
class CoefficientTierCondition extends AbstractModel
{
    /**
     * @var integer <p>仅 chat；单位 K Token（1K=1000 Token）；非负整数，最大 2147483647；非空数组首条必须为 0，数组内严格递增、无重复；输入总 Token 严格超过阈值×1000，取满足条件的最大阈值，整单选价</p>
     */
    public $InputTokensAbove;

    /**
     * @var string <p>video 仅 480p／720p／768p／1024p／1080p／2k／4k，统一小写；只校验全局枚举，不校验模型支持子集；列表内不重复</p>
     */
    public $Resolution;

    /**
     * @param integer $InputTokensAbove <p>仅 chat；单位 K Token（1K=1000 Token）；非负整数，最大 2147483647；非空数组首条必须为 0，数组内严格递增、无重复；输入总 Token 严格超过阈值×1000，取满足条件的最大阈值，整单选价</p>
     * @param string $Resolution <p>video 仅 480p／720p／768p／1024p／1080p／2k／4k，统一小写；只校验全局枚举，不校验模型支持子集；列表内不重复</p>
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
        if (array_key_exists("InputTokensAbove",$param) and $param["InputTokensAbove"] !== null) {
            $this->InputTokensAbove = $param["InputTokensAbove"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
