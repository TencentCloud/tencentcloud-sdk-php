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
 * 安全组规则
 *
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
 * @method string getProtocol() 获取协议；TCP/UDP/ICMP/ANY
 * @method void setProtocol(string $Protocol) 设置协议；TCP/UDP/ICMP/ANY
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method integer getRuleUuid() 获取规则对应的唯一id
 * @method void setRuleUuid(integer $RuleUuid) 设置规则对应的唯一id
 * @method integer getSequence() 获取规则序号
 * @method void setSequence(integer $Sequence) 设置规则序号
 */
class SecurityGroupSimplifyRule extends AbstractModel
{
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
     * @var string 协议；TCP/UDP/ICMP/ANY
     */
    public $Protocol;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var integer 规则对应的唯一id
     */
    public $RuleUuid;

    /**
     * @var integer 规则序号
     */
    public $Sequence;

    /**
     * @param string $SourceContent 访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
     * @param string $DestContent 访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
     * @param string $Protocol 协议；TCP/UDP/ICMP/ANY
     * @param string $Description 描述
     * @param integer $RuleUuid 规则对应的唯一id
     * @param integer $Sequence 规则序号
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

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleUuid",$param) and $param["RuleUuid"] !== null) {
            $this->RuleUuid = $param["RuleUuid"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }
    }
}
