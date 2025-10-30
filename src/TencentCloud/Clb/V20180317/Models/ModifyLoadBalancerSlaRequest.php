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
 * ModifyLoadBalancerSla请求参数结构体
 *
 * @method array getLoadBalancerSla() 获取负载均衡实例信息。
 * @method void setLoadBalancerSla(array $LoadBalancerSla) 设置负载均衡实例信息。
 * @method boolean getForce() 获取是否强制升级，默认否。
 * @method void setForce(boolean $Force) 设置是否强制升级，默认否。
 */
class ModifyLoadBalancerSlaRequest extends AbstractModel
{
    /**
     * @var array 负载均衡实例信息。
     */
    public $LoadBalancerSla;

    /**
     * @var boolean 是否强制升级，默认否。
     */
    public $Force;

    /**
     * @param array $LoadBalancerSla 负载均衡实例信息。
     * @param boolean $Force 是否强制升级，默认否。
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
        if (array_key_exists("LoadBalancerSla",$param) and $param["LoadBalancerSla"] !== null) {
            $this->LoadBalancerSla = [];
            foreach ($param["LoadBalancerSla"] as $key => $value){
                $obj = new SlaUpdateParam();
                $obj->deserialize($value);
                array_push($this->LoadBalancerSla, $obj);
            }
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
