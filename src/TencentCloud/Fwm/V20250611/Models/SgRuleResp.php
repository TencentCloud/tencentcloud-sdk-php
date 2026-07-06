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
 * 规则列表响应数据结构
 *
 * @method string getRuleId() 获取规则Id
 * @method void setRuleId(string $RuleId) 设置规则Id
 * @method integer getSequence() 获取优先级
 * @method void setSequence(integer $Sequence) 设置优先级
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 * @method string getIpVersion() 获取ip类型
 * @method void setIpVersion(string $IpVersion) 设置ip类型
 * @method string getSrcContent() 获取源内容
 * @method void setSrcContent(string $SrcContent) 设置源内容
 * @method string getSrcType() 获取源类型
 * @method void setSrcType(string $SrcType) 设置源类型
 * @method string getDstContent() 获取目的内容
 * @method void setDstContent(string $DstContent) 设置目的内容
 * @method string getDstType() 获取目的类型
 * @method void setDstType(string $DstType) 设置目的类型
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method integer getProtocolPortType() 获取协议端口参数模板
 * @method void setProtocolPortType(integer $ProtocolPortType) 设置协议端口参数模板
 * @method string getServiceTemplateId() 获取协议端口参数模板id
 * @method void setServiceTemplateId(string $ServiceTemplateId) 设置协议端口参数模板id
 * @method string getDstPort() 获取端口段,支持单端口,多端口和端口段
 * @method void setDstPort(string $DstPort) 设置端口段,支持单端口,多端口和端口段
 * @method string getRuleAction() 获取策略，1阻断，2放行
 * @method void setRuleAction(string $RuleAction) 设置策略，1阻断，2放行
 * @method string getDetail() 获取描述
 * @method void setDetail(string $Detail) 设置描述
 * @method string getRuleSource() 获取规则来源，0为用户控制台添加
 * @method void setRuleSource(string $RuleSource) 设置规则来源，0为用户控制台添加
 * @method string getScope() 获取生效范围,字节位,1:SG 企业安全组,2:LH 轻量服务器
 * @method void setScope(string $Scope) 设置生效范围,字节位,1:SG 企业安全组,2:LH 轻量服务器
 */
class SgRuleResp extends AbstractModel
{
    /**
     * @var string 规则Id
     */
    public $RuleId;

    /**
     * @var integer 优先级
     */
    public $Sequence;

    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @var string ip类型
     */
    public $IpVersion;

    /**
     * @var string 源内容
     */
    public $SrcContent;

    /**
     * @var string 源类型
     */
    public $SrcType;

    /**
     * @var string 目的内容
     */
    public $DstContent;

    /**
     * @var string 目的类型
     */
    public $DstType;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var integer 协议端口参数模板
     */
    public $ProtocolPortType;

    /**
     * @var string 协议端口参数模板id
     */
    public $ServiceTemplateId;

    /**
     * @var string 端口段,支持单端口,多端口和端口段
     */
    public $DstPort;

    /**
     * @var string 策略，1阻断，2放行
     */
    public $RuleAction;

    /**
     * @var string 描述
     */
    public $Detail;

    /**
     * @var string 规则来源，0为用户控制台添加
     */
    public $RuleSource;

    /**
     * @var string 生效范围,字节位,1:SG 企业安全组,2:LH 轻量服务器
     */
    public $Scope;

    /**
     * @param string $RuleId 规则Id
     * @param integer $Sequence 优先级
     * @param string $Region 区域
     * @param string $IpVersion ip类型
     * @param string $SrcContent 源内容
     * @param string $SrcType 源类型
     * @param string $DstContent 目的内容
     * @param string $DstType 目的类型
     * @param string $Protocol 协议
     * @param integer $ProtocolPortType 协议端口参数模板
     * @param string $ServiceTemplateId 协议端口参数模板id
     * @param string $DstPort 端口段,支持单端口,多端口和端口段
     * @param string $RuleAction 策略，1阻断，2放行
     * @param string $Detail 描述
     * @param string $RuleSource 规则来源，0为用户控制台添加
     * @param string $Scope 生效范围,字节位,1:SG 企业安全组,2:LH 轻量服务器
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

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("SrcContent",$param) and $param["SrcContent"] !== null) {
            $this->SrcContent = $param["SrcContent"];
        }

        if (array_key_exists("SrcType",$param) and $param["SrcType"] !== null) {
            $this->SrcType = $param["SrcType"];
        }

        if (array_key_exists("DstContent",$param) and $param["DstContent"] !== null) {
            $this->DstContent = $param["DstContent"];
        }

        if (array_key_exists("DstType",$param) and $param["DstType"] !== null) {
            $this->DstType = $param["DstType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ProtocolPortType",$param) and $param["ProtocolPortType"] !== null) {
            $this->ProtocolPortType = $param["ProtocolPortType"];
        }

        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("RuleSource",$param) and $param["RuleSource"] !== null) {
            $this->RuleSource = $param["RuleSource"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }
    }
}
