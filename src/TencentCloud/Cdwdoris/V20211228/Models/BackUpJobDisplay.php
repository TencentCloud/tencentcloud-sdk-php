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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份实例详情
 *
 * @method integer getJobId() 获取备份实例id
 * @method void setJobId(integer $JobId) 设置备份实例id
 * @method string getSnapshot() 获取备份实例名
 * @method void setSnapshot(string $Snapshot) 设置备份实例名
 * @method integer getBackUpSize() 获取备份数据量
 * @method void setBackUpSize(integer $BackUpSize) 设置备份数据量
 * @method integer getBackUpSingleSize() 获取备份单副本数据量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackUpSingleSize(integer $BackUpSingleSize) 设置备份单副本数据量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackUpTime() 获取实例创建时间
 * @method void setBackUpTime(string $BackUpTime) 设置实例创建时间
 * @method string getExpireTime() 获取实例过期时间
 * @method void setExpireTime(string $ExpireTime) 设置实例过期时间
 * @method string getJobStatus() 获取实例状态
 * @method void setJobStatus(string $JobStatus) 设置实例状态
 * @method integer getBackupType() 获取0为默认。1时是对远端的doris进行备份，不周期，一次性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupType(integer $BackupType) 设置0为默认。1时是对远端的doris进行备份，不周期，一次性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBackupTimeType() 获取0为默认。1时是立即备份。2时是迁移
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupTimeType(integer $BackupTimeType) 设置0为默认。1时是立即备份。2时是迁移
注意：此字段可能返回 null，表示取不到有效值。
 * @method DorisSourceInfo getDorisSourceInfo() 获取远端doris的连接信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDorisSourceInfo(DorisSourceInfo $DorisSourceInfo) 设置远端doris的连接信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobStatusNum() 获取实例状态对应的数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobStatusNum(integer $JobStatusNum) 设置实例状态对应的数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method BackupCosInfo getBackupCosInfo() 获取备份实例中关于cos的信息	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupCosInfo(BackupCosInfo $BackupCosInfo) 设置备份实例中关于cos的信息	
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackUpJobDisplay extends AbstractModel
{
    /**
     * @var integer 备份实例id
     */
    public $JobId;

    /**
     * @var string 备份实例名
     */
    public $Snapshot;

    /**
     * @var integer 备份数据量
     */
    public $BackUpSize;

    /**
     * @var integer 备份单副本数据量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackUpSingleSize;

    /**
     * @var string 实例创建时间
     */
    public $BackUpTime;

    /**
     * @var string 实例过期时间
     */
    public $ExpireTime;

    /**
     * @var string 实例状态
     */
    public $JobStatus;

    /**
     * @var integer 0为默认。1时是对远端的doris进行备份，不周期，一次性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupType;

    /**
     * @var integer 0为默认。1时是立即备份。2时是迁移
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupTimeType;

    /**
     * @var DorisSourceInfo 远端doris的连接信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DorisSourceInfo;

    /**
     * @var integer 实例状态对应的数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobStatusNum;

    /**
     * @var BackupCosInfo 备份实例中关于cos的信息	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupCosInfo;

    /**
     * @param integer $JobId 备份实例id
     * @param string $Snapshot 备份实例名
     * @param integer $BackUpSize 备份数据量
     * @param integer $BackUpSingleSize 备份单副本数据量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackUpTime 实例创建时间
     * @param string $ExpireTime 实例过期时间
     * @param string $JobStatus 实例状态
     * @param integer $BackupType 0为默认。1时是对远端的doris进行备份，不周期，一次性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BackupTimeType 0为默认。1时是立即备份。2时是迁移
注意：此字段可能返回 null，表示取不到有效值。
     * @param DorisSourceInfo $DorisSourceInfo 远端doris的连接信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobStatusNum 实例状态对应的数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param BackupCosInfo $BackupCosInfo 备份实例中关于cos的信息	
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Snapshot",$param) and $param["Snapshot"] !== null) {
            $this->Snapshot = $param["Snapshot"];
        }

        if (array_key_exists("BackUpSize",$param) and $param["BackUpSize"] !== null) {
            $this->BackUpSize = $param["BackUpSize"];
        }

        if (array_key_exists("BackUpSingleSize",$param) and $param["BackUpSingleSize"] !== null) {
            $this->BackUpSingleSize = $param["BackUpSingleSize"];
        }

        if (array_key_exists("BackUpTime",$param) and $param["BackUpTime"] !== null) {
            $this->BackUpTime = $param["BackUpTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupTimeType",$param) and $param["BackupTimeType"] !== null) {
            $this->BackupTimeType = $param["BackupTimeType"];
        }

        if (array_key_exists("DorisSourceInfo",$param) and $param["DorisSourceInfo"] !== null) {
            $this->DorisSourceInfo = new DorisSourceInfo();
            $this->DorisSourceInfo->deserialize($param["DorisSourceInfo"]);
        }

        if (array_key_exists("JobStatusNum",$param) and $param["JobStatusNum"] !== null) {
            $this->JobStatusNum = $param["JobStatusNum"];
        }

        if (array_key_exists("BackupCosInfo",$param) and $param["BackupCosInfo"] !== null) {
            $this->BackupCosInfo = new BackupCosInfo();
            $this->BackupCosInfo->deserialize($param["BackupCosInfo"]);
        }
    }
}
