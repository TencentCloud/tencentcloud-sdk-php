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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ip黑白名单配置
 *
 * @method array getIps() 获取ip数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIps(array $Ips) 设置ip数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEffectType() 获取生效类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffectType(string $EffectType) 设置生效类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEffectTimes() 获取生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffectTimes(array $EffectTimes) 设置生效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class IpConfig extends AbstractModel
{
    /**
     * @var array ip数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ips;

    /**
     * @var string 生效类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EffectType;

    /**
     * @var array 生效时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EffectTimes;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @param array $Ips ip数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EffectType 生效类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EffectTimes 生效时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 备注
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
        if (array_key_exists("Ips",$param) and $param["Ips"] !== null) {
            $this->Ips = $param["Ips"];
        }

        if (array_key_exists("EffectType",$param) and $param["EffectType"] !== null) {
            $this->EffectType = $param["EffectType"];
        }

        if (array_key_exists("EffectTimes",$param) and $param["EffectTimes"] !== null) {
            $this->EffectTimes = [];
            foreach ($param["EffectTimes"] as $key => $value){
                $obj = new StartEndTime();
                $obj->deserialize($value);
                array_push($this->EffectTimes, $obj);
            }
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
