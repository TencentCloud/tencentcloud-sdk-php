<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getModTime() 获取修改时间
 * @method void setModTime(string $ModTime) 设置修改时间
 * @method string getAddTime() 获取创建时间
 * @method void setAddTime(string $AddTime) 设置创建时间
 * @method string getRuntime() 获取运行时
 * @method void setRuntime(string $Runtime) 设置运行时
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getFunctionId() 获取函数ID
 * @method void setFunctionId(string $FunctionId) 设置函数ID
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 */

/**
 *函数列表
 */
class Function extends AbstractModel
{
    /**
     * @var string 修改时间
     */
    public $ModTime;

    /**
     * @var string 创建时间
     */
    public $AddTime;

    /**
     * @var string 运行时
     */
    public $Runtime;

    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 函数ID
     */
    public $FunctionId;

    /**
     * @var string 命名空间
     */
    public $Namespace;
    /**
     * @param string $ModTime 修改时间
     * @param string $AddTime 创建时间
     * @param string $Runtime 运行时
     * @param string $FunctionName 函数名称
     * @param string $FunctionId 函数ID
     * @param string $Namespace 命名空间
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
