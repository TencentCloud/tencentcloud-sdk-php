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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB查询对应绑定的WAF状态的结果参数
 *
 * @method LoadBalancer getLoadBalancer() 获取WAF绑定的监听器实例
 * @method void setLoadBalancer(LoadBalancer $LoadBalancer) 设置WAF绑定的监听器实例
 * @method string getDomain() 获取WAF绑定的域名
 * @method void setDomain(string $Domain) 设置WAF绑定的域名
 * @method string getDomainId() 获取WAF绑定的实例ID
 * @method void setDomainId(string $DomainId) 设置WAF绑定的实例ID
 * @method integer getStatus() 获取是否有绑定WAF，1：绑定了WAF，0：没有绑定WAF
 * @method void setStatus(integer $Status) 设置是否有绑定WAF，1：绑定了WAF，0：没有绑定WAF
 * @method integer getFlowMode() 获取绑定了WAF的情况下，WAF流量模式，1：清洗模式，0：镜像模式（默认）
 * @method void setFlowMode(integer $FlowMode) 设置绑定了WAF的情况下，WAF流量模式，1：清洗模式，0：镜像模式（默认）
 */
class ClbHostResult extends AbstractModel
{
    /**
     * @var LoadBalancer WAF绑定的监听器实例
     */
    public $LoadBalancer;

    /**
     * @var string WAF绑定的域名
     */
    public $Domain;

    /**
     * @var string WAF绑定的实例ID
     */
    public $DomainId;

    /**
     * @var integer 是否有绑定WAF，1：绑定了WAF，0：没有绑定WAF
     */
    public $Status;

    /**
     * @var integer 绑定了WAF的情况下，WAF流量模式，1：清洗模式，0：镜像模式（默认）
     */
    public $FlowMode;

    /**
     * @param LoadBalancer $LoadBalancer WAF绑定的监听器实例
     * @param string $Domain WAF绑定的域名
     * @param string $DomainId WAF绑定的实例ID
     * @param integer $Status 是否有绑定WAF，1：绑定了WAF，0：没有绑定WAF
     * @param integer $FlowMode 绑定了WAF的情况下，WAF流量模式，1：清洗模式，0：镜像模式（默认）
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
        if (array_key_exists("LoadBalancer",$param) and $param["LoadBalancer"] !== null) {
            $this->LoadBalancer = new LoadBalancer();
            $this->LoadBalancer->deserialize($param["LoadBalancer"]);
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FlowMode",$param) and $param["FlowMode"] !== null) {
            $this->FlowMode = $param["FlowMode"];
        }
    }
}
