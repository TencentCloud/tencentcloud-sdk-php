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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateNetworkFirewallPolicyDetail请求参数结构体
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method integer getId() 获取策略Id
 * @method void setId(integer $Id) 设置策略Id
 * @method integer getFromPolicyRule() 获取入站规则

全部允许：1

全部拒绝 ：2

自定义：3
 * @method void setFromPolicyRule(integer $FromPolicyRule) 设置入站规则

全部允许：1

全部拒绝 ：2

自定义：3
 * @method integer getToPolicyRule() 获取出站规则

全部允许：1

全部拒绝 ：2

自定义：3
 * @method void setToPolicyRule(integer $ToPolicyRule) 设置出站规则

全部允许：1

全部拒绝 ：2

自定义：3
 * @method string getPodSelector() 获取pod选择器
 * @method void setPodSelector(string $PodSelector) 设置pod选择器
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getDescription() 获取策略描述
 * @method void setDescription(string $Description) 设置策略描述
 * @method array getCustomPolicy() 获取自定义规则
 * @method void setCustomPolicy(array $CustomPolicy) 设置自定义规则
 */
class UpdateNetworkFirewallPolicyDetailRequest extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var integer 策略Id
     */
    public $Id;

    /**
     * @var integer 入站规则

全部允许：1

全部拒绝 ：2

自定义：3
     */
    public $FromPolicyRule;

    /**
     * @var integer 出站规则

全部允许：1

全部拒绝 ：2

自定义：3
     */
    public $ToPolicyRule;

    /**
     * @var string pod选择器
     */
    public $PodSelector;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 策略描述
     */
    public $Description;

    /**
     * @var array 自定义规则
     */
    public $CustomPolicy;

    /**
     * @param string $ClusterId 集群Id
     * @param integer $Id 策略Id
     * @param integer $FromPolicyRule 入站规则

全部允许：1

全部拒绝 ：2

自定义：3
     * @param integer $ToPolicyRule 出站规则

全部允许：1

全部拒绝 ：2

自定义：3
     * @param string $PodSelector pod选择器
     * @param string $Namespace 命名空间
     * @param string $Description 策略描述
     * @param array $CustomPolicy 自定义规则
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("FromPolicyRule",$param) and $param["FromPolicyRule"] !== null) {
            $this->FromPolicyRule = $param["FromPolicyRule"];
        }

        if (array_key_exists("ToPolicyRule",$param) and $param["ToPolicyRule"] !== null) {
            $this->ToPolicyRule = $param["ToPolicyRule"];
        }

        if (array_key_exists("PodSelector",$param) and $param["PodSelector"] !== null) {
            $this->PodSelector = $param["PodSelector"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CustomPolicy",$param) and $param["CustomPolicy"] !== null) {
            $this->CustomPolicy = [];
            foreach ($param["CustomPolicy"] as $key => $value){
                $obj = new NetworkCustomPolicy();
                $obj->deserialize($value);
                array_push($this->CustomPolicy, $obj);
            }
        }
    }
}
