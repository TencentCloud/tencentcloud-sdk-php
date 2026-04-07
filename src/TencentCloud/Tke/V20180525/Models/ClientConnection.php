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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调度器客户端连接配置参数
 *
 * @method float getQPS() 获取客户端与服务器连接时每秒允许的最大查询数
 * @method void setQPS(float $QPS) 设置客户端与服务器连接时每秒允许的最大查询数
 * @method integer getBurst() 获取客户端在短时间内超过QPS限制的突发请求数量
 * @method void setBurst(integer $Burst) 设置客户端在短时间内超过QPS限制的突发请求数量
 */
class ClientConnection extends AbstractModel
{
    /**
     * @var float 客户端与服务器连接时每秒允许的最大查询数
     */
    public $QPS;

    /**
     * @var integer 客户端在短时间内超过QPS限制的突发请求数量
     */
    public $Burst;

    /**
     * @param float $QPS 客户端与服务器连接时每秒允许的最大查询数
     * @param integer $Burst 客户端在短时间内超过QPS限制的突发请求数量
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
        if (array_key_exists("QPS",$param) and $param["QPS"] !== null) {
            $this->QPS = $param["QPS"];
        }

        if (array_key_exists("Burst",$param) and $param["Burst"] !== null) {
            $this->Burst = $param["Burst"];
        }
    }
}
