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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PurchaseResourcePoolPacks请求参数结构体
 *
 * @method string getZone() 获取实例资源池预扣包所在可用区。形如：ap-guangzhou-6。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口获取可用区列表。
 * @method void setZone(string $Zone) 设置实例资源池预扣包所在可用区。形如：ap-guangzhou-6。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口获取可用区列表。
 * @method string getInstanceType() 获取实例资源池预扣包的规格，仅支持半整机/整机规格。形如：SA9.96XLARGE1152（SA9半整机）。
 * @method void setInstanceType(string $InstanceType) 设置实例资源池预扣包的规格，仅支持半整机/整机规格。形如：SA9.96XLARGE1152（SA9半整机）。
 * @method integer getInstanceCount() 获取实例资源池预扣包的数量。1个数量代表1个半整机/整机资源池。取值范围：1-100。
 * @method void setInstanceCount(integer $InstanceCount) 设置实例资源池预扣包的数量。1个数量代表1个半整机/整机资源池。取值范围：1-100。
 * @method integer getPeriod() 获取实例资源池预扣包的时长，单位：月。取值范围：1-60。
 * @method void setPeriod(integer $Period) 设置实例资源池预扣包的时长，单位：月。取值范围：1-60。
 * @method string getResourcePoolPackType() 获取实例资源池类型。取值范围：
<li>EXCLUSIVE：独享（默认值）</li>
<li>SHARED：共享</li>
注意：第一期仅支持EXCLUSIVE类型。
 * @method void setResourcePoolPackType(string $ResourcePoolPackType) 设置实例资源池类型。取值范围：
<li>EXCLUSIVE：独享（默认值）</li>
<li>SHARED：共享</li>
注意：第一期仅支持EXCLUSIVE类型。
 * @method boolean getAutoPlacement() 获取自动放置开关，默认开启（true）。
<li>开启：在不指定实例资源池创建实例时，系统会在开启了该能力的实例资源池里寻找合适的池子创建实例。</li>
<li>关闭：在不指定实例资源池创建实例时，系统不会在该池子里创建实例，只有在指定实例资源池创建实例时，指定了该池子的ID，才允许在池子内创建实例。</li>
 * @method void setAutoPlacement(boolean $AutoPlacement) 设置自动放置开关，默认开启（true）。
<li>开启：在不指定实例资源池创建实例时，系统会在开启了该能力的实例资源池里寻找合适的池子创建实例。</li>
<li>关闭：在不指定实例资源池创建实例时，系统不会在该池子里创建实例，只有在指定实例资源池创建实例时，指定了该池子的ID，才允许在池子内创建实例。</li>
 * @method string getDedicatedResourcePoolPackName() 获取实例资源池的名称。长度限制：1-60个字符，支持中文、英文、数字、连接线"-"、下划线"_"。
 * @method void setDedicatedResourcePoolPackName(string $DedicatedResourcePoolPackName) 设置实例资源池的名称。长度限制：1-60个字符，支持中文、英文、数字、连接线"-"、下划线"_"。
 * @method string getRenewFlag() 获取自动续费标识。取值范围：
<li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li>
<li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费（默认值）</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费</li>
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识。取值范围：
<li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li>
<li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费（默认值）</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费</li>
 * @method boolean getDryRun() 获取试运行，用于校验请求参数是否正确。默认为false。
<li>true：发送检查请求，不会创建实例资源池。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId。</li>
<li>false（默认值）：发送正常请求，通过检查后直接创建实例资源池。</li>
 * @method void setDryRun(boolean $DryRun) 设置试运行，用于校验请求参数是否正确。默认为false。
<li>true：发送检查请求，不会创建实例资源池。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId。</li>
<li>false（默认值）：发送正常请求，通过检查后直接创建实例资源池。</li>
 */
class PurchaseResourcePoolPacksRequest extends AbstractModel
{
    /**
     * @var string 实例资源池预扣包所在可用区。形如：ap-guangzhou-6。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口获取可用区列表。
     */
    public $Zone;

    /**
     * @var string 实例资源池预扣包的规格，仅支持半整机/整机规格。形如：SA9.96XLARGE1152（SA9半整机）。
     */
    public $InstanceType;

    /**
     * @var integer 实例资源池预扣包的数量。1个数量代表1个半整机/整机资源池。取值范围：1-100。
     */
    public $InstanceCount;

    /**
     * @var integer 实例资源池预扣包的时长，单位：月。取值范围：1-60。
     */
    public $Period;

    /**
     * @var string 实例资源池类型。取值范围：
<li>EXCLUSIVE：独享（默认值）</li>
<li>SHARED：共享</li>
注意：第一期仅支持EXCLUSIVE类型。
     */
    public $ResourcePoolPackType;

    /**
     * @var boolean 自动放置开关，默认开启（true）。
<li>开启：在不指定实例资源池创建实例时，系统会在开启了该能力的实例资源池里寻找合适的池子创建实例。</li>
<li>关闭：在不指定实例资源池创建实例时，系统不会在该池子里创建实例，只有在指定实例资源池创建实例时，指定了该池子的ID，才允许在池子内创建实例。</li>
     */
    public $AutoPlacement;

    /**
     * @var string 实例资源池的名称。长度限制：1-60个字符，支持中文、英文、数字、连接线"-"、下划线"_"。
     */
    public $DedicatedResourcePoolPackName;

    /**
     * @var string 自动续费标识。取值范围：
<li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li>
<li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费（默认值）</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费</li>
     */
    public $RenewFlag;

    /**
     * @var boolean 试运行，用于校验请求参数是否正确。默认为false。
<li>true：发送检查请求，不会创建实例资源池。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId。</li>
<li>false（默认值）：发送正常请求，通过检查后直接创建实例资源池。</li>
     */
    public $DryRun;

    /**
     * @param string $Zone 实例资源池预扣包所在可用区。形如：ap-guangzhou-6。可通过[DescribeZones](https://cloud.tencent.com/document/product/213/15707)接口获取可用区列表。
     * @param string $InstanceType 实例资源池预扣包的规格，仅支持半整机/整机规格。形如：SA9.96XLARGE1152（SA9半整机）。
     * @param integer $InstanceCount 实例资源池预扣包的数量。1个数量代表1个半整机/整机资源池。取值范围：1-100。
     * @param integer $Period 实例资源池预扣包的时长，单位：月。取值范围：1-60。
     * @param string $ResourcePoolPackType 实例资源池类型。取值范围：
<li>EXCLUSIVE：独享（默认值）</li>
<li>SHARED：共享</li>
注意：第一期仅支持EXCLUSIVE类型。
     * @param boolean $AutoPlacement 自动放置开关，默认开启（true）。
<li>开启：在不指定实例资源池创建实例时，系统会在开启了该能力的实例资源池里寻找合适的池子创建实例。</li>
<li>关闭：在不指定实例资源池创建实例时，系统不会在该池子里创建实例，只有在指定实例资源池创建实例时，指定了该池子的ID，才允许在池子内创建实例。</li>
     * @param string $DedicatedResourcePoolPackName 实例资源池的名称。长度限制：1-60个字符，支持中文、英文、数字、连接线"-"、下划线"_"。
     * @param string $RenewFlag 自动续费标识。取值范围：
<li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li>
<li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费（默认值）</li>
<li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费</li>
     * @param boolean $DryRun 试运行，用于校验请求参数是否正确。默认为false。
<li>true：发送检查请求，不会创建实例资源池。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId。</li>
<li>false（默认值）：发送正常请求，通过检查后直接创建实例资源池。</li>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ResourcePoolPackType",$param) and $param["ResourcePoolPackType"] !== null) {
            $this->ResourcePoolPackType = $param["ResourcePoolPackType"];
        }

        if (array_key_exists("AutoPlacement",$param) and $param["AutoPlacement"] !== null) {
            $this->AutoPlacement = $param["AutoPlacement"];
        }

        if (array_key_exists("DedicatedResourcePoolPackName",$param) and $param["DedicatedResourcePoolPackName"] !== null) {
            $this->DedicatedResourcePoolPackName = $param["DedicatedResourcePoolPackName"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
