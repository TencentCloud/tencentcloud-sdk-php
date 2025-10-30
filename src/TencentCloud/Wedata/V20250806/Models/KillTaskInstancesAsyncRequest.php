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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KillTaskInstancesAsync请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method array getInstanceKeyList() 获取实例id列表,可以从ListInstances中获取
 * @method void setInstanceKeyList(array $InstanceKeyList) 设置实例id列表,可以从ListInstances中获取
 */
class KillTaskInstancesAsyncRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var array 实例id列表,可以从ListInstances中获取
     */
    public $InstanceKeyList;

    /**
     * @param string $ProjectId 项目Id
     * @param array $InstanceKeyList 实例id列表,可以从ListInstances中获取
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceKeyList",$param) and $param["InstanceKeyList"] !== null) {
            $this->InstanceKeyList = $param["InstanceKeyList"];
        }
    }
}
