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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目信息
 *
 * @method string getProjectName() 获取项目标识，英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目标识，英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取项目显示名称，可以为中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置项目显示名称，可以为中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取项目的所在租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置项目的所在租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取项目状态：0：禁用，1：启用，-3:禁用中，2：启用中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置项目状态：0：禁用，1：启用，-3:禁用中，2：启用中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModel() 获取项目类型，SIMPLE：简单模式 STANDARD：标准模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(string $Model) 设置项目类型，SIMPLE：简单模式 STANDARD：标准模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduleMode() 获取项目调度模式，task：任务模式 workflow：工作流模式
 * @method void setScheduleMode(string $ScheduleMode) 设置项目调度模式，task：任务模式 workflow：工作流模式
 */
class BaseProject extends AbstractModel
{
    /**
     * @var string 项目标识，英文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 项目显示名称，可以为中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 项目的所在租户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 项目状态：0：禁用，1：启用，-3:禁用中，2：启用中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 项目类型，SIMPLE：简单模式 STANDARD：标准模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var string 项目调度模式，task：任务模式 workflow：工作流模式
     */
    public $ScheduleMode;

    /**
     * @param string $ProjectName 项目标识，英文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 项目显示名称，可以为中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId 项目的所在租户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 项目状态：0：禁用，1：启用，-3:禁用中，2：启用中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Model 项目类型，SIMPLE：简单模式 STANDARD：标准模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduleMode 项目调度模式，task：任务模式 workflow：工作流模式
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
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("ScheduleMode",$param) and $param["ScheduleMode"] !== null) {
            $this->ScheduleMode = $param["ScheduleMode"];
        }
    }
}
