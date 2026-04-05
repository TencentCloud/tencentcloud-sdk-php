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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘函数绑定 KV 命名空间时所需的详细配置参数，用于指定绑定的命名空间来源。通过此配置，边缘函数可操作指定站点下的 KV 命名空间。
 *
 * @method string getZoneId() 获取KV 命名空间所属的站点 ID。指定要绑定的 KV 命名空间所在的站点，支持跨站点绑定。
 * @method void setZoneId(string $ZoneId) 设置KV 命名空间所属的站点 ID。指定要绑定的 KV 命名空间所在的站点，支持跨站点绑定。
 * @method string getNamespace() 获取KV 命名空间名称。指定要绑定的具体命名空间，可通过 DescribeKVNamespace 接口获取站点下的命名空间列表。
 * @method void setNamespace(string $Namespace) 设置KV 命名空间名称。指定要绑定的具体命名空间，可通过 DescribeKVNamespace 接口获取站点下的命名空间列表。
 */
class KVNamespaceParameters extends AbstractModel
{
    /**
     * @var string KV 命名空间所属的站点 ID。指定要绑定的 KV 命名空间所在的站点，支持跨站点绑定。
     */
    public $ZoneId;

    /**
     * @var string KV 命名空间名称。指定要绑定的具体命名空间，可通过 DescribeKVNamespace 接口获取站点下的命名空间列表。
     */
    public $Namespace;

    /**
     * @param string $ZoneId KV 命名空间所属的站点 ID。指定要绑定的 KV 命名空间所在的站点，支持跨站点绑定。
     * @param string $Namespace KV 命名空间名称。指定要绑定的具体命名空间，可通过 DescribeKVNamespace 接口获取站点下的命名空间列表。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
