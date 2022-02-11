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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量资源包信息
 *
 * @method string getInstanceId() 获取流量资源包所抵扣的实例 ID
 * @method void setInstanceId(string $InstanceId) 设置流量资源包所抵扣的实例 ID
 * @method string getDomain() 获取专属域名。如果实例无专属域名，则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置专属域名。如果实例无专属域名，则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取流量资源包来源类型，0 为付费购买，1 为赠送。
 * @method void setType(integer $Type) 设置流量资源包来源类型，0 为付费购买，1 为赠送。
 * @method string getSize() 获取总流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method void setSize(string $Size) 设置总流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method integer getSizeGB() 获取总流量，单位为 GB
 * @method void setSizeGB(integer $SizeGB) 设置总流量，单位为 GB
 * @method string getRemain() 获取剩余流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method void setRemain(string $Remain) 设置剩余流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method string getUsed() 获取已使用流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method void setUsed(string $Used) 设置已使用流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method string getUsedPercentage() 获取已使用百分比，由于数字类型精度限制，该字段为 String 类型。
 * @method void setUsedPercentage(string $UsedPercentage) 设置已使用百分比，由于数字类型精度限制，该字段为 String 类型。
 * @method string getEffectiveTime() 获取生效时间，即流量资源包的订购时间
 * @method void setEffectiveTime(string $EffectiveTime) 设置生效时间，即流量资源包的订购时间
 * @method string getExpireTime() 获取过期时间，即所抵扣的实例的过期时间。如果流量资源包所抵扣的实例为按量计费或永久有效实例，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间，即所抵扣的实例的过期时间。如果流量资源包所抵扣的实例为按量计费或永久有效实例，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrafficPackage extends AbstractModel
{
    /**
     * @var string 流量资源包所抵扣的实例 ID
     */
    public $InstanceId;

    /**
     * @var string 专属域名。如果实例无专属域名，则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var integer 流量资源包来源类型，0 为付费购买，1 为赠送。
     */
    public $Type;

    /**
     * @var string 总流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
     */
    public $Size;

    /**
     * @var integer 总流量，单位为 GB
     */
    public $SizeGB;

    /**
     * @var string 剩余流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
     */
    public $Remain;

    /**
     * @var string 已使用流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
     */
    public $Used;

    /**
     * @var string 已使用百分比，由于数字类型精度限制，该字段为 String 类型。
     */
    public $UsedPercentage;

    /**
     * @var string 生效时间，即流量资源包的订购时间
     */
    public $EffectiveTime;

    /**
     * @var string 过期时间，即所抵扣的实例的过期时间。如果流量资源包所抵扣的实例为按量计费或永久有效实例，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @param string $InstanceId 流量资源包所抵扣的实例 ID
     * @param string $Domain 专属域名。如果实例无专属域名，则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 流量资源包来源类型，0 为付费购买，1 为赠送。
     * @param string $Size 总流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
     * @param integer $SizeGB 总流量，单位为 GB
     * @param string $Remain 剩余流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
     * @param string $Used 已使用流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
     * @param string $UsedPercentage 已使用百分比，由于数字类型精度限制，该字段为 String 类型。
     * @param string $EffectiveTime 生效时间，即流量资源包的订购时间
     * @param string $ExpireTime 过期时间，即所抵扣的实例的过期时间。如果流量资源包所抵扣的实例为按量计费或永久有效实例，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("SizeGB",$param) and $param["SizeGB"] !== null) {
            $this->SizeGB = $param["SizeGB"];
        }

        if (array_key_exists("Remain",$param) and $param["Remain"] !== null) {
            $this->Remain = $param["Remain"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("UsedPercentage",$param) and $param["UsedPercentage"] !== null) {
            $this->UsedPercentage = $param["UsedPercentage"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
