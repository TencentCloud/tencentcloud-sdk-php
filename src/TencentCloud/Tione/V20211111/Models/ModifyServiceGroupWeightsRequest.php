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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyServiceGroupWeights请求参数结构体
 *
 * @method string getServiceGroupId() 获取服务组id
 * @method void setServiceGroupId(string $ServiceGroupId) 设置服务组id
 * @method array getWeights() 获取权重设置
 * @method void setWeights(array $Weights) 设置权重设置
 */
class ModifyServiceGroupWeightsRequest extends AbstractModel
{
    /**
     * @var string 服务组id
     */
    public $ServiceGroupId;

    /**
     * @var array 权重设置
     */
    public $Weights;

    /**
     * @param string $ServiceGroupId 服务组id
     * @param array $Weights 权重设置
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
        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("Weights",$param) and $param["Weights"] !== null) {
            $this->Weights = [];
            foreach ($param["Weights"] as $key => $value){
                $obj = new WeightEntry();
                $obj->deserialize($value);
                array_push($this->Weights, $obj);
            }
        }
    }
}
