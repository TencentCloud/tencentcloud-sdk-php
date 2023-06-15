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
 * DescribeClusterPodAssets返回参数结构体
 *
 * @method array getData() 获取列表
 * @method void setData(array $Data) 设置列表
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getPodStatusList() 获取集群pod状态枚举
 * @method void setPodStatusList(array $PodStatusList) 设置集群pod状态枚举
 * @method array getNamespaceList() 获取命名空间枚举
 * @method void setNamespaceList(array $NamespaceList) 设置命名空间枚举
 * @method array getRegionList() 获取地域枚举
 * @method void setRegionList(array $RegionList) 设置地域枚举
 * @method array getAppIdList() 获取租户枚举
 * @method void setAppIdList(array $AppIdList) 设置租户枚举
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterPodAssetsResponse extends AbstractModel
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
     * @var array 集群pod状态枚举
     */
    public $PodStatusList;

    /**
     * @var array 命名空间枚举
     */
    public $NamespaceList;

    /**
     * @var array 地域枚举
     */
    public $RegionList;

    /**
     * @var array 租户枚举
     */
    public $AppIdList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 列表
     * @param integer $TotalCount 总数
     * @param array $PodStatusList 集群pod状态枚举
     * @param array $NamespaceList 命名空间枚举
     * @param array $RegionList 地域枚举
     * @param array $AppIdList 租户枚举
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new AssetClusterPod();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PodStatusList",$param) and $param["PodStatusList"] !== null) {
            $this->PodStatusList = [];
            foreach ($param["PodStatusList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->PodStatusList, $obj);
            }
        }

        if (array_key_exists("NamespaceList",$param) and $param["NamespaceList"] !== null) {
            $this->NamespaceList = [];
            foreach ($param["NamespaceList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->NamespaceList, $obj);
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
