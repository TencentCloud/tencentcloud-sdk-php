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
 * @method string getName() 获取<p>安全执行的具体动作。取值有：</p><ul><li>Deny：拦截，阻止请求访问站点资源；</li><li>Monitor：观察，仅记录日志；</li><li>Redirect：重定向至 URL；</li><li>Disabled：未启用，不启用指定规则；</li><li>Allow：放行， 跳过当前安全模块剩余规则。当配置 AllowActionParameters 参数时延迟响应；</li><li>Challenge：挑战，响应挑战内容；</li><li>BlockIP：待废弃，IP 封禁；</li><li>ReturnCustomPage：待废弃，使用指定页面拦截；</li><li>JSChallenge：待废弃，JavaScript 挑战；</li><li>ManagedChallenge：待废弃，托管挑战。</li></ul>
 * @method void setName(string $Name) 设置<p>安全执行的具体动作。取值有：</p><ul><li>Deny：拦截，阻止请求访问站点资源；</li><li>Monitor：观察，仅记录日志；</li><li>Redirect：重定向至 URL；</li><li>Disabled：未启用，不启用指定规则；</li><li>Allow：放行， 跳过当前安全模块剩余规则。当配置 AllowActionParameters 参数时延迟响应；</li><li>Challenge：挑战，响应挑战内容；</li><li>BlockIP：待废弃，IP 封禁；</li><li>ReturnCustomPage：待废弃，使用指定页面拦截；</li><li>JSChallenge：待废弃，JavaScript 挑战；</li><li>ManagedChallenge：待废弃，托管挑战。</li></ul>
 * @method DenyActionParameters getDenyActionParameters() 获取<p>当 Name 为 Deny 时的附加参数。</p>
 * @method void setDenyActionParameters(DenyActionParameters $DenyActionParameters) 设置<p>当 Name 为 Deny 时的附加参数。</p>
 * @method RedirectActionParameters getRedirectActionParameters() 获取<p>当 Name 为 Redirect 时的附加参数。</p>
 * @method void setRedirectActionParameters(RedirectActionParameters $RedirectActionParameters) 设置<p>当 Name 为 Redirect 时的附加参数。</p>
 * @method AllowActionParameters getAllowActionParameters() 获取<p>当 Name 为 Allow 时的附加参数。</p>
 * @method void setAllowActionParameters(AllowActionParameters $AllowActionParameters) 设置<p>当 Name 为 Allow 时的附加参数。</p>
 * @method ChallengeActionParameters getChallengeActionParameters() 获取<p>当 Name 为 Challenge 时的附加参数。</p>
 * @method void setChallengeActionParameters(ChallengeActionParameters $ChallengeActionParameters) 设置<p>当 Name 为 Challenge 时的附加参数。</p>
 * @method BlockIPActionParameters getBlockIPActionParameters() 获取<p>待废弃，当 Name 为 BlockIP 时的附加参数。</p>
 * @method void setBlockIPActionParameters(BlockIPActionParameters $BlockIPActionParameters) 设置<p>待废弃，当 Name 为 BlockIP 时的附加参数。</p>
 * @method ReturnCustomPageActionParameters getReturnCustomPageActionParameters() 获取<p>待废弃，当 Name 为 ReturnCustomPage 时的附加参数。</p>
 * @method void setReturnCustomPageActionParameters(ReturnCustomPageActionParameters $ReturnCustomPageActionParameters) 设置<p>待废弃，当 Name 为 ReturnCustomPage 时的附加参数。</p>
 */
class SecurityAction extends AbstractModel
{
    /**
     * @var string <p>安全执行的具体动作。取值有：</p><ul><li>Deny：拦截，阻止请求访问站点资源；</li><li>Monitor：观察，仅记录日志；</li><li>Redirect：重定向至 URL；</li><li>Disabled：未启用，不启用指定规则；</li><li>Allow：放行， 跳过当前安全模块剩余规则。当配置 AllowActionParameters 参数时延迟响应；</li><li>Challenge：挑战，响应挑战内容；</li><li>BlockIP：待废弃，IP 封禁；</li><li>ReturnCustomPage：待废弃，使用指定页面拦截；</li><li>JSChallenge：待废弃，JavaScript 挑战；</li><li>ManagedChallenge：待废弃，托管挑战。</li></ul>
     */
    public $Name;

    /**
     * @var DenyActionParameters <p>当 Name 为 Deny 时的附加参数。</p>
     */
    public $DenyActionParameters;

    /**
     * @var RedirectActionParameters <p>当 Name 为 Redirect 时的附加参数。</p>
     */
    public $RedirectActionParameters;

    /**
     * @var AllowActionParameters <p>当 Name 为 Allow 时的附加参数。</p>
     */
    public $AllowActionParameters;

    /**
     * @var ChallengeActionParameters <p>当 Name 为 Challenge 时的附加参数。</p>
     */
    public $ChallengeActionParameters;

    /**
     * @var BlockIPActionParameters <p>待废弃，当 Name 为 BlockIP 时的附加参数。</p>
     */
    public $BlockIPActionParameters;

    /**
     * @var ReturnCustomPageActionParameters <p>待废弃，当 Name 为 ReturnCustomPage 时的附加参数。</p>
     */
    public $ReturnCustomPageActionParameters;

    /**
     * @param string $Name <p>安全执行的具体动作。取值有：</p><ul><li>Deny：拦截，阻止请求访问站点资源；</li><li>Monitor：观察，仅记录日志；</li><li>Redirect：重定向至 URL；</li><li>Disabled：未启用，不启用指定规则；</li><li>Allow：放行， 跳过当前安全模块剩余规则。当配置 AllowActionParameters 参数时延迟响应；</li><li>Challenge：挑战，响应挑战内容；</li><li>BlockIP：待废弃，IP 封禁；</li><li>ReturnCustomPage：待废弃，使用指定页面拦截；</li><li>JSChallenge：待废弃，JavaScript 挑战；</li><li>ManagedChallenge：待废弃，托管挑战。</li></ul>
     * @param DenyActionParameters $DenyActionParameters <p>当 Name 为 Deny 时的附加参数。</p>
     * @param RedirectActionParameters $RedirectActionParameters <p>当 Name 为 Redirect 时的附加参数。</p>
     * @param AllowActionParameters $AllowActionParameters <p>当 Name 为 Allow 时的附加参数。</p>
     * @param ChallengeActionParameters $ChallengeActionParameters <p>当 Name 为 Challenge 时的附加参数。</p>
     * @param BlockIPActionParameters $BlockIPActionParameters <p>待废弃，当 Name 为 BlockIP 时的附加参数。</p>
     * @param ReturnCustomPageActionParameters $ReturnCustomPageActionParameters <p>待废弃，当 Name 为 ReturnCustomPage 时的附加参数。</p>
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
