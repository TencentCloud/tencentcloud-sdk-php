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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableWanService请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getLoadBalancerId() 获取负载均衡ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡ID。
 * @method array getNodeList() 获取节点及监听端口信息。
 * @method void setNodeList(array $NodeList) 设置节点及监听端口信息。
 */
class EnableWanServiceRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 负载均衡ID。
     */
    public $LoadBalancerId;

    /**
     * @var array 节点及监听端口信息。
     */
    public $NodeList;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $LoadBalancerId 负载均衡ID。
     * @param array $NodeList 节点及监听端口信息。
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

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = [];
            foreach ($param["NodeList"] as $key => $value){
                $obj = new WanServiceNodeList();
                $obj->deserialize($value);
                array_push($this->NodeList, $obj);
            }
        }
    }
}
