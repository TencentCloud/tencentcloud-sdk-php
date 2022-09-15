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
 * TcaplusDB的缓写表信息
 *
 * @method integer getTargetTableSplitNum() 获取目标缓写表的分表数目
 * @method void setTargetTableSplitNum(integer $TargetTableSplitNum) 设置目标缓写表的分表数目
 * @method array getTargetTableNamePrefix() 获取目标缓写表名前缀
 * @method void setTargetTableNamePrefix(array $TargetTableNamePrefix) 设置目标缓写表名前缀
 * @method string getTargetSyncDBInstanceId() 获取缓写数据库实例ID
 * @method void setTargetSyncDBInstanceId(string $TargetSyncDBInstanceId) 设置缓写数据库实例ID
 * @method string getTargetDatabaseName() 获取缓写表所在数据库名称
 * @method void setTargetDatabaseName(string $TargetDatabaseName) 设置缓写表所在数据库名称
 * @method integer getStatus() 获取缓写状态，0：创建中，1：进行中，2：关闭，-1：被删除
 * @method void setStatus(integer $Status) 设置缓写状态，0：创建中，1：进行中，2：关闭，-1：被删除
 * @method string getClusterId() 获取表格所在集群ID
 * @method void setClusterId(string $ClusterId) 设置表格所在集群ID
 * @method integer getTableGroupId() 获取表格所在表格组ID
 * @method void setTableGroupId(integer $TableGroupId) 设置表格所在表格组ID
 * @method string getTableName() 获取表格名称
 * @method void setTableName(string $TableName) 设置表格名称
 * @method string getTableId() 获取表格ID
 * @method void setTableId(string $TableId) 设置表格ID
 * @method array getKeyFieldMapping() 获取TcaplusDB表主键字段到目标缓写表字段的映射
 * @method void setKeyFieldMapping(array $KeyFieldMapping) 设置TcaplusDB表主键字段到目标缓写表字段的映射
 * @method array getValueFieldMapping() 获取TcaplusDB表字段到目标缓写表字段的映射
 * @method void setValueFieldMapping(array $ValueFieldMapping) 设置TcaplusDB表字段到目标缓写表字段的映射
 */
class SyncTableInfo extends AbstractModel
{
    /**
     * @var integer 目标缓写表的分表数目
     */
    public $TargetTableSplitNum;

    /**
     * @var array 目标缓写表名前缀
     */
    public $TargetTableNamePrefix;

    /**
     * @var string 缓写数据库实例ID
     */
    public $TargetSyncDBInstanceId;

    /**
     * @var string 缓写表所在数据库名称
     */
    public $TargetDatabaseName;

    /**
     * @var integer 缓写状态，0：创建中，1：进行中，2：关闭，-1：被删除
     */
    public $Status;

    /**
     * @var string 表格所在集群ID
     */
    public $ClusterId;

    /**
     * @var integer 表格所在表格组ID
     */
    public $TableGroupId;

    /**
     * @var string 表格名称
     */
    public $TableName;

    /**
     * @var string 表格ID
     */
    public $TableId;

    /**
     * @var array TcaplusDB表主键字段到目标缓写表字段的映射
     */
    public $KeyFieldMapping;

    /**
     * @var array TcaplusDB表字段到目标缓写表字段的映射
     */
    public $ValueFieldMapping;

    /**
     * @param integer $TargetTableSplitNum 目标缓写表的分表数目
     * @param array $TargetTableNamePrefix 目标缓写表名前缀
     * @param string $TargetSyncDBInstanceId 缓写数据库实例ID
     * @param string $TargetDatabaseName 缓写表所在数据库名称
     * @param integer $Status 缓写状态，0：创建中，1：进行中，2：关闭，-1：被删除
     * @param string $ClusterId 表格所在集群ID
     * @param integer $TableGroupId 表格所在表格组ID
     * @param string $TableName 表格名称
     * @param string $TableId 表格ID
     * @param array $KeyFieldMapping TcaplusDB表主键字段到目标缓写表字段的映射
     * @param array $ValueFieldMapping TcaplusDB表字段到目标缓写表字段的映射
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
        if (array_key_exists("TargetTableSplitNum",$param) and $param["TargetTableSplitNum"] !== null) {
            $this->TargetTableSplitNum = $param["TargetTableSplitNum"];
        }

        if (array_key_exists("TargetTableNamePrefix",$param) and $param["TargetTableNamePrefix"] !== null) {
            $this->TargetTableNamePrefix = $param["TargetTableNamePrefix"];
        }

        if (array_key_exists("TargetSyncDBInstanceId",$param) and $param["TargetSyncDBInstanceId"] !== null) {
            $this->TargetSyncDBInstanceId = $param["TargetSyncDBInstanceId"];
        }

        if (array_key_exists("TargetDatabaseName",$param) and $param["TargetDatabaseName"] !== null) {
            $this->TargetDatabaseName = $param["TargetDatabaseName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("KeyFieldMapping",$param) and $param["KeyFieldMapping"] !== null) {
            $this->KeyFieldMapping = [];
            foreach ($param["KeyFieldMapping"] as $key => $value){
                $obj = new SyncTableField();
                $obj->deserialize($value);
                array_push($this->KeyFieldMapping, $obj);
            }
        }

        if (array_key_exists("ValueFieldMapping",$param) and $param["ValueFieldMapping"] !== null) {
            $this->ValueFieldMapping = [];
            foreach ($param["ValueFieldMapping"] as $key => $value){
                $obj = new SyncTableField();
                $obj->deserialize($value);
                array_push($this->ValueFieldMapping, $obj);
            }
        }
    }
}
