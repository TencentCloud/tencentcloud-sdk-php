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
namespace TencentCloud\Bpaas\V20181217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云函数SCF
 *
 * @method string getScfRegion() 获取Scf函数地域id
 * @method void setScfRegion(string $ScfRegion) 设置Scf函数地域id
 * @method string getScfRegionName() 获取Scf函数地域
 * @method void setScfRegionName(string $ScfRegionName) 设置Scf函数地域
 * @method string getScfName() 获取Scf函数名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScfName(string $ScfName) 设置Scf函数名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParams() 获取Scf函数入参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置Scf函数入参
注意：此字段可能返回 null，表示取不到有效值。
 */
class Scf extends AbstractModel
{
    /**
     * @var string Scf函数地域id
     */
    public $ScfRegion;

    /**
     * @var string Scf函数地域
     */
    public $ScfRegionName;

    /**
     * @var string Scf函数名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScfName;

    /**
     * @var array Scf函数入参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @param string $ScfRegion Scf函数地域id
     * @param string $ScfRegionName Scf函数地域
     * @param string $ScfName Scf函数名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Params Scf函数入参
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
        if (array_key_exists("ScfRegion",$param) and $param["ScfRegion"] !== null) {
            $this->ScfRegion = $param["ScfRegion"];
        }

        if (array_key_exists("ScfRegionName",$param) and $param["ScfRegionName"] !== null) {
            $this->ScfRegionName = $param["ScfRegionName"];
        }

        if (array_key_exists("ScfName",$param) and $param["ScfName"] !== null) {
            $this->ScfName = $param["ScfName"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new ScfParam();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }
    }
}
