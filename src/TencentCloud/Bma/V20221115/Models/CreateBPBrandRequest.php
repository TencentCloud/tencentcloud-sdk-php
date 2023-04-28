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
namespace TencentCloud\Bma\V20221115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBPBrand请求参数结构体
 *
 * @method string getBrandName() 获取品牌名称
 * @method void setBrandName(string $BrandName) 设置品牌名称
 * @method string getCompanyName() 获取企业名称
 * @method void setCompanyName(string $CompanyName) 设置企业名称
 * @method string getBrandLogo() 获取品牌logo
 * @method void setBrandLogo(string $BrandLogo) 设置品牌logo
 * @method string getPhone() 获取联系电话
 * @method void setPhone(string $Phone) 设置联系电话
 * @method string getLicense() 获取营业执照
 * @method void setLicense(string $License) 设置营业执照
 * @method string getAuthorization() 获取授权书
 * @method void setAuthorization(string $Authorization) 设置授权书
 * @method array getTrademarkNames() 获取商标名称
 * @method void setTrademarkNames(array $TrademarkNames) 设置商标名称
 * @method array getTrademarks() 获取商标证明
 * @method void setTrademarks(array $Trademarks) 设置商标证明
 * @method array getIsTransfers() 获取是否涉及转让: 0-不转让 1-转让
 * @method void setIsTransfers(array $IsTransfers) 设置是否涉及转让: 0-不转让 1-转让
 * @method array getTransfers() 获取转让证明
 * @method void setTransfers(array $Transfers) 设置转让证明
 * @method array getProtectURLs() 获取保护网址
 * @method void setProtectURLs(array $ProtectURLs) 设置保护网址
 * @method array getProtectAPPs() 获取保护应用
 * @method void setProtectAPPs(array $ProtectAPPs) 设置保护应用
 * @method array getProtectOfficialAccounts() 获取保护公众号
 * @method void setProtectOfficialAccounts(array $ProtectOfficialAccounts) 设置保护公众号
 * @method array getProtectMiniPrograms() 获取保护小程序
 * @method void setProtectMiniPrograms(array $ProtectMiniPrograms) 设置保护小程序
 */
class CreateBPBrandRequest extends AbstractModel
{
    /**
     * @var string 品牌名称
     */
    public $BrandName;

    /**
     * @var string 企业名称
     */
    public $CompanyName;

    /**
     * @var string 品牌logo
     */
    public $BrandLogo;

    /**
     * @var string 联系电话
     */
    public $Phone;

    /**
     * @var string 营业执照
     */
    public $License;

    /**
     * @var string 授权书
     */
    public $Authorization;

    /**
     * @var array 商标名称
     */
    public $TrademarkNames;

    /**
     * @var array 商标证明
     */
    public $Trademarks;

    /**
     * @var array 是否涉及转让: 0-不转让 1-转让
     */
    public $IsTransfers;

    /**
     * @var array 转让证明
     */
    public $Transfers;

    /**
     * @var array 保护网址
     */
    public $ProtectURLs;

    /**
     * @var array 保护应用
     */
    public $ProtectAPPs;

    /**
     * @var array 保护公众号
     */
    public $ProtectOfficialAccounts;

    /**
     * @var array 保护小程序
     */
    public $ProtectMiniPrograms;

    /**
     * @param string $BrandName 品牌名称
     * @param string $CompanyName 企业名称
     * @param string $BrandLogo 品牌logo
     * @param string $Phone 联系电话
     * @param string $License 营业执照
     * @param string $Authorization 授权书
     * @param array $TrademarkNames 商标名称
     * @param array $Trademarks 商标证明
     * @param array $IsTransfers 是否涉及转让: 0-不转让 1-转让
     * @param array $Transfers 转让证明
     * @param array $ProtectURLs 保护网址
     * @param array $ProtectAPPs 保护应用
     * @param array $ProtectOfficialAccounts 保护公众号
     * @param array $ProtectMiniPrograms 保护小程序
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
        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("BrandLogo",$param) and $param["BrandLogo"] !== null) {
            $this->BrandLogo = $param["BrandLogo"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = $param["License"];
        }

        if (array_key_exists("Authorization",$param) and $param["Authorization"] !== null) {
            $this->Authorization = $param["Authorization"];
        }

        if (array_key_exists("TrademarkNames",$param) and $param["TrademarkNames"] !== null) {
            $this->TrademarkNames = $param["TrademarkNames"];
        }

        if (array_key_exists("Trademarks",$param) and $param["Trademarks"] !== null) {
            $this->Trademarks = $param["Trademarks"];
        }

        if (array_key_exists("IsTransfers",$param) and $param["IsTransfers"] !== null) {
            $this->IsTransfers = $param["IsTransfers"];
        }

        if (array_key_exists("Transfers",$param) and $param["Transfers"] !== null) {
            $this->Transfers = $param["Transfers"];
        }

        if (array_key_exists("ProtectURLs",$param) and $param["ProtectURLs"] !== null) {
            $this->ProtectURLs = $param["ProtectURLs"];
        }

        if (array_key_exists("ProtectAPPs",$param) and $param["ProtectAPPs"] !== null) {
            $this->ProtectAPPs = $param["ProtectAPPs"];
        }

        if (array_key_exists("ProtectOfficialAccounts",$param) and $param["ProtectOfficialAccounts"] !== null) {
            $this->ProtectOfficialAccounts = $param["ProtectOfficialAccounts"];
        }

        if (array_key_exists("ProtectMiniPrograms",$param) and $param["ProtectMiniPrograms"] !== null) {
            $this->ProtectMiniPrograms = $param["ProtectMiniPrograms"];
        }
    }
}
