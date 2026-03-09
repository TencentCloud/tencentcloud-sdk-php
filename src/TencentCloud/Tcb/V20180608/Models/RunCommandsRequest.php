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
 * RunCommands请求参数结构体
 *
 * @method array getMgoCommands() 获取待执行命令
 * @method void setMgoCommands(array $MgoCommands) 设置待执行命令
 * @method string getTag() 获取实例ID
 * @method void setTag(string $Tag) 设置实例ID
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method MongoConnector getMongoConnector() 获取Mongo连接器实例信息
 * @method void setMongoConnector(MongoConnector $MongoConnector) 设置Mongo连接器实例信息
 */
class RunCommandsRequest extends AbstractModel
{
    /**
     * @var array 待执行命令
     */
    public $MgoCommands;

    /**
     * @var string 实例ID
     */
    public $Tag;

    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var MongoConnector Mongo连接器实例信息
     */
    public $MongoConnector;

    /**
     * @param array $MgoCommands 待执行命令
     * @param string $Tag 实例ID
     * @param string $EnvId 环境id
     * @param MongoConnector $MongoConnector Mongo连接器实例信息
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
        if (array_key_exists("MgoCommands",$param) and $param["MgoCommands"] !== null) {
            $this->MgoCommands = [];
            foreach ($param["MgoCommands"] as $key => $value){
                $obj = new MgoCommandParam();
                $obj->deserialize($value);
                array_push($this->MgoCommands, $obj);
            }
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
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
