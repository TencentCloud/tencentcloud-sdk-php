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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份下载任务
 *
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getBackupName() 获取备份文件名
 * @method void setBackupName(string $BackupName) 设置备份文件名
 * @method string getReplicaSetId() 获取分片名称
 * @method void setReplicaSetId(string $ReplicaSetId) 设置分片名称
 * @method integer getBackupSize() 获取备份数据大小，单位为字节
 * @method void setBackupSize(integer $BackupSize) 设置备份数据大小，单位为字节
 * @method integer getStatus() 获取任务状态。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试
 * @method void setStatus(integer $Status) 设置任务状态。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试
 * @method integer getPercent() 获取任务进度百分比
 * @method void setPercent(integer $Percent) 设置任务进度百分比
 * @method integer getTimeSpend() 获取耗时，单位为秒
 * @method void setTimeSpend(integer $TimeSpend) 设置耗时，单位为秒
 * @method string getUrl() 获取备份数据下载链接
 * @method void setUrl(string $Url) 设置备份数据下载链接
 * @method integer getBackupMethod() 获取备份文件备份类型，0-逻辑备份，1-物理备份
 * @method void setBackupMethod(integer $BackupMethod) 设置备份文件备份类型，0-逻辑备份，1-物理备份
 * @method string getBackupDesc() 获取发起备份时指定的备注信息
 * @method void setBackupDesc(string $BackupDesc) 设置发起备份时指定的备注信息
 * @method string getRegion() 获取地区信息。
 * @method void setRegion(string $Region) 设置地区信息。
 * @method string getBucket() 获取Bucket信息。
 * @method void setBucket(string $Bucket) 设置Bucket信息。
 */
class BackupDownloadTask extends AbstractModel
{
    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 备份文件名
     */
    public $BackupName;

    /**
     * @var string 分片名称
     */
    public $ReplicaSetId;

    /**
     * @var integer 备份数据大小，单位为字节
     */
    public $BackupSize;

    /**
     * @var integer 任务状态。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试
     */
    public $Status;

    /**
     * @var integer 任务进度百分比
     */
    public $Percent;

    /**
     * @var integer 耗时，单位为秒
     */
    public $TimeSpend;

    /**
     * @var string 备份数据下载链接
     */
    public $Url;

    /**
     * @var integer 备份文件备份类型，0-逻辑备份，1-物理备份
     */
    public $BackupMethod;

    /**
     * @var string 发起备份时指定的备注信息
     */
    public $BackupDesc;

    /**
     * @var string 地区信息。
     */
    public $Region;

    /**
     * @var string Bucket信息。
     */
    public $Bucket;

    /**
     * @param string $CreateTime 任务创建时间
     * @param string $BackupName 备份文件名
     * @param string $ReplicaSetId 分片名称
     * @param integer $BackupSize 备份数据大小，单位为字节
     * @param integer $Status 任务状态。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试
     * @param integer $Percent 任务进度百分比
     * @param integer $TimeSpend 耗时，单位为秒
     * @param string $Url 备份数据下载链接
     * @param integer $BackupMethod 备份文件备份类型，0-逻辑备份，1-物理备份
     * @param string $BackupDesc 发起备份时指定的备注信息
     * @param string $Region 地区信息。
     * @param string $Bucket Bucket信息。
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("ReplicaSetId",$param) and $param["ReplicaSetId"] !== null) {
            $this->ReplicaSetId = $param["ReplicaSetId"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("TimeSpend",$param) and $param["TimeSpend"] !== null) {
            $this->TimeSpend = $param["TimeSpend"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupDesc",$param) and $param["BackupDesc"] !== null) {
            $this->BackupDesc = $param["BackupDesc"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }
    }
}
