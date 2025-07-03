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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoadBalancerAttributes请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡的唯一ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡的唯一ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method string getLoadBalancerName() 获取负载均衡实例名称，规则：1-60 个英文、汉字、数字、连接线“-”或下划线“_”。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例名称，规则：1-60 个英文、汉字、数字、连接线“-”或下划线“_”。
 * @method TargetRegionInfo getTargetRegionInfo() 获取设置负载均衡跨地域绑定1.0的后端服务信息
 * @method void setTargetRegionInfo(TargetRegionInfo $TargetRegionInfo) 设置设置负载均衡跨地域绑定1.0的后端服务信息
 * @method InternetAccessible getInternetChargeInfo() 获取网络计费相关参数
 * @method void setInternetChargeInfo(InternetAccessible $InternetChargeInfo) 设置网络计费相关参数
 * @method boolean getLoadBalancerPassToTarget() 获取Target是否放通来自CLB的流量。
开启放通（true）：只验证CLB上的安全组；
不开启放通（false）：需同时验证CLB和后端实例上的安全组。
不填则不修改。
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) 设置Target是否放通来自CLB的流量。
开启放通（true）：只验证CLB上的安全组；
不开启放通（false）：需同时验证CLB和后端实例上的安全组。
不填则不修改。
 * @method boolean getSnatPro() 获取是否开启跨地域绑定2.0功能。不填则不修改。
 * @method void setSnatPro(boolean $SnatPro) 设置是否开启跨地域绑定2.0功能。不填则不修改。
 * @method boolean getDeleteProtect() 获取是否开启删除保护，不填则不修改。
 * @method void setDeleteProtect(boolean $DeleteProtect) 设置是否开启删除保护，不填则不修改。
 * @method boolean getModifyClassicDomain() 获取将负载均衡二级域名由mycloud.com改为tencentclb.com，子域名也会变换，修改后mycloud.com域名将失效。不填则不修改。
 * @method void setModifyClassicDomain(boolean $ModifyClassicDomain) 设置将负载均衡二级域名由mycloud.com改为tencentclb.com，子域名也会变换，修改后mycloud.com域名将失效。不填则不修改。
 */
class ModifyLoadBalancerAttributesRequest extends AbstractModel
{
    /**
     * @var string 负载均衡的唯一ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡实例名称，规则：1-60 个英文、汉字、数字、连接线“-”或下划线“_”。
     */
    public $LoadBalancerName;

    /**
     * @var TargetRegionInfo 设置负载均衡跨地域绑定1.0的后端服务信息
     */
    public $TargetRegionInfo;

    /**
     * @var InternetAccessible 网络计费相关参数
     */
    public $InternetChargeInfo;

    /**
     * @var boolean Target是否放通来自CLB的流量。
开启放通（true）：只验证CLB上的安全组；
不开启放通（false）：需同时验证CLB和后端实例上的安全组。
不填则不修改。
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var boolean 是否开启跨地域绑定2.0功能。不填则不修改。
     */
    public $SnatPro;

    /**
     * @var boolean 是否开启删除保护，不填则不修改。
     */
    public $DeleteProtect;

    /**
     * @var boolean 将负载均衡二级域名由mycloud.com改为tencentclb.com，子域名也会变换，修改后mycloud.com域名将失效。不填则不修改。
     */
    public $ModifyClassicDomain;

    /**
     * @param string $LoadBalancerId 负载均衡的唯一ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     * @param string $LoadBalancerName 负载均衡实例名称，规则：1-60 个英文、汉字、数字、连接线“-”或下划线“_”。
     * @param TargetRegionInfo $TargetRegionInfo 设置负载均衡跨地域绑定1.0的后端服务信息
     * @param InternetAccessible $InternetChargeInfo 网络计费相关参数
     * @param boolean $LoadBalancerPassToTarget Target是否放通来自CLB的流量。
开启放通（true）：只验证CLB上的安全组；
不开启放通（false）：需同时验证CLB和后端实例上的安全组。
不填则不修改。
     * @param boolean $SnatPro 是否开启跨地域绑定2.0功能。不填则不修改。
     * @param boolean $DeleteProtect 是否开启删除保护，不填则不修改。
     * @param boolean $ModifyClassicDomain 将负载均衡二级域名由mycloud.com改为tencentclb.com，子域名也会变换，修改后mycloud.com域名将失效。不填则不修改。
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

        if (array_key_exists("SnatPro",$param) and $param["SnatPro"] !== null) {
            $this->SnatPro = $param["SnatPro"];
        }

        if (array_key_exists("DeleteProtect",$param) and $param["DeleteProtect"] !== null) {
            $this->DeleteProtect = $param["DeleteProtect"];
        }

        if (array_key_exists("ModifyClassicDomain",$param) and $param["ModifyClassicDomain"] !== null) {
            $this->ModifyClassicDomain = $param["ModifyClassicDomain"];
        }
    }
}
