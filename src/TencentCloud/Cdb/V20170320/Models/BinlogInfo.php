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
 * 二进制日志信息
 *
 * @method string getName() 获取<p>binlog 日志备份文件名</p>
 * @method void setName(string $Name) 设置<p>binlog 日志备份文件名</p>
 * @method integer getSize() 获取<p>备份文件大小，单位：Byte</p>
 * @method void setSize(integer $Size) 设置<p>备份文件大小，单位：Byte</p>
 * @method string getDate() 获取<p>文件存储时间，时间格式：2016-03-17 02:10:37</p>
 * @method void setDate(string $Date) 设置<p>文件存储时间，时间格式：2016-03-17 02:10:37</p>
 * @method string getIntranetUrl() 获取<p>下载地址<br>说明：此下载地址和参数 InternetUrl 的下载地址一样。</p>
 * @method void setIntranetUrl(string $IntranetUrl) 设置<p>下载地址<br>说明：此下载地址和参数 InternetUrl 的下载地址一样。</p>
 * @method string getInternetUrl() 获取<p>下载地址<br>说明：此下载地址和参数 IntranetUrl 的下载地址一样。</p>
 * @method void setInternetUrl(string $InternetUrl) 设置<p>下载地址<br>说明：此下载地址和参数 IntranetUrl 的下载地址一样。</p>
 * @method string getType() 获取<p>日志具体类型，可能的值有：binlog - 二进制日志</p>
 * @method void setType(string $Type) 设置<p>日志具体类型，可能的值有：binlog - 二进制日志</p>
 * @method string getBinlogStartTime() 获取<p>binlog 文件起始时间</p>
 * @method void setBinlogStartTime(string $BinlogStartTime) 设置<p>binlog 文件起始时间</p>
 * @method string getBinlogFinishTime() 获取<p>binlog 文件截止时间</p>
 * @method void setBinlogFinishTime(string $BinlogFinishTime) 设置<p>binlog 文件截止时间</p>
 * @method string getRegion() 获取<p>本地binlog文件所在地域</p>
 * @method void setRegion(string $Region) 设置<p>本地binlog文件所在地域</p>
 * @method string getStatus() 获取<p>备份任务状态。可能的值有 &quot;SUCCESS&quot;: 备份成功， &quot;FAILED&quot;: 备份失败， &quot;RUNNING&quot;: 备份进行中。</p>
 * @method void setStatus(string $Status) 设置<p>备份任务状态。可能的值有 &quot;SUCCESS&quot;: 备份成功， &quot;FAILED&quot;: 备份失败， &quot;RUNNING&quot;: 备份进行中。</p>
 * @method array getRemoteInfo() 获取<p>binlog异地备份详细信息</p>
 * @method void setRemoteInfo(array $RemoteInfo) 设置<p>binlog异地备份详细信息</p>
 * @method integer getCosStorageType() 获取<p>存储方式，0-常规存储，1-归档存储，2-标准存储，默认为0</p>
 * @method void setCosStorageType(integer $CosStorageType) 设置<p>存储方式，0-常规存储，1-归档存储，2-标准存储，默认为0</p>
 * @method string getInstanceId() 获取<p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method integer getProgress() 获取<p>备份完成进度</p>
 * @method void setProgress(integer $Progress) 设置<p>备份完成进度</p>
 */
class BinlogInfo extends AbstractModel
{
    /**
     * @var string <p>binlog 日志备份文件名</p>
     */
    public $Name;

    /**
     * @var integer <p>备份文件大小，单位：Byte</p>
     */
    public $Size;

    /**
     * @var string <p>文件存储时间，时间格式：2016-03-17 02:10:37</p>
     */
    public $Date;

    /**
     * @var string <p>下载地址<br>说明：此下载地址和参数 InternetUrl 的下载地址一样。</p>
     */
    public $IntranetUrl;

    /**
     * @var string <p>下载地址<br>说明：此下载地址和参数 IntranetUrl 的下载地址一样。</p>
     */
    public $InternetUrl;

    /**
     * @var string <p>日志具体类型，可能的值有：binlog - 二进制日志</p>
     */
    public $Type;

    /**
     * @var string <p>binlog 文件起始时间</p>
     */
    public $BinlogStartTime;

    /**
     * @var string <p>binlog 文件截止时间</p>
     */
    public $BinlogFinishTime;

    /**
     * @var string <p>本地binlog文件所在地域</p>
     */
    public $Region;

    /**
     * @var string <p>备份任务状态。可能的值有 &quot;SUCCESS&quot;: 备份成功， &quot;FAILED&quot;: 备份失败， &quot;RUNNING&quot;: 备份进行中。</p>
     */
    public $Status;

    /**
     * @var array <p>binlog异地备份详细信息</p>
     */
    public $RemoteInfo;

    /**
     * @var integer <p>存储方式，0-常规存储，1-归档存储，2-标准存储，默认为0</p>
     */
    public $CosStorageType;

    /**
     * @var string <p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
     * @deprecated
     */
    public $InstanceId;

    /**
     * @var integer <p>备份完成进度</p>
     */
    public $Progress;

    /**
     * @param string $Name <p>binlog 日志备份文件名</p>
     * @param integer $Size <p>备份文件大小，单位：Byte</p>
     * @param string $Date <p>文件存储时间，时间格式：2016-03-17 02:10:37</p>
     * @param string $IntranetUrl <p>下载地址<br>说明：此下载地址和参数 InternetUrl 的下载地址一样。</p>
     * @param string $InternetUrl <p>下载地址<br>说明：此下载地址和参数 IntranetUrl 的下载地址一样。</p>
     * @param string $Type <p>日志具体类型，可能的值有：binlog - 二进制日志</p>
     * @param string $BinlogStartTime <p>binlog 文件起始时间</p>
     * @param string $BinlogFinishTime <p>binlog 文件截止时间</p>
     * @param string $Region <p>本地binlog文件所在地域</p>
     * @param string $Status <p>备份任务状态。可能的值有 &quot;SUCCESS&quot;: 备份成功， &quot;FAILED&quot;: 备份失败， &quot;RUNNING&quot;: 备份进行中。</p>
     * @param array $RemoteInfo <p>binlog异地备份详细信息</p>
     * @param integer $CosStorageType <p>存储方式，0-常规存储，1-归档存储，2-标准存储，默认为0</p>
     * @param string $InstanceId <p>实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。</p>
     * @param integer $Progress <p>备份完成进度</p>
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

        if (array_key_exists("BinlogStartTime",$param) and $param["BinlogStartTime"] !== null) {
            $this->BinlogStartTime = $param["BinlogStartTime"];
        }

        if (array_key_exists("BinlogFinishTime",$param) and $param["BinlogFinishTime"] !== null) {
            $this->BinlogFinishTime = $param["BinlogFinishTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
    }
}
