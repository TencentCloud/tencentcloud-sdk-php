<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 安全组规则
 *
 * @method string getSourceContent() 获取访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板id(ipm-dyodhpby)
instance：资产实例id(ins-123456)
resourcegroup：资产分组id(cfwrg-xxxx)
tag：资源标签({\"Key\":\"标签key值\",\"Value\":\"标签Value值\"})
region：地域(ap-gaungzhou)
 * @method void setSourceContent(string $SourceContent) 设置访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板id(ipm-dyodhpby)
instance：资产实例id(ins-123456)
resourcegroup：资产分组id(cfwrg-xxxx)
tag：资源标签({\"Key\":\"标签key值\",\"Value\":\"标签Value值\"})
region：地域(ap-gaungzhou)
 * @method string getSourceType() 获取访问源类型，类型可以为以下6种：net|template|instance|resourcegroup|tag|region
 * @method void setSourceType(string $SourceType) 设置访问源类型，类型可以为以下6种：net|template|instance|resourcegroup|tag|region
 * @method string getDestContent() 获取访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板id(ipm-dyodhpby)
instance：资产实例id(ins-123456)
resourcegroup：资产分组id(cfwrg-xxxx)
tag：资源标签({\"Key\":\"标签key值\",\"Value\":\"标签Value值\"})
region：地域(ap-gaungzhou)
 * @method void setDestContent(string $DestContent) 设置访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板id(ipm-dyodhpby)
instance：资产实例id(ins-123456)
resourcegroup：资产分组id(cfwrg-xxxx)
tag：资源标签({\"Key\":\"标签key值\",\"Value\":\"标签Value值\"})
region：地域(ap-gaungzhou)
 * @method string getDestType() 获取访问目的类型，类型可以为以下6种：net|template|instance|resourcegroup|tag|region
 * @method void setDestType(string $DestType) 设置访问目的类型，类型可以为以下6种：net|template|instance|resourcegroup|tag|region
 * @method string getRuleAction() 获取访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
 * @method void setRuleAction(string $RuleAction) 设置访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
 * @method string getDescription() 获取规则描述 用于规则使用或者场景的描述，最多支持50个字符
 * @method void setDescription(string $Description) 设置规则描述 用于规则使用或者场景的描述，最多支持50个字符
 * @method string getOrderIndex() 获取规则顺序，-1表示最低，1表示最高，请勿和外层Type冲突（和外层的Type配合使用，当中间插入时，指定添加位置）
 * @method void setOrderIndex(string $OrderIndex) 设置规则顺序，-1表示最低，1表示最高，请勿和外层Type冲突（和外层的Type配合使用，当中间插入时，指定添加位置）
 * @method string getProtocol() 获取协议；TCP/UDP/ICMP/ICMPv6/ANY
 * @method void setProtocol(string $Protocol) 设置协议；TCP/UDP/ICMP/ICMPv6/ANY
 * @method string getPort() 获取访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
 * @method void setPort(string $Port) 设置访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
 * @method string getServiceTemplateId() 获取端口协议类型参数模板id；协议端口模板id；与Protocol,Port互斥
 * @method void setServiceTemplateId(string $ServiceTemplateId) 设置端口协议类型参数模板id；协议端口模板id；与Protocol,Port互斥
 * @method string getId() 获取（入参时无需填写，自动生成）规则对应的唯一id
 * @method void setId(string $Id) 设置（入参时无需填写，自动生成）规则对应的唯一id
 * @method string getEnable() 获取（入参时Enable无意义；由通用配置中新增规则启用状态控制）
规则状态，true表示启用，false表示禁用
 * @method void setEnable(string $Enable) 设置（入参时Enable无意义；由通用配置中新增规则启用状态控制）
规则状态，true表示启用，false表示禁用
 * @method string getUid() 获取规则对应的唯一内部id
 * @method void setUid(string $Uid) 设置规则对应的唯一内部id
 */
class SecurityGroupRule extends AbstractModel
{
    /**
     * @var string 访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板id(ipm-dyodhpby)
instance：资产实例id(ins-123456)
resourcegroup：资产分组id(cfwrg-xxxx)
tag：资源标签({\"Key\":\"标签key值\",\"Value\":\"标签Value值\"})
region：地域(ap-gaungzhou)
     */
    public $SourceContent;

    /**
     * @var string 访问源类型，类型可以为以下6种：net|template|instance|resourcegroup|tag|region
     */
    public $SourceType;

    /**
     * @var string 访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板id(ipm-dyodhpby)
instance：资产实例id(ins-123456)
resourcegroup：资产分组id(cfwrg-xxxx)
tag：资源标签({\"Key\":\"标签key值\",\"Value\":\"标签Value值\"})
region：地域(ap-gaungzhou)
     */
    public $DestContent;

    /**
     * @var string 访问目的类型，类型可以为以下6种：net|template|instance|resourcegroup|tag|region
     */
    public $DestType;

    /**
     * @var string 访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
     */
    public $RuleAction;

    /**
     * @var string 规则描述 用于规则使用或者场景的描述，最多支持50个字符
     */
    public $Description;

    /**
     * @var string 规则顺序，-1表示最低，1表示最高，请勿和外层Type冲突（和外层的Type配合使用，当中间插入时，指定添加位置）
     */
    public $OrderIndex;

    /**
     * @var string 协议；TCP/UDP/ICMP/ICMPv6/ANY
     */
    public $Protocol;

    /**
     * @var string 访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
     */
    public $Port;

    /**
     * @var string 端口协议类型参数模板id；协议端口模板id；与Protocol,Port互斥
     */
    public $ServiceTemplateId;

    /**
     * @var string （入参时无需填写，自动生成）规则对应的唯一id
     */
    public $Id;

    /**
     * @var string （入参时Enable无意义；由通用配置中新增规则启用状态控制）
规则状态，true表示启用，false表示禁用
     */
    public $Enable;

    /**
     * @var string 规则对应的唯一内部id
     */
    public $Uid;

    /**
     * @param string $SourceContent 访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板id(ipm-dyodhpby)
instance：资产实例id(ins-123456)
resourcegroup：资产分组id(cfwrg-xxxx)
tag：资源标签({\"Key\":\"标签key值\",\"Value\":\"标签Value值\"})
region：地域(ap-gaungzhou)
     * @param string $SourceType 访问源类型，类型可以为以下6种：net|template|instance|resourcegroup|tag|region
     * @param string $DestContent 访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板id(ipm-dyodhpby)
instance：资产实例id(ins-123456)
resourcegroup：资产分组id(cfwrg-xxxx)
tag：资源标签({\"Key\":\"标签key值\",\"Value\":\"标签Value值\"})
region：地域(ap-gaungzhou)
     * @param string $DestType 访问目的类型，类型可以为以下6种：net|template|instance|resourcegroup|tag|region
     * @param string $RuleAction 访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
     * @param string $Description 规则描述 用于规则使用或者场景的描述，最多支持50个字符
     * @param string $OrderIndex 规则顺序，-1表示最低，1表示最高，请勿和外层Type冲突（和外层的Type配合使用，当中间插入时，指定添加位置）
     * @param string $Protocol 协议；TCP/UDP/ICMP/ICMPv6/ANY
     * @param string $Port 访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
     * @param string $ServiceTemplateId 端口协议类型参数模板id；协议端口模板id；与Protocol,Port互斥
     * @param string $Id （入参时无需填写，自动生成）规则对应的唯一id
     * @param string $Enable （入参时Enable无意义；由通用配置中新增规则启用状态控制）
规则状态，true表示启用，false表示禁用
     * @param string $Uid 规则对应的唯一内部id
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

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }
    }
}
