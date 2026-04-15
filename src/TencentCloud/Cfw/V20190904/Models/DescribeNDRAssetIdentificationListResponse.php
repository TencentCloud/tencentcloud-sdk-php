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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNDRAssetIdentificationList返回参数结构体
 *
 * @method integer getTotal() 获取符合查询条件的总条数
 * @method void setTotal(integer $Total) 设置符合查询条件的总条数
 * @method array getData() 获取查询结果列表
 * @method void setData(array $Data) 设置查询结果列表
 * @method array getAssetCategoryStats() 获取服务类型统计结果
 * @method void setAssetCategoryStats(array $AssetCategoryStats) 设置服务类型统计结果
 * @method array getRegionOptions() 获取地域可选项
 * @method void setRegionOptions(array $RegionOptions) 设置地域可选项
 * @method array getIpVersionOptions() 获取IP版本可选项
 * @method void setIpVersionOptions(array $IpVersionOptions) 设置IP版本可选项
 * @method array getIpTypeOptions() 获取IP类型可选项
 * @method void setIpTypeOptions(array $IpTypeOptions) 设置IP类型可选项
 * @method array getAssetCategoryOptions() 获取服务类型可选项
 * @method void setAssetCategoryOptions(array $AssetCategoryOptions) 设置服务类型可选项
 * @method array getIdentificationSourceOptions() 获取识别来源可选项
 * @method void setIdentificationSourceOptions(array $IdentificationSourceOptions) 设置识别来源可选项
 * @method array getProtocolOptions() 获取协议可选项
 * @method void setProtocolOptions(array $ProtocolOptions) 设置协议可选项
 * @method array getInstanceTypeOptions() 获取实例类型可选项
 * @method void setInstanceTypeOptions(array $InstanceTypeOptions) 设置实例类型可选项
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNDRAssetIdentificationListResponse extends AbstractModel
{
    /**
     * @var integer 符合查询条件的总条数
     */
    public $Total;

    /**
     * @var array 查询结果列表
     */
    public $Data;

    /**
     * @var array 服务类型统计结果
     */
    public $AssetCategoryStats;

    /**
     * @var array 地域可选项
     */
    public $RegionOptions;

    /**
     * @var array IP版本可选项
     */
    public $IpVersionOptions;

    /**
     * @var array IP类型可选项
     */
    public $IpTypeOptions;

    /**
     * @var array 服务类型可选项
     */
    public $AssetCategoryOptions;

    /**
     * @var array 识别来源可选项
     */
    public $IdentificationSourceOptions;

    /**
     * @var array 协议可选项
     */
    public $ProtocolOptions;

    /**
     * @var array 实例类型可选项
     */
    public $InstanceTypeOptions;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 符合查询条件的总条数
     * @param array $Data 查询结果列表
     * @param array $AssetCategoryStats 服务类型统计结果
     * @param array $RegionOptions 地域可选项
     * @param array $IpVersionOptions IP版本可选项
     * @param array $IpTypeOptions IP类型可选项
     * @param array $AssetCategoryOptions 服务类型可选项
     * @param array $IdentificationSourceOptions 识别来源可选项
     * @param array $ProtocolOptions 协议可选项
     * @param array $InstanceTypeOptions 实例类型可选项
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
                $obj = new NDRAssetServiceInfo();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("AssetCategoryStats",$param) and $param["AssetCategoryStats"] !== null) {
            $this->AssetCategoryStats = [];
            foreach ($param["AssetCategoryStats"] as $key => $value){
                $obj = new NDRAssetCategoryStats();
                $obj->deserialize($value);
                array_push($this->AssetCategoryStats, $obj);
            }
        }

        if (array_key_exists("RegionOptions",$param) and $param["RegionOptions"] !== null) {
            $this->RegionOptions = [];
            foreach ($param["RegionOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->RegionOptions, $obj);
            }
        }

        if (array_key_exists("IpVersionOptions",$param) and $param["IpVersionOptions"] !== null) {
            $this->IpVersionOptions = [];
            foreach ($param["IpVersionOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->IpVersionOptions, $obj);
            }
        }

        if (array_key_exists("IpTypeOptions",$param) and $param["IpTypeOptions"] !== null) {
            $this->IpTypeOptions = [];
            foreach ($param["IpTypeOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->IpTypeOptions, $obj);
            }
        }

        if (array_key_exists("AssetCategoryOptions",$param) and $param["AssetCategoryOptions"] !== null) {
            $this->AssetCategoryOptions = [];
            foreach ($param["AssetCategoryOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->AssetCategoryOptions, $obj);
            }
        }

        if (array_key_exists("IdentificationSourceOptions",$param) and $param["IdentificationSourceOptions"] !== null) {
            $this->IdentificationSourceOptions = [];
            foreach ($param["IdentificationSourceOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->IdentificationSourceOptions, $obj);
            }
        }

        if (array_key_exists("ProtocolOptions",$param) and $param["ProtocolOptions"] !== null) {
            $this->ProtocolOptions = [];
            foreach ($param["ProtocolOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->ProtocolOptions, $obj);
            }
        }

        if (array_key_exists("InstanceTypeOptions",$param) and $param["InstanceTypeOptions"] !== null) {
            $this->InstanceTypeOptions = [];
            foreach ($param["InstanceTypeOptions"] as $key => $value){
                $obj = new FieldOption();
                $obj->deserialize($value);
                array_push($this->InstanceTypeOptions, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
