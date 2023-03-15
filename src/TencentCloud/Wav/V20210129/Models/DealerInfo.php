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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 经销商信息
 *
 * @method integer getDealerId() 获取企微SaaS平台经销商id
 * @method void setDealerId(integer $DealerId) 设置企微SaaS平台经销商id
 * @method string getDealerName() 获取经销商名称
 * @method void setDealerName(string $DealerName) 设置经销商名称
 * @method string getProvinceCode() 获取所属省份编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvinceCode(string $ProvinceCode) 设置所属省份编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCityCodeList() 获取所属城市编号列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityCodeList(array $CityCodeList) 设置所属城市编号列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBrandIdList() 获取业务覆盖品牌id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrandIdList(array $BrandIdList) 设置业务覆盖品牌id列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DealerInfo extends AbstractModel
{
    /**
     * @var integer 企微SaaS平台经销商id
     */
    public $DealerId;

    /**
     * @var string 经销商名称
     */
    public $DealerName;

    /**
     * @var string 所属省份编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProvinceCode;

    /**
     * @var array 所属城市编号列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityCodeList;

    /**
     * @var array 业务覆盖品牌id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrandIdList;

    /**
     * @param integer $DealerId 企微SaaS平台经销商id
     * @param string $DealerName 经销商名称
     * @param string $ProvinceCode 所属省份编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CityCodeList 所属城市编号列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BrandIdList 业务覆盖品牌id列表
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
        if (array_key_exists("DealerId",$param) and $param["DealerId"] !== null) {
            $this->DealerId = $param["DealerId"];
        }

        if (array_key_exists("DealerName",$param) and $param["DealerName"] !== null) {
            $this->DealerName = $param["DealerName"];
        }

        if (array_key_exists("ProvinceCode",$param) and $param["ProvinceCode"] !== null) {
            $this->ProvinceCode = $param["ProvinceCode"];
        }

        if (array_key_exists("CityCodeList",$param) and $param["CityCodeList"] !== null) {
            $this->CityCodeList = $param["CityCodeList"];
        }

        if (array_key_exists("BrandIdList",$param) and $param["BrandIdList"] !== null) {
            $this->BrandIdList = $param["BrandIdList"];
        }
    }
}
