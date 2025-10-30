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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OrderPerLicense请求参数结构体
 *
 * @method string getDeviceId() 获取购买永久授权License的设备ID，如果是厂商未激活设备采用HardwareId
 * @method void setDeviceId(string $DeviceId) 设置购买永久授权License的设备ID，如果是厂商未激活设备采用HardwareId
 * @method integer getType() 获取设备类型，0: SDK，1: CPE，作为用户创建或激活设备时传0，作为厂商创建待激活设备时传1
 * @method void setType(integer $Type) 设置设备类型，0: SDK，1: CPE，作为用户创建或激活设备时传0，作为厂商创建待激活设备时传1
 * @method boolean getRollBack() 获取购买失败后是否回滚（删除）设备，默认false，如果设备绑定了生效中的流量包则不能回滚。
 * @method void setRollBack(boolean $RollBack) 设置购买失败后是否回滚（删除）设备，默认false，如果设备绑定了生效中的流量包则不能回滚。
 * @method boolean getAutoVoucher() 获取是否自动选择代金券，默认false。
有多张券时的选择策略：按照可支付订单全部金额的券，先到期的券，可抵扣金额最大的券，余额最小的券，现金券 这个优先级进行扣券，且最多只抵扣一张券。
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置是否自动选择代金券，默认false。
有多张券时的选择策略：按照可支付订单全部金额的券，先到期的券，可抵扣金额最大的券，余额最小的券，现金券 这个优先级进行扣券，且最多只抵扣一张券。
 * @method array getVoucherIds() 获取指定代金券ID。自动选择代金券时此参数无效。目前只允许传入一张代金券。
注：若指定的代金券不符合订单抵扣条件，则正常支付，不扣券
 * @method void setVoucherIds(array $VoucherIds) 设置指定代金券ID。自动选择代金券时此参数无效。目前只允许传入一张代金券。
注：若指定的代金券不符合订单抵扣条件，则正常支付，不扣券
 */
class OrderPerLicenseRequest extends AbstractModel
{
    /**
     * @var string 购买永久授权License的设备ID，如果是厂商未激活设备采用HardwareId
     */
    public $DeviceId;

    /**
     * @var integer 设备类型，0: SDK，1: CPE，作为用户创建或激活设备时传0，作为厂商创建待激活设备时传1
     */
    public $Type;

    /**
     * @var boolean 购买失败后是否回滚（删除）设备，默认false，如果设备绑定了生效中的流量包则不能回滚。
     */
    public $RollBack;

    /**
     * @var boolean 是否自动选择代金券，默认false。
有多张券时的选择策略：按照可支付订单全部金额的券，先到期的券，可抵扣金额最大的券，余额最小的券，现金券 这个优先级进行扣券，且最多只抵扣一张券。
     */
    public $AutoVoucher;

    /**
     * @var array 指定代金券ID。自动选择代金券时此参数无效。目前只允许传入一张代金券。
注：若指定的代金券不符合订单抵扣条件，则正常支付，不扣券
     */
    public $VoucherIds;

    /**
     * @param string $DeviceId 购买永久授权License的设备ID，如果是厂商未激活设备采用HardwareId
     * @param integer $Type 设备类型，0: SDK，1: CPE，作为用户创建或激活设备时传0，作为厂商创建待激活设备时传1
     * @param boolean $RollBack 购买失败后是否回滚（删除）设备，默认false，如果设备绑定了生效中的流量包则不能回滚。
     * @param boolean $AutoVoucher 是否自动选择代金券，默认false。
有多张券时的选择策略：按照可支付订单全部金额的券，先到期的券，可抵扣金额最大的券，余额最小的券，现金券 这个优先级进行扣券，且最多只抵扣一张券。
     * @param array $VoucherIds 指定代金券ID。自动选择代金券时此参数无效。目前只允许传入一张代金券。
注：若指定的代金券不符合订单抵扣条件，则正常支付，不扣券
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RollBack",$param) and $param["RollBack"] !== null) {
            $this->RollBack = $param["RollBack"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }
    }
}
