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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询城市编码响应对象
 *
 * @method string getCityId() 获取城市编码cityid，数字与字母的结合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityId(string $CityId) 设置城市编码cityid，数字与字母的结合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvince() 获取省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDistrict() 获取县区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistrict(string $District) 设置县区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置城市
注意：此字段可能返回 null，表示取不到有效值。
 */
class CityCodeResult extends AbstractModel
{
    /**
     * @var string 城市编码cityid，数字与字母的结合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityId;

    /**
     * @var string 省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 县区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $District;

    /**
     * @var string 城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @param string $CityId 城市编码cityid，数字与字母的结合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Province 省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $District 县区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 城市
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
        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }
    }
}
