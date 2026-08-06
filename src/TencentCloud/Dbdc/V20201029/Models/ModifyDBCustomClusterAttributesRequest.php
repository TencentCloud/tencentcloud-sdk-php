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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBCustomClusterAttributes请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p><p>参数格式：dbcc-hj7gab15</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p><p>参数格式：dbcc-hj7gab15</p>
 * @method boolean getDeletionProtection() 获取<p>是否启用集群删除保护</p><p>枚举值：</p><ul><li>true： 启用</li><li>false： 不启用</li></ul>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>是否启用集群删除保护</p><p>枚举值：</p><ul><li>true： 启用</li><li>false： 不启用</li></ul>
 */
class ModifyDBCustomClusterAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p><p>参数格式：dbcc-hj7gab15</p>
     */
    public $ClusterId;

    /**
     * @var boolean <p>是否启用集群删除保护</p><p>枚举值：</p><ul><li>true： 启用</li><li>false： 不启用</li></ul>
     */
    public $DeletionProtection;

    /**
     * @param string $ClusterId <p>集群ID</p><p>参数格式：dbcc-hj7gab15</p>
     * @param boolean $DeletionProtection <p>是否启用集群删除保护</p><p>枚举值：</p><ul><li>true： 启用</li><li>false： 不启用</li></ul>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
