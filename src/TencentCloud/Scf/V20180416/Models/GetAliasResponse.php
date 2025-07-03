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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAlias返回参数结构体
 *
 * @method string getFunctionVersion() 获取别名指向的主版本
 * @method void setFunctionVersion(string $FunctionVersion) 设置别名指向的主版本
 * @method string getName() 获取别名的名称
 * @method void setName(string $Name) 设置别名的名称
 * @method RoutingConfig getRoutingConfig() 获取别名的路由信息
 * @method void setRoutingConfig(RoutingConfig $RoutingConfig) 设置别名的路由信息
 * @method string getDescription() 获取别名的描述
 * @method void setDescription(string $Description) 设置别名的描述
 * @method string getAddTime() 获取创建时间
 * @method void setAddTime(string $AddTime) 设置创建时间
 * @method string getModTime() 获取更新时间
 * @method void setModTime(string $ModTime) 设置更新时间
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetAliasResponse extends AbstractModel
{
    /**
     * @var string 别名指向的主版本
     */
    public $FunctionVersion;

    /**
     * @var string 别名的名称
     */
    public $Name;

    /**
     * @var RoutingConfig 别名的路由信息
     */
    public $RoutingConfig;

    /**
     * @var string 别名的描述
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $AddTime;

    /**
     * @var string 更新时间
     */
    public $ModTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FunctionVersion 别名指向的主版本
     * @param string $Name 别名的名称
     * @param RoutingConfig $RoutingConfig 别名的路由信息
     * @param string $Description 别名的描述
     * @param string $AddTime 创建时间
     * @param string $ModTime 更新时间
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RoutingConfig",$param) and $param["RoutingConfig"] !== null) {
            $this->RoutingConfig = new RoutingConfig();
            $this->RoutingConfig->deserialize($param["RoutingConfig"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
