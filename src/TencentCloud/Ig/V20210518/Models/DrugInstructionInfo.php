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
namespace TencentCloud\Ig\V20210518\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 药品说明书信息
 *
 * @method string getDrugId() 获取药品id
 * @method void setDrugId(string $DrugId) 设置药品id
 * @method string getDrugName() 获取药品名称
 * @method void setDrugName(string $DrugName) 设置药品名称
 * @method string getTradeName() 获取商品名称
 * @method void setTradeName(string $TradeName) 设置商品名称
 * @method string getSpecification() 获取规格
 * @method void setSpecification(string $Specification) 设置规格
 * @method string getManufacturer() 获取生产企业
 * @method void setManufacturer(string $Manufacturer) 设置生产企业
 * @method string getDrugUsage() 获取用法用量
 * @method void setDrugUsage(string $DrugUsage) 设置用法用量
 * @method string getIndication() 获取适应症
 * @method void setIndication(string $Indication) 设置适应症
 * @method string getAdverseReaction() 获取不良反应
 * @method void setAdverseReaction(string $AdverseReaction) 设置不良反应
 * @method integer getDrugRxType() 获取是否处方药，0:非处方药，1:处方药
 * @method void setDrugRxType(integer $DrugRxType) 设置是否处方药，0:非处方药，1:处方药
 * @method string getDocUrl() 获取药品说明书URL
 * @method void setDocUrl(string $DocUrl) 设置药品说明书URL
 */
class DrugInstructionInfo extends AbstractModel
{
    /**
     * @var string 药品id
     */
    public $DrugId;

    /**
     * @var string 药品名称
     */
    public $DrugName;

    /**
     * @var string 商品名称
     */
    public $TradeName;

    /**
     * @var string 规格
     */
    public $Specification;

    /**
     * @var string 生产企业
     */
    public $Manufacturer;

    /**
     * @var string 用法用量
     */
    public $DrugUsage;

    /**
     * @var string 适应症
     */
    public $Indication;

    /**
     * @var string 不良反应
     */
    public $AdverseReaction;

    /**
     * @var integer 是否处方药，0:非处方药，1:处方药
     */
    public $DrugRxType;

    /**
     * @var string 药品说明书URL
     */
    public $DocUrl;

    /**
     * @param string $DrugId 药品id
     * @param string $DrugName 药品名称
     * @param string $TradeName 商品名称
     * @param string $Specification 规格
     * @param string $Manufacturer 生产企业
     * @param string $DrugUsage 用法用量
     * @param string $Indication 适应症
     * @param string $AdverseReaction 不良反应
     * @param integer $DrugRxType 是否处方药，0:非处方药，1:处方药
     * @param string $DocUrl 药品说明书URL
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
        if (array_key_exists("DrugId",$param) and $param["DrugId"] !== null) {
            $this->DrugId = $param["DrugId"];
        }

        if (array_key_exists("DrugName",$param) and $param["DrugName"] !== null) {
            $this->DrugName = $param["DrugName"];
        }

        if (array_key_exists("TradeName",$param) and $param["TradeName"] !== null) {
            $this->TradeName = $param["TradeName"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("DrugUsage",$param) and $param["DrugUsage"] !== null) {
            $this->DrugUsage = $param["DrugUsage"];
        }

        if (array_key_exists("Indication",$param) and $param["Indication"] !== null) {
            $this->Indication = $param["Indication"];
        }

        if (array_key_exists("AdverseReaction",$param) and $param["AdverseReaction"] !== null) {
            $this->AdverseReaction = $param["AdverseReaction"];
        }

        if (array_key_exists("DrugRxType",$param) and $param["DrugRxType"] !== null) {
            $this->DrugRxType = $param["DrugRxType"];
        }

        if (array_key_exists("DocUrl",$param) and $param["DocUrl"] !== null) {
            $this->DocUrl = $param["DocUrl"];
        }
    }
}
