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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFwSyncStatus请求参数结构体
 *
 * @method string getSyncType() 获取查询的同步状态类型：Route,同步路由状态
 * @method void setSyncType(string $SyncType) 设置查询的同步状态类型：Route,同步路由状态
 */
class DescribeFwSyncStatusRequest extends AbstractModel
{
    /**
     * @var string 查询的同步状态类型：Route,同步路由状态
     */
    public $SyncType;

    /**
     * @param string $SyncType 查询的同步状态类型：Route,同步路由状态
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
        if (array_key_exists("SyncType",$param) and $param["SyncType"] !== null) {
            $this->SyncType = $param["SyncType"];
        }
    }
}
