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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLicenseRecord请求参数结构体
 *
 * @method integer getLicenseId() 获取授权ID ,可以用授权订单列表获取.
 * @method void setLicenseId(integer $LicenseId) 设置授权ID ,可以用授权订单列表获取.
 * @method integer getLicenseType() 获取授权类型
 * @method void setLicenseType(integer $LicenseType) 设置授权类型
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 */
class DeleteLicenseRecordRequest extends AbstractModel
{
    /**
     * @var integer 授权ID ,可以用授权订单列表获取.
     */
    public $LicenseId;

    /**
     * @var integer 授权类型
     */
    public $LicenseType;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @param integer $LicenseId 授权ID ,可以用授权订单列表获取.
     * @param integer $LicenseType 授权类型
     * @param string $ResourceId 资源ID
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

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
