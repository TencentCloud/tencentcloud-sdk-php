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
 * 安全的执行动作
 *
 * @method string getName() 获取安全执行的具体动作。取值有：
<li>Deny：拦截，阻止请求访问站点资源；</li>
<li>Monitor：观察，仅记录日志；</li>
<li>Redirect：重定向至 URL；</li>
<li>Disabled：未启用，不启用指定规则；</li>
<li>Allow：允许访问，但延迟处理请求；</li>
<li>Challenge：挑战，响应挑战内容；</li>
<li>Trans：放行，允许请求直接访问站点资源；</li>
<li>BlockIP：待废弃，IP 封禁；</li>
<li>ReturnCustomPage：待废弃，使用指定页面拦截；</li>
<li>JSChallenge：待废弃，JavaScript 挑战；</li>
<li>ManagedChallenge：待废弃，托管挑战。</li>
 * @method void setName(string $Name) 设置安全执行的具体动作。取值有：
<li>Deny：拦截，阻止请求访问站点资源；</li>
<li>Monitor：观察，仅记录日志；</li>
<li>Redirect：重定向至 URL；</li>
<li>Disabled：未启用，不启用指定规则；</li>
<li>Allow：允许访问，但延迟处理请求；</li>
<li>Challenge：挑战，响应挑战内容；</li>
<li>Trans：放行，允许请求直接访问站点资源；</li>
<li>BlockIP：待废弃，IP 封禁；</li>
<li>ReturnCustomPage：待废弃，使用指定页面拦截；</li>
<li>JSChallenge：待废弃，JavaScript 挑战；</li>
<li>ManagedChallenge：待废弃，托管挑战。</li>
 * @method DenyActionParameters getDenyActionParameters() 获取当 Name 为 Deny 时的附加参数。
 * @method void setDenyActionParameters(DenyActionParameters $DenyActionParameters) 设置当 Name 为 Deny 时的附加参数。
 * @method RedirectActionParameters getRedirectActionParameters() 获取当 Name 为 Redirect 时的附加参数。
 * @method void setRedirectActionParameters(RedirectActionParameters $RedirectActionParameters) 设置当 Name 为 Redirect 时的附加参数。
 * @method AllowActionParameters getAllowActionParameters() 获取当 Name 为 Allow 时的附加参数。
 * @method void setAllowActionParameters(AllowActionParameters $AllowActionParameters) 设置当 Name 为 Allow 时的附加参数。
 * @method ChallengeActionParameters getChallengeActionParameters() 获取当 Name 为 Challenge 时的附加参数。
 * @method void setChallengeActionParameters(ChallengeActionParameters $ChallengeActionParameters) 设置当 Name 为 Challenge 时的附加参数。
 * @method BlockIPActionParameters getBlockIPActionParameters() 获取待废弃，当 Name 为 BlockIP 时的附加参数。
 * @method void setBlockIPActionParameters(BlockIPActionParameters $BlockIPActionParameters) 设置待废弃，当 Name 为 BlockIP 时的附加参数。
 * @method ReturnCustomPageActionParameters getReturnCustomPageActionParameters() 获取待废弃，当 Name 为 ReturnCustomPage 时的附加参数。
 * @method void setReturnCustomPageActionParameters(ReturnCustomPageActionParameters $ReturnCustomPageActionParameters) 设置待废弃，当 Name 为 ReturnCustomPage 时的附加参数。
 */
class SecurityAction extends AbstractModel
{
    /**
     * @var string 安全执行的具体动作。取值有：
<li>Deny：拦截，阻止请求访问站点资源；</li>
<li>Monitor：观察，仅记录日志；</li>
<li>Redirect：重定向至 URL；</li>
<li>Disabled：未启用，不启用指定规则；</li>
<li>Allow：允许访问，但延迟处理请求；</li>
<li>Challenge：挑战，响应挑战内容；</li>
<li>Trans：放行，允许请求直接访问站点资源；</li>
<li>BlockIP：待废弃，IP 封禁；</li>
<li>ReturnCustomPage：待废弃，使用指定页面拦截；</li>
<li>JSChallenge：待废弃，JavaScript 挑战；</li>
<li>ManagedChallenge：待废弃，托管挑战。</li>
     */
    public $Name;

    /**
     * @var DenyActionParameters 当 Name 为 Deny 时的附加参数。
     */
    public $DenyActionParameters;

    /**
     * @var RedirectActionParameters 当 Name 为 Redirect 时的附加参数。
     */
    public $RedirectActionParameters;

    /**
     * @var AllowActionParameters 当 Name 为 Allow 时的附加参数。
     */
    public $AllowActionParameters;

    /**
     * @var ChallengeActionParameters 当 Name 为 Challenge 时的附加参数。
     */
    public $ChallengeActionParameters;

    /**
     * @var BlockIPActionParameters 待废弃，当 Name 为 BlockIP 时的附加参数。
     */
    public $BlockIPActionParameters;

    /**
     * @var ReturnCustomPageActionParameters 待废弃，当 Name 为 ReturnCustomPage 时的附加参数。
     */
    public $ReturnCustomPageActionParameters;

    /**
     * @param string $Name 安全执行的具体动作。取值有：
<li>Deny：拦截，阻止请求访问站点资源；</li>
<li>Monitor：观察，仅记录日志；</li>
<li>Redirect：重定向至 URL；</li>
<li>Disabled：未启用，不启用指定规则；</li>
<li>Allow：允许访问，但延迟处理请求；</li>
<li>Challenge：挑战，响应挑战内容；</li>
<li>Trans：放行，允许请求直接访问站点资源；</li>
<li>BlockIP：待废弃，IP 封禁；</li>
<li>ReturnCustomPage：待废弃，使用指定页面拦截；</li>
<li>JSChallenge：待废弃，JavaScript 挑战；</li>
<li>ManagedChallenge：待废弃，托管挑战。</li>
     * @param DenyActionParameters $DenyActionParameters 当 Name 为 Deny 时的附加参数。
     * @param RedirectActionParameters $RedirectActionParameters 当 Name 为 Redirect 时的附加参数。
     * @param AllowActionParameters $AllowActionParameters 当 Name 为 Allow 时的附加参数。
     * @param ChallengeActionParameters $ChallengeActionParameters 当 Name 为 Challenge 时的附加参数。
     * @param BlockIPActionParameters $BlockIPActionParameters 待废弃，当 Name 为 BlockIP 时的附加参数。
     * @param ReturnCustomPageActionParameters $ReturnCustomPageActionParameters 待废弃，当 Name 为 ReturnCustomPage 时的附加参数。
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

        if (array_key_exists("DenyActionParameters",$param) and $param["DenyActionParameters"] !== null) {
            $this->DenyActionParameters = new DenyActionParameters();
            $this->DenyActionParameters->deserialize($param["DenyActionParameters"]);
        }

        if (array_key_exists("RedirectActionParameters",$param) and $param["RedirectActionParameters"] !== null) {
            $this->RedirectActionParameters = new RedirectActionParameters();
            $this->RedirectActionParameters->deserialize($param["RedirectActionParameters"]);
        }

        if (array_key_exists("AllowActionParameters",$param) and $param["AllowActionParameters"] !== null) {
            $this->AllowActionParameters = new AllowActionParameters();
            $this->AllowActionParameters->deserialize($param["AllowActionParameters"]);
        }

        if (array_key_exists("ChallengeActionParameters",$param) and $param["ChallengeActionParameters"] !== null) {
            $this->ChallengeActionParameters = new ChallengeActionParameters();
            $this->ChallengeActionParameters->deserialize($param["ChallengeActionParameters"]);
        }

        if (array_key_exists("BlockIPActionParameters",$param) and $param["BlockIPActionParameters"] !== null) {
            $this->BlockIPActionParameters = new BlockIPActionParameters();
            $this->BlockIPActionParameters->deserialize($param["BlockIPActionParameters"]);
        }

        if (array_key_exists("ReturnCustomPageActionParameters",$param) and $param["ReturnCustomPageActionParameters"] !== null) {
            $this->ReturnCustomPageActionParameters = new ReturnCustomPageActionParameters();
            $this->ReturnCustomPageActionParameters->deserialize($param["ReturnCustomPageActionParameters"]);
        }
    }
}
