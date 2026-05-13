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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志备份
 *
 * @method integer getId() 获取索引
 * @method void setId(integer $Id) 设置索引
 * @method integer getIndexStartTime() 获取索引开始时间
 * @method void setIndexStartTime(integer $IndexStartTime) 设置索引开始时间
 * @method integer getIndexEndTime() 获取索引结束时间
 * @method void setIndexEndTime(integer $IndexEndTime) 设置索引结束时间
 * @method integer getBackupSize() 获取备份后压缩的大小，单位M
 * @method void setBackupSize(integer $BackupSize) 设置备份后压缩的大小，单位M
 * @method integer getStatus() 获取日志状态 0备份未完成， 1备份文件，2恢复中，3已恢复，4.已删除
 * @method void setStatus(integer $Status) 设置日志状态 0备份未完成， 1备份文件，2恢复中，3已恢复，4.已删除
 * @method integer getRestoreProcessRemindTime() 获取恢复剩余的分钟数，分钟，需要前端转换
 * @method void setRestoreProcessRemindTime(integer $RestoreProcessRemindTime) 设置恢复剩余的分钟数，分钟，需要前端转换
 * @method integer getRestoreRemindTime() 获取恢复日志保留的时间
 * @method void setRestoreRemindTime(integer $RestoreRemindTime) 设置恢复日志保留的时间
 * @method integer getRestoreIndexSize() 获取恢复索引大小
 * @method void setRestoreIndexSize(integer $RestoreIndexSize) 设置恢复索引大小
 * @method integer getRestoreEndTime() 获取恢复日志执行结束时间
 * @method void setRestoreEndTime(integer $RestoreEndTime) 设置恢复日志执行结束时间
 * @method integer getAppId() 获取备份所属的appId
 * @method void setAppId(integer $AppId) 设置备份所属的appId
 * @method integer getAssetId() 获取备份所属的资产ID
 * @method void setAssetId(integer $AssetId) 设置备份所属的资产ID
 * @method string getNickName() 获取账号昵称
 * @method void setNickName(string $NickName) 设置账号昵称
 * @method string getUin() 获取资产所属账号uin
 * @method void setUin(string $Uin) 设置资产所属账号uin
 */
class BackupLog extends AbstractModel
{
    /**
     * @var integer 索引
     */
    public $Id;

    /**
     * @var integer 索引开始时间
     */
    public $IndexStartTime;

    /**
     * @var integer 索引结束时间
     */
    public $IndexEndTime;

    /**
     * @var integer 备份后压缩的大小，单位M
     */
    public $BackupSize;

    /**
     * @var integer 日志状态 0备份未完成， 1备份文件，2恢复中，3已恢复，4.已删除
     */
    public $Status;

    /**
     * @var integer 恢复剩余的分钟数，分钟，需要前端转换
     */
    public $RestoreProcessRemindTime;

    /**
     * @var integer 恢复日志保留的时间
     */
    public $RestoreRemindTime;

    /**
     * @var integer 恢复索引大小
     */
    public $RestoreIndexSize;

    /**
     * @var integer 恢复日志执行结束时间
     */
    public $RestoreEndTime;

    /**
     * @var integer 备份所属的appId
     */
    public $AppId;

    /**
     * @var integer 备份所属的资产ID
     */
    public $AssetId;

    /**
     * @var string 账号昵称
     */
    public $NickName;

    /**
     * @var string 资产所属账号uin
     */
    public $Uin;

    /**
     * @param integer $Id 索引
     * @param integer $IndexStartTime 索引开始时间
     * @param integer $IndexEndTime 索引结束时间
     * @param integer $BackupSize 备份后压缩的大小，单位M
     * @param integer $Status 日志状态 0备份未完成， 1备份文件，2恢复中，3已恢复，4.已删除
     * @param integer $RestoreProcessRemindTime 恢复剩余的分钟数，分钟，需要前端转换
     * @param integer $RestoreRemindTime 恢复日志保留的时间
     * @param integer $RestoreIndexSize 恢复索引大小
     * @param integer $RestoreEndTime 恢复日志执行结束时间
     * @param integer $AppId 备份所属的appId
     * @param integer $AssetId 备份所属的资产ID
     * @param string $NickName 账号昵称
     * @param string $Uin 资产所属账号uin
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IndexStartTime",$param) and $param["IndexStartTime"] !== null) {
            $this->IndexStartTime = $param["IndexStartTime"];
        }

        if (array_key_exists("IndexEndTime",$param) and $param["IndexEndTime"] !== null) {
            $this->IndexEndTime = $param["IndexEndTime"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RestoreProcessRemindTime",$param) and $param["RestoreProcessRemindTime"] !== null) {
            $this->RestoreProcessRemindTime = $param["RestoreProcessRemindTime"];
        }

        if (array_key_exists("RestoreRemindTime",$param) and $param["RestoreRemindTime"] !== null) {
            $this->RestoreRemindTime = $param["RestoreRemindTime"];
        }

        if (array_key_exists("RestoreIndexSize",$param) and $param["RestoreIndexSize"] !== null) {
            $this->RestoreIndexSize = $param["RestoreIndexSize"];
        }

        if (array_key_exists("RestoreEndTime",$param) and $param["RestoreEndTime"] !== null) {
            $this->RestoreEndTime = $param["RestoreEndTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
