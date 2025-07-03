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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢查询记录
 *
 * @method string getOsUser() 获取查询用户
 * @method void setOsUser(string $OsUser) 设置查询用户
 * @method string getInitialQueryId() 获取查询ID
 * @method void setInitialQueryId(string $InitialQueryId) 设置查询ID
 * @method string getSql() 获取SQL语句
 * @method void setSql(string $Sql) 设置SQL语句
 * @method string getQueryStartTime() 获取开始时间
 * @method void setQueryStartTime(string $QueryStartTime) 设置开始时间
 * @method integer getDurationMs() 获取执行耗时
 * @method void setDurationMs(integer $DurationMs) 设置执行耗时
 * @method integer getReadRows() 获取读取行数
 * @method void setReadRows(integer $ReadRows) 设置读取行数
 * @method integer getResultRows() 获取读取字节数
 * @method void setResultRows(integer $ResultRows) 设置读取字节数
 * @method integer getResultBytes() 获取结果字节数
 * @method void setResultBytes(integer $ResultBytes) 设置结果字节数
 * @method integer getMemoryUsage() 获取内存
 * @method void setMemoryUsage(integer $MemoryUsage) 设置内存
 * @method string getInitialAddress() 获取初始查询IP
 * @method void setInitialAddress(string $InitialAddress) 设置初始查询IP
 * @method string getDbName() 获取数据库名
 * @method void setDbName(string $DbName) 设置数据库名
 * @method integer getIsQuery() 获取是否是查询，0：否，1：查询语句
 * @method void setIsQuery(integer $IsQuery) 设置是否是查询，0：否，1：查询语句
 * @method float getResultBytesMB() 获取ResultBytes的MB格式
 * @method void setResultBytesMB(float $ResultBytesMB) 设置ResultBytes的MB格式
 * @method float getMemoryUsageMB() 获取MemoryUsage的MB表示
 * @method void setMemoryUsageMB(float $MemoryUsageMB) 设置MemoryUsage的MB表示
 * @method float getDurationSec() 获取DurationMs的秒表示
 * @method void setDurationSec(float $DurationSec) 设置DurationMs的秒表示
 * @method string getState() 获取状态
 * @method void setState(string $State) 设置状态
 * @method string getCatalogName() 获取Catalog  Name
 * @method void setCatalogName(string $CatalogName) 设置Catalog  Name
 * @method integer getCpuTimeMs() 获取cpu执行时间 
 * @method void setCpuTimeMs(integer $CpuTimeMs) 设置cpu执行时间 
 * @method string getComputeGroup() 获取计算组
 * @method void setComputeGroup(string $ComputeGroup) 设置计算组
 */
class SlowQueryRecord extends AbstractModel
{
    /**
     * @var string 查询用户
     */
    public $OsUser;

    /**
     * @var string 查询ID
     */
    public $InitialQueryId;

    /**
     * @var string SQL语句
     */
    public $Sql;

    /**
     * @var string 开始时间
     */
    public $QueryStartTime;

    /**
     * @var integer 执行耗时
     */
    public $DurationMs;

    /**
     * @var integer 读取行数
     */
    public $ReadRows;

    /**
     * @var integer 读取字节数
     */
    public $ResultRows;

    /**
     * @var integer 结果字节数
     */
    public $ResultBytes;

    /**
     * @var integer 内存
     */
    public $MemoryUsage;

    /**
     * @var string 初始查询IP
     */
    public $InitialAddress;

    /**
     * @var string 数据库名
     */
    public $DbName;

    /**
     * @var integer 是否是查询，0：否，1：查询语句
     */
    public $IsQuery;

    /**
     * @var float ResultBytes的MB格式
     */
    public $ResultBytesMB;

    /**
     * @var float MemoryUsage的MB表示
     */
    public $MemoryUsageMB;

    /**
     * @var float DurationMs的秒表示
     */
    public $DurationSec;

    /**
     * @var string 状态
     */
    public $State;

    /**
     * @var string Catalog  Name
     */
    public $CatalogName;

    /**
     * @var integer cpu执行时间 
     */
    public $CpuTimeMs;

    /**
     * @var string 计算组
     */
    public $ComputeGroup;

    /**
     * @param string $OsUser 查询用户
     * @param string $InitialQueryId 查询ID
     * @param string $Sql SQL语句
     * @param string $QueryStartTime 开始时间
     * @param integer $DurationMs 执行耗时
     * @param integer $ReadRows 读取行数
     * @param integer $ResultRows 读取字节数
     * @param integer $ResultBytes 结果字节数
     * @param integer $MemoryUsage 内存
     * @param string $InitialAddress 初始查询IP
     * @param string $DbName 数据库名
     * @param integer $IsQuery 是否是查询，0：否，1：查询语句
     * @param float $ResultBytesMB ResultBytes的MB格式
     * @param float $MemoryUsageMB MemoryUsage的MB表示
     * @param float $DurationSec DurationMs的秒表示
     * @param string $State 状态
     * @param string $CatalogName Catalog  Name
     * @param integer $CpuTimeMs cpu执行时间 
     * @param string $ComputeGroup 计算组
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
        if (array_key_exists("OsUser",$param) and $param["OsUser"] !== null) {
            $this->OsUser = $param["OsUser"];
        }

        if (array_key_exists("InitialQueryId",$param) and $param["InitialQueryId"] !== null) {
            $this->InitialQueryId = $param["InitialQueryId"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("QueryStartTime",$param) and $param["QueryStartTime"] !== null) {
            $this->QueryStartTime = $param["QueryStartTime"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("ReadRows",$param) and $param["ReadRows"] !== null) {
            $this->ReadRows = $param["ReadRows"];
        }

        if (array_key_exists("ResultRows",$param) and $param["ResultRows"] !== null) {
            $this->ResultRows = $param["ResultRows"];
        }

        if (array_key_exists("ResultBytes",$param) and $param["ResultBytes"] !== null) {
            $this->ResultBytes = $param["ResultBytes"];
        }

        if (array_key_exists("MemoryUsage",$param) and $param["MemoryUsage"] !== null) {
            $this->MemoryUsage = $param["MemoryUsage"];
        }

        if (array_key_exists("InitialAddress",$param) and $param["InitialAddress"] !== null) {
            $this->InitialAddress = $param["InitialAddress"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("IsQuery",$param) and $param["IsQuery"] !== null) {
            $this->IsQuery = $param["IsQuery"];
        }

        if (array_key_exists("ResultBytesMB",$param) and $param["ResultBytesMB"] !== null) {
            $this->ResultBytesMB = $param["ResultBytesMB"];
        }

        if (array_key_exists("MemoryUsageMB",$param) and $param["MemoryUsageMB"] !== null) {
            $this->MemoryUsageMB = $param["MemoryUsageMB"];
        }

        if (array_key_exists("DurationSec",$param) and $param["DurationSec"] !== null) {
            $this->DurationSec = $param["DurationSec"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("CpuTimeMs",$param) and $param["CpuTimeMs"] !== null) {
            $this->CpuTimeMs = $param["CpuTimeMs"];
        }

        if (array_key_exists("ComputeGroup",$param) and $param["ComputeGroup"] !== null) {
            $this->ComputeGroup = $param["ComputeGroup"];
        }
    }
}
