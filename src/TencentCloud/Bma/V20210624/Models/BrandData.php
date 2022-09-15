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
 * 商标信息
 *
 * @method string getBrandName() 获取xxx
 * @method void setBrandName(string $BrandName) 设置xxx
 * @method string getBrandCertificateName() 获取xxx
 * @method void setBrandCertificateName(string $BrandCertificateName) 设置xxx
 * @method integer getBrandStatus() 获取xxx
 * @method void setBrandStatus(integer $BrandStatus) 设置xxx
 * @method string getBrandNote() 获取xxx
 * @method void setBrandNote(string $BrandNote) 设置xxx
 * @method string getTransferName() 获取xxx
 * @method void setTransferName(string $TransferName) 设置xxx
 * @method integer getTransferStatus() 获取xxx
 * @method void setTransferStatus(integer $TransferStatus) 设置xxx
 * @method string getTransferNote() 获取xxx
 * @method void setTransferNote(string $TransferNote) 设置xxx
 */
class BrandData extends AbstractModel
{
    /**
     * @var string xxx
     */
    public $BrandName;

    /**
     * @var string xxx
     */
    public $BrandCertificateName;

    /**
     * @var integer xxx
     */
    public $BrandStatus;

    /**
     * @var string xxx
     */
    public $BrandNote;

    /**
     * @var string xxx
     */
    public $TransferName;

    /**
     * @var integer xxx
     */
    public $TransferStatus;

    /**
     * @var string xxx
     */
    public $TransferNote;

    /**
     * @param string $BrandName xxx
     * @param string $BrandCertificateName xxx
     * @param integer $BrandStatus xxx
     * @param string $BrandNote xxx
     * @param string $TransferName xxx
     * @param integer $TransferStatus xxx
     * @param string $TransferNote xxx
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

        if (array_key_exists("BrandCertificateName",$param) and $param["BrandCertificateName"] !== null) {
            $this->BrandCertificateName = $param["BrandCertificateName"];
        }

        if (array_key_exists("BrandStatus",$param) and $param["BrandStatus"] !== null) {
            $this->BrandStatus = $param["BrandStatus"];
        }

        if (array_key_exists("BrandNote",$param) and $param["BrandNote"] !== null) {
            $this->BrandNote = $param["BrandNote"];
        }

        if (array_key_exists("TransferName",$param) and $param["TransferName"] !== null) {
            $this->TransferName = $param["TransferName"];
        }

        if (array_key_exists("TransferStatus",$param) and $param["TransferStatus"] !== null) {
            $this->TransferStatus = $param["TransferStatus"];
        }

        if (array_key_exists("TransferNote",$param) and $param["TransferNote"] !== null) {
            $this->TransferNote = $param["TransferNote"];
        }
    }
}
