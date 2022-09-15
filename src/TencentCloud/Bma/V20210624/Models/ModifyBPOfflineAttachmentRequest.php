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
 * ModifyBPOfflineAttachment请求参数结构体
 *
 * @method string getLicenseName() 获取xx
 * @method void setLicenseName(string $LicenseName) 设置xx
 * @method string getAuthorizationName() 获取xx
 * @method void setAuthorizationName(string $AuthorizationName) 设置xx
 * @method string getBrandName() 获取xx
 * @method void setBrandName(string $BrandName) 设置xx
 * @method string getBrandCertificateName() 获取xx
 * @method void setBrandCertificateName(string $BrandCertificateName) 设置xx
 * @method string getTransferName() 获取xx
 * @method void setTransferName(string $TransferName) 设置xx
 */
class ModifyBPOfflineAttachmentRequest extends AbstractModel
{
    /**
     * @var string xx
     */
    public $LicenseName;

    /**
     * @var string xx
     */
    public $AuthorizationName;

    /**
     * @var string xx
     */
    public $BrandName;

    /**
     * @var string xx
     */
    public $BrandCertificateName;

    /**
     * @var string xx
     */
    public $TransferName;

    /**
     * @param string $LicenseName xx
     * @param string $AuthorizationName xx
     * @param string $BrandName xx
     * @param string $BrandCertificateName xx
     * @param string $TransferName xx
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
        if (array_key_exists("LicenseName",$param) and $param["LicenseName"] !== null) {
            $this->LicenseName = $param["LicenseName"];
        }

        if (array_key_exists("AuthorizationName",$param) and $param["AuthorizationName"] !== null) {
            $this->AuthorizationName = $param["AuthorizationName"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("BrandCertificateName",$param) and $param["BrandCertificateName"] !== null) {
            $this->BrandCertificateName = $param["BrandCertificateName"];
        }

        if (array_key_exists("TransferName",$param) and $param["TransferName"] !== null) {
            $this->TransferName = $param["TransferName"];
        }
    }
}
