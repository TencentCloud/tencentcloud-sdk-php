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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了数据盘的信息
 *
 * @method integer getDiskSize() 获取数据盘大小，单位：GiB。最小调整步长为10GiB，不同数据盘类型取值范围不同，具体限制详见：[存储概述](https://cloud.tencent.com/document/product/213/4952)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
 * @method void setDiskSize(integer $DiskSize) 设置数据盘大小，单位：GiB。最小调整步长为10GiB，不同数据盘类型取值范围不同，具体限制详见：[存储概述](https://cloud.tencent.com/document/product/213/4952)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
 * @method string getDiskType() 获取数据盘类型。数据盘类型限制详见[存储概述](https://cloud.tencent.com/document/product/213/4952)。取值范围：<br /><li>LOCAL_BASIC：本地硬盘 </li> <li>LOCAL_SSD：本地SSD硬盘</li><li>LOCAL_NVME：本地NVME硬盘，与InstanceType强相关，不支持指定</li><li>LOCAL_PRO：本地HDD硬盘，与InstanceType强相关，不支持指定</li><li>CLOUD_BASIC：普通云硬盘</li><li> CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li> CLOUD_HSSD：增强型SSD云硬盘</li> <li>CLOUD_TSSD：极速型SSD云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><br />默认取值：LOCAL_BASIC<br/><br />该参数对`ResizeInstanceDisk`接口无效。
 * @method void setDiskType(string $DiskType) 设置数据盘类型。数据盘类型限制详见[存储概述](https://cloud.tencent.com/document/product/213/4952)。取值范围：<br /><li>LOCAL_BASIC：本地硬盘 </li> <li>LOCAL_SSD：本地SSD硬盘</li><li>LOCAL_NVME：本地NVME硬盘，与InstanceType强相关，不支持指定</li><li>LOCAL_PRO：本地HDD硬盘，与InstanceType强相关，不支持指定</li><li>CLOUD_BASIC：普通云硬盘</li><li> CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li> CLOUD_HSSD：增强型SSD云硬盘</li> <li>CLOUD_TSSD：极速型SSD云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><br />默认取值：LOCAL_BASIC<br/><br />该参数对`ResizeInstanceDisk`接口无效。
 * @method string getDiskId() 获取数据盘ID。
该参数目前仅用于`DescribeInstances`等查询类接口的返回参数，不可用于`RunInstances`等写接口的入参。
 * @method void setDiskId(string $DiskId) 设置数据盘ID。
该参数目前仅用于`DescribeInstances`等查询类接口的返回参数，不可用于`RunInstances`等写接口的入参。
 * @method boolean getDeleteWithInstance() 获取数据盘是否随子机销毁。取值范围：<li>true：子机销毁时，销毁数据盘，只支持按小时后付费云盘</li><li>false：子机销毁时，保留数据盘</li><br/>默认取值：true <br/>该参数目前仅用于 `RunInstances` 接口。
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置数据盘是否随子机销毁。取值范围：<li>true：子机销毁时，销毁数据盘，只支持按小时后付费云盘</li><li>false：子机销毁时，保留数据盘</li><br/>默认取值：true <br/>该参数目前仅用于 `RunInstances` 接口。
 * @method string getSnapshotId() 获取数据盘快照ID。选择的数据盘快照大小需小于数据盘大小。
 * @method void setSnapshotId(string $SnapshotId) 设置数据盘快照ID。选择的数据盘快照大小需小于数据盘大小。
 * @method boolean getEncrypt() 获取数据盘是否加密。取值范围：<li>true：加密</li><li>false：不加密</li><br/>默认取值：false<br/>该参数目前仅用于 `RunInstances` 接口。
 * @method void setEncrypt(boolean $Encrypt) 设置数据盘是否加密。取值范围：<li>true：加密</li><li>false：不加密</li><br/>默认取值：false<br/>该参数目前仅用于 `RunInstances` 接口。
 * @method string getKmsKeyId() 获取自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。

该参数目前仅用于 `RunInstances` 接口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyId(string $KmsKeyId) 设置自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。

该参数目前仅用于 `RunInstances` 接口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getThroughputPerformance() 获取云硬盘性能，单位：MiB/s。使用此参数可给云硬盘购买额外的性能。
当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置云硬盘性能，单位：MiB/s。使用此参数可给云硬盘购买额外的性能。
当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCdcId() 获取所属的独享集群ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdcId(string $CdcId) 设置所属的独享集群ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getBurstPerformance() 获取突发性能
 <b>注：内测中。</b>
 * @method void setBurstPerformance(boolean $BurstPerformance) 设置突发性能
 <b>注：内测中。</b>
 * @method string getDiskName() 获取磁盘名称，长度不超过128 个字符。
 * @method void setDiskName(string $DiskName) 设置磁盘名称，长度不超过128 个字符。
 */
class DataDisk extends AbstractModel
{
    /**
     * @var integer 数据盘大小，单位：GiB。最小调整步长为10GiB，不同数据盘类型取值范围不同，具体限制详见：[存储概述](https://cloud.tencent.com/document/product/213/4952)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
     */
    public $DiskSize;

    /**
     * @var string 数据盘类型。数据盘类型限制详见[存储概述](https://cloud.tencent.com/document/product/213/4952)。取值范围：<br /><li>LOCAL_BASIC：本地硬盘 </li> <li>LOCAL_SSD：本地SSD硬盘</li><li>LOCAL_NVME：本地NVME硬盘，与InstanceType强相关，不支持指定</li><li>LOCAL_PRO：本地HDD硬盘，与InstanceType强相关，不支持指定</li><li>CLOUD_BASIC：普通云硬盘</li><li> CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li> CLOUD_HSSD：增强型SSD云硬盘</li> <li>CLOUD_TSSD：极速型SSD云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><br />默认取值：LOCAL_BASIC<br/><br />该参数对`ResizeInstanceDisk`接口无效。
     */
    public $DiskType;

    /**
     * @var string 数据盘ID。
该参数目前仅用于`DescribeInstances`等查询类接口的返回参数，不可用于`RunInstances`等写接口的入参。
     */
    public $DiskId;

    /**
     * @var boolean 数据盘是否随子机销毁。取值范围：<li>true：子机销毁时，销毁数据盘，只支持按小时后付费云盘</li><li>false：子机销毁时，保留数据盘</li><br/>默认取值：true <br/>该参数目前仅用于 `RunInstances` 接口。
     */
    public $DeleteWithInstance;

    /**
     * @var string 数据盘快照ID。选择的数据盘快照大小需小于数据盘大小。
     */
    public $SnapshotId;

    /**
     * @var boolean 数据盘是否加密。取值范围：<li>true：加密</li><li>false：不加密</li><br/>默认取值：false<br/>该参数目前仅用于 `RunInstances` 接口。
     */
    public $Encrypt;

    /**
     * @var string 自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。

该参数目前仅用于 `RunInstances` 接口。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyId;

    /**
     * @var integer 云硬盘性能，单位：MiB/s。使用此参数可给云硬盘购买额外的性能。
当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThroughputPerformance;

    /**
     * @var string 所属的独享集群ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdcId;

    /**
     * @var boolean 突发性能
 <b>注：内测中。</b>
     */
    public $BurstPerformance;

    /**
     * @var string 磁盘名称，长度不超过128 个字符。
     */
    public $DiskName;

    /**
     * @param integer $DiskSize 数据盘大小，单位：GiB。最小调整步长为10GiB，不同数据盘类型取值范围不同，具体限制详见：[存储概述](https://cloud.tencent.com/document/product/213/4952)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
     * @param string $DiskType 数据盘类型。数据盘类型限制详见[存储概述](https://cloud.tencent.com/document/product/213/4952)。取值范围：<br /><li>LOCAL_BASIC：本地硬盘 </li> <li>LOCAL_SSD：本地SSD硬盘</li><li>LOCAL_NVME：本地NVME硬盘，与InstanceType强相关，不支持指定</li><li>LOCAL_PRO：本地HDD硬盘，与InstanceType强相关，不支持指定</li><li>CLOUD_BASIC：普通云硬盘</li><li> CLOUD_PREMIUM：高性能云硬盘</li><li>CLOUD_SSD：SSD云硬盘</li><li> CLOUD_HSSD：增强型SSD云硬盘</li> <li>CLOUD_TSSD：极速型SSD云硬盘</li><li>CLOUD_BSSD：通用型SSD云硬盘</li><br />默认取值：LOCAL_BASIC<br/><br />该参数对`ResizeInstanceDisk`接口无效。
     * @param string $DiskId 数据盘ID。
该参数目前仅用于`DescribeInstances`等查询类接口的返回参数，不可用于`RunInstances`等写接口的入参。
     * @param boolean $DeleteWithInstance 数据盘是否随子机销毁。取值范围：<li>true：子机销毁时，销毁数据盘，只支持按小时后付费云盘</li><li>false：子机销毁时，保留数据盘</li><br/>默认取值：true <br/>该参数目前仅用于 `RunInstances` 接口。
     * @param string $SnapshotId 数据盘快照ID。选择的数据盘快照大小需小于数据盘大小。
     * @param boolean $Encrypt 数据盘是否加密。取值范围：<li>true：加密</li><li>false：不加密</li><br/>默认取值：false<br/>该参数目前仅用于 `RunInstances` 接口。
     * @param string $KmsKeyId 自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。

该参数目前仅用于 `RunInstances` 接口。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ThroughputPerformance 云硬盘性能，单位：MiB/s。使用此参数可给云硬盘购买额外的性能。
当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CdcId 所属的独享集群ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $BurstPerformance 突发性能
 <b>注：内测中。</b>
     * @param string $DiskName 磁盘名称，长度不超过128 个字符。
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
        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("BurstPerformance",$param) and $param["BurstPerformance"] !== null) {
            $this->BurstPerformance = $param["BurstPerformance"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }
    }
}
