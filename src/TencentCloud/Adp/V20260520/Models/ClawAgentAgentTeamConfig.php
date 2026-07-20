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
 * ClawAgent Agent团队协作配置
 *
 * @method boolean getEnabled() 获取<p>是否开启Agent团队协作</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否开启Agent团队协作</p>
 * @method string getPromptContent() 获取<p>prompt内容</p>
 * @method void setPromptContent(string $PromptContent) 设置<p>prompt内容</p>
 */
class ClawAgentAgentTeamConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否开启Agent团队协作</p>
     */
    public $Enabled;

    /**
     * @var string <p>prompt内容</p>
     */
    public $PromptContent;

    /**
     * @param boolean $Enabled <p>是否开启Agent团队协作</p>
     * @param string $PromptContent <p>prompt内容</p>
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

        if (array_key_exists("PromptContent",$param) and $param["PromptContent"] !== null) {
            $this->PromptContent = $param["PromptContent"];
        }
    }
}
