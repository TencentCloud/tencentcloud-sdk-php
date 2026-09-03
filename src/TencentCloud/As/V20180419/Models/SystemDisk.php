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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 启动配置的系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 *
 * @method string getDiskType() 获取<p>系统盘类型。系统盘类型限制详见<a href="https://cloud.tencent.com/document/product/362/2353">云硬盘类型</a>。取值范围</p><li>LOCAL_BASIC：本地硬盘</li><li>LOCAL_SSD：本地SSD硬盘</li><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><li>CLOUD_HSSD：增强型SSD云硬盘</li><li>CLOUD_TSSD：极速型SSD云硬盘</li><li>默认取值：CLOUD_PREMIUM。</li>
 * @method void setDiskType(string $DiskType) 设置<p>系统盘类型。系统盘类型限制详见<a href="https://cloud.tencent.com/document/product/362/2353">云硬盘类型</a>。取值范围</p><li>LOCAL_BASIC：本地硬盘</li><li>LOCAL_SSD：本地SSD硬盘</li><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><li>CLOUD_HSSD：增强型SSD云硬盘</li><li>CLOUD_TSSD：极速型SSD云硬盘</li><li>默认取值：CLOUD_PREMIUM。</li>
 * @method integer getDiskSize() 获取<p>系统盘大小，单位：GB。默认值为 50</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>系统盘大小，单位：GB。默认值为 50</p>
 * @method boolean getEncrypt() 获取<p>是否加密系统盘。TRUE 表示加密，FALSE 表示不加密；具体盘型、地域及 KMS 规则由 CVM 校验。</p>
 * @method void setEncrypt(boolean $Encrypt) 设置<p>是否加密系统盘。TRUE 表示加密，FALSE 表示不加密；具体盘型、地域及 KMS 规则由 CVM 校验。</p>
 * @method string getKmsKeyId() 获取<p>系统盘加密使用的 KMS 密钥 ID。密钥有效性、权限以及与盘型和地域的适配性由 CVM 校验。</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>系统盘加密使用的 KMS 密钥 ID。密钥有效性、权限以及与盘型和地域的适配性由 CVM 校验。</p>
 */
class SystemDisk extends AbstractModel
{
    /**
     * @var string <p>系统盘类型。系统盘类型限制详见<a href="https://cloud.tencent.com/document/product/362/2353">云硬盘类型</a>。取值范围</p><li>LOCAL_BASIC：本地硬盘</li><li>LOCAL_SSD：本地SSD硬盘</li><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><li>CLOUD_HSSD：增强型SSD云硬盘</li><li>CLOUD_TSSD：极速型SSD云硬盘</li><li>默认取值：CLOUD_PREMIUM。</li>
     */
    public $DiskType;

    /**
     * @var integer <p>系统盘大小，单位：GB。默认值为 50</p>
     */
    public $DiskSize;

    /**
     * @var boolean <p>是否加密系统盘。TRUE 表示加密，FALSE 表示不加密；具体盘型、地域及 KMS 规则由 CVM 校验。</p>
     */
    public $Encrypt;

    /**
     * @var string <p>系统盘加密使用的 KMS 密钥 ID。密钥有效性、权限以及与盘型和地域的适配性由 CVM 校验。</p>
     */
    public $KmsKeyId;

    /**
     * @param string $DiskType <p>系统盘类型。系统盘类型限制详见<a href="https://cloud.tencent.com/document/product/362/2353">云硬盘类型</a>。取值范围</p><li>LOCAL_BASIC：本地硬盘</li><li>LOCAL_SSD：本地SSD硬盘</li><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><li>CLOUD_HSSD：增强型SSD云硬盘</li><li>CLOUD_TSSD：极速型SSD云硬盘</li><li>默认取值：CLOUD_PREMIUM。</li>
     * @param integer $DiskSize <p>系统盘大小，单位：GB。默认值为 50</p>
     * @param boolean $Encrypt <p>是否加密系统盘。TRUE 表示加密，FALSE 表示不加密；具体盘型、地域及 KMS 规则由 CVM 校验。</p>
     * @param string $KmsKeyId <p>系统盘加密使用的 KMS 密钥 ID。密钥有效性、权限以及与盘型和地域的适配性由 CVM 校验。</p>
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }
    }
}
