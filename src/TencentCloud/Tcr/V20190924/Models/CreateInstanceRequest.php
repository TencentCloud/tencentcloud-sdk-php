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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstance请求参数结构体
 *
 * @method string getRegistryName() 获取企业版实例名称
 * @method void setRegistryName(string $RegistryName) 设置企业版实例名称
 * @method string getRegistryType() 获取企业版实例类型（basic 基础版；standard 标准版；premium 高级版）
 * @method void setRegistryType(string $RegistryType) 设置企业版实例类型（basic 基础版；standard 标准版；premium 高级版）
 * @method TagSpecification getTagSpecification() 获取云标签描述
 * @method void setTagSpecification(TagSpecification $TagSpecification) 设置云标签描述
 * @method integer getRegistryChargeType() 获取实例计费类型，0表示按量计费，1表示预付费，默认为按量计费
 * @method void setRegistryChargeType(integer $RegistryChargeType) 设置实例计费类型，0表示按量计费，1表示预付费，默认为按量计费
 * @method RegistryChargePrepaid getRegistryChargePrepaid() 获取预付费自动续费标识和购买时长
 * @method void setRegistryChargePrepaid(RegistryChargePrepaid $RegistryChargePrepaid) 设置预付费自动续费标识和购买时长
 * @method boolean getSyncTag() 获取是否同步TCR云标签至生成的COS Bucket
 * @method void setSyncTag(boolean $SyncTag) 设置是否同步TCR云标签至生成的COS Bucket
 * @method boolean getEnableCosMAZ() 获取是否开启Cos桶多AZ特性
 * @method void setEnableCosMAZ(boolean $EnableCosMAZ) 设置是否开启Cos桶多AZ特性
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string 企业版实例名称
     */
    public $RegistryName;

    /**
     * @var string 企业版实例类型（basic 基础版；standard 标准版；premium 高级版）
     */
    public $RegistryType;

    /**
     * @var TagSpecification 云标签描述
     */
    public $TagSpecification;

    /**
     * @var integer 实例计费类型，0表示按量计费，1表示预付费，默认为按量计费
     */
    public $RegistryChargeType;

    /**
     * @var RegistryChargePrepaid 预付费自动续费标识和购买时长
     */
    public $RegistryChargePrepaid;

    /**
     * @var boolean 是否同步TCR云标签至生成的COS Bucket
     */
    public $SyncTag;

    /**
     * @var boolean 是否开启Cos桶多AZ特性
     */
    public $EnableCosMAZ;

    /**
     * @param string $RegistryName 企业版实例名称
     * @param string $RegistryType 企业版实例类型（basic 基础版；standard 标准版；premium 高级版）
     * @param TagSpecification $TagSpecification 云标签描述
     * @param integer $RegistryChargeType 实例计费类型，0表示按量计费，1表示预付费，默认为按量计费
     * @param RegistryChargePrepaid $RegistryChargePrepaid 预付费自动续费标识和购买时长
     * @param boolean $SyncTag 是否同步TCR云标签至生成的COS Bucket
     * @param boolean $EnableCosMAZ 是否开启Cos桶多AZ特性
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
        if (array_key_exists("RegistryName",$param) and $param["RegistryName"] !== null) {
            $this->RegistryName = $param["RegistryName"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }

        if (array_key_exists("RegistryChargeType",$param) and $param["RegistryChargeType"] !== null) {
            $this->RegistryChargeType = $param["RegistryChargeType"];
        }

        if (array_key_exists("RegistryChargePrepaid",$param) and $param["RegistryChargePrepaid"] !== null) {
            $this->RegistryChargePrepaid = new RegistryChargePrepaid();
            $this->RegistryChargePrepaid->deserialize($param["RegistryChargePrepaid"]);
        }

        if (array_key_exists("SyncTag",$param) and $param["SyncTag"] !== null) {
            $this->SyncTag = $param["SyncTag"];
        }

        if (array_key_exists("EnableCosMAZ",$param) and $param["EnableCosMAZ"] !== null) {
            $this->EnableCosMAZ = $param["EnableCosMAZ"];
        }
    }
}
