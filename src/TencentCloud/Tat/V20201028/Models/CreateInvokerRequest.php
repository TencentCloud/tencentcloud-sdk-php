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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInvoker请求参数结构体
 *
 * @method string getName() 获取执行器名称。长度不超过 120 字符。
 * @method void setName(string $Name) 设置执行器名称。长度不超过 120 字符。
 * @method string getType() 获取执行器类型。

可选取值（当前仅支持一种）：

- `SCHEDULE`：周期类型执行器。
 * @method void setType(string $Type) 设置执行器类型。

可选取值（当前仅支持一种）：

- `SCHEDULE`：周期类型执行器。
 * @method string getCommandId() 获取远程命令ID。

可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取。
 * @method void setCommandId(string $CommandId) 设置远程命令ID。

可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取。
 * @method array getInstanceIds() 获取触发器关联的实例ID。列表上限 100。

可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

实例需要安装 TAT 客户端, 且客户端为 Online 状态。可通过 [DescribeAutomationAgentStatus(查询客户端状态)](https://cloud.tencent.com/document/api/1340/52682) 接口查询客户端状态。
 * @method void setInstanceIds(array $InstanceIds) 设置触发器关联的实例ID。列表上限 100。

可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

实例需要安装 TAT 客户端, 且客户端为 Online 状态。可通过 [DescribeAutomationAgentStatus(查询客户端状态)](https://cloud.tencent.com/document/api/1340/52682) 接口查询客户端状态。
 * @method string getUsername() 获取命令执行用户。长度不超过 256 字符。
 * @method void setUsername(string $Username) 设置命令执行用户。长度不超过 256 字符。
 * @method string getParameters() 获取命令自定义参数。字段类型为 JSON encode string。

仅在 CommandId 所指命令的 EnableParameter 为 true 时，才允许设置此参数。可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取命令的 EnableParameter 设置。
 * @method void setParameters(string $Parameters) 设置命令自定义参数。字段类型为 JSON encode string。

仅在 CommandId 所指命令的 EnableParameter 为 true 时，才允许设置此参数。可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取命令的 EnableParameter 设置。
 * @method ScheduleSettings getScheduleSettings() 获取周期执行器设置。

当执行器类型为 `SCHEDULE` 时，必须指定此参数。
 * @method void setScheduleSettings(ScheduleSettings $ScheduleSettings) 设置周期执行器设置。

当执行器类型为 `SCHEDULE` 时，必须指定此参数。
 * @method array getTags() 获取为命令关联的标签，列表长度不超过10
 * @method void setTags(array $Tags) 设置为命令关联的标签，列表长度不超过10
 */
class CreateInvokerRequest extends AbstractModel
{
    /**
     * @var string 执行器名称。长度不超过 120 字符。
     */
    public $Name;

    /**
     * @var string 执行器类型。

可选取值（当前仅支持一种）：

- `SCHEDULE`：周期类型执行器。
     */
    public $Type;

    /**
     * @var string 远程命令ID。

可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取。
     */
    public $CommandId;

    /**
     * @var array 触发器关联的实例ID。列表上限 100。

可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

实例需要安装 TAT 客户端, 且客户端为 Online 状态。可通过 [DescribeAutomationAgentStatus(查询客户端状态)](https://cloud.tencent.com/document/api/1340/52682) 接口查询客户端状态。
     */
    public $InstanceIds;

    /**
     * @var string 命令执行用户。长度不超过 256 字符。
     */
    public $Username;

    /**
     * @var string 命令自定义参数。字段类型为 JSON encode string。

仅在 CommandId 所指命令的 EnableParameter 为 true 时，才允许设置此参数。可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取命令的 EnableParameter 设置。
     */
    public $Parameters;

    /**
     * @var ScheduleSettings 周期执行器设置。

当执行器类型为 `SCHEDULE` 时，必须指定此参数。
     */
    public $ScheduleSettings;

    /**
     * @var array 为命令关联的标签，列表长度不超过10
     */
    public $Tags;

    /**
     * @param string $Name 执行器名称。长度不超过 120 字符。
     * @param string $Type 执行器类型。

可选取值（当前仅支持一种）：

- `SCHEDULE`：周期类型执行器。
     * @param string $CommandId 远程命令ID。

可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取。
     * @param array $InstanceIds 触发器关联的实例ID。列表上限 100。

可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

实例需要安装 TAT 客户端, 且客户端为 Online 状态。可通过 [DescribeAutomationAgentStatus(查询客户端状态)](https://cloud.tencent.com/document/api/1340/52682) 接口查询客户端状态。
     * @param string $Username 命令执行用户。长度不超过 256 字符。
     * @param string $Parameters 命令自定义参数。字段类型为 JSON encode string。

仅在 CommandId 所指命令的 EnableParameter 为 true 时，才允许设置此参数。可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取命令的 EnableParameter 设置。
     * @param ScheduleSettings $ScheduleSettings 周期执行器设置。

当执行器类型为 `SCHEDULE` 时，必须指定此参数。
     * @param array $Tags 为命令关联的标签，列表长度不超过10
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
