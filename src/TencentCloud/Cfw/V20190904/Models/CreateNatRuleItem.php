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
 * 创建NAT ACL规则参数结构
 *
 * @method string getSourceContent() 获取<p>访问源示例： net：IP/CIDR(192.168.0.2)</p>
 * @method void setSourceContent(string $SourceContent) 设置<p>访问源示例： net：IP/CIDR(192.168.0.2)</p>
 * @method string getSourceType() 获取<p>访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag</p>
 * @method void setSourceType(string $SourceType) 设置<p>访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag</p>
 * @method string getTargetContent() 获取<p>访问目的示例： net：IP/CIDR(192.168.0.2) domain：域名规则，例如*.qq.com</p>
 * @method void setTargetContent(string $TargetContent) 设置<p>访问目的示例： net：IP/CIDR(192.168.0.2) domain：域名规则，例如*.qq.com</p>
 * @method string getTargetType() 获取<p>访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为  ip,net,domain,template,location</p>
 * @method void setTargetType(string $TargetType) 设置<p>访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为  ip,net,domain,template,location</p>
 * @method string getProtocol() 获取<p>协议，可选的值： TCP UDP ICMP ANY HTTP HTTPS HTTP/HTTPS SMTP SMTPS SMTP/SMTPS FTP DNS</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议，可选的值： TCP UDP ICMP ANY HTTP HTTPS HTTP/HTTPS SMTP SMTPS SMTP/SMTPS FTP DNS</p>
 * @method string getRuleAction() 获取<p>访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察</p>
 * @method void setRuleAction(string $RuleAction) 设置<p>访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察</p>
 * @method string getPort() 获取<p>访问控制策略的端口。取值： -1/-1：全部端口 80：80端口</p>
 * @method void setPort(string $Port) 设置<p>访问控制策略的端口。取值： -1/-1：全部端口 80：80端口</p>
 * @method integer getDirection() 获取<p>规则方向：1，入站；0，出站</p>
 * @method void setDirection(integer $Direction) 设置<p>规则方向：1，入站；0，出站</p>
 * @method integer getOrderIndex() 获取<p>规则序号</p>
 * @method void setOrderIndex(integer $OrderIndex) 设置<p>规则序号</p>
 * @method string getEnable() 获取<p>规则状态，true表示启用，false表示禁用</p>
 * @method void setEnable(string $Enable) 设置<p>规则状态，true表示启用，false表示禁用</p>
 * @method integer getUuid() 获取<p>规则对应的唯一id，创建规则AddNatAcRule时无需填写；修改规则ModifyNatAcRule时必须填写</p><p>创建规则AddNatAcRule时无需填写；修改规则ModifyNatAcRule时必须填写</p>
 * @method void setUuid(integer $Uuid) 设置<p>规则对应的唯一id，创建规则AddNatAcRule时无需填写；修改规则ModifyNatAcRule时必须填写</p><p>创建规则AddNatAcRule时无需填写；修改规则ModifyNatAcRule时必须填写</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getParamTemplateId() 获取<p>端口协议组ID</p>
 * @method void setParamTemplateId(string $ParamTemplateId) 设置<p>端口协议组ID</p>
 * @method integer getInternalUuid() 获取<p>内部id</p>
 * @method void setInternalUuid(integer $InternalUuid) 设置<p>内部id</p>
 * @method string getScope() 获取<p>规则生效的范围：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度</p>
 * @method void setScope(string $Scope) 设置<p>规则生效的范围：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度</p>
 */
class CreateNatRuleItem extends AbstractModel
{
    /**
     * @var string <p>访问源示例： net：IP/CIDR(192.168.0.2)</p>
     */
    public $SourceContent;

    /**
     * @var string <p>访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag</p>
     */
    public $SourceType;

    /**
     * @var string <p>访问目的示例： net：IP/CIDR(192.168.0.2) domain：域名规则，例如*.qq.com</p>
     */
    public $TargetContent;

    /**
     * @var string <p>访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为  ip,net,domain,template,location</p>
     */
    public $TargetType;

    /**
     * @var string <p>协议，可选的值： TCP UDP ICMP ANY HTTP HTTPS HTTP/HTTPS SMTP SMTPS SMTP/SMTPS FTP DNS</p>
     */
    public $Protocol;

    /**
     * @var string <p>访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察</p>
     */
    public $RuleAction;

    /**
     * @var string <p>访问控制策略的端口。取值： -1/-1：全部端口 80：80端口</p>
     */
    public $Port;

    /**
     * @var integer <p>规则方向：1，入站；0，出站</p>
     */
    public $Direction;

    /**
     * @var integer <p>规则序号</p>
     */
    public $OrderIndex;

    /**
     * @var string <p>规则状态，true表示启用，false表示禁用</p>
     */
    public $Enable;

    /**
     * @var integer <p>规则对应的唯一id，创建规则AddNatAcRule时无需填写；修改规则ModifyNatAcRule时必须填写</p><p>创建规则AddNatAcRule时无需填写；修改规则ModifyNatAcRule时必须填写</p>
     */
    public $Uuid;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>端口协议组ID</p>
     */
    public $ParamTemplateId;

    /**
     * @var integer <p>内部id</p>
     */
    public $InternalUuid;

    /**
     * @var string <p>规则生效的范围：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度</p>
     */
    public $Scope;

    /**
     * @param string $SourceContent <p>访问源示例： net：IP/CIDR(192.168.0.2)</p>
     * @param string $SourceType <p>访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag</p>
     * @param string $TargetContent <p>访问目的示例： net：IP/CIDR(192.168.0.2) domain：域名规则，例如*.qq.com</p>
     * @param string $TargetType <p>访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为  ip,net,domain,template,location</p>
     * @param string $Protocol <p>协议，可选的值： TCP UDP ICMP ANY HTTP HTTPS HTTP/HTTPS SMTP SMTPS SMTP/SMTPS FTP DNS</p>
     * @param string $RuleAction <p>访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察</p>
     * @param string $Port <p>访问控制策略的端口。取值： -1/-1：全部端口 80：80端口</p>
     * @param integer $Direction <p>规则方向：1，入站；0，出站</p>
     * @param integer $OrderIndex <p>规则序号</p>
     * @param string $Enable <p>规则状态，true表示启用，false表示禁用</p>
     * @param integer $Uuid <p>规则对应的唯一id，创建规则AddNatAcRule时无需填写；修改规则ModifyNatAcRule时必须填写</p><p>创建规则AddNatAcRule时无需填写；修改规则ModifyNatAcRule时必须填写</p>
     * @param string $Description <p>描述</p>
     * @param string $ParamTemplateId <p>端口协议组ID</p>
     * @param integer $InternalUuid <p>内部id</p>
     * @param string $Scope <p>规则生效的范围：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度</p>
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

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("InternalUuid",$param) and $param["InternalUuid"] !== null) {
            $this->InternalUuid = $param["InternalUuid"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }
    }
}
