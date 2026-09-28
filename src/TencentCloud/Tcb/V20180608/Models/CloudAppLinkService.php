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
 * 云应用关联服务
 *
 * @method string getServiceType() 获取<p>服务类型</p><p>枚举值：</p><ul><li>http-function： HTTP 云函数</li><li>function： 普通云函数</li><li>static-hosting： 静态托管</li></ul>
 * @method void setServiceType(string $ServiceType) 设置<p>服务类型</p><p>枚举值：</p><ul><li>http-function： HTTP 云函数</li><li>function： 普通云函数</li><li>static-hosting： 静态托管</li></ul>
 * @method string getServiceName() 获取<p>服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名称</p>
 * @method string getIdentifier() 获取<p>服务身份</p>
 * @method void setIdentifier(string $Identifier) 设置<p>服务身份</p>
 * @method string getAction() 获取<p>服务动作</p>
 * @method void setAction(string $Action) 设置<p>服务动作</p>
 * @method BuildCommands getCommand() 获取<p>服务构建命令</p>
 * @method void setCommand(BuildCommands $Command) 设置<p>服务构建命令</p>
 * @method BuildContext getBuildContext() 获取<p>服务构建部署上下文</p>
 * @method void setBuildContext(BuildContext $BuildContext) 设置<p>服务构建部署上下文</p>
 */
class CloudAppLinkService extends AbstractModel
{
    /**
     * @var string <p>服务类型</p><p>枚举值：</p><ul><li>http-function： HTTP 云函数</li><li>function： 普通云函数</li><li>static-hosting： 静态托管</li></ul>
     */
    public $ServiceType;

    /**
     * @var string <p>服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>服务身份</p>
     */
    public $Identifier;

    /**
     * @var string <p>服务动作</p>
     */
    public $Action;

    /**
     * @var BuildCommands <p>服务构建命令</p>
     */
    public $Command;

    /**
     * @var BuildContext <p>服务构建部署上下文</p>
     */
    public $BuildContext;

    /**
     * @param string $ServiceType <p>服务类型</p><p>枚举值：</p><ul><li>http-function： HTTP 云函数</li><li>function： 普通云函数</li><li>static-hosting： 静态托管</li></ul>
     * @param string $ServiceName <p>服务名称</p>
     * @param string $Identifier <p>服务身份</p>
     * @param string $Action <p>服务动作</p>
     * @param BuildCommands $Command <p>服务构建命令</p>
     * @param BuildContext $BuildContext <p>服务构建部署上下文</p>
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = new BuildCommands();
            $this->Command->deserialize($param["Command"]);
        }

        if (array_key_exists("BuildContext",$param) and $param["BuildContext"] !== null) {
            $this->BuildContext = new BuildContext();
            $this->BuildContext->deserialize($param["BuildContext"]);
        }
    }
}
