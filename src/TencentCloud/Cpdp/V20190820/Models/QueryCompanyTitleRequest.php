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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCompanyTitle请求参数结构体
 *
 * @method string getCompanyTitleKeyword() 获取公司抬头关键字
 * @method void setCompanyTitleKeyword(string $CompanyTitleKeyword) 设置公司抬头关键字
 * @method integer getInvoicePlatformId() 获取开票平台ID。0：高灯，1：票易通
 * @method void setInvoicePlatformId(integer $InvoicePlatformId) 设置开票平台ID。0：高灯，1：票易通
 * @method string getSellerTaxpayerNum() 获取销方纳税人识别号
 * @method void setSellerTaxpayerNum(string $SellerTaxpayerNum) 设置销方纳税人识别号
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox。
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox。
 */
class QueryCompanyTitleRequest extends AbstractModel
{
    /**
     * @var string 公司抬头关键字
     */
    public $CompanyTitleKeyword;

    /**
     * @var integer 开票平台ID。0：高灯，1：票易通
     */
    public $InvoicePlatformId;

    /**
     * @var string 销方纳税人识别号
     */
    public $SellerTaxpayerNum;

    /**
     * @var string 接入环境。沙箱环境填sandbox。
     */
    public $Profile;

    /**
     * @param string $CompanyTitleKeyword 公司抬头关键字
     * @param integer $InvoicePlatformId 开票平台ID。0：高灯，1：票易通
     * @param string $SellerTaxpayerNum 销方纳税人识别号
     * @param string $Profile 接入环境。沙箱环境填sandbox。
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
        if (array_key_exists("CompanyTitleKeyword",$param) and $param["CompanyTitleKeyword"] !== null) {
            $this->CompanyTitleKeyword = $param["CompanyTitleKeyword"];
        }

        if (array_key_exists("InvoicePlatformId",$param) and $param["InvoicePlatformId"] !== null) {
            $this->InvoicePlatformId = $param["InvoicePlatformId"];
        }

        if (array_key_exists("SellerTaxpayerNum",$param) and $param["SellerTaxpayerNum"] !== null) {
            $this->SellerTaxpayerNum = $param["SellerTaxpayerNum"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
