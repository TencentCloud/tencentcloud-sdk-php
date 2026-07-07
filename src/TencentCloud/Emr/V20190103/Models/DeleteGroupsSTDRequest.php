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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteGroupsSTD请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群名称</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群名称</p>
 * @method array getGroupNames() 获取<p>用户组名称数组</p>
 * @method void setGroupNames(array $GroupNames) 设置<p>用户组名称数组</p>
 */
class DeleteGroupsSTDRequest extends AbstractModel
{
    /**
     * @var string <p>集群名称</p>
     */
    public $InstanceId;

    /**
     * @var array <p>用户组名称数组</p>
     */
    public $GroupNames;

    /**
     * @param string $InstanceId <p>集群名称</p>
     * @param array $GroupNames <p>用户组名称数组</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("GroupNames",$param) and $param["GroupNames"] !== null) {
            $this->GroupNames = $param["GroupNames"];
        }
    }
}
