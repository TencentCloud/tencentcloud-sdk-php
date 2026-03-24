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
 * BatchModifyTargetWeight请求参数结构体
 *
 * @method string getLoadBalancerId() 获取<p>负载均衡实例 ID。</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡实例 ID。</p>
 * @method array getModifyList() 获取<p>要批量修改权重的列表。ModifyList数组最多100个元素，ModifyList[i].Targets最多50个，全部Targets累加不超过500。</p>
 * @method void setModifyList(array $ModifyList) 设置<p>要批量修改权重的列表。ModifyList数组最多100个元素，ModifyList[i].Targets最多50个，全部Targets累加不超过500。</p>
 */
class BatchModifyTargetWeightRequest extends AbstractModel
{
    /**
     * @var string <p>负载均衡实例 ID。</p>
     */
    public $LoadBalancerId;

    /**
     * @var array <p>要批量修改权重的列表。ModifyList数组最多100个元素，ModifyList[i].Targets最多50个，全部Targets累加不超过500。</p>
     */
    public $ModifyList;

    /**
     * @param string $LoadBalancerId <p>负载均衡实例 ID。</p>
     * @param array $ModifyList <p>要批量修改权重的列表。ModifyList数组最多100个元素，ModifyList[i].Targets最多50个，全部Targets累加不超过500。</p>
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

        if (array_key_exists("ModifyList",$param) and $param["ModifyList"] !== null) {
            $this->ModifyList = [];
            foreach ($param["ModifyList"] as $key => $value){
                $obj = new RsWeightRule();
                $obj->deserialize($value);
                array_push($this->ModifyList, $obj);
            }
        }
    }
}
