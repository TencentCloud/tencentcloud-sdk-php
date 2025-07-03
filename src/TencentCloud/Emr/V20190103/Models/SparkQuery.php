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
 * spark查询详情
 *
 * @method string getStatement() 获取执行语句
 * @method void setStatement(string $Statement) 设置执行语句
 * @method integer getDuration() 获取执行时长（单位毫秒）
 * @method void setDuration(integer $Duration) 设置执行时长（单位毫秒）
 * @method string getStatus() 获取执行状态
 * @method void setStatus(string $Status) 设置执行状态
 * @method string getId() 获取查询ID
 * @method void setId(string $Id) 设置查询ID
 * @method integer getScanPartitionNum() 获取扫描分区数
 * @method void setScanPartitionNum(integer $ScanPartitionNum) 设置扫描分区数
 * @method integer getScanRowNum() 获取扫描总行数
 * @method void setScanRowNum(integer $ScanRowNum) 设置扫描总行数
 * @method integer getScanFileNum() 获取扫描总文件数
 * @method void setScanFileNum(integer $ScanFileNum) 设置扫描总文件数
 * @method integer getScanTotalData() 获取查询扫描总数据量(单位B)
 * @method void setScanTotalData(integer $ScanTotalData) 设置查询扫描总数据量(单位B)
 * @method array getApplicationId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(array $ApplicationId) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputRowNum() 获取输出总行数
 * @method void setOutputRowNum(integer $OutputRowNum) 设置输出总行数
 * @method integer getOutputFileNum() 获取输出总文件数
 * @method void setOutputFileNum(integer $OutputFileNum) 设置输出总文件数
 * @method integer getOutputPartitionNum() 获取输出分区数
 * @method void setOutputPartitionNum(integer $OutputPartitionNum) 设置输出分区数
 * @method integer getOutputTotalData() 获取输出总数据量（单位B）
 * @method void setOutputTotalData(integer $OutputTotalData) 设置输出总数据量（单位B）
 * @method integer getBeginTime() 获取开始时间
 * @method void setBeginTime(integer $BeginTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 */
class SparkQuery extends AbstractModel
{
    /**
     * @var string 执行语句
     */
    public $Statement;

    /**
     * @var integer 执行时长（单位毫秒）
     */
    public $Duration;

    /**
     * @var string 执行状态
     */
    public $Status;

    /**
     * @var string 查询ID
     */
    public $Id;

    /**
     * @var integer 扫描分区数
     */
    public $ScanPartitionNum;

    /**
     * @var integer 扫描总行数
     */
    public $ScanRowNum;

    /**
     * @var integer 扫描总文件数
     */
    public $ScanFileNum;

    /**
     * @var integer 查询扫描总数据量(单位B)
     */
    public $ScanTotalData;

    /**
     * @var array 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var integer 输出总行数
     */
    public $OutputRowNum;

    /**
     * @var integer 输出总文件数
     */
    public $OutputFileNum;

    /**
     * @var integer 输出分区数
     */
    public $OutputPartitionNum;

    /**
     * @var integer 输出总数据量（单位B）
     */
    public $OutputTotalData;

    /**
     * @var integer 开始时间
     */
    public $BeginTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @param string $Statement 执行语句
     * @param integer $Duration 执行时长（单位毫秒）
     * @param string $Status 执行状态
     * @param string $Id 查询ID
     * @param integer $ScanPartitionNum 扫描分区数
     * @param integer $ScanRowNum 扫描总行数
     * @param integer $ScanFileNum 扫描总文件数
     * @param integer $ScanTotalData 查询扫描总数据量(单位B)
     * @param array $ApplicationId 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputRowNum 输出总行数
     * @param integer $OutputFileNum 输出总文件数
     * @param integer $OutputPartitionNum 输出分区数
     * @param integer $OutputTotalData 输出总数据量（单位B）
     * @param integer $BeginTime 开始时间
     * @param integer $EndTime 结束时间
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ScanPartitionNum",$param) and $param["ScanPartitionNum"] !== null) {
            $this->ScanPartitionNum = $param["ScanPartitionNum"];
        }

        if (array_key_exists("ScanRowNum",$param) and $param["ScanRowNum"] !== null) {
            $this->ScanRowNum = $param["ScanRowNum"];
        }

        if (array_key_exists("ScanFileNum",$param) and $param["ScanFileNum"] !== null) {
            $this->ScanFileNum = $param["ScanFileNum"];
        }

        if (array_key_exists("ScanTotalData",$param) and $param["ScanTotalData"] !== null) {
            $this->ScanTotalData = $param["ScanTotalData"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("OutputRowNum",$param) and $param["OutputRowNum"] !== null) {
            $this->OutputRowNum = $param["OutputRowNum"];
        }

        if (array_key_exists("OutputFileNum",$param) and $param["OutputFileNum"] !== null) {
            $this->OutputFileNum = $param["OutputFileNum"];
        }

        if (array_key_exists("OutputPartitionNum",$param) and $param["OutputPartitionNum"] !== null) {
            $this->OutputPartitionNum = $param["OutputPartitionNum"];
        }

        if (array_key_exists("OutputTotalData",$param) and $param["OutputTotalData"] !== null) {
            $this->OutputTotalData = $param["OutputTotalData"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
