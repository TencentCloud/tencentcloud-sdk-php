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
 * 推理服务信息。
 *
 * @method string getServiceId() 获取推理服务 ID。
 * @method void setServiceId(string $ServiceId) 设置推理服务 ID。
 * @method string getName() 获取推理服务的名称。
 * @method void setName(string $Name) 设置推理服务的名称。
 * @method string getDescription() 获取描述信息。
 * @method void setDescription(string $Description) 设置描述信息。
 * @method integer getListenPort() 获取模型服务需要监听的端口。仅支持 1-65535 之间的整数。
 * @method void setListenPort(integer $ListenPort) 设置模型服务需要监听的端口。仅支持 1-65535 之间的整数。
 * @method array getRequestPaths() 获取推理服务的请求路径列表。最多支持 20 个路径。
 * @method void setRequestPaths(array $RequestPaths) 设置推理服务的请求路径列表。最多支持 20 个路径。
 * @method array getContainers() 获取推理服务的容器配置。
 * @method void setContainers(array $Containers) 设置推理服务的容器配置。
 * @method InferenceResourceConfig getResourceConfig() 获取推理服务的资源配置。
 * @method void setResourceConfig(InferenceResourceConfig $ResourceConfig) 设置推理服务的资源配置。
 * @method string getStatus() 获取推理服务状态，包含以下几种状态：<li>Deploying：部署中；</li><li>Running：运行中；</li><li>Stopping：停止中；</li><li>Stopped：已停止；</li><li>Exception：异常；</li><li>Banned：被封禁。</li>
 * @method void setStatus(string $Status) 设置推理服务状态，包含以下几种状态：<li>Deploying：部署中；</li><li>Running：运行中；</li><li>Stopping：停止中；</li><li>Stopped：已停止；</li><li>Exception：异常；</li><li>Banned：被封禁。</li>
 * @method string getScalingStatus() 获取伸缩状态。取值有：<li>Normal：稳定运行，无进行中的伸缩操作；</li><li>ScalingOut：扩容中；</li><li>ScalingIn：缩容中。</li>
 * @method void setScalingStatus(string $ScalingStatus) 设置伸缩状态。取值有：<li>Normal：稳定运行，无进行中的伸缩操作；</li><li>ScalingOut：扩容中；</li><li>ScalingIn：缩容中。</li>
 * @method integer getCurrentInstanceCount() 获取当前运行中的实例数量。
 * @method void setCurrentInstanceCount(integer $CurrentInstanceCount) 设置当前运行中的实例数量。
 * @method string getInferenceURL() 获取推理访问地址，可通过链接访问底层模型进行推理。
 * @method void setInferenceURL(string $InferenceURL) 设置推理访问地址，可通过链接访问底层模型进行推理。
 * @method string getCreateTime() 获取创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getUpdateTime() 获取最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setUpdateTime(string $UpdateTime) 设置最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class InferenceService extends AbstractModel
{
    /**
     * @var string 推理服务 ID。
     */
    public $ServiceId;

    /**
     * @var string 推理服务的名称。
     */
    public $Name;

    /**
     * @var string 描述信息。
     */
    public $Description;

    /**
     * @var integer 模型服务需要监听的端口。仅支持 1-65535 之间的整数。
     */
    public $ListenPort;

    /**
     * @var array 推理服务的请求路径列表。最多支持 20 个路径。
     */
    public $RequestPaths;

    /**
     * @var array 推理服务的容器配置。
     */
    public $Containers;

    /**
     * @var InferenceResourceConfig 推理服务的资源配置。
     */
    public $ResourceConfig;

    /**
     * @var string 推理服务状态，包含以下几种状态：<li>Deploying：部署中；</li><li>Running：运行中；</li><li>Stopping：停止中；</li><li>Stopped：已停止；</li><li>Exception：异常；</li><li>Banned：被封禁。</li>
     */
    public $Status;

    /**
     * @var string 伸缩状态。取值有：<li>Normal：稳定运行，无进行中的伸缩操作；</li><li>ScalingOut：扩容中；</li><li>ScalingIn：缩容中。</li>
     */
    public $ScalingStatus;

    /**
     * @var integer 当前运行中的实例数量。
     */
    public $CurrentInstanceCount;

    /**
     * @var string 推理访问地址，可通过链接访问底层模型进行推理。
     */
    public $InferenceURL;

    /**
     * @var string 创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $UpdateTime;

    /**
     * @param string $ServiceId 推理服务 ID。
     * @param string $Name 推理服务的名称。
     * @param string $Description 描述信息。
     * @param integer $ListenPort 模型服务需要监听的端口。仅支持 1-65535 之间的整数。
     * @param array $RequestPaths 推理服务的请求路径列表。最多支持 20 个路径。
     * @param array $Containers 推理服务的容器配置。
     * @param InferenceResourceConfig $ResourceConfig 推理服务的资源配置。
     * @param string $Status 推理服务状态，包含以下几种状态：<li>Deploying：部署中；</li><li>Running：运行中；</li><li>Stopping：停止中；</li><li>Stopped：已停止；</li><li>Exception：异常；</li><li>Banned：被封禁。</li>
     * @param string $ScalingStatus 伸缩状态。取值有：<li>Normal：稳定运行，无进行中的伸缩操作；</li><li>ScalingOut：扩容中；</li><li>ScalingIn：缩容中。</li>
     * @param integer $CurrentInstanceCount 当前运行中的实例数量。
     * @param string $InferenceURL 推理访问地址，可通过链接访问底层模型进行推理。
     * @param string $CreateTime 创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $UpdateTime 最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ListenPort",$param) and $param["ListenPort"] !== null) {
            $this->ListenPort = $param["ListenPort"];
        }

        if (array_key_exists("RequestPaths",$param) and $param["RequestPaths"] !== null) {
            $this->RequestPaths = $param["RequestPaths"];
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new InferenceContainerConfig();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new InferenceResourceConfig();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScalingStatus",$param) and $param["ScalingStatus"] !== null) {
            $this->ScalingStatus = $param["ScalingStatus"];
        }

        if (array_key_exists("CurrentInstanceCount",$param) and $param["CurrentInstanceCount"] !== null) {
            $this->CurrentInstanceCount = $param["CurrentInstanceCount"];
        }

        if (array_key_exists("InferenceURL",$param) and $param["InferenceURL"] !== null) {
            $this->InferenceURL = $param["InferenceURL"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
