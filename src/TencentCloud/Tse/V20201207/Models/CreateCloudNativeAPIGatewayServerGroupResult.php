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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建网关分组信息
 *
 * @method string getGatewayId() 获取网关实例id
 * @method void setGatewayId(string $GatewayId) 设置网关实例id
 * @method string getGroupId() 获取分组id
 * @method void setGroupId(string $GroupId) 设置分组id
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 */
class CreateCloudNativeAPIGatewayServerGroupResult extends AbstractModel
{
    /**
     * @var string 网关实例id
     */
    public $GatewayId;

    /**
     * @var string 分组id
     */
    public $GroupId;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @param string $GatewayId 网关实例id
     * @param string $GroupId 分组id
     * @param string $Status 状态
     * @param string $TaskId 任务ID
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
