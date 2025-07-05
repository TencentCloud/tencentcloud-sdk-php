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
 * 异地备份信息
 *
 * @method integer getSubBackupId() 获取异地备份子任务的ID
 * @method void setSubBackupId(integer $SubBackupId) 设置异地备份子任务的ID
 * @method string getRegion() 获取异地备份所在地域
 * @method void setRegion(string $Region) 设置异地备份所在地域
 * @method string getStatus() 获取备份任务状态。可能的值有 "SUCCESS": 备份成功， "FAILED": 备份失败， "RUNNING": 备份进行中。
 * @method void setStatus(string $Status) 设置备份任务状态。可能的值有 "SUCCESS": 备份成功， "FAILED": 备份失败， "RUNNING": 备份进行中。
 * @method string getStartTime() 获取异地备份任务的开始时间
 * @method void setStartTime(string $StartTime) 设置异地备份任务的开始时间
 * @method string getFinishTime() 获取异地备份任务的结束时间
 * @method void setFinishTime(string $FinishTime) 设置异地备份任务的结束时间
 * @method string getUrl() 获取下载地址
 * @method void setUrl(string $Url) 设置下载地址
 */
class RemoteBackupInfo extends AbstractModel
{
    /**
     * @var integer 异地备份子任务的ID
     */
    public $SubBackupId;

    /**
     * @var string 异地备份所在地域
     */
    public $Region;

    /**
     * @var string 备份任务状态。可能的值有 "SUCCESS": 备份成功， "FAILED": 备份失败， "RUNNING": 备份进行中。
     */
    public $Status;

    /**
     * @var string 异地备份任务的开始时间
     */
    public $StartTime;

    /**
     * @var string 异地备份任务的结束时间
     */
    public $FinishTime;

    /**
     * @var string 下载地址
     */
    public $Url;

    /**
     * @param integer $SubBackupId 异地备份子任务的ID
     * @param string $Region 异地备份所在地域
     * @param string $Status 备份任务状态。可能的值有 "SUCCESS": 备份成功， "FAILED": 备份失败， "RUNNING": 备份进行中。
     * @param string $StartTime 异地备份任务的开始时间
     * @param string $FinishTime 异地备份任务的结束时间
     * @param string $Url 下载地址
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
        if (array_key_exists("SubBackupId",$param) and $param["SubBackupId"] !== null) {
            $this->SubBackupId = $param["SubBackupId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
