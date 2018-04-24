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
 * @method array getDiskIds() 获取要解绑定期快照策略的云盘ID列表。
 * @method void setDiskIds(array $diskIds) 设置要解绑定期快照策略的云盘ID列表。
 * @method string getAutoSnapshotPolicyId() 获取要解绑的定期快照策略ID。
 * @method void setAutoSnapshotPolicyId(string $autoSnapshotPolicyId) 设置要解绑的定期快照策略ID。
 */

/**
 *UnbindAutoSnapshotPolicy请求参数结构体
 */
class UnbindAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var array 要解绑定期快照策略的云盘ID列表。
     */
    public $diskIds;

    /**
     * @var string 要解绑的定期快照策略ID。
     */
    public $autoSnapshotPolicyId;
    /**
     * @param array $diskIds 要解绑定期快照策略的云盘ID列表。
     * @param string $autoSnapshotPolicyId 要解绑的定期快照策略ID。
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->diskIds = $param["DiskIds"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->autoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }
    }
}
