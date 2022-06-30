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
 * 迁移元数据分区对象
 *
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method string getSchemaName() 获取数据目录名称
 * @method void setSchemaName(string $SchemaName) 设置数据目录名称
 * @method string getTableName() 获取表名称
 * @method void setTableName(string $TableName) 设置表名称
 * @method integer getDataVersion() 获取数据版本
 * @method void setDataVersion(integer $DataVersion) 设置数据版本
 * @method string getName() 获取分区名称
 * @method void setName(string $Name) 设置分区名称
 * @method array getValues() 获取值列表
 * @method void setValues(array $Values) 设置值列表
 * @method integer getStorageSize() 获取存储大小
 * @method void setStorageSize(integer $StorageSize) 设置存储大小
 * @method integer getRecordCount() 获取记录数量
 * @method void setRecordCount(integer $RecordCount) 设置记录数量
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifiedTime() 获取修改时间
 * @method void setModifiedTime(string $ModifiedTime) 设置修改时间
 * @method string getLastAccessTime() 获取最后访问时间
 * @method void setLastAccessTime(string $LastAccessTime) 设置最后访问时间
 * @method array getParams() 获取附件属性
 * @method void setParams(array $Params) 设置附件属性
 * @method DMSSds getSds() 获取存储对象
 * @method void setSds(DMSSds $Sds) 设置存储对象
 */
class DMSPartition extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var string 数据目录名称
     */
    public $SchemaName;

    /**
     * @var string 表名称
     */
    public $TableName;

    /**
     * @var integer 数据版本
     */
    public $DataVersion;

    /**
     * @var string 分区名称
     */
    public $Name;

    /**
     * @var array 值列表
     */
    public $Values;

    /**
     * @var integer 存储大小
     */
    public $StorageSize;

    /**
     * @var integer 记录数量
     */
    public $RecordCount;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifiedTime;

    /**
     * @var string 最后访问时间
     */
    public $LastAccessTime;

    /**
     * @var array 附件属性
     */
    public $Params;

    /**
     * @var DMSSds 存储对象
     */
    public $Sds;

    /**
     * @param string $DatabaseName 数据库名称
     * @param string $SchemaName 数据目录名称
     * @param string $TableName 表名称
     * @param integer $DataVersion 数据版本
     * @param string $Name 分区名称
     * @param array $Values 值列表
     * @param integer $StorageSize 存储大小
     * @param integer $RecordCount 记录数量
     * @param string $CreateTime 创建时间
     * @param string $ModifiedTime 修改时间
     * @param string $LastAccessTime 最后访问时间
     * @param array $Params 附件属性
     * @param DMSSds $Sds 存储对象
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("DataVersion",$param) and $param["DataVersion"] !== null) {
            $this->DataVersion = $param["DataVersion"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("Sds",$param) and $param["Sds"] !== null) {
            $this->Sds = new DMSSds();
            $this->Sds->deserialize($param["Sds"]);
        }
    }
}
