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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 互联网边界规则
 *
 * @method string getRuleId() 获取规则ID，修改规则时必填
 * @method void setRuleId(string $RuleId) 设置规则ID，修改规则时必填
 * @method integer getOrderIndex() 获取规则执行顺序，数字越小优先级越高，创建规则组时必须从1开始严格递增
 * @method void setOrderIndex(integer $OrderIndex) 设置规则执行顺序，数字越小优先级越高，创建规则组时必须从1开始严格递增
 * @method integer getDirection() 获取规则方向：0-出站，1-入站
 * @method void setDirection(integer $Direction) 设置规则方向：0-出站，1-入站
 * @method string getSourceContent() 获取源地址内容，根据 SourceType 不同有不同的格式：ip 时为 IP/CIDR，domain 时为域名，template 时为模板ID，instance 时为实例ID列表（逗号分隔），tag 时为标签键值对（格式：key:value）
 * @method void setSourceContent(string $SourceContent) 设置源地址内容，根据 SourceType 不同有不同的格式：ip 时为 IP/CIDR，domain 时为域名，template 时为模板ID，instance 时为实例ID列表（逗号分隔），tag 时为标签键值对（格式：key:value）
 * @method string getSourceType() 获取源地址类型：ip-IP地址，domain-域名，template-参数模板，instance-实例，tag-标签
 * @method void setSourceType(string $SourceType) 设置源地址类型：ip-IP地址，domain-域名，template-参数模板，instance-实例，tag-标签
 * @method string getTargetContent() 获取目标地址内容，格式同 SourceContent
 * @method void setTargetContent(string $TargetContent) 设置目标地址内容，格式同 SourceContent
 * @method string getTargetType() 获取目标地址类型：ip-IP地址，domain-域名，template-参数模板，instance-实例，tag-标签
 * @method void setTargetType(string $TargetType) 设置目标地址类型：ip-IP地址，domain-域名，template-参数模板，instance-实例，tag-标签
 * @method string getPort() 获取端口，支持单端口、端口范围和逗号分隔的多端口，如：80、1-65535、80,443,8080
 * @method void setPort(string $Port) 设置端口，支持单端口、端口范围和逗号分隔的多端口，如：80、1-65535、80,443,8080
 * @method string getProtocol() 获取协议类型：TCP、UDP、ICMP、ANY
 * @method void setProtocol(string $Protocol) 设置协议类型：TCP、UDP、ICMP、ANY
 * @method string getRuleAction() 获取规则动作：accept-放行，drop-阻断，log-观察
 * @method void setRuleAction(string $RuleAction) 设置规则动作：accept-放行，drop-阻断，log-观察
 * @method string getDescription() 获取规则描述，长度0-256字符
 * @method void setDescription(string $Description) 设置规则描述，长度0-256字符
 * @method string getScope() 获取生效范围：serial，串行；side，旁路；all，全局	
 * @method void setScope(string $Scope) 设置生效范围：serial，串行；side，旁路；all，全局	
 * @method string getBelongMemberId() 获取规则归属的成员账号ID（多账号场景下使用）。当 SourceType 或 TargetType 为 instance 或 tag 时，此参数必填，用于指定实例/标签所属的成员账号
 * @method void setBelongMemberId(string $BelongMemberId) 设置规则归属的成员账号ID（多账号场景下使用）。当 SourceType 或 TargetType 为 instance 或 tag 时，此参数必填，用于指定实例/标签所属的成员账号
 * @method string getParamTemplateId() 获取参数模板
 * @method void setParamTemplateId(string $ParamTemplateId) 设置参数模板
 */
class EdgeAclRuleInfo extends AbstractModel
{
    /**
     * @var string 规则ID，修改规则时必填
     */
    public $RuleId;

    /**
     * @var integer 规则执行顺序，数字越小优先级越高，创建规则组时必须从1开始严格递增
     */
    public $OrderIndex;

    /**
     * @var integer 规则方向：0-出站，1-入站
     */
    public $Direction;

    /**
     * @var string 源地址内容，根据 SourceType 不同有不同的格式：ip 时为 IP/CIDR，domain 时为域名，template 时为模板ID，instance 时为实例ID列表（逗号分隔），tag 时为标签键值对（格式：key:value）
     */
    public $SourceContent;

    /**
     * @var string 源地址类型：ip-IP地址，domain-域名，template-参数模板，instance-实例，tag-标签
     */
    public $SourceType;

    /**
     * @var string 目标地址内容，格式同 SourceContent
     */
    public $TargetContent;

    /**
     * @var string 目标地址类型：ip-IP地址，domain-域名，template-参数模板，instance-实例，tag-标签
     */
    public $TargetType;

    /**
     * @var string 端口，支持单端口、端口范围和逗号分隔的多端口，如：80、1-65535、80,443,8080
     */
    public $Port;

    /**
     * @var string 协议类型：TCP、UDP、ICMP、ANY
     */
    public $Protocol;

    /**
     * @var string 规则动作：accept-放行，drop-阻断，log-观察
     */
    public $RuleAction;

    /**
     * @var string 规则描述，长度0-256字符
     */
    public $Description;

    /**
     * @var string 生效范围：serial，串行；side，旁路；all，全局	
     */
    public $Scope;

    /**
     * @var string 规则归属的成员账号ID（多账号场景下使用）。当 SourceType 或 TargetType 为 instance 或 tag 时，此参数必填，用于指定实例/标签所属的成员账号
     */
    public $BelongMemberId;

    /**
     * @var string 参数模板
     */
    public $ParamTemplateId;

    /**
     * @param string $RuleId 规则ID，修改规则时必填
     * @param integer $OrderIndex 规则执行顺序，数字越小优先级越高，创建规则组时必须从1开始严格递增
     * @param integer $Direction 规则方向：0-出站，1-入站
     * @param string $SourceContent 源地址内容，根据 SourceType 不同有不同的格式：ip 时为 IP/CIDR，domain 时为域名，template 时为模板ID，instance 时为实例ID列表（逗号分隔），tag 时为标签键值对（格式：key:value）
     * @param string $SourceType 源地址类型：ip-IP地址，domain-域名，template-参数模板，instance-实例，tag-标签
     * @param string $TargetContent 目标地址内容，格式同 SourceContent
     * @param string $TargetType 目标地址类型：ip-IP地址，domain-域名，template-参数模板，instance-实例，tag-标签
     * @param string $Port 端口，支持单端口、端口范围和逗号分隔的多端口，如：80、1-65535、80,443,8080
     * @param string $Protocol 协议类型：TCP、UDP、ICMP、ANY
     * @param string $RuleAction 规则动作：accept-放行，drop-阻断，log-观察
     * @param string $Description 规则描述，长度0-256字符
     * @param string $Scope 生效范围：serial，串行；side，旁路；all，全局	
     * @param string $BelongMemberId 规则归属的成员账号ID（多账号场景下使用）。当 SourceType 或 TargetType 为 instance 或 tag 时，此参数必填，用于指定实例/标签所属的成员账号
     * @param string $ParamTemplateId 参数模板
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

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("TargetContent",$param) and $param["TargetContent"] !== null) {
            $this->TargetContent = $param["TargetContent"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("BelongMemberId",$param) and $param["BelongMemberId"] !== null) {
            $this->BelongMemberId = $param["BelongMemberId"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }
    }
}
