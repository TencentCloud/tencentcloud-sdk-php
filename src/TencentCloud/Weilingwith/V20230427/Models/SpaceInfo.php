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
 * 项目空间详细信息
 *
 * @method integer getWorkspaceId() 获取项目空间id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(integer $WorkspaceId) 设置项目空间id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTenantId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(integer $TenantId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnglishName() 获取英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnglishName(string $EnglishName) 设置英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChineseName() 获取中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChineseName(string $ChineseName) 设置中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取项目空间描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置项目空间描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取项目空间状态:0 启用 1 停用 -1 已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置项目空间状态:0 启用 1 停用 -1 已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsCommWorkspace() 获取是否是公共空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCommWorkspace(boolean $IsCommWorkspace) 设置是否是公共空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidityStartTime() 获取有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidityStartTime(string $ValidityStartTime) 设置有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidityEndTime() 获取有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidityEndTime(string $ValidityEndTime) 设置有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSelected() 获取选中状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelected(integer $Selected) 设置选中状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSystem() 获取系统生成状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSystem(integer $IsSystem) 设置系统生成状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpaceInfo extends AbstractModel
{
    /**
     * @var integer 项目空间id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var integer 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 英文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnglishName;

    /**
     * @var string 中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChineseName;

    /**
     * @var string 项目空间描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 项目空间状态:0 启用 1 停用 -1 已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var boolean 是否是公共空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCommWorkspace;

    /**
     * @var string 有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidityStartTime;

    /**
     * @var string 有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidityEndTime;

    /**
     * @var integer 选中状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Selected;

    /**
     * @var integer 系统生成状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSystem;

    /**
     * @param integer $WorkspaceId 项目空间id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TenantId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnglishName 英文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChineseName 中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 项目空间描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 项目空间状态:0 启用 1 停用 -1 已删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsCommWorkspace 是否是公共空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidityStartTime 有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidityEndTime 有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Selected 选中状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSystem 系统生成状态
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

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("EnglishName",$param) and $param["EnglishName"] !== null) {
            $this->EnglishName = $param["EnglishName"];
        }

        if (array_key_exists("ChineseName",$param) and $param["ChineseName"] !== null) {
            $this->ChineseName = $param["ChineseName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsCommWorkspace",$param) and $param["IsCommWorkspace"] !== null) {
            $this->IsCommWorkspace = $param["IsCommWorkspace"];
        }

        if (array_key_exists("ValidityStartTime",$param) and $param["ValidityStartTime"] !== null) {
            $this->ValidityStartTime = $param["ValidityStartTime"];
        }

        if (array_key_exists("ValidityEndTime",$param) and $param["ValidityEndTime"] !== null) {
            $this->ValidityEndTime = $param["ValidityEndTime"];
        }

        if (array_key_exists("Selected",$param) and $param["Selected"] !== null) {
            $this->Selected = $param["Selected"];
        }

        if (array_key_exists("IsSystem",$param) and $param["IsSystem"] !== null) {
            $this->IsSystem = $param["IsSystem"];
        }
    }
}
