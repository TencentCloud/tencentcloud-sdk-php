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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterGroup请求参数结构体
 *
 * @method string getId() 获取<p>集群组 ID</p>
 * @method void setId(string $Id) 设置<p>集群组 ID</p>
 * @method boolean getIncludeDeleted() 获取<p>是否包含已软删除的记录（默认 false，仅返回活跃记录；true 时允许返回 deleted=1 的记录，用于悬挂 cluster 回显场景）</p>
 * @method void setIncludeDeleted(boolean $IncludeDeleted) 设置<p>是否包含已软删除的记录（默认 false，仅返回活跃记录；true 时允许返回 deleted=1 的记录，用于悬挂 cluster 回显场景）</p>
 */
class DescribeClusterGroupRequest extends AbstractModel
{
    /**
     * @var string <p>集群组 ID</p>
     */
    public $Id;

    /**
     * @var boolean <p>是否包含已软删除的记录（默认 false，仅返回活跃记录；true 时允许返回 deleted=1 的记录，用于悬挂 cluster 回显场景）</p>
     */
    public $IncludeDeleted;

    /**
     * @param string $Id <p>集群组 ID</p>
     * @param boolean $IncludeDeleted <p>是否包含已软删除的记录（默认 false，仅返回活跃记录；true 时允许返回 deleted=1 的记录，用于悬挂 cluster 回显场景）</p>
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

        if (array_key_exists("IncludeDeleted",$param) and $param["IncludeDeleted"] !== null) {
            $this->IncludeDeleted = $param["IncludeDeleted"];
        }
    }
}
