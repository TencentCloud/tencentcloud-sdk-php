<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAutoSnapshotPolicyId() 获取要绑定的定期快照策略ID。
 * @method void setAutoSnapshotPolicyId(string $autoSnapshotPolicyId) 设置要绑定的定期快照策略ID。
 * @method array getDiskIds() 获取要绑定的云硬盘ID列表，一次请求最多绑定80块云盘。
 * @method void setDiskIds(array $diskIds) 设置要绑定的云硬盘ID列表，一次请求最多绑定80块云盘。
 */

/**
 *BindAutoSnapshotPolicy请求参数结构体
 */
class BindAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string 要绑定的定期快照策略ID。
     */
    public $autoSnapshotPolicyId;

    /**
     * @var array 要绑定的云硬盘ID列表，一次请求最多绑定80块云盘。
     */
    public $diskIds;
    /**
     * @param string $autoSnapshotPolicyId 要绑定的定期快照策略ID。
     * @param array $diskIds 要绑定的云硬盘ID列表，一次请求最多绑定80块云盘。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->autoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->diskIds = $param["DiskIds"];
        }
    }
}
