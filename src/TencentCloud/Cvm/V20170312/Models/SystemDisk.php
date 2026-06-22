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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了操作系统所在块设备即系统盘的信息
 *
 * @method string getDiskType() 获取<p>系统盘类型。系统盘类型限制详见<a href="https://cloud.tencent.com/document/product/213/4952">存储概述</a>。取值范围：<br></p><li>LOCAL_BASIC：本地硬盘</li><li>LOCAL_SSD：本地SSD硬盘</li><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><li>CLOUD_HSSD：增强型SSD云硬盘</li><li>CLOUD_TSSD：极速型SSD云硬盘</li><br>默认取值：当前有库存的硬盘类型。
 * @method void setDiskType(string $DiskType) 设置<p>系统盘类型。系统盘类型限制详见<a href="https://cloud.tencent.com/document/product/213/4952">存储概述</a>。取值范围：<br></p><li>LOCAL_BASIC：本地硬盘</li><li>LOCAL_SSD：本地SSD硬盘</li><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><li>CLOUD_HSSD：增强型SSD云硬盘</li><li>CLOUD_TSSD：极速型SSD云硬盘</li><br>默认取值：当前有库存的硬盘类型。
 * @method string getDiskId() 获取<p>系统盘ID。<br>该参数目前仅用于 <a href="https://cloud.tencent.com/document/product/213/15728">DescribeInstances</a> 等查询类接口的返回参数，不可用于 <a href="https://cloud.tencent.com/document/product/213/15730">RunInstances</a> 等写接口的入参。</p>
 * @method void setDiskId(string $DiskId) 设置<p>系统盘ID。<br>该参数目前仅用于 <a href="https://cloud.tencent.com/document/product/213/15728">DescribeInstances</a> 等查询类接口的返回参数，不可用于 <a href="https://cloud.tencent.com/document/product/213/15730">RunInstances</a> 等写接口的入参。</p>
 * @method integer getDiskSize() 获取<p>系统盘大小，单位：GiB。默认值为 50</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>系统盘大小，单位：GiB。默认值为 50</p>
 * @method string getCdcId() 获取<p>所属的独享集群ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdcId(string $CdcId) 设置<p>所属的独享集群ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskName() 获取<p>磁盘名称，长度不超过128 个字符。</p>
 * @method void setDiskName(string $DiskName) 设置<p>磁盘名称，长度不超过128 个字符。</p>
 * @method boolean getEncrypt() 获取<p>系统盘是否加密。取值范围：true：加密false：不加密默认取值：false该参数目前仅用于 RunInstances 接口。当前参数灰度中。</p>
 * @method void setEncrypt(boolean $Encrypt) 设置<p>系统盘是否加密。取值范围：true：加密false：不加密默认取值：false该参数目前仅用于 RunInstances 接口。当前参数灰度中。</p>
 * @method string getKmsKeyId() 获取<p>自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。该参数目前仅用于 RunInstances 接口。当前参数灰度中。</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。该参数目前仅用于 RunInstances 接口。当前参数灰度中。</p>
 */
class SystemDisk extends AbstractModel
{
    /**
     * @var string <p>系统盘类型。系统盘类型限制详见<a href="https://cloud.tencent.com/document/product/213/4952">存储概述</a>。取值范围：<br></p><li>LOCAL_BASIC：本地硬盘</li><li>LOCAL_SSD：本地SSD硬盘</li><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><li>CLOUD_HSSD：增强型SSD云硬盘</li><li>CLOUD_TSSD：极速型SSD云硬盘</li><br>默认取值：当前有库存的硬盘类型。
     */
    public $DiskType;

    /**
     * @var string <p>系统盘ID。<br>该参数目前仅用于 <a href="https://cloud.tencent.com/document/product/213/15728">DescribeInstances</a> 等查询类接口的返回参数，不可用于 <a href="https://cloud.tencent.com/document/product/213/15730">RunInstances</a> 等写接口的入参。</p>
     */
    public $DiskId;

    /**
     * @var integer <p>系统盘大小，单位：GiB。默认值为 50</p>
     */
    public $DiskSize;

    /**
     * @var string <p>所属的独享集群ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdcId;

    /**
     * @var string <p>磁盘名称，长度不超过128 个字符。</p>
     */
    public $DiskName;

    /**
     * @var boolean <p>系统盘是否加密。取值范围：true：加密false：不加密默认取值：false该参数目前仅用于 RunInstances 接口。当前参数灰度中。</p>
     */
    public $Encrypt;

    /**
     * @var string <p>自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。该参数目前仅用于 RunInstances 接口。当前参数灰度中。</p>
     */
    public $KmsKeyId;

    /**
     * @param string $DiskType <p>系统盘类型。系统盘类型限制详见<a href="https://cloud.tencent.com/document/product/213/4952">存储概述</a>。取值范围：<br></p><li>LOCAL_BASIC：本地硬盘</li><li>LOCAL_SSD：本地SSD硬盘</li><li>CLOUD_BASIC：普通云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><li>CLOUD_HSSD：增强型SSD云硬盘</li><li>CLOUD_TSSD：极速型SSD云硬盘</li><br>默认取值：当前有库存的硬盘类型。
     * @param string $DiskId <p>系统盘ID。<br>该参数目前仅用于 <a href="https://cloud.tencent.com/document/product/213/15728">DescribeInstances</a> 等查询类接口的返回参数，不可用于 <a href="https://cloud.tencent.com/document/product/213/15730">RunInstances</a> 等写接口的入参。</p>
     * @param integer $DiskSize <p>系统盘大小，单位：GiB。默认值为 50</p>
     * @param string $CdcId <p>所属的独享集群ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskName <p>磁盘名称，长度不超过128 个字符。</p>
     * @param boolean $Encrypt <p>系统盘是否加密。取值范围：true：加密false：不加密默认取值：false该参数目前仅用于 RunInstances 接口。当前参数灰度中。</p>
     * @param string $KmsKeyId <p>自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。该参数目前仅用于 RunInstances 接口。当前参数灰度中。</p>
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

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }
    }
}
