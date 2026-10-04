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
 * CreateCatalog请求参数结构体
 *
 * @method string getName() 获取catalog名称
 * @method void setName(string $Name) 设置catalog名称
 * @method string getType() 获取catalog类型, 可选值TABLE、MODEL、VOLUME
 * @method void setType(string $Type) 设置catalog类型, 可选值TABLE、MODEL、VOLUME
 * @method string getWorkspaceId() 获取工作空间唯一id
 * @method void setWorkspaceId(string $WorkspaceId) 设置工作空间唯一id
 * @method string getComment() 获取描述
 * @method void setComment(string $Comment) 设置描述
 * @method string getConnectionId() 获取connection 的 ID
 * @method void setConnectionId(string $ConnectionId) 设置connection 的 ID
 * @method string getCatalogSource() 获取数据目录来源，可选（融合版新增字段），取值参考 CatalogSourceEnum：METALAKE（专业版）/ CONNECTION（分析版），不传时默认按 METALAKE 处理
 * @method void setCatalogSource(string $CatalogSource) 设置数据目录来源，可选（融合版新增字段），取值参考 CatalogSourceEnum：METALAKE（专业版）/ CONNECTION（分析版），不传时默认按 METALAKE 处理
 */
class CreateCatalogRequest extends AbstractModel
{
    /**
     * @var string catalog名称
     */
    public $Name;

    /**
     * @var string catalog类型, 可选值TABLE、MODEL、VOLUME
     */
    public $Type;

    /**
     * @var string 工作空间唯一id
     */
    public $WorkspaceId;

    /**
     * @var string 描述
     */
    public $Comment;

    /**
     * @var string connection 的 ID
     */
    public $ConnectionId;

    /**
     * @var string 数据目录来源，可选（融合版新增字段），取值参考 CatalogSourceEnum：METALAKE（专业版）/ CONNECTION（分析版），不传时默认按 METALAKE 处理
     */
    public $CatalogSource;

    /**
     * @param string $Name catalog名称
     * @param string $Type catalog类型, 可选值TABLE、MODEL、VOLUME
     * @param string $WorkspaceId 工作空间唯一id
     * @param string $Comment 描述
     * @param string $ConnectionId connection 的 ID
     * @param string $CatalogSource 数据目录来源，可选（融合版新增字段），取值参考 CatalogSourceEnum：METALAKE（专业版）/ CONNECTION（分析版），不传时默认按 METALAKE 处理
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }
    }
}
