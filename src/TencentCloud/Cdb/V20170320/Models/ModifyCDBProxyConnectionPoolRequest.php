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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCDBProxyConnectionPool请求参数结构体
 *
 * @method string getProxyGroupId() 获取数据库代理ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置数据库代理ID
 * @method boolean getOpenConnectionPool() 获取是否开启连接池，true：开启连接池；
                             false：关闭连接池。
 * @method void setOpenConnectionPool(boolean $OpenConnectionPool) 设置是否开启连接池，true：开启连接池；
                             false：关闭连接池。
 * @method string getConnectionPoolType() 获取连接池类型，
通过DescribeProxyConnectionPoolConf获取连接池类型值
 * @method void setConnectionPoolType(string $ConnectionPoolType) 设置连接池类型，
通过DescribeProxyConnectionPoolConf获取连接池类型值
 * @method integer getPoolConnectionTimeOut() 获取连接保留阈值：单位（秒）
 * @method void setPoolConnectionTimeOut(integer $PoolConnectionTimeOut) 设置连接保留阈值：单位（秒）
 */
class ModifyCDBProxyConnectionPoolRequest extends AbstractModel
{
    /**
     * @var string 数据库代理ID
     */
    public $ProxyGroupId;

    /**
     * @var boolean 是否开启连接池，true：开启连接池；
                             false：关闭连接池。
     */
    public $OpenConnectionPool;

    /**
     * @var string 连接池类型，
通过DescribeProxyConnectionPoolConf获取连接池类型值
     */
    public $ConnectionPoolType;

    /**
     * @var integer 连接保留阈值：单位（秒）
     */
    public $PoolConnectionTimeOut;

    /**
     * @param string $ProxyGroupId 数据库代理ID
     * @param boolean $OpenConnectionPool 是否开启连接池，true：开启连接池；
                             false：关闭连接池。
     * @param string $ConnectionPoolType 连接池类型，
通过DescribeProxyConnectionPoolConf获取连接池类型值
     * @param integer $PoolConnectionTimeOut 连接保留阈值：单位（秒）
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("OpenConnectionPool",$param) and $param["OpenConnectionPool"] !== null) {
            $this->OpenConnectionPool = $param["OpenConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("PoolConnectionTimeOut",$param) and $param["PoolConnectionTimeOut"] !== null) {
            $this->PoolConnectionTimeOut = $param["PoolConnectionTimeOut"];
        }
    }
}
