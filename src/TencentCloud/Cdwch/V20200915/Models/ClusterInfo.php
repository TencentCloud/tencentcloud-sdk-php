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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * clickhouse vcluster信息
 *
 * @method string getClusterName() 获取vcluster名字
 * @method void setClusterName(string $ClusterName) 设置vcluster名字
 * @method array getNodeIps() 获取当前cluster的IP列表
 * @method void setNodeIps(array $NodeIps) 设置当前cluster的IP列表
 */
class ClusterInfo extends AbstractModel
{
    /**
     * @var string vcluster名字
     */
    public $ClusterName;

    /**
     * @var array 当前cluster的IP列表
     */
    public $NodeIps;

    /**
     * @param string $ClusterName vcluster名字
     * @param array $NodeIps 当前cluster的IP列表
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
