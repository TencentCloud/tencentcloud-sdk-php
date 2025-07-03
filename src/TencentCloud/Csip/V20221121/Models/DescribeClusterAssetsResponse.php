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
 * DescribeClusterAssets返回参数结构体
 *
 * @method array getData() 获取列表
 * @method void setData(array $Data) 设置列表
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getClusterTypeList() 获取集群类型枚举
 * @method void setClusterTypeList(array $ClusterTypeList) 设置集群类型枚举
 * @method array getClusterStatusList() 获取集群状态枚举
 * @method void setClusterStatusList(array $ClusterStatusList) 设置集群状态枚举
 * @method array getComponentStatusList() 获取组件状态枚举
 * @method void setComponentStatusList(array $ComponentStatusList) 设置组件状态枚举
 * @method array getVpcList() 获取私有网络枚举
 * @method void setVpcList(array $VpcList) 设置私有网络枚举
 * @method array getRegionList() 获取地域枚举
 * @method void setRegionList(array $RegionList) 设置地域枚举
 * @method array getAppIdList() 获取租户枚举
 * @method void setAppIdList(array $AppIdList) 设置租户枚举
 * @method array getProtectStatusList() 获取集群防护状态枚举
 * @method void setProtectStatusList(array $ProtectStatusList) 设置集群防护状态枚举
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterAssetsResponse extends AbstractModel
{
    /**
     * @var array 列表
     */
    public $Data;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 集群类型枚举
     */
    public $ClusterTypeList;

    /**
     * @var array 集群状态枚举
     */
    public $ClusterStatusList;

    /**
     * @var array 组件状态枚举
     */
    public $ComponentStatusList;

    /**
     * @var array 私有网络枚举
     */
    public $VpcList;

    /**
     * @var array 地域枚举
     */
    public $RegionList;

    /**
     * @var array 租户枚举
     */
    public $AppIdList;

    /**
     * @var array 集群防护状态枚举
     */
    public $ProtectStatusList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 列表
     * @param integer $TotalCount 总数
     * @param array $ClusterTypeList 集群类型枚举
     * @param array $ClusterStatusList 集群状态枚举
     * @param array $ComponentStatusList 组件状态枚举
     * @param array $VpcList 私有网络枚举
     * @param array $RegionList 地域枚举
     * @param array $AppIdList 租户枚举
     * @param array $ProtectStatusList 集群防护状态枚举
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
                $obj = new AssetCluster();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ClusterTypeList",$param) and $param["ClusterTypeList"] !== null) {
            $this->ClusterTypeList = [];
            foreach ($param["ClusterTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->ClusterTypeList, $obj);
            }
        }

        if (array_key_exists("ClusterStatusList",$param) and $param["ClusterStatusList"] !== null) {
            $this->ClusterStatusList = [];
            foreach ($param["ClusterStatusList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->ClusterStatusList, $obj);
            }
        }

        if (array_key_exists("ComponentStatusList",$param) and $param["ComponentStatusList"] !== null) {
            $this->ComponentStatusList = [];
            foreach ($param["ComponentStatusList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->ComponentStatusList, $obj);
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

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = [];
            foreach ($param["RegionList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->RegionList, $obj);
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
