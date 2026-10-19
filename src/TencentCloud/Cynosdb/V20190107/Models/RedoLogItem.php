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
 * redo日志详情
 *
 * @method string getFileName() 获取<p>文件名</p>
 * @method void setFileName(string $FileName) 设置<p>文件名</p>
 * @method integer getFileSize() 获取<p>文件大小</p>
 * @method void setFileSize(integer $FileSize) 设置<p>文件大小</p>
 * @method string getBackupTime() 获取<p>备份时间</p>
 * @method void setBackupTime(string $BackupTime) 设置<p>备份时间</p>
 * @method integer getRedoLogId() 获取<p>redoLogId</p>
 * @method void setRedoLogId(integer $RedoLogId) 设置<p>redoLogId</p>
 * @method array getRedoCrossRegions() 获取<p>跨地域信息</p>
 * @method void setRedoCrossRegions(array $RedoCrossRegions) 设置<p>跨地域信息</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getFinishTime() 获取<p>完成时间</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>完成时间</p>
 * @method array getVaultInfos() 获取<p>保险箱信息</p>
 * @method void setVaultInfos(array $VaultInfos) 设置<p>保险箱信息</p>
 * @method string getCopyStatus() 获取<p>备份投递状态</p>
 * @method void setCopyStatus(string $CopyStatus) 设置<p>备份投递状态</p>
 * @method string getEncryptKeyId() 获取<p>加密秘钥key</p>
 * @method void setEncryptKeyId(string $EncryptKeyId) 设置<p>加密秘钥key</p>
 * @method string getEncryptRegion() 获取<p>加密秘钥地域</p>
 * @method void setEncryptRegion(string $EncryptRegion) 设置<p>加密秘钥地域</p>
 */
class RedoLogItem extends AbstractModel
{
    /**
     * @var string <p>文件名</p>
     */
    public $FileName;

    /**
     * @var integer <p>文件大小</p>
     */
    public $FileSize;

    /**
     * @var string <p>备份时间</p>
     */
    public $BackupTime;

    /**
     * @var integer <p>redoLogId</p>
     */
    public $RedoLogId;

    /**
     * @var array <p>跨地域信息</p>
     */
    public $RedoCrossRegions;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>完成时间</p>
     */
    public $FinishTime;

    /**
     * @var array <p>保险箱信息</p>
     */
    public $VaultInfos;

    /**
     * @var string <p>备份投递状态</p>
     */
    public $CopyStatus;

    /**
     * @var string <p>加密秘钥key</p>
     */
    public $EncryptKeyId;

    /**
     * @var string <p>加密秘钥地域</p>
     */
    public $EncryptRegion;

    /**
     * @param string $FileName <p>文件名</p>
     * @param integer $FileSize <p>文件大小</p>
     * @param string $BackupTime <p>备份时间</p>
     * @param integer $RedoLogId <p>redoLogId</p>
     * @param array $RedoCrossRegions <p>跨地域信息</p>
     * @param string $Status <p>状态</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $FinishTime <p>完成时间</p>
     * @param array $VaultInfos <p>保险箱信息</p>
     * @param string $CopyStatus <p>备份投递状态</p>
     * @param string $EncryptKeyId <p>加密秘钥key</p>
     * @param string $EncryptRegion <p>加密秘钥地域</p>
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("RedoLogId",$param) and $param["RedoLogId"] !== null) {
            $this->RedoLogId = $param["RedoLogId"];
        }

        if (array_key_exists("RedoCrossRegions",$param) and $param["RedoCrossRegions"] !== null) {
            $this->RedoCrossRegions = [];
            foreach ($param["RedoCrossRegions"] as $key => $value){
                $obj = new BackupRegionAndIds();
                $obj->deserialize($value);
                array_push($this->RedoCrossRegions, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("VaultInfos",$param) and $param["VaultInfos"] !== null) {
            $this->VaultInfos = [];
            foreach ($param["VaultInfos"] as $key => $value){
                $obj = new VaultInfo();
                $obj->deserialize($value);
                array_push($this->VaultInfos, $obj);
            }
        }

        if (array_key_exists("CopyStatus",$param) and $param["CopyStatus"] !== null) {
            $this->CopyStatus = $param["CopyStatus"];
        }

        if (array_key_exists("EncryptKeyId",$param) and $param["EncryptKeyId"] !== null) {
            $this->EncryptKeyId = $param["EncryptKeyId"];
        }

        if (array_key_exists("EncryptRegion",$param) and $param["EncryptRegion"] !== null) {
            $this->EncryptRegion = $param["EncryptRegion"];
        }
    }
}
