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
 * @method array getZoneIds() 获取<p>多可用区部署选择三个可用区，示例[200002,200003,200004]<br>单可用区部署选择一个可用区，示例[200002]</p><p>当选择PULSAR.P2.MINI1 时只支持两个可用区，其他支持三个可用区</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>多可用区部署选择三个可用区，示例[200002,200003,200004]<br>单可用区部署选择一个可用区，示例[200002]</p><p>当选择PULSAR.P2.MINI1 时只支持两个可用区，其他支持三个可用区</p>
 * @method string getProductName() 获取<p>集群规格代号<br>参考 <a href="https://cloud.tencent.com/document/product/1179/83705">专业集群规格</a></p>
 * @method void setProductName(string $ProductName) 设置<p>集群规格代号<br>参考 <a href="https://cloud.tencent.com/document/product/1179/83705">专业集群规格</a></p>
 * @method integer getAutoRenewFlag() 获取<p>1: true，开启自动按月续费</p><p>0: false，关闭自动按月续费</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>1: true，开启自动按月续费</p><p>0: false，关闭自动按月续费</p>
 * @method integer getTimeSpan() 获取<p>购买时长，取值范围：1～50</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>购买时长，取值范围：1～50</p>
 * @method string getClusterName() 获取<p>集群名称不能为空，支持数字、字母、中文以及符号 “-_=:.”，长度不超过64个字符</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称不能为空，支持数字、字母、中文以及符号 “-_=:.”，长度不超过64个字符</p>
 * @method integer getAutoVoucher() 获取<p>是否自动选择代金券 1是 0否 默认为0</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动选择代金券 1是 0否 默认为0</p>
 * @method integer getStorageSize() 获取<p>存储规格<br>参考 <a href="https://cloud.tencent.com/document/product/1179/83705">专业集群规格</a></p>
 * @method void setStorageSize(integer $StorageSize) 设置<p>存储规格<br>参考 <a href="https://cloud.tencent.com/document/product/1179/83705">专业集群规格</a></p>
 * @method VpcInfo getVpc() 获取<p>vpc网络标签</p>
 * @method void setVpc(VpcInfo $Vpc) 设置<p>vpc网络标签</p>
 * @method array getTags() 获取<p>集群的标签列表(已废弃)</p>
 * @method void setTags(array $Tags) 设置<p>集群的标签列表(已废弃)</p>
 * @method string getInstanceVersion() 获取<p>集群版本信息</p>
 * @method void setInstanceVersion(string $InstanceVersion) 设置<p>集群版本信息</p>
 */
class CreateProClusterRequest extends AbstractModel
{
    /**
     * @var array <p>多可用区部署选择三个可用区，示例[200002,200003,200004]<br>单可用区部署选择一个可用区，示例[200002]</p><p>当选择PULSAR.P2.MINI1 时只支持两个可用区，其他支持三个可用区</p>
     */
    public $ZoneIds;

    /**
     * @var string <p>集群规格代号<br>参考 <a href="https://cloud.tencent.com/document/product/1179/83705">专业集群规格</a></p>
     */
    public $ProductName;

    /**
     * @var integer <p>1: true，开启自动按月续费</p><p>0: false，关闭自动按月续费</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>购买时长，取值范围：1～50</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>集群名称不能为空，支持数字、字母、中文以及符号 “-_=:.”，长度不超过64个字符</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>是否自动选择代金券 1是 0否 默认为0</p>
     */
    public $AutoVoucher;

    /**
     * @var integer <p>存储规格<br>参考 <a href="https://cloud.tencent.com/document/product/1179/83705">专业集群规格</a></p>
     */
    public $StorageSize;

    /**
     * @var VpcInfo <p>vpc网络标签</p>
     */
    public $Vpc;

    /**
     * @var array <p>集群的标签列表(已废弃)</p>
     */
    public $Tags;

    /**
     * @var string <p>集群版本信息</p>
     */
    public $InstanceVersion;

    /**
     * @param array $ZoneIds <p>多可用区部署选择三个可用区，示例[200002,200003,200004]<br>单可用区部署选择一个可用区，示例[200002]</p><p>当选择PULSAR.P2.MINI1 时只支持两个可用区，其他支持三个可用区</p>
     * @param string $ProductName <p>集群规格代号<br>参考 <a href="https://cloud.tencent.com/document/product/1179/83705">专业集群规格</a></p>
     * @param integer $AutoRenewFlag <p>1: true，开启自动按月续费</p><p>0: false，关闭自动按月续费</p>
     * @param integer $TimeSpan <p>购买时长，取值范围：1～50</p>
     * @param string $ClusterName <p>集群名称不能为空，支持数字、字母、中文以及符号 “-_=:.”，长度不超过64个字符</p>
     * @param integer $AutoVoucher <p>是否自动选择代金券 1是 0否 默认为0</p>
     * @param integer $StorageSize <p>存储规格<br>参考 <a href="https://cloud.tencent.com/document/product/1179/83705">专业集群规格</a></p>
     * @param VpcInfo $Vpc <p>vpc网络标签</p>
     * @param array $Tags <p>集群的标签列表(已废弃)</p>
     * @param string $InstanceVersion <p>集群版本信息</p>
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

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }
    }
}
