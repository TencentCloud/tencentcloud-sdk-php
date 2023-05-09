<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间信息
 *
 * @method integer getWorkspaceId() 获取工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpaceKey() 获取工作空间标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpaceKey(string $SpaceKey) 设置工作空间标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkspaceInfo extends AbstractModel
{
    /**
     * @var integer 工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var string 工作空间标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpaceKey;

    /**
     * @var string 工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param integer $WorkspaceId 工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpaceKey 工作空间标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("SpaceKey",$param) and $param["SpaceKey"] !== null) {
            $this->SpaceKey = $param["SpaceKey"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
