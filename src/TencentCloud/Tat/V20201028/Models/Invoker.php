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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行器信息。
 *
 * @method string getInvokerId() 获取执行器ID。
 * @method void setInvokerId(string $InvokerId) 设置执行器ID。
 * @method string getName() 获取执行器名称。
 * @method void setName(string $Name) 设置执行器名称。
 * @method string getType() 获取执行器类型。
 * @method void setType(string $Type) 设置执行器类型。
 * @method string getCommandId() 获取命令ID。
 * @method void setCommandId(string $CommandId) 设置命令ID。
 * @method string getUsername() 获取用户名。
 * @method void setUsername(string $Username) 设置用户名。
 * @method string getParameters() 获取自定义参数。
 * @method void setParameters(string $Parameters) 设置自定义参数。
 * @method array getInstanceIds() 获取实例ID列表。
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表。
 * @method boolean getEnable() 获取执行器是否启用。
 * @method void setEnable(boolean $Enable) 设置执行器是否启用。
 * @method ScheduleSettings getScheduleSettings() 获取执行器周期计划。周期执行器会返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduleSettings(ScheduleSettings $ScheduleSettings) 设置执行器周期计划。周期执行器会返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method string getUpdatedTime() 获取修改时间。
 * @method void setUpdatedTime(string $UpdatedTime) 设置修改时间。
 */
class Invoker extends AbstractModel
{
    /**
     * @var string 执行器ID。
     */
    public $InvokerId;

    /**
     * @var string 执行器名称。
     */
    public $Name;

    /**
     * @var string 执行器类型。
     */
    public $Type;

    /**
     * @var string 命令ID。
     */
    public $CommandId;

    /**
     * @var string 用户名。
     */
    public $Username;

    /**
     * @var string 自定义参数。
     */
    public $Parameters;

    /**
     * @var array 实例ID列表。
     */
    public $InstanceIds;

    /**
     * @var boolean 执行器是否启用。
     */
    public $Enable;

    /**
     * @var ScheduleSettings 执行器周期计划。周期执行器会返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduleSettings;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 修改时间。
     */
    public $UpdatedTime;

    /**
     * @param string $InvokerId 执行器ID。
     * @param string $Name 执行器名称。
     * @param string $Type 执行器类型。
     * @param string $CommandId 命令ID。
     * @param string $Username 用户名。
     * @param string $Parameters 自定义参数。
     * @param array $InstanceIds 实例ID列表。
     * @param boolean $Enable 执行器是否启用。
     * @param ScheduleSettings $ScheduleSettings 执行器周期计划。周期执行器会返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。
     * @param string $UpdatedTime 修改时间。
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
        if (array_key_exists("InvokerId",$param) and $param["InvokerId"] !== null) {
            $this->InvokerId = $param["InvokerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScheduleSettings",$param) and $param["ScheduleSettings"] !== null) {
            $this->ScheduleSettings = new ScheduleSettings();
            $this->ScheduleSettings->deserialize($param["ScheduleSettings"]);
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
