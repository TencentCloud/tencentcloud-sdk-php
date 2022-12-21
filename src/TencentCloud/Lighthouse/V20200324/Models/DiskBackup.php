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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了云硬盘备份点相关信息。
 *
 * @method string getDiskBackupId() 获取云硬盘备份点ID。
 * @method void setDiskBackupId(string $DiskBackupId) 设置云硬盘备份点ID。
 * @method string getDiskUsage() 获取创建此云硬盘备份点的云硬盘类型。取值：<li>DATA_DISK：数据盘</li>
 * @method void setDiskUsage(string $DiskUsage) 设置创建此云硬盘备份点的云硬盘类型。取值：<li>DATA_DISK：数据盘</li>
 * @method string getDiskId() 获取创建此云硬盘备份点的云硬盘 ID。
 * @method void setDiskId(string $DiskId) 设置创建此云硬盘备份点的云硬盘 ID。
 * @method integer getDiskSize() 获取创建此云硬盘备份点的云硬盘大小，单位 GB。
 * @method void setDiskSize(integer $DiskSize) 设置创建此云硬盘备份点的云硬盘大小，单位 GB。
 * @method string getDiskBackupName() 获取云硬盘备份点名称，用户自定义的云硬盘备份点别名。
 * @method void setDiskBackupName(string $DiskBackupName) 设置云硬盘备份点名称，用户自定义的云硬盘备份点别名。
 * @method string getDiskBackupState() 获取云硬盘备份点的状态。取值范围：
<li>NORMAL：正常。 </li>
<li>CREATING：创建中。</li>
<li>ROLLBACKING：回滚中。</li>
<li>DELETING：删除中。</li>
 * @method void setDiskBackupState(string $DiskBackupState) 设置云硬盘备份点的状态。取值范围：
<li>NORMAL：正常。 </li>
<li>CREATING：创建中。</li>
<li>ROLLBACKING：回滚中。</li>
<li>DELETING：删除中。</li>
 * @method integer getPercent() 获取创建或回滚云硬盘备份点进度百分比，成功后此字段取值为 100。
 * @method void setPercent(integer $Percent) 设置创建或回滚云硬盘备份点进度百分比，成功后此字段取值为 100。
 * @method string getLatestOperation() 获取上一次操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperation(string $LatestOperation) 设置上一次操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationState() 获取上一次操作状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationState(string $LatestOperationState) 设置上一次操作状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationRequestId() 获取上一次请求ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationRequestId(string $LatestOperationRequestId) 设置上一次请求ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
 */
class DiskBackup extends AbstractModel
{
    /**
     * @var string 云硬盘备份点ID。
     */
    public $DiskBackupId;

    /**
     * @var string 创建此云硬盘备份点的云硬盘类型。取值：<li>DATA_DISK：数据盘</li>
     */
    public $DiskUsage;

    /**
     * @var string 创建此云硬盘备份点的云硬盘 ID。
     */
    public $DiskId;

    /**
     * @var integer 创建此云硬盘备份点的云硬盘大小，单位 GB。
     */
    public $DiskSize;

    /**
     * @var string 云硬盘备份点名称，用户自定义的云硬盘备份点别名。
     */
    public $DiskBackupName;

    /**
     * @var string 云硬盘备份点的状态。取值范围：
<li>NORMAL：正常。 </li>
<li>CREATING：创建中。</li>
<li>ROLLBACKING：回滚中。</li>
<li>DELETING：删除中。</li>
     */
    public $DiskBackupState;

    /**
     * @var integer 创建或回滚云硬盘备份点进度百分比，成功后此字段取值为 100。
     */
    public $Percent;

    /**
     * @var string 上一次操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperation;

    /**
     * @var string 上一次操作状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationState;

    /**
     * @var string 上一次请求ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationRequestId;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
     */
    public $CreatedTime;

    /**
     * @param string $DiskBackupId 云硬盘备份点ID。
     * @param string $DiskUsage 创建此云硬盘备份点的云硬盘类型。取值：<li>DATA_DISK：数据盘</li>
     * @param string $DiskId 创建此云硬盘备份点的云硬盘 ID。
     * @param integer $DiskSize 创建此云硬盘备份点的云硬盘大小，单位 GB。
     * @param string $DiskBackupName 云硬盘备份点名称，用户自定义的云硬盘备份点别名。
     * @param string $DiskBackupState 云硬盘备份点的状态。取值范围：
<li>NORMAL：正常。 </li>
<li>CREATING：创建中。</li>
<li>ROLLBACKING：回滚中。</li>
<li>DELETING：删除中。</li>
     * @param integer $Percent 创建或回滚云硬盘备份点进度百分比，成功后此字段取值为 100。
     * @param string $LatestOperation 上一次操作
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationState 上一次操作状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationRequestId 上一次请求ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
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
        if (array_key_exists("DiskBackupId",$param) and $param["DiskBackupId"] !== null) {
            $this->DiskBackupId = $param["DiskBackupId"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskBackupName",$param) and $param["DiskBackupName"] !== null) {
            $this->DiskBackupName = $param["DiskBackupName"];
        }

        if (array_key_exists("DiskBackupState",$param) and $param["DiskBackupState"] !== null) {
            $this->DiskBackupState = $param["DiskBackupState"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("LatestOperationRequestId",$param) and $param["LatestOperationRequestId"] !== null) {
            $this->LatestOperationRequestId = $param["LatestOperationRequestId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
