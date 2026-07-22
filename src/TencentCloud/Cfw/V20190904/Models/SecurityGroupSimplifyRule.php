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
 * 创建请求写入成功后返回的企业安全组规则摘要。
 *
 * @method string getDescription() 获取写入规则的描述。
 * @method void setDescription(string $Description) 设置写入规则的描述。
 * @method string getDestContent() 获取访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
 * @method void setDestContent(string $DestContent) 设置访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
 * @method string getProtocol() 获取写入规则的协议。普通 IPv4 规则返回 ANY、TCP、UDP 或 ICMP；使用服务模板时，Protocol 可省略或留空，此时返回空字符串；若仍显式填写 Protocol，则只接受 ANY 并返回 ANY。
 * @method void setProtocol(string $Protocol) 设置写入规则的协议。普通 IPv4 规则返回 ANY、TCP、UDP 或 ICMP；使用服务模板时，Protocol 可省略或留空，此时返回空字符串；若仍显式填写 Protocol，则只接受 ANY 并返回 ANY。
 * @method integer getRuleUuid() 获取服务端写入后生成或采用的规则数据库 ID。
 * @method void setRuleUuid(integer $RuleUuid) 设置服务端写入后生成或采用的规则数据库 ID。
 * @method string getScope() 获取写入后的规则生效范围；SG 表示安全组，LH 表示轻量应用服务器，组合范围以逗号分隔。
 * @method void setScope(string $Scope) 设置写入后的规则生效范围；SG 表示安全组，LH 表示轻量应用服务器，组合范围以逗号分隔。
 * @method integer getSequence() 获取服务端写入后的实际规则顺序。
 * @method void setSequence(integer $Sequence) 设置服务端写入后的实际规则顺序。
 * @method string getSourceContent() 获取访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
 * @method void setSourceContent(string $SourceContent) 设置访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
 */
class SecurityGroupSimplifyRule extends AbstractModel
{
    /**
     * @var string 写入规则的描述。
     */
    public $Description;

    /**
     * @var string 访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
     */
    public $DestContent;

    /**
     * @var string 写入规则的协议。普通 IPv4 规则返回 ANY、TCP、UDP 或 ICMP；使用服务模板时，Protocol 可省略或留空，此时返回空字符串；若仍显式填写 Protocol，则只接受 ANY 并返回 ANY。
     */
    public $Protocol;

    /**
     * @var integer 服务端写入后生成或采用的规则数据库 ID。
     */
    public $RuleUuid;

    /**
     * @var string 写入后的规则生效范围；SG 表示安全组，LH 表示轻量应用服务器，组合范围以逗号分隔。
     */
    public $Scope;

    /**
     * @var integer 服务端写入后的实际规则顺序。
     */
    public $Sequence;

    /**
     * @var string 访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
     */
    public $SourceContent;

    /**
     * @param string $Description 写入规则的描述。
     * @param string $DestContent 访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
     * @param string $Protocol 写入规则的协议。普通 IPv4 规则返回 ANY、TCP、UDP 或 ICMP；使用服务模板时，Protocol 可省略或留空，此时返回空字符串；若仍显式填写 Protocol，则只接受 ANY 并返回 ANY。
     * @param integer $RuleUuid 服务端写入后生成或采用的规则数据库 ID。
     * @param string $Scope 写入后的规则生效范围；SG 表示安全组，LH 表示轻量应用服务器，组合范围以逗号分隔。
     * @param integer $Sequence 服务端写入后的实际规则顺序。
     * @param string $SourceContent 访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleUuid",$param) and $param["RuleUuid"] !== null) {
            $this->RuleUuid = $param["RuleUuid"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }
    }
}
