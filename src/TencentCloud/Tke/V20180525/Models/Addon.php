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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * addon的具体描述
 *
 * @method string getAddonName() 获取addon名称
 * @method void setAddonName(string $AddonName) 设置addon名称
 * @method string getAddonVersion() 获取addon的版本
 * @method void setAddonVersion(string $AddonVersion) 设置addon的版本
 * @method string getRawValues() 获取addon的参数，是一个json格式的base64转码后的字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRawValues(string $RawValues) 设置addon的参数，是一个json格式的base64转码后的字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhase() 获取addon的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhase(string $Phase) 设置addon的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取addon失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置addon失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class Addon extends AbstractModel
{
    /**
     * @var string addon名称
     */
    public $AddonName;

    /**
     * @var string addon的版本
     */
    public $AddonVersion;

    /**
     * @var string addon的参数，是一个json格式的base64转码后的字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RawValues;

    /**
     * @var string addon的状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phase;

    /**
     * @var string addon失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @param string $AddonName addon名称
     * @param string $AddonVersion addon的版本
     * @param string $RawValues addon的参数，是一个json格式的base64转码后的字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phase addon的状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason addon失败的原因
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
        if (array_key_exists("AddonName",$param) and $param["AddonName"] !== null) {
            $this->AddonName = $param["AddonName"];
        }

        if (array_key_exists("AddonVersion",$param) and $param["AddonVersion"] !== null) {
            $this->AddonVersion = $param["AddonVersion"];
        }

        if (array_key_exists("RawValues",$param) and $param["RawValues"] !== null) {
            $this->RawValues = $param["RawValues"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
