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
 * DescribeProxyConnectionPoolConf返回参数结构体
 *
 * @method integer getCount() 获取配置规格数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置配置规格数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method PoolConf getPoolConf() 获取连接池配置规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoolConf(PoolConf $PoolConf) 设置连接池配置规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeProxyConnectionPoolConfResponse extends AbstractModel
{
    /**
     * @var integer 配置规格数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var PoolConf 连接池配置规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PoolConf;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count 配置规格数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param PoolConf $PoolConf 连接池配置规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("PoolConf",$param) and $param["PoolConf"] !== null) {
            $this->PoolConf = new PoolConf();
            $this->PoolConf->deserialize($param["PoolConf"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
