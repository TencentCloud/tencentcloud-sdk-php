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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 施压配置
 *
 * @method LoadSpec getLoadSpec() 获取施压配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadSpec(LoadSpec $LoadSpec) 设置施压配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method VpcLoadDistribution getVpcLoadDistribution() 获取压力来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcLoadDistribution(VpcLoadDistribution $VpcLoadDistribution) 设置压力来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGeoRegionsLoadDistribution() 获取压力分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGeoRegionsLoadDistribution(array $GeoRegionsLoadDistribution) 设置压力分布
注意：此字段可能返回 null，表示取不到有效值。
 */
class Load extends AbstractModel
{
    /**
     * @var LoadSpec 施压配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadSpec;

    /**
     * @var VpcLoadDistribution 压力来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcLoadDistribution;

    /**
     * @var array 压力分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GeoRegionsLoadDistribution;

    /**
     * @param LoadSpec $LoadSpec 施压配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param VpcLoadDistribution $VpcLoadDistribution 压力来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GeoRegionsLoadDistribution 压力分布
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
        if (array_key_exists("LoadSpec",$param) and $param["LoadSpec"] !== null) {
            $this->LoadSpec = new LoadSpec();
            $this->LoadSpec->deserialize($param["LoadSpec"]);
        }

        if (array_key_exists("VpcLoadDistribution",$param) and $param["VpcLoadDistribution"] !== null) {
            $this->VpcLoadDistribution = new VpcLoadDistribution();
            $this->VpcLoadDistribution->deserialize($param["VpcLoadDistribution"]);
        }

        if (array_key_exists("GeoRegionsLoadDistribution",$param) and $param["GeoRegionsLoadDistribution"] !== null) {
            $this->GeoRegionsLoadDistribution = [];
            foreach ($param["GeoRegionsLoadDistribution"] as $key => $value){
                $obj = new GeoRegionsLoadItem();
                $obj->deserialize($value);
                array_push($this->GeoRegionsLoadDistribution, $obj);
            }
        }
    }
}
