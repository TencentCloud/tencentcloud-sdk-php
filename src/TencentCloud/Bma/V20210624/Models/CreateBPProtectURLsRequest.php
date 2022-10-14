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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBPProtectURLs请求参数结构体
 *
 * @method string getCompanyName() 获取企业名称
 * @method void setCompanyName(string $CompanyName) 设置企业名称
 * @method string getPhone() 获取电话号码
 * @method void setPhone(string $Phone) 设置电话号码
 * @method string getLicenseName() 获取营业执照
 * @method void setLicenseName(string $LicenseName) 设置营业执照
 * @method array getProtectURLs() 获取保护网站
 * @method void setProtectURLs(array $ProtectURLs) 设置保护网站
 * @method array getProtectWebs() 获取网站名称
 * @method void setProtectWebs(array $ProtectWebs) 设置网站名称
 */
class CreateBPProtectURLsRequest extends AbstractModel
{
    /**
     * @var string 企业名称
     */
    public $CompanyName;

    /**
     * @var string 电话号码
     */
    public $Phone;

    /**
     * @var string 营业执照
     */
    public $LicenseName;

    /**
     * @var array 保护网站
     */
    public $ProtectURLs;

    /**
     * @var array 网站名称
     */
    public $ProtectWebs;

    /**
     * @param string $CompanyName 企业名称
     * @param string $Phone 电话号码
     * @param string $LicenseName 营业执照
     * @param array $ProtectURLs 保护网站
     * @param array $ProtectWebs 网站名称
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
        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("LicenseName",$param) and $param["LicenseName"] !== null) {
            $this->LicenseName = $param["LicenseName"];
        }

        if (array_key_exists("ProtectURLs",$param) and $param["ProtectURLs"] !== null) {
            $this->ProtectURLs = $param["ProtectURLs"];
        }

        if (array_key_exists("ProtectWebs",$param) and $param["ProtectWebs"] !== null) {
            $this->ProtectWebs = $param["ProtectWebs"];
        }
    }
}
