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
 * @method string getTableName() 获取<p>表名</p>
 * @method void setTableName(string $TableName) 设置<p>表名</p>
 * @method string getTag() 获取<p>FlexDB实例ID</p>
 * @method void setTag(string $Tag) 设置<p>FlexDB实例ID</p>
 * @method array getDropIndexes() 获取<p>待删除索引信息</p>
 * @method void setDropIndexes(array $DropIndexes) 设置<p>待删除索引信息</p>
 * @method array getCreateIndexes() 获取<p>待创建索引信息</p>
 * @method void setCreateIndexes(array $CreateIndexes) 设置<p>待创建索引信息</p>
 * @method string getEnvId() 获取<p>云开发环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>云开发环境ID</p>
 * @method MongoConnector getMongoConnector() 获取<p>MongoDB连接器配置</p>
 * @method void setMongoConnector(MongoConnector $MongoConnector) 设置<p>MongoDB连接器配置</p>
 */
class UpdateTableRequest extends AbstractModel
{
    /**
     * @var string <p>表名</p>
     */
    public $TableName;

    /**
     * @var string <p>FlexDB实例ID</p>
     */
    public $Tag;

    /**
     * @var array <p>待删除索引信息</p>
     */
    public $DropIndexes;

    /**
     * @var array <p>待创建索引信息</p>
     */
    public $CreateIndexes;

    /**
     * @var string <p>云开发环境ID</p>
     */
    public $EnvId;

    /**
     * @var MongoConnector <p>MongoDB连接器配置</p>
     */
    public $MongoConnector;

    /**
     * @param string $TableName <p>表名</p>
     * @param string $Tag <p>FlexDB实例ID</p>
     * @param array $DropIndexes <p>待删除索引信息</p>
     * @param array $CreateIndexes <p>待创建索引信息</p>
     * @param string $EnvId <p>云开发环境ID</p>
     * @param MongoConnector $MongoConnector <p>MongoDB连接器配置</p>
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
