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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务容器配置的修改参数。
 *
 * @method string getImageType() 获取镜像类型。取值有：<li>TCR：腾讯云容器镜像服务的镜像。</li>
 * @method void setImageType(string $ImageType) 设置镜像类型。取值有：<li>TCR：腾讯云容器镜像服务的镜像。</li>
 * @method InferenceTCRRepositoryConfig getTcrRepositoryConfig() 获取TCR 镜像仓库信息。当 ImageType 为 TCR 时必填。
 * @method void setTcrRepositoryConfig(InferenceTCRRepositoryConfig $TcrRepositoryConfig) 设置TCR 镜像仓库信息。当 ImageType 为 TCR 时必填。
 * @method string getStartupCommand() 获取容器启动时执行的命令，未填写时默认使用镜像的 Entrypoint/CMD。最长支持 1024 字符。
 * @method void setStartupCommand(string $StartupCommand) 设置容器启动时执行的命令，未填写时默认使用镜像的 Entrypoint/CMD。最长支持 1024 字符。
 * @method array getEnvironmentVariables() 获取容器运行时的环境变量。最多支持 10 个变量。
 * @method void setEnvironmentVariables(array $EnvironmentVariables) 设置容器运行时的环境变量。最多支持 10 个变量。
 */
class InferenceContainerConfigForModify extends AbstractModel
{
    /**
     * @var string 镜像类型。取值有：<li>TCR：腾讯云容器镜像服务的镜像。</li>
     */
    public $ImageType;

    /**
     * @var InferenceTCRRepositoryConfig TCR 镜像仓库信息。当 ImageType 为 TCR 时必填。
     */
    public $TcrRepositoryConfig;

    /**
     * @var string 容器启动时执行的命令，未填写时默认使用镜像的 Entrypoint/CMD。最长支持 1024 字符。
     */
    public $StartupCommand;

    /**
     * @var array 容器运行时的环境变量。最多支持 10 个变量。
     */
    public $EnvironmentVariables;

    /**
     * @param string $ImageType 镜像类型。取值有：<li>TCR：腾讯云容器镜像服务的镜像。</li>
     * @param InferenceTCRRepositoryConfig $TcrRepositoryConfig TCR 镜像仓库信息。当 ImageType 为 TCR 时必填。
     * @param string $StartupCommand 容器启动时执行的命令，未填写时默认使用镜像的 Entrypoint/CMD。最长支持 1024 字符。
     * @param array $EnvironmentVariables 容器运行时的环境变量。最多支持 10 个变量。
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
        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("TcrRepositoryConfig",$param) and $param["TcrRepositoryConfig"] !== null) {
            $this->TcrRepositoryConfig = new InferenceTCRRepositoryConfig();
            $this->TcrRepositoryConfig->deserialize($param["TcrRepositoryConfig"]);
        }

        if (array_key_exists("StartupCommand",$param) and $param["StartupCommand"] !== null) {
            $this->StartupCommand = $param["StartupCommand"];
        }

        if (array_key_exists("EnvironmentVariables",$param) and $param["EnvironmentVariables"] !== null) {
            $this->EnvironmentVariables = [];
            foreach ($param["EnvironmentVariables"] as $key => $value){
                $obj = new InferenceEnvironmentVariable();
                $obj->deserialize($value);
                array_push($this->EnvironmentVariables, $obj);
            }
        }
    }
}
