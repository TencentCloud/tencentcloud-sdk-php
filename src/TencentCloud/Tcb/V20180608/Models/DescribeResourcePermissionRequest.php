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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourcePermission请求参数结构体
 *
 * @method string getEnvId() 获取环境 ID
 * @method void setEnvId(string $EnvId) 设置环境 ID
 * @method string getResourceType() 获取资源类型：`function`-云函数、`storage`-云存储、`table`-SQL型数据库表、`collection`-文档型数据库表 `<br>`示例值：`table`。
 * @method void setResourceType(string $ResourceType) 设置资源类型：`function`-云函数、`storage`-云存储、`table`-SQL型数据库表、`collection`-文档型数据库表 `<br>`示例值：`table`。
 * @method array getResources() 获取资源标识列表。云函数不传或传空数组、云存储传存储桶名、数据库表传表名，不能超过100条。
 * @method void setResources(array $Resources) 设置资源标识列表。云函数不传或传空数组、云存储传存储桶名、数据库表传表名，不能超过100条。
 */
class DescribeResourcePermissionRequest extends AbstractModel
{
    /**
     * @var string 环境 ID
     */
    public $EnvId;

    /**
     * @var string 资源类型：`function`-云函数、`storage`-云存储、`table`-SQL型数据库表、`collection`-文档型数据库表 `<br>`示例值：`table`。
     */
    public $ResourceType;

    /**
     * @var array 资源标识列表。云函数不传或传空数组、云存储传存储桶名、数据库表传表名，不能超过100条。
     */
    public $Resources;

    /**
     * @param string $EnvId 环境 ID
     * @param string $ResourceType 资源类型：`function`-云函数、`storage`-云存储、`table`-SQL型数据库表、`collection`-文档型数据库表 `<br>`示例值：`table`。
     * @param array $Resources 资源标识列表。云函数不传或传空数组、云存储传存储桶名、数据库表传表名，不能超过100条。
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }
    }
}
