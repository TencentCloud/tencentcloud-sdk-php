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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关Tse 限流插件配置
 *
 * @method boolean getEnabled() 获取插件启用状态
 * @method void setEnabled(boolean $Enabled) 设置插件启用状态
 * @method array getQpsThresholds() 获取qps阈值
 * @method void setQpsThresholds(array $QpsThresholds) 设置qps阈值
 * @method string getPath() 获取需要进行流量控制的请求路径
 * @method void setPath(string $Path) 设置需要进行流量控制的请求路径
 * @method string getHeader() 获取需要进行流量控制的请求头Key
 * @method void setHeader(string $Header) 设置需要进行流量控制的请求头Key
 * @method string getLimitBy() 获取限流依据
ip service consumer credential path header
 * @method void setLimitBy(string $LimitBy) 设置限流依据
ip service consumer credential path header
 * @method ExternalRedis getExternalRedis() 获取外部redis配置
 * @method void setExternalRedis(ExternalRedis $ExternalRedis) 设置外部redis配置
 * @method string getPolicy() 获取计数器策略 
local 单机
redis  默认redis
external_redis 外部redis

 * @method void setPolicy(string $Policy) 设置计数器策略 
local 单机
redis  默认redis
external_redis 外部redis

 * @method RateLimitResponse getRateLimitResponse() 获取响应配置，响应策略为text

 * @method void setRateLimitResponse(RateLimitResponse $RateLimitResponse) 设置响应配置，响应策略为text

 * @method string getRateLimitResponseUrl() 获取请求转发地址
 * @method void setRateLimitResponseUrl(string $RateLimitResponseUrl) 设置请求转发地址
 * @method string getResponseType() 获取响应策略
url请求转发
text 响应配置
default 直接返回

 * @method void setResponseType(string $ResponseType) 设置响应策略
url请求转发
text 响应配置
default 直接返回

 * @method boolean getHideClientHeaders() 获取是否隐藏限流客户端响应头
 * @method void setHideClientHeaders(boolean $HideClientHeaders) 设置是否隐藏限流客户端响应头
 * @method integer getLineUpTime() 获取排队时间
 * @method void setLineUpTime(integer $LineUpTime) 设置排队时间
 * @method boolean getIsDelay() 获取是否开启请求排队
 * @method void setIsDelay(boolean $IsDelay) 设置是否开启请求排队
 * @method array getBasicLimitQpsThresholds() 获取基础限流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicLimitQpsThresholds(array $BasicLimitQpsThresholds) 设置基础限流
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLimitRules() 获取参数限流的规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitRules(array $LimitRules) 设置参数限流的规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudNativeAPIGatewayRateLimitDetail extends AbstractModel
{
    /**
     * @var boolean 插件启用状态
     */
    public $Enabled;

    /**
     * @var array qps阈值
     */
    public $QpsThresholds;

    /**
     * @var string 需要进行流量控制的请求路径
     */
    public $Path;

    /**
     * @var string 需要进行流量控制的请求头Key
     */
    public $Header;

    /**
     * @var string 限流依据
ip service consumer credential path header
     */
    public $LimitBy;

    /**
     * @var ExternalRedis 外部redis配置
     */
    public $ExternalRedis;

    /**
     * @var string 计数器策略 
local 单机
redis  默认redis
external_redis 外部redis

     */
    public $Policy;

    /**
     * @var RateLimitResponse 响应配置，响应策略为text

     */
    public $RateLimitResponse;

    /**
     * @var string 请求转发地址
     */
    public $RateLimitResponseUrl;

    /**
     * @var string 响应策略
url请求转发
text 响应配置
default 直接返回

     */
    public $ResponseType;

    /**
     * @var boolean 是否隐藏限流客户端响应头
     */
    public $HideClientHeaders;

    /**
     * @var integer 排队时间
     */
    public $LineUpTime;

    /**
     * @var boolean 是否开启请求排队
     */
    public $IsDelay;

    /**
     * @var array 基础限流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicLimitQpsThresholds;

    /**
     * @var array 参数限流的规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitRules;

    /**
     * @param boolean $Enabled 插件启用状态
     * @param array $QpsThresholds qps阈值
     * @param string $Path 需要进行流量控制的请求路径
     * @param string $Header 需要进行流量控制的请求头Key
     * @param string $LimitBy 限流依据
ip service consumer credential path header
     * @param ExternalRedis $ExternalRedis 外部redis配置
     * @param string $Policy 计数器策略 
local 单机
redis  默认redis
external_redis 外部redis

     * @param RateLimitResponse $RateLimitResponse 响应配置，响应策略为text

     * @param string $RateLimitResponseUrl 请求转发地址
     * @param string $ResponseType 响应策略
url请求转发
text 响应配置
default 直接返回

     * @param boolean $HideClientHeaders 是否隐藏限流客户端响应头
     * @param integer $LineUpTime 排队时间
     * @param boolean $IsDelay 是否开启请求排队
     * @param array $BasicLimitQpsThresholds 基础限流
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LimitRules 参数限流的规则
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("QpsThresholds",$param) and $param["QpsThresholds"] !== null) {
            $this->QpsThresholds = [];
            foreach ($param["QpsThresholds"] as $key => $value){
                $obj = new QpsThreshold();
                $obj->deserialize($value);
                array_push($this->QpsThresholds, $obj);
            }
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = $param["Header"];
        }

        if (array_key_exists("LimitBy",$param) and $param["LimitBy"] !== null) {
            $this->LimitBy = $param["LimitBy"];
        }

        if (array_key_exists("ExternalRedis",$param) and $param["ExternalRedis"] !== null) {
            $this->ExternalRedis = new ExternalRedis();
            $this->ExternalRedis->deserialize($param["ExternalRedis"]);
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("RateLimitResponse",$param) and $param["RateLimitResponse"] !== null) {
            $this->RateLimitResponse = new RateLimitResponse();
            $this->RateLimitResponse->deserialize($param["RateLimitResponse"]);
        }

        if (array_key_exists("RateLimitResponseUrl",$param) and $param["RateLimitResponseUrl"] !== null) {
            $this->RateLimitResponseUrl = $param["RateLimitResponseUrl"];
        }

        if (array_key_exists("ResponseType",$param) and $param["ResponseType"] !== null) {
            $this->ResponseType = $param["ResponseType"];
        }

        if (array_key_exists("HideClientHeaders",$param) and $param["HideClientHeaders"] !== null) {
            $this->HideClientHeaders = $param["HideClientHeaders"];
        }

        if (array_key_exists("LineUpTime",$param) and $param["LineUpTime"] !== null) {
            $this->LineUpTime = $param["LineUpTime"];
        }

        if (array_key_exists("IsDelay",$param) and $param["IsDelay"] !== null) {
            $this->IsDelay = $param["IsDelay"];
        }

        if (array_key_exists("BasicLimitQpsThresholds",$param) and $param["BasicLimitQpsThresholds"] !== null) {
            $this->BasicLimitQpsThresholds = [];
            foreach ($param["BasicLimitQpsThresholds"] as $key => $value){
                $obj = new QpsThreshold();
                $obj->deserialize($value);
                array_push($this->BasicLimitQpsThresholds, $obj);
            }
        }

        if (array_key_exists("LimitRules",$param) and $param["LimitRules"] !== null) {
            $this->LimitRules = [];
            foreach ($param["LimitRules"] as $key => $value){
                $obj = new LimitRule();
                $obj->deserialize($value);
                array_push($this->LimitRules, $obj);
            }
        }
    }
}
