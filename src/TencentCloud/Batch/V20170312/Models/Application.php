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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用程序信息
 *
 * @method string getDeliveryForm() 获取应用程序的交付方式，包括PACKAGE、LOCAL 两种取值，分别指远程存储的软件包、计算环境本地。
 * @method void setDeliveryForm(string $DeliveryForm) 设置应用程序的交付方式，包括PACKAGE、LOCAL 两种取值，分别指远程存储的软件包、计算环境本地。
 * @method string getCommand() 获取松耦合任务执行命令。与Commands不能同时指定，一般使用Command字段提交任务。
 * @method void setCommand(string $Command) 设置松耦合任务执行命令。与Commands不能同时指定，一般使用Command字段提交任务。
 * @method string getPackagePath() 获取应用程序软件包的远程存储路径
 * @method void setPackagePath(string $PackagePath) 设置应用程序软件包的远程存储路径
 * @method Docker getDocker() 获取应用使用Docker的相关配置。在使用Docker配置的情况下，DeliveryForm 为 LOCAL 表示直接使用Docker镜像内部的应用软件，通过Docker方式运行；DeliveryForm 为 PACKAGE，表示将远程应用包注入到Docker镜像后，通过Docker方式运行。为避免Docker不同版本的兼容性问题，Docker安装包及相关依赖由Batch统一负责，对于已安装Docker的自定义镜像，请卸载后再使用Docker特性。
 * @method void setDocker(Docker $Docker) 设置应用使用Docker的相关配置。在使用Docker配置的情况下，DeliveryForm 为 LOCAL 表示直接使用Docker镜像内部的应用软件，通过Docker方式运行；DeliveryForm 为 PACKAGE，表示将远程应用包注入到Docker镜像后，通过Docker方式运行。为避免Docker不同版本的兼容性问题，Docker安装包及相关依赖由Batch统一负责，对于已安装Docker的自定义镜像，请卸载后再使用Docker特性。
 * @method array getCommands() 获取紧耦合任务执行命令信息。与Command不能同时指定。Command和Commands必须指定一个。
 * @method void setCommands(array $Commands) 设置紧耦合任务执行命令信息。与Command不能同时指定。Command和Commands必须指定一个。
 */
class Application extends AbstractModel
{
    /**
     * @var string 应用程序的交付方式，包括PACKAGE、LOCAL 两种取值，分别指远程存储的软件包、计算环境本地。
     */
    public $DeliveryForm;

    /**
     * @var string 松耦合任务执行命令。与Commands不能同时指定，一般使用Command字段提交任务。
     */
    public $Command;

    /**
     * @var string 应用程序软件包的远程存储路径
     */
    public $PackagePath;

    /**
     * @var Docker 应用使用Docker的相关配置。在使用Docker配置的情况下，DeliveryForm 为 LOCAL 表示直接使用Docker镜像内部的应用软件，通过Docker方式运行；DeliveryForm 为 PACKAGE，表示将远程应用包注入到Docker镜像后，通过Docker方式运行。为避免Docker不同版本的兼容性问题，Docker安装包及相关依赖由Batch统一负责，对于已安装Docker的自定义镜像，请卸载后再使用Docker特性。
     */
    public $Docker;

    /**
     * @var array 紧耦合任务执行命令信息。与Command不能同时指定。Command和Commands必须指定一个。
     */
    public $Commands;

    /**
     * @param string $DeliveryForm 应用程序的交付方式，包括PACKAGE、LOCAL 两种取值，分别指远程存储的软件包、计算环境本地。
     * @param string $Command 松耦合任务执行命令。与Commands不能同时指定，一般使用Command字段提交任务。
     * @param string $PackagePath 应用程序软件包的远程存储路径
     * @param Docker $Docker 应用使用Docker的相关配置。在使用Docker配置的情况下，DeliveryForm 为 LOCAL 表示直接使用Docker镜像内部的应用软件，通过Docker方式运行；DeliveryForm 为 PACKAGE，表示将远程应用包注入到Docker镜像后，通过Docker方式运行。为避免Docker不同版本的兼容性问题，Docker安装包及相关依赖由Batch统一负责，对于已安装Docker的自定义镜像，请卸载后再使用Docker特性。
     * @param array $Commands 紧耦合任务执行命令信息。与Command不能同时指定。Command和Commands必须指定一个。
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
        if (array_key_exists("DeliveryForm",$param) and $param["DeliveryForm"] !== null) {
            $this->DeliveryForm = $param["DeliveryForm"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("PackagePath",$param) and $param["PackagePath"] !== null) {
            $this->PackagePath = $param["PackagePath"];
        }

        if (array_key_exists("Docker",$param) and $param["Docker"] !== null) {
            $this->Docker = new Docker();
            $this->Docker->deserialize($param["Docker"]);
        }

        if (array_key_exists("Commands",$param) and $param["Commands"] !== null) {
            $this->Commands = [];
            foreach ($param["Commands"] as $key => $value){
                $obj = new CommandLine();
                $obj->deserialize($value);
                array_push($this->Commands, $obj);
            }
        }
    }
}
