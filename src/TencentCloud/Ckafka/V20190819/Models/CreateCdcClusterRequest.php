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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCdcCluster请求参数结构体
 *
 * @method string getCdcId() 获取cdc的id
 * @method void setCdcId(string $CdcId) 设置cdc的id
 * @method string getCdcVpcId() 获取vpcId,一个地域只有唯一一个vpcid用于CDC
 * @method void setCdcVpcId(string $CdcVpcId) 设置vpcId,一个地域只有唯一一个vpcid用于CDC
 * @method string getCdcSubnetId() 获取每个CDC集群有唯一一个子网ID
 * @method void setCdcSubnetId(string $CdcSubnetId) 设置每个CDC集群有唯一一个子网ID
 * @method integer getZoneId() 获取所在可用区ID
 * @method void setZoneId(integer $ZoneId) 设置所在可用区ID
 * @method integer getBandwidth() 获取cdc集群的总带宽
 * @method void setBandwidth(integer $Bandwidth) 设置cdc集群的总带宽
 * @method integer getDiskSize() 获取cdc集群的总磁盘
 * @method void setDiskSize(integer $DiskSize) 设置cdc集群的总磁盘
 * @method string getDiskType() 获取数据盘类型
 * @method void setDiskType(string $DiskType) 设置数据盘类型
 * @method string getSystemDiskType() 获取系统盘类型
 * @method void setSystemDiskType(string $SystemDiskType) 设置系统盘类型
 */
class CreateCdcClusterRequest extends AbstractModel
{
    /**
     * @var string cdc的id
     */
    public $CdcId;

    /**
     * @var string vpcId,一个地域只有唯一一个vpcid用于CDC
     */
    public $CdcVpcId;

    /**
     * @var string 每个CDC集群有唯一一个子网ID
     */
    public $CdcSubnetId;

    /**
     * @var integer 所在可用区ID
     */
    public $ZoneId;

    /**
     * @var integer cdc集群的总带宽
     */
    public $Bandwidth;

    /**
     * @var integer cdc集群的总磁盘
     */
    public $DiskSize;

    /**
     * @var string 数据盘类型
     */
    public $DiskType;

    /**
     * @var string 系统盘类型
     */
    public $SystemDiskType;

    /**
     * @param string $CdcId cdc的id
     * @param string $CdcVpcId vpcId,一个地域只有唯一一个vpcid用于CDC
     * @param string $CdcSubnetId 每个CDC集群有唯一一个子网ID
     * @param integer $ZoneId 所在可用区ID
     * @param integer $Bandwidth cdc集群的总带宽
     * @param integer $DiskSize cdc集群的总磁盘
     * @param string $DiskType 数据盘类型
     * @param string $SystemDiskType 系统盘类型
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
        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("CdcVpcId",$param) and $param["CdcVpcId"] !== null) {
            $this->CdcVpcId = $param["CdcVpcId"];
        }

        if (array_key_exists("CdcSubnetId",$param) and $param["CdcSubnetId"] !== null) {
            $this->CdcSubnetId = $param["CdcSubnetId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("SystemDiskType",$param) and $param["SystemDiskType"] !== null) {
            $this->SystemDiskType = $param["SystemDiskType"];
        }
    }
}
