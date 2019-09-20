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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取被销毁的实例ID
 * @method void setInstanceId(string $InstanceId) 设置被销毁的实例ID
 * @method array getResourceIds() 获取销毁节点ID
 * @method void setResourceIds(array $ResourceIds) 设置销毁节点ID
 */

/**
 *TerminateInstance请求参数结构体
 */
class TerminateInstanceRequest extends AbstractModel
{
    /**
     * @var string 被销毁的实例ID
     */
    public $InstanceId;

    /**
     * @var array 销毁节点ID
     */
    public $ResourceIds;
    /**
     * @param string $InstanceId 被销毁的实例ID
     * @param array $ResourceIds 销毁节点ID
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
