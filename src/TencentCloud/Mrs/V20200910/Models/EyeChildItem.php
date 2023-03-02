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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 眼科子结构
 *
 * @method array getSph() 获取球镜
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSph(array $Sph) 设置球镜
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCyl() 获取柱镜
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCyl(array $Cyl) 设置柱镜
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAx() 获取轴位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAx(array $Ax) 设置轴位
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseItem2 getSe() 获取等效球镜
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSe(BaseItem2 $Se) 设置等效球镜
注意：此字段可能返回 null，表示取不到有效值。
 */
class EyeChildItem extends AbstractModel
{
    /**
     * @var array 球镜
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sph;

    /**
     * @var array 柱镜
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cyl;

    /**
     * @var array 轴位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ax;

    /**
     * @var BaseItem2 等效球镜
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Se;

    /**
     * @param array $Sph 球镜
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Cyl 柱镜
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Ax 轴位
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseItem2 $Se 等效球镜
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
        if (array_key_exists("Sph",$param) and $param["Sph"] !== null) {
            $this->Sph = [];
            foreach ($param["Sph"] as $key => $value){
                $obj = new BaseItem3();
                $obj->deserialize($value);
                array_push($this->Sph, $obj);
            }
        }

        if (array_key_exists("Cyl",$param) and $param["Cyl"] !== null) {
            $this->Cyl = [];
            foreach ($param["Cyl"] as $key => $value){
                $obj = new BaseItem3();
                $obj->deserialize($value);
                array_push($this->Cyl, $obj);
            }
        }

        if (array_key_exists("Ax",$param) and $param["Ax"] !== null) {
            $this->Ax = [];
            foreach ($param["Ax"] as $key => $value){
                $obj = new BaseItem3();
                $obj->deserialize($value);
                array_push($this->Ax, $obj);
            }
        }

        if (array_key_exists("Se",$param) and $param["Se"] !== null) {
            $this->Se = new BaseItem2();
            $this->Se->deserialize($param["Se"]);
        }
    }
}
