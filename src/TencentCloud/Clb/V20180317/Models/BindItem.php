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
 * 配置绑定关系
 *
 * @method string getLoadBalancerId() 获取配置绑定的CLB ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置配置绑定的CLB ID
 * @method string getListenerId() 获取配置绑定的监听器ID
 * @method void setListenerId(string $ListenerId) 设置配置绑定的监听器ID
 * @method string getDomain() 获取配置绑定的域名
 * @method void setDomain(string $Domain) 设置配置绑定的域名
 * @method string getLocationId() 获取配置绑定的规则
 * @method void setLocationId(string $LocationId) 设置配置绑定的规则
 */
class BindItem extends AbstractModel
{
    /**
     * @var string 配置绑定的CLB ID
     */
    public $LoadBalancerId;

    /**
     * @var string 配置绑定的监听器ID
     */
    public $ListenerId;

    /**
     * @var string 配置绑定的域名
     */
    public $Domain;

    /**
     * @var string 配置绑定的规则
     */
    public $LocationId;

    /**
     * @param string $LoadBalancerId 配置绑定的CLB ID
     * @param string $ListenerId 配置绑定的监听器ID
     * @param string $Domain 配置绑定的域名
     * @param string $LocationId 配置绑定的规则
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }
    }
}
