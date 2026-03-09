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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMongoDBKillTask请求参数结构体
 *
 * @method string getInstanceId() 获取kill会话任务的关联实例ID。
 * @method void setInstanceId(string $InstanceId) 设置kill会话任务的关联实例ID。
 * @method integer getDuration() 获取任务持续时间，单位秒，手动关闭任务传-1。
 * @method void setDuration(integer $Duration) 设置任务持续时间，单位秒，手动关闭任务传-1。
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
 * @method string getHost() 获取任务过滤条件，客户端IP。
 * @method void setHost(string $Host) 设置任务过滤条件，客户端IP。
 * @method array getDB() 获取命名空间
 * @method void setDB(array $DB) 设置命名空间
 * @method string getType() 获取update,insert,query,getmore,remove,killcursors,command,compressed,none
 * @method void setType(string $Type) 设置update,insert,query,getmore,remove,killcursors,command,compressed,none
 * @method integer getTime() 获取kill任务过滤条件，会话持续时长，单位秒。
 * @method void setTime(integer $Time) 设置kill任务过滤条件，会话持续时长，单位秒。
 */
class CreateMongoDBKillTaskRequest extends AbstractModel
{
    /**
     * @var string kill会话任务的关联实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 任务持续时间，单位秒，手动关闭任务传-1。
     */
    public $Duration;

    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @var string 任务过滤条件，客户端IP。
     */
    public $Host;

    /**
     * @var array 命名空间
     */
    public $DB;

    /**
     * @var string update,insert,query,getmore,remove,killcursors,command,compressed,none
     */
    public $Type;

    /**
     * @var integer kill任务过滤条件，会话持续时长，单位秒。
     */
    public $Time;

    /**
     * @param string $InstanceId kill会话任务的关联实例ID。
     * @param integer $Duration 任务持续时间，单位秒，手动关闭任务传-1。
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
     * @param string $Host 任务过滤条件，客户端IP。
     * @param array $DB 命名空间
     * @param string $Type update,insert,query,getmore,remove,killcursors,command,compressed,none
     * @param integer $Time kill任务过滤条件，会话持续时长，单位秒。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}
