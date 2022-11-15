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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceRenewInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取待续费的实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573 )接口返回值中的InstanceId获取。每次请求批量实例的上限为50。
 * @method void setInstanceIds(array $InstanceIds) 设置待续费的实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573 )接口返回值中的InstanceId获取。每次请求批量实例的上限为50。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method boolean getRenewDataDisk() 获取是否续费数据盘。默认值: false, 即不续费。
 * @method void setRenewDataDisk(boolean $RenewDataDisk) 设置是否续费数据盘。默认值: false, 即不续费。
 * @method boolean getAlignInstanceExpiredTime() 获取数据盘是否对齐实例到期时间。默认值: false, 即不对齐。
 * @method void setAlignInstanceExpiredTime(boolean $AlignInstanceExpiredTime) 设置数据盘是否对齐实例到期时间。默认值: false, 即不对齐。
 */
class InquirePriceRenewInstancesRequest extends AbstractModel
{
    /**
     * @var array 待续费的实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573 )接口返回值中的InstanceId获取。每次请求批量实例的上限为50。
     */
    public $InstanceIds;

    /**
     * @var InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     */
    public $InstanceChargePrepaid;

    /**
     * @var boolean 是否续费数据盘。默认值: false, 即不续费。
     */
    public $RenewDataDisk;

    /**
     * @var boolean 数据盘是否对齐实例到期时间。默认值: false, 即不对齐。
     */
    public $AlignInstanceExpiredTime;

    /**
     * @param array $InstanceIds 待续费的实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573 )接口返回值中的InstanceId获取。每次请求批量实例的上限为50。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     * @param boolean $RenewDataDisk 是否续费数据盘。默认值: false, 即不续费。
     * @param boolean $AlignInstanceExpiredTime 数据盘是否对齐实例到期时间。默认值: false, 即不对齐。
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

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("RenewDataDisk",$param) and $param["RenewDataDisk"] !== null) {
            $this->RenewDataDisk = $param["RenewDataDisk"];
        }

        if (array_key_exists("AlignInstanceExpiredTime",$param) and $param["AlignInstanceExpiredTime"] !== null) {
            $this->AlignInstanceExpiredTime = $param["AlignInstanceExpiredTime"];
        }
    }
}
