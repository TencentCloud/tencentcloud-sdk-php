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
 * ClawAgent调用方自定义配置开关集合
 *
 * @method boolean getEnabled() 获取<p>是否允许C端用户在对话时动态传入自定义Agent配置</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否允许C端用户在对话时动态传入自定义Agent配置</p>
 */
class ClawAgentCustomConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否允许C端用户在对话时动态传入自定义Agent配置</p>
     */
    public $Enabled;

    /**
     * @param boolean $Enabled <p>是否允许C端用户在对话时动态传入自定义Agent配置</p>
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
    }
}
