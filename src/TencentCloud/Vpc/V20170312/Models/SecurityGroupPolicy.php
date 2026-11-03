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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组规则对象
 *
 * @method integer getPolicyIndex() 获取<p>安全组规则索引号，值会随着安全组规则的变更动态变化。使用PolicyIndex时，请先调用<code>DescribeSecurityGroupPolicies</code>获取到规则的PolicyIndex，并且结合返回值中的Version一起使用处理规则。</p>
 * @method void setPolicyIndex(integer $PolicyIndex) 设置<p>安全组规则索引号，值会随着安全组规则的变更动态变化。使用PolicyIndex时，请先调用<code>DescribeSecurityGroupPolicies</code>获取到规则的PolicyIndex，并且结合返回值中的Version一起使用处理规则。</p>
 * @method string getProtocol() 获取<p>协议, 取值: TCP,UDP,ICMP,ICMPv6,ALL。</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议, 取值: TCP,UDP,ICMP,ICMPv6,ALL。</p>
 * @method string getPort() 获取<p>端口(all, 离散port,  range)。<br>说明：如果Protocol设置为ALL，则Port也需要设置为all。</p>
 * @method void setPort(string $Port) 设置<p>端口(all, 离散port,  range)。<br>说明：如果Protocol设置为ALL，则Port也需要设置为all。</p>
 * @method ServiceTemplateSpecification getServiceTemplate() 获取<p>协议端口ID或者协议端口组ID。ServiceTemplate和Protocol+Port互斥。</p>
 * @method void setServiceTemplate(ServiceTemplateSpecification $ServiceTemplate) 设置<p>协议端口ID或者协议端口组ID。ServiceTemplate和Protocol+Port互斥。</p>
 * @method string getCidrBlock() 获取<p>网段或IP(互斥)，特殊说明：0.0.0.0/n 都会映射为0.0.0.0/0。作为入参时，可使用字符串<code>MY_PUBLIC_IP</code>指代发起请求的公网IP地址。</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>网段或IP(互斥)，特殊说明：0.0.0.0/n 都会映射为0.0.0.0/0。作为入参时，可使用字符串<code>MY_PUBLIC_IP</code>指代发起请求的公网IP地址。</p>
 * @method string getIpv6CidrBlock() 获取<p>网段或IPv6(互斥)。作为入参时，可使用字符串<code>MY_PUBLIC_IP</code>指代发起请求的公网IPv6地址。</p>
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置<p>网段或IPv6(互斥)。作为入参时，可使用字符串<code>MY_PUBLIC_IP</code>指代发起请求的公网IPv6地址。</p>
 * @method string getSecurityGroupId() 获取<p>安全组实例ID，例如：sg-ohuuioma。</p>
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置<p>安全组实例ID，例如：sg-ohuuioma。</p>
 * @method AddressTemplateSpecification getAddressTemplate() 获取<p>IP地址ID或者IP地址组ID。</p>
 * @method void setAddressTemplate(AddressTemplateSpecification $AddressTemplate) 设置<p>IP地址ID或者IP地址组ID。</p>
 * @method string getAction() 获取<p>ACCEPT 或 DROP。</p>
 * @method void setAction(string $Action) 设置<p>ACCEPT 或 DROP。</p>
 * @method string getPolicyDescription() 获取<p>安全组规则描述。作为入参时，当未传递该参数或值为空，且参数CidrBlock或Ipv6CidrBlock值为MY_PUBLIC_IP时，该参数的值将会被自动填充为Replaced-From-MY_PUBLIC_IP。</p>
 * @method void setPolicyDescription(string $PolicyDescription) 设置<p>安全组规则描述。作为入参时，当未传递该参数或值为空，且参数CidrBlock或Ipv6CidrBlock值为MY_PUBLIC_IP时，该参数的值将会被自动填充为Replaced-From-MY_PUBLIC_IP。</p>
 * @method string getModifyTime() 获取<p>安全组最近修改时间。</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>安全组最近修改时间。</p>
 * @method integer getPriority() 获取<p>安全组规则优先级，值会随着安全组规则的变更动态变化。使用Priority时，请先调用<code>DescribeSecurityGroupPolicies</code>获取到规则的Priority，并且结合返回值中的Version一起使用处理规则。</p>
 * @method void setPriority(integer $Priority) 设置<p>安全组规则优先级，值会随着安全组规则的变更动态变化。使用Priority时，请先调用<code>DescribeSecurityGroupPolicies</code>获取到规则的Priority，并且结合返回值中的Version一起使用处理规则。</p>
 */
class SecurityGroupPolicy extends AbstractModel
{
    /**
     * @var integer <p>安全组规则索引号，值会随着安全组规则的变更动态变化。使用PolicyIndex时，请先调用<code>DescribeSecurityGroupPolicies</code>获取到规则的PolicyIndex，并且结合返回值中的Version一起使用处理规则。</p>
     */
    public $PolicyIndex;

    /**
     * @var string <p>协议, 取值: TCP,UDP,ICMP,ICMPv6,ALL。</p>
     */
    public $Protocol;

    /**
     * @var string <p>端口(all, 离散port,  range)。<br>说明：如果Protocol设置为ALL，则Port也需要设置为all。</p>
     */
    public $Port;

    /**
     * @var ServiceTemplateSpecification <p>协议端口ID或者协议端口组ID。ServiceTemplate和Protocol+Port互斥。</p>
     */
    public $ServiceTemplate;

    /**
     * @var string <p>网段或IP(互斥)，特殊说明：0.0.0.0/n 都会映射为0.0.0.0/0。作为入参时，可使用字符串<code>MY_PUBLIC_IP</code>指代发起请求的公网IP地址。</p>
     */
    public $CidrBlock;

    /**
     * @var string <p>网段或IPv6(互斥)。作为入参时，可使用字符串<code>MY_PUBLIC_IP</code>指代发起请求的公网IPv6地址。</p>
     */
    public $Ipv6CidrBlock;

    /**
     * @var string <p>安全组实例ID，例如：sg-ohuuioma。</p>
     */
    public $SecurityGroupId;

    /**
     * @var AddressTemplateSpecification <p>IP地址ID或者IP地址组ID。</p>
     */
    public $AddressTemplate;

    /**
     * @var string <p>ACCEPT 或 DROP。</p>
     */
    public $Action;

    /**
     * @var string <p>安全组规则描述。作为入参时，当未传递该参数或值为空，且参数CidrBlock或Ipv6CidrBlock值为MY_PUBLIC_IP时，该参数的值将会被自动填充为Replaced-From-MY_PUBLIC_IP。</p>
     */
    public $PolicyDescription;

    /**
     * @var string <p>安全组最近修改时间。</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>安全组规则优先级，值会随着安全组规则的变更动态变化。使用Priority时，请先调用<code>DescribeSecurityGroupPolicies</code>获取到规则的Priority，并且结合返回值中的Version一起使用处理规则。</p>
     */
    public $Priority;

    /**
     * @param integer $PolicyIndex <p>安全组规则索引号，值会随着安全组规则的变更动态变化。使用PolicyIndex时，请先调用<code>DescribeSecurityGroupPolicies</code>获取到规则的PolicyIndex，并且结合返回值中的Version一起使用处理规则。</p>
     * @param string $Protocol <p>协议, 取值: TCP,UDP,ICMP,ICMPv6,ALL。</p>
     * @param string $Port <p>端口(all, 离散port,  range)。<br>说明：如果Protocol设置为ALL，则Port也需要设置为all。</p>
     * @param ServiceTemplateSpecification $ServiceTemplate <p>协议端口ID或者协议端口组ID。ServiceTemplate和Protocol+Port互斥。</p>
     * @param string $CidrBlock <p>网段或IP(互斥)，特殊说明：0.0.0.0/n 都会映射为0.0.0.0/0。作为入参时，可使用字符串<code>MY_PUBLIC_IP</code>指代发起请求的公网IP地址。</p>
     * @param string $Ipv6CidrBlock <p>网段或IPv6(互斥)。作为入参时，可使用字符串<code>MY_PUBLIC_IP</code>指代发起请求的公网IPv6地址。</p>
     * @param string $SecurityGroupId <p>安全组实例ID，例如：sg-ohuuioma。</p>
     * @param AddressTemplateSpecification $AddressTemplate <p>IP地址ID或者IP地址组ID。</p>
     * @param string $Action <p>ACCEPT 或 DROP。</p>
     * @param string $PolicyDescription <p>安全组规则描述。作为入参时，当未传递该参数或值为空，且参数CidrBlock或Ipv6CidrBlock值为MY_PUBLIC_IP时，该参数的值将会被自动填充为Replaced-From-MY_PUBLIC_IP。</p>
     * @param string $ModifyTime <p>安全组最近修改时间。</p>
     * @param integer $Priority <p>安全组规则优先级，值会随着安全组规则的变更动态变化。使用Priority时，请先调用<code>DescribeSecurityGroupPolicies</code>获取到规则的Priority，并且结合返回值中的Version一起使用处理规则。</p>
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
        if (array_key_exists("PolicyIndex",$param) and $param["PolicyIndex"] !== null) {
            $this->PolicyIndex = $param["PolicyIndex"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ServiceTemplate",$param) and $param["ServiceTemplate"] !== null) {
            $this->ServiceTemplate = new ServiceTemplateSpecification();
            $this->ServiceTemplate->deserialize($param["ServiceTemplate"]);
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("AddressTemplate",$param) and $param["AddressTemplate"] !== null) {
            $this->AddressTemplate = new AddressTemplateSpecification();
            $this->AddressTemplate->deserialize($param["AddressTemplate"]);
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
