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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstance请求参数结构体
 *
 * @method string getRegistryName() 获取<p>企业版实例名称</p>
 * @method void setRegistryName(string $RegistryName) 设置<p>企业版实例名称</p>
 * @method string getRegistryType() 获取<p>企业版实例类型（basic 基础版；standard 标准版；premium 高级版）</p>
 * @method void setRegistryType(string $RegistryType) 设置<p>企业版实例类型（basic 基础版；standard 标准版；premium 高级版）</p>
 * @method TagSpecification getTagSpecification() 获取<p>云标签描述</p>
 * @method void setTagSpecification(TagSpecification $TagSpecification) 设置<p>云标签描述</p>
 * @method integer getRegistryChargeType() 获取<p>实例计费类型，0表示按量计费，1表示预付费，默认为按量计费</p>
 * @method void setRegistryChargeType(integer $RegistryChargeType) 设置<p>实例计费类型，0表示按量计费，1表示预付费，默认为按量计费</p>
 * @method RegistryChargePrepaid getRegistryChargePrepaid() 获取<p>预付费自动续费标识和购买时长</p>
 * @method void setRegistryChargePrepaid(RegistryChargePrepaid $RegistryChargePrepaid) 设置<p>预付费自动续费标识和购买时长</p>
 * @method boolean getSyncTag() 获取<p>是否同步TCR云标签至生成的COS Bucket</p>
 * @method void setSyncTag(boolean $SyncTag) 设置<p>是否同步TCR云标签至生成的COS Bucket</p>
 * @method boolean getEnableCosMAZ() 获取<p>是否开启Cos桶多AZ特性</p>
 * @method void setEnableCosMAZ(boolean $EnableCosMAZ) 设置<p>是否开启Cos桶多AZ特性</p>
 * @method boolean getDeletionProtection() 获取<p>是否开启实例删除保护</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>是否开启实例删除保护</p>
 * @method boolean getEnableCosVersioning() 获取<p>是否开启cos桶多版本控制</p>
 * @method void setEnableCosVersioning(boolean $EnableCosVersioning) 设置<p>是否开启cos桶多版本控制</p>
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>企业版实例名称</p>
     */
    public $RegistryName;

    /**
     * @var string <p>企业版实例类型（basic 基础版；standard 标准版；premium 高级版）</p>
     */
    public $RegistryType;

    /**
     * @var TagSpecification <p>云标签描述</p>
     */
    public $TagSpecification;

    /**
     * @var integer <p>实例计费类型，0表示按量计费，1表示预付费，默认为按量计费</p>
     */
    public $RegistryChargeType;

    /**
     * @var RegistryChargePrepaid <p>预付费自动续费标识和购买时长</p>
     */
    public $RegistryChargePrepaid;

    /**
     * @var boolean <p>是否同步TCR云标签至生成的COS Bucket</p>
     */
    public $SyncTag;

    /**
     * @var boolean <p>是否开启Cos桶多AZ特性</p>
     */
    public $EnableCosMAZ;

    /**
     * @var boolean <p>是否开启实例删除保护</p>
     */
    public $DeletionProtection;

    /**
     * @var boolean <p>是否开启cos桶多版本控制</p>
     */
    public $EnableCosVersioning;

    /**
     * @param string $RegistryName <p>企业版实例名称</p>
     * @param string $RegistryType <p>企业版实例类型（basic 基础版；standard 标准版；premium 高级版）</p>
     * @param TagSpecification $TagSpecification <p>云标签描述</p>
     * @param integer $RegistryChargeType <p>实例计费类型，0表示按量计费，1表示预付费，默认为按量计费</p>
     * @param RegistryChargePrepaid $RegistryChargePrepaid <p>预付费自动续费标识和购买时长</p>
     * @param boolean $SyncTag <p>是否同步TCR云标签至生成的COS Bucket</p>
     * @param boolean $EnableCosMAZ <p>是否开启Cos桶多AZ特性</p>
     * @param boolean $DeletionProtection <p>是否开启实例删除保护</p>
     * @param boolean $EnableCosVersioning <p>是否开启cos桶多版本控制</p>
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

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("EnableCosVersioning",$param) and $param["EnableCosVersioning"] !== null) {
            $this->EnableCosVersioning = $param["EnableCosVersioning"];
        }
    }
}
