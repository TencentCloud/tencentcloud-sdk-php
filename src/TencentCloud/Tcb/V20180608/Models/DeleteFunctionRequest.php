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
 * DeleteFunction请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境 ID。可通过 DescribeEnvs 接口获取。</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境 ID。可通过 DescribeEnvs 接口获取。</p>
 * @method string getFunctionName() 获取<p>函数名称。最大 60 字符，以字母开头，支持字母、数字、下划线和连字符。可通过 ListFunctions 或 GetFunction 获取。</p>
 * @method void setFunctionName(string $FunctionName) 设置<p>函数名称。最大 60 字符，以字母开头，支持字母、数字、下划线和连字符。可通过 ListFunctions 或 GetFunction 获取。</p>
 * @method string getQualifier() 获取<p>函数版本。取值：$LATEST（最新版本）。不填默认 $LATEST。当前仅支持 $LATEST。</p>
 * @method void setQualifier(string $Qualifier) 设置<p>函数版本。取值：$LATEST（最新版本）。不填默认 $LATEST。当前仅支持 $LATEST。</p>
 */
class DeleteFunctionRequest extends AbstractModel
{
    /**
     * @var string <p>环境 ID。可通过 DescribeEnvs 接口获取。</p>
     */
    public $EnvId;

    /**
     * @var string <p>函数名称。最大 60 字符，以字母开头，支持字母、数字、下划线和连字符。可通过 ListFunctions 或 GetFunction 获取。</p>
     */
    public $FunctionName;

    /**
     * @var string <p>函数版本。取值：$LATEST（最新版本）。不填默认 $LATEST。当前仅支持 $LATEST。</p>
     */
    public $Qualifier;

    /**
     * @param string $EnvId <p>环境 ID。可通过 DescribeEnvs 接口获取。</p>
     * @param string $FunctionName <p>函数名称。最大 60 字符，以字母开头，支持字母、数字、下划线和连字符。可通过 ListFunctions 或 GetFunction 获取。</p>
     * @param string $Qualifier <p>函数版本。取值：$LATEST（最新版本）。不填默认 $LATEST。当前仅支持 $LATEST。</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }
    }
}
