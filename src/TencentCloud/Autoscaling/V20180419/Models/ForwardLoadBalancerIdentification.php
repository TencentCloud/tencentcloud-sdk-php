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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用型负载均衡器标识信息
 *
 * @method string getLoadBalancerId() 获取<p>负载均衡器ID</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡器ID</p>
 * @method string getListenerId() 获取<p>应用型负载均衡监听器 ID</p>
 * @method void setListenerId(string $ListenerId) 设置<p>应用型负载均衡监听器 ID</p>
 * @method string getLocationId() 获取<p>转发规则ID，注意：针对七层监听器此参数必填</p>
 * @method void setLocationId(string $LocationId) 设置<p>转发规则ID，注意：针对七层监听器此参数必填</p>
 * @method array getPortList() 获取<p>监听器或转发路径需解绑的端口号列表。</p><p>取值范围：[1, 65535]</p><p>不传递该参数时，默认解绑指定监听器或转发路径关联的所有端口。</p>
 * @method void setPortList(array $PortList) 设置<p>监听器或转发路径需解绑的端口号列表。</p><p>取值范围：[1, 65535]</p><p>不传递该参数时，默认解绑指定监听器或转发路径关联的所有端口。</p>
 */
class ForwardLoadBalancerIdentification extends AbstractModel
{
    /**
     * @var string <p>负载均衡器ID</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>应用型负载均衡监听器 ID</p>
     */
    public $ListenerId;

    /**
     * @var string <p>转发规则ID，注意：针对七层监听器此参数必填</p>
     */
    public $LocationId;

    /**
     * @var array <p>监听器或转发路径需解绑的端口号列表。</p><p>取值范围：[1, 65535]</p><p>不传递该参数时，默认解绑指定监听器或转发路径关联的所有端口。</p>
     */
    public $PortList;

    /**
     * @param string $LoadBalancerId <p>负载均衡器ID</p>
     * @param string $ListenerId <p>应用型负载均衡监听器 ID</p>
     * @param string $LocationId <p>转发规则ID，注意：针对七层监听器此参数必填</p>
     * @param array $PortList <p>监听器或转发路径需解绑的端口号列表。</p><p>取值范围：[1, 65535]</p><p>不传递该参数时，默认解绑指定监听器或转发路径关联的所有端口。</p>
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

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("PortList",$param) and $param["PortList"] !== null) {
            $this->PortList = $param["PortList"];
        }
    }
}
