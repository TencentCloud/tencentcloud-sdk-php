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
 * UpdateFunctionCode请求参数结构体
 *
 * @method string getFunctionName() 获取<p>创建的函数名称</p>
 * @method void setFunctionName(string $FunctionName) 设置<p>创建的函数名称</p>
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getHandler() 获取<p>函数处理方法名称</p>
 * @method void setHandler(string $Handler) 设置<p>函数处理方法名称</p>
 * @method string getNamespace() 获取<p>函数所属命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>函数所属命名空间</p>
 * @method string getInstallDependency() 获取<p>在线依赖安装</p>
 * @method void setInstallDependency(string $InstallDependency) 设置<p>在线依赖安装</p>
 * @method string getPublish() 获取<p>在更新时是否同步发布新版本，默认为：FALSE，不发布 示例值：FALSE</p>
 * @method void setPublish(string $Publish) 设置<p>在更新时是否同步发布新版本，默认为：FALSE，不发布 示例值：FALSE</p>
 * @method CodeReq getCode() 获取<p>包含函数代码文件的zip格式文件</p>
 * @method void setCode(CodeReq $Code) 设置<p>包含函数代码文件的zip格式文件</p>
 * @method string getCodeSource() 获取<p>代码来源方式，支持 ZipFile, Cos, Inline 之一 示例值：Cos</p>
 * @method void setCodeSource(string $CodeSource) 设置<p>代码来源方式，支持 ZipFile, Cos, Inline 之一 示例值：Cos</p>
 */
class UpdateFunctionCodeRequest extends AbstractModel
{
    /**
     * @var string <p>创建的函数名称</p>
     */
    public $FunctionName;

    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>函数处理方法名称</p>
     */
    public $Handler;

    /**
     * @var string <p>函数所属命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>在线依赖安装</p>
     */
    public $InstallDependency;

    /**
     * @var string <p>在更新时是否同步发布新版本，默认为：FALSE，不发布 示例值：FALSE</p>
     */
    public $Publish;

    /**
     * @var CodeReq <p>包含函数代码文件的zip格式文件</p>
     */
    public $Code;

    /**
     * @var string <p>代码来源方式，支持 ZipFile, Cos, Inline 之一 示例值：Cos</p>
     */
    public $CodeSource;

    /**
     * @param string $FunctionName <p>创建的函数名称</p>
     * @param string $EnvId <p>环境ID</p>
     * @param string $Handler <p>函数处理方法名称</p>
     * @param string $Namespace <p>函数所属命名空间</p>
     * @param string $InstallDependency <p>在线依赖安装</p>
     * @param string $Publish <p>在更新时是否同步发布新版本，默认为：FALSE，不发布 示例值：FALSE</p>
     * @param CodeReq $Code <p>包含函数代码文件的zip格式文件</p>
     * @param string $CodeSource <p>代码来源方式，支持 ZipFile, Cos, Inline 之一 示例值：Cos</p>
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

        if (array_key_exists("Handler",$param) and $param["Handler"] !== null) {
            $this->Handler = $param["Handler"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("InstallDependency",$param) and $param["InstallDependency"] !== null) {
            $this->InstallDependency = $param["InstallDependency"];
        }

        if (array_key_exists("Publish",$param) and $param["Publish"] !== null) {
            $this->Publish = $param["Publish"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = new CodeReq();
            $this->Code->deserialize($param["Code"]);
        }

        if (array_key_exists("CodeSource",$param) and $param["CodeSource"] !== null) {
            $this->CodeSource = $param["CodeSource"];
        }
    }
}
