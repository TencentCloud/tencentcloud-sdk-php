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
 * DeleteCatalog请求参数结构体
 *
 * @method string getCatalogName() 获取数据目录名
 * @method void setCatalogName(string $CatalogName) 设置数据目录名
 * @method string getWorkspaceId() 获取调用时所在workspace唯一id
 * @method void setWorkspaceId(string $WorkspaceId) 设置调用时所在workspace唯一id
 * @method string getConnectionId() 获取数据源连接ID，可选（融合版新增字段）。非空→走分析版路径，空/缺省→走专业版TcLake路径
 * @method void setConnectionId(string $ConnectionId) 设置数据源连接ID，可选（融合版新增字段）。非空→走分析版路径，空/缺省→走专业版TcLake路径
 */
class DeleteCatalogRequest extends AbstractModel
{
    /**
     * @var string 数据目录名
     */
    public $CatalogName;

    /**
     * @var string 调用时所在workspace唯一id
     */
    public $WorkspaceId;

    /**
     * @var string 数据源连接ID，可选（融合版新增字段）。非空→走分析版路径，空/缺省→走专业版TcLake路径
     */
    public $ConnectionId;

    /**
     * @param string $CatalogName 数据目录名
     * @param string $WorkspaceId 调用时所在workspace唯一id
     * @param string $ConnectionId 数据源连接ID，可选（融合版新增字段）。非空→走分析版路径，空/缺省→走专业版TcLake路径
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

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }
    }
}
