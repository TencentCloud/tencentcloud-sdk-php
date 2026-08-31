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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTPService 缓存规则条目
 *
 * @method string getDescription() 获取<p>自定义描述，最多 128 字节</p>
 * @method void setDescription(string $Description) 设置<p>自定义描述，最多 128 字节</p>
 * @method boolean getEnable() 获取<p>规则开关：nil/true 启用，false 禁用</p>
 * @method void setEnable(boolean $Enable) 设置<p>规则开关：nil/true 启用，false 禁用</p>
 * @method HTTPServiceRuleCondition getCondition() 获取<p>HTTPService 规则匹配条件（必填）</p>
 * @method void setCondition(HTTPServiceRuleCondition $Condition) 设置<p>HTTPService 规则匹配条件（必填）</p>
 * @method array getActions() 获取<p>HTTPService 缓存动作列表，同一规则内相同 Type 至多一个</p>
 * @method void setActions(array $Actions) 设置<p>HTTPService 缓存动作列表，同一规则内相同 Type 至多一个</p>
 */
class HTTPServiceCacheRule extends AbstractModel
{
    /**
     * @var string <p>自定义描述，最多 128 字节</p>
     */
    public $Description;

    /**
     * @var boolean <p>规则开关：nil/true 启用，false 禁用</p>
     */
    public $Enable;

    /**
     * @var HTTPServiceRuleCondition <p>HTTPService 规则匹配条件（必填）</p>
     */
    public $Condition;

    /**
     * @var array <p>HTTPService 缓存动作列表，同一规则内相同 Type 至多一个</p>
     */
    public $Actions;

    /**
     * @param string $Description <p>自定义描述，最多 128 字节</p>
     * @param boolean $Enable <p>规则开关：nil/true 启用，false 禁用</p>
     * @param HTTPServiceRuleCondition $Condition <p>HTTPService 规则匹配条件（必填）</p>
     * @param array $Actions <p>HTTPService 缓存动作列表，同一规则内相同 Type 至多一个</p>
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new HTTPServiceRuleCondition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new HTTPServiceCacheAction();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }
    }
}
