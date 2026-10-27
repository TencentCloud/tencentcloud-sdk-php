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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesType请求参数结构体
 *
 * @method array getInstanceIds() 获取<p>实例id数组</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例id数组</p>
 * @method string getInstanceType() 获取<p>变更的实例类型</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>变更的实例类型</p>
 * @method string getChargeType() 获取<p>付费类型</p>
 * @method void setChargeType(string $ChargeType) 设置<p>付费类型</p>
 */
class ModifyInstancesTypeRequest extends AbstractModel
{
    /**
     * @var array <p>实例id数组</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>变更的实例类型</p>
     */
    public $InstanceType;

    /**
     * @var string <p>付费类型</p>
     */
    public $ChargeType;

    /**
     * @param array $InstanceIds <p>实例id数组</p>
     * @param string $InstanceType <p>变更的实例类型</p>
     * @param string $ChargeType <p>付费类型</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }
    }
}
