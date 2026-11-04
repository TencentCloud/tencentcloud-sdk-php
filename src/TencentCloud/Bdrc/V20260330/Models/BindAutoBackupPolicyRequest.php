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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindAutoBackupPolicy请求参数结构体
 *
 * @method string getAutoBackupPolicyId() 获取<p>备份策略ID</p>
 * @method void setAutoBackupPolicyId(string $AutoBackupPolicyId) 设置<p>备份策略ID</p>
 * @method array getInstanceIds() 获取<p>实例ID列表</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例ID列表</p>
 */
class BindAutoBackupPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>备份策略ID</p>
     */
    public $AutoBackupPolicyId;

    /**
     * @var array <p>实例ID列表</p>
     */
    public $InstanceIds;

    /**
     * @param string $AutoBackupPolicyId <p>备份策略ID</p>
     * @param array $InstanceIds <p>实例ID列表</p>
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
        if (array_key_exists("AutoBackupPolicyId",$param) and $param["AutoBackupPolicyId"] !== null) {
            $this->AutoBackupPolicyId = $param["AutoBackupPolicyId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
