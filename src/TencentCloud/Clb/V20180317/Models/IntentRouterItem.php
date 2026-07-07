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
 * 意图路由摘要信息对象（不含分层详情）。
 *
 * @method string getCreatedTime() 获取<p>创建时间（ISO 8601格式）。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间（ISO 8601格式）。</p>
 * @method string getIntentRouterId() 获取<p>意图路由ID（ir-xxx格式）。</p>
 * @method void setIntentRouterId(string $IntentRouterId) 设置<p>意图路由ID（ir-xxx格式）。</p>
 * @method string getRouteName() 获取<p>路由名称（例如 IntentRouter/customer-support）。</p>
 * @method void setRouteName(string $RouteName) 设置<p>路由名称（例如 IntentRouter/customer-support）。</p>
 * @method string getRouterDescribe() 获取<p>意图路由描述。</p>
 * @method void setRouterDescribe(string $RouterDescribe) 设置<p>意图路由描述。</p>
 * @method string getStatus() 获取<p>状态。</p><p>枚举值：</p><ul><li>Provisioning：创建中</li><li>Active：正常</li><li>Configuring：配置中</li><li>ConfigureFailed：配置失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态。</p><p>枚举值：</p><ul><li>Provisioning：创建中</li><li>Active：正常</li><li>Configuring：配置中</li><li>ConfigureFailed：配置失败</li></ul>
 * @method array getTiers() 获取<p>分层配置列表。</p>
 * @method void setTiers(array $Tiers) 设置<p>分层配置列表。</p>
 * @method string getUpdatedTime() 获取<p>更新时间（ISO 8601格式）。</p>
 * @method void setUpdatedTime(string $UpdatedTime) 设置<p>更新时间（ISO 8601格式）。</p>
 */
class IntentRouterItem extends AbstractModel
{
    /**
     * @var string <p>创建时间（ISO 8601格式）。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>意图路由ID（ir-xxx格式）。</p>
     */
    public $IntentRouterId;

    /**
     * @var string <p>路由名称（例如 IntentRouter/customer-support）。</p>
     */
    public $RouteName;

    /**
     * @var string <p>意图路由描述。</p>
     */
    public $RouterDescribe;

    /**
     * @var string <p>状态。</p><p>枚举值：</p><ul><li>Provisioning：创建中</li><li>Active：正常</li><li>Configuring：配置中</li><li>ConfigureFailed：配置失败</li></ul>
     */
    public $Status;

    /**
     * @var array <p>分层配置列表。</p>
     */
    public $Tiers;

    /**
     * @var string <p>更新时间（ISO 8601格式）。</p>
     */
    public $UpdatedTime;

    /**
     * @param string $CreatedTime <p>创建时间（ISO 8601格式）。</p>
     * @param string $IntentRouterId <p>意图路由ID（ir-xxx格式）。</p>
     * @param string $RouteName <p>路由名称（例如 IntentRouter/customer-support）。</p>
     * @param string $RouterDescribe <p>意图路由描述。</p>
     * @param string $Status <p>状态。</p><p>枚举值：</p><ul><li>Provisioning：创建中</li><li>Active：正常</li><li>Configuring：配置中</li><li>ConfigureFailed：配置失败</li></ul>
     * @param array $Tiers <p>分层配置列表。</p>
     * @param string $UpdatedTime <p>更新时间（ISO 8601格式）。</p>
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
        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("IntentRouterId",$param) and $param["IntentRouterId"] !== null) {
            $this->IntentRouterId = $param["IntentRouterId"];
        }

        if (array_key_exists("RouteName",$param) and $param["RouteName"] !== null) {
            $this->RouteName = $param["RouteName"];
        }

        if (array_key_exists("RouterDescribe",$param) and $param["RouterDescribe"] !== null) {
            $this->RouterDescribe = $param["RouterDescribe"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tiers",$param) and $param["Tiers"] !== null) {
            $this->Tiers = [];
            foreach ($param["Tiers"] as $key => $value){
                $obj = new IntentRouterTierItem();
                $obj->deserialize($value);
                array_push($this->Tiers, $obj);
            }
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
