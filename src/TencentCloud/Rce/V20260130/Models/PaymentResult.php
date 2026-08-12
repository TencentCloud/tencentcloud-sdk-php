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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 支付结果
 *
 * @method string getStatus() 获取<p>支付状态</p><p>枚举值：</p><ul><li>success： 成功</li><li>failure： 失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>支付状态</p><p>枚举值：</p><ul><li>success： 成功</li><li>failure： 失败</li></ul>
 * @method string getFailureReason() 获取<p>支付失败原因</p>
 * @method void setFailureReason(string $FailureReason) 设置<p>支付失败原因</p>
 * @method boolean getThreeDomainSecure() 获取<p>是否使用3DS，枚举值：</p><ul><li>是：true</li><li>否：false</li></ul>
 * @method void setThreeDomainSecure(boolean $ThreeDomainSecure) 设置<p>是否使用3DS，枚举值：</p><ul><li>是：true</li><li>否：false</li></ul>
 * @method string getECICode() 获取<p>ECI返回码</p>
 * @method void setECICode(string $ECICode) 设置<p>ECI返回码</p>
 * @method string getAVSCode() 获取<p>AVS响应结果（地址验证）</p>
 * @method void setAVSCode(string $AVSCode) 设置<p>AVS响应结果（地址验证）</p>
 * @method string getCVCCode() 获取<p>CVC验证结果（交易真实性验证）</p>
 * @method void setCVCCode(string $CVCCode) 设置<p>CVC验证结果（交易真实性验证）</p>
 */
class PaymentResult extends AbstractModel
{
    /**
     * @var string <p>支付状态</p><p>枚举值：</p><ul><li>success： 成功</li><li>failure： 失败</li></ul>
     */
    public $Status;

    /**
     * @var string <p>支付失败原因</p>
     */
    public $FailureReason;

    /**
     * @var boolean <p>是否使用3DS，枚举值：</p><ul><li>是：true</li><li>否：false</li></ul>
     */
    public $ThreeDomainSecure;

    /**
     * @var string <p>ECI返回码</p>
     */
    public $ECICode;

    /**
     * @var string <p>AVS响应结果（地址验证）</p>
     */
    public $AVSCode;

    /**
     * @var string <p>CVC验证结果（交易真实性验证）</p>
     */
    public $CVCCode;

    /**
     * @param string $Status <p>支付状态</p><p>枚举值：</p><ul><li>success： 成功</li><li>failure： 失败</li></ul>
     * @param string $FailureReason <p>支付失败原因</p>
     * @param boolean $ThreeDomainSecure <p>是否使用3DS，枚举值：</p><ul><li>是：true</li><li>否：false</li></ul>
     * @param string $ECICode <p>ECI返回码</p>
     * @param string $AVSCode <p>AVS响应结果（地址验证）</p>
     * @param string $CVCCode <p>CVC验证结果（交易真实性验证）</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("ThreeDomainSecure",$param) and $param["ThreeDomainSecure"] !== null) {
            $this->ThreeDomainSecure = $param["ThreeDomainSecure"];
        }

        if (array_key_exists("ECICode",$param) and $param["ECICode"] !== null) {
            $this->ECICode = $param["ECICode"];
        }

        if (array_key_exists("AVSCode",$param) and $param["AVSCode"] !== null) {
            $this->AVSCode = $param["AVSCode"];
        }

        if (array_key_exists("CVCCode",$param) and $param["CVCCode"] !== null) {
            $this->CVCCode = $param["CVCCode"];
        }
    }
}
