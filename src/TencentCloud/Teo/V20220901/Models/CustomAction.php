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
 * 定制配置
 *
 * @method string getActionId() 获取<p>定制配置的配置项 Id。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口的返回值 CustomActionSet[].ActionId 获取。</p>
 * @method void setActionId(string $ActionId) 设置<p>定制配置的配置项 Id。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口的返回值 CustomActionSet[].ActionId 获取。</p>
 * @method array getParameters() 获取<p>该定制配置项下各参数字段的取值。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取。</p>
 * @method void setParameters(array $Parameters) 设置<p>该定制配置项下各参数字段的取值。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取。</p>
 */
class CustomAction extends AbstractModel
{
    /**
     * @var string <p>定制配置的配置项 Id。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口的返回值 CustomActionSet[].ActionId 获取。</p>
     */
    public $ActionId;

    /**
     * @var array <p>该定制配置项下各参数字段的取值。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取。</p>
     */
    public $Parameters;

    /**
     * @param string $ActionId <p>定制配置的配置项 Id。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口的返回值 CustomActionSet[].ActionId 获取。</p>
     * @param array $Parameters <p>该定制配置项下各参数字段的取值。</p><p>您可以通过 DescribeAvailableCustomActionsForRuleEngine 接口返回值 CustomActionSet[].Parameters 获取。</p>
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
        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new CustomActionParameter();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }
    }
}
