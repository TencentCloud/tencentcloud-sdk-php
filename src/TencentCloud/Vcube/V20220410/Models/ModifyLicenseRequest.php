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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLicense请求参数结构体
 *
 * @method string getLicenseId() 获取License 功能模块 Id
 * @method void setLicenseId(string $LicenseId) 设置License 功能模块 Id
 * @method string getResourceId() 获取资源包 Id
 * @method void setResourceId(string $ResourceId) 设置资源包 Id
 */
class ModifyLicenseRequest extends AbstractModel
{
    /**
     * @var string License 功能模块 Id
     */
    public $LicenseId;

    /**
     * @var string 资源包 Id
     */
    public $ResourceId;

    /**
     * @param string $LicenseId License 功能模块 Id
     * @param string $ResourceId 资源包 Id
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
        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
