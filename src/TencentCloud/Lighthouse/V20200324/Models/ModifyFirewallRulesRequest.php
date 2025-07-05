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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyFirewallRules请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。实例的ID可通过[DescribeInstances](https://cloud.tencent.com/document/product/1207/47573)接口返回值中的InstanceId获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。实例的ID可通过[DescribeInstances](https://cloud.tencent.com/document/product/1207/47573)接口返回值中的InstanceId获取。
 * @method array getFirewallRules() 获取防火墙规则列表。列表长度最大值是100。
 * @method void setFirewallRules(array $FirewallRules) 设置防火墙规则列表。列表长度最大值是100。
 * @method integer getFirewallVersion() 获取防火墙当前版本。用户每次更新防火墙规则时版本会自动加1，防止规则已过期，不填不考虑冲突。
 * @method void setFirewallVersion(integer $FirewallVersion) 设置防火墙当前版本。用户每次更新防火墙规则时版本会自动加1，防止规则已过期，不填不考虑冲突。
 */
class ModifyFirewallRulesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。实例的ID可通过[DescribeInstances](https://cloud.tencent.com/document/product/1207/47573)接口返回值中的InstanceId获取。
     */
    public $InstanceId;

    /**
     * @var array 防火墙规则列表。列表长度最大值是100。
     */
    public $FirewallRules;

    /**
     * @var integer 防火墙当前版本。用户每次更新防火墙规则时版本会自动加1，防止规则已过期，不填不考虑冲突。
     */
    public $FirewallVersion;

    /**
     * @param string $InstanceId 实例 ID。实例的ID可通过[DescribeInstances](https://cloud.tencent.com/document/product/1207/47573)接口返回值中的InstanceId获取。
     * @param array $FirewallRules 防火墙规则列表。列表长度最大值是100。
     * @param integer $FirewallVersion 防火墙当前版本。用户每次更新防火墙规则时版本会自动加1，防止规则已过期，不填不考虑冲突。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FirewallRules",$param) and $param["FirewallRules"] !== null) {
            $this->FirewallRules = [];
            foreach ($param["FirewallRules"] as $key => $value){
                $obj = new FirewallRule();
                $obj->deserialize($value);
                array_push($this->FirewallRules, $obj);
            }
        }

        if (array_key_exists("FirewallVersion",$param) and $param["FirewallVersion"] !== null) {
            $this->FirewallVersion = $param["FirewallVersion"];
        }
    }
}
