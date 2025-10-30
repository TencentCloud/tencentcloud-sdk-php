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
namespace TencentCloud\Vdb\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DestroyInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取以数组形式指定待销毁下线的实例 ID。
 * @method void setInstanceIds(array $InstanceIds) 设置以数组形式指定待销毁下线的实例 ID。
 */
class DestroyInstancesRequest extends AbstractModel
{
    /**
     * @var array 以数组形式指定待销毁下线的实例 ID。
     */
    public $InstanceIds;

    /**
     * @param array $InstanceIds 以数组形式指定待销毁下线的实例 ID。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
