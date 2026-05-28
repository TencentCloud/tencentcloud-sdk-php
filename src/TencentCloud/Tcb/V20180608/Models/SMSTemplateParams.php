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
 * 自定义短信模板中的自定义参数
 *
 * @method string getKey() 获取<p>短信模板的自定义参数的key。如果短信厂商的自定义参数按照命名占位的，才需要此参数；如果按照序号占位的， 不需要此参数。</p><p>腾讯云短信是按照序号占位的，不需要此参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置<p>短信模板的自定义参数的key。如果短信厂商的自定义参数按照命名占位的，才需要此参数；如果按照序号占位的， 不需要此参数。</p><p>腾讯云短信是按照序号占位的，不需要此参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取<p>短信模板的自定义参数对应的value</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置<p>短信模板的自定义参数对应的value</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SMSTemplateParams extends AbstractModel
{
    /**
     * @var string <p>短信模板的自定义参数的key。如果短信厂商的自定义参数按照命名占位的，才需要此参数；如果按照序号占位的， 不需要此参数。</p><p>腾讯云短信是按照序号占位的，不需要此参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string <p>短信模板的自定义参数对应的value</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Key <p>短信模板的自定义参数的key。如果短信厂商的自定义参数按照命名占位的，才需要此参数；如果按照序号占位的， 不需要此参数。</p><p>腾讯云短信是按照序号占位的，不需要此参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value <p>短信模板的自定义参数对应的value</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
