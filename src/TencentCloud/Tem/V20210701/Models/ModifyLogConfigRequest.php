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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLogConfig请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境 ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境 ID
 * @method string getName() 获取配置名
 * @method void setName(string $Name) 设置配置名
 * @method LogConfig getData() 获取日志收集配置信息
 * @method void setData(LogConfig $Data) 设置日志收集配置信息
 * @method string getApplicationId() 获取应用 ID
 * @method void setApplicationId(string $ApplicationId) 设置应用 ID
 */
class ModifyLogConfigRequest extends AbstractModel
{
    /**
     * @var string 环境 ID
     */
    public $EnvironmentId;

    /**
     * @var string 配置名
     */
    public $Name;

    /**
     * @var LogConfig 日志收集配置信息
     */
    public $Data;

    /**
     * @var string 应用 ID
     */
    public $ApplicationId;

    /**
     * @param string $EnvironmentId 环境 ID
     * @param string $Name 配置名
     * @param LogConfig $Data 日志收集配置信息
     * @param string $ApplicationId 应用 ID
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new LogConfig();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
