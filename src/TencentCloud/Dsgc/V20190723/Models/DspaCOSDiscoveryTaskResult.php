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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS扫描任务结果，按照数据库级别展示
 *
 * @method integer getBucketResultId() 获取扫描bucket结果ID
 * @method void setBucketResultId(integer $BucketResultId) 设置扫描bucket结果ID
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getResultId() 获取扫描任务最新一次扫描结果ID
 * @method void setResultId(integer $ResultId) 设置扫描任务最新一次扫描结果ID
 * @method string getDataSourceId() 获取数据源ID
 * @method void setDataSourceId(string $DataSourceId) 设置数据源ID
 * @method string getBucketName() 获取桶名称
 * @method void setBucketName(string $BucketName) 设置桶名称
 * @method integer getTotalFiles() 获取总文件数
 * @method void setTotalFiles(integer $TotalFiles) 设置总文件数
 * @method integer getSensitiveDataNums() 获取被识别出的敏感数据数
 * @method void setSensitiveDataNums(integer $SensitiveDataNums) 设置被识别出的敏感数据数
 * @method string getEndTime() 获取Bucket扫描的结束时间，格式如：2006-01-02 15:04:05
 * @method void setEndTime(string $EndTime) 设置Bucket扫描的结束时间，格式如：2006-01-02 15:04:05
 * @method string getDataSourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceName(string $DataSourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取Bucket扫描状态，0待扫描 1扫描中 2扫描终止 3扫描成功 4扫描失败
 * @method void setStatus(integer $Status) 设置Bucket扫描状态，0待扫描 1扫描中 2扫描终止 3扫描成功 4扫描失败
 * @method string getErrorInfo() 获取Bucket扫描结果错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorInfo(string $ErrorInfo) 设置Bucket扫描结果错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceRegion() 获取资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOverSize() 获取是否超额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOverSize(string $OverSize) 设置是否超额
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaCOSDiscoveryTaskResult extends AbstractModel
{
    /**
     * @var integer 扫描bucket结果ID
     */
    public $BucketResultId;

    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 扫描任务最新一次扫描结果ID
     */
    public $ResultId;

    /**
     * @var string 数据源ID
     */
    public $DataSourceId;

    /**
     * @var string 桶名称
     */
    public $BucketName;

    /**
     * @var integer 总文件数
     */
    public $TotalFiles;

    /**
     * @var integer 被识别出的敏感数据数
     */
    public $SensitiveDataNums;

    /**
     * @var string Bucket扫描的结束时间，格式如：2006-01-02 15:04:05
     */
    public $EndTime;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceName;

    /**
     * @var integer Bucket扫描状态，0待扫描 1扫描中 2扫描终止 3扫描成功 4扫描失败
     */
    public $Status;

    /**
     * @var string Bucket扫描结果错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorInfo;

    /**
     * @var string 资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRegion;

    /**
     * @var string 是否超额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OverSize;

    /**
     * @param integer $BucketResultId 扫描bucket结果ID
     * @param integer $TaskId 任务ID
     * @param string $TaskName 任务名称
     * @param integer $ResultId 扫描任务最新一次扫描结果ID
     * @param string $DataSourceId 数据源ID
     * @param string $BucketName 桶名称
     * @param integer $TotalFiles 总文件数
     * @param integer $SensitiveDataNums 被识别出的敏感数据数
     * @param string $EndTime Bucket扫描的结束时间，格式如：2006-01-02 15:04:05
     * @param string $DataSourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status Bucket扫描状态，0待扫描 1扫描中 2扫描终止 3扫描成功 4扫描失败
     * @param string $ErrorInfo Bucket扫描结果错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceRegion 资源所在地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OverSize 是否超额
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
        if (array_key_exists("BucketResultId",$param) and $param["BucketResultId"] !== null) {
            $this->BucketResultId = $param["BucketResultId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ResultId",$param) and $param["ResultId"] !== null) {
            $this->ResultId = $param["ResultId"];
        }

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("TotalFiles",$param) and $param["TotalFiles"] !== null) {
            $this->TotalFiles = $param["TotalFiles"];
        }

        if (array_key_exists("SensitiveDataNums",$param) and $param["SensitiveDataNums"] !== null) {
            $this->SensitiveDataNums = $param["SensitiveDataNums"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("OverSize",$param) and $param["OverSize"] !== null) {
            $this->OverSize = $param["OverSize"];
        }
    }
}
