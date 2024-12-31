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
 * @method void setStatement(string $Statement) 设置执行语句
 * @method string getId() 获取查询ID
 * @method void setId(string $Id) 设置查询ID
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method string getDuration() 获取运行时间
 * @method void setDuration(string $Duration) 设置运行时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method string getState() 获取执行状态
 * @method void setState(string $State) 设置执行状态
 * @method integer getRowsFetched() 获取获取行数
 * @method void setRowsFetched(integer $RowsFetched) 设置获取行数
 * @method string getUser() 获取用户
 * @method void setUser(string $User) 设置用户
 * @method string getDefaultDB() 获取默认DB
 * @method void setDefaultDB(string $DefaultDB) 设置默认DB
 * @method string getCoordinator() 获取执行的Coordinator节点
 * @method void setCoordinator(string $Coordinator) 设置执行的Coordinator节点
 * @method string getMaxNodePeakMemoryUsage() 获取单节点内存峰值
 * @method void setMaxNodePeakMemoryUsage(string $MaxNodePeakMemoryUsage) 设置单节点内存峰值
 * @method string getQueryType() 获取查询类型
 * @method void setQueryType(string $QueryType) 设置查询类型
 * @method integer getScanHDFSRows() 获取扫描的HDFS行数
 * @method void setScanHDFSRows(integer $ScanHDFSRows) 设置扫描的HDFS行数
 * @method integer getScanKUDURows() 获取扫描的Kudu行数
 * @method void setScanKUDURows(integer $ScanKUDURows) 设置扫描的Kudu行数
 * @method integer getScanRowsTotal() 获取扫描的总行数
 * @method void setScanRowsTotal(integer $ScanRowsTotal) 设置扫描的总行数
 * @method integer getTotalBytesRead() 获取读取的总字节数
 * @method void setTotalBytesRead(integer $TotalBytesRead) 设置读取的总字节数
 * @method integer getTotalBytesSent() 获取发送的总字节数
 * @method void setTotalBytesSent(integer $TotalBytesSent) 设置发送的总字节数
 * @method integer getTotalCpuTime() 获取CPU总时间
 * @method void setTotalCpuTime(integer $TotalCpuTime) 设置CPU总时间
 * @method integer getTotalInnerBytesSent() 获取内部数据发送总量(Bytes)
 * @method void setTotalInnerBytesSent(integer $TotalInnerBytesSent) 设置内部数据发送总量(Bytes)
 * @method integer getTotalScanBytesSent() 获取内部扫描数据发送总量(Bytes)
 * @method void setTotalScanBytesSent(integer $TotalScanBytesSent) 设置内部扫描数据发送总量(Bytes)
 * @method integer getEstimatedPerHostMemBytes() 获取预估单节点内存
 * @method void setEstimatedPerHostMemBytes(integer $EstimatedPerHostMemBytes) 设置预估单节点内存
 * @method integer getNumRowsFetchedFromCache() 获取从缓存中获取的数据行数
 * @method void setNumRowsFetchedFromCache(integer $NumRowsFetchedFromCache) 设置从缓存中获取的数据行数
 * @method string getSessionId() 获取会话ID
 * @method void setSessionId(string $SessionId) 设置会话ID
 * @method integer getPerNodePeakMemoryBytesSum() 获取单节点内存峰值和(Bytes)
 * @method void setPerNodePeakMemoryBytesSum(integer $PerNodePeakMemoryBytesSum) 设置单节点内存峰值和(Bytes)
 * @method integer getBackendsCount() 获取后端个数
 * @method void setBackendsCount(integer $BackendsCount) 设置后端个数
 * @method integer getFragmentInstancesCount() 获取fragment数
 * @method void setFragmentInstancesCount(integer $FragmentInstancesCount) 设置fragment数
 * @method integer getRemainingFragmentCount() 获取剩余未完成Fragment数
 * @method void setRemainingFragmentCount(integer $RemainingFragmentCount) 设置剩余未完成Fragment数
 */
class ImpalaQuery extends AbstractModel
{
    /**
     * @var string 执行语句
     */
    public $Statement;

    /**
     * @var string 查询ID
     */
    public $Id;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var string 运行时间
     */
    public $Duration;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var string 执行状态
     */
    public $State;

    /**
     * @var integer 获取行数
     */
    public $RowsFetched;

    /**
     * @var string 用户
     */
    public $User;

    /**
     * @var string 默认DB
     */
    public $DefaultDB;

    /**
     * @var string 执行的Coordinator节点
     */
    public $Coordinator;

    /**
     * @var string 单节点内存峰值
     */
    public $MaxNodePeakMemoryUsage;

    /**
     * @var string 查询类型
     */
    public $QueryType;

    /**
     * @var integer 扫描的HDFS行数
     */
    public $ScanHDFSRows;

    /**
     * @var integer 扫描的Kudu行数
     */
    public $ScanKUDURows;

    /**
     * @var integer 扫描的总行数
     */
    public $ScanRowsTotal;

    /**
     * @var integer 读取的总字节数
     */
    public $TotalBytesRead;

    /**
     * @var integer 发送的总字节数
     */
    public $TotalBytesSent;

    /**
     * @var integer CPU总时间
     */
    public $TotalCpuTime;

    /**
     * @var integer 内部数据发送总量(Bytes)
     */
    public $TotalInnerBytesSent;

    /**
     * @var integer 内部扫描数据发送总量(Bytes)
     */
    public $TotalScanBytesSent;

    /**
     * @var integer 预估单节点内存
     */
    public $EstimatedPerHostMemBytes;

    /**
     * @var integer 从缓存中获取的数据行数
     */
    public $NumRowsFetchedFromCache;

    /**
     * @var string 会话ID
     */
    public $SessionId;

    /**
     * @var integer 单节点内存峰值和(Bytes)
     */
    public $PerNodePeakMemoryBytesSum;

    /**
     * @var integer 后端个数
     */
    public $BackendsCount;

    /**
     * @var integer fragment数
     */
    public $FragmentInstancesCount;

    /**
     * @var integer 剩余未完成Fragment数
     */
    public $RemainingFragmentCount;

    /**
     * @param string $Statement 执行语句
     * @param string $Id 查询ID
     * @param integer $StartTime 开始时间
     * @param string $Duration 运行时间
     * @param integer $EndTime 结束时间
     * @param string $State 执行状态
     * @param integer $RowsFetched 获取行数
     * @param string $User 用户
     * @param string $DefaultDB 默认DB
     * @param string $Coordinator 执行的Coordinator节点
     * @param string $MaxNodePeakMemoryUsage 单节点内存峰值
     * @param string $QueryType 查询类型
     * @param integer $ScanHDFSRows 扫描的HDFS行数
     * @param integer $ScanKUDURows 扫描的Kudu行数
     * @param integer $ScanRowsTotal 扫描的总行数
     * @param integer $TotalBytesRead 读取的总字节数
     * @param integer $TotalBytesSent 发送的总字节数
     * @param integer $TotalCpuTime CPU总时间
     * @param integer $TotalInnerBytesSent 内部数据发送总量(Bytes)
     * @param integer $TotalScanBytesSent 内部扫描数据发送总量(Bytes)
     * @param integer $EstimatedPerHostMemBytes 预估单节点内存
     * @param integer $NumRowsFetchedFromCache 从缓存中获取的数据行数
     * @param string $SessionId 会话ID
     * @param integer $PerNodePeakMemoryBytesSum 单节点内存峰值和(Bytes)
     * @param integer $BackendsCount 后端个数
     * @param integer $FragmentInstancesCount fragment数
     * @param integer $RemainingFragmentCount 剩余未完成Fragment数
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("PerNodePeakMemoryBytesSum",$param) and $param["PerNodePeakMemoryBytesSum"] !== null) {
            $this->PerNodePeakMemoryBytesSum = $param["PerNodePeakMemoryBytesSum"];
        }

        if (array_key_exists("BackendsCount",$param) and $param["BackendsCount"] !== null) {
            $this->BackendsCount = $param["BackendsCount"];
        }

        if (array_key_exists("FragmentInstancesCount",$param) and $param["FragmentInstancesCount"] !== null) {
            $this->FragmentInstancesCount = $param["FragmentInstancesCount"];
        }

        if (array_key_exists("RemainingFragmentCount",$param) and $param["RemainingFragmentCount"] !== null) {
            $this->RemainingFragmentCount = $param["RemainingFragmentCount"];
        }
    }
}
