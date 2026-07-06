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
 * VPC边界规则
 *
 * @method string getSourceContent() 获取源地址内容
 * @method void setSourceContent(string $SourceContent) 设置源地址内容
 * @method string getSourceType() 获取源类型：ip/url/template/instance/tag
 * @method void setSourceType(string $SourceType) 设置源类型：ip/url/template/instance/tag
 * @method string getDestContent() 获取目的地址内容
 * @method void setDestContent(string $DestContent) 设置目的地址内容
 * @method string getDestType() 获取目的类型：ip/url/template/instance/tag
 * @method void setDestType(string $DestType) 设置目的类型：ip/url/template/instance/tag
 * @method string getProtocol() 获取协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等
 * @method void setProtocol(string $Protocol) 设置协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等
 * @method string getRuleAction() 获取动作：accept/drop/log
 * @method void setRuleAction(string $RuleAction) 设置动作：accept/drop/log
 * @method integer getOrderIndex() 获取优先级（从1开始）
 * @method void setOrderIndex(integer $OrderIndex) 设置优先级（从1开始）
 * @method string getEdgeId() 获取边界防火墙ID：ALL表示全局，CFWS-xxx表示指定边界
 * @method void setEdgeId(string $EdgeId) 设置边界防火墙ID：ALL表示全局，CFWS-xxx表示指定边界
 * @method string getFwGroupId() 获取防火墙实例ID（规则生效范围）：ALL-全局生效，ccn-xxx-云联网实例，cfwg-xxx-防火墙组实例
 * @method void setFwGroupId(string $FwGroupId) 设置防火墙实例ID（规则生效范围）：ALL-全局生效，ccn-xxx-云联网实例，cfwg-xxx-防火墙组实例
 * @method string getRuleId() 获取规则ID（修改时必填）
 * @method void setRuleId(string $RuleId) 设置规则ID（修改时必填）
 * @method string getPort() 获取端口（ICMP协议时为空）
 * @method void setPort(string $Port) 设置端口（ICMP协议时为空）
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method string getParamTemplateId() 获取端口模板ID
 * @method void setParamTemplateId(string $ParamTemplateId) 设置端口模板ID
 * @method string getBelongMemberId() 获取规则归属的成员账号ID（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填）
 * @method void setBelongMemberId(string $BelongMemberId) 设置规则归属的成员账号ID（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填）
 */
class VpcAclRule extends AbstractModel
{
    /**
     * @var string 源地址内容
     */
    public $SourceContent;

    /**
     * @var string 源类型：ip/url/template/instance/tag
     */
    public $SourceType;

    /**
     * @var string 目的地址内容
     */
    public $DestContent;

    /**
     * @var string 目的类型：ip/url/template/instance/tag
     */
    public $DestType;

    /**
     * @var string 协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等
     */
    public $Protocol;

    /**
     * @var string 动作：accept/drop/log
     */
    public $RuleAction;

    /**
     * @var integer 优先级（从1开始）
     */
    public $OrderIndex;

    /**
     * @var string 边界防火墙ID：ALL表示全局，CFWS-xxx表示指定边界
     */
    public $EdgeId;

    /**
     * @var string 防火墙实例ID（规则生效范围）：ALL-全局生效，ccn-xxx-云联网实例，cfwg-xxx-防火墙组实例
     */
    public $FwGroupId;

    /**
     * @var string 规则ID（修改时必填）
     */
    public $RuleId;

    /**
     * @var string 端口（ICMP协议时为空）
     */
    public $Port;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var string 端口模板ID
     */
    public $ParamTemplateId;

    /**
     * @var string 规则归属的成员账号ID（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填）
     */
    public $BelongMemberId;

    /**
     * @param string $SourceContent 源地址内容
     * @param string $SourceType 源类型：ip/url/template/instance/tag
     * @param string $DestContent 目的地址内容
     * @param string $DestType 目的类型：ip/url/template/instance/tag
     * @param string $Protocol 协议：TCP/UDP/ICMP/ANY/HTTP/HTTPS/DNS/FTP等
     * @param string $RuleAction 动作：accept/drop/log
     * @param integer $OrderIndex 优先级（从1开始）
     * @param string $EdgeId 边界防火墙ID：ALL表示全局，CFWS-xxx表示指定边界
     * @param string $FwGroupId 防火墙实例ID（规则生效范围）：ALL-全局生效，ccn-xxx-云联网实例，cfwg-xxx-防火墙组实例
     * @param string $RuleId 规则ID（修改时必填）
     * @param string $Port 端口（ICMP协议时为空）
     * @param string $Description 规则描述
     * @param string $ParamTemplateId 端口模板ID
     * @param string $BelongMemberId 规则归属的成员账号ID（当FwGroupId为cfwg-xxx或SourceType/DestType为instance/tag时必填）
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

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("DestType",$param) and $param["DestType"] !== null) {
            $this->DestType = $param["DestType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("BelongMemberId",$param) and $param["BelongMemberId"] !== null) {
            $this->BelongMemberId = $param["BelongMemberId"];
        }
    }
}
