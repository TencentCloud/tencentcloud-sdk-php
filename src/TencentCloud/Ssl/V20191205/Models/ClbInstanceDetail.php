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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * clb实例详情
 *
 * @method string getLoadBalancerId() 获取CLB实例ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置CLB实例ID
 * @method string getLoadBalancerName() 获取CLB实例名称
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置CLB实例名称
 * @method array getListeners() 获取CLB监听器列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListeners(array $Listeners) 设置CLB监听器列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClbInstanceDetail extends AbstractModel
{
    /**
     * @var string CLB实例ID
     */
    public $LoadBalancerId;

    /**
     * @var string CLB实例名称
     */
    public $LoadBalancerName;

    /**
     * @var array CLB监听器列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Listeners;

    /**
     * @param string $LoadBalancerId CLB实例ID
     * @param string $LoadBalancerName CLB实例名称
     * @param array $Listeners CLB监听器列表
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Listeners",$param) and $param["Listeners"] !== null) {
            $this->Listeners = [];
            foreach ($param["Listeners"] as $key => $value){
                $obj = new ClbListener();
                $obj->deserialize($value);
                array_push($this->Listeners, $obj);
            }
        }
    }
}
