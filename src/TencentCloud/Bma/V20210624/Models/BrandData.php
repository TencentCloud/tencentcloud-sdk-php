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
 * @method string getBrandName() 获取商标名称
 * @method void setBrandName(string $BrandName) 设置商标名称
 * @method string getBrandCertificateName() 获取商标证明
 * @method void setBrandCertificateName(string $BrandCertificateName) 设置商标证明
 * @method integer getBrandStatus() 获取商标审核状态 1-审核中 2-审核未通过 3-审核通过
 * @method void setBrandStatus(integer $BrandStatus) 设置商标审核状态 1-审核中 2-审核未通过 3-审核通过
 * @method string getBrandNote() 获取审核说明
 * @method void setBrandNote(string $BrandNote) 设置审核说明
 * @method string getTransferName() 获取商标转让证明
 * @method void setTransferName(string $TransferName) 设置商标转让证明
 * @method integer getTransferStatus() 获取商标转让证明审核状态
 * @method void setTransferStatus(integer $TransferStatus) 设置商标转让证明审核状态
 * @method string getTransferNote() 获取审核说明 1-审核中 2-审核未通过 3-审核通过
 * @method void setTransferNote(string $TransferNote) 设置审核说明 1-审核中 2-审核未通过 3-审核通过
 */
class BrandData extends AbstractModel
{
    /**
     * @var string 商标名称
     */
    public $BrandName;

    /**
     * @var string 商标证明
     */
    public $BrandCertificateName;

    /**
     * @var integer 商标审核状态 1-审核中 2-审核未通过 3-审核通过
     */
    public $BrandStatus;

    /**
     * @var string 审核说明
     */
    public $BrandNote;

    /**
     * @var string 商标转让证明
     */
    public $TransferName;

    /**
     * @var integer 商标转让证明审核状态
     */
    public $TransferStatus;

    /**
     * @var string 审核说明 1-审核中 2-审核未通过 3-审核通过
     */
    public $TransferNote;

    /**
     * @param string $BrandName 商标名称
     * @param string $BrandCertificateName 商标证明
     * @param integer $BrandStatus 商标审核状态 1-审核中 2-审核未通过 3-审核通过
     * @param string $BrandNote 审核说明
     * @param string $TransferName 商标转让证明
     * @param integer $TransferStatus 商标转让证明审核状态
     * @param string $TransferNote 审核说明 1-审核中 2-审核未通过 3-审核通过
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
