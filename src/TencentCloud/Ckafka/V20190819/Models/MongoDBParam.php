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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MongoDB类型入参
 *
 * @method string getDatabase() 获取MongoDB的数据库名称
 * @method void setDatabase(string $Database) 设置MongoDB的数据库名称
 * @method string getCollection() 获取MongoDB的集群
 * @method void setCollection(string $Collection) 设置MongoDB的集群
 * @method boolean getCopyExisting() 获取是否复制存量数据，默认传参true
 * @method void setCopyExisting(boolean $CopyExisting) 设置是否复制存量数据，默认传参true
 * @method string getResource() 获取实例资源
 * @method void setResource(string $Resource) 设置实例资源
 * @method string getIp() 获取MongoDB的连接ip
 * @method void setIp(string $Ip) 设置MongoDB的连接ip
 * @method integer getPort() 获取MongoDB的连接port
 * @method void setPort(integer $Port) 设置MongoDB的连接port
 * @method string getUserName() 获取MongoDB数据库用户名
 * @method void setUserName(string $UserName) 设置MongoDB数据库用户名
 * @method string getPassword() 获取MongoDB数据库密码
 * @method void setPassword(string $Password) 设置MongoDB数据库密码
 * @method string getListeningEvent() 获取监听事件类型，为空时表示全选。取值包括insert,update,replace,delete,invalidate,drop,dropdatabase,rename，多个类型间使用,逗号分隔
 * @method void setListeningEvent(string $ListeningEvent) 设置监听事件类型，为空时表示全选。取值包括insert,update,replace,delete,invalidate,drop,dropdatabase,rename，多个类型间使用,逗号分隔
 * @method string getReadPreference() 获取主从优先级，默认主节点
 * @method void setReadPreference(string $ReadPreference) 设置主从优先级，默认主节点
 * @method string getPipeline() 获取聚合管道
 * @method void setPipeline(string $Pipeline) 设置聚合管道
 * @method boolean getSelfBuilt() 获取是否为自建集群
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置是否为自建集群
 */
class MongoDBParam extends AbstractModel
{
    /**
     * @var string MongoDB的数据库名称
     */
    public $Database;

    /**
     * @var string MongoDB的集群
     */
    public $Collection;

    /**
     * @var boolean 是否复制存量数据，默认传参true
     */
    public $CopyExisting;

    /**
     * @var string 实例资源
     */
    public $Resource;

    /**
     * @var string MongoDB的连接ip
     */
    public $Ip;

    /**
     * @var integer MongoDB的连接port
     */
    public $Port;

    /**
     * @var string MongoDB数据库用户名
     */
    public $UserName;

    /**
     * @var string MongoDB数据库密码
     */
    public $Password;

    /**
     * @var string 监听事件类型，为空时表示全选。取值包括insert,update,replace,delete,invalidate,drop,dropdatabase,rename，多个类型间使用,逗号分隔
     */
    public $ListeningEvent;

    /**
     * @var string 主从优先级，默认主节点
     */
    public $ReadPreference;

    /**
     * @var string 聚合管道
     */
    public $Pipeline;

    /**
     * @var boolean 是否为自建集群
     */
    public $SelfBuilt;

    /**
     * @param string $Database MongoDB的数据库名称
     * @param string $Collection MongoDB的集群
     * @param boolean $CopyExisting 是否复制存量数据，默认传参true
     * @param string $Resource 实例资源
     * @param string $Ip MongoDB的连接ip
     * @param integer $Port MongoDB的连接port
     * @param string $UserName MongoDB数据库用户名
     * @param string $Password MongoDB数据库密码
     * @param string $ListeningEvent 监听事件类型，为空时表示全选。取值包括insert,update,replace,delete,invalidate,drop,dropdatabase,rename，多个类型间使用,逗号分隔
     * @param string $ReadPreference 主从优先级，默认主节点
     * @param string $Pipeline 聚合管道
     * @param boolean $SelfBuilt 是否为自建集群
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Collection",$param) and $param["Collection"] !== null) {
            $this->Collection = $param["Collection"];
        }

        if (array_key_exists("CopyExisting",$param) and $param["CopyExisting"] !== null) {
            $this->CopyExisting = $param["CopyExisting"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ListeningEvent",$param) and $param["ListeningEvent"] !== null) {
            $this->ListeningEvent = $param["ListeningEvent"];
        }

        if (array_key_exists("ReadPreference",$param) and $param["ReadPreference"] !== null) {
            $this->ReadPreference = $param["ReadPreference"];
        }

        if (array_key_exists("Pipeline",$param) and $param["Pipeline"] !== null) {
            $this->Pipeline = $param["Pipeline"];
        }

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }
    }
}
