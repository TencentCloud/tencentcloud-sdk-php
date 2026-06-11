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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主力地址池
 *
 * @method array getAddressPools() 获取<p>集合中的地址池id与权重，数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressPools(array $AddressPools) 设置<p>集合中的地址池id与权重，数组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMainAddressPoolId() 获取<p>地址池集合id</p>
 * @method void setMainAddressPoolId(integer $MainAddressPoolId) 设置<p>地址池集合id</p>
 * @method integer getMinSurviveNum() 获取<p>切换阈值，不能大于主力集合内地址总数</p>
 * @method void setMinSurviveNum(integer $MinSurviveNum) 设置<p>切换阈值，不能大于主力集合内地址总数</p>
 * @method string getTrafficStrategy() 获取<p>切换策略:ALL解析所有地址；WEIGHT：负载均衡。当为ALL时，解析地址的权重值为1；当为WEIGHT时；权重为地址池权重*地址权重</p>
 * @method void setTrafficStrategy(string $TrafficStrategy) 设置<p>切换策略:ALL解析所有地址；WEIGHT：负载均衡。当为ALL时，解析地址的权重值为1；当为WEIGHT时；权重为地址池权重*地址权重</p>
 */
class MainAddressPool extends AbstractModel
{
    /**
     * @var array <p>集合中的地址池id与权重，数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressPools;

    /**
     * @var integer <p>地址池集合id</p>
     */
    public $MainAddressPoolId;

    /**
     * @var integer <p>切换阈值，不能大于主力集合内地址总数</p>
     */
    public $MinSurviveNum;

    /**
     * @var string <p>切换策略:ALL解析所有地址；WEIGHT：负载均衡。当为ALL时，解析地址的权重值为1；当为WEIGHT时；权重为地址池权重*地址权重</p>
     */
    public $TrafficStrategy;

    /**
     * @param array $AddressPools <p>集合中的地址池id与权重，数组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MainAddressPoolId <p>地址池集合id</p>
     * @param integer $MinSurviveNum <p>切换阈值，不能大于主力集合内地址总数</p>
     * @param string $TrafficStrategy <p>切换策略:ALL解析所有地址；WEIGHT：负载均衡。当为ALL时，解析地址的权重值为1；当为WEIGHT时；权重为地址池权重*地址权重</p>
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
        if (array_key_exists("AddressPools",$param) and $param["AddressPools"] !== null) {
            $this->AddressPools = [];
            foreach ($param["AddressPools"] as $key => $value){
                $obj = new MainPoolWeight();
                $obj->deserialize($value);
                array_push($this->AddressPools, $obj);
            }
        }

        if (array_key_exists("MainAddressPoolId",$param) and $param["MainAddressPoolId"] !== null) {
            $this->MainAddressPoolId = $param["MainAddressPoolId"];
        }

        if (array_key_exists("MinSurviveNum",$param) and $param["MinSurviveNum"] !== null) {
            $this->MinSurviveNum = $param["MinSurviveNum"];
        }

        if (array_key_exists("TrafficStrategy",$param) and $param["TrafficStrategy"] !== null) {
            $this->TrafficStrategy = $param["TrafficStrategy"];
        }
    }
}
