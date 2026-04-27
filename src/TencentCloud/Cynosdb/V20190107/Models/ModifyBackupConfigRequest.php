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
 * ModifyBackupConfig请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method integer getBackupTimeBeg() 获取<p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method void setBackupTimeBeg(integer $BackupTimeBeg) 设置<p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method integer getBackupTimeEnd() 获取<p>表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method void setBackupTimeEnd(integer $BackupTimeEnd) 设置<p>表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
 * @method integer getReserveDuration() 获取<p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600<em>24</em>7=604800，最大为158112000</p>
 * @method void setReserveDuration(integer $ReserveDuration) 设置<p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600<em>24</em>7=604800，最大为158112000</p>
 * @method array getBackupFreq() 获取<p>该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份</p>
 * @method void setBackupFreq(array $BackupFreq) 设置<p>该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份</p>
 * @method string getBackupType() 获取<p>该参数目前不支持修改，无需填写。</p>
 * @method void setBackupType(string $BackupType) 设置<p>该参数目前不支持修改，无需填写。</p>
 * @method LogicBackupConfigInfo getLogicBackupConfig() 获取<p>逻辑备份配置</p>
 * @method void setLogicBackupConfig(LogicBackupConfigInfo $LogicBackupConfig) 设置<p>逻辑备份配置</p>
 * @method boolean getDeleteAutoLogicBackup() 获取<p>是否删除自动逻辑备份</p>
 * @method void setDeleteAutoLogicBackup(boolean $DeleteAutoLogicBackup) 设置<p>是否删除自动逻辑备份</p>
 * @method SnapshotBackupConfig getSnapshotSecondaryBackupConfig() 获取<p>二级快照备份参数</p>
 * @method void setSnapshotSecondaryBackupConfig(SnapshotBackupConfig $SnapshotSecondaryBackupConfig) 设置<p>二级快照备份参数</p>
 * @method SparseBackupConfig getSparseBackupConfig() 获取<p>稀疏备份配置</p>
 * @method void setSparseBackupConfig(SparseBackupConfig $SparseBackupConfig) 设置<p>稀疏备份配置</p>
 */
class ModifyBackupConfigRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     */
    public $BackupTimeBeg;

    /**
     * @var integer <p>表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     */
    public $BackupTimeEnd;

    /**
     * @var integer <p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600<em>24</em>7=604800，最大为158112000</p>
     */
    public $ReserveDuration;

    /**
     * @var array <p>该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份</p>
     */
    public $BackupFreq;

    /**
     * @var string <p>该参数目前不支持修改，无需填写。</p>
     */
    public $BackupType;

    /**
     * @var LogicBackupConfigInfo <p>逻辑备份配置</p>
     */
    public $LogicBackupConfig;

    /**
     * @var boolean <p>是否删除自动逻辑备份</p>
     */
    public $DeleteAutoLogicBackup;

    /**
     * @var SnapshotBackupConfig <p>二级快照备份参数</p>
     */
    public $SnapshotSecondaryBackupConfig;

    /**
     * @var SparseBackupConfig <p>稀疏备份配置</p>
     */
    public $SparseBackupConfig;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param integer $BackupTimeBeg <p>表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     * @param integer $BackupTimeEnd <p>表示全备结束时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200</p>
     * @param integer $ReserveDuration <p>表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600<em>24</em>7=604800，最大为158112000</p>
     * @param array $BackupFreq <p>该参数目前不支持修改，无需填写。备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份</p>
     * @param string $BackupType <p>该参数目前不支持修改，无需填写。</p>
     * @param LogicBackupConfigInfo $LogicBackupConfig <p>逻辑备份配置</p>
     * @param boolean $DeleteAutoLogicBackup <p>是否删除自动逻辑备份</p>
     * @param SnapshotBackupConfig $SnapshotSecondaryBackupConfig <p>二级快照备份参数</p>
     * @param SparseBackupConfig $SparseBackupConfig <p>稀疏备份配置</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
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

        if (array_key_exists("LogicBackupConfig",$param) and $param["LogicBackupConfig"] !== null) {
            $this->LogicBackupConfig = new LogicBackupConfigInfo();
            $this->LogicBackupConfig->deserialize($param["LogicBackupConfig"]);
        }

        if (array_key_exists("DeleteAutoLogicBackup",$param) and $param["DeleteAutoLogicBackup"] !== null) {
            $this->DeleteAutoLogicBackup = $param["DeleteAutoLogicBackup"];
        }

        if (array_key_exists("SnapshotSecondaryBackupConfig",$param) and $param["SnapshotSecondaryBackupConfig"] !== null) {
            $this->SnapshotSecondaryBackupConfig = new SnapshotBackupConfig();
            $this->SnapshotSecondaryBackupConfig->deserialize($param["SnapshotSecondaryBackupConfig"]);
        }

        if (array_key_exists("SparseBackupConfig",$param) and $param["SparseBackupConfig"] !== null) {
            $this->SparseBackupConfig = new SparseBackupConfig();
            $this->SparseBackupConfig->deserialize($param["SparseBackupConfig"]);
        }
    }
}
