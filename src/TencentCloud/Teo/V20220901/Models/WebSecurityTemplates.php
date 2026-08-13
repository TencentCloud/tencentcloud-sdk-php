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
 * 模板的安全配置。
 *
 * @method string getTemplateId() 获取<p>策略模板的 ID</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>策略模板的 ID</p>
 * @method string getTemplateName() 获取<p>策略模板名称。由中文、英文、数字和下划线组成，不能以下划线开头，且长度不能超过 32 个字符。</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>策略模板名称。由中文、英文、数字和下划线组成，不能以下划线开头，且长度不能超过 32 个字符。</p>
 * @method SecurityPolicy getPolicy() 获取<p>策略模板的策略配置，配置对所有关联了该策略模板的域名生效。</p>
 * @method void setPolicy(SecurityPolicy $Policy) 设置<p>策略模板的策略配置，配置对所有关联了该策略模板的域名生效。</p>
 */
class WebSecurityTemplates extends AbstractModel
{
    /**
     * @var string <p>策略模板的 ID</p>
     */
    public $TemplateId;

    /**
     * @var string <p>策略模板名称。由中文、英文、数字和下划线组成，不能以下划线开头，且长度不能超过 32 个字符。</p>
     */
    public $TemplateName;

    /**
     * @var SecurityPolicy <p>策略模板的策略配置，配置对所有关联了该策略模板的域名生效。</p>
     */
    public $Policy;

    /**
     * @param string $TemplateId <p>策略模板的 ID</p>
     * @param string $TemplateName <p>策略模板名称。由中文、英文、数字和下划线组成，不能以下划线开头，且长度不能超过 32 个字符。</p>
     * @param SecurityPolicy $Policy <p>策略模板的策略配置，配置对所有关联了该策略模板的域名生效。</p>
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = new SecurityPolicy();
            $this->Policy->deserialize($param["Policy"]);
        }
    }
}
