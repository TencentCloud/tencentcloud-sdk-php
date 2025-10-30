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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康检测模板规则
 *
 * @method string getName() 获取健康检测项目名称
 * @method void setName(string $Name) 设置健康检测项目名称
 * @method string getDescription() 获取健康检测规则描述
 * @method void setDescription(string $Description) 设置健康检测规则描述
 * @method string getRepairAction() 获取修复动作
 * @method void setRepairAction(string $RepairAction) 设置修复动作
 * @method string getRepairEffect() 获取修复影响
 * @method void setRepairEffect(string $RepairEffect) 设置修复影响
 * @method boolean getShouldEnable() 获取是否建议开启检测
 * @method void setShouldEnable(boolean $ShouldEnable) 设置是否建议开启检测
 * @method boolean getShouldRepair() 获取是否建议修复
 * @method void setShouldRepair(boolean $ShouldRepair) 设置是否建议修复
 * @method string getSeverity() 获取问题严重程度
 * @method void setSeverity(string $Severity) 设置问题严重程度
 */
class HealthCheckTemplateRule extends AbstractModel
{
    /**
     * @var string 健康检测项目名称
     */
    public $Name;

    /**
     * @var string 健康检测规则描述
     */
    public $Description;

    /**
     * @var string 修复动作
     */
    public $RepairAction;

    /**
     * @var string 修复影响
     */
    public $RepairEffect;

    /**
     * @var boolean 是否建议开启检测
     */
    public $ShouldEnable;

    /**
     * @var boolean 是否建议修复
     */
    public $ShouldRepair;

    /**
     * @var string 问题严重程度
     */
    public $Severity;

    /**
     * @param string $Name 健康检测项目名称
     * @param string $Description 健康检测规则描述
     * @param string $RepairAction 修复动作
     * @param string $RepairEffect 修复影响
     * @param boolean $ShouldEnable 是否建议开启检测
     * @param boolean $ShouldRepair 是否建议修复
     * @param string $Severity 问题严重程度
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RepairAction",$param) and $param["RepairAction"] !== null) {
            $this->RepairAction = $param["RepairAction"];
        }

        if (array_key_exists("RepairEffect",$param) and $param["RepairEffect"] !== null) {
            $this->RepairEffect = $param["RepairEffect"];
        }

        if (array_key_exists("ShouldEnable",$param) and $param["ShouldEnable"] !== null) {
            $this->ShouldEnable = $param["ShouldEnable"];
        }

        if (array_key_exists("ShouldRepair",$param) and $param["ShouldRepair"] !== null) {
            $this->ShouldRepair = $param["ShouldRepair"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }
    }
}
