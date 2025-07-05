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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGatewayCanaryRule请求参数结构体
 *
 * @method string getGatewayId() 获取网关 ID
 * @method void setGatewayId(string $GatewayId) 设置网关 ID
 * @method string getServiceId() 获取服务 ID
 * @method void setServiceId(string $ServiceId) 设置服务 ID
 * @method CloudNativeAPIGatewayCanaryRule getCanaryRule() 获取灰度规则配置
 * @method void setCanaryRule(CloudNativeAPIGatewayCanaryRule $CanaryRule) 设置灰度规则配置
 * @method array getCanaryRuleList() 获取灰度规则配置列表，如果配置了此参数，将以此参数为准，忽略CanaryRule参数
 * @method void setCanaryRuleList(array $CanaryRuleList) 设置灰度规则配置列表，如果配置了此参数，将以此参数为准，忽略CanaryRule参数
 */
class CreateCloudNativeAPIGatewayCanaryRuleRequest extends AbstractModel
{
    /**
     * @var string 网关 ID
     */
    public $GatewayId;

    /**
     * @var string 服务 ID
     */
    public $ServiceId;

    /**
     * @var CloudNativeAPIGatewayCanaryRule 灰度规则配置
     */
    public $CanaryRule;

    /**
     * @var array 灰度规则配置列表，如果配置了此参数，将以此参数为准，忽略CanaryRule参数
     */
    public $CanaryRuleList;

    /**
     * @param string $GatewayId 网关 ID
     * @param string $ServiceId 服务 ID
     * @param CloudNativeAPIGatewayCanaryRule $CanaryRule 灰度规则配置
     * @param array $CanaryRuleList 灰度规则配置列表，如果配置了此参数，将以此参数为准，忽略CanaryRule参数
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

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("CanaryRule",$param) and $param["CanaryRule"] !== null) {
            $this->CanaryRule = new CloudNativeAPIGatewayCanaryRule();
            $this->CanaryRule->deserialize($param["CanaryRule"]);
        }

        if (array_key_exists("CanaryRuleList",$param) and $param["CanaryRuleList"] !== null) {
            $this->CanaryRuleList = [];
            foreach ($param["CanaryRuleList"] as $key => $value){
                $obj = new CloudNativeAPIGatewayCanaryRule();
                $obj->deserialize($value);
                array_push($this->CanaryRuleList, $obj);
            }
        }
    }
}
