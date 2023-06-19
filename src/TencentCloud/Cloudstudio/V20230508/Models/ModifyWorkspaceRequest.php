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
namespace TencentCloud\Cloudstudio\V20230508\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWorkspace请求参数结构体
 *
 * @method string getSpaceKey() 获取工作空间 SpaceKey. 更新该工作空间的属性
 * @method void setSpaceKey(string $SpaceKey) 设置工作空间 SpaceKey. 更新该工作空间的属性
 * @method string getName() 获取工作空间名称
 * @method void setName(string $Name) 设置工作空间名称
 * @method string getDescription() 获取工作空间描述
 * @method void setDescription(string $Description) 设置工作空间描述
 * @method string getSpecs() 获取工作空间规格。STANDARD: 2C4G, CALCULATION: 4C8G, PROFESSION: 8C16G. 默认是 STANDARD。
 * @method void setSpecs(string $Specs) 设置工作空间规格。STANDARD: 2C4G, CALCULATION: 4C8G, PROFESSION: 8C16G. 默认是 STANDARD。
 * @method array getEnvs() 获取环境变量. 会被注入到工作空间中
 * @method void setEnvs(array $Envs) 设置环境变量. 会被注入到工作空间中
 * @method array getExtensions() 获取预装插件. 工作空间启动时, 会自动安装这些插件 
 * @method void setExtensions(array $Extensions) 设置预装插件. 工作空间启动时, 会自动安装这些插件 
 * @method LifeCycle getLifecycle() 获取工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令. 
 * @method void setLifecycle(LifeCycle $Lifecycle) 设置工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令. 
 */
class ModifyWorkspaceRequest extends AbstractModel
{
    /**
     * @var string 工作空间 SpaceKey. 更新该工作空间的属性
     */
    public $SpaceKey;

    /**
     * @var string 工作空间名称
     */
    public $Name;

    /**
     * @var string 工作空间描述
     */
    public $Description;

    /**
     * @var string 工作空间规格。STANDARD: 2C4G, CALCULATION: 4C8G, PROFESSION: 8C16G. 默认是 STANDARD。
     */
    public $Specs;

    /**
     * @var array 环境变量. 会被注入到工作空间中
     */
    public $Envs;

    /**
     * @var array 预装插件. 工作空间启动时, 会自动安装这些插件 
     */
    public $Extensions;

    /**
     * @var LifeCycle 工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令. 
     */
    public $Lifecycle;

    /**
     * @param string $SpaceKey 工作空间 SpaceKey. 更新该工作空间的属性
     * @param string $Name 工作空间名称
     * @param string $Description 工作空间描述
     * @param string $Specs 工作空间规格。STANDARD: 2C4G, CALCULATION: 4C8G, PROFESSION: 8C16G. 默认是 STANDARD。
     * @param array $Envs 环境变量. 会被注入到工作空间中
     * @param array $Extensions 预装插件. 工作空间启动时, 会自动安装这些插件 
     * @param LifeCycle $Lifecycle 工作空间生命周期钩子.  分为三个阶段 init, start, destroy. 分别表示工作空间数据初始化阶段, 工作空间启动阶段, 工作空间关闭阶段.  用户可以自定义 shell 命令. 
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
        if (array_key_exists("SpaceKey",$param) and $param["SpaceKey"] !== null) {
            $this->SpaceKey = $param["SpaceKey"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Specs",$param) and $param["Specs"] !== null) {
            $this->Specs = $param["Specs"];
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new Env();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("Extensions",$param) and $param["Extensions"] !== null) {
            $this->Extensions = $param["Extensions"];
        }

        if (array_key_exists("Lifecycle",$param) and $param["Lifecycle"] !== null) {
            $this->Lifecycle = new LifeCycle();
            $this->Lifecycle->deserialize($param["Lifecycle"]);
        }
    }
}
