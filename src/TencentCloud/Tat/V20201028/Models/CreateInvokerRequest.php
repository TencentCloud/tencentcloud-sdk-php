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
 * CreateInvoker请求参数结构体
 *
 * @method string getName() 获取执行器名称。
 * @method void setName(string $Name) 设置执行器名称。
 * @method string getType() 获取执行器类型，当前仅支持周期类型执行器，取值：`SCHEDULE` 。
 * @method void setType(string $Type) 设置执行器类型，当前仅支持周期类型执行器，取值：`SCHEDULE` 。
 * @method string getCommandId() 获取远程命令ID。
 * @method void setCommandId(string $CommandId) 设置远程命令ID。
 * @method array getInstanceIds() 获取触发器关联的实例ID。列表上限 100。
 * @method void setInstanceIds(array $InstanceIds) 设置触发器关联的实例ID。列表上限 100。
 * @method string getUsername() 获取命令执行用户。
 * @method void setUsername(string $Username) 设置命令执行用户。
 * @method string getParameters() 获取命令自定义参数。
 * @method void setParameters(string $Parameters) 设置命令自定义参数。
 * @method ScheduleSettings getScheduleSettings() 获取周期执行器设置，当创建周期执行器时，必须指定此参数。
 * @method void setScheduleSettings(ScheduleSettings $ScheduleSettings) 设置周期执行器设置，当创建周期执行器时，必须指定此参数。
 */
class CreateInvokerRequest extends AbstractModel
{
    /**
     * @var string 执行器名称。
     */
    public $Name;

    /**
     * @var string 执行器类型，当前仅支持周期类型执行器，取值：`SCHEDULE` 。
     */
    public $Type;

    /**
     * @var string 远程命令ID。
     */
    public $CommandId;

    /**
     * @var array 触发器关联的实例ID。列表上限 100。
     */
    public $InstanceIds;

    /**
     * @var string 命令执行用户。
     */
    public $Username;

    /**
     * @var string 命令自定义参数。
     */
    public $Parameters;

    /**
     * @var ScheduleSettings 周期执行器设置，当创建周期执行器时，必须指定此参数。
     */
    public $ScheduleSettings;

    /**
     * @param string $Name 执行器名称。
     * @param string $Type 执行器类型，当前仅支持周期类型执行器，取值：`SCHEDULE` 。
     * @param string $CommandId 远程命令ID。
     * @param array $InstanceIds 触发器关联的实例ID。列表上限 100。
     * @param string $Username 命令执行用户。
     * @param string $Parameters 命令自定义参数。
     * @param ScheduleSettings $ScheduleSettings 周期执行器设置，当创建周期执行器时，必须指定此参数。
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

        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("ScheduleSettings",$param) and $param["ScheduleSettings"] !== null) {
            $this->ScheduleSettings = new ScheduleSettings();
            $this->ScheduleSettings->deserialize($param["ScheduleSettings"]);
        }
    }
}
