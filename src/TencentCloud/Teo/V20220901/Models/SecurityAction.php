<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 安全的执行动作
 *
 * @method string getName() 获取安全执行的具体动作。取值有：
<li>Deny：拦截；</li><li>Monitor：观察；</li><li>ReturnCustomPage：使用指定页面拦截；</li><li>Redirect：重定向至 URL；</li><li>BlockIP：IP 封禁；</li><li>JSChallenge：JavaScript 挑战；</li><li>ManagedChallenge：托管挑战；</li><li>Disabled：未启用；</li><li>Allow：放行。</li>
 * @method void setName(string $Name) 设置安全执行的具体动作。取值有：
<li>Deny：拦截；</li><li>Monitor：观察；</li><li>ReturnCustomPage：使用指定页面拦截；</li><li>Redirect：重定向至 URL；</li><li>BlockIP：IP 封禁；</li><li>JSChallenge：JavaScript 挑战；</li><li>ManagedChallenge：托管挑战；</li><li>Disabled：未启用；</li><li>Allow：放行。</li>
 * @method BlockIPActionParameters getBlockIPActionParameters() 获取当 Name 为 BlockIP 时的附加参数。
 * @method void setBlockIPActionParameters(BlockIPActionParameters $BlockIPActionParameters) 设置当 Name 为 BlockIP 时的附加参数。
 * @method ReturnCustomPageActionParameters getReturnCustomPageActionParameters() 获取当 Name 为 ReturnCustomPage 时的附加参数。
 * @method void setReturnCustomPageActionParameters(ReturnCustomPageActionParameters $ReturnCustomPageActionParameters) 设置当 Name 为 ReturnCustomPage 时的附加参数。
 * @method RedirectActionParameters getRedirectActionParameters() 获取当 Name 为 Redirect 时的附加参数。
 * @method void setRedirectActionParameters(RedirectActionParameters $RedirectActionParameters) 设置当 Name 为 Redirect 时的附加参数。
 */
class SecurityAction extends AbstractModel
{
    /**
     * @var string 安全执行的具体动作。取值有：
<li>Deny：拦截；</li><li>Monitor：观察；</li><li>ReturnCustomPage：使用指定页面拦截；</li><li>Redirect：重定向至 URL；</li><li>BlockIP：IP 封禁；</li><li>JSChallenge：JavaScript 挑战；</li><li>ManagedChallenge：托管挑战；</li><li>Disabled：未启用；</li><li>Allow：放行。</li>
     */
    public $Name;

    /**
     * @var BlockIPActionParameters 当 Name 为 BlockIP 时的附加参数。
     */
    public $BlockIPActionParameters;

    /**
     * @var ReturnCustomPageActionParameters 当 Name 为 ReturnCustomPage 时的附加参数。
     */
    public $ReturnCustomPageActionParameters;

    /**
     * @var RedirectActionParameters 当 Name 为 Redirect 时的附加参数。
     */
    public $RedirectActionParameters;

    /**
     * @param string $Name 安全执行的具体动作。取值有：
<li>Deny：拦截；</li><li>Monitor：观察；</li><li>ReturnCustomPage：使用指定页面拦截；</li><li>Redirect：重定向至 URL；</li><li>BlockIP：IP 封禁；</li><li>JSChallenge：JavaScript 挑战；</li><li>ManagedChallenge：托管挑战；</li><li>Disabled：未启用；</li><li>Allow：放行。</li>
     * @param BlockIPActionParameters $BlockIPActionParameters 当 Name 为 BlockIP 时的附加参数。
     * @param ReturnCustomPageActionParameters $ReturnCustomPageActionParameters 当 Name 为 ReturnCustomPage 时的附加参数。
     * @param RedirectActionParameters $RedirectActionParameters 当 Name 为 Redirect 时的附加参数。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BlockIPActionParameters",$param) and $param["BlockIPActionParameters"] !== null) {
            $this->BlockIPActionParameters = new BlockIPActionParameters();
            $this->BlockIPActionParameters->deserialize($param["BlockIPActionParameters"]);
        }

        if (array_key_exists("ReturnCustomPageActionParameters",$param) and $param["ReturnCustomPageActionParameters"] !== null) {
            $this->ReturnCustomPageActionParameters = new ReturnCustomPageActionParameters();
            $this->ReturnCustomPageActionParameters->deserialize($param["ReturnCustomPageActionParameters"]);
        }

        if (array_key_exists("RedirectActionParameters",$param) and $param["RedirectActionParameters"] !== null) {
            $this->RedirectActionParameters = new RedirectActionParameters();
            $this->RedirectActionParameters->deserialize($param["RedirectActionParameters"]);
        }
    }
}
