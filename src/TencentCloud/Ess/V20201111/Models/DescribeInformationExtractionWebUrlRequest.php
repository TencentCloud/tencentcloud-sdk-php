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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInformationExtractionWebUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。使用此接口时，必须填写userId。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。使用此接口时，必须填写userId。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getTaskId() 获取合同信息提取任务ID，该参数可通过回调事件[回调通知](https://qian.tencent.com/developers/company/callback_types_v2)获取或者从控制台信息提取任务列表获取。

注意：`不填写任务ID时返回信息提取任务列表URL，填写任务ID时返回信息提取任务详情URL`
 * @method void setTaskId(string $TaskId) 设置合同信息提取任务ID，该参数可通过回调事件[回调通知](https://qian.tencent.com/developers/company/callback_types_v2)获取或者从控制台信息提取任务列表获取。

注意：`不填写任务ID时返回信息提取任务列表URL，填写任务ID时返回信息提取任务详情URL`
 */
class DescribeInformationExtractionWebUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。使用此接口时，必须填写userId。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 合同信息提取任务ID，该参数可通过回调事件[回调通知](https://qian.tencent.com/developers/company/callback_types_v2)获取或者从控制台信息提取任务列表获取。

注意：`不填写任务ID时返回信息提取任务列表URL，填写任务ID时返回信息提取任务详情URL`
     */
    public $TaskId;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。使用此接口时，必须填写userId。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $TaskId 合同信息提取任务ID，该参数可通过回调事件[回调通知](https://qian.tencent.com/developers/company/callback_types_v2)获取或者从控制台信息提取任务列表获取。

注意：`不填写任务ID时返回信息提取任务列表URL，填写任务ID时返回信息提取任务详情URL`
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
