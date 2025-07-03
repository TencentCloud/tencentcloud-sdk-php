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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Drm 加密信息。
 *
 * @method string getType() 获取加密类型：
<li> simpleaes: aes-128 加密</li>
<li> widevine</li>
<li> fairplay：Dash不支持fairplay加密</li>  
<li> playready</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置加密类型：
<li> simpleaes: aes-128 加密</li>
<li> widevine</li>
<li> fairplay：Dash不支持fairplay加密</li>  
<li> playready</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SimpleAesDrm getSimpleAesDrm() 获取SimpleAes 加密信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimpleAesDrm(SimpleAesDrm $SimpleAesDrm) 设置SimpleAes 加密信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SpekeDrm getSpekeDrm() 获取FairPlay, WideVine， PlayReady 加密信息。
 * @method void setSpekeDrm(SpekeDrm $SpekeDrm) 设置FairPlay, WideVine， PlayReady 加密信息。
 */
class DrmInfo extends AbstractModel
{
    /**
     * @var string 加密类型：
<li> simpleaes: aes-128 加密</li>
<li> widevine</li>
<li> fairplay：Dash不支持fairplay加密</li>  
<li> playready</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var SimpleAesDrm SimpleAes 加密信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SimpleAesDrm;

    /**
     * @var SpekeDrm FairPlay, WideVine， PlayReady 加密信息。
     */
    public $SpekeDrm;

    /**
     * @param string $Type 加密类型：
<li> simpleaes: aes-128 加密</li>
<li> widevine</li>
<li> fairplay：Dash不支持fairplay加密</li>  
<li> playready</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SimpleAesDrm $SimpleAesDrm SimpleAes 加密信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SpekeDrm $SpekeDrm FairPlay, WideVine， PlayReady 加密信息。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SimpleAesDrm",$param) and $param["SimpleAesDrm"] !== null) {
            $this->SimpleAesDrm = new SimpleAesDrm();
            $this->SimpleAesDrm->deserialize($param["SimpleAesDrm"]);
        }

        if (array_key_exists("SpekeDrm",$param) and $param["SpekeDrm"] !== null) {
            $this->SpekeDrm = new SpekeDrm();
            $this->SpekeDrm->deserialize($param["SpekeDrm"]);
        }
    }
}
