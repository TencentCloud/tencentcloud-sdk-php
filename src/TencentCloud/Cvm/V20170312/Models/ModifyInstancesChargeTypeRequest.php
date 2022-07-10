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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesChargeType请求参数结构体
 *
 * @method array getInstanceIds() 获取一个或多个待操作的实例ID。可通过[`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。每次请求批量实例的上限为30。
 * @method void setInstanceIds(array $InstanceIds) 设置一个或多个待操作的实例ID。可通过[`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。每次请求批量实例的上限为30。
 * @method string getInstanceChargeType() 获取实例[计费类型](https://cloud.tencent.com/document/product/213/2180)。<br><li>PREPAID：预付费，即包年包月。<br><li>POSTPAID_BY_HOUR：后付费，即按量付费。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例[计费类型](https://cloud.tencent.com/document/product/213/2180)。<br><li>PREPAID：预付费，即包年包月。<br><li>POSTPAID_BY_HOUR：后付费，即按量付费。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。<dx-alert infotype="explain" title="">若指定实例的付费模式为预付费则该参数必传。</dx-alert>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。<dx-alert infotype="explain" title="">若指定实例的付费模式为预付费则该参数必传。</dx-alert>
 * @method boolean getModifyPortableDataDisk() 获取是否同时切换弹性数据云盘计费模式。取值范围：<br><li>TRUE：表示切换弹性数据云盘计费模式<br><li>FALSE：表示不切换弹性数据云盘计费模式<br><br>默认取值：FALSE。
 * @method void setModifyPortableDataDisk(boolean $ModifyPortableDataDisk) 设置是否同时切换弹性数据云盘计费模式。取值范围：<br><li>TRUE：表示切换弹性数据云盘计费模式<br><li>FALSE：表示不切换弹性数据云盘计费模式<br><br>默认取值：FALSE。
 */
class ModifyInstancesChargeTypeRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的实例ID。可通过[`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。每次请求批量实例的上限为30。
     */
    public $InstanceIds;

    /**
     * @var string 实例[计费类型](https://cloud.tencent.com/document/product/213/2180)。<br><li>PREPAID：预付费，即包年包月。<br><li>POSTPAID_BY_HOUR：后付费，即按量付费。
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。<dx-alert infotype="explain" title="">若指定实例的付费模式为预付费则该参数必传。</dx-alert>
     */
    public $InstanceChargePrepaid;

    /**
     * @var boolean 是否同时切换弹性数据云盘计费模式。取值范围：<br><li>TRUE：表示切换弹性数据云盘计费模式<br><li>FALSE：表示不切换弹性数据云盘计费模式<br><br>默认取值：FALSE。
     */
    public $ModifyPortableDataDisk;

    /**
     * @param array $InstanceIds 一个或多个待操作的实例ID。可通过[`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。每次请求批量实例的上限为30。
     * @param string $InstanceChargeType 实例[计费类型](https://cloud.tencent.com/document/product/213/2180)。<br><li>PREPAID：预付费，即包年包月。<br><li>POSTPAID_BY_HOUR：后付费，即按量付费。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。<dx-alert infotype="explain" title="">若指定实例的付费模式为预付费则该参数必传。</dx-alert>
     * @param boolean $ModifyPortableDataDisk 是否同时切换弹性数据云盘计费模式。取值范围：<br><li>TRUE：表示切换弹性数据云盘计费模式<br><li>FALSE：表示不切换弹性数据云盘计费模式<br><br>默认取值：FALSE。
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

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("ModifyPortableDataDisk",$param) and $param["ModifyPortableDataDisk"] !== null) {
            $this->ModifyPortableDataDisk = $param["ModifyPortableDataDisk"];
        }
    }
}
