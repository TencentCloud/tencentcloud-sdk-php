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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyProject请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method string getProjectId() 获取被复制的项目 ID。
 * @method void setProjectId(string $ProjectId) 设置被复制的项目 ID。
 * @method string getName() 获取复制后的项目名称，不填为原项目名称+"(副本)"。
 * @method void setName(string $Name) 设置复制后的项目名称，不填为原项目名称+"(副本)"。
 * @method Entity getOwner() 获取复制后的项目归属者，不填为原项目归属者。
 * @method void setOwner(Entity $Owner) 设置复制后的项目归属者，不填为原项目归属者。
 * @method string getOperator() 获取操作者。填写用户的 Id，用于标识调用者及校验操作权限。
 * @method void setOperator(string $Operator) 设置操作者。填写用户的 Id，用于标识调用者及校验操作权限。
 */
class CopyProjectRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var string 被复制的项目 ID。
     */
    public $ProjectId;

    /**
     * @var string 复制后的项目名称，不填为原项目名称+"(副本)"。
     */
    public $Name;

    /**
     * @var Entity 复制后的项目归属者，不填为原项目归属者。
     */
    public $Owner;

    /**
     * @var string 操作者。填写用户的 Id，用于标识调用者及校验操作权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param string $ProjectId 被复制的项目 ID。
     * @param string $Name 复制后的项目名称，不填为原项目名称+"(副本)"。
     * @param Entity $Owner 复制后的项目归属者，不填为原项目归属者。
     * @param string $Operator 操作者。填写用户的 Id，用于标识调用者及校验操作权限。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
