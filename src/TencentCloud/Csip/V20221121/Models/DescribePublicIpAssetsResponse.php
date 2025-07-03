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
 * DescribePublicIpAssets返回参数结构体
 *
 * @method array getData() 获取列表
 * @method void setData(array $Data) 设置列表
 * @method integer getTotal() 获取总数
 * @method void setTotal(integer $Total) 设置总数
 * @method array getAssetLocationList() 获取资产归属地
 * @method void setAssetLocationList(array $AssetLocationList) 设置资产归属地
 * @method array getIpTypeList() 获取ip列表枚举
 * @method void setIpTypeList(array $IpTypeList) 设置ip列表枚举
 * @method array getRegionList() 获取地域列表枚举
 * @method void setRegionList(array $RegionList) 设置地域列表枚举
 * @method array getDefenseStatusList() 获取防护枚举
 * @method void setDefenseStatusList(array $DefenseStatusList) 设置防护枚举
 * @method array getAssetTypeList() 获取资产类型枚举
 * @method void setAssetTypeList(array $AssetTypeList) 设置资产类型枚举
 * @method array getAppIdList() 获取AppId枚举
 * @method void setAppIdList(array $AppIdList) 设置AppId枚举
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePublicIpAssetsResponse extends AbstractModel
{
    /**
     * @var array 列表
     */
    public $Data;

    /**
     * @var integer 总数
     */
    public $Total;

    /**
     * @var array 资产归属地
     */
    public $AssetLocationList;

    /**
     * @var array ip列表枚举
     */
    public $IpTypeList;

    /**
     * @var array 地域列表枚举
     */
    public $RegionList;

    /**
     * @var array 防护枚举
     */
    public $DefenseStatusList;

    /**
     * @var array 资产类型枚举
     */
    public $AssetTypeList;

    /**
     * @var array AppId枚举
     */
    public $AppIdList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 列表
     * @param integer $Total 总数
     * @param array $AssetLocationList 资产归属地
     * @param array $IpTypeList ip列表枚举
     * @param array $RegionList 地域列表枚举
     * @param array $DefenseStatusList 防护枚举
     * @param array $AssetTypeList 资产类型枚举
     * @param array $AppIdList AppId枚举
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new IpAssetListVO();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AssetLocationList",$param) and $param["AssetLocationList"] !== null) {
            $this->AssetLocationList = [];
            foreach ($param["AssetLocationList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AssetLocationList, $obj);
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

        if (array_key_exists("AssetTypeList",$param) and $param["AssetTypeList"] !== null) {
            $this->AssetTypeList = [];
            foreach ($param["AssetTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AssetTypeList, $obj);
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
