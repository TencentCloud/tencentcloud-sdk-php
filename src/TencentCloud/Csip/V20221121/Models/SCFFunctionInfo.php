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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCF 函数精简信息
 *
 * @method string getFunctionId() 获取函数 ID
参数格式：形如 lam-xxxxxxxx
 * @method void setFunctionId(string $FunctionId) 设置函数 ID
参数格式：形如 lam-xxxxxxxx
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getStatus() 获取函数状态
枚举值：
Active：可用
Creating：创建中
Updating：更新中
CreateFailed：创建失败
Deleting：删除中
 * @method void setStatus(string $Status) 设置函数状态
枚举值：
Active：可用
Creating：创建中
Updating：更新中
CreateFailed：创建失败
Deleting：删除中
 * @method string getType() 获取函数类型
枚举值：
Event：事件函数（当前接口仅返回该类型）
 * @method void setType(string $Type) 设置函数类型
枚举值：
Event：事件函数（当前接口仅返回该类型）
 */
class SCFFunctionInfo extends AbstractModel
{
    /**
     * @var string 函数 ID
参数格式：形如 lam-xxxxxxxx
     */
    public $FunctionId;

    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 函数状态
枚举值：
Active：可用
Creating：创建中
Updating：更新中
CreateFailed：创建失败
Deleting：删除中
     */
    public $Status;

    /**
     * @var string 函数类型
枚举值：
Event：事件函数（当前接口仅返回该类型）
     */
    public $Type;

    /**
     * @param string $FunctionId 函数 ID
参数格式：形如 lam-xxxxxxxx
     * @param string $FunctionName 函数名称
     * @param string $Namespace 命名空间
     * @param string $Status 函数状态
枚举值：
Active：可用
Creating：创建中
Updating：更新中
CreateFailed：创建失败
Deleting：删除中
     * @param string $Type 函数类型
枚举值：
Event：事件函数（当前接口仅返回该类型）
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
