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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProCluster请求参数结构体
 *
 * @method array getZoneIds() 获取多可用区部署选择三个可用区，示例[200002,200003,200004]

单可用区部署选择一个可用区，示例[200002]
 * @method void setZoneIds(array $ZoneIds) 设置多可用区部署选择三个可用区，示例[200002,200003,200004]

单可用区部署选择一个可用区，示例[200002]
 * @method string getProductName() 获取集群规格代号
参考 [专业集群规格](https://cloud.tencent.com/document/product/1179/83705)
 * @method void setProductName(string $ProductName) 设置集群规格代号
参考 [专业集群规格](https://cloud.tencent.com/document/product/1179/83705)
 * @method integer getAutoRenewFlag() 获取1: true，开启自动按月续费

0: false，关闭自动按月续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置1: true，开启自动按月续费

0: false，关闭自动按月续费
 * @method integer getTimeSpan() 获取购买时长，取值范围：1～50
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长，取值范围：1～50
 * @method string getClusterName() 获取集群名称，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
 * @method void setClusterName(string $ClusterName) 设置集群名称，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
 * @method integer getAutoVoucher() 获取是否自动选择代金券 1是 0否 默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券 1是 0否 默认为0
 * @method integer getStorageSize() 获取存储规格
参考 [专业集群规格](https://cloud.tencent.com/document/product/1179/83705)
 * @method void setStorageSize(integer $StorageSize) 设置存储规格
参考 [专业集群规格](https://cloud.tencent.com/document/product/1179/83705)
 * @method VpcInfo getVpc() 获取vpc网络标签
 * @method void setVpc(VpcInfo $Vpc) 设置vpc网络标签
 * @method array getTags() 获取集群的标签列表(已废弃)
 * @method void setTags(array $Tags) 设置集群的标签列表(已废弃)
 */
class CreateProClusterRequest extends AbstractModel
{
    /**
     * @var array 多可用区部署选择三个可用区，示例[200002,200003,200004]

单可用区部署选择一个可用区，示例[200002]
     */
    public $ZoneIds;

    /**
     * @var string 集群规格代号
参考 [专业集群规格](https://cloud.tencent.com/document/product/1179/83705)
     */
    public $ProductName;

    /**
     * @var integer 1: true，开启自动按月续费

0: false，关闭自动按月续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer 购买时长，取值范围：1～50
     */
    public $TimeSpan;

    /**
     * @var string 集群名称，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
     */
    public $ClusterName;

    /**
     * @var integer 是否自动选择代金券 1是 0否 默认为0
     */
    public $AutoVoucher;

    /**
     * @var integer 存储规格
参考 [专业集群规格](https://cloud.tencent.com/document/product/1179/83705)
     */
    public $StorageSize;

    /**
     * @var VpcInfo vpc网络标签
     */
    public $Vpc;

    /**
     * @var array 集群的标签列表(已废弃)
     */
    public $Tags;

    /**
     * @param array $ZoneIds 多可用区部署选择三个可用区，示例[200002,200003,200004]

单可用区部署选择一个可用区，示例[200002]
     * @param string $ProductName 集群规格代号
参考 [专业集群规格](https://cloud.tencent.com/document/product/1179/83705)
     * @param integer $AutoRenewFlag 1: true，开启自动按月续费

0: false，关闭自动按月续费
     * @param integer $TimeSpan 购买时长，取值范围：1～50
     * @param string $ClusterName 集群名称，不支持中字以及除了短线和下划线外的特殊字符且不超过64个字符。
     * @param integer $AutoVoucher 是否自动选择代金券 1是 0否 默认为0
     * @param integer $StorageSize 存储规格
参考 [专业集群规格](https://cloud.tencent.com/document/product/1179/83705)
     * @param VpcInfo $Vpc vpc网络标签
     * @param array $Tags 集群的标签列表(已废弃)
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
        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = new VpcInfo();
            $this->Vpc->deserialize($param["Vpc"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
