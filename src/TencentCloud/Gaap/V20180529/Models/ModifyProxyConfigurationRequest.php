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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProxyConfiguration请求参数结构体
 *
 * @method string getInstanceId() 获取<p>（旧参数，请切换到ProxyId）通道的实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>（旧参数，请切换到ProxyId）通道的实例ID。</p>
 * @method integer getBandwidth() 获取<p>需要调整到的目标带宽，单位：Mbps。Bandwidth与Concurrent必须至少设置一个。取值范围根据DescribeAccessRegionsByDestRegion接口获取得到</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>需要调整到的目标带宽，单位：Mbps。Bandwidth与Concurrent必须至少设置一个。取值范围根据DescribeAccessRegionsByDestRegion接口获取得到</p>
 * @method integer getConcurrent() 获取<p>需要调整到的目标并发值，单位：万。Bandwidth与Concurrent必须至少设置一个。取值范围根据DescribeAccessRegionsByDestRegion接口获取得到</p>
 * @method void setConcurrent(integer $Concurrent) 设置<p>需要调整到的目标并发值，单位：万。Bandwidth与Concurrent必须至少设置一个。取值范围根据DescribeAccessRegionsByDestRegion接口获取得到</p>
 * @method string getClientToken() 获取<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。更多详细信息请参阅：如何保证幂等性。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。更多详细信息请参阅：如何保证幂等性。</p>
 * @method string getProxyId() 获取<p>（新参数）通道的实例ID。</p>
 * @method void setProxyId(string $ProxyId) 设置<p>（新参数）通道的实例ID。</p>
 * @method integer getBillingType() 获取<p>计费方式 (0:按带宽计费，1:按流量计费 默认按带宽计费）</p>
 * @method void setBillingType(integer $BillingType) 设置<p>计费方式 (0:按带宽计费，1:按流量计费 默认按带宽计费）</p>
 */
class ModifyProxyConfigurationRequest extends AbstractModel
{
    /**
     * @var string <p>（旧参数，请切换到ProxyId）通道的实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>需要调整到的目标带宽，单位：Mbps。Bandwidth与Concurrent必须至少设置一个。取值范围根据DescribeAccessRegionsByDestRegion接口获取得到</p>
     */
    public $Bandwidth;

    /**
     * @var integer <p>需要调整到的目标并发值，单位：万。Bandwidth与Concurrent必须至少设置一个。取值范围根据DescribeAccessRegionsByDestRegion接口获取得到</p>
     */
    public $Concurrent;

    /**
     * @var string <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。更多详细信息请参阅：如何保证幂等性。</p>
     */
    public $ClientToken;

    /**
     * @var string <p>（新参数）通道的实例ID。</p>
     */
    public $ProxyId;

    /**
     * @var integer <p>计费方式 (0:按带宽计费，1:按流量计费 默认按带宽计费）</p>
     */
    public $BillingType;

    /**
     * @param string $InstanceId <p>（旧参数，请切换到ProxyId）通道的实例ID。</p>
     * @param integer $Bandwidth <p>需要调整到的目标带宽，单位：Mbps。Bandwidth与Concurrent必须至少设置一个。取值范围根据DescribeAccessRegionsByDestRegion接口获取得到</p>
     * @param integer $Concurrent <p>需要调整到的目标并发值，单位：万。Bandwidth与Concurrent必须至少设置一个。取值范围根据DescribeAccessRegionsByDestRegion接口获取得到</p>
     * @param string $ClientToken <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。更多详细信息请参阅：如何保证幂等性。</p>
     * @param string $ProxyId <p>（新参数）通道的实例ID。</p>
     * @param integer $BillingType <p>计费方式 (0:按带宽计费，1:按流量计费 默认按带宽计费）</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }
    }
}
