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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间数据盘配置
 *
 * @method string getDiskType() 获取数据盘类型。数据盘类型限制详见[存储概述](https://cloud.tencent.com/document/product/213/4952)。取值范围：<br />
<li>
  LOCAL_BASIC：本地硬盘<br />
  <li>
    LOCAL_SSD：本地SSD硬盘<br />
    <li>
      LOCAL_NVME：本地NVME硬盘，与InstanceType强相关，不支持指定<br />
      <li>
        LOCAL_PRO：本地HDD硬盘，与InstanceType强相关，不支持指定<br />
        <li>
          CLOUD_BASIC：普通云硬盘<br />
          <li>
            CLOUD_PREMIUM：高性能云硬盘<br />
            <li>
              CLOUD_SSD：SSD云硬盘<br />
              <li>
                CLOUD_HSSD：增强型SSD云硬盘<br />
                <li>
                  CLOUD_TSSD：极速型SSD云硬盘<br />
                  <li>
                    CLOUD_BSSD：通用型SSD云硬盘<br /><br />默认取值：LOCAL_BASIC。<br /><br />该参数对`ResizeInstanceDisk`接口无效。
                  </li>
                </li>
              </li>
            </li>
          </li>
        </li>
      </li>
    </li>
  </li>
</li>
 * @method void setDiskType(string $DiskType) 设置数据盘类型。数据盘类型限制详见[存储概述](https://cloud.tencent.com/document/product/213/4952)。取值范围：<br />
<li>
  LOCAL_BASIC：本地硬盘<br />
  <li>
    LOCAL_SSD：本地SSD硬盘<br />
    <li>
      LOCAL_NVME：本地NVME硬盘，与InstanceType强相关，不支持指定<br />
      <li>
        LOCAL_PRO：本地HDD硬盘，与InstanceType强相关，不支持指定<br />
        <li>
          CLOUD_BASIC：普通云硬盘<br />
          <li>
            CLOUD_PREMIUM：高性能云硬盘<br />
            <li>
              CLOUD_SSD：SSD云硬盘<br />
              <li>
                CLOUD_HSSD：增强型SSD云硬盘<br />
                <li>
                  CLOUD_TSSD：极速型SSD云硬盘<br />
                  <li>
                    CLOUD_BSSD：通用型SSD云硬盘<br /><br />默认取值：LOCAL_BASIC。<br /><br />该参数对`ResizeInstanceDisk`接口无效。
                  </li>
                </li>
              </li>
            </li>
          </li>
        </li>
      </li>
    </li>
  </li>
</li>
 * @method string getDiskId() 获取数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskId(string $DiskId) 设置数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskSize() 获取数据盘大小，单位：GB。最小调整步长为10G，不同数据盘类型取值范围不同，具体限制详见：[存储概述](https://cloud.tencent.com/document/product/213/4952)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
 * @method void setDiskSize(integer $DiskSize) 设置数据盘大小，单位：GB。最小调整步长为10G，不同数据盘类型取值范围不同，具体限制详见：[存储概述](https://cloud.tencent.com/document/product/213/4952)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
 * @method boolean getDeleteWithInstance() 获取数据盘是否随子机销毁。取值范围：
<li>TRUE：子机销毁时，销毁数据盘，只支持按小时后付费云盘</li>
<li>
  FALSE：子机销毁时，保留数据盘<br />
  默认取值：TRUE<br />
  该参数目前仅用于 `RunInstances` 接口。
</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置数据盘是否随子机销毁。取值范围：
<li>TRUE：子机销毁时，销毁数据盘，只支持按小时后付费云盘</li>
<li>
  FALSE：子机销毁时，保留数据盘<br />
  默认取值：TRUE<br />
  该参数目前仅用于 `RunInstances` 接口。
</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotId() 获取数据盘快照ID。选择的数据盘快照大小需小于数据盘大小。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotId(string $SnapshotId) 设置数据盘快照ID。选择的数据盘快照大小需小于数据盘大小。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEncrypt() 获取数据盘是加密。取值范围：
<li>true：加密</li>
<li>
  false：不加密<br />
  默认取值：false<br />
  该参数目前仅用于 `RunInstances` 接口。
</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncrypt(boolean $Encrypt) 设置数据盘是加密。取值范围：
<li>true：加密</li>
<li>
  false：不加密<br />
  默认取值：false<br />
  该参数目前仅用于 `RunInstances` 接口。
</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsKeyId() 获取自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。

该参数目前仅用于 `CreateWorkspaces` 接口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyId(string $KmsKeyId) 设置自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。

该参数目前仅用于 `CreateWorkspaces` 接口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getThroughputPerformance() 获取云硬盘性能，单位：MB/s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置云硬盘性能，单位：MB/s
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getBurstPerformance() 获取突发性能

注：内测中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBurstPerformance(boolean $BurstPerformance) 设置突发性能

注：内测中。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpaceDataDisk extends AbstractModel
{
    /**
     * @var string 数据盘类型。数据盘类型限制详见[存储概述](https://cloud.tencent.com/document/product/213/4952)。取值范围：<br />
<li>
  LOCAL_BASIC：本地硬盘<br />
  <li>
    LOCAL_SSD：本地SSD硬盘<br />
    <li>
      LOCAL_NVME：本地NVME硬盘，与InstanceType强相关，不支持指定<br />
      <li>
        LOCAL_PRO：本地HDD硬盘，与InstanceType强相关，不支持指定<br />
        <li>
          CLOUD_BASIC：普通云硬盘<br />
          <li>
            CLOUD_PREMIUM：高性能云硬盘<br />
            <li>
              CLOUD_SSD：SSD云硬盘<br />
              <li>
                CLOUD_HSSD：增强型SSD云硬盘<br />
                <li>
                  CLOUD_TSSD：极速型SSD云硬盘<br />
                  <li>
                    CLOUD_BSSD：通用型SSD云硬盘<br /><br />默认取值：LOCAL_BASIC。<br /><br />该参数对`ResizeInstanceDisk`接口无效。
                  </li>
                </li>
              </li>
            </li>
          </li>
        </li>
      </li>
    </li>
  </li>
</li>
     */
    public $DiskType;

    /**
     * @var string 数据盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskId;

    /**
     * @var integer 数据盘大小，单位：GB。最小调整步长为10G，不同数据盘类型取值范围不同，具体限制详见：[存储概述](https://cloud.tencent.com/document/product/213/4952)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
     */
    public $DiskSize;

    /**
     * @var boolean 数据盘是否随子机销毁。取值范围：
<li>TRUE：子机销毁时，销毁数据盘，只支持按小时后付费云盘</li>
<li>
  FALSE：子机销毁时，保留数据盘<br />
  默认取值：TRUE<br />
  该参数目前仅用于 `RunInstances` 接口。
</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteWithInstance;

    /**
     * @var string 数据盘快照ID。选择的数据盘快照大小需小于数据盘大小。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotId;

    /**
     * @var boolean 数据盘是加密。取值范围：
<li>true：加密</li>
<li>
  false：不加密<br />
  默认取值：false<br />
  该参数目前仅用于 `RunInstances` 接口。
</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Encrypt;

    /**
     * @var string 自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。

该参数目前仅用于 `CreateWorkspaces` 接口。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyId;

    /**
     * @var integer 云硬盘性能，单位：MB/s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThroughputPerformance;

    /**
     * @var boolean 突发性能

注：内测中。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BurstPerformance;

    /**
     * @param string $DiskType 数据盘类型。数据盘类型限制详见[存储概述](https://cloud.tencent.com/document/product/213/4952)。取值范围：<br />
<li>
  LOCAL_BASIC：本地硬盘<br />
  <li>
    LOCAL_SSD：本地SSD硬盘<br />
    <li>
      LOCAL_NVME：本地NVME硬盘，与InstanceType强相关，不支持指定<br />
      <li>
        LOCAL_PRO：本地HDD硬盘，与InstanceType强相关，不支持指定<br />
        <li>
          CLOUD_BASIC：普通云硬盘<br />
          <li>
            CLOUD_PREMIUM：高性能云硬盘<br />
            <li>
              CLOUD_SSD：SSD云硬盘<br />
              <li>
                CLOUD_HSSD：增强型SSD云硬盘<br />
                <li>
                  CLOUD_TSSD：极速型SSD云硬盘<br />
                  <li>
                    CLOUD_BSSD：通用型SSD云硬盘<br /><br />默认取值：LOCAL_BASIC。<br /><br />该参数对`ResizeInstanceDisk`接口无效。
                  </li>
                </li>
              </li>
            </li>
          </li>
        </li>
      </li>
    </li>
  </li>
</li>
     * @param string $DiskId 数据盘
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskSize 数据盘大小，单位：GB。最小调整步长为10G，不同数据盘类型取值范围不同，具体限制详见：[存储概述](https://cloud.tencent.com/document/product/213/4952)。默认值为0，表示不购买数据盘。更多限制详见产品文档。
     * @param boolean $DeleteWithInstance 数据盘是否随子机销毁。取值范围：
<li>TRUE：子机销毁时，销毁数据盘，只支持按小时后付费云盘</li>
<li>
  FALSE：子机销毁时，保留数据盘<br />
  默认取值：TRUE<br />
  该参数目前仅用于 `RunInstances` 接口。
</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotId 数据盘快照ID。选择的数据盘快照大小需小于数据盘大小。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Encrypt 数据盘是加密。取值范围：
<li>true：加密</li>
<li>
  false：不加密<br />
  默认取值：false<br />
  该参数目前仅用于 `RunInstances` 接口。
</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsKeyId 自定义CMK对应的ID，取值为UUID或者类似kms-abcd1234。用于加密云盘。

该参数目前仅用于 `CreateWorkspaces` 接口。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ThroughputPerformance 云硬盘性能，单位：MB/s
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $BurstPerformance 突发性能

注：内测中。
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

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
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

        if (array_key_exists("BurstPerformance",$param) and $param["BurstPerformance"] !== null) {
            $this->BurstPerformance = $param["BurstPerformance"];
        }
    }
}
