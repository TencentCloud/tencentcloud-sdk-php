<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表映射关系
 *
 * @method string getSrcInstanceId() 获取源端实例Id
 * @method void setSrcInstanceId(string $SrcInstanceId) 设置源端实例Id
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 * @method string getMapDatabaseName() 获取映射数据库名称
 * @method void setMapDatabaseName(string $MapDatabaseName) 设置映射数据库名称
 * @method string getMapTableName() 获取映射表名
 * @method void setMapTableName(string $MapTableName) 设置映射表名
 * @method string getStatus() 获取同步状态
 * @method void setStatus(string $Status) 设置同步状态
 * @method float getProcess() 获取同步进度
 * @method void setProcess(float $Process) 设置同步进度
 * @method integer getLag() 获取延迟
 * @method void setLag(integer $Lag) 设置延迟
 * @method string getMessage() 获取消息
 * @method void setMessage(string $Message) 设置消息
 * @method boolean getIsPrimary() 获取是否为主表
 * @method void setIsPrimary(boolean $IsPrimary) 设置是否为主表
 * @method string getVirtualColValue() 获取虚拟列填充值
 * @method void setVirtualColValue(string $VirtualColValue) 设置虚拟列填充值
 */
class TableMappingObject extends AbstractModel
{
    /**
     * @var string 源端实例Id
     */
    public $SrcInstanceId;

    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @var string 映射数据库名称
     */
    public $MapDatabaseName;

    /**
     * @var string 映射表名
     */
    public $MapTableName;

    /**
     * @var string 同步状态
     */
    public $Status;

    /**
     * @var float 同步进度
     */
    public $Process;

    /**
     * @var integer 延迟
     */
    public $Lag;

    /**
     * @var string 消息
     */
    public $Message;

    /**
     * @var boolean 是否为主表
     */
    public $IsPrimary;

    /**
     * @var string 虚拟列填充值
     */
    public $VirtualColValue;

    /**
     * @param string $SrcInstanceId 源端实例Id
     * @param string $DatabaseName 数据库名称
     * @param string $TableName 表名
     * @param string $MapDatabaseName 映射数据库名称
     * @param string $MapTableName 映射表名
     * @param string $Status 同步状态
     * @param float $Process 同步进度
     * @param integer $Lag 延迟
     * @param string $Message 消息
     * @param boolean $IsPrimary 是否为主表
     * @param string $VirtualColValue 虚拟列填充值
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
        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("MapDatabaseName",$param) and $param["MapDatabaseName"] !== null) {
            $this->MapDatabaseName = $param["MapDatabaseName"];
        }

        if (array_key_exists("MapTableName",$param) and $param["MapTableName"] !== null) {
            $this->MapTableName = $param["MapTableName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = $param["Process"];
        }

        if (array_key_exists("Lag",$param) and $param["Lag"] !== null) {
            $this->Lag = $param["Lag"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("IsPrimary",$param) and $param["IsPrimary"] !== null) {
            $this->IsPrimary = $param["IsPrimary"];
        }

        if (array_key_exists("VirtualColValue",$param) and $param["VirtualColValue"] !== null) {
            $this->VirtualColValue = $param["VirtualColValue"];
        }
    }
}
