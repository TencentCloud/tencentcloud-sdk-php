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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainAssets返回参数结构体
 *
 * @method integer getTotal() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getData() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDefenseStatusList() 获取防护状态列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefenseStatusList(array $DefenseStatusList) 设置防护状态列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetLocationList() 获取资产归属地列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetLocationList(array $AssetLocationList) 设置资产归属地列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSourceTypeList() 获取资产类型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceTypeList(array $SourceTypeList) 设置资产类型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegionList() 获取地域列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionList(array $RegionList) 设置地域列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDomainAssetsResponse extends AbstractModel
{
    /**
     * @var integer -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var array 防护状态列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefenseStatusList;

    /**
     * @var array 资产归属地列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetLocationList;

    /**
     * @var array 资产类型列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceTypeList;

    /**
     * @var array 地域列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total -
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Data -
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DefenseStatusList 防护状态列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetLocationList 资产归属地列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SourceTypeList 资产类型列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RegionList 地域列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new DomainAssetVO();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("DefenseStatusList",$param) and $param["DefenseStatusList"] !== null) {
            $this->DefenseStatusList = [];
            foreach ($param["DefenseStatusList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->DefenseStatusList, $obj);
            }
        }

        if (array_key_exists("AssetLocationList",$param) and $param["AssetLocationList"] !== null) {
            $this->AssetLocationList = [];
            foreach ($param["AssetLocationList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AssetLocationList, $obj);
            }
        }

        if (array_key_exists("SourceTypeList",$param) and $param["SourceTypeList"] !== null) {
            $this->SourceTypeList = [];
            foreach ($param["SourceTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->SourceTypeList, $obj);
            }
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = [];
            foreach ($param["RegionList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->RegionList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
