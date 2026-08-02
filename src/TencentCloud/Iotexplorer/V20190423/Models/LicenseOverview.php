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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 激活码统计信息。
 *
 * @method array getActivationLicense() 获取<p>激活码统计信息</p>
 * @method void setActivationLicense(array $ActivationLicense) 设置<p>激活码统计信息</p>
 * @method string getLicenseType() 获取<p>激活码类型</p>
 * @method void setLicenseType(string $LicenseType) 设置<p>激活码类型</p>
 */
class LicenseOverview extends AbstractModel
{
    /**
     * @var array <p>激活码统计信息</p>
     */
    public $ActivationLicense;

    /**
     * @var string <p>激活码类型</p>
     */
    public $LicenseType;

    /**
     * @param array $ActivationLicense <p>激活码统计信息</p>
     * @param string $LicenseType <p>激活码类型</p>
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
        if (array_key_exists("ActivationLicense",$param) and $param["ActivationLicense"] !== null) {
            $this->ActivationLicense = [];
            foreach ($param["ActivationLicense"] as $key => $value){
                $obj = new ActivationLicense();
                $obj->deserialize($value);
                array_push($this->ActivationLicense, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }
    }
}
