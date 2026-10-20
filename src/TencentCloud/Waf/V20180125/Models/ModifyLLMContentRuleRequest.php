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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLLMContentRule请求参数结构体
 *
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method integer getPriority() 获取<p>优先级</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级</p>
 * @method integer getStatus() 获取<p>规则开关</p>
 * @method void setStatus(integer $Status) 设置<p>规则开关</p>
 * @method integer getCheckType() 获取<p>检测范围，1：入向，2：出向，3：入向和出向</p>
 * @method void setCheckType(integer $CheckType) 设置<p>检测范围，1：入向，2：出向，3：入向和出向</p>
 * @method array getRuleItem() 获取<p>检测内容匹配</p>
 * @method void setRuleItem(array $RuleItem) 设置<p>检测内容匹配</p>
 * @method array getOptions() 获取<p>匹配条件</p>
 * @method void setOptions(array $Options) 设置<p>匹配条件</p>
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getActionType() 获取<p>动作，观察monitor，拦截intercept</p>
 * @method void setActionType(string $ActionType) 设置<p>动作，观察monitor，拦截intercept</p>
 * @method string getResponseText() 获取<p>响应提示内容</p>
 * @method void setResponseText(string $ResponseText) 设置<p>响应提示内容</p>
 * @method array getSessionApplied() 获取<p>规则需要启用的SessionID</p>
 * @method void setSessionApplied(array $SessionApplied) 设置<p>规则需要启用的SessionID</p>
 * @method string getRuleId() 获取<p>规则ID，新增时填0</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则ID，新增时填0</p>
 * @method integer getPageId() 获取<p>拦截页面id</p>
 * @method void setPageId(integer $PageId) 设置<p>拦截页面id</p>
 * @method string getContentLogicalOp() 获取<p>检测内容and or表达式,默认为and</p>
 * @method void setContentLogicalOp(string $ContentLogicalOp) 设置<p>检测内容and or表达式,默认为and</p>
 * @method string getInstanceId() 获取<p>实例id，必填项</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id，必填项</p>
 * @method integer getReplyType() 获取<p>代答类型：1-内置可信模型安全代答，2-自定义代答(ActionType=reply)时生效</p><p>枚举值：</p><ul><li>1： 内置可信模型安全代答</li><li>2： 自定义代答(ActionType=reply)时生效</li></ul>
 * @method void setReplyType(integer $ReplyType) 设置<p>代答类型：1-内置可信模型安全代答，2-自定义代答(ActionType=reply)时生效</p><p>枚举值：</p><ul><li>1： 内置可信模型安全代答</li><li>2： 自定义代答(ActionType=reply)时生效</li></ul>
 * @method string getCustomReplyRuleId() 获取<p>自定义回答模板</p>
 * @method void setCustomReplyRuleId(string $CustomReplyRuleId) 设置<p>自定义回答模板</p>
 * @method integer getModalType() 获取<p>模态类型：0-文本（默认），1-图片</p><p>枚举值：</p><ul><li>0： 文本</li><li>1： 图片</li></ul>
 * @method void setModalType(integer $ModalType) 设置<p>模态类型：0-文本（默认），1-图片</p><p>枚举值：</p><ul><li>0： 文本</li><li>1： 图片</li></ul>
 * @method string getCategory() 获取<p>规则类别：black-普通规则(默认)，white-白名单规则；空值按black处理。white时ActionType仅允许pass(放行)，RuleItem支持白名单匹配字段(Key: ip/geo/type/content/chat_id/user_id/tool_name/tool_args/keyword_whitelist；Op: belong/not_belong/equal/not_equal/contain/not_contain/prefix/suffix/wildcard)</p>
 * @method void setCategory(string $Category) 设置<p>规则类别：black-普通规则(默认)，white-白名单规则；空值按black处理。white时ActionType仅允许pass(放行)，RuleItem支持白名单匹配字段(Key: ip/geo/type/content/chat_id/user_id/tool_name/tool_args/keyword_whitelist；Op: belong/not_belong/equal/not_equal/contain/not_contain/prefix/suffix/wildcard)</p>
 * @method array getDomains() 获取<p>白名单规则生效范围：多个serviceId/domain列表（Category=white时使用），表示该白名单规则同时生效于哪些域名/serviceId。黑名单规则不使用此字段。</p>
 * @method void setDomains(array $Domains) 设置<p>白名单规则生效范围：多个serviceId/domain列表（Category=white时使用），表示该白名单规则同时生效于哪些域名/serviceId。黑名单规则不使用此字段。</p>
 * @method array getAppliedModules() 获取<p>加白生效模块type列表（Category=white时使用），表示该白名单规则命中后对哪些防护模块生效(放行)。取值：2-算力消耗规则，3-自定义防护规则，4-ToolCall防护，5-提示词攻击防护，6-内容合规检测，7-敏感数据检测。</p>
 * @method void setAppliedModules(array $AppliedModules) 设置<p>加白生效模块type列表（Category=white时使用），表示该白名单规则命中后对哪些防护模块生效(放行)。取值：2-算力消耗规则，3-自定义防护规则，4-ToolCall防护，5-提示词攻击防护，6-内容合规检测，7-敏感数据检测。</p>
 * @method string getRiskLevel() 获取<p>严重程度：critical-超高危，high-高危，medium-中危(默认)，low-低危。命中该规则时攻击日志按此展示风险等级；不传或空值按medium处理。</p><p>枚举值：</p><ul><li>critical： 超高危</li><li>high： 高危</li><li>medium： 中危(默认)</li><li>low： 低危</li></ul>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>严重程度：critical-超高危，high-高危，medium-中危(默认)，low-低危。命中该规则时攻击日志按此展示风险等级；不传或空值按medium处理。</p><p>枚举值：</p><ul><li>critical： 超高危</li><li>high： 高危</li><li>medium： 中危(默认)</li><li>low： 低危</li></ul>
 */
class ModifyLLMContentRuleRequest extends AbstractModel
{
    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var integer <p>优先级</p>
     */
    public $Priority;

    /**
     * @var integer <p>规则开关</p>
     */
    public $Status;

    /**
     * @var integer <p>检测范围，1：入向，2：出向，3：入向和出向</p>
     */
    public $CheckType;

    /**
     * @var array <p>检测内容匹配</p>
     */
    public $RuleItem;

    /**
     * @var array <p>匹配条件</p>
     */
    public $Options;

    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>动作，观察monitor，拦截intercept</p>
     */
    public $ActionType;

    /**
     * @var string <p>响应提示内容</p>
     */
    public $ResponseText;

    /**
     * @var array <p>规则需要启用的SessionID</p>
     */
    public $SessionApplied;

    /**
     * @var string <p>规则ID，新增时填0</p>
     */
    public $RuleId;

    /**
     * @var integer <p>拦截页面id</p>
     */
    public $PageId;

    /**
     * @var string <p>检测内容and or表达式,默认为and</p>
     */
    public $ContentLogicalOp;

    /**
     * @var string <p>实例id，必填项</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>代答类型：1-内置可信模型安全代答，2-自定义代答(ActionType=reply)时生效</p><p>枚举值：</p><ul><li>1： 内置可信模型安全代答</li><li>2： 自定义代答(ActionType=reply)时生效</li></ul>
     */
    public $ReplyType;

    /**
     * @var string <p>自定义回答模板</p>
     */
    public $CustomReplyRuleId;

    /**
     * @var integer <p>模态类型：0-文本（默认），1-图片</p><p>枚举值：</p><ul><li>0： 文本</li><li>1： 图片</li></ul>
     */
    public $ModalType;

    /**
     * @var string <p>规则类别：black-普通规则(默认)，white-白名单规则；空值按black处理。white时ActionType仅允许pass(放行)，RuleItem支持白名单匹配字段(Key: ip/geo/type/content/chat_id/user_id/tool_name/tool_args/keyword_whitelist；Op: belong/not_belong/equal/not_equal/contain/not_contain/prefix/suffix/wildcard)</p>
     */
    public $Category;

    /**
     * @var array <p>白名单规则生效范围：多个serviceId/domain列表（Category=white时使用），表示该白名单规则同时生效于哪些域名/serviceId。黑名单规则不使用此字段。</p>
     */
    public $Domains;

    /**
     * @var array <p>加白生效模块type列表（Category=white时使用），表示该白名单规则命中后对哪些防护模块生效(放行)。取值：2-算力消耗规则，3-自定义防护规则，4-ToolCall防护，5-提示词攻击防护，6-内容合规检测，7-敏感数据检测。</p>
     */
    public $AppliedModules;

    /**
     * @var string <p>严重程度：critical-超高危，high-高危，medium-中危(默认)，low-低危。命中该规则时攻击日志按此展示风险等级；不传或空值按medium处理。</p><p>枚举值：</p><ul><li>critical： 超高危</li><li>high： 高危</li><li>medium： 中危(默认)</li><li>low： 低危</li></ul>
     */
    public $RiskLevel;

    /**
     * @param string $Name <p>名称</p>
     * @param integer $Priority <p>优先级</p>
     * @param integer $Status <p>规则开关</p>
     * @param integer $CheckType <p>检测范围，1：入向，2：出向，3：入向和出向</p>
     * @param array $RuleItem <p>检测内容匹配</p>
     * @param array $Options <p>匹配条件</p>
     * @param string $Domain <p>域名</p>
     * @param string $ActionType <p>动作，观察monitor，拦截intercept</p>
     * @param string $ResponseText <p>响应提示内容</p>
     * @param array $SessionApplied <p>规则需要启用的SessionID</p>
     * @param string $RuleId <p>规则ID，新增时填0</p>
     * @param integer $PageId <p>拦截页面id</p>
     * @param string $ContentLogicalOp <p>检测内容and or表达式,默认为and</p>
     * @param string $InstanceId <p>实例id，必填项</p>
     * @param integer $ReplyType <p>代答类型：1-内置可信模型安全代答，2-自定义代答(ActionType=reply)时生效</p><p>枚举值：</p><ul><li>1： 内置可信模型安全代答</li><li>2： 自定义代答(ActionType=reply)时生效</li></ul>
     * @param string $CustomReplyRuleId <p>自定义回答模板</p>
     * @param integer $ModalType <p>模态类型：0-文本（默认），1-图片</p><p>枚举值：</p><ul><li>0： 文本</li><li>1： 图片</li></ul>
     * @param string $Category <p>规则类别：black-普通规则(默认)，white-白名单规则；空值按black处理。white时ActionType仅允许pass(放行)，RuleItem支持白名单匹配字段(Key: ip/geo/type/content/chat_id/user_id/tool_name/tool_args/keyword_whitelist；Op: belong/not_belong/equal/not_equal/contain/not_contain/prefix/suffix/wildcard)</p>
     * @param array $Domains <p>白名单规则生效范围：多个serviceId/domain列表（Category=white时使用），表示该白名单规则同时生效于哪些域名/serviceId。黑名单规则不使用此字段。</p>
     * @param array $AppliedModules <p>加白生效模块type列表（Category=white时使用），表示该白名单规则命中后对哪些防护模块生效(放行)。取值：2-算力消耗规则，3-自定义防护规则，4-ToolCall防护，5-提示词攻击防护，6-内容合规检测，7-敏感数据检测。</p>
     * @param string $RiskLevel <p>严重程度：critical-超高危，high-高危，medium-中危(默认)，low-低危。命中该规则时攻击日志按此展示风险等级；不传或空值按medium处理。</p><p>枚举值：</p><ul><li>critical： 超高危</li><li>high： 高危</li><li>medium： 中危(默认)</li><li>low： 低危</li></ul>
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

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("RuleItem",$param) and $param["RuleItem"] !== null) {
            $this->RuleItem = [];
            foreach ($param["RuleItem"] as $key => $value){
                $obj = new RuleItem();
                $obj->deserialize($value);
                array_push($this->RuleItem, $obj);
            }
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new LLMOptionsItem();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ResponseText",$param) and $param["ResponseText"] !== null) {
            $this->ResponseText = $param["ResponseText"];
        }

        if (array_key_exists("SessionApplied",$param) and $param["SessionApplied"] !== null) {
            $this->SessionApplied = $param["SessionApplied"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("ContentLogicalOp",$param) and $param["ContentLogicalOp"] !== null) {
            $this->ContentLogicalOp = $param["ContentLogicalOp"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ReplyType",$param) and $param["ReplyType"] !== null) {
            $this->ReplyType = $param["ReplyType"];
        }

        if (array_key_exists("CustomReplyRuleId",$param) and $param["CustomReplyRuleId"] !== null) {
            $this->CustomReplyRuleId = $param["CustomReplyRuleId"];
        }

        if (array_key_exists("ModalType",$param) and $param["ModalType"] !== null) {
            $this->ModalType = $param["ModalType"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("AppliedModules",$param) and $param["AppliedModules"] !== null) {
            $this->AppliedModules = $param["AppliedModules"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }
    }
}
