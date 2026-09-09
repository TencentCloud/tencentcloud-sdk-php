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
 * @method array getClusterIds() 获取<p>集群 ID 列表</p><p>入参限制：最多支持 100 个</p><p>ClusterId 和 ClusterIds 必须传一个且不能同时传</p>
 * @method void setClusterIds(array $ClusterIds) 设置<p>集群 ID 列表</p><p>入参限制：最多支持 100 个</p><p>ClusterId 和 ClusterIds 必须传一个且不能同时传</p>
 * @method boolean getDeletionProtection() 获取<p>是否启用集群删除保护</p><p>枚举值：</p><ul><li>true： 启用</li><li>false： 不启用</li></ul>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>是否启用集群删除保护</p><p>枚举值：</p><ul><li>true： 启用</li><li>false： 不启用</li></ul>
 * @method string getClusterName() 获取<p>集群名称</p><p>入参限制：最长128个字符</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p><p>入参限制：最长128个字符</p>
 * @method string getClusterDescription() 获取<p>集群描述</p><p>入参限制：最长200个字符</p>
 * @method void setClusterDescription(string $ClusterDescription) 设置<p>集群描述</p><p>入参限制：最长200个字符</p>
 */
class ModifyDBCustomClusterAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p><p>参数格式：dbcc-hj7gab15</p>
     */
    public $ClusterId;

    /**
     * @var array <p>集群 ID 列表</p><p>入参限制：最多支持 100 个</p><p>ClusterId 和 ClusterIds 必须传一个且不能同时传</p>
     */
    public $ClusterIds;

    /**
     * @var boolean <p>是否启用集群删除保护</p><p>枚举值：</p><ul><li>true： 启用</li><li>false： 不启用</li></ul>
     */
    public $DeletionProtection;

    /**
     * @var string <p>集群名称</p><p>入参限制：最长128个字符</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群描述</p><p>入参限制：最长200个字符</p>
     */
    public $ClusterDescription;

    /**
     * @param string $ClusterId <p>集群ID</p><p>参数格式：dbcc-hj7gab15</p>
     * @param array $ClusterIds <p>集群 ID 列表</p><p>入参限制：最多支持 100 个</p><p>ClusterId 和 ClusterIds 必须传一个且不能同时传</p>
     * @param boolean $DeletionProtection <p>是否启用集群删除保护</p><p>枚举值：</p><ul><li>true： 启用</li><li>false： 不启用</li></ul>
     * @param string $ClusterName <p>集群名称</p><p>入参限制：最长128个字符</p>
     * @param string $ClusterDescription <p>集群描述</p><p>入参限制：最长200个字符</p>
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

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDescription",$param) and $param["ClusterDescription"] !== null) {
            $this->ClusterDescription = $param["ClusterDescription"];
        }
    }
}
