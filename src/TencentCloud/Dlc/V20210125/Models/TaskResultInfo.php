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
 * 任务结果信息。
 *
 * @method string getTaskId() 获取任务唯一ID
 * @method void setTaskId(string $TaskId) 设置任务唯一ID
 * @method string getDatasourceConnectionName() 获取数据源名称，当前任务执行时候选中的默认数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据源名称，当前任务执行时候选中的默认数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称，当前任务执行时候选中的默认数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称，当前任务执行时候选中的默认数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSQL() 获取当前执行的SQL，一个任务包含一个SQL
 * @method void setSQL(string $SQL) 设置当前执行的SQL，一个任务包含一个SQL
 * @method string getSQLType() 获取执行任务的类型，现在分为DDL、DML、DQL
 * @method void setSQLType(string $SQLType) 设置执行任务的类型，现在分为DDL、DML、DQL
 * @method integer getState() 获取任务当前的状态，0：初始化 1：任务运行中 2：任务执行成功 -1：任务执行失败 -3：用户手动终止。只有任务执行成功的情况下，才会返回任务执行的结果
 * @method void setState(integer $State) 设置任务当前的状态，0：初始化 1：任务运行中 2：任务执行成功 -1：任务执行失败 -3：用户手动终止。只有任务执行成功的情况下，才会返回任务执行的结果
 * @method integer getDataAmount() 获取扫描的数据量，单位byte
 * @method void setDataAmount(integer $DataAmount) 设置扫描的数据量，单位byte
 * @method integer getUsedTime() 获取计算耗时，单位： ms
 * @method void setUsedTime(integer $UsedTime) 设置计算耗时，单位： ms
 * @method string getOutputPath() 获取任务结果输出的COS桶地址
 * @method void setOutputPath(string $OutputPath) 设置任务结果输出的COS桶地址
 * @method string getCreateTime() 获取任务创建时间，时间戳
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间，时间戳
 * @method string getOutputMessage() 获取任务执行信息，成功时返回success，失败时返回失败原因
 * @method void setOutputMessage(string $OutputMessage) 设置任务执行信息，成功时返回success，失败时返回失败原因
 * @method string getRowAffectInfo() 获取被影响的行数
 * @method void setRowAffectInfo(string $RowAffectInfo) 设置被影响的行数
 * @method array getResultSchema() 获取结果的schema信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultSchema(array $ResultSchema) 设置结果的schema信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultSet() 获取结果信息，反转义后，外层数组的每个元素为一行数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultSet(string $ResultSet) 设置结果信息，反转义后，外层数组的每个元素为一行数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextToken() 获取分页信息，如果没有更多结果数据，nextToken为空
 * @method void setNextToken(string $NextToken) 设置分页信息，如果没有更多结果数据，nextToken为空
 * @method integer getPercentage() 获取任务执行进度num/100(%)
 * @method void setPercentage(integer $Percentage) 设置任务执行进度num/100(%)
 * @method string getProgressDetail() 获取任务进度明细
 * @method void setProgressDetail(string $ProgressDetail) 设置任务进度明细
 * @method string getDisplayFormat() 获取控制台展示格式。table：表格展示 text：文本展示
 * @method void setDisplayFormat(string $DisplayFormat) 设置控制台展示格式。table：表格展示 text：文本展示
 * @method integer getTotalTime() 获取任务耗时，单位： ms
 * @method void setTotalTime(integer $TotalTime) 设置任务耗时，单位： ms
 */
class TaskResultInfo extends AbstractModel
{
    /**
     * @var string 任务唯一ID
     */
    public $TaskId;

    /**
     * @var string 数据源名称，当前任务执行时候选中的默认数据源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceConnectionName;

    /**
     * @var string 数据库名称，当前任务执行时候选中的默认数据库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 当前执行的SQL，一个任务包含一个SQL
     */
    public $SQL;

    /**
     * @var string 执行任务的类型，现在分为DDL、DML、DQL
     */
    public $SQLType;

    /**
     * @var integer 任务当前的状态，0：初始化 1：任务运行中 2：任务执行成功 -1：任务执行失败 -3：用户手动终止。只有任务执行成功的情况下，才会返回任务执行的结果
     */
    public $State;

    /**
     * @var integer 扫描的数据量，单位byte
     */
    public $DataAmount;

    /**
     * @var integer 计算耗时，单位： ms
     */
    public $UsedTime;

    /**
     * @var string 任务结果输出的COS桶地址
     */
    public $OutputPath;

    /**
     * @var string 任务创建时间，时间戳
     */
    public $CreateTime;

    /**
     * @var string 任务执行信息，成功时返回success，失败时返回失败原因
     */
    public $OutputMessage;

    /**
     * @var string 被影响的行数
     */
    public $RowAffectInfo;

    /**
     * @var array 结果的schema信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultSchema;

    /**
     * @var string 结果信息，反转义后，外层数组的每个元素为一行数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultSet;

    /**
     * @var string 分页信息，如果没有更多结果数据，nextToken为空
     */
    public $NextToken;

    /**
     * @var integer 任务执行进度num/100(%)
     */
    public $Percentage;

    /**
     * @var string 任务进度明细
     */
    public $ProgressDetail;

    /**
     * @var string 控制台展示格式。table：表格展示 text：文本展示
     */
    public $DisplayFormat;

    /**
     * @var integer 任务耗时，单位： ms
     */
    public $TotalTime;

    /**
     * @param string $TaskId 任务唯一ID
     * @param string $DatasourceConnectionName 数据源名称，当前任务执行时候选中的默认数据源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称，当前任务执行时候选中的默认数据库
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SQL 当前执行的SQL，一个任务包含一个SQL
     * @param string $SQLType 执行任务的类型，现在分为DDL、DML、DQL
     * @param integer $State 任务当前的状态，0：初始化 1：任务运行中 2：任务执行成功 -1：任务执行失败 -3：用户手动终止。只有任务执行成功的情况下，才会返回任务执行的结果
     * @param integer $DataAmount 扫描的数据量，单位byte
     * @param integer $UsedTime 计算耗时，单位： ms
     * @param string $OutputPath 任务结果输出的COS桶地址
     * @param string $CreateTime 任务创建时间，时间戳
     * @param string $OutputMessage 任务执行信息，成功时返回success，失败时返回失败原因
     * @param string $RowAffectInfo 被影响的行数
     * @param array $ResultSchema 结果的schema信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultSet 结果信息，反转义后，外层数组的每个元素为一行数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextToken 分页信息，如果没有更多结果数据，nextToken为空
     * @param integer $Percentage 任务执行进度num/100(%)
     * @param string $ProgressDetail 任务进度明细
     * @param string $DisplayFormat 控制台展示格式。table：表格展示 text：文本展示
     * @param integer $TotalTime 任务耗时，单位： ms
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SQL",$param) and $param["SQL"] !== null) {
            $this->SQL = $param["SQL"];
        }

        if (array_key_exists("SQLType",$param) and $param["SQLType"] !== null) {
            $this->SQLType = $param["SQLType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("DataAmount",$param) and $param["DataAmount"] !== null) {
            $this->DataAmount = $param["DataAmount"];
        }

        if (array_key_exists("UsedTime",$param) and $param["UsedTime"] !== null) {
            $this->UsedTime = $param["UsedTime"];
        }

        if (array_key_exists("OutputPath",$param) and $param["OutputPath"] !== null) {
            $this->OutputPath = $param["OutputPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("OutputMessage",$param) and $param["OutputMessage"] !== null) {
            $this->OutputMessage = $param["OutputMessage"];
        }

        if (array_key_exists("RowAffectInfo",$param) and $param["RowAffectInfo"] !== null) {
            $this->RowAffectInfo = $param["RowAffectInfo"];
        }

        if (array_key_exists("ResultSchema",$param) and $param["ResultSchema"] !== null) {
            $this->ResultSchema = [];
            foreach ($param["ResultSchema"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->ResultSchema, $obj);
            }
        }

        if (array_key_exists("ResultSet",$param) and $param["ResultSet"] !== null) {
            $this->ResultSet = $param["ResultSet"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }

        if (array_key_exists("ProgressDetail",$param) and $param["ProgressDetail"] !== null) {
            $this->ProgressDetail = $param["ProgressDetail"];
        }

        if (array_key_exists("DisplayFormat",$param) and $param["DisplayFormat"] !== null) {
            $this->DisplayFormat = $param["DisplayFormat"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }
    }
}
