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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBProxy请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例 ID，格式形如：postgres-xxxxxxxx</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例 ID，格式形如：postgres-xxxxxxxx</p>
 * @method string getProxyGroupId() 获取<p>Proxy 实例 ID，格式形如：proxy-xxxxxxxx；不传则查询该实例下全部 Proxy</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>Proxy 实例 ID，格式形如：proxy-xxxxxxxx；不传则查询该实例下全部 Proxy</p>
 */
class DescribeDBProxyRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，格式形如：postgres-xxxxxxxx</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>Proxy 实例 ID，格式形如：proxy-xxxxxxxx；不传则查询该实例下全部 Proxy</p>
     */
    public $ProxyGroupId;

    /**
     * @param string $DBInstanceId <p>实例 ID，格式形如：postgres-xxxxxxxx</p>
     * @param string $ProxyGroupId <p>Proxy 实例 ID，格式形如：proxy-xxxxxxxx；不传则查询该实例下全部 Proxy</p>
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }
    }
}
