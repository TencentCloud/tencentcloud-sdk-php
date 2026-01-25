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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoadBalancerAttributes请求参数结构体
 *
 * @method string getLoadBalancerId() 获取<p>负载均衡的唯一ID，可以通过 <a href="https://cloud.tencent.com/document/product/214/30685">DescribeLoadBalancers</a> 接口获取。</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡的唯一ID，可以通过 <a href="https://cloud.tencent.com/document/product/214/30685">DescribeLoadBalancers</a> 接口获取。</p>
 * @method string getLoadBalancerName() 获取<p>负载均衡实例名称，规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置<p>负载均衡实例名称，规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
 * @method TargetRegionInfo getTargetRegionInfo() 获取<p>设置负载均衡跨地域绑定1.0的后端服务信息</p>
 * @method void setTargetRegionInfo(TargetRegionInfo $TargetRegionInfo) 设置<p>设置负载均衡跨地域绑定1.0的后端服务信息</p>
 * @method InternetAccessible getInternetChargeInfo() 获取<p>网络计费相关参数</p>
 * @method void setInternetChargeInfo(InternetAccessible $InternetChargeInfo) 设置<p>网络计费相关参数</p>
 * @method boolean getLoadBalancerPassToTarget() 获取<p>Target是否放通来自CLB的流量。<br>开启放通（true）：只验证CLB上的安全组；<br>不开启放通（false）：需同时验证CLB和后端实例上的安全组。<br>不填则不修改。</p>
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) 设置<p>Target是否放通来自CLB的流量。<br>开启放通（true）：只验证CLB上的安全组；<br>不开启放通（false）：需同时验证CLB和后端实例上的安全组。<br>不填则不修改。</p>
 * @method integer getSwitchFlag() 获取<p>不同计费模式之间的切换：0表示不切换，1表示预付费和后付费切换，2表示后付费之间切换。默认值：0</p>
 * @method void setSwitchFlag(integer $SwitchFlag) 设置<p>不同计费模式之间的切换：0表示不切换，1表示预付费和后付费切换，2表示后付费之间切换。默认值：0</p>
 * @method boolean getSnatPro() 获取<p>是否开启跨地域绑定2.0功能。不填则不修改。</p>
 * @method void setSnatPro(boolean $SnatPro) 设置<p>是否开启跨地域绑定2.0功能。不填则不修改。</p>
 * @method boolean getDeleteProtect() 获取<p>是否开启删除保护，不填则不修改。</p>
 * @method void setDeleteProtect(boolean $DeleteProtect) 设置<p>是否开启删除保护，不填则不修改。</p>
 * @method boolean getModifyClassicDomain() 获取<p>将负载均衡二级域名由mycloud.com改为tencentclb.com，子域名也会变换，修改后mycloud.com域名将失效。不填则不修改。</p>
 * @method void setModifyClassicDomain(boolean $ModifyClassicDomain) 设置<p>将负载均衡二级域名由mycloud.com改为tencentclb.com，子域名也会变换，修改后mycloud.com域名将失效。不填则不修改。</p>
 * @method string getAssociateEndpoint() 获取<p>关联的终端节点Id，可通过<a href="https://cloud.tencent.com/document/product/215/54679">DescribeVpcEndPoint</a>接口查询。传空字符串代表解除关联。</p>
 * @method void setAssociateEndpoint(string $AssociateEndpoint) 设置<p>关联的终端节点Id，可通过<a href="https://cloud.tencent.com/document/product/215/54679">DescribeVpcEndPoint</a>接口查询。传空字符串代表解除关联。</p>
 */
class ModifyLoadBalancerAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>负载均衡的唯一ID，可以通过 <a href="https://cloud.tencent.com/document/product/214/30685">DescribeLoadBalancers</a> 接口获取。</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>负载均衡实例名称，规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
     */
    public $LoadBalancerName;

    /**
     * @var TargetRegionInfo <p>设置负载均衡跨地域绑定1.0的后端服务信息</p>
     */
    public $TargetRegionInfo;

    /**
     * @var InternetAccessible <p>网络计费相关参数</p>
     */
    public $InternetChargeInfo;

    /**
     * @var boolean <p>Target是否放通来自CLB的流量。<br>开启放通（true）：只验证CLB上的安全组；<br>不开启放通（false）：需同时验证CLB和后端实例上的安全组。<br>不填则不修改。</p>
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var integer <p>不同计费模式之间的切换：0表示不切换，1表示预付费和后付费切换，2表示后付费之间切换。默认值：0</p>
     */
    public $SwitchFlag;

    /**
     * @var boolean <p>是否开启跨地域绑定2.0功能。不填则不修改。</p>
     */
    public $SnatPro;

    /**
     * @var boolean <p>是否开启删除保护，不填则不修改。</p>
     */
    public $DeleteProtect;

    /**
     * @var boolean <p>将负载均衡二级域名由mycloud.com改为tencentclb.com，子域名也会变换，修改后mycloud.com域名将失效。不填则不修改。</p>
     */
    public $ModifyClassicDomain;

    /**
     * @var string <p>关联的终端节点Id，可通过<a href="https://cloud.tencent.com/document/product/215/54679">DescribeVpcEndPoint</a>接口查询。传空字符串代表解除关联。</p>
     */
    public $AssociateEndpoint;

    /**
     * @param string $LoadBalancerId <p>负载均衡的唯一ID，可以通过 <a href="https://cloud.tencent.com/document/product/214/30685">DescribeLoadBalancers</a> 接口获取。</p>
     * @param string $LoadBalancerName <p>负载均衡实例名称，规则：1-80 个英文字母、汉字等国际通用语言字符，数字，连接线“-”、下划线“_”等常见字符（禁止Unicode补充字符，如emoji表情、生僻汉字等）。</p>
     * @param TargetRegionInfo $TargetRegionInfo <p>设置负载均衡跨地域绑定1.0的后端服务信息</p>
     * @param InternetAccessible $InternetChargeInfo <p>网络计费相关参数</p>
     * @param boolean $LoadBalancerPassToTarget <p>Target是否放通来自CLB的流量。<br>开启放通（true）：只验证CLB上的安全组；<br>不开启放通（false）：需同时验证CLB和后端实例上的安全组。<br>不填则不修改。</p>
     * @param integer $SwitchFlag <p>不同计费模式之间的切换：0表示不切换，1表示预付费和后付费切换，2表示后付费之间切换。默认值：0</p>
     * @param boolean $SnatPro <p>是否开启跨地域绑定2.0功能。不填则不修改。</p>
     * @param boolean $DeleteProtect <p>是否开启删除保护，不填则不修改。</p>
     * @param boolean $ModifyClassicDomain <p>将负载均衡二级域名由mycloud.com改为tencentclb.com，子域名也会变换，修改后mycloud.com域名将失效。不填则不修改。</p>
     * @param string $AssociateEndpoint <p>关联的终端节点Id，可通过<a href="https://cloud.tencent.com/document/product/215/54679">DescribeVpcEndPoint</a>接口查询。传空字符串代表解除关联。</p>
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("TargetRegionInfo",$param) and $param["TargetRegionInfo"] !== null) {
            $this->TargetRegionInfo = new TargetRegionInfo();
            $this->TargetRegionInfo->deserialize($param["TargetRegionInfo"]);
        }

        if (array_key_exists("InternetChargeInfo",$param) and $param["InternetChargeInfo"] !== null) {
            $this->InternetChargeInfo = new InternetAccessible();
            $this->InternetChargeInfo->deserialize($param["InternetChargeInfo"]);
        }

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }

        if (array_key_exists("SwitchFlag",$param) and $param["SwitchFlag"] !== null) {
            $this->SwitchFlag = $param["SwitchFlag"];
        }

        if (array_key_exists("SnatPro",$param) and $param["SnatPro"] !== null) {
            $this->SnatPro = $param["SnatPro"];
        }

        if (array_key_exists("DeleteProtect",$param) and $param["DeleteProtect"] !== null) {
            $this->DeleteProtect = $param["DeleteProtect"];
        }

        if (array_key_exists("ModifyClassicDomain",$param) and $param["ModifyClassicDomain"] !== null) {
            $this->ModifyClassicDomain = $param["ModifyClassicDomain"];
        }

        if (array_key_exists("AssociateEndpoint",$param) and $param["AssociateEndpoint"] !== null) {
            $this->AssociateEndpoint = $param["AssociateEndpoint"];
        }
    }
}
