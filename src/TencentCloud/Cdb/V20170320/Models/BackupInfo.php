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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份详细信息
 *
 * @method string getName() 获取<p>备份文件名</p>
 * @method void setName(string $Name) 设置<p>备份文件名</p>
 * @method integer getSize() 获取<p>备份文件大小，单位：Byte</p>
 * @method void setSize(integer $Size) 设置<p>备份文件大小，单位：Byte</p>
 * @method string getDate() 获取<p>备份快照时间，时间格式：2016-03-17 02:10:37</p>
 * @method void setDate(string $Date) 设置<p>备份快照时间，时间格式：2016-03-17 02:10:37</p>
 * @method string getIntranetUrl() 获取<p>下载地址</p>
 * @method void setIntranetUrl(string $IntranetUrl) 设置<p>下载地址</p>
 * @method string getInternetUrl() 获取<p>下载地址</p>
 * @method void setInternetUrl(string $InternetUrl) 设置<p>下载地址</p>
 * @method string getType() 获取<p>日志具体类型。可能的值有 &quot;logical&quot;: 逻辑冷备， &quot;physical&quot;: 物理冷备。</p>
 * @method void setType(string $Type) 设置<p>日志具体类型。可能的值有 &quot;logical&quot;: 逻辑冷备， &quot;physical&quot;: 物理冷备。</p>
 * @method integer getBackupId() 获取<p>备份子任务的ID，删除备份文件时使用</p>
 * @method void setBackupId(integer $BackupId) 设置<p>备份子任务的ID，删除备份文件时使用</p>
 * @method string getStatus() 获取<p>备份任务状态。可能的值有 &quot;SUCCESS&quot;: 备份成功， &quot;FAILED&quot;: 备份失败， &quot;RUNNING&quot;: 备份进行中。</p>
 * @method void setStatus(string $Status) 设置<p>备份任务状态。可能的值有 &quot;SUCCESS&quot;: 备份成功， &quot;FAILED&quot;: 备份失败， &quot;RUNNING&quot;: 备份进行中。</p>
 * @method string getFinishTime() 获取<p>备份任务的完成时间</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>备份任务的完成时间</p>
 * @method string getCreator() 获取<p>（该值将废弃，不建议使用）备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值。</p>
 * @method void setCreator(string $Creator) 设置<p>（该值将废弃，不建议使用）备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值。</p>
 * @method string getStartTime() 获取<p>备份任务的开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>备份任务的开始时间</p>
 * @method string getMethod() 获取<p>备份方法。可能的值有 &quot;full&quot;: 全量备份， &quot;partial&quot;: 部分备份。</p>
 * @method void setMethod(string $Method) 设置<p>备份方法。可能的值有 &quot;full&quot;: 全量备份， &quot;partial&quot;: 部分备份。</p>
 * @method string getWay() 获取<p>备份方式。可能的值有 &quot;manual&quot;: 手动备份， &quot;automatic&quot;: 自动备份。</p>
 * @method void setWay(string $Way) 设置<p>备份方式。可能的值有 &quot;manual&quot;: 手动备份， &quot;automatic&quot;: 自动备份。</p>
 * @method string getManualBackupName() 获取<p>手动备份别名</p>
 * @method void setManualBackupName(string $ManualBackupName) 设置<p>手动备份别名</p>
 * @method string getSaveMode() 获取<p>备份保留类型，save_mode_regular - 常规保存备份，save_mode_period - 定期保存备份</p>
 * @method void setSaveMode(string $SaveMode) 设置<p>备份保留类型，save_mode_regular - 常规保存备份，save_mode_period - 定期保存备份</p>
 * @method string getRegion() 获取<p>本地备份所在地域</p>
 * @method void setRegion(string $Region) 设置<p>本地备份所在地域</p>
 * @method array getRemoteInfo() 获取<p>异地备份详细信息</p>
 * @method void setRemoteInfo(array $RemoteInfo) 设置<p>异地备份详细信息</p>
 * @method integer getCosStorageType() 获取<p>存储方式，0-常规存储，1-归档存储，2-标准存储，默认为0</p>
 * @method void setCosStorageType(integer $CosStorageType) 设置<p>存储方式，0-常规存储，1-归档存储，2-标准存储，默认为0</p>
 * @method string getInstanceId() 获取<p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method integer getProgress() 获取<p>备份完成进度</p>
 * @method void setProgress(integer $Progress) 设置<p>备份完成进度</p>
 * @method string getEncryptionFlag() 获取<p>备份文件是否加密， on-加密， off-未加密</p>
 * @method void setEncryptionFlag(string $EncryptionFlag) 设置<p>备份文件是否加密， on-加密， off-未加密</p>
 * @method string getExecutedGTIDSet() 获取<p>备份GTID点位</p>
 * @method void setExecutedGTIDSet(string $ExecutedGTIDSet) 设置<p>备份GTID点位</p>
 * @method string getMD5() 获取<p>备份文件MD5值</p>
 * @method void setMD5(string $MD5) 设置<p>备份文件MD5值</p>
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string <p>备份文件名</p>
     */
    public $Name;

    /**
     * @var integer <p>备份文件大小，单位：Byte</p>
     */
    public $Size;

    /**
     * @var string <p>备份快照时间，时间格式：2016-03-17 02:10:37</p>
     */
    public $Date;

    /**
     * @var string <p>下载地址</p>
     */
    public $IntranetUrl;

    /**
     * @var string <p>下载地址</p>
     */
    public $InternetUrl;

    /**
     * @var string <p>日志具体类型。可能的值有 &quot;logical&quot;: 逻辑冷备， &quot;physical&quot;: 物理冷备。</p>
     */
    public $Type;

    /**
     * @var integer <p>备份子任务的ID，删除备份文件时使用</p>
     */
    public $BackupId;

    /**
     * @var string <p>备份任务状态。可能的值有 &quot;SUCCESS&quot;: 备份成功， &quot;FAILED&quot;: 备份失败， &quot;RUNNING&quot;: 备份进行中。</p>
     */
    public $Status;

    /**
     * @var string <p>备份任务的完成时间</p>
     */
    public $FinishTime;

    /**
     * @var string <p>（该值将废弃，不建议使用）备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值。</p>
     */
    public $Creator;

    /**
     * @var string <p>备份任务的开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>备份方法。可能的值有 &quot;full&quot;: 全量备份， &quot;partial&quot;: 部分备份。</p>
     */
    public $Method;

    /**
     * @var string <p>备份方式。可能的值有 &quot;manual&quot;: 手动备份， &quot;automatic&quot;: 自动备份。</p>
     */
    public $Way;

    /**
     * @var string <p>手动备份别名</p>
     */
    public $ManualBackupName;

    /**
     * @var string <p>备份保留类型，save_mode_regular - 常规保存备份，save_mode_period - 定期保存备份</p>
     */
    public $SaveMode;

    /**
     * @var string <p>本地备份所在地域</p>
     */
    public $Region;

    /**
     * @var array <p>异地备份详细信息</p>
     */
    public $RemoteInfo;

    /**
     * @var integer <p>存储方式，0-常规存储，1-归档存储，2-标准存储，默认为0</p>
     */
    public $CosStorageType;

    /**
     * @var string <p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>备份完成进度</p>
     */
    public $Progress;

    /**
     * @var string <p>备份文件是否加密， on-加密， off-未加密</p>
     */
    public $EncryptionFlag;

    /**
     * @var string <p>备份GTID点位</p>
     */
    public $ExecutedGTIDSet;

    /**
     * @var string <p>备份文件MD5值</p>
     */
    public $MD5;

    /**
     * @param string $Name <p>备份文件名</p>
     * @param integer $Size <p>备份文件大小，单位：Byte</p>
     * @param string $Date <p>备份快照时间，时间格式：2016-03-17 02:10:37</p>
     * @param string $IntranetUrl <p>下载地址</p>
     * @param string $InternetUrl <p>下载地址</p>
     * @param string $Type <p>日志具体类型。可能的值有 &quot;logical&quot;: 逻辑冷备， &quot;physical&quot;: 物理冷备。</p>
     * @param integer $BackupId <p>备份子任务的ID，删除备份文件时使用</p>
     * @param string $Status <p>备份任务状态。可能的值有 &quot;SUCCESS&quot;: 备份成功， &quot;FAILED&quot;: 备份失败， &quot;RUNNING&quot;: 备份进行中。</p>
     * @param string $FinishTime <p>备份任务的完成时间</p>
     * @param string $Creator <p>（该值将废弃，不建议使用）备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值。</p>
     * @param string $StartTime <p>备份任务的开始时间</p>
     * @param string $Method <p>备份方法。可能的值有 &quot;full&quot;: 全量备份， &quot;partial&quot;: 部分备份。</p>
     * @param string $Way <p>备份方式。可能的值有 &quot;manual&quot;: 手动备份， &quot;automatic&quot;: 自动备份。</p>
     * @param string $ManualBackupName <p>手动备份别名</p>
     * @param string $SaveMode <p>备份保留类型，save_mode_regular - 常规保存备份，save_mode_period - 定期保存备份</p>
     * @param string $Region <p>本地备份所在地域</p>
     * @param array $RemoteInfo <p>异地备份详细信息</p>
     * @param integer $CosStorageType <p>存储方式，0-常规存储，1-归档存储，2-标准存储，默认为0</p>
     * @param string $InstanceId <p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
     * @param integer $Progress <p>备份完成进度</p>
     * @param string $EncryptionFlag <p>备份文件是否加密， on-加密， off-未加密</p>
     * @param string $ExecutedGTIDSet <p>备份GTID点位</p>
     * @param string $MD5 <p>备份文件MD5值</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("IntranetUrl",$param) and $param["IntranetUrl"] !== null) {
            $this->IntranetUrl = $param["IntranetUrl"];
        }

        if (array_key_exists("InternetUrl",$param) and $param["InternetUrl"] !== null) {
            $this->InternetUrl = $param["InternetUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Way",$param) and $param["Way"] !== null) {
            $this->Way = $param["Way"];
        }

        if (array_key_exists("ManualBackupName",$param) and $param["ManualBackupName"] !== null) {
            $this->ManualBackupName = $param["ManualBackupName"];
        }

        if (array_key_exists("SaveMode",$param) and $param["SaveMode"] !== null) {
            $this->SaveMode = $param["SaveMode"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RemoteInfo",$param) and $param["RemoteInfo"] !== null) {
            $this->RemoteInfo = [];
            foreach ($param["RemoteInfo"] as $key => $value){
                $obj = new RemoteBackupInfo();
                $obj->deserialize($value);
                array_push($this->RemoteInfo, $obj);
            }
        }

        if (array_key_exists("CosStorageType",$param) and $param["CosStorageType"] !== null) {
            $this->CosStorageType = $param["CosStorageType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("EncryptionFlag",$param) and $param["EncryptionFlag"] !== null) {
            $this->EncryptionFlag = $param["EncryptionFlag"];
        }

        if (array_key_exists("ExecutedGTIDSet",$param) and $param["ExecutedGTIDSet"] !== null) {
            $this->ExecutedGTIDSet = $param["ExecutedGTIDSet"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }
    }
}
