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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRefreshTask请求参数结构体
 *
 * @method array getClusterIDs() 获取指定集群列表,若为空则标识同步所有集群
 * @method void setClusterIDs(array $ClusterIDs) 设置指定集群列表,若为空则标识同步所有集群
 * @method boolean getIsSyncListOnly() 获取是否只同步列表
 * @method void setIsSyncListOnly(boolean $IsSyncListOnly) 设置是否只同步列表
 */
class CreateRefreshTaskRequest extends AbstractModel
{
    /**
     * @var array 指定集群列表,若为空则标识同步所有集群
     */
    public $ClusterIDs;

    /**
     * @var boolean 是否只同步列表
     */
    public $IsSyncListOnly;

    /**
     * @param array $ClusterIDs 指定集群列表,若为空则标识同步所有集群
     * @param boolean $IsSyncListOnly 是否只同步列表
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
        if (array_key_exists("ClusterIDs",$param) and $param["ClusterIDs"] !== null) {
            $this->ClusterIDs = $param["ClusterIDs"];
        }

        if (array_key_exists("IsSyncListOnly",$param) and $param["IsSyncListOnly"] !== null) {
            $this->IsSyncListOnly = $param["IsSyncListOnly"];
        }
    }
}
