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
 * RegisterFunctionTargets请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID。
 * @method string getListenerId() 获取负载均衡监听器 ID。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器 ID。
 * @method array getFunctionTargets() 获取待绑定的云函数列表。
 * @method void setFunctionTargets(array $FunctionTargets) 设置待绑定的云函数列表。
 * @method string getLocationId() 获取目标转发规则的 ID，当将云函数绑定到七层转发规则时，必须输入此参数或 Domain+Url 参数。
 * @method void setLocationId(string $LocationId) 设置目标转发规则的 ID，当将云函数绑定到七层转发规则时，必须输入此参数或 Domain+Url 参数。
 * @method string getDomain() 获取目标转发规则的域名，若已经输入 LocationId 参数，则本参数不生效。
 * @method void setDomain(string $Domain) 设置目标转发规则的域名，若已经输入 LocationId 参数，则本参数不生效。
 * @method string getUrl() 获取目标转发规则的 URL，若已经输入 LocationId 参数，则本参数不生效。
 * @method void setUrl(string $Url) 设置目标转发规则的 URL，若已经输入 LocationId 参数，则本参数不生效。
 */
class RegisterFunctionTargetsRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡监听器 ID。
     */
    public $ListenerId;

    /**
     * @var array 待绑定的云函数列表。
     */
    public $FunctionTargets;

    /**
     * @var string 目标转发规则的 ID，当将云函数绑定到七层转发规则时，必须输入此参数或 Domain+Url 参数。
     */
    public $LocationId;

    /**
     * @var string 目标转发规则的域名，若已经输入 LocationId 参数，则本参数不生效。
     */
    public $Domain;

    /**
     * @var string 目标转发规则的 URL，若已经输入 LocationId 参数，则本参数不生效。
     */
    public $Url;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID。
     * @param string $ListenerId 负载均衡监听器 ID。
     * @param array $FunctionTargets 待绑定的云函数列表。
     * @param string $LocationId 目标转发规则的 ID，当将云函数绑定到七层转发规则时，必须输入此参数或 Domain+Url 参数。
     * @param string $Domain 目标转发规则的域名，若已经输入 LocationId 参数，则本参数不生效。
     * @param string $Url 目标转发规则的 URL，若已经输入 LocationId 参数，则本参数不生效。
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

        if (array_key_exists("FunctionTargets",$param) and $param["FunctionTargets"] !== null) {
            $this->FunctionTargets = [];
            foreach ($param["FunctionTargets"] as $key => $value){
                $obj = new FunctionTarget();
                $obj->deserialize($value);
                array_push($this->FunctionTargets, $obj);
            }
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
