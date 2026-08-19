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
 * SCF自定义域名端点
 *
 * @method string getPathMatch() 获取<p>匹配路径</p>
 * @method void setPathMatch(string $PathMatch) 设置<p>匹配路径</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getFunctionName() 获取<p>函数名称</p>
 * @method void setFunctionName(string $FunctionName) 设置<p>函数名称</p>
 * @method string getQualifier() 获取<p>函数版本</p>
 * @method void setQualifier(string $Qualifier) 设置<p>函数版本</p>
 */
class ScfCustomDomainEndpointItem extends AbstractModel
{
    /**
     * @var string <p>匹配路径</p>
     */
    public $PathMatch;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>函数名称</p>
     */
    public $FunctionName;

    /**
     * @var string <p>函数版本</p>
     */
    public $Qualifier;

    /**
     * @param string $PathMatch <p>匹配路径</p>
     * @param string $Namespace <p>命名空间</p>
     * @param string $FunctionName <p>函数名称</p>
     * @param string $Qualifier <p>函数版本</p>
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
        if (array_key_exists("PathMatch",$param) and $param["PathMatch"] !== null) {
            $this->PathMatch = $param["PathMatch"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }
    }
}
