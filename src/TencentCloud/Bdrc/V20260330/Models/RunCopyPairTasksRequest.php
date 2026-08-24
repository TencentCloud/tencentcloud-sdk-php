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
 * RunCopyPairTasks请求参数结构体
 *
 * @method array getCopyPairIds() 获取复制对ID列表
 * @method void setCopyPairIds(array $CopyPairIds) 设置复制对ID列表
 * @method string getCopyPairType() 获取要启动复制对的类型（DISK/INSTANCE/CFS）
 * @method void setCopyPairType(string $CopyPairType) 设置要启动复制对的类型（DISK/INSTANCE/CFS）
 */
class RunCopyPairTasksRequest extends AbstractModel
{
    /**
     * @var array 复制对ID列表
     */
    public $CopyPairIds;

    /**
     * @var string 要启动复制对的类型（DISK/INSTANCE/CFS）
     */
    public $CopyPairType;

    /**
     * @param array $CopyPairIds 复制对ID列表
     * @param string $CopyPairType 要启动复制对的类型（DISK/INSTANCE/CFS）
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
        if (array_key_exists("CopyPairIds",$param) and $param["CopyPairIds"] !== null) {
            $this->CopyPairIds = $param["CopyPairIds"];
        }

        if (array_key_exists("CopyPairType",$param) and $param["CopyPairType"] !== null) {
            $this->CopyPairType = $param["CopyPairType"];
        }
    }
}
