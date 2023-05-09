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
 * DescribeCVMAssets返回参数结构体
 *
 * @method integer getTotal() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getData() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegionList() 获取地域列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionList(array $RegionList) 设置地域列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDefenseStatusList() 获取防护状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefenseStatusList(array $DefenseStatusList) 设置防护状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcList() 获取vpc枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcList(array $VpcList) 设置vpc枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetTypeList() 获取资产类型枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetTypeList(array $AssetTypeList) 设置资产类型枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSystemTypeList() 获取操作系统枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemTypeList(array $SystemTypeList) 设置操作系统枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIpTypeList() 获取ip列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpTypeList(array $IpTypeList) 设置ip列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAppIdList() 获取appid列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppIdList(array $AppIdList) 设置appid列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZoneList() 获取可用区列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneList(array $ZoneList) 设置可用区列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCVMAssetsResponse extends AbstractModel
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
     * @var array 地域列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionList;

    /**
     * @var array 防护状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefenseStatusList;

    /**
     * @var array vpc枚举
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcList;

    /**
     * @var array 资产类型枚举
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetTypeList;

    /**
     * @var array 操作系统枚举
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemTypeList;

    /**
     * @var array ip列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpTypeList;

    /**
     * @var array appid列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppIdList;

    /**
     * @var array 可用区列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total -
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Data -
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RegionList 地域列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DefenseStatusList 防护状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VpcList vpc枚举
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetTypeList 资产类型枚举
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SystemTypeList 操作系统枚举
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IpTypeList ip列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AppIdList appid列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ZoneList 可用区列表
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
                $obj = new CVMAssetVO();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
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

        if (array_key_exists("DefenseStatusList",$param) and $param["DefenseStatusList"] !== null) {
            $this->DefenseStatusList = [];
            foreach ($param["DefenseStatusList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->DefenseStatusList, $obj);
            }
        }

        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = [];
            foreach ($param["VpcList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->VpcList, $obj);
            }
        }

        if (array_key_exists("AssetTypeList",$param) and $param["AssetTypeList"] !== null) {
            $this->AssetTypeList = [];
            foreach ($param["AssetTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AssetTypeList, $obj);
            }
        }

        if (array_key_exists("SystemTypeList",$param) and $param["SystemTypeList"] !== null) {
            $this->SystemTypeList = [];
            foreach ($param["SystemTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->SystemTypeList, $obj);
            }
        }

        if (array_key_exists("IpTypeList",$param) and $param["IpTypeList"] !== null) {
            $this->IpTypeList = [];
            foreach ($param["IpTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->IpTypeList, $obj);
            }
        }

        if (array_key_exists("AppIdList",$param) and $param["AppIdList"] !== null) {
            $this->AppIdList = [];
            foreach ($param["AppIdList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AppIdList, $obj);
            }
        }

        if (array_key_exists("ZoneList",$param) and $param["ZoneList"] !== null) {
            $this->ZoneList = [];
            foreach ($param["ZoneList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->ZoneList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
