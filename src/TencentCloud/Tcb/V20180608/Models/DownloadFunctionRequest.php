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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadFunction请求参数结构体
 *
 * @method string getFunctionName() 获取<p>函数的名称</p>
 * @method void setFunctionName(string $FunctionName) 设置<p>函数的名称</p>
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getQualifier() 获取<p>函数的版本</p>
 * @method void setQualifier(string $Qualifier) 设置<p>函数的版本</p>
 */
class DownloadFunctionRequest extends AbstractModel
{
    /**
     * @var string <p>函数的名称</p>
     */
    public $FunctionName;

    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>函数的版本</p>
     */
    public $Qualifier;

    /**
     * @param string $FunctionName <p>函数的名称</p>
     * @param string $EnvId <p>环境ID</p>
     * @param string $Qualifier <p>函数的版本</p>
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }
    }
}
