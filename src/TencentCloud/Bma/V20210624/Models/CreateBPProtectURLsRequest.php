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
 * @method string getCompanyName() 获取xxx
 * @method void setCompanyName(string $CompanyName) 设置xxx
 * @method string getPhone() 获取xxx
 * @method void setPhone(string $Phone) 设置xxx
 * @method string getLicenseName() 获取xxx
 * @method void setLicenseName(string $LicenseName) 设置xxx
 * @method array getProtectURLs() 获取xxx
 * @method void setProtectURLs(array $ProtectURLs) 设置xxx
 * @method array getProtectWebs() 获取xxx
 * @method void setProtectWebs(array $ProtectWebs) 设置xxx
 */
class CreateBPProtectURLsRequest extends AbstractModel
{
    /**
     * @var string xxx
     */
    public $CompanyName;

    /**
     * @var string xxx
     */
    public $Phone;

    /**
     * @var string xxx
     */
    public $LicenseName;

    /**
     * @var array xxx
     */
    public $ProtectURLs;

    /**
     * @var array xxx
     */
    public $ProtectWebs;

    /**
     * @param string $CompanyName xxx
     * @param string $Phone xxx
     * @param string $LicenseName xxx
     * @param array $ProtectURLs xxx
     * @param array $ProtectWebs xxx
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
