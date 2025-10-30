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
 * Web 安全 Allow 的附加参数
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
