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
 * 同[EipOutConfig](https://document.capi.woa.com/document/product/583/17244#EipOutConfig)
 *
 * @method string getEipFixed() 获取<p>是否固定 EIP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEipFixed(string $EipFixed) 设置<p>是否固定 EIP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEips() 获取<p>EIP 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEips(array $Eips) 设置<p>EIP 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class EipOutConfig extends AbstractModel
{
    /**
     * @var string <p>是否固定 EIP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EipFixed;

    /**
     * @var array <p>EIP 列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Eips;

    /**
     * @param string $EipFixed <p>是否固定 EIP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Eips <p>EIP 列表</p>
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
        if (array_key_exists("EipFixed",$param) and $param["EipFixed"] !== null) {
            $this->EipFixed = $param["EipFixed"];
        }

        if (array_key_exists("Eips",$param) and $param["Eips"] !== null) {
            $this->Eips = $param["Eips"];
        }
    }
}
