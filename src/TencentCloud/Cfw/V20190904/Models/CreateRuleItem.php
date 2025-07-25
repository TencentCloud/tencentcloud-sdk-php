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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建互联网边界规则参数结构
 *
 * @method string getSourceContent() 获取访问源示例： net：IP/CIDR(192.168.0.2)
 * @method void setSourceContent(string $SourceContent) 设置访问源示例： net：IP/CIDR(192.168.0.2)
 * @method string getSourceType() 获取访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag
 * @method void setSourceType(string $SourceType) 设置访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag
 * @method string getTargetContent() 获取访问目的示例： net：IP/CIDR(192.168.0.2) domain：域名规则，例如*.qq.com
 * @method void setTargetContent(string $TargetContent) 设置访问目的示例： net：IP/CIDR(192.168.0.2) domain：域名规则，例如*.qq.com
 * @method string getTargetType() 获取访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为  ip,net,domain,template,location
 * @method void setTargetType(string $TargetType) 设置访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为  ip,net,domain,template,location
 * @method string getProtocol() 获取协议，可选的值： TCP UDP ICMP ANY HTTP HTTPS HTTP/HTTPS SMTP SMTPS SMTP/SMTPS FTP DNS
1. 入方向  旁路防火墙/全局规则 仅支持TCP

2.出方向  旁路防火墙/全局规则 仅支持TCP HTTP/HTTPS TLS/SSL

3.domain  请选择七层协议 如HTTP/HTTPS

 * @method void setProtocol(string $Protocol) 设置协议，可选的值： TCP UDP ICMP ANY HTTP HTTPS HTTP/HTTPS SMTP SMTPS SMTP/SMTPS FTP DNS
1. 入方向  旁路防火墙/全局规则 仅支持TCP

2.出方向  旁路防火墙/全局规则 仅支持TCP HTTP/HTTPS TLS/SSL

3.domain  请选择七层协议 如HTTP/HTTPS

 * @method string getRuleAction() 获取访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
 * @method void setRuleAction(string $RuleAction) 设置访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
 * @method string getPort() 获取访问控制策略的端口。取值： -1/-1：全部端口 80：80端口
 * @method void setPort(string $Port) 设置访问控制策略的端口。取值： -1/-1：全部端口 80：80端口
 * @method integer getDirection() 获取规则方向：1，入站；0，出站
 * @method void setDirection(integer $Direction) 设置规则方向：1，入站；0，出站
 * @method integer getOrderIndex() 获取规则序号
 * @method void setOrderIndex(integer $OrderIndex) 设置规则序号
 * @method integer getUuid() 获取规则对应的唯一id，创建规则时无需填写
 * @method void setUuid(integer $Uuid) 设置规则对应的唯一id，创建规则时无需填写
 * @method string getEnable() 获取规则状态，true表示启用，false表示禁用
 * @method void setEnable(string $Enable) 设置规则状态，true表示启用，false表示禁用
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getScope() 获取all
 * @method void setScope(string $Scope) 设置all
 * @method integer getRuleSource() 获取0，正常规则添加；1，入侵检测添加
 * @method void setRuleSource(integer $RuleSource) 设置0，正常规则添加；1，入侵检测添加
 * @method string getLogId() 获取告警Id
 * @method void setLogId(string $LogId) 设置告警Id
 * @method string getParamTemplateId() 获取端都协议组ID
 * @method void setParamTemplateId(string $ParamTemplateId) 设置端都协议组ID
 */
class CreateRuleItem extends AbstractModel
{
    /**
     * @var string 访问源示例： net：IP/CIDR(192.168.0.2)
     */
    public $SourceContent;

    /**
     * @var string 访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag
     */
    public $SourceType;

    /**
     * @var string 访问目的示例： net：IP/CIDR(192.168.0.2) domain：域名规则，例如*.qq.com
     */
    public $TargetContent;

    /**
     * @var string 访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为  ip,net,domain,template,location
     */
    public $TargetType;

    /**
     * @var string 协议，可选的值： TCP UDP ICMP ANY HTTP HTTPS HTTP/HTTPS SMTP SMTPS SMTP/SMTPS FTP DNS
1. 入方向  旁路防火墙/全局规则 仅支持TCP

2.出方向  旁路防火墙/全局规则 仅支持TCP HTTP/HTTPS TLS/SSL

3.domain  请选择七层协议 如HTTP/HTTPS

     */
    public $Protocol;

    /**
     * @var string 访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
     */
    public $RuleAction;

    /**
     * @var string 访问控制策略的端口。取值： -1/-1：全部端口 80：80端口
     */
    public $Port;

    /**
     * @var integer 规则方向：1，入站；0，出站
     */
    public $Direction;

    /**
     * @var integer 规则序号
     */
    public $OrderIndex;

    /**
     * @var integer 规则对应的唯一id，创建规则时无需填写
     */
    public $Uuid;

    /**
     * @var string 规则状态，true表示启用，false表示禁用
     */
    public $Enable;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string all
     */
    public $Scope;

    /**
     * @var integer 0，正常规则添加；1，入侵检测添加
     */
    public $RuleSource;

    /**
     * @var string 告警Id
     */
    public $LogId;

    /**
     * @var string 端都协议组ID
     */
    public $ParamTemplateId;

    /**
     * @param string $SourceContent 访问源示例： net：IP/CIDR(192.168.0.2)
     * @param string $SourceType 访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag
     * @param string $TargetContent 访问目的示例： net：IP/CIDR(192.168.0.2) domain：域名规则，例如*.qq.com
     * @param string $TargetType 访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为  ip,net,domain,template,location
     * @param string $Protocol 协议，可选的值： TCP UDP ICMP ANY HTTP HTTPS HTTP/HTTPS SMTP SMTPS SMTP/SMTPS FTP DNS
1. 入方向  旁路防火墙/全局规则 仅支持TCP

2.出方向  旁路防火墙/全局规则 仅支持TCP HTTP/HTTPS TLS/SSL

3.domain  请选择七层协议 如HTTP/HTTPS

     * @param string $RuleAction 访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
     * @param string $Port 访问控制策略的端口。取值： -1/-1：全部端口 80：80端口
     * @param integer $Direction 规则方向：1，入站；0，出站
     * @param integer $OrderIndex 规则序号
     * @param integer $Uuid 规则对应的唯一id，创建规则时无需填写
     * @param string $Enable 规则状态，true表示启用，false表示禁用
     * @param string $Description 描述
     * @param string $Scope all
     * @param integer $RuleSource 0，正常规则添加；1，入侵检测添加
     * @param string $LogId 告警Id
     * @param string $ParamTemplateId 端都协议组ID
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("RuleSource",$param) and $param["RuleSource"] !== null) {
            $this->RuleSource = $param["RuleSource"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }
    }
}
