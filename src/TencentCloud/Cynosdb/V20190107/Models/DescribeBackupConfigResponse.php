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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupConfig返回参数结构体
 *
 * @method integer getBackupTimeBeg() 获取<p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method void setBackupTimeBeg(integer $BackupTimeBeg) 设置<p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method integer getBackupTimeEnd() 获取<p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method void setBackupTimeEnd(integer $BackupTimeEnd) 设置<p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method integer getReserveDuration() 获取<p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600<em>24</em>7=604800</p>
 * @method void setReserveDuration(integer $ReserveDuration) 设置<p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600<em>24</em>7=604800</p>
 * @method array getBackupFreq() 获取<p>备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份</p>
 * @method void setBackupFreq(array $BackupFreq) 设置<p>备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份</p>
 * @method string getBackupType() 获取<p>备份方式，logic-逻辑备份，snapshot-快照备份</p>
 * @method void setBackupType(string $BackupType) 设置<p>备份方式，logic-逻辑备份，snapshot-快照备份</p>
 * @method string getLogicCrossRegionsConfigUpdateTime() 获取<p>跨地域逻辑备份配置修改时间</p>
 * @method void setLogicCrossRegionsConfigUpdateTime(string $LogicCrossRegionsConfigUpdateTime) 设置<p>跨地域逻辑备份配置修改时间</p>
 * @method LogicBackupConfigInfo getLogicBackupConfig() 获取<p>自动逻辑备份配置</p>
 * @method void setLogicBackupConfig(LogicBackupConfigInfo $LogicBackupConfig) 设置<p>自动逻辑备份配置</p>
 * @method BackupConfigInfo getSnapshotSecondaryBackupConfig() 获取<p>二级快照备份配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotSecondaryBackupConfig(BackupConfigInfo $SnapshotSecondaryBackupConfig) 设置<p>二级快照备份配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SparseBackupConfigRsp getSparseBackupConfig() 获取<p>稀疏备份配置</p>
 * @method void setSparseBackupConfig(SparseBackupConfigRsp $SparseBackupConfig) 设置<p>稀疏备份配置</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer <p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     */
    public $BackupTimeBeg;

    /**
     * @var integer <p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     */
    public $BackupTimeEnd;

    /**
     * @var integer <p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600<em>24</em>7=604800</p>
     */
    public $ReserveDuration;

    /**
     * @var array <p>备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份</p>
     */
    public $BackupFreq;

    /**
     * @var string <p>备份方式，logic-逻辑备份，snapshot-快照备份</p>
     */
    public $BackupType;

    /**
     * @var string <p>跨地域逻辑备份配置修改时间</p>
     */
    public $LogicCrossRegionsConfigUpdateTime;

    /**
     * @var LogicBackupConfigInfo <p>自动逻辑备份配置</p>
     */
    public $LogicBackupConfig;

    /**
     * @var BackupConfigInfo <p>二级快照备份配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotSecondaryBackupConfig;

    /**
     * @var SparseBackupConfigRsp <p>稀疏备份配置</p>
     */
    public $SparseBackupConfig;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BackupTimeBeg <p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     * @param integer $BackupTimeEnd <p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     * @param integer $ReserveDuration <p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600<em>24</em>7=604800</p>
     * @param array $BackupFreq <p>备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份</p>
     * @param string $BackupType <p>备份方式，logic-逻辑备份，snapshot-快照备份</p>
     * @param string $LogicCrossRegionsConfigUpdateTime <p>跨地域逻辑备份配置修改时间</p>
     * @param LogicBackupConfigInfo $LogicBackupConfig <p>自动逻辑备份配置</p>
     * @param BackupConfigInfo $SnapshotSecondaryBackupConfig <p>二级快照备份配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SparseBackupConfigRsp $SparseBackupConfig <p>稀疏备份配置</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BackupTimeBeg",$param) and $param["BackupTimeBeg"] !== null) {
            $this->BackupTimeBeg = $param["BackupTimeBeg"];
        }

        if (array_key_exists("BackupTimeEnd",$param) and $param["BackupTimeEnd"] !== null) {
            $this->BackupTimeEnd = $param["BackupTimeEnd"];
        }

        if (array_key_exists("ReserveDuration",$param) and $param["ReserveDuration"] !== null) {
            $this->ReserveDuration = $param["ReserveDuration"];
        }

        if (array_key_exists("BackupFreq",$param) and $param["BackupFreq"] !== null) {
            $this->BackupFreq = $param["BackupFreq"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("LogicCrossRegionsConfigUpdateTime",$param) and $param["LogicCrossRegionsConfigUpdateTime"] !== null) {
            $this->LogicCrossRegionsConfigUpdateTime = $param["LogicCrossRegionsConfigUpdateTime"];
        }

        if (array_key_exists("LogicBackupConfig",$param) and $param["LogicBackupConfig"] !== null) {
            $this->LogicBackupConfig = new LogicBackupConfigInfo();
            $this->LogicBackupConfig->deserialize($param["LogicBackupConfig"]);
        }

        if (array_key_exists("SnapshotSecondaryBackupConfig",$param) and $param["SnapshotSecondaryBackupConfig"] !== null) {
            $this->SnapshotSecondaryBackupConfig = new BackupConfigInfo();
            $this->SnapshotSecondaryBackupConfig->deserialize($param["SnapshotSecondaryBackupConfig"]);
        }

        if (array_key_exists("SparseBackupConfig",$param) and $param["SparseBackupConfig"] !== null) {
            $this->SparseBackupConfig = new SparseBackupConfigRsp();
            $this->SparseBackupConfig->deserialize($param["SparseBackupConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
