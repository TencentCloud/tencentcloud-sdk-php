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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetRenewal请求参数结构体
 *
 * @method string getProductCode() 获取产品编码。
 * @method void setProductCode(string $ProductCode) 设置产品编码。
 * @method string getRegionCode() 获取地域编码。
 * @method void setRegionCode(string $RegionCode) 设置地域编码。
 * @method string getInstanceId() 获取实例ID，仅支持指定一个。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，仅支持指定一个。
 * @method string getRenewFlag() 获取续费标识。枚举值如下：
NOTIFY_AND_MANUAL_RENEW：手动续费
NOTIFY_AND_AUTO_RENEW：自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续
 * @method void setRenewFlag(string $RenewFlag) 设置续费标识。枚举值如下：
NOTIFY_AND_MANUAL_RENEW：手动续费
NOTIFY_AND_AUTO_RENEW：自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续
 * @method string getRenewPeriod() 获取自动续费周期长度，不填写时默认按产品侧设置的默认值
如果是月，支持：1-11
如果是年，支持：1-5
实际按产品侧支持的范围为主
 * @method void setRenewPeriod(string $RenewPeriod) 设置自动续费周期长度，不填写时默认按产品侧设置的默认值
如果是月，支持：1-11
如果是年，支持：1-5
实际按产品侧支持的范围为主
 * @method string getRenewPeriodUnit() 获取自动续费周期单位，不填写时默认按产品侧设置的默认值
y 年，m 月
实际按产品侧支持的范围为主
 * @method void setRenewPeriodUnit(string $RenewPeriodUnit) 设置自动续费周期单位，不填写时默认按产品侧设置的默认值
y 年，m 月
实际按产品侧支持的范围为主
 */
class SetRenewalRequest extends AbstractModel
{
    /**
     * @var string 产品编码。
     */
    public $ProductCode;

    /**
     * @var string 地域编码。
     */
    public $RegionCode;

    /**
     * @var string 实例ID，仅支持指定一个。
     */
    public $InstanceId;

    /**
     * @var string 续费标识。枚举值如下：
NOTIFY_AND_MANUAL_RENEW：手动续费
NOTIFY_AND_AUTO_RENEW：自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续
     */
    public $RenewFlag;

    /**
     * @var string 自动续费周期长度，不填写时默认按产品侧设置的默认值
如果是月，支持：1-11
如果是年，支持：1-5
实际按产品侧支持的范围为主
     */
    public $RenewPeriod;

    /**
     * @var string 自动续费周期单位，不填写时默认按产品侧设置的默认值
y 年，m 月
实际按产品侧支持的范围为主
     */
    public $RenewPeriodUnit;

    /**
     * @param string $ProductCode 产品编码。
     * @param string $RegionCode 地域编码。
     * @param string $InstanceId 实例ID，仅支持指定一个。
     * @param string $RenewFlag 续费标识。枚举值如下：
NOTIFY_AND_MANUAL_RENEW：手动续费
NOTIFY_AND_AUTO_RENEW：自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续
     * @param string $RenewPeriod 自动续费周期长度，不填写时默认按产品侧设置的默认值
如果是月，支持：1-11
如果是年，支持：1-5
实际按产品侧支持的范围为主
     * @param string $RenewPeriodUnit 自动续费周期单位，不填写时默认按产品侧设置的默认值
y 年，m 月
实际按产品侧支持的范围为主
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
        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("RenewPeriod",$param) and $param["RenewPeriod"] !== null) {
            $this->RenewPeriod = $param["RenewPeriod"];
        }

        if (array_key_exists("RenewPeriodUnit",$param) and $param["RenewPeriodUnit"] !== null) {
            $this->RenewPeriodUnit = $param["RenewPeriodUnit"];
        }
    }
}
