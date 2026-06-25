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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LLM 模型 API
 *
 * @method string getId() 获取<p>模型 API ID。</p>
 * @method void setId(string $Id) 设置<p>模型 API ID。</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method string getName() 获取<p>AI 网关 LLM 模型 API 的唯一标识名称，格式规则：2-50 字符，支持英文、数字、下划线。</p>
 * @method void setName(string $Name) 设置<p>AI 网关 LLM 模型 API 的唯一标识名称，格式规则：2-50 字符，支持英文、数字、下划线。</p>
 * @method string getSceneType() 获取<p>选择业务场景,xa0 选项：Chat（聊天）。</p>
 * @method void setSceneType(string $SceneType) 设置<p>选择业务场景,xa0 选项：Chat（聊天）。</p>
 * @method string getRequestProtocol() 获取<p>业务场景对应的请求协议，选项：OpenAI（目前只支持 OpenAI）。</p>
 * @method void setRequestProtocol(string $RequestProtocol) 设置<p>业务场景对应的请求协议，选项：OpenAI（目前只支持 OpenAI）。</p>
 * @method array getRouteList() 获取<p>路由列表</p>
 * @method void setRouteList(array $RouteList) 设置<p>路由列表</p>
 * @method string getBasePath() 获取<p>为API设置统一的前缀，格式：以/开头，支持字母、数字、短横线。</p>
 * @method void setBasePath(string $BasePath) 设置<p>为API设置统一的前缀，格式：以/开头，支持字母、数字、短横线。</p>
 * @method boolean getStripPath() 获取<p>路径简化，<br>启用时：客户端请求路径 → 移除Base Path → 后端接收简洁路径<br>禁用时：客户端请求路径 → 完整传递给后端。</p>
 * @method void setStripPath(boolean $StripPath) 设置<p>路径简化，<br>启用时：客户端请求路径 → 移除Base Path → 后端接收简洁路径<br>禁用时：客户端请求路径 → 完整传递给后端。</p>
 * @method string getDescription() 获取<p>模型 API 的相关描述。</p>
 * @method void setDescription(string $Description) 设置<p>模型 API 的相关描述。</p>
 * @method string getModelServiceId() 获取<p>模型服务Id</p>
 * @method void setModelServiceId(string $ModelServiceId) 设置<p>模型服务Id</p>
 * @method string getModelServiceName() 获取<p>模型服务名称</p>
 * @method void setModelServiceName(string $ModelServiceName) 设置<p>模型服务名称</p>
 * @method CloudNativeAPIGatewayLLMModelServiceRoute getModelServiceRoute() 获取<p>模型服务路由策略（是指如何路由到模型服务）</p>
 * @method void setModelServiceRoute(CloudNativeAPIGatewayLLMModelServiceRoute $ModelServiceRoute) 设置<p>模型服务路由策略（是指如何路由到模型服务）</p>
 * @method array getMatchHeaders() 获取<p>无</p>
 * @method void setMatchHeaders(array $MatchHeaders) 设置<p>无</p>
 * @method boolean getEnableCrossServiceFallback() 获取<p>是否开启跨服务fallback</p>
 * @method void setEnableCrossServiceFallback(boolean $EnableCrossServiceFallback) 设置<p>是否开启跨服务fallback</p>
 * @method AIGWCrossServiceFallbackConfig getCrossServiceFallbackConfig() 获取<p>跨服务fallback配置详情</p>
 * @method void setCrossServiceFallbackConfig(AIGWCrossServiceFallbackConfig $CrossServiceFallbackConfig) 设置<p>跨服务fallback配置详情</p>
 * @method boolean getDescribeCloudNativeAPIGatewayLLMModelAPI() 获取<p>是否展示模型API</p>
 * @method void setDescribeCloudNativeAPIGatewayLLMModelAPI(boolean $DescribeCloudNativeAPIGatewayLLMModelAPI) 设置<p>是否展示模型API</p>
 * @method AIGWTagFilter getTagFilter() 获取<p>标签</p>
 * @method void setTagFilter(AIGWTagFilter $TagFilter) 设置<p>标签</p>
 * @method AIGWLogConfig getLogConfig() 获取<p>日志显示相关开关</p>
 * @method void setLogConfig(AIGWLogConfig $LogConfig) 设置<p>日志显示相关开关</p>
 * @method AIGWLogDesensitizeConfig getLogDesensitizeConfig() 获取<p>日志脱敏规则</p>
 * @method void setLogDesensitizeConfig(AIGWLogDesensitizeConfig $LogDesensitizeConfig) 设置<p>日志脱敏规则</p>
 * @method AIGWForwardDesensitizeConfig getForwardDesensitizeConfig() 获取<p>转发脱敏规则</p>
 * @method void setForwardDesensitizeConfig(AIGWForwardDesensitizeConfig $ForwardDesensitizeConfig) 设置<p>转发脱敏规则</p>
 */
class CloudNativeAPIGatewayLLMModelAPI extends AbstractModel
{
    /**
     * @var string <p>模型 API ID。</p>
     */
    public $Id;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>AI 网关 LLM 模型 API 的唯一标识名称，格式规则：2-50 字符，支持英文、数字、下划线。</p>
     */
    public $Name;

    /**
     * @var string <p>选择业务场景,xa0 选项：Chat（聊天）。</p>
     */
    public $SceneType;

    /**
     * @var string <p>业务场景对应的请求协议，选项：OpenAI（目前只支持 OpenAI）。</p>
     */
    public $RequestProtocol;

    /**
     * @var array <p>路由列表</p>
     */
    public $RouteList;

    /**
     * @var string <p>为API设置统一的前缀，格式：以/开头，支持字母、数字、短横线。</p>
     */
    public $BasePath;

    /**
     * @var boolean <p>路径简化，<br>启用时：客户端请求路径 → 移除Base Path → 后端接收简洁路径<br>禁用时：客户端请求路径 → 完整传递给后端。</p>
     */
    public $StripPath;

    /**
     * @var string <p>模型 API 的相关描述。</p>
     */
    public $Description;

    /**
     * @var string <p>模型服务Id</p>
     */
    public $ModelServiceId;

    /**
     * @var string <p>模型服务名称</p>
     */
    public $ModelServiceName;

    /**
     * @var CloudNativeAPIGatewayLLMModelServiceRoute <p>模型服务路由策略（是指如何路由到模型服务）</p>
     */
    public $ModelServiceRoute;

    /**
     * @var array <p>无</p>
     */
    public $MatchHeaders;

    /**
     * @var boolean <p>是否开启跨服务fallback</p>
     */
    public $EnableCrossServiceFallback;

    /**
     * @var AIGWCrossServiceFallbackConfig <p>跨服务fallback配置详情</p>
     */
    public $CrossServiceFallbackConfig;

    /**
     * @var boolean <p>是否展示模型API</p>
     */
    public $DescribeCloudNativeAPIGatewayLLMModelAPI;

    /**
     * @var AIGWTagFilter <p>标签</p>
     */
    public $TagFilter;

    /**
     * @var AIGWLogConfig <p>日志显示相关开关</p>
     */
    public $LogConfig;

    /**
     * @var AIGWLogDesensitizeConfig <p>日志脱敏规则</p>
     */
    public $LogDesensitizeConfig;

    /**
     * @var AIGWForwardDesensitizeConfig <p>转发脱敏规则</p>
     */
    public $ForwardDesensitizeConfig;

    /**
     * @param string $Id <p>模型 API ID。</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param string $Name <p>AI 网关 LLM 模型 API 的唯一标识名称，格式规则：2-50 字符，支持英文、数字、下划线。</p>
     * @param string $SceneType <p>选择业务场景,xa0 选项：Chat（聊天）。</p>
     * @param string $RequestProtocol <p>业务场景对应的请求协议，选项：OpenAI（目前只支持 OpenAI）。</p>
     * @param array $RouteList <p>路由列表</p>
     * @param string $BasePath <p>为API设置统一的前缀，格式：以/开头，支持字母、数字、短横线。</p>
     * @param boolean $StripPath <p>路径简化，<br>启用时：客户端请求路径 → 移除Base Path → 后端接收简洁路径<br>禁用时：客户端请求路径 → 完整传递给后端。</p>
     * @param string $Description <p>模型 API 的相关描述。</p>
     * @param string $ModelServiceId <p>模型服务Id</p>
     * @param string $ModelServiceName <p>模型服务名称</p>
     * @param CloudNativeAPIGatewayLLMModelServiceRoute $ModelServiceRoute <p>模型服务路由策略（是指如何路由到模型服务）</p>
     * @param array $MatchHeaders <p>无</p>
     * @param boolean $EnableCrossServiceFallback <p>是否开启跨服务fallback</p>
     * @param AIGWCrossServiceFallbackConfig $CrossServiceFallbackConfig <p>跨服务fallback配置详情</p>
     * @param boolean $DescribeCloudNativeAPIGatewayLLMModelAPI <p>是否展示模型API</p>
     * @param AIGWTagFilter $TagFilter <p>标签</p>
     * @param AIGWLogConfig $LogConfig <p>日志显示相关开关</p>
     * @param AIGWLogDesensitizeConfig $LogDesensitizeConfig <p>日志脱敏规则</p>
     * @param AIGWForwardDesensitizeConfig $ForwardDesensitizeConfig <p>转发脱敏规则</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("RequestProtocol",$param) and $param["RequestProtocol"] !== null) {
            $this->RequestProtocol = $param["RequestProtocol"];
        }

        if (array_key_exists("RouteList",$param) and $param["RouteList"] !== null) {
            $this->RouteList = [];
            foreach ($param["RouteList"] as $key => $value){
                $obj = new DefaultKongRoute();
                $obj->deserialize($value);
                array_push($this->RouteList, $obj);
            }
        }

        if (array_key_exists("BasePath",$param) and $param["BasePath"] !== null) {
            $this->BasePath = $param["BasePath"];
        }

        if (array_key_exists("StripPath",$param) and $param["StripPath"] !== null) {
            $this->StripPath = $param["StripPath"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ModelServiceId",$param) and $param["ModelServiceId"] !== null) {
            $this->ModelServiceId = $param["ModelServiceId"];
        }

        if (array_key_exists("ModelServiceName",$param) and $param["ModelServiceName"] !== null) {
            $this->ModelServiceName = $param["ModelServiceName"];
        }

        if (array_key_exists("ModelServiceRoute",$param) and $param["ModelServiceRoute"] !== null) {
            $this->ModelServiceRoute = new CloudNativeAPIGatewayLLMModelServiceRoute();
            $this->ModelServiceRoute->deserialize($param["ModelServiceRoute"]);
        }

        if (array_key_exists("MatchHeaders",$param) and $param["MatchHeaders"] !== null) {
            $this->MatchHeaders = [];
            foreach ($param["MatchHeaders"] as $key => $value){
                $obj = new AIGWKVMatch();
                $obj->deserialize($value);
                array_push($this->MatchHeaders, $obj);
            }
        }

        if (array_key_exists("EnableCrossServiceFallback",$param) and $param["EnableCrossServiceFallback"] !== null) {
            $this->EnableCrossServiceFallback = $param["EnableCrossServiceFallback"];
        }

        if (array_key_exists("CrossServiceFallbackConfig",$param) and $param["CrossServiceFallbackConfig"] !== null) {
            $this->CrossServiceFallbackConfig = new AIGWCrossServiceFallbackConfig();
            $this->CrossServiceFallbackConfig->deserialize($param["CrossServiceFallbackConfig"]);
        }

        if (array_key_exists("DescribeCloudNativeAPIGatewayLLMModelAPI",$param) and $param["DescribeCloudNativeAPIGatewayLLMModelAPI"] !== null) {
            $this->DescribeCloudNativeAPIGatewayLLMModelAPI = $param["DescribeCloudNativeAPIGatewayLLMModelAPI"];
        }

        if (array_key_exists("TagFilter",$param) and $param["TagFilter"] !== null) {
            $this->TagFilter = new AIGWTagFilter();
            $this->TagFilter->deserialize($param["TagFilter"]);
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new AIGWLogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }

        if (array_key_exists("LogDesensitizeConfig",$param) and $param["LogDesensitizeConfig"] !== null) {
            $this->LogDesensitizeConfig = new AIGWLogDesensitizeConfig();
            $this->LogDesensitizeConfig->deserialize($param["LogDesensitizeConfig"]);
        }

        if (array_key_exists("ForwardDesensitizeConfig",$param) and $param["ForwardDesensitizeConfig"] !== null) {
            $this->ForwardDesensitizeConfig = new AIGWForwardDesensitizeConfig();
            $this->ForwardDesensitizeConfig->deserialize($param["ForwardDesensitizeConfig"]);
        }
    }
}
