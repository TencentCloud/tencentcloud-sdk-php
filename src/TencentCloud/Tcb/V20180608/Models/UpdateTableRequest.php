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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateTable请求参数结构体
 *
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 * @method string getTag() 获取FlexDB实例ID
 * @method void setTag(string $Tag) 设置FlexDB实例ID
 * @method array getDropIndexes() 获取待删除索引信息
 * @method void setDropIndexes(array $DropIndexes) 设置待删除索引信息
 * @method array getCreateIndexes() 获取待创建索引信息
 * @method void setCreateIndexes(array $CreateIndexes) 设置待创建索引信息
 * @method string getEnvId() 获取云开发环境ID
 * @method void setEnvId(string $EnvId) 设置云开发环境ID
 * @method MongoConnector getMongoConnector() 获取MongoDB连接器配置
 * @method void setMongoConnector(MongoConnector $MongoConnector) 设置MongoDB连接器配置
 */
class UpdateTableRequest extends AbstractModel
{
    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @var string FlexDB实例ID
     */
    public $Tag;

    /**
     * @var array 待删除索引信息
     */
    public $DropIndexes;

    /**
     * @var array 待创建索引信息
     */
    public $CreateIndexes;

    /**
     * @var string 云开发环境ID
     */
    public $EnvId;

    /**
     * @var MongoConnector MongoDB连接器配置
     */
    public $MongoConnector;

    /**
     * @param string $TableName 表名
     * @param string $Tag FlexDB实例ID
     * @param array $DropIndexes 待删除索引信息
     * @param array $CreateIndexes 待创建索引信息
     * @param string $EnvId 云开发环境ID
     * @param MongoConnector $MongoConnector MongoDB连接器配置
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("DropIndexes",$param) and $param["DropIndexes"] !== null) {
            $this->DropIndexes = [];
            foreach ($param["DropIndexes"] as $key => $value){
                $obj = new DropIndex();
                $obj->deserialize($value);
                array_push($this->DropIndexes, $obj);
            }
        }

        if (array_key_exists("CreateIndexes",$param) and $param["CreateIndexes"] !== null) {
            $this->CreateIndexes = [];
            foreach ($param["CreateIndexes"] as $key => $value){
                $obj = new CreateIndex();
                $obj->deserialize($value);
                array_push($this->CreateIndexes, $obj);
            }
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("MongoConnector",$param) and $param["MongoConnector"] !== null) {
            $this->MongoConnector = new MongoConnector();
            $this->MongoConnector->deserialize($param["MongoConnector"]);
        }
    }
}
