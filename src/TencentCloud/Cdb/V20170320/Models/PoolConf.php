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
 * 数据库代理连接池规格配置
 *
 * @method string getConnectionPoolType() 获取连接池类型：SessionConnectionPool（会话级别连接池
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionPoolType(string $ConnectionPoolType) 设置连接池类型：SessionConnectionPool（会话级别连接池
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxPoolConnectionTimeOut() 获取最大可保持连接阈值：单位（秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxPoolConnectionTimeOut(integer $MaxPoolConnectionTimeOut) 设置最大可保持连接阈值：单位（秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinPoolConnectionTimeOut() 获取最小可保持连接阈值：单位（秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinPoolConnectionTimeOut(integer $MinPoolConnectionTimeOut) 设置最小可保持连接阈值：单位（秒）
注意：此字段可能返回 null，表示取不到有效值。
 */
class PoolConf extends AbstractModel
{
    /**
     * @var string 连接池类型：SessionConnectionPool（会话级别连接池
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionPoolType;

    /**
     * @var integer 最大可保持连接阈值：单位（秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxPoolConnectionTimeOut;

    /**
     * @var integer 最小可保持连接阈值：单位（秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinPoolConnectionTimeOut;

    /**
     * @param string $ConnectionPoolType 连接池类型：SessionConnectionPool（会话级别连接池
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxPoolConnectionTimeOut 最大可保持连接阈值：单位（秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinPoolConnectionTimeOut 最小可保持连接阈值：单位（秒）
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
        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("MaxPoolConnectionTimeOut",$param) and $param["MaxPoolConnectionTimeOut"] !== null) {
            $this->MaxPoolConnectionTimeOut = $param["MaxPoolConnectionTimeOut"];
        }

        if (array_key_exists("MinPoolConnectionTimeOut",$param) and $param["MinPoolConnectionTimeOut"] !== null) {
            $this->MinPoolConnectionTimeOut = $param["MinPoolConnectionTimeOut"];
        }
    }
}
