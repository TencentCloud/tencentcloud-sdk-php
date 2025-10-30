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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务的应用环境配置信息。
 *
 * @method array getCommands() 获取待执行脚本命令。
 * @method void setCommands(array $Commands) 设置待执行脚本命令。
 * @method array getStorageMounts() 获取存储目录挂载配置。
 * @method void setStorageMounts(array $StorageMounts) 设置存储目录挂载配置。
 * @method array getEnvVars() 获取用户自定义环境变量。
 * @method void setEnvVars(array $EnvVars) 设置用户自定义环境变量。
 * @method Docker getDocker() 获取容器配置信息。
 * @method void setDocker(Docker $Docker) 设置容器配置信息。
 * @method OutputRedirect getOutputRedirect() 获取无
 * @method void setOutputRedirect(OutputRedirect $OutputRedirect) 设置无
 * @method string getJobType() 获取表示所选训练框架，支持可选参数
 
- PyTorch：表示提交PyTorch训练作业
- Custom：表示用户自定义作业

默认参数为：Custom
 * @method void setJobType(string $JobType) 设置表示所选训练框架，支持可选参数
 
- PyTorch：表示提交PyTorch训练作业
- Custom：表示用户自定义作业

默认参数为：Custom
 */
class Application extends AbstractModel
{
    /**
     * @var array 待执行脚本命令。
     */
    public $Commands;

    /**
     * @var array 存储目录挂载配置。
     */
    public $StorageMounts;

    /**
     * @var array 用户自定义环境变量。
     */
    public $EnvVars;

    /**
     * @var Docker 容器配置信息。
     */
    public $Docker;

    /**
     * @var OutputRedirect 无
     */
    public $OutputRedirect;

    /**
     * @var string 表示所选训练框架，支持可选参数
 
- PyTorch：表示提交PyTorch训练作业
- Custom：表示用户自定义作业

默认参数为：Custom
     */
    public $JobType;

    /**
     * @param array $Commands 待执行脚本命令。
     * @param array $StorageMounts 存储目录挂载配置。
     * @param array $EnvVars 用户自定义环境变量。
     * @param Docker $Docker 容器配置信息。
     * @param OutputRedirect $OutputRedirect 无
     * @param string $JobType 表示所选训练框架，支持可选参数
 
- PyTorch：表示提交PyTorch训练作业
- Custom：表示用户自定义作业

默认参数为：Custom
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
        if (array_key_exists("Commands",$param) and $param["Commands"] !== null) {
            $this->Commands = [];
            foreach ($param["Commands"] as $key => $value){
                $obj = new CommandItem();
                $obj->deserialize($value);
                array_push($this->Commands, $obj);
            }
        }

        if (array_key_exists("StorageMounts",$param) and $param["StorageMounts"] !== null) {
            $this->StorageMounts = [];
            foreach ($param["StorageMounts"] as $key => $value){
                $obj = new StorageMount();
                $obj->deserialize($value);
                array_push($this->StorageMounts, $obj);
            }
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("Docker",$param) and $param["Docker"] !== null) {
            $this->Docker = new Docker();
            $this->Docker->deserialize($param["Docker"]);
        }

        if (array_key_exists("OutputRedirect",$param) and $param["OutputRedirect"] !== null) {
            $this->OutputRedirect = new OutputRedirect();
            $this->OutputRedirect->deserialize($param["OutputRedirect"]);
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }
    }
}
