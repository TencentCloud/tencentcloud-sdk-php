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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务公共指标
 *
 * @method float getCreateTaskTime() 获取创建任务时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTaskTime(float $CreateTaskTime) 设置创建任务时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getProcessTime() 获取预处理总时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessTime(float $ProcessTime) 设置预处理总时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getQueueTime() 获取排队时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueTime(float $QueueTime) 设置排队时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getExecutionTime() 获取执行时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionTime(float $ExecutionTime) 设置执行时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsResultCacheHit() 获取是否命中结果缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsResultCacheHit(boolean $IsResultCacheHit) 设置是否命中结果缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMatchedMVBytes() 获取匹配物化视图数据量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchedMVBytes(integer $MatchedMVBytes) 设置匹配物化视图数据量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMatchedMVs() 获取匹配物化视图列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchedMVs(string $MatchedMVs) 设置匹配物化视图列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAffectedBytes() 获取结果数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectedBytes(string $AffectedBytes) 设置结果数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAffectedRows() 获取	结果行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectedRows(integer $AffectedRows) 设置	结果行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProcessedBytes() 获取扫描数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessedBytes(integer $ProcessedBytes) 设置扫描数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProcessedRows() 获取	扫描行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessedRows(integer $ProcessedRows) 设置	扫描行数
注意：此字段可能返回 null，表示取不到有效值。
 */
class CommonMetrics extends AbstractModel
{
    /**
     * @var float 创建任务时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTaskTime;

    /**
     * @var float 预处理总时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessTime;

    /**
     * @var float 排队时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueTime;

    /**
     * @var float 执行时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionTime;

    /**
     * @var boolean 是否命中结果缓存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsResultCacheHit;

    /**
     * @var integer 匹配物化视图数据量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchedMVBytes;

    /**
     * @var string 匹配物化视图列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchedMVs;

    /**
     * @var string 结果数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectedBytes;

    /**
     * @var integer 	结果行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectedRows;

    /**
     * @var integer 扫描数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessedBytes;

    /**
     * @var integer 	扫描行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessedRows;

    /**
     * @param float $CreateTaskTime 创建任务时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ProcessTime 预处理总时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $QueueTime 排队时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ExecutionTime 执行时长，单位：ms
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsResultCacheHit 是否命中结果缓存
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MatchedMVBytes 匹配物化视图数据量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MatchedMVs 匹配物化视图列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AffectedBytes 结果数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AffectedRows 	结果行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProcessedBytes 扫描数据量，单位：byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProcessedRows 	扫描行数
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
        if (array_key_exists("CreateTaskTime",$param) and $param["CreateTaskTime"] !== null) {
            $this->CreateTaskTime = $param["CreateTaskTime"];
        }

        if (array_key_exists("ProcessTime",$param) and $param["ProcessTime"] !== null) {
            $this->ProcessTime = $param["ProcessTime"];
        }

        if (array_key_exists("QueueTime",$param) and $param["QueueTime"] !== null) {
            $this->QueueTime = $param["QueueTime"];
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = $param["ExecutionTime"];
        }

        if (array_key_exists("IsResultCacheHit",$param) and $param["IsResultCacheHit"] !== null) {
            $this->IsResultCacheHit = $param["IsResultCacheHit"];
        }

        if (array_key_exists("MatchedMVBytes",$param) and $param["MatchedMVBytes"] !== null) {
            $this->MatchedMVBytes = $param["MatchedMVBytes"];
        }

        if (array_key_exists("MatchedMVs",$param) and $param["MatchedMVs"] !== null) {
            $this->MatchedMVs = $param["MatchedMVs"];
        }

        if (array_key_exists("AffectedBytes",$param) and $param["AffectedBytes"] !== null) {
            $this->AffectedBytes = $param["AffectedBytes"];
        }

        if (array_key_exists("AffectedRows",$param) and $param["AffectedRows"] !== null) {
            $this->AffectedRows = $param["AffectedRows"];
        }

        if (array_key_exists("ProcessedBytes",$param) and $param["ProcessedBytes"] !== null) {
            $this->ProcessedBytes = $param["ProcessedBytes"];
        }

        if (array_key_exists("ProcessedRows",$param) and $param["ProcessedRows"] !== null) {
            $this->ProcessedRows = $param["ProcessedRows"];
        }
    }
}
