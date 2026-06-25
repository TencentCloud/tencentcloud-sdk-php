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
 * CreateCloudNativeAPIGatewayLLMModelAPI请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关 id。</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关 id。</p>
 * @method string getName() 获取<p>模型 API 名称，最长 60 字符。同一网关下唯一。</p>
 * @method void setName(string $Name) 设置<p>模型 API 名称，最长 60 字符。同一网关下唯一。</p>
 * @method string getSceneType() 获取<p>业务场景。</p><p>枚举值：</p><ul><li>Chat：聊天</li><li>Image：图像（需要网关版本 ≥ 3.9.3）</li></ul>
 * @method void setSceneType(string $SceneType) 设置<p>业务场景。</p><p>枚举值：</p><ul><li>Chat：聊天</li><li>Image：图像（需要网关版本 ≥ 3.9.3）</li></ul>
 * @method string getRequestProtocol() 获取<p>请求协议（小写）。当前仅支持：</p><ul><li>openai</li></ul>
 * @method void setRequestProtocol(string $RequestProtocol) 设置<p>请求协议（小写）。当前仅支持：</p><ul><li>openai</li></ul>
 * @method array getListModelServiceId() 获取<p>关联的模型服务 ID 列表，长度 1-10。</p><p>注：字段名建议改为 ModelServiceIds，当前保留用于兼容。</p>
 * @method void setListModelServiceId(array $ListModelServiceId) 设置<p>关联的模型服务 ID 列表，长度 1-10。</p><p>注：字段名建议改为 ModelServiceIds，当前保留用于兼容。</p>
 * @method array getRouteList() 获取<p>路由列表，至少 1 条。每条包含 Methods/Paths/Hosts 等 Kong 路由属性。</p>
 * @method void setRouteList(array $RouteList) 设置<p>路由列表，至少 1 条。每条包含 Methods/Paths/Hosts 等 Kong 路由属性。</p>
 * @method string getBasePath() 获取<p>统一前缀路径（可选）。例如 /v1/openai。</p>
 * @method void setBasePath(string $BasePath) 设置<p>统一前缀路径（可选）。例如 /v1/openai。</p>
 * @method string getDescription() 获取<p>模型 API 描述。最长 200 字符。</p>
 * @method void setDescription(string $Description) 设置<p>模型 API 描述。最长 200 字符。</p>
 * @method CloudNativeAPIGatewayLLMModelServiceRoute getModelServiceRoute() 获取<p>多模型服务路由策略。ListModelServiceId 多于 1 项时必填。</p>
 * @method void setModelServiceRoute(CloudNativeAPIGatewayLLMModelServiceRoute $ModelServiceRoute) 设置<p>多模型服务路由策略。ListModelServiceId 多于 1 项时必填。</p>
 * @method array getMatchHeaders() 获取<p>Header 路由匹配规则。当前仅支持 Operator=exact。</p>
 * @method void setMatchHeaders(array $MatchHeaders) 设置<p>Header 路由匹配规则。当前仅支持 Operator=exact。</p>
 * @method boolean getEnableCrossServiceFallback() 获取<p>是否启用跨服务 Fallback。开启后需提供 CrossServiceFallbackConfig。</p>
 * @method void setEnableCrossServiceFallback(boolean $EnableCrossServiceFallback) 设置<p>是否启用跨服务 Fallback。开启后需提供 CrossServiceFallbackConfig。</p>
 * @method AIGWCrossServiceFallbackConfig getCrossServiceFallbackConfig() 获取<p>跨服务 Fallback 配置。EnableCrossServiceFallback=true 时必填。</p>
 * @method void setCrossServiceFallbackConfig(AIGWCrossServiceFallbackConfig $CrossServiceFallbackConfig) 设置<p>跨服务 Fallback 配置。EnableCrossServiceFallback=true 时必填。</p>
 * @method AIGWTagFilter getTagFilter() 获取<p>标签过滤策略。需要网关版本 ≥ 3.9.4。</p>
 * @method void setTagFilter(AIGWTagFilter $TagFilter) 设置<p>标签过滤策略。需要网关版本 ≥ 3.9.4。</p>
 * @method AIGWLogConfig getLogConfig() 获取<p>日志输出配置（请求/响应 payload 落 LLM Log）。需要网关版本 ≥ 3.9.4。</p>
 * @method void setLogConfig(AIGWLogConfig $LogConfig) 设置<p>日志输出配置（请求/响应 payload 落 LLM Log）。需要网关版本 ≥ 3.9.4。</p>
 */
class CreateCloudNativeAPIGatewayLLMModelAPIRequest extends AbstractModel
{
    /**
     * @var string <p>网关 id。</p>
     */
    public $GatewayId;

    /**
     * @var string <p>模型 API 名称，最长 60 字符。同一网关下唯一。</p>
     */
    public $Name;

    /**
     * @var string <p>业务场景。</p><p>枚举值：</p><ul><li>Chat：聊天</li><li>Image：图像（需要网关版本 ≥ 3.9.3）</li></ul>
     */
    public $SceneType;

    /**
     * @var string <p>请求协议（小写）。当前仅支持：</p><ul><li>openai</li></ul>
     */
    public $RequestProtocol;

    /**
     * @var array <p>关联的模型服务 ID 列表，长度 1-10。</p><p>注：字段名建议改为 ModelServiceIds，当前保留用于兼容。</p>
     */
    public $ListModelServiceId;

    /**
     * @var array <p>路由列表，至少 1 条。每条包含 Methods/Paths/Hosts 等 Kong 路由属性。</p>
     */
    public $RouteList;

    /**
     * @var string <p>统一前缀路径（可选）。例如 /v1/openai。</p>
     */
    public $BasePath;

    /**
     * @var string <p>模型 API 描述。最长 200 字符。</p>
     */
    public $Description;

    /**
     * @var CloudNativeAPIGatewayLLMModelServiceRoute <p>多模型服务路由策略。ListModelServiceId 多于 1 项时必填。</p>
     */
    public $ModelServiceRoute;

    /**
     * @var array <p>Header 路由匹配规则。当前仅支持 Operator=exact。</p>
     */
    public $MatchHeaders;

    /**
     * @var boolean <p>是否启用跨服务 Fallback。开启后需提供 CrossServiceFallbackConfig。</p>
     */
    public $EnableCrossServiceFallback;

    /**
     * @var AIGWCrossServiceFallbackConfig <p>跨服务 Fallback 配置。EnableCrossServiceFallback=true 时必填。</p>
     */
    public $CrossServiceFallbackConfig;

    /**
     * @var AIGWTagFilter <p>标签过滤策略。需要网关版本 ≥ 3.9.4。</p>
     */
    public $TagFilter;

    /**
     * @var AIGWLogConfig <p>日志输出配置（请求/响应 payload 落 LLM Log）。需要网关版本 ≥ 3.9.4。</p>
     */
    public $LogConfig;

    /**
     * @param string $GatewayId <p>网关 id。</p>
     * @param string $Name <p>模型 API 名称，最长 60 字符。同一网关下唯一。</p>
     * @param string $SceneType <p>业务场景。</p><p>枚举值：</p><ul><li>Chat：聊天</li><li>Image：图像（需要网关版本 ≥ 3.9.3）</li></ul>
     * @param string $RequestProtocol <p>请求协议（小写）。当前仅支持：</p><ul><li>openai</li></ul>
     * @param array $ListModelServiceId <p>关联的模型服务 ID 列表，长度 1-10。</p><p>注：字段名建议改为 ModelServiceIds，当前保留用于兼容。</p>
     * @param array $RouteList <p>路由列表，至少 1 条。每条包含 Methods/Paths/Hosts 等 Kong 路由属性。</p>
     * @param string $BasePath <p>统一前缀路径（可选）。例如 /v1/openai。</p>
     * @param string $Description <p>模型 API 描述。最长 200 字符。</p>
     * @param CloudNativeAPIGatewayLLMModelServiceRoute $ModelServiceRoute <p>多模型服务路由策略。ListModelServiceId 多于 1 项时必填。</p>
     * @param array $MatchHeaders <p>Header 路由匹配规则。当前仅支持 Operator=exact。</p>
     * @param boolean $EnableCrossServiceFallback <p>是否启用跨服务 Fallback。开启后需提供 CrossServiceFallbackConfig。</p>
     * @param AIGWCrossServiceFallbackConfig $CrossServiceFallbackConfig <p>跨服务 Fallback 配置。EnableCrossServiceFallback=true 时必填。</p>
     * @param AIGWTagFilter $TagFilter <p>标签过滤策略。需要网关版本 ≥ 3.9.4。</p>
     * @param AIGWLogConfig $LogConfig <p>日志输出配置（请求/响应 payload 落 LLM Log）。需要网关版本 ≥ 3.9.4。</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
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

        if (array_key_exists("ListModelServiceId",$param) and $param["ListModelServiceId"] !== null) {
            $this->ListModelServiceId = $param["ListModelServiceId"];
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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

        if (array_key_exists("TagFilter",$param) and $param["TagFilter"] !== null) {
            $this->TagFilter = new AIGWTagFilter();
            $this->TagFilter->deserialize($param["TagFilter"]);
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new AIGWLogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }
    }
}
