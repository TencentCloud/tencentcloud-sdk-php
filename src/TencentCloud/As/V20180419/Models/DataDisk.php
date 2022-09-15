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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 启动配置的数据盘配置信息。若不指定该参数，则默认不购买数据盘，当前仅支持购买的时候指定一个数据盘。
 *
 * @method string getDiskType() 获取数据盘类型。数据盘类型限制详见[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)。取值范围：<br><li>LOCAL_BASIC：本地硬盘<br><li>LOCAL_SSD：本地SSD硬盘<br><li>CLOUD_BASIC：普通云硬盘<br><li>CLOUD_PREMIUM：高性能云硬盘<br><li>CLOUD_SSD：SSD云硬盘<br><li>CLOUD_HSSD：增强型SSD云硬盘<br><li>CLOUD_TSSD：极速型SSD云硬盘<br><br>默认取值与系统盘类型（SystemDisk.DiskType）保持一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskType(string $DiskType) 设置数据盘类型。数据盘类型限制详见[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)。取值范围：<br><li>LOCAL_BASIC：本地硬盘<br><li>LOCAL_SSD：本地SSD硬盘<br><li>CLOUD_BASIC：普通云硬盘<br><li>CLOUD_PREMIUM：高性能云硬盘<br><li>CLOUD_SSD：SSD云硬盘<br><li>CLOUD_HSSD：增强型SSD云硬盘<br><li>CLOUD_TSSD：极速型SSD云硬盘<br><br>默认取值与系统盘类型（SystemDisk.DiskType）保持一致。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskSize() 获取数据盘大小，单位：GB。最小调整步长为10G，不同数据盘类型取值范围不同，具体限制详见：[CVM实例配置](https://cloud.tencent.com/document/product/213/2177)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(integer $DiskSize) 设置数据盘大小，单位：GB。最小调整步长为10G，不同数据盘类型取值范围不同，具体限制详见：[CVM实例配置](https://cloud.tencent.com/document/product/213/2177)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotId() 获取数据盘快照 ID，类似 `snap-l8psqwnt`。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotId(string $SnapshotId) 设置数据盘快照 ID，类似 `snap-l8psqwnt`。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteWithInstance() 获取数据盘是否随子机销毁。取值范围：<br><li>TRUE：子机销毁时，销毁数据盘，只支持按小时后付费云盘<br><li>FALSE：子机销毁时，保留数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置数据盘是否随子机销毁。取值范围：<br><li>TRUE：子机销毁时，销毁数据盘，只支持按小时后付费云盘<br><li>FALSE：子机销毁时，保留数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEncrypt() 获取数据盘是否加密。取值范围：<br><li>TRUE：加密<br><li>FALSE：不加密
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncrypt(boolean $Encrypt) 设置数据盘是否加密。取值范围：<br><li>TRUE：加密<br><li>FALSE：不加密
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getThroughputPerformance() 获取云硬盘性能，单位：MB/s。使用此参数可给云硬盘购买额外的性能，功能介绍和类型限制详见：[增强型 SSD 云硬盘额外性能说明](https://cloud.tencent.com/document/product/362/51896#.E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96.E6.80.A7.E8.83.BD)。
当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）且 需容量 > 460GB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置云硬盘性能，单位：MB/s。使用此参数可给云硬盘购买额外的性能，功能介绍和类型限制详见：[增强型 SSD 云硬盘额外性能说明](https://cloud.tencent.com/document/product/362/51896#.E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96.E6.80.A7.E8.83.BD)。
当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）且 需容量 > 460GB。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataDisk extends AbstractModel
{
    /**
     * @var string 数据盘类型。数据盘类型限制详见[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)。取值范围：<br><li>LOCAL_BASIC：本地硬盘<br><li>LOCAL_SSD：本地SSD硬盘<br><li>CLOUD_BASIC：普通云硬盘<br><li>CLOUD_PREMIUM：高性能云硬盘<br><li>CLOUD_SSD：SSD云硬盘<br><li>CLOUD_HSSD：增强型SSD云硬盘<br><li>CLOUD_TSSD：极速型SSD云硬盘<br><br>默认取值与系统盘类型（SystemDisk.DiskType）保持一致。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskType;

    /**
     * @var integer 数据盘大小，单位：GB。最小调整步长为10G，不同数据盘类型取值范围不同，具体限制详见：[CVM实例配置](https://cloud.tencent.com/document/product/213/2177)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var string 数据盘快照 ID，类似 `snap-l8psqwnt`。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotId;

    /**
     * @var boolean 数据盘是否随子机销毁。取值范围：<br><li>TRUE：子机销毁时，销毁数据盘，只支持按小时后付费云盘<br><li>FALSE：子机销毁时，保留数据盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteWithInstance;

    /**
     * @var boolean 数据盘是否加密。取值范围：<br><li>TRUE：加密<br><li>FALSE：不加密
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Encrypt;

    /**
     * @var integer 云硬盘性能，单位：MB/s。使用此参数可给云硬盘购买额外的性能，功能介绍和类型限制详见：[增强型 SSD 云硬盘额外性能说明](https://cloud.tencent.com/document/product/362/51896#.E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96.E6.80.A7.E8.83.BD)。
当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）且 需容量 > 460GB。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThroughputPerformance;

    /**
     * @param string $DiskType 数据盘类型。数据盘类型限制详见[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)。取值范围：<br><li>LOCAL_BASIC：本地硬盘<br><li>LOCAL_SSD：本地SSD硬盘<br><li>CLOUD_BASIC：普通云硬盘<br><li>CLOUD_PREMIUM：高性能云硬盘<br><li>CLOUD_SSD：SSD云硬盘<br><li>CLOUD_HSSD：增强型SSD云硬盘<br><li>CLOUD_TSSD：极速型SSD云硬盘<br><br>默认取值与系统盘类型（SystemDisk.DiskType）保持一致。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskSize 数据盘大小，单位：GB。最小调整步长为10G，不同数据盘类型取值范围不同，具体限制详见：[CVM实例配置](https://cloud.tencent.com/document/product/213/2177)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotId 数据盘快照 ID，类似 `snap-l8psqwnt`。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteWithInstance 数据盘是否随子机销毁。取值范围：<br><li>TRUE：子机销毁时，销毁数据盘，只支持按小时后付费云盘<br><li>FALSE：子机销毁时，保留数据盘
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Encrypt 数据盘是否加密。取值范围：<br><li>TRUE：加密<br><li>FALSE：不加密
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ThroughputPerformance 云硬盘性能，单位：MB/s。使用此参数可给云硬盘购买额外的性能，功能介绍和类型限制详见：[增强型 SSD 云硬盘额外性能说明](https://cloud.tencent.com/document/product/362/51896#.E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96.E6.80.A7.E8.83.BD)。
当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）且 需容量 > 460GB。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
