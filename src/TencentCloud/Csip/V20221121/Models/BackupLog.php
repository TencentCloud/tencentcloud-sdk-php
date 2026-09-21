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
 * @method integer getId() 获取<p>索引</p>
 * @method void setId(integer $Id) 设置<p>索引</p>
 * @method integer getIndexStartTime() 获取<p>索引开始时间</p>
 * @method void setIndexStartTime(integer $IndexStartTime) 设置<p>索引开始时间</p>
 * @method integer getIndexEndTime() 获取<p>索引结束时间</p>
 * @method void setIndexEndTime(integer $IndexEndTime) 设置<p>索引结束时间</p>
 * @method integer getBackupSize() 获取<p>备份后压缩的大小，单位M</p>
 * @method void setBackupSize(integer $BackupSize) 设置<p>备份后压缩的大小，单位M</p>
 * @method integer getStatus() 获取<p>日志状态 0备份未完成， 1备份文件，2恢复中，3已恢复，4.已删除</p>
 * @method void setStatus(integer $Status) 设置<p>日志状态 0备份未完成， 1备份文件，2恢复中，3已恢复，4.已删除</p>
 * @method integer getRestoreProcessRemindTime() 获取<p>恢复剩余的分钟数，分钟，需要前端转换</p>
 * @method void setRestoreProcessRemindTime(integer $RestoreProcessRemindTime) 设置<p>恢复剩余的分钟数，分钟，需要前端转换</p>
 * @method integer getRestoreRemindTime() 获取<p>恢复日志保留的时间</p>
 * @method void setRestoreRemindTime(integer $RestoreRemindTime) 设置<p>恢复日志保留的时间</p>
 * @method integer getRestoreIndexSize() 获取<p>恢复索引大小</p>
 * @method void setRestoreIndexSize(integer $RestoreIndexSize) 设置<p>恢复索引大小</p>
 * @method integer getRestoreEndTime() 获取<p>恢复日志执行结束时间</p>
 * @method void setRestoreEndTime(integer $RestoreEndTime) 设置<p>恢复日志执行结束时间</p>
 * @method integer getAppId() 获取<p>备份所属的appId</p>
 * @method void setAppId(integer $AppId) 设置<p>备份所属的appId</p>
 * @method integer getAssetId() 获取<p>备份所属的资产ID</p>
 * @method void setAssetId(integer $AssetId) 设置<p>备份所属的资产ID</p>
 * @method string getNickName() 获取<p>账号昵称</p>
 * @method void setNickName(string $NickName) 设置<p>账号昵称</p>
 * @method string getUin() 获取<p>资产所属账号uin</p>
 * @method void setUin(string $Uin) 设置<p>资产所属账号uin</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getAssetType() 获取<p>实例类型</p><p>枚举值：</p><ul><li>cdb：  cdb</li><li>mariadb： mariadb</li></ul>
 * @method void setAssetType(string $AssetType) 设置<p>实例类型</p><p>枚举值：</p><ul><li>cdb：  cdb</li><li>mariadb： mariadb</li></ul>
 */
class BackupLog extends AbstractModel
{
    /**
     * @var integer <p>索引</p>
     */
    public $Id;

    /**
     * @var integer <p>索引开始时间</p>
     */
    public $IndexStartTime;

    /**
     * @var integer <p>索引结束时间</p>
     */
    public $IndexEndTime;

    /**
     * @var integer <p>备份后压缩的大小，单位M</p>
     */
    public $BackupSize;

    /**
     * @var integer <p>日志状态 0备份未完成， 1备份文件，2恢复中，3已恢复，4.已删除</p>
     */
    public $Status;

    /**
     * @var integer <p>恢复剩余的分钟数，分钟，需要前端转换</p>
     */
    public $RestoreProcessRemindTime;

    /**
     * @var integer <p>恢复日志保留的时间</p>
     */
    public $RestoreRemindTime;

    /**
     * @var integer <p>恢复索引大小</p>
     */
    public $RestoreIndexSize;

    /**
     * @var integer <p>恢复日志执行结束时间</p>
     */
    public $RestoreEndTime;

    /**
     * @var integer <p>备份所属的appId</p>
     */
    public $AppId;

    /**
     * @var integer <p>备份所属的资产ID</p>
     */
    public $AssetId;

    /**
     * @var string <p>账号昵称</p>
     */
    public $NickName;

    /**
     * @var string <p>资产所属账号uin</p>
     */
    public $Uin;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例类型</p><p>枚举值：</p><ul><li>cdb：  cdb</li><li>mariadb： mariadb</li></ul>
     */
    public $AssetType;

    /**
     * @param integer $Id <p>索引</p>
     * @param integer $IndexStartTime <p>索引开始时间</p>
     * @param integer $IndexEndTime <p>索引结束时间</p>
     * @param integer $BackupSize <p>备份后压缩的大小，单位M</p>
     * @param integer $Status <p>日志状态 0备份未完成， 1备份文件，2恢复中，3已恢复，4.已删除</p>
     * @param integer $RestoreProcessRemindTime <p>恢复剩余的分钟数，分钟，需要前端转换</p>
     * @param integer $RestoreRemindTime <p>恢复日志保留的时间</p>
     * @param integer $RestoreIndexSize <p>恢复索引大小</p>
     * @param integer $RestoreEndTime <p>恢复日志执行结束时间</p>
     * @param integer $AppId <p>备份所属的appId</p>
     * @param integer $AssetId <p>备份所属的资产ID</p>
     * @param string $NickName <p>账号昵称</p>
     * @param string $Uin <p>资产所属账号uin</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $AssetType <p>实例类型</p><p>枚举值：</p><ul><li>cdb：  cdb</li><li>mariadb： mariadb</li></ul>
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
