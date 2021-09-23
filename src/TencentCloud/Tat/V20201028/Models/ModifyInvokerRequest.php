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
 * ModifyInvoker请求参数结构体
 *
 * @method string getInvokerId() 获取待修改的执行器ID。
 * @method void setInvokerId(string $InvokerId) 设置待修改的执行器ID。
 * @method string getName() 获取待修改的执行器名称。
 * @method void setName(string $Name) 设置待修改的执行器名称。
 * @method string getType() 获取执行器类型，当前仅支持周期类型执行器，取值：`SCHEDULE` 。
 * @method void setType(string $Type) 设置执行器类型，当前仅支持周期类型执行器，取值：`SCHEDULE` 。
 * @method string getCommandId() 获取待修改的命令ID。
 * @method void setCommandId(string $CommandId) 设置待修改的命令ID。
 * @method string getUsername() 获取待修改的用户名。
 * @method void setUsername(string $Username) 设置待修改的用户名。
 * @method string getParameters() 获取待修改的自定义参数。
 * @method void setParameters(string $Parameters) 设置待修改的自定义参数。
 * @method array getInstanceIds() 获取待修改的实例ID列表。列表长度上限100。
 * @method void setInstanceIds(array $InstanceIds) 设置待修改的实例ID列表。列表长度上限100。
 * @method ScheduleSettings getScheduleSettings() 获取待修改的周期执行器设置。
 * @method void setScheduleSettings(ScheduleSettings $ScheduleSettings) 设置待修改的周期执行器设置。
 */
class ModifyInvokerRequest extends AbstractModel
{
    /**
     * @var string 待修改的执行器ID。
     */
    public $InvokerId;

    /**
     * @var string 待修改的执行器名称。
     */
    public $Name;

    /**
     * @var string 执行器类型，当前仅支持周期类型执行器，取值：`SCHEDULE` 。
     */
    public $Type;

    /**
     * @var string 待修改的命令ID。
     */
    public $CommandId;

    /**
     * @var string 待修改的用户名。
     */
    public $Username;

    /**
     * @var string 待修改的自定义参数。
     */
    public $Parameters;

    /**
     * @var array 待修改的实例ID列表。列表长度上限100。
     */
    public $InstanceIds;

    /**
     * @var ScheduleSettings 待修改的周期执行器设置。
     */
    public $ScheduleSettings;

    /**
     * @param string $InvokerId 待修改的执行器ID。
     * @param string $Name 待修改的执行器名称。
     * @param string $Type 执行器类型，当前仅支持周期类型执行器，取值：`SCHEDULE` 。
     * @param string $CommandId 待修改的命令ID。
     * @param string $Username 待修改的用户名。
     * @param string $Parameters 待修改的自定义参数。
     * @param array $InstanceIds 待修改的实例ID列表。列表长度上限100。
     * @param ScheduleSettings $ScheduleSettings 待修改的周期执行器设置。
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

        if (array_key_exists("ScheduleSettings",$param) and $param["ScheduleSettings"] !== null) {
            $this->ScheduleSettings = new ScheduleSettings();
            $this->ScheduleSettings->deserialize($param["ScheduleSettings"]);
        }
    }
}
