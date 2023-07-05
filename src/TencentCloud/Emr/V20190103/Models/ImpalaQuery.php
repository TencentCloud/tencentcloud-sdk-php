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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Impala查询详情
 *
 * @method string getStatement() 获取执行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatement(string $Statement) 设置执行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取查询ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置查询ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRowsFetched() 获取获取行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowsFetched(integer $RowsFetched) 设置获取行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultDB() 获取默认DB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultDB(string $DefaultDB) 设置默认DB
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCoordinator() 获取执行的Coordinator节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoordinator(string $Coordinator) 设置执行的Coordinator节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMaxNodePeakMemoryUsage() 获取单节点内存峰值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxNodePeakMemoryUsage(string $MaxNodePeakMemoryUsage) 设置单节点内存峰值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueryType() 获取查询类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryType(string $QueryType) 设置查询类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanHDFSRows() 获取扫描的HDFS行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanHDFSRows(integer $ScanHDFSRows) 设置扫描的HDFS行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanKUDURows() 获取扫描的Kudu行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanKUDURows(integer $ScanKUDURows) 设置扫描的Kudu行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanRowsTotal() 获取扫描的总行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanRowsTotal(integer $ScanRowsTotal) 设置扫描的总行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalBytesRead() 获取读取的总字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalBytesRead(integer $TotalBytesRead) 设置读取的总字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalBytesSent() 获取发送的总字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalBytesSent(integer $TotalBytesSent) 设置发送的总字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCpuTime() 获取CPU总时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCpuTime(integer $TotalCpuTime) 设置CPU总时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalInnerBytesSent() 获取内部数据发送总量(Bytes)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalInnerBytesSent(integer $TotalInnerBytesSent) 设置内部数据发送总量(Bytes)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalScanBytesSent() 获取内部扫描数据发送总量(Bytes)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalScanBytesSent(integer $TotalScanBytesSent) 设置内部扫描数据发送总量(Bytes)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEstimatedPerHostMemBytes() 获取预估单节点内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEstimatedPerHostMemBytes(integer $EstimatedPerHostMemBytes) 设置预估单节点内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumRowsFetchedFromCache() 获取从缓存中获取的数据行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumRowsFetchedFromCache(integer $NumRowsFetchedFromCache) 设置从缓存中获取的数据行数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImpalaQuery extends AbstractModel
{
    /**
     * @var string 执行语句
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Statement;

    /**
     * @var string 查询ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 执行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var integer 获取行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowsFetched;

    /**
     * @var string 用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string 默认DB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultDB;

    /**
     * @var string 执行的Coordinator节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Coordinator;

    /**
     * @var string 单节点内存峰值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxNodePeakMemoryUsage;

    /**
     * @var string 查询类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryType;

    /**
     * @var integer 扫描的HDFS行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanHDFSRows;

    /**
     * @var integer 扫描的Kudu行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanKUDURows;

    /**
     * @var integer 扫描的总行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanRowsTotal;

    /**
     * @var integer 读取的总字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalBytesRead;

    /**
     * @var integer 发送的总字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalBytesSent;

    /**
     * @var integer CPU总时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCpuTime;

    /**
     * @var integer 内部数据发送总量(Bytes)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalInnerBytesSent;

    /**
     * @var integer 内部扫描数据发送总量(Bytes)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalScanBytesSent;

    /**
     * @var integer 预估单节点内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EstimatedPerHostMemBytes;

    /**
     * @var integer 从缓存中获取的数据行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumRowsFetchedFromCache;

    /**
     * @param string $Statement 执行语句
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 查询ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 执行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RowsFetched 获取行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultDB 默认DB
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Coordinator 执行的Coordinator节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MaxNodePeakMemoryUsage 单节点内存峰值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueryType 查询类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanHDFSRows 扫描的HDFS行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanKUDURows 扫描的Kudu行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanRowsTotal 扫描的总行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalBytesRead 读取的总字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalBytesSent 发送的总字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCpuTime CPU总时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalInnerBytesSent 内部数据发送总量(Bytes)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalScanBytesSent 内部扫描数据发送总量(Bytes)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EstimatedPerHostMemBytes 预估单节点内存
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumRowsFetchedFromCache 从缓存中获取的数据行数
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Statement",$param) and $param["Statement"] !== null) {
            $this->Statement = $param["Statement"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("RowsFetched",$param) and $param["RowsFetched"] !== null) {
            $this->RowsFetched = $param["RowsFetched"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("DefaultDB",$param) and $param["DefaultDB"] !== null) {
            $this->DefaultDB = $param["DefaultDB"];
        }

        if (array_key_exists("Coordinator",$param) and $param["Coordinator"] !== null) {
            $this->Coordinator = $param["Coordinator"];
        }

        if (array_key_exists("MaxNodePeakMemoryUsage",$param) and $param["MaxNodePeakMemoryUsage"] !== null) {
            $this->MaxNodePeakMemoryUsage = $param["MaxNodePeakMemoryUsage"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("ScanHDFSRows",$param) and $param["ScanHDFSRows"] !== null) {
            $this->ScanHDFSRows = $param["ScanHDFSRows"];
        }

        if (array_key_exists("ScanKUDURows",$param) and $param["ScanKUDURows"] !== null) {
            $this->ScanKUDURows = $param["ScanKUDURows"];
        }

        if (array_key_exists("ScanRowsTotal",$param) and $param["ScanRowsTotal"] !== null) {
            $this->ScanRowsTotal = $param["ScanRowsTotal"];
        }

        if (array_key_exists("TotalBytesRead",$param) and $param["TotalBytesRead"] !== null) {
            $this->TotalBytesRead = $param["TotalBytesRead"];
        }

        if (array_key_exists("TotalBytesSent",$param) and $param["TotalBytesSent"] !== null) {
            $this->TotalBytesSent = $param["TotalBytesSent"];
        }

        if (array_key_exists("TotalCpuTime",$param) and $param["TotalCpuTime"] !== null) {
            $this->TotalCpuTime = $param["TotalCpuTime"];
        }

        if (array_key_exists("TotalInnerBytesSent",$param) and $param["TotalInnerBytesSent"] !== null) {
            $this->TotalInnerBytesSent = $param["TotalInnerBytesSent"];
        }

        if (array_key_exists("TotalScanBytesSent",$param) and $param["TotalScanBytesSent"] !== null) {
            $this->TotalScanBytesSent = $param["TotalScanBytesSent"];
        }

        if (array_key_exists("EstimatedPerHostMemBytes",$param) and $param["EstimatedPerHostMemBytes"] !== null) {
            $this->EstimatedPerHostMemBytes = $param["EstimatedPerHostMemBytes"];
        }

        if (array_key_exists("NumRowsFetchedFromCache",$param) and $param["NumRowsFetchedFromCache"] !== null) {
            $this->NumRowsFetchedFromCache = $param["NumRowsFetchedFromCache"];
        }
    }
}
