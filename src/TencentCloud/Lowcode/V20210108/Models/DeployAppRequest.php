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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeployApp请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getId() 获取应用id
 * @method void setId(string $Id) 设置应用id
 * @method string getMode() 获取发布体验preview/正式upload
 * @method void setMode(string $Mode) 设置发布体验preview/正式upload
 * @method string getBuildType() 获取构建类型：mp、pc、web、adminPortal
 * @method void setBuildType(string $BuildType) 设置构建类型：mp、pc、web、adminPortal
 * @method array getSubAppIds() 获取子包数组
 * @method void setSubAppIds(array $SubAppIds) 设置子包数组
 */
class DeployAppRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 应用id
     */
    public $Id;

    /**
     * @var string 发布体验preview/正式upload
     */
    public $Mode;

    /**
     * @var string 构建类型：mp、pc、web、adminPortal
     */
    public $BuildType;

    /**
     * @var array 子包数组
     */
    public $SubAppIds;

    /**
     * @param string $EnvId 环境ID
     * @param string $Id 应用id
     * @param string $Mode 发布体验preview/正式upload
     * @param string $BuildType 构建类型：mp、pc、web、adminPortal
     * @param array $SubAppIds 子包数组
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("BuildType",$param) and $param["BuildType"] !== null) {
            $this->BuildType = $param["BuildType"];
        }

        if (array_key_exists("SubAppIds",$param) and $param["SubAppIds"] !== null) {
            $this->SubAppIds = $param["SubAppIds"];
        }
    }
}
