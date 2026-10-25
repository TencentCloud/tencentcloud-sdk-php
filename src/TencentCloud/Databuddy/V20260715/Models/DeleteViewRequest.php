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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteView请求参数结构体
 *
 * @method string getCatalogName() 获取数据目录名
 * @method void setCatalogName(string $CatalogName) 设置数据目录名
 * @method string getSchemaName() 获取数据库名
 * @method void setSchemaName(string $SchemaName) 设置数据库名
 * @method string getViewName() 获取View名称
 * @method void setViewName(string $ViewName) 设置View名称
 * @method string getWorkspaceId() 获取调用时所在workspace唯一id
 * @method void setWorkspaceId(string $WorkspaceId) 设置调用时所在workspace唯一id
 */
class DeleteViewRequest extends AbstractModel
{
    /**
     * @var string 数据目录名
     */
    public $CatalogName;

    /**
     * @var string 数据库名
     */
    public $SchemaName;

    /**
     * @var string View名称
     */
    public $ViewName;

    /**
     * @var string 调用时所在workspace唯一id
     */
    public $WorkspaceId;

    /**
     * @param string $CatalogName 数据目录名
     * @param string $SchemaName 数据库名
     * @param string $ViewName View名称
     * @param string $WorkspaceId 调用时所在workspace唯一id
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
        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }
    }
}
