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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建实例时的网卡配置信息，包含主网卡和辅助网卡的VPC、子网、IP分配等网络参数。

此功能仅部分地区灰度开放，如需使用[请提交工单咨询](https://console.cloud.tencent.com/workorder/category)
 *
 * @method string getInterfaceType() 获取<p>表示是主网卡还是辅助网卡。注意：枚举值要全部大写；<strong>NetworkInterfaces数组中必须要有PRIMARY</strong>，且PRIMARY只能存在一个，SECONDARY可以存在多个。</p><p>枚举值：</p><ul><li>PRIMARY： 主网卡</li><li>SECONDARY： 辅助网卡</li></ul>
 * @method void setInterfaceType(string $InterfaceType) 设置<p>表示是主网卡还是辅助网卡。注意：枚举值要全部大写；<strong>NetworkInterfaces数组中必须要有PRIMARY</strong>，且PRIMARY只能存在一个，SECONDARY可以存在多个。</p><p>枚举值：</p><ul><li>PRIMARY： 主网卡</li><li>SECONDARY： 辅助网卡</li></ul>
 * @method string getVpcId() 获取<p>私有网络ID，形如<code>vpc-xxx</code>。有效的VpcId可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> ，从接口返回中的<code>VpcId</code>字段获取。若在创建子机时VpcId与SubnetId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID，形如<code>vpc-xxx</code>。有效的VpcId可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> ，从接口返回中的<code>VpcId</code>字段获取。若在创建子机时VpcId与SubnetId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
 * @method string getSubnetId() 获取<p>私有网络子网ID，形如<code>subnet-xxx</code>。有效的私有网络子网ID可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">控制台</a>查询；也可以调用接口  <a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a> ，从接口返回中的<code>SubnetId</code>字段获取。若在创建子机时SubnetId与VpcId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络子网ID，形如<code>subnet-xxx</code>。有效的私有网络子网ID可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">控制台</a>查询；也可以调用接口  <a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a> ，从接口返回中的<code>SubnetId</code>字段获取。若在创建子机时SubnetId与VpcId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
 * @method integer getPrivateIpv4AddressCount() 获取<p>此字段是必填字段，表示每张网卡自动分配私有网卡IP个数。注意：不允许客户同时指定ip且动态分配ip。</p><p>取值范围：[1, 50]</p>
 * @method void setPrivateIpv4AddressCount(integer $PrivateIpv4AddressCount) 设置<p>此字段是必填字段，表示每张网卡自动分配私有网卡IP个数。注意：不允许客户同时指定ip且动态分配ip。</p><p>取值范围：[1, 50]</p>
 * @method string getNetworkInterfaceId() 获取<p>指定存量的网卡ID用于绑定。只对辅助网卡生效，主网卡的生成采用既有流程。注：客户手动指定已有弹性网卡时，相关接口InstanceCount必须为1。主网卡不支持指定。</p>
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置<p>指定存量的网卡ID用于绑定。只对辅助网卡生效，主网卡的生成采用既有流程。注：客户手动指定已有弹性网卡时，相关接口InstanceCount必须为1。主网卡不支持指定。</p>
 * @method array getSecurityGroupIds() 获取<p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的 <code>SecurityGroupId</code> 字段来获取。若不指定该参数，则绑定指定项目下的默认安全组，如默认安全组不存在则将自动创建。</p><p>每个用户在每个地域每个项目下最多可设置50个安全组。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的 <code>SecurityGroupId</code> 字段来获取。若不指定该参数，则绑定指定项目下的默认安全组，如默认安全组不存在则将自动创建。</p><p>每个用户在每个地域每个项目下最多可设置50个安全组。</p>
 * @method boolean getDeleteWithInstance() 获取<p>是否随CVM删除绑定的弹性网卡，参数只对辅助网卡生效。默认保留辅助网卡兼容当前线上行为。该参数放置在主网卡上不生效，主网卡会随着CVM一同销毁。</p><p>默认值：<code>false</code></p>
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置<p>是否随CVM删除绑定的弹性网卡，参数只对辅助网卡生效。默认保留辅助网卡兼容当前线上行为。该参数放置在主网卡上不生效，主网卡会随着CVM一同销毁。</p><p>默认值：<code>false</code></p>
 */
class NetworkInterfaces extends AbstractModel
{
    /**
     * @var string <p>表示是主网卡还是辅助网卡。注意：枚举值要全部大写；<strong>NetworkInterfaces数组中必须要有PRIMARY</strong>，且PRIMARY只能存在一个，SECONDARY可以存在多个。</p><p>枚举值：</p><ul><li>PRIMARY： 主网卡</li><li>SECONDARY： 辅助网卡</li></ul>
     */
    public $InterfaceType;

    /**
     * @var string <p>私有网络ID，形如<code>vpc-xxx</code>。有效的VpcId可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> ，从接口返回中的<code>VpcId</code>字段获取。若在创建子机时VpcId与SubnetId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络子网ID，形如<code>subnet-xxx</code>。有效的私有网络子网ID可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">控制台</a>查询；也可以调用接口  <a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a> ，从接口返回中的<code>SubnetId</code>字段获取。若在创建子机时SubnetId与VpcId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>此字段是必填字段，表示每张网卡自动分配私有网卡IP个数。注意：不允许客户同时指定ip且动态分配ip。</p><p>取值范围：[1, 50]</p>
     */
    public $PrivateIpv4AddressCount;

    /**
     * @var string <p>指定存量的网卡ID用于绑定。只对辅助网卡生效，主网卡的生成采用既有流程。注：客户手动指定已有弹性网卡时，相关接口InstanceCount必须为1。主网卡不支持指定。</p>
     */
    public $NetworkInterfaceId;

    /**
     * @var array <p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的 <code>SecurityGroupId</code> 字段来获取。若不指定该参数，则绑定指定项目下的默认安全组，如默认安全组不存在则将自动创建。</p><p>每个用户在每个地域每个项目下最多可设置50个安全组。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var boolean <p>是否随CVM删除绑定的弹性网卡，参数只对辅助网卡生效。默认保留辅助网卡兼容当前线上行为。该参数放置在主网卡上不生效，主网卡会随着CVM一同销毁。</p><p>默认值：<code>false</code></p>
     */
    public $DeleteWithInstance;

    /**
     * @param string $InterfaceType <p>表示是主网卡还是辅助网卡。注意：枚举值要全部大写；<strong>NetworkInterfaces数组中必须要有PRIMARY</strong>，且PRIMARY只能存在一个，SECONDARY可以存在多个。</p><p>枚举值：</p><ul><li>PRIMARY： 主网卡</li><li>SECONDARY： 辅助网卡</li></ul>
     * @param string $VpcId <p>私有网络ID，形如<code>vpc-xxx</code>。有效的VpcId可通过登录<a href="https://console.cloud.tencent.com/vpc/vpc?rid=1">控制台</a>查询；也可以调用接口 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a> ，从接口返回中的<code>VpcId</code>字段获取。若在创建子机时VpcId与SubnetId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
     * @param string $SubnetId <p>私有网络子网ID，形如<code>subnet-xxx</code>。有效的私有网络子网ID可通过登录<a href="https://console.cloud.tencent.com/vpc/subnet?rid=1">控制台</a>查询；也可以调用接口  <a href="https://cloud.tencent.com/document/product/215/15784">DescribeSubnets</a> ，从接口返回中的<code>SubnetId</code>字段获取。若在创建子机时SubnetId与VpcId同时传入<code>DEFAULT</code>，则强制使用默认vpc网络。</p>
     * @param integer $PrivateIpv4AddressCount <p>此字段是必填字段，表示每张网卡自动分配私有网卡IP个数。注意：不允许客户同时指定ip且动态分配ip。</p><p>取值范围：[1, 50]</p>
     * @param string $NetworkInterfaceId <p>指定存量的网卡ID用于绑定。只对辅助网卡生效，主网卡的生成采用既有流程。注：客户手动指定已有弹性网卡时，相关接口InstanceCount必须为1。主网卡不支持指定。</p>
     * @param array $SecurityGroupIds <p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的 <code>SecurityGroupId</code> 字段来获取。若不指定该参数，则绑定指定项目下的默认安全组，如默认安全组不存在则将自动创建。</p><p>每个用户在每个地域每个项目下最多可设置50个安全组。</p>
     * @param boolean $DeleteWithInstance <p>是否随CVM删除绑定的弹性网卡，参数只对辅助网卡生效。默认保留辅助网卡兼容当前线上行为。该参数放置在主网卡上不生效，主网卡会随着CVM一同销毁。</p><p>默认值：<code>false</code></p>
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
        if (array_key_exists("InterfaceType",$param) and $param["InterfaceType"] !== null) {
            $this->InterfaceType = $param["InterfaceType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PrivateIpv4AddressCount",$param) and $param["PrivateIpv4AddressCount"] !== null) {
            $this->PrivateIpv4AddressCount = $param["PrivateIpv4AddressCount"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }
    }
}
