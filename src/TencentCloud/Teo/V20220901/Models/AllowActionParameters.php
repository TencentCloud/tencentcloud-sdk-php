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
 * 安全执行动作为放行时的附加参数。

该参数用于指定在命中安全规则并执行放行动作时，系统所采取的附加处置动作。
不同处置动作由不同且固定的参数组合进行配置，系统将根据所配置的参数组合判定实际生效的处置动作类型。
在同一次放行执行过程中，仅允许配置并生效一种处置动作，多个处置动作对应的参数组合不可同时出现，否则视为非法配置。为空则采用默认放行处置动作。
AllowActionParameters 支持以下附加处置动作：<li>默认：当 AllowActionParameters 为空，立即跳过当前安全模块剩余规则，继续匹配后续安全模块。</li><li>延迟放行：对请求增加响应延迟，并继续匹配当前模块的剩余规则。对应参数 MinDelayTime、MaxDelayTime。</li>
 *
 * @method string getMinDelayTime() 获取最小延迟响应时间，当配置为 0s 时，表示不延迟直接响应。支持的单位有：<li>s：秒，取值范围 0～5。</li>
 * @method void setMinDelayTime(string $MinDelayTime) 设置最小延迟响应时间，当配置为 0s 时，表示不延迟直接响应。支持的单位有：<li>s：秒，取值范围 0～5。</li>
 * @method string getMaxDelayTime() 获取最大延迟响应时间，支持的单位有：<li>s：秒，取值范围 5～10。</li>
 * @method void setMaxDelayTime(string $MaxDelayTime) 设置最大延迟响应时间，支持的单位有：<li>s：秒，取值范围 5～10。</li>
 */
class AllowActionParameters extends AbstractModel
{
    /**
     * @var string 最小延迟响应时间，当配置为 0s 时，表示不延迟直接响应。支持的单位有：<li>s：秒，取值范围 0～5。</li>
     */
    public $MinDelayTime;

    /**
     * @var string 最大延迟响应时间，支持的单位有：<li>s：秒，取值范围 5～10。</li>
     */
    public $MaxDelayTime;

    /**
     * @param string $MinDelayTime 最小延迟响应时间，当配置为 0s 时，表示不延迟直接响应。支持的单位有：<li>s：秒，取值范围 0～5。</li>
     * @param string $MaxDelayTime 最大延迟响应时间，支持的单位有：<li>s：秒，取值范围 5～10。</li>
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
        if (array_key_exists("MinDelayTime",$param) and $param["MinDelayTime"] !== null) {
            $this->MinDelayTime = $param["MinDelayTime"];
        }

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }
    }
}
