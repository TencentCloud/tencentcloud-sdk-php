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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstance请求参数结构体
 *
 * @method string getOperation() 获取修改实例操作。如填写：
- rename：表示实例重命名。
- modifyProject：修改实例所属项目。
- modifyAutoRenew：修改实例续费标记。
 * @method void setOperation(string $Operation) 设置修改实例操作。如填写：
- rename：表示实例重命名。
- modifyProject：修改实例所属项目。
- modifyAutoRenew：修改实例续费标记。
 * @method array getInstanceIds() 获取实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。每次请求的实例数量的上限为10。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。每次请求的实例数量的上限为10。
 * @method array getInstanceNames() 获取实例的新名称。
 * @method void setInstanceNames(array $InstanceNames) 设置实例的新名称。
 * @method integer getProjectId() 获取项目 ID，请登录[Redis控制台的项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID，请登录[Redis控制台的项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
 * @method array getAutoRenews() 获取自动续费标识。
- 0：默认状态，指手动续费。
- 1：自动续费。
- 2：明确不自动续费。
 * @method void setAutoRenews(array $AutoRenews) 设置自动续费标识。
- 0：默认状态，指手动续费。
- 1：自动续费。
- 2：明确不自动续费。
 * @method string getInstanceId() 获取目前在废弃中，存量用户还可以使用，建议新用户使用 InstanceIds。
 * @method void setInstanceId(string $InstanceId) 设置目前在废弃中，存量用户还可以使用，建议新用户使用 InstanceIds。
 * @method string getInstanceName() 获取已经废弃
 * @method void setInstanceName(string $InstanceName) 设置已经废弃
 * @method integer getAutoRenew() 获取已经废弃。
 * @method void setAutoRenew(integer $AutoRenew) 设置已经废弃。
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string 修改实例操作。如填写：
- rename：表示实例重命名。
- modifyProject：修改实例所属项目。
- modifyAutoRenew：修改实例续费标记。
     */
    public $Operation;

    /**
     * @var array 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。每次请求的实例数量的上限为10。
     */
    public $InstanceIds;

    /**
     * @var array 实例的新名称。
     */
    public $InstanceNames;

    /**
     * @var integer 项目 ID，请登录[Redis控制台的项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
     */
    public $ProjectId;

    /**
     * @var array 自动续费标识。
- 0：默认状态，指手动续费。
- 1：自动续费。
- 2：明确不自动续费。
     */
    public $AutoRenews;

    /**
     * @var string 目前在废弃中，存量用户还可以使用，建议新用户使用 InstanceIds。
     * @deprecated
     */
    public $InstanceId;

    /**
     * @var string 已经废弃
     * @deprecated
     */
    public $InstanceName;

    /**
     * @var integer 已经废弃。
     * @deprecated
     */
    public $AutoRenew;

    /**
     * @param string $Operation 修改实例操作。如填写：
- rename：表示实例重命名。
- modifyProject：修改实例所属项目。
- modifyAutoRenew：修改实例续费标记。
     * @param array $InstanceIds 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。每次请求的实例数量的上限为10。
     * @param array $InstanceNames 实例的新名称。
     * @param integer $ProjectId 项目 ID，请登录[Redis控制台的项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
     * @param array $AutoRenews 自动续费标识。
- 0：默认状态，指手动续费。
- 1：自动续费。
- 2：明确不自动续费。
     * @param string $InstanceId 目前在废弃中，存量用户还可以使用，建议新用户使用 InstanceIds。
     * @param string $InstanceName 已经废弃
     * @param integer $AutoRenew 已经废弃。
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRenews",$param) and $param["AutoRenews"] !== null) {
            $this->AutoRenews = $param["AutoRenews"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }
    }
}
