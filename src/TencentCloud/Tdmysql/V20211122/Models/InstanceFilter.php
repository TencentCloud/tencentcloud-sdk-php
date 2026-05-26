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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例列表过滤条件
 *
 * @method string getName() 获取过滤key，支持InstanceId、VpcId、SubnetId、Vip、Vport、Status、InstanceName、TagKey
 * @method void setName(string $Name) 设置过滤key，支持InstanceId、VpcId、SubnetId、Vip、Vport、Status、InstanceName、TagKey
 * @method array getValues() 获取过滤value
 * @method void setValues(array $Values) 设置过滤value
 */
class InstanceFilter extends AbstractModel
{
    /**
     * @var string 过滤key，支持InstanceId、VpcId、SubnetId、Vip、Vport、Status、InstanceName、TagKey
     */
    public $Name;

    /**
     * @var array 过滤value
     */
    public $Values;

    /**
     * @param string $Name 过滤key，支持InstanceId、VpcId、SubnetId、Vip、Vport、Status、InstanceName、TagKey
     * @param array $Values 过滤value
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
