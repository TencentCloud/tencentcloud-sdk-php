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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTKEEdgeScript请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getInterface() 获取网卡名
 * @method void setInterface(string $Interface) 设置网卡名
 * @method string getNodeName() 获取节点名字
 * @method void setNodeName(string $NodeName) 设置节点名字
 * @method string getConfig() 获取json格式的节点配置
 * @method void setConfig(string $Config) 设置json格式的节点配置
 * @method string getScriptVersion() 获取可以下载某个历史版本的edgectl脚本，默认下载最新版本，edgectl版本信息可以在脚本里查看
 * @method void setScriptVersion(string $ScriptVersion) 设置可以下载某个历史版本的edgectl脚本，默认下载最新版本，edgectl版本信息可以在脚本里查看
 */
class DescribeTKEEdgeScriptRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 网卡名
     */
    public $Interface;

    /**
     * @var string 节点名字
     */
    public $NodeName;

    /**
     * @var string json格式的节点配置
     */
    public $Config;

    /**
     * @var string 可以下载某个历史版本的edgectl脚本，默认下载最新版本，edgectl版本信息可以在脚本里查看
     */
    public $ScriptVersion;

    /**
     * @param string $ClusterId 集群id
     * @param string $Interface 网卡名
     * @param string $NodeName 节点名字
     * @param string $Config json格式的节点配置
     * @param string $ScriptVersion 可以下载某个历史版本的edgectl脚本，默认下载最新版本，edgectl版本信息可以在脚本里查看
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Interface",$param) and $param["Interface"] !== null) {
            $this->Interface = $param["Interface"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("ScriptVersion",$param) and $param["ScriptVersion"] !== null) {
            $this->ScriptVersion = $param["ScriptVersion"];
        }
    }
}
