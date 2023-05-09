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
 * DescribeDbAssets返回参数结构体
 *
 * @method integer getTotal() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getData() 获取资产总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置资产总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegionList() 获取地域枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionList(array $RegionList) 设置地域枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetTypeList() 获取资产类型枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetTypeList(array $AssetTypeList) 设置资产类型枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcList() 获取Vpc枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcList(array $VpcList) 设置Vpc枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAppIdList() 获取Appid枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppIdList(array $AppIdList) 设置Appid枚举
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDbAssetsResponse extends AbstractModel
{
    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array 资产总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var array 地域枚举
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionList;

    /**
     * @var array 资产类型枚举
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetTypeList;

    /**
     * @var array Vpc枚举
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcList;

    /**
     * @var array Appid枚举
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppIdList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Data 资产总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RegionList 地域枚举
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetTypeList 资产类型枚举
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VpcList Vpc枚举
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AppIdList Appid枚举
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
                $obj = new DBAssetVO();
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

        if (array_key_exists("AssetTypeList",$param) and $param["AssetTypeList"] !== null) {
            $this->AssetTypeList = [];
            foreach ($param["AssetTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AssetTypeList, $obj);
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

        if (array_key_exists("AppIdList",$param) and $param["AppIdList"] !== null) {
            $this->AppIdList = [];
            foreach ($param["AppIdList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AppIdList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
