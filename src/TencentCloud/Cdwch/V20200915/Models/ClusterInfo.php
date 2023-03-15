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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * clickhouse vcluster信息
 *
 * @method string getClusterName() 获取vcluster名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置vcluster名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeIps() 获取当前cluster的IP列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeIps(array $NodeIps) 设置当前cluster的IP列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterInfo extends AbstractModel
{
    /**
     * @var string vcluster名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var array 当前cluster的IP列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeIps;

    /**
     * @param string $ClusterName vcluster名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeIps 当前cluster的IP列表
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NodeIps",$param) and $param["NodeIps"] !== null) {
            $this->NodeIps = $param["NodeIps"];
        }
    }
}
