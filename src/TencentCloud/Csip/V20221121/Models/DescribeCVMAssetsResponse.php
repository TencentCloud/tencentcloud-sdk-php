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
 * @method integer getTotal() 获取总数
 * @method void setTotal(integer $Total) 设置总数
 * @method array getData() 获取机器列表
 * @method void setData(array $Data) 设置机器列表
 * @method array getRegionList() 获取地域列表
 * @method void setRegionList(array $RegionList) 设置地域列表
 * @method array getDefenseStatusList() 获取防护状态
 * @method void setDefenseStatusList(array $DefenseStatusList) 设置防护状态
 * @method array getVpcList() 获取vpc枚举
 * @method void setVpcList(array $VpcList) 设置vpc枚举
 * @method array getAssetTypeList() 获取资产类型枚举
 * @method void setAssetTypeList(array $AssetTypeList) 设置资产类型枚举
 * @method array getSystemTypeList() 获取操作系统枚举
 * @method void setSystemTypeList(array $SystemTypeList) 设置操作系统枚举
 * @method array getIpTypeList() 获取ip列表
 * @method void setIpTypeList(array $IpTypeList) 设置ip列表
 * @method array getAppIdList() 获取appid列表
 * @method void setAppIdList(array $AppIdList) 设置appid列表
 * @method array getZoneList() 获取可用区列表
 * @method void setZoneList(array $ZoneList) 设置可用区列表
 * @method array getOsList() 获取os列表
 * @method void setOsList(array $OsList) 设置os列表
 * @method array getAssetMapInstanceTypeList() 获取资产类型和实例类型的对应关系
 * @method void setAssetMapInstanceTypeList(array $AssetMapInstanceTypeList) 设置资产类型和实例类型的对应关系
 * @method array getPublicPrivateAttr() 获取公网内网枚举
 * @method void setPublicPrivateAttr(array $PublicPrivateAttr) 设置公网内网枚举
 * @method array getProtectStatusList() 获取主机防护状态
 * @method void setProtectStatusList(array $ProtectStatusList) 设置主机防护状态
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCVMAssetsResponse extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $Total;

    /**
     * @var array 机器列表
     */
    public $Data;

    /**
     * @var array 地域列表
     */
    public $RegionList;

    /**
     * @var array 防护状态
     */
    public $DefenseStatusList;

    /**
     * @var array vpc枚举
     */
    public $VpcList;

    /**
     * @var array 资产类型枚举
     */
    public $AssetTypeList;

    /**
     * @var array 操作系统枚举
     */
    public $SystemTypeList;

    /**
     * @var array ip列表
     */
    public $IpTypeList;

    /**
     * @var array appid列表
     */
    public $AppIdList;

    /**
     * @var array 可用区列表
     */
    public $ZoneList;

    /**
     * @var array os列表
     */
    public $OsList;

    /**
     * @var array 资产类型和实例类型的对应关系
     */
    public $AssetMapInstanceTypeList;

    /**
     * @var array 公网内网枚举
     */
    public $PublicPrivateAttr;

    /**
     * @var array 主机防护状态
     */
    public $ProtectStatusList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 总数
     * @param array $Data 机器列表
     * @param array $RegionList 地域列表
     * @param array $DefenseStatusList 防护状态
     * @param array $VpcList vpc枚举
     * @param array $AssetTypeList 资产类型枚举
     * @param array $SystemTypeList 操作系统枚举
     * @param array $IpTypeList ip列表
     * @param array $AppIdList appid列表
     * @param array $ZoneList 可用区列表
     * @param array $OsList os列表
     * @param array $AssetMapInstanceTypeList 资产类型和实例类型的对应关系
     * @param array $PublicPrivateAttr 公网内网枚举
     * @param array $ProtectStatusList 主机防护状态
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("OsList",$param) and $param["OsList"] !== null) {
            $this->OsList = [];
            foreach ($param["OsList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->OsList, $obj);
            }
        }

        if (array_key_exists("AssetMapInstanceTypeList",$param) and $param["AssetMapInstanceTypeList"] !== null) {
            $this->AssetMapInstanceTypeList = [];
            foreach ($param["AssetMapInstanceTypeList"] as $key => $value){
                $obj = new AssetInstanceTypeMap();
                $obj->deserialize($value);
                array_push($this->AssetMapInstanceTypeList, $obj);
            }
        }

        if (array_key_exists("PublicPrivateAttr",$param) and $param["PublicPrivateAttr"] !== null) {
            $this->PublicPrivateAttr = [];
            foreach ($param["PublicPrivateAttr"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->PublicPrivateAttr, $obj);
            }
        }

        if (array_key_exists("ProtectStatusList",$param) and $param["ProtectStatusList"] !== null) {
            $this->ProtectStatusList = [];
            foreach ($param["ProtectStatusList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->ProtectStatusList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
