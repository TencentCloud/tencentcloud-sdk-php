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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupFiles请求参数结构体
 *
 * @method string getInstanceId() 获取按实例ID查询
 * @method void setInstanceId(string $InstanceId) 设置按实例ID查询
 * @method string getBackupType() 获取备份类型，Data:数据备份，Binlog:Binlog备份，Errlog:错误日志，Slowlog:慢日志
 * @method void setBackupType(string $BackupType) 设置备份类型，Data:数据备份，Binlog:Binlog备份，Errlog:错误日志，Slowlog:慢日志
 * @method string getStartTime() 获取按开始时间查询
 * @method void setStartTime(string $StartTime) 设置按开始时间查询
 * @method string getEndTime() 获取按结束时间查询
 * @method void setEndTime(string $EndTime) 设置按结束时间查询
 * @method integer getLimit() 获取分页参数
 * @method void setLimit(integer $Limit) 设置分页参数
 * @method integer getOffset() 获取分页参数
 * @method void setOffset(integer $Offset) 设置分页参数
 * @method string getOrderBy() 获取排序参数，可选值：Time,Size
 * @method void setOrderBy(string $OrderBy) 设置排序参数，可选值：Time,Size
 * @method string getOrderType() 获取排序参数, 可选值：DESC,ASC
 * @method void setOrderType(string $OrderType) 设置排序参数, 可选值：DESC,ASC
 */
class DescribeBackupFilesRequest extends AbstractModel
{
    /**
     * @var string 按实例ID查询
     */
    public $InstanceId;

    /**
     * @var string 备份类型，Data:数据备份，Binlog:Binlog备份，Errlog:错误日志，Slowlog:慢日志
     */
    public $BackupType;

    /**
     * @var string 按开始时间查询
     */
    public $StartTime;

    /**
     * @var string 按结束时间查询
     */
    public $EndTime;

    /**
     * @var integer 分页参数
     */
    public $Limit;

    /**
     * @var integer 分页参数
     */
    public $Offset;

    /**
     * @var string 排序参数，可选值：Time,Size
     */
    public $OrderBy;

    /**
     * @var string 排序参数, 可选值：DESC,ASC
     */
    public $OrderType;

    /**
     * @param string $InstanceId 按实例ID查询
     * @param string $BackupType 备份类型，Data:数据备份，Binlog:Binlog备份，Errlog:错误日志，Slowlog:慢日志
     * @param string $StartTime 按开始时间查询
     * @param string $EndTime 按结束时间查询
     * @param integer $Limit 分页参数
     * @param integer $Offset 分页参数
     * @param string $OrderBy 排序参数，可选值：Time,Size
     * @param string $OrderType 排序参数, 可选值：DESC,ASC
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
