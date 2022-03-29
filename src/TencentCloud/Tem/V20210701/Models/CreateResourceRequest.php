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
 * CreateResource请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境 Id
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境 Id
 * @method string getResourceType() 获取资源类型，目前支持文件系统：CFS；日志服务：CLS；注册中心：TSE_SRE
 * @method void setResourceType(string $ResourceType) 设置资源类型，目前支持文件系统：CFS；日志服务：CLS；注册中心：TSE_SRE
 * @method string getResourceId() 获取资源 Id
 * @method void setResourceId(string $ResourceId) 设置资源 Id
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method string getResourceFrom() 获取资源来源，目前支持：existing，已有资源；creating，自动创建
 * @method void setResourceFrom(string $ResourceFrom) 设置资源来源，目前支持：existing，已有资源；creating，自动创建
 * @method string getResourceConfig() 获取设置 resource 的额外配置
 * @method void setResourceConfig(string $ResourceConfig) 设置设置 resource 的额外配置
 */
class CreateResourceRequest extends AbstractModel
{
    /**
     * @var string 环境 Id
     */
    public $EnvironmentId;

    /**
     * @var string 资源类型，目前支持文件系统：CFS；日志服务：CLS；注册中心：TSE_SRE
     */
    public $ResourceType;

    /**
     * @var string 资源 Id
     */
    public $ResourceId;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var string 资源来源，目前支持：existing，已有资源；creating，自动创建
     */
    public $ResourceFrom;

    /**
     * @var string 设置 resource 的额外配置
     */
    public $ResourceConfig;

    /**
     * @param string $EnvironmentId 环境 Id
     * @param string $ResourceType 资源类型，目前支持文件系统：CFS；日志服务：CLS；注册中心：TSE_SRE
     * @param string $ResourceId 资源 Id
     * @param integer $SourceChannel 来源渠道
     * @param string $ResourceFrom 资源来源，目前支持：existing，已有资源；creating，自动创建
     * @param string $ResourceConfig 设置 resource 的额外配置
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("ResourceFrom",$param) and $param["ResourceFrom"] !== null) {
            $this->ResourceFrom = $param["ResourceFrom"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
        }
    }
}
