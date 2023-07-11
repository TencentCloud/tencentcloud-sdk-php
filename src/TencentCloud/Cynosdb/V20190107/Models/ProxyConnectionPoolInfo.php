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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库代理连接池信息
 *
 * @method integer getConnectionPoolTimeOut() 获取连接池保持阈值：单位（秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) 设置连接池保持阈值：单位（秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenConnectionPool() 获取是否开启了连接池
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenConnectionPool(string $OpenConnectionPool) 设置是否开启了连接池
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectionPoolType() 获取连接池类型：SessionConnectionPool（会话级别连接池）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionPoolType(string $ConnectionPoolType) 设置连接池类型：SessionConnectionPool（会话级别连接池）
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProxyConnectionPoolInfo extends AbstractModel
{
    /**
     * @var integer 连接池保持阈值：单位（秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var string 是否开启了连接池
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenConnectionPool;

    /**
     * @var string 连接池类型：SessionConnectionPool（会话级别连接池）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionPoolType;

    /**
     * @param integer $ConnectionPoolTimeOut 连接池保持阈值：单位（秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenConnectionPool 是否开启了连接池
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectionPoolType 连接池类型：SessionConnectionPool（会话级别连接池）
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ConnectionPoolTimeOut",$param) and $param["ConnectionPoolTimeOut"] !== null) {
            $this->ConnectionPoolTimeOut = $param["ConnectionPoolTimeOut"];
        }

        if (array_key_exists("OpenConnectionPool",$param) and $param["OpenConnectionPool"] !== null) {
            $this->OpenConnectionPool = $param["OpenConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }
    }
}
