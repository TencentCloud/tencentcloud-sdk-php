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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目空间楼栋数量与建筑面积出参
 *
 * @method string getWorkspaceId() 获取工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(string $WorkspaceId) 设置工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceName() 获取工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceName(string $WorkspaceName) 设置工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBuildingCount() 获取楼栋数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildingCount(integer $BuildingCount) 设置楼栋数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getBuildingArea() 获取建筑面积
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildingArea(float $BuildingArea) 设置建筑面积
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpaceDataStats extends AbstractModel
{
    /**
     * @var string 工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var string 工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceName;

    /**
     * @var integer 楼栋数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildingCount;

    /**
     * @var float 建筑面积
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildingArea;

    /**
     * @param string $WorkspaceId 工作空间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceName 工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BuildingCount 楼栋数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $BuildingArea 建筑面积
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

        if (array_key_exists("WorkspaceName",$param) and $param["WorkspaceName"] !== null) {
            $this->WorkspaceName = $param["WorkspaceName"];
        }

        if (array_key_exists("BuildingCount",$param) and $param["BuildingCount"] !== null) {
            $this->BuildingCount = $param["BuildingCount"];
        }

        if (array_key_exists("BuildingArea",$param) and $param["BuildingArea"] !== null) {
            $this->BuildingArea = $param["BuildingArea"];
        }
    }
}
