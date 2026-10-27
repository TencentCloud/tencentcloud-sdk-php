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
 * RenewInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取一个或多个待操作的实例ID。每次请求批量实例的上限为50。
 * @method void setInstanceIds(array $InstanceIds) 设置一个或多个待操作的实例ID。每次请求批量实例的上限为50。
 * @method ChargePrepaid getChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。包年包月实例该参数为必传参数。
 * @method void setChargePrepaid(ChargePrepaid $ChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。包年包月实例该参数为必传参数。
 */
class RenewInstancesRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的实例ID。每次请求批量实例的上限为50。
     */
    public $InstanceIds;

    /**
     * @var ChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。包年包月实例该参数为必传参数。
     */
    public $ChargePrepaid;

    /**
     * @param array $InstanceIds 一个或多个待操作的实例ID。每次请求批量实例的上限为50。
     * @param ChargePrepaid $ChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。包年包月实例该参数为必传参数。
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

        if (array_key_exists("ChargePrepaid",$param) and $param["ChargePrepaid"] !== null) {
            $this->ChargePrepaid = new ChargePrepaid();
            $this->ChargePrepaid->deserialize($param["ChargePrepaid"]);
        }
    }
}
