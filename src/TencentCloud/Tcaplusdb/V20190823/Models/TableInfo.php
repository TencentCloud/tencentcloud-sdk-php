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
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableInstanceId() 获取表实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableInstanceId(string $TableInstanceId) 设置表实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableType() 获取表数据结构类型，如：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableType(string $TableType) 设置表数据结构类型，如：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableIdlType() 获取表数据描述语言（IDL）类型，如：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableIdlType(string $TableIdlType) 设置表数据描述语言（IDL）类型，如：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取表所属应用实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置表所属应用实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppName() 获取表所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppName(string $AppName) 设置表所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogicZoneId() 获取表所属大区ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogicZoneId(string $LogicZoneId) 设置表所属大区ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneName() 获取表所属大区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneName(string $ZoneName) 设置表所属大区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyStruct() 获取表主键结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyStruct(string $KeyStruct) 设置表主键结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValueStruct() 获取表非主键结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueStruct(string $ValueStruct) 设置表非主键结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShardingKeySet() 获取表分表因子集合，PROTO表有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardingKeySet(string $ShardingKeySet) 设置表分表因子集合，PROTO表有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexStruct() 获取表索引键集合，PROTO表有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexStruct(string $IndexStruct) 设置表索引键集合，PROTO表有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getListElementNum() 获取LIST表元素个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListElementNum(integer $ListElementNum) 设置LIST表元素个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIdlFiles() 获取表所关联IDL文件信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdlFiles(array $IdlFiles) 设置表所关联IDL文件信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReservedVolume() 获取表预留容量（GB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReservedVolume(integer $ReservedVolume) 设置表预留容量（GB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReservedReadQps() 获取表预留读QPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReservedReadQps(integer $ReservedReadQps) 设置表预留读QPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReservedWriteQps() 获取表预留写QPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReservedWriteQps(integer $ReservedWriteQps) 设置表预留写QPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableSize() 获取表实际数据量大小（MB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableSize(integer $TableSize) 设置表实际数据量大小（MB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取表状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置表状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取表创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置表创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取最后一次更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置最后一次更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemo() 获取表备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemo(string $Memo) 设置表备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorInfo getError() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(ErrorInfo $Error) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiAccessId() 获取Api接入ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiAccessId(string $ApiAccessId) 设置Api接入ID
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *表详情信息
 */
class TableInfo extends AbstractModel
{
    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 表实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableInstanceId;

    /**
     * @var string 表数据结构类型，如：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableType;

    /**
     * @var string 表数据描述语言（IDL）类型，如：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableIdlType;

    /**
     * @var string 表所属应用实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string 表所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppName;

    /**
     * @var string 表所属大区ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogicZoneId;

    /**
     * @var string 表所属大区名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneName;

    /**
     * @var string 表主键结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyStruct;

    /**
     * @var string 表非主键结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueStruct;

    /**
     * @var string 表分表因子集合，PROTO表有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardingKeySet;

    /**
     * @var string 表索引键集合，PROTO表有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexStruct;

    /**
     * @var integer LIST表元素个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListElementNum;

    /**
     * @var array 表所关联IDL文件信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdlFiles;

    /**
     * @var integer 表预留容量（GB）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReservedVolume;

    /**
     * @var integer 表预留读QPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReservedReadQps;

    /**
     * @var integer 表预留写QPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReservedWriteQps;

    /**
     * @var integer 表实际数据量大小（MB）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableSize;

    /**
     * @var string 表状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 表创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 最后一次更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var string 表备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memo;

    /**
     * @var ErrorInfo 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @var string Api接入ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiAccessId;
    /**
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableInstanceId 表实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableType 表数据结构类型，如：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableIdlType 表数据描述语言（IDL）类型，如：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 表所属应用实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppName 表所属应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogicZoneId 表所属大区ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneName 表所属大区名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyStruct 表主键结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValueStruct 表非主键结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShardingKeySet 表分表因子集合，PROTO表有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexStruct 表索引键集合，PROTO表有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ListElementNum LIST表元素个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IdlFiles 表所关联IDL文件信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReservedVolume 表预留容量（GB）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReservedReadQps 表预留读QPS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReservedWriteQps 表预留写QPS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableSize 表实际数据量大小（MB）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 表状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 表创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime 最后一次更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Memo 表备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorInfo $Error 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiAccessId Api接入ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("TableIdlType",$param) and $param["TableIdlType"] !== null) {
            $this->TableIdlType = $param["TableIdlType"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("LogicZoneId",$param) and $param["LogicZoneId"] !== null) {
            $this->LogicZoneId = $param["LogicZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("KeyStruct",$param) and $param["KeyStruct"] !== null) {
            $this->KeyStruct = $param["KeyStruct"];
        }

        if (array_key_exists("ValueStruct",$param) and $param["ValueStruct"] !== null) {
            $this->ValueStruct = $param["ValueStruct"];
        }

        if (array_key_exists("ShardingKeySet",$param) and $param["ShardingKeySet"] !== null) {
            $this->ShardingKeySet = $param["ShardingKeySet"];
        }

        if (array_key_exists("IndexStruct",$param) and $param["IndexStruct"] !== null) {
            $this->IndexStruct = $param["IndexStruct"];
        }

        if (array_key_exists("ListElementNum",$param) and $param["ListElementNum"] !== null) {
            $this->ListElementNum = $param["ListElementNum"];
        }

        if (array_key_exists("IdlFiles",$param) and $param["IdlFiles"] !== null) {
            $this->IdlFiles = [];
            foreach ($param["IdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->IdlFiles, $obj);
            }
        }

        if (array_key_exists("ReservedVolume",$param) and $param["ReservedVolume"] !== null) {
            $this->ReservedVolume = $param["ReservedVolume"];
        }

        if (array_key_exists("ReservedReadQps",$param) and $param["ReservedReadQps"] !== null) {
            $this->ReservedReadQps = $param["ReservedReadQps"];
        }

        if (array_key_exists("ReservedWriteQps",$param) and $param["ReservedWriteQps"] !== null) {
            $this->ReservedWriteQps = $param["ReservedWriteQps"];
        }

        if (array_key_exists("TableSize",$param) and $param["TableSize"] !== null) {
            $this->TableSize = $param["TableSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Memo",$param) and $param["Memo"] !== null) {
            $this->Memo = $param["Memo"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("ApiAccessId",$param) and $param["ApiAccessId"] !== null) {
            $this->ApiAccessId = $param["ApiAccessId"];
        }
    }
}
