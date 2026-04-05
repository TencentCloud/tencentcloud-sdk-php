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
 * 默认拦截动作配置。当安全规则命中并触发拦截处置动作时，若 SecurityAction 仅指定了 Name 为 Deny 且未指定 DenyActionParameters，则按功能模块维度匹配并使用此处定义的默认参数配置：
<li>ManagedRules 托管规则默认拦截处置动作配置。</li>
<li>OtherModules 除托管规则外的安全防护规则（自定义规则、速率限制 和 Bot 管理功能）默认拦截处置动作配置。</li>
 *
 * @method DenyActionParameters getManagedRules() 获取托管规则默认拦截处置动作配置。	DenyActionParameters 支持的配置参数：<li>ReturnCustomPage：是否使用自定义页面。</li><li>ResponseCode：自定义页面的状态码。</li><li>ErrorPageId：自定义页面的 PageId。</li>
 * @method void setManagedRules(DenyActionParameters $ManagedRules) 设置托管规则默认拦截处置动作配置。	DenyActionParameters 支持的配置参数：<li>ReturnCustomPage：是否使用自定义页面。</li><li>ResponseCode：自定义页面的状态码。</li><li>ErrorPageId：自定义页面的 PageId。</li>
 * @method DenyActionParameters getOtherModules() 获取除托管规则外的安全防护规则（自定义规则、速率限制 和 Bot 管理功能）默认拦截处置动作配置。	DenyActionParameters 支持的配置参数：<li>ReturnCustomPage：是否使用自定义页面。</li><li>ResponseCode：自定义页面的状态码。</li><li>ErrorPageId：自定义页面的 PageId。</li>
 * @method void setOtherModules(DenyActionParameters $OtherModules) 设置除托管规则外的安全防护规则（自定义规则、速率限制 和 Bot 管理功能）默认拦截处置动作配置。	DenyActionParameters 支持的配置参数：<li>ReturnCustomPage：是否使用自定义页面。</li><li>ResponseCode：自定义页面的状态码。</li><li>ErrorPageId：自定义页面的 PageId。</li>
 */
class DefaultDenySecurityActionParameters extends AbstractModel
{
    /**
     * @var DenyActionParameters 托管规则默认拦截处置动作配置。	DenyActionParameters 支持的配置参数：<li>ReturnCustomPage：是否使用自定义页面。</li><li>ResponseCode：自定义页面的状态码。</li><li>ErrorPageId：自定义页面的 PageId。</li>
     */
    public $ManagedRules;

    /**
     * @var DenyActionParameters 除托管规则外的安全防护规则（自定义规则、速率限制 和 Bot 管理功能）默认拦截处置动作配置。	DenyActionParameters 支持的配置参数：<li>ReturnCustomPage：是否使用自定义页面。</li><li>ResponseCode：自定义页面的状态码。</li><li>ErrorPageId：自定义页面的 PageId。</li>
     */
    public $OtherModules;

    /**
     * @param DenyActionParameters $ManagedRules 托管规则默认拦截处置动作配置。	DenyActionParameters 支持的配置参数：<li>ReturnCustomPage：是否使用自定义页面。</li><li>ResponseCode：自定义页面的状态码。</li><li>ErrorPageId：自定义页面的 PageId。</li>
     * @param DenyActionParameters $OtherModules 除托管规则外的安全防护规则（自定义规则、速率限制 和 Bot 管理功能）默认拦截处置动作配置。	DenyActionParameters 支持的配置参数：<li>ReturnCustomPage：是否使用自定义页面。</li><li>ResponseCode：自定义页面的状态码。</li><li>ErrorPageId：自定义页面的 PageId。</li>
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
        if (array_key_exists("ManagedRules",$param) and $param["ManagedRules"] !== null) {
            $this->ManagedRules = new DenyActionParameters();
            $this->ManagedRules->deserialize($param["ManagedRules"]);
        }

        if (array_key_exists("OtherModules",$param) and $param["OtherModules"] !== null) {
            $this->OtherModules = new DenyActionParameters();
            $this->OtherModules->deserialize($param["OtherModules"]);
        }
    }
}
