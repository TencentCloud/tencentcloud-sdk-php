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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceConfig
 *
 * @method array getFunction() 获取功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFunction(array $Function) 设置功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResource() 获取资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(array $Resource) 设置资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取utc时间 单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置utc时间 单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCountdown() 获取utc时间 单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountdown(integer $Countdown) 设置utc时间 单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpec() 获取规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpec(string $Spec) 设置规格
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeResourceConfigLicense extends AbstractModel
{
    /**
     * @var array 功能
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Function;

    /**
     * @var array 资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var integer utc时间 单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var integer utc时间 单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Countdown;

    /**
     * @var string 规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spec;

    /**
     * @param array $Function 功能
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Resource 资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime utc时间 单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Countdown utc时间 单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Spec 规格
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
        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = [];
            foreach ($param["Function"] as $key => $value){
                $obj = new DescribeResourceConfigLicenseFunction();
                $obj->deserialize($value);
                array_push($this->Function, $obj);
            }
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = [];
            foreach ($param["Resource"] as $key => $value){
                $obj = new DescribeResourceConfigLicenseResource();
                $obj->deserialize($value);
                array_push($this->Resource, $obj);
            }
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Countdown",$param) and $param["Countdown"] !== null) {
            $this->Countdown = $param["Countdown"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }
    }
}
