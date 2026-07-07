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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIntentRouter请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID。</p>
 * @method string getRouteName() 获取<p>路由名称，用作LiteLLM的model_name。</p><p>必须以"IntentRouter/"为前缀，后缀仅支持字母、数字、连字符和下划线，后缀长度1-128个字符。</p>
 * @method void setRouteName(string $RouteName) 设置<p>路由名称，用作LiteLLM的model_name。</p><p>必须以"IntentRouter/"为前缀，后缀仅支持字母、数字、连字符和下划线，后缀长度1-128个字符。</p>
 * @method array getTiers() 获取<p>Tier配置列表。</p><p>每个Tier至少包含一个模型，模型名称必须是已关联到该实例的模型。</p>
 * @method void setTiers(array $Tiers) 设置<p>Tier配置列表。</p><p>每个Tier至少包含一个模型，模型名称必须是已关联到该实例的模型。</p>
 * @method string getRouterDescribe() 获取<p>意图路由描述。</p>
 * @method void setRouterDescribe(string $RouterDescribe) 设置<p>意图路由描述。</p>
 */
class CreateIntentRouterRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID。</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>路由名称，用作LiteLLM的model_name。</p><p>必须以"IntentRouter/"为前缀，后缀仅支持字母、数字、连字符和下划线，后缀长度1-128个字符。</p>
     */
    public $RouteName;

    /**
     * @var array <p>Tier配置列表。</p><p>每个Tier至少包含一个模型，模型名称必须是已关联到该实例的模型。</p>
     */
    public $Tiers;

    /**
     * @var string <p>意图路由描述。</p>
     */
    public $RouterDescribe;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID。</p>
     * @param string $RouteName <p>路由名称，用作LiteLLM的model_name。</p><p>必须以"IntentRouter/"为前缀，后缀仅支持字母、数字、连字符和下划线，后缀长度1-128个字符。</p>
     * @param array $Tiers <p>Tier配置列表。</p><p>每个Tier至少包含一个模型，模型名称必须是已关联到该实例的模型。</p>
     * @param string $RouterDescribe <p>意图路由描述。</p>
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
        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("RouteName",$param) and $param["RouteName"] !== null) {
            $this->RouteName = $param["RouteName"];
        }

        if (array_key_exists("Tiers",$param) and $param["Tiers"] !== null) {
            $this->Tiers = [];
            foreach ($param["Tiers"] as $key => $value){
                $obj = new TierItem();
                $obj->deserialize($value);
                array_push($this->Tiers, $obj);
            }
        }

        if (array_key_exists("RouterDescribe",$param) and $param["RouterDescribe"] !== null) {
            $this->RouterDescribe = $param["RouterDescribe"];
        }
    }
}
