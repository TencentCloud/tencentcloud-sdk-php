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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用型负载均衡器
 *
 * @method string getLoadBalancerId() 获取负载均衡器ID。作为入参时，该参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡器ID。作为入参时，该参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method string getListenerId() 获取负载均衡监听器 ID。作为入参时，该参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器 ID。作为入参时，该参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method array getTargetAttributes() 获取目标规则属性列表。作为入参时，该参数必填。
 * @method void setTargetAttributes(array $TargetAttributes) 设置目标规则属性列表。作为入参时，该参数必填。
 * @method string getLocationId() 获取转发规则ID，注意：针对七层监听器此参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method void setLocationId(string $LocationId) 设置转发规则ID，注意：针对七层监听器此参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
 * @method string getRegion() 获取负载均衡实例所属地域，默认取AS服务所在地域。格式与公共参数Region相同，如："ap-guangzhou"。
 * @method void setRegion(string $Region) 设置负载均衡实例所属地域，默认取AS服务所在地域。格式与公共参数Region相同，如："ap-guangzhou"。
 */
class ForwardLoadBalancer extends AbstractModel
{
    /**
     * @var string 负载均衡器ID。作为入参时，该参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡监听器 ID。作为入参时，该参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     */
    public $ListenerId;

    /**
     * @var array 目标规则属性列表。作为入参时，该参数必填。
     */
    public $TargetAttributes;

    /**
     * @var string 转发规则ID，注意：针对七层监听器此参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     */
    public $LocationId;

    /**
     * @var string 负载均衡实例所属地域，默认取AS服务所在地域。格式与公共参数Region相同，如："ap-guangzhou"。
     */
    public $Region;

    /**
     * @param string $LoadBalancerId 负载均衡器ID。作为入参时，该参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     * @param string $ListenerId 负载均衡监听器 ID。作为入参时，该参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     * @param array $TargetAttributes 目标规则属性列表。作为入参时，该参数必填。
     * @param string $LocationId 转发规则ID，注意：针对七层监听器此参数必填。可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/214/30685) 接口获取。
     * @param string $Region 负载均衡实例所属地域，默认取AS服务所在地域。格式与公共参数Region相同，如："ap-guangzhou"。
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

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("TargetAttributes",$param) and $param["TargetAttributes"] !== null) {
            $this->TargetAttributes = [];
            foreach ($param["TargetAttributes"] as $key => $value){
                $obj = new TargetAttribute();
                $obj->deserialize($value);
                array_push($this->TargetAttributes, $obj);
            }
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
