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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redis 实例信息
 *
 * @method string getId() 获取redis实例id
 * @method void setId(string $Id) 设置redis实例id
 * @method string getHost() 获取实例 ip
 * @method void setHost(string $Host) 设置实例 ip
 * @method integer getPort() 获取实例端口
 * @method void setPort(integer $Port) 设置实例端口
 */
class RedisInstance extends AbstractModel
{
    /**
     * @var string redis实例id
     */
    public $Id;

    /**
     * @var string 实例 ip
     */
    public $Host;

    /**
     * @var integer 实例端口
     */
    public $Port;

    /**
     * @param string $Id redis实例id
     * @param string $Host 实例 ip
     * @param integer $Port 实例端口
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
