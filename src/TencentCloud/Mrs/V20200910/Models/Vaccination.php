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
 * 免疫接种记录
 *
 * @method string getId() 获取序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVaccine() 获取疫苗名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVaccine(string $Vaccine) 设置疫苗名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDose() 获取剂次
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDose(string $Dose) 设置剂次
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDate() 获取接种日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置接种日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLotNumber() 获取疫苗批号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLotNumber(string $LotNumber) 设置疫苗批号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManufacturer() 获取生产企业
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManufacturer(string $Manufacturer) 设置生产企业
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClinic() 获取接种单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClinic(string $Clinic) 设置接种单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSite() 获取接种部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSite(string $Site) 设置接种部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvider() 获取接种者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvider(string $Provider) 设置接种者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLot() 获取疫苗批号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLot(string $Lot) 设置疫苗批号
注意：此字段可能返回 null，表示取不到有效值。
 */
class Vaccination extends AbstractModel
{
    /**
     * @var string 序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 疫苗名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vaccine;

    /**
     * @var string 剂次
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dose;

    /**
     * @var string 接种日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var string 疫苗批号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LotNumber;

    /**
     * @var string 生产企业
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Manufacturer;

    /**
     * @var string 接种单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Clinic;

    /**
     * @var string 接种部位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Site;

    /**
     * @var string 接种者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Provider;

    /**
     * @var string 疫苗批号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lot;

    /**
     * @param string $Id 序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vaccine 疫苗名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Dose 剂次
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Date 接种日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LotNumber 疫苗批号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Manufacturer 生产企业
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Clinic 接种单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Site 接种部位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Provider 接种者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Lot 疫苗批号
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Vaccine",$param) and $param["Vaccine"] !== null) {
            $this->Vaccine = $param["Vaccine"];
        }

        if (array_key_exists("Dose",$param) and $param["Dose"] !== null) {
            $this->Dose = $param["Dose"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("LotNumber",$param) and $param["LotNumber"] !== null) {
            $this->LotNumber = $param["LotNumber"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("Clinic",$param) and $param["Clinic"] !== null) {
            $this->Clinic = $param["Clinic"];
        }

        if (array_key_exists("Site",$param) and $param["Site"] !== null) {
            $this->Site = $param["Site"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Lot",$param) and $param["Lot"] !== null) {
            $this->Lot = $param["Lot"];
        }
    }
}
