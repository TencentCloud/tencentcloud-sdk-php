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
 * 托管规则的项配置
 *
 * @method string getRuleId() 获取托管规则组下的具体项，用于改写此单条规则项配置的内容，具体参考产品文档。	
 * @method void setRuleId(string $RuleId) 设置托管规则组下的具体项，用于改写此单条规则项配置的内容，具体参考产品文档。	
 * @method SecurityAction getAction() 获取RuleId 中指定托管规则项的处置动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>Disabled：未启用，不扫描请求跳过该规则。</li>
 * @method void setAction(SecurityAction $Action) 设置RuleId 中指定托管规则项的处置动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>Disabled：未启用，不扫描请求跳过该规则。</li>
 */
class ManagedRuleAction extends AbstractModel
{
    /**
     * @var string 托管规则组下的具体项，用于改写此单条规则项配置的内容，具体参考产品文档。	
     */
    public $RuleId;

    /**
     * @var SecurityAction RuleId 中指定托管规则项的处置动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>Disabled：未启用，不扫描请求跳过该规则。</li>
     */
    public $Action;

    /**
     * @param string $RuleId 托管规则组下的具体项，用于改写此单条规则项配置的内容，具体参考产品文档。	
     * @param SecurityAction $Action RuleId 中指定托管规则项的处置动作。 SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>Disabled：未启用，不扫描请求跳过该规则。</li>
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }
    }
}
