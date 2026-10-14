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
 * 安全执行动作为挑战时的附加参数。

该参数用于指定在命中安全规则并执行挑战动作时，系统所采取的附加处置动作。
挑战处置动作通过 ChallengeOption 进行细分，不同挑战类型对应不同的交互形式及参数要求，系统将根据所选挑战类型，生效对应的参数配置。
ChallengeActionParameters 支持以下挑战处置类型：<li>插页式挑战：响应新页面，并在新页面内运行认证机制。对应 ChallengeOption 取值 InterstitialChallenge。</li><li>内嵌式挑战：响应 SDK 挑战。对应 ChallengeOption 取值 InlineChallenge。</li><li>JavaScript 挑战：浏览器无感验证，浏览器自动完成校验并展示请求资源。对应 ChallengeOption 取值 JSChallenge。</li><li>托管挑战：响应包含 JavaScript 程序的重定向页面，用于校验浏览器运行环境。对应 ChallengeOption 取值 ManagedChallenge。</li>
 *
 * @method string getChallengeOption() 获取<p>安全执行的具体挑战动作。</p><p>枚举值：</p><ul><li>InterstitialChallenge： 插页式挑战；</li><li>InlineChallenge： 内嵌式挑战（SDK 挑战）；</li><li>ManagedChallenge： 托管挑战。仅适用于用户通过浏览器直接访问的 HTML 网页。API 接口、网页内 XHR/AJAX 异步请求、移动 App、命令行工具等场景无法完成验证，请勿配置；</li><li>JSChallenge： JavaScript 挑战。仅适用于用户通过浏览器直接访问的 HTML 网页。API 接口、网页内 XHR/AJAX 异步请求、移动 App、命令行工具等场景无法完成验证，请勿配置。</li></ul>
 * @method void setChallengeOption(string $ChallengeOption) 设置<p>安全执行的具体挑战动作。</p><p>枚举值：</p><ul><li>InterstitialChallenge： 插页式挑战；</li><li>InlineChallenge： 内嵌式挑战（SDK 挑战）；</li><li>ManagedChallenge： 托管挑战。仅适用于用户通过浏览器直接访问的 HTML 网页。API 接口、网页内 XHR/AJAX 异步请求、移动 App、命令行工具等场景无法完成验证，请勿配置；</li><li>JSChallenge： JavaScript 挑战。仅适用于用户通过浏览器直接访问的 HTML 网页。API 接口、网页内 XHR/AJAX 异步请求、移动 App、命令行工具等场景无法完成验证，请勿配置。</li></ul>
 * @method string getInterval() 获取<p>重复挑战的时间间隔，当 ChallengeOption 为 InterstitialChallenge/InlineChallenge 时，该字段必填。默认值为 300s。支持的单位有：<li>s：秒，取值范围1～60；</li><li>m：分，取值范围1～60；</li><li>h：小时，取值范围1～24。</li></p>
 * @method void setInterval(string $Interval) 设置<p>重复挑战的时间间隔，当 ChallengeOption 为 InterstitialChallenge/InlineChallenge 时，该字段必填。默认值为 300s。支持的单位有：<li>s：秒，取值范围1～60；</li><li>m：分，取值范围1～60；</li><li>h：小时，取值范围1～24。</li></p>
 * @method string getAttesterId() 获取<p>客户端认证方式 ID 。当 Name 为 InterstitialChallenge/InlineChallenge 时，该字段必填。</p>
 * @method void setAttesterId(string $AttesterId) 设置<p>客户端认证方式 ID 。当 Name 为 InterstitialChallenge/InlineChallenge 时，该字段必填。</p>
 */
class ChallengeActionParameters extends AbstractModel
{
    /**
     * @var string <p>安全执行的具体挑战动作。</p><p>枚举值：</p><ul><li>InterstitialChallenge： 插页式挑战；</li><li>InlineChallenge： 内嵌式挑战（SDK 挑战）；</li><li>ManagedChallenge： 托管挑战。仅适用于用户通过浏览器直接访问的 HTML 网页。API 接口、网页内 XHR/AJAX 异步请求、移动 App、命令行工具等场景无法完成验证，请勿配置；</li><li>JSChallenge： JavaScript 挑战。仅适用于用户通过浏览器直接访问的 HTML 网页。API 接口、网页内 XHR/AJAX 异步请求、移动 App、命令行工具等场景无法完成验证，请勿配置。</li></ul>
     */
    public $ChallengeOption;

    /**
     * @var string <p>重复挑战的时间间隔，当 ChallengeOption 为 InterstitialChallenge/InlineChallenge 时，该字段必填。默认值为 300s。支持的单位有：<li>s：秒，取值范围1～60；</li><li>m：分，取值范围1～60；</li><li>h：小时，取值范围1～24。</li></p>
     */
    public $Interval;

    /**
     * @var string <p>客户端认证方式 ID 。当 Name 为 InterstitialChallenge/InlineChallenge 时，该字段必填。</p>
     */
    public $AttesterId;

    /**
     * @param string $ChallengeOption <p>安全执行的具体挑战动作。</p><p>枚举值：</p><ul><li>InterstitialChallenge： 插页式挑战；</li><li>InlineChallenge： 内嵌式挑战（SDK 挑战）；</li><li>ManagedChallenge： 托管挑战。仅适用于用户通过浏览器直接访问的 HTML 网页。API 接口、网页内 XHR/AJAX 异步请求、移动 App、命令行工具等场景无法完成验证，请勿配置；</li><li>JSChallenge： JavaScript 挑战。仅适用于用户通过浏览器直接访问的 HTML 网页。API 接口、网页内 XHR/AJAX 异步请求、移动 App、命令行工具等场景无法完成验证，请勿配置。</li></ul>
     * @param string $Interval <p>重复挑战的时间间隔，当 ChallengeOption 为 InterstitialChallenge/InlineChallenge 时，该字段必填。默认值为 300s。支持的单位有：<li>s：秒，取值范围1～60；</li><li>m：分，取值范围1～60；</li><li>h：小时，取值范围1～24。</li></p>
     * @param string $AttesterId <p>客户端认证方式 ID 。当 Name 为 InterstitialChallenge/InlineChallenge 时，该字段必填。</p>
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
        if (array_key_exists("ChallengeOption",$param) and $param["ChallengeOption"] !== null) {
            $this->ChallengeOption = $param["ChallengeOption"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("AttesterId",$param) and $param["AttesterId"] !== null) {
            $this->AttesterId = $param["AttesterId"];
        }
    }
}
