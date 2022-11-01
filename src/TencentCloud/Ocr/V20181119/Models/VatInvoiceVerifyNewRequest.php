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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VatInvoiceVerifyNew请求参数结构体
 *
 * @method string getInvoiceNo() 获取发票号码，8位、20位（全电票）
 * @method void setInvoiceNo(string $InvoiceNo) 设置发票号码，8位、20位（全电票）
 * @method string getInvoiceDate() 获取开票日期（不支持当天发票查询，支持五年以内开具的发票），格式：“YYYY-MM-DD”，如：2019-12-20。
 * @method void setInvoiceDate(string $InvoiceDate) 设置开票日期（不支持当天发票查询，支持五年以内开具的发票），格式：“YYYY-MM-DD”，如：2019-12-20。
 * @method string getInvoiceCode() 获取发票代码（10或12 位），全电发票为空。查验未成功超过5次后当日无法再查。
 * @method void setInvoiceCode(string $InvoiceCode) 设置发票代码（10或12 位），全电发票为空。查验未成功超过5次后当日无法再查。
 * @method string getInvoiceKind() 获取票种类型 01:增值税专用发票， 02:货运运输业增值税专用发 票， 03:机动车销售统一发票， 04:增值税普通发票， 08:增值税电子专用发票(含全电)， 10:增值税电子普通发票(含全电)， 11:增值税普通发票(卷式)， 14:增值税电子(通行费)发 票， 15:二手车销售统一发票， 32:深圳区块链发票(云南区块链因业务调整现已下线)。
 * @method void setInvoiceKind(string $InvoiceKind) 设置票种类型 01:增值税专用发票， 02:货运运输业增值税专用发 票， 03:机动车销售统一发票， 04:增值税普通发票， 08:增值税电子专用发票(含全电)， 10:增值税电子普通发票(含全电)， 11:增值税普通发票(卷式)， 14:增值税电子(通行费)发 票， 15:二手车销售统一发票， 32:深圳区块链发票(云南区块链因业务调整现已下线)。
 * @method string getCheckCode() 获取校验码后 6 位，增值税普通发票、增值税电子普通发票、增值税普通发票(卷式)、增值税电子普通发票(通行费)时必填;
区块链为 5 位
 * @method void setCheckCode(string $CheckCode) 设置校验码后 6 位，增值税普通发票、增值税电子普通发票、增值税普通发票(卷式)、增值税电子普通发票(通行费)时必填;
区块链为 5 位
 * @method string getAmount() 获取不含税金额，增值税专用发票、增值税电子专用发票、机动车销售统一发票、二手车销售统一发票、区块链发票时必填; 全电发票为价税合计(含税金额)
 * @method void setAmount(string $Amount) 设置不含税金额，增值税专用发票、增值税电子专用发票、机动车销售统一发票、二手车销售统一发票、区块链发票时必填; 全电发票为价税合计(含税金额)
 * @method string getRegionCode() 获取地区编码，通用机打电子发票时必填。
广东:4400，浙江:3300
 * @method void setRegionCode(string $RegionCode) 设置地区编码，通用机打电子发票时必填。
广东:4400，浙江:3300
 * @method string getSellerTaxCode() 获取销方税号，通用机打电子发票必填
 * @method void setSellerTaxCode(string $SellerTaxCode) 设置销方税号，通用机打电子发票必填
 * @method boolean getEnableCommonElectronic() 获取是否开启通用机打电子发票，默认为关闭。
 * @method void setEnableCommonElectronic(boolean $EnableCommonElectronic) 设置是否开启通用机打电子发票，默认为关闭。
 */
class VatInvoiceVerifyNewRequest extends AbstractModel
{
    /**
     * @var string 发票号码，8位、20位（全电票）
     */
    public $InvoiceNo;

    /**
     * @var string 开票日期（不支持当天发票查询，支持五年以内开具的发票），格式：“YYYY-MM-DD”，如：2019-12-20。
     */
    public $InvoiceDate;

    /**
     * @var string 发票代码（10或12 位），全电发票为空。查验未成功超过5次后当日无法再查。
     */
    public $InvoiceCode;

    /**
     * @var string 票种类型 01:增值税专用发票， 02:货运运输业增值税专用发 票， 03:机动车销售统一发票， 04:增值税普通发票， 08:增值税电子专用发票(含全电)， 10:增值税电子普通发票(含全电)， 11:增值税普通发票(卷式)， 14:增值税电子(通行费)发 票， 15:二手车销售统一发票， 32:深圳区块链发票(云南区块链因业务调整现已下线)。
     */
    public $InvoiceKind;

    /**
     * @var string 校验码后 6 位，增值税普通发票、增值税电子普通发票、增值税普通发票(卷式)、增值税电子普通发票(通行费)时必填;
区块链为 5 位
     */
    public $CheckCode;

    /**
     * @var string 不含税金额，增值税专用发票、增值税电子专用发票、机动车销售统一发票、二手车销售统一发票、区块链发票时必填; 全电发票为价税合计(含税金额)
     */
    public $Amount;

    /**
     * @var string 地区编码，通用机打电子发票时必填。
广东:4400，浙江:3300
     */
    public $RegionCode;

    /**
     * @var string 销方税号，通用机打电子发票必填
     */
    public $SellerTaxCode;

    /**
     * @var boolean 是否开启通用机打电子发票，默认为关闭。
     */
    public $EnableCommonElectronic;

    /**
     * @param string $InvoiceNo 发票号码，8位、20位（全电票）
     * @param string $InvoiceDate 开票日期（不支持当天发票查询，支持五年以内开具的发票），格式：“YYYY-MM-DD”，如：2019-12-20。
     * @param string $InvoiceCode 发票代码（10或12 位），全电发票为空。查验未成功超过5次后当日无法再查。
     * @param string $InvoiceKind 票种类型 01:增值税专用发票， 02:货运运输业增值税专用发 票， 03:机动车销售统一发票， 04:增值税普通发票， 08:增值税电子专用发票(含全电)， 10:增值税电子普通发票(含全电)， 11:增值税普通发票(卷式)， 14:增值税电子(通行费)发 票， 15:二手车销售统一发票， 32:深圳区块链发票(云南区块链因业务调整现已下线)。
     * @param string $CheckCode 校验码后 6 位，增值税普通发票、增值税电子普通发票、增值税普通发票(卷式)、增值税电子普通发票(通行费)时必填;
区块链为 5 位
     * @param string $Amount 不含税金额，增值税专用发票、增值税电子专用发票、机动车销售统一发票、二手车销售统一发票、区块链发票时必填; 全电发票为价税合计(含税金额)
     * @param string $RegionCode 地区编码，通用机打电子发票时必填。
广东:4400，浙江:3300
     * @param string $SellerTaxCode 销方税号，通用机打电子发票必填
     * @param boolean $EnableCommonElectronic 是否开启通用机打电子发票，默认为关闭。
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
        if (array_key_exists("InvoiceNo",$param) and $param["InvoiceNo"] !== null) {
            $this->InvoiceNo = $param["InvoiceNo"];
        }

        if (array_key_exists("InvoiceDate",$param) and $param["InvoiceDate"] !== null) {
            $this->InvoiceDate = $param["InvoiceDate"];
        }

        if (array_key_exists("InvoiceCode",$param) and $param["InvoiceCode"] !== null) {
            $this->InvoiceCode = $param["InvoiceCode"];
        }

        if (array_key_exists("InvoiceKind",$param) and $param["InvoiceKind"] !== null) {
            $this->InvoiceKind = $param["InvoiceKind"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("SellerTaxCode",$param) and $param["SellerTaxCode"] !== null) {
            $this->SellerTaxCode = $param["SellerTaxCode"];
        }

        if (array_key_exists("EnableCommonElectronic",$param) and $param["EnableCommonElectronic"] !== null) {
            $this->EnableCommonElectronic = $param["EnableCommonElectronic"];
        }
    }
}
