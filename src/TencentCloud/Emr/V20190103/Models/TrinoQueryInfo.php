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
 * trino 查询信息
 *
 * @method string getCatalog() 获取catalog
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalog(string $Catalog) 设置catalog
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientIpAddr() 获取提交IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIpAddr(string $ClientIpAddr) 设置提交IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompletedSplits() 获取切片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompletedSplits(string $CompletedSplits) 设置切片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuTime() 获取CPU时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuTime(integer $CpuTime) 设置CPU时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCumulativeMemory() 获取累计内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCumulativeMemory(integer $CumulativeMemory) 设置累计内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDurationMillis() 获取执行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationMillis(integer $DurationMillis) 设置执行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTime() 获取结束时间 (s)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置结束时间 (s)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取查询ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置查询ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInternalNetworkBytes() 获取内部传输量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalNetworkBytes(integer $InternalNetworkBytes) 设置内部传输量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputBytes() 获取输出字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputBytes(integer $OutputBytes) 设置输出字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPeakUserMemoryBytes() 获取峰值内存量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeakUserMemoryBytes(integer $PeakUserMemoryBytes) 设置峰值内存量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhysicalInputBytes() 获取物理输入量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhysicalInputBytes(integer $PhysicalInputBytes) 设置物理输入量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProcessedInputBytes() 获取处理输入量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessedInputBytes(integer $ProcessedInputBytes) 设置处理输入量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSqlCompileTime() 获取编译时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlCompileTime(integer $SqlCompileTime) 设置编译时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取开始时间 (s)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置开始时间 (s)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatement() 获取执行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatement(string $Statement) 设置执行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取提交用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置提交用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWrittenBytes() 获取写入字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWrittenBytes(integer $WrittenBytes) 设置写入字节数
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrinoQueryInfo extends AbstractModel
{
    /**
     * @var string catalog
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Catalog;

    /**
     * @var string 提交IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIpAddr;

    /**
     * @var string 切片数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompletedSplits;

    /**
     * @var integer CPU时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuTime;

    /**
     * @var integer 累计内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CumulativeMemory;

    /**
     * @var integer 执行时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationMillis;

    /**
     * @var integer 结束时间 (s)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 查询ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 内部传输量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalNetworkBytes;

    /**
     * @var integer 输出字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputBytes;

    /**
     * @var integer 峰值内存量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeakUserMemoryBytes;

    /**
     * @var integer 物理输入量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhysicalInputBytes;

    /**
     * @var integer 处理输入量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessedInputBytes;

    /**
     * @var integer 编译时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlCompileTime;

    /**
     * @var integer 开始时间 (s)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 执行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 执行语句
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Statement;

    /**
     * @var string 提交用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var integer 写入字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WrittenBytes;

    /**
     * @param string $Catalog catalog
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientIpAddr 提交IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompletedSplits 切片数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuTime CPU时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CumulativeMemory 累计内存
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DurationMillis 执行时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTime 结束时间 (s)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 查询ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InternalNetworkBytes 内部传输量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputBytes 输出字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PeakUserMemoryBytes 峰值内存量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhysicalInputBytes 物理输入量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProcessedInputBytes 处理输入量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SqlCompileTime 编译时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime 开始时间 (s)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 执行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Statement 执行语句
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 提交用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WrittenBytes 写入字节数
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
        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("ClientIpAddr",$param) and $param["ClientIpAddr"] !== null) {
            $this->ClientIpAddr = $param["ClientIpAddr"];
        }

        if (array_key_exists("CompletedSplits",$param) and $param["CompletedSplits"] !== null) {
            $this->CompletedSplits = $param["CompletedSplits"];
        }

        if (array_key_exists("CpuTime",$param) and $param["CpuTime"] !== null) {
            $this->CpuTime = $param["CpuTime"];
        }

        if (array_key_exists("CumulativeMemory",$param) and $param["CumulativeMemory"] !== null) {
            $this->CumulativeMemory = $param["CumulativeMemory"];
        }

        if (array_key_exists("DurationMillis",$param) and $param["DurationMillis"] !== null) {
            $this->DurationMillis = $param["DurationMillis"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InternalNetworkBytes",$param) and $param["InternalNetworkBytes"] !== null) {
            $this->InternalNetworkBytes = $param["InternalNetworkBytes"];
        }

        if (array_key_exists("OutputBytes",$param) and $param["OutputBytes"] !== null) {
            $this->OutputBytes = $param["OutputBytes"];
        }

        if (array_key_exists("PeakUserMemoryBytes",$param) and $param["PeakUserMemoryBytes"] !== null) {
            $this->PeakUserMemoryBytes = $param["PeakUserMemoryBytes"];
        }

        if (array_key_exists("PhysicalInputBytes",$param) and $param["PhysicalInputBytes"] !== null) {
            $this->PhysicalInputBytes = $param["PhysicalInputBytes"];
        }

        if (array_key_exists("ProcessedInputBytes",$param) and $param["ProcessedInputBytes"] !== null) {
            $this->ProcessedInputBytes = $param["ProcessedInputBytes"];
        }

        if (array_key_exists("SqlCompileTime",$param) and $param["SqlCompileTime"] !== null) {
            $this->SqlCompileTime = $param["SqlCompileTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Statement",$param) and $param["Statement"] !== null) {
            $this->Statement = $param["Statement"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("WrittenBytes",$param) and $param["WrittenBytes"] !== null) {
            $this->WrittenBytes = $param["WrittenBytes"];
        }
    }
}
