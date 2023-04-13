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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份记录
作为出参时，每个字段都会填充
作为入参时， 原封不动将每个字段填回结构体， 注意只有FIleTag=OSDATA才可以调用此接口
 *
 * @method integer getZoneId() 获取表格组ID
 * @method void setZoneId(integer $ZoneId) 设置表格组ID
 * @method string getTableName() 获取表名称
 * @method void setTableName(string $TableName) 设置表名称
 * @method string getBackupType() 获取备份源
 * @method void setBackupType(string $BackupType) 设置备份源
 * @method string getFileTag() 获取文件标签：TCAPLUS_FULL或OSDATA
 * @method void setFileTag(string $FileTag) 设置文件标签：TCAPLUS_FULL或OSDATA
 * @method integer getShardCount() 获取分片数量
 * @method void setShardCount(integer $ShardCount) 设置分片数量
 * @method string getBackupBatchTime() 获取备份批次日期
 * @method void setBackupBatchTime(string $BackupBatchTime) 设置备份批次日期
 * @method integer getBackupFileSize() 获取备份文件汇总大小
 * @method void setBackupFileSize(integer $BackupFileSize) 设置备份文件汇总大小
 * @method string getBackupSuccRate() 获取备份成功率
 * @method void setBackupSuccRate(string $BackupSuccRate) 设置备份成功率
 * @method string getBackupExpireTime() 获取备份文件过期时间
 * @method void setBackupExpireTime(string $BackupExpireTime) 设置备份文件过期时间
 * @method integer getAppId() 获取业务ID
 * @method void setAppId(integer $AppId) 设置业务ID
 */
class BackupRecords extends AbstractModel
{
    /**
     * @var integer 表格组ID
     */
    public $ZoneId;

    /**
     * @var string 表名称
     */
    public $TableName;

    /**
     * @var string 备份源
     */
    public $BackupType;

    /**
     * @var string 文件标签：TCAPLUS_FULL或OSDATA
     */
    public $FileTag;

    /**
     * @var integer 分片数量
     */
    public $ShardCount;

    /**
     * @var string 备份批次日期
     */
    public $BackupBatchTime;

    /**
     * @var integer 备份文件汇总大小
     */
    public $BackupFileSize;

    /**
     * @var string 备份成功率
     */
    public $BackupSuccRate;

    /**
     * @var string 备份文件过期时间
     */
    public $BackupExpireTime;

    /**
     * @var integer 业务ID
     */
    public $AppId;

    /**
     * @param integer $ZoneId 表格组ID
     * @param string $TableName 表名称
     * @param string $BackupType 备份源
     * @param string $FileTag 文件标签：TCAPLUS_FULL或OSDATA
     * @param integer $ShardCount 分片数量
     * @param string $BackupBatchTime 备份批次日期
     * @param integer $BackupFileSize 备份文件汇总大小
     * @param string $BackupSuccRate 备份成功率
     * @param string $BackupExpireTime 备份文件过期时间
     * @param integer $AppId 业务ID
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("FileTag",$param) and $param["FileTag"] !== null) {
            $this->FileTag = $param["FileTag"];
        }

        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("BackupBatchTime",$param) and $param["BackupBatchTime"] !== null) {
            $this->BackupBatchTime = $param["BackupBatchTime"];
        }

        if (array_key_exists("BackupFileSize",$param) and $param["BackupFileSize"] !== null) {
            $this->BackupFileSize = $param["BackupFileSize"];
        }

        if (array_key_exists("BackupSuccRate",$param) and $param["BackupSuccRate"] !== null) {
            $this->BackupSuccRate = $param["BackupSuccRate"];
        }

        if (array_key_exists("BackupExpireTime",$param) and $param["BackupExpireTime"] !== null) {
            $this->BackupExpireTime = $param["BackupExpireTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
