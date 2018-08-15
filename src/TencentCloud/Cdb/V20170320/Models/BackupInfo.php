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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取备份文件名
 * @method void setName(string $Name) 设置备份文件名
 * @method integer getSize() 获取备份文件大小，单位：Byte
 * @method void setSize(integer $Size) 设置备份文件大小，单位：Byte
 * @method string getDate() 获取备份快照时间，时间格式：2016-03-17 02:10:37
 * @method void setDate(string $Date) 设置备份快照时间，时间格式：2016-03-17 02:10:37
 * @method string getIntranetUrl() 获取内网下载地址
 * @method void setIntranetUrl(string $IntranetUrl) 设置内网下载地址
 * @method string getInternetUrl() 获取外网下载地址
 * @method void setInternetUrl(string $InternetUrl) 设置外网下载地址
 * @method string getType() 获取日志具体类型，可能的值有：logic - 逻辑冷备，physical - 物理冷备
 * @method void setType(string $Type) 设置日志具体类型，可能的值有：logic - 逻辑冷备，physical - 物理冷备
 * @method integer getBackupId() 获取备份子任务的ID，删除备份文件时使用
 * @method void setBackupId(integer $BackupId) 设置备份子任务的ID，删除备份文件时使用
 * @method string getStatus() 获取备份任务状态
 * @method void setStatus(string $Status) 设置备份任务状态
 * @method string getFinishTime() 获取备份任务的完成时间
 * @method void setFinishTime(string $FinishTime) 设置备份任务的完成时间
 * @method string getCreator() 获取备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值
 * @method void setCreator(string $Creator) 设置备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值
 */

/**
 *备份详细信息
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string 备份文件名
     */
    public $Name;

    /**
     * @var integer 备份文件大小，单位：Byte
     */
    public $Size;

    /**
     * @var string 备份快照时间，时间格式：2016-03-17 02:10:37
     */
    public $Date;

    /**
     * @var string 内网下载地址
     */
    public $IntranetUrl;

    /**
     * @var string 外网下载地址
     */
    public $InternetUrl;

    /**
     * @var string 日志具体类型，可能的值有：logic - 逻辑冷备，physical - 物理冷备
     */
    public $Type;

    /**
     * @var integer 备份子任务的ID，删除备份文件时使用
     */
    public $BackupId;

    /**
     * @var string 备份任务状态
     */
    public $Status;

    /**
     * @var string 备份任务的完成时间
     */
    public $FinishTime;

    /**
     * @var string 备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值
     */
    public $Creator;
    /**
     * @param string $Name 备份文件名
     * @param integer $Size 备份文件大小，单位：Byte
     * @param string $Date 备份快照时间，时间格式：2016-03-17 02:10:37
     * @param string $IntranetUrl 内网下载地址
     * @param string $InternetUrl 外网下载地址
     * @param string $Type 日志具体类型，可能的值有：logic - 逻辑冷备，physical - 物理冷备
     * @param integer $BackupId 备份子任务的ID，删除备份文件时使用
     * @param string $Status 备份任务状态
     * @param string $FinishTime 备份任务的完成时间
     * @param string $Creator 备份的创建者，可能的值：SYSTEM - 系统创建，Uin - 发起者Uin值
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
    }
}
