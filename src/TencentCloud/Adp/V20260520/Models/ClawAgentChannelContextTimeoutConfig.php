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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道上下文超时清空配置
 *
 * @method boolean getEnabled() 获取<p>是否开启渠道上下文超时清空</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否开启渠道上下文超时清空</p>
 * @method integer getTimeoutHour() 获取<p>渠道上下文超时时长</p><p>取值范围：[1, 99]</p>
 * @method void setTimeoutHour(integer $TimeoutHour) 设置<p>渠道上下文超时时长</p><p>取值范围：[1, 99]</p>
 */
class ClawAgentChannelContextTimeoutConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否开启渠道上下文超时清空</p>
     */
    public $Enabled;

    /**
     * @var integer <p>渠道上下文超时时长</p><p>取值范围：[1, 99]</p>
     */
    public $TimeoutHour;

    /**
     * @param boolean $Enabled <p>是否开启渠道上下文超时清空</p>
     * @param integer $TimeoutHour <p>渠道上下文超时时长</p><p>取值范围：[1, 99]</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("TimeoutHour",$param) and $param["TimeoutHour"] !== null) {
            $this->TimeoutHour = $param["TimeoutHour"];
        }
    }
}
