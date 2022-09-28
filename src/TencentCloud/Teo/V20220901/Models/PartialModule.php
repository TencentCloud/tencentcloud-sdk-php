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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 例外规则的详细模块配置。
 *
 * @method string getModule() 获取模块名称，取值为：
<li>waf：托管规则。</li>
 * @method void setModule(string $Module) 设置模块名称，取值为：
<li>waf：托管规则。</li>
 * @method array getInclude() 获取模块下的需要例外的具体规则ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInclude(array $Include) 设置模块下的需要例外的具体规则ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PartialModule extends AbstractModel
{
    /**
     * @var string 模块名称，取值为：
<li>waf：托管规则。</li>
     */
    public $Module;

    /**
     * @var array 模块下的需要例外的具体规则ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Include;

    /**
     * @param string $Module 模块名称，取值为：
<li>waf：托管规则。</li>
     * @param array $Include 模块下的需要例外的具体规则ID列表。
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Include",$param) and $param["Include"] !== null) {
            $this->Include = $param["Include"];
        }
    }
}
