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
 * 推理服务的亲和配置
 *
 * @method string getSwitch() 获取<p>推理服务亲和总开关。</p><p>枚举值：</p><ul><li>On： 开启推理服务亲和；</li><li>Off： 关闭推理服务亲和。</li></ul>
 * @method void setSwitch(string $Switch) 设置<p>推理服务亲和总开关。</p><p>枚举值：</p><ul><li>On： 开启推理服务亲和；</li><li>Off： 关闭推理服务亲和。</li></ul>
 * @method string getAffinityMode() 获取<p>推理服务亲和方式。</p><p>枚举值：</p><ul><li>SessionId： 根据会话 ID 实现亲和。</li></ul><p>默认值：SessionId。</p>
 * @method void setAffinityMode(string $AffinityMode) 设置<p>推理服务亲和方式。</p><p>枚举值：</p><ul><li>SessionId： 根据会话 ID 实现亲和。</li></ul><p>默认值：SessionId。</p>
 * @method SessionIdAffinityConfig getSessionIdAffinityConfig() 获取<p>推理服务亲和性配置。当 AffinityMode 为 SessionId 时必填。</p>
 * @method void setSessionIdAffinityConfig(SessionIdAffinityConfig $SessionIdAffinityConfig) 设置<p>推理服务亲和性配置。当 AffinityMode 为 SessionId 时必填。</p>
 */
class InferenceAffinityConfig extends AbstractModel
{
    /**
     * @var string <p>推理服务亲和总开关。</p><p>枚举值：</p><ul><li>On： 开启推理服务亲和；</li><li>Off： 关闭推理服务亲和。</li></ul>
     */
    public $Switch;

    /**
     * @var string <p>推理服务亲和方式。</p><p>枚举值：</p><ul><li>SessionId： 根据会话 ID 实现亲和。</li></ul><p>默认值：SessionId。</p>
     */
    public $AffinityMode;

    /**
     * @var SessionIdAffinityConfig <p>推理服务亲和性配置。当 AffinityMode 为 SessionId 时必填。</p>
     */
    public $SessionIdAffinityConfig;

    /**
     * @param string $Switch <p>推理服务亲和总开关。</p><p>枚举值：</p><ul><li>On： 开启推理服务亲和；</li><li>Off： 关闭推理服务亲和。</li></ul>
     * @param string $AffinityMode <p>推理服务亲和方式。</p><p>枚举值：</p><ul><li>SessionId： 根据会话 ID 实现亲和。</li></ul><p>默认值：SessionId。</p>
     * @param SessionIdAffinityConfig $SessionIdAffinityConfig <p>推理服务亲和性配置。当 AffinityMode 为 SessionId 时必填。</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("AffinityMode",$param) and $param["AffinityMode"] !== null) {
            $this->AffinityMode = $param["AffinityMode"];
        }

        if (array_key_exists("SessionIdAffinityConfig",$param) and $param["SessionIdAffinityConfig"] !== null) {
            $this->SessionIdAffinityConfig = new SessionIdAffinityConfig();
            $this->SessionIdAffinityConfig->deserialize($param["SessionIdAffinityConfig"]);
        }
    }
}
