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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子网资源分配策略，精确控制各子网之间的资源分配比例。
 *
 * @method array getAllocations() 获取<p>子网分配列表</p>
 * @method void setAllocations(array $Allocations) 设置<p>子网分配列表</p>
 */
class SubnetAllocationPolicy extends AbstractModel
{
    /**
     * @var array <p>子网分配列表</p>
     */
    public $Allocations;

    /**
     * @param array $Allocations <p>子网分配列表</p>
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
        if (array_key_exists("Allocations",$param) and $param["Allocations"] !== null) {
            $this->Allocations = [];
            foreach ($param["Allocations"] as $key => $value){
                $obj = new SubnetAllocation();
                $obj->deserialize($value);
                array_push($this->Allocations, $obj);
            }
        }
    }
}
