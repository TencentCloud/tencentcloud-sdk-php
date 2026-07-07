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
 * ModifyIntentRouterAttribute请求参数结构体
 *
 * @method string getIntentRouterId() 获取<p>意图路由ID（ir-xxx格式）。</p>
 * @method void setIntentRouterId(string $IntentRouterId) 设置<p>意图路由ID（ir-xxx格式）。</p>
 * @method string getModelRouterId() 获取<p>模型路由实例ID。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID。</p>
 * @method string getRouteName() 获取<p>新的路由名称。</p><p>选填；必须以"IntentRouter/"为前缀，后缀仅支持字母、数字、连字符和下划线，后缀长度1-128个字符。不传则不修改。</p>
 * @method void setRouteName(string $RouteName) 设置<p>新的路由名称。</p><p>选填；必须以"IntentRouter/"为前缀，后缀仅支持字母、数字、连字符和下划线，后缀长度1-128个字符。不传则不修改。</p>
 * @method string getRouterDescribe() 获取<p>意图路由描述。</p>
 * @method void setRouterDescribe(string $RouterDescribe) 设置<p>意图路由描述。</p>
 * @method array getTiers() 获取<p>新的分层配置列表（全量替换）。</p><p>选填；不传则不修改。传入时必须为完整分层集合：复杂度分层须包含全部 4 个分层 SIMPLE/MEDIUM/COMPLEX/REASONING；语义分层须包含 default 及各语义 Tier（取决于实例所用协议，且不可跨协议变更）。每个分层至少包含一个模型，模型名称必须是已关联到该实例的模型。</p>
 * @method void setTiers(array $Tiers) 设置<p>新的分层配置列表（全量替换）。</p><p>选填；不传则不修改。传入时必须为完整分层集合：复杂度分层须包含全部 4 个分层 SIMPLE/MEDIUM/COMPLEX/REASONING；语义分层须包含 default 及各语义 Tier（取决于实例所用协议，且不可跨协议变更）。每个分层至少包含一个模型，模型名称必须是已关联到该实例的模型。</p>
 */
class ModifyIntentRouterAttributeRequest extends AbstractModel
{
    /**
     * @var string <p>意图路由ID（ir-xxx格式）。</p>
     */
    public $IntentRouterId;

    /**
     * @var string <p>模型路由实例ID。</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>新的路由名称。</p><p>选填；必须以"IntentRouter/"为前缀，后缀仅支持字母、数字、连字符和下划线，后缀长度1-128个字符。不传则不修改。</p>
     */
    public $RouteName;

    /**
     * @var string <p>意图路由描述。</p>
     */
    public $RouterDescribe;

    /**
     * @var array <p>新的分层配置列表（全量替换）。</p><p>选填；不传则不修改。传入时必须为完整分层集合：复杂度分层须包含全部 4 个分层 SIMPLE/MEDIUM/COMPLEX/REASONING；语义分层须包含 default 及各语义 Tier（取决于实例所用协议，且不可跨协议变更）。每个分层至少包含一个模型，模型名称必须是已关联到该实例的模型。</p>
     */
    public $Tiers;

    /**
     * @param string $IntentRouterId <p>意图路由ID（ir-xxx格式）。</p>
     * @param string $ModelRouterId <p>模型路由实例ID。</p>
     * @param string $RouteName <p>新的路由名称。</p><p>选填；必须以"IntentRouter/"为前缀，后缀仅支持字母、数字、连字符和下划线，后缀长度1-128个字符。不传则不修改。</p>
     * @param string $RouterDescribe <p>意图路由描述。</p>
     * @param array $Tiers <p>新的分层配置列表（全量替换）。</p><p>选填；不传则不修改。传入时必须为完整分层集合：复杂度分层须包含全部 4 个分层 SIMPLE/MEDIUM/COMPLEX/REASONING；语义分层须包含 default 及各语义 Tier（取决于实例所用协议，且不可跨协议变更）。每个分层至少包含一个模型，模型名称必须是已关联到该实例的模型。</p>
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
        if (array_key_exists("IntentRouterId",$param) and $param["IntentRouterId"] !== null) {
            $this->IntentRouterId = $param["IntentRouterId"];
        }

        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("RouteName",$param) and $param["RouteName"] !== null) {
            $this->RouteName = $param["RouteName"];
        }

        if (array_key_exists("RouterDescribe",$param) and $param["RouterDescribe"] !== null) {
            $this->RouterDescribe = $param["RouterDescribe"];
        }

        if (array_key_exists("Tiers",$param) and $param["Tiers"] !== null) {
            $this->Tiers = [];
            foreach ($param["Tiers"] as $key => $value){
                $obj = new TierItem();
                $obj->deserialize($value);
                array_push($this->Tiers, $obj);
            }
        }
    }
}
