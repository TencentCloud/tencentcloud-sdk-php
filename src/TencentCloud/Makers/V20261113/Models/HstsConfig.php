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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HSTS 配置
 *
 * @method string getSwitch() 获取<p>on 或 off</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置<p>on 或 off</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxAge() 获取<p>有效期，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxAge(integer $MaxAge) 设置<p>有效期，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncludeSubDomains() 获取<p>on 或 off</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeSubDomains(string $IncludeSubDomains) 设置<p>on 或 off</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPreload() 获取<p>on 或 off</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreload(string $Preload) 设置<p>on 或 off</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class HstsConfig extends AbstractModel
{
    /**
     * @var string <p>on 或 off</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var integer <p>有效期，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxAge;

    /**
     * @var string <p>on 或 off</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeSubDomains;

    /**
     * @var string <p>on 或 off</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Preload;

    /**
     * @param string $Switch <p>on 或 off</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxAge <p>有效期，秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IncludeSubDomains <p>on 或 off</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Preload <p>on 或 off</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = $param["MaxAge"];
        }

        if (array_key_exists("IncludeSubDomains",$param) and $param["IncludeSubDomains"] !== null) {
            $this->IncludeSubDomains = $param["IncludeSubDomains"];
        }

        if (array_key_exists("Preload",$param) and $param["Preload"] !== null) {
            $this->Preload = $param["Preload"];
        }
    }
}
