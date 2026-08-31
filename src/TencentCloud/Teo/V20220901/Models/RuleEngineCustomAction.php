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
 * 规则引擎操作定制配置。
 *
 * @method string getActionId() 获取<p>定制配置唯一 ID。</p>
 * @method void setActionId(string $ActionId) 设置<p>定制配置唯一 ID。</p>
 * @method string getName() 获取<p>定制配置名称。</p>
 * @method void setName(string $Name) 设置<p>定制配置名称。</p>
 * @method string getDescription() 获取<p>定制配置描述。</p>
 * @method void setDescription(string $Description) 设置<p>定制配置描述。</p>
 * @method array getParameters() 获取<p>定制配置参数定义列表。</p>
 * @method void setParameters(array $Parameters) 设置<p>定制配置参数定义列表。</p>
 * @method array getSupportedConditions() 获取<p>定制配置支持的匹配条件。</p><p>支持匹配条件参考官方文档 <a href="https://cloud.tencent.com/document/product/1552/125344">通用参考-配置语法-变量</a>。</p>
 * @method void setSupportedConditions(array $SupportedConditions) 设置<p>定制配置支持的匹配条件。</p><p>支持匹配条件参考官方文档 <a href="https://cloud.tencent.com/document/product/1552/125344">通用参考-配置语法-变量</a>。</p>
 */
class RuleEngineCustomAction extends AbstractModel
{
    /**
     * @var string <p>定制配置唯一 ID。</p>
     */
    public $ActionId;

    /**
     * @var string <p>定制配置名称。</p>
     */
    public $Name;

    /**
     * @var string <p>定制配置描述。</p>
     */
    public $Description;

    /**
     * @var array <p>定制配置参数定义列表。</p>
     */
    public $Parameters;

    /**
     * @var array <p>定制配置支持的匹配条件。</p><p>支持匹配条件参考官方文档 <a href="https://cloud.tencent.com/document/product/1552/125344">通用参考-配置语法-变量</a>。</p>
     */
    public $SupportedConditions;

    /**
     * @param string $ActionId <p>定制配置唯一 ID。</p>
     * @param string $Name <p>定制配置名称。</p>
     * @param string $Description <p>定制配置描述。</p>
     * @param array $Parameters <p>定制配置参数定义列表。</p>
     * @param array $SupportedConditions <p>定制配置支持的匹配条件。</p><p>支持匹配条件参考官方文档 <a href="https://cloud.tencent.com/document/product/1552/125344">通用参考-配置语法-变量</a>。</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new RuleEngineCustomActionParameterSchema();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }

        if (array_key_exists("SupportedConditions",$param) and $param["SupportedConditions"] !== null) {
            $this->SupportedConditions = $param["SupportedConditions"];
        }
    }
}
