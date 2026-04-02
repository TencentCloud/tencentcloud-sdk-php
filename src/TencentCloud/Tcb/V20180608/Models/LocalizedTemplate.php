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
 * 多语言模板
 *
 * @method string getZhCN() 获取<p>中文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZhCN(string $ZhCN) 设置<p>中文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnUS() 获取<p>英文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnUS(string $EnUS) 设置<p>英文</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class LocalizedTemplate extends AbstractModel
{
    /**
     * @var string <p>中文</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZhCN;

    /**
     * @var string <p>英文</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnUS;

    /**
     * @param string $ZhCN <p>中文</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnUS <p>英文</p>
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
        if (array_key_exists("ZhCN",$param) and $param["ZhCN"] !== null) {
            $this->ZhCN = $param["ZhCN"];
        }

        if (array_key_exists("EnUS",$param) and $param["EnUS"] !== null) {
            $this->EnUS = $param["EnUS"];
        }
    }
}
