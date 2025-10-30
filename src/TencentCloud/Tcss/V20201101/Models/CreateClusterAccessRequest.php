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
 * CreateClusterAccess请求参数结构体
 *
 * @method array getClusterIDs() 获取集群ID
 * @method void setClusterIDs(array $ClusterIDs) 设置集群ID
 */
class CreateClusterAccessRequest extends AbstractModel
{
    /**
     * @var array 集群ID
     */
    public $ClusterIDs;

    /**
     * @param array $ClusterIDs 集群ID
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
    }
}
