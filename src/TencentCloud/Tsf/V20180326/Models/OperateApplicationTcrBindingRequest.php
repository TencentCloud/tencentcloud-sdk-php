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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OperateApplicationTcrBinding请求参数结构体
 *
 * @method string getCommand() 获取指定操作类型，目前支持：
- `bind`：绑定（默认）
- `unbind`：解除绑定
 * @method void setCommand(string $Command) 设置指定操作类型，目前支持：
- `bind`：绑定（默认）
- `unbind`：解除绑定
 * @method string getApplicationId() 获取应用ID，可通过调用[DescribeApplications](https://cloud.tencent.com/document/api/649/36090)查询已创建的应用列表或登录控制台进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/api/649/36094)创建新的应用。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID，可通过调用[DescribeApplications](https://cloud.tencent.com/document/api/649/36090)查询已创建的应用列表或登录控制台进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/api/649/36094)创建新的应用。
 * @method TcrRepoInfo getTcrRepoInfo() 获取TcrRepoInfo值
 * @method void setTcrRepoInfo(TcrRepoInfo $TcrRepoInfo) 设置TcrRepoInfo值
 */
class OperateApplicationTcrBindingRequest extends AbstractModel
{
    /**
     * @var string 指定操作类型，目前支持：
- `bind`：绑定（默认）
- `unbind`：解除绑定
     */
    public $Command;

    /**
     * @var string 应用ID，可通过调用[DescribeApplications](https://cloud.tencent.com/document/api/649/36090)查询已创建的应用列表或登录控制台进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/api/649/36094)创建新的应用。
     */
    public $ApplicationId;

    /**
     * @var TcrRepoInfo TcrRepoInfo值
     */
    public $TcrRepoInfo;

    /**
     * @param string $Command 指定操作类型，目前支持：
- `bind`：绑定（默认）
- `unbind`：解除绑定
     * @param string $ApplicationId 应用ID，可通过调用[DescribeApplications](https://cloud.tencent.com/document/api/649/36090)查询已创建的应用列表或登录控制台进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/api/649/36094)创建新的应用。
     * @param TcrRepoInfo $TcrRepoInfo TcrRepoInfo值
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
        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("TcrRepoInfo",$param) and $param["TcrRepoInfo"] !== null) {
            $this->TcrRepoInfo = new TcrRepoInfo();
            $this->TcrRepoInfo->deserialize($param["TcrRepoInfo"]);
        }
    }
}
