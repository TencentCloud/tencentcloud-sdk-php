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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了k8s节点数据盘相关配置与信息。
 *
 * @method string getDiskType() 获取<p>云盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskType(string $DiskType) 设置<p>云盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSystem() 获取<p>文件系统(ext3/ext4/xfs)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSystem(string $FileSystem) 设置<p>文件系统(ext3/ext4/xfs)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskSize() 获取<p>云盘大小(G）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(integer $DiskSize) 设置<p>云盘大小(G）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoFormatAndMount() 获取<p>是否自动化格式盘并挂载</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoFormatAndMount(boolean $AutoFormatAndMount) 设置<p>是否自动化格式盘并挂载</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskPartition() 获取<p>挂载设备名或分区名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskPartition(string $DiskPartition) 设置<p>挂载设备名或分区名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMountTarget() 获取<p>挂载目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMountTarget(string $MountTarget) 设置<p>挂载目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncrypt() 获取<p>传入该参数用于创建加密云盘，取值固定为ENCRYPT</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncrypt(string $Encrypt) 设置<p>传入该参数用于创建加密云盘，取值固定为ENCRYPT</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsKeyId() 获取<p>购买加密盘时自定义密钥，当传入该参数时, Encrypt入参不为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>购买加密盘时自定义密钥，当传入该参数时, Encrypt入参不为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotId() 获取<p>快照ID，如果传入则根据此快照创建云硬盘，快照类型必须为数据盘快照</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotId(string $SnapshotId) 设置<p>快照ID，如果传入则根据此快照创建云硬盘，快照类型必须为数据盘快照</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getThroughputPerformance() 获取<p>云硬盘性能，单位：MB/s。使用此参数可给云硬盘购买额外的性能</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置<p>云硬盘性能，单位：MB/s。使用此参数可给云硬盘购买额外的性能</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataDisk extends AbstractModel
{
    /**
     * @var string <p>云盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskType;

    /**
     * @var string <p>文件系统(ext3/ext4/xfs)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSystem;

    /**
     * @var integer <p>云盘大小(G）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var boolean <p>是否自动化格式盘并挂载</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoFormatAndMount;

    /**
     * @var string <p>挂载设备名或分区名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskPartition;

    /**
     * @var string <p>挂载目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MountTarget;

    /**
     * @var string <p>传入该参数用于创建加密云盘，取值固定为ENCRYPT</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Encrypt;

    /**
     * @var string <p>购买加密盘时自定义密钥，当传入该参数时, Encrypt入参不为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsKeyId;

    /**
     * @var string <p>快照ID，如果传入则根据此快照创建云硬盘，快照类型必须为数据盘快照</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotId;

    /**
     * @var integer <p>云硬盘性能，单位：MB/s。使用此参数可给云硬盘购买额外的性能</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThroughputPerformance;

    /**
     * @param string $DiskType <p>云盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSystem <p>文件系统(ext3/ext4/xfs)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskSize <p>云盘大小(G）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoFormatAndMount <p>是否自动化格式盘并挂载</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskPartition <p>挂载设备名或分区名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MountTarget <p>挂载目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Encrypt <p>传入该参数用于创建加密云盘，取值固定为ENCRYPT</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsKeyId <p>购买加密盘时自定义密钥，当传入该参数时, Encrypt入参不为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotId <p>快照ID，如果传入则根据此快照创建云硬盘，快照类型必须为数据盘快照</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ThroughputPerformance <p>云硬盘性能，单位：MB/s。使用此参数可给云硬盘购买额外的性能</p>
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

        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = $param["FileSystem"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("AutoFormatAndMount",$param) and $param["AutoFormatAndMount"] !== null) {
            $this->AutoFormatAndMount = $param["AutoFormatAndMount"];
        }

        if (array_key_exists("DiskPartition",$param) and $param["DiskPartition"] !== null) {
            $this->DiskPartition = $param["DiskPartition"];
        }

        if (array_key_exists("MountTarget",$param) and $param["MountTarget"] !== null) {
            $this->MountTarget = $param["MountTarget"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }
    }
}
