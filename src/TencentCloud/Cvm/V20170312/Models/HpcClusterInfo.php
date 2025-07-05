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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高性能计算集群
 *
 * @method string getHpcClusterId() 获取高性能计算集群ID
 * @method void setHpcClusterId(string $HpcClusterId) 设置高性能计算集群ID
 * @method string getName() 获取高性能计算集群名
 * @method void setName(string $Name) 设置高性能计算集群名
 * @method string getRemark() 获取高性能计算集群备注
 * @method void setRemark(string $Remark) 设置高性能计算集群备注
 * @method integer getCvmQuotaTotal() 获取集群下设备容量
 * @method void setCvmQuotaTotal(integer $CvmQuotaTotal) 设置集群下设备容量
 * @method string getZone() 获取集群所在可用区
 * @method void setZone(string $Zone) 设置集群所在可用区
 * @method integer getCurrentNum() 获取集群当前已有设备量
 * @method void setCurrentNum(integer $CurrentNum) 设置集群当前已有设备量
 * @method string getCreateTime() 获取集群创建时间
 * @method void setCreateTime(string $CreateTime) 设置集群创建时间
 * @method array getInstanceIds() 获取集群内实例ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置集群内实例ID列表
 * @method string getHpcClusterType() 获取高性能计算集群类型。
 * @method void setHpcClusterType(string $HpcClusterType) 设置高性能计算集群类型。
 * @method string getHpcClusterBusinessId() 获取高性能计算集群对应的业务场景标识，当前只支持CDC。	
 * @method void setHpcClusterBusinessId(string $HpcClusterBusinessId) 设置高性能计算集群对应的业务场景标识，当前只支持CDC。	
 * @method integer getHpcClusterNetMode() 获取高性能计算集群网络模式
 * @method void setHpcClusterNetMode(integer $HpcClusterNetMode) 设置高性能计算集群网络模式
 * @method array getTags() 获取高性能计算集群关联的标签列表
 * @method void setTags(array $Tags) 设置高性能计算集群关联的标签列表
 */
class HpcClusterInfo extends AbstractModel
{
    /**
     * @var string 高性能计算集群ID
     */
    public $HpcClusterId;

    /**
     * @var string 高性能计算集群名
     */
    public $Name;

    /**
     * @var string 高性能计算集群备注
     */
    public $Remark;

    /**
     * @var integer 集群下设备容量
     */
    public $CvmQuotaTotal;

    /**
     * @var string 集群所在可用区
     */
    public $Zone;

    /**
     * @var integer 集群当前已有设备量
     */
    public $CurrentNum;

    /**
     * @var string 集群创建时间
     */
    public $CreateTime;

    /**
     * @var array 集群内实例ID列表
     */
    public $InstanceIds;

    /**
     * @var string 高性能计算集群类型。
     */
    public $HpcClusterType;

    /**
     * @var string 高性能计算集群对应的业务场景标识，当前只支持CDC。	
     */
    public $HpcClusterBusinessId;

    /**
     * @var integer 高性能计算集群网络模式
     */
    public $HpcClusterNetMode;

    /**
     * @var array 高性能计算集群关联的标签列表
     */
    public $Tags;

    /**
     * @param string $HpcClusterId 高性能计算集群ID
     * @param string $Name 高性能计算集群名
     * @param string $Remark 高性能计算集群备注
     * @param integer $CvmQuotaTotal 集群下设备容量
     * @param string $Zone 集群所在可用区
     * @param integer $CurrentNum 集群当前已有设备量
     * @param string $CreateTime 集群创建时间
     * @param array $InstanceIds 集群内实例ID列表
     * @param string $HpcClusterType 高性能计算集群类型。
     * @param string $HpcClusterBusinessId 高性能计算集群对应的业务场景标识，当前只支持CDC。	
     * @param integer $HpcClusterNetMode 高性能计算集群网络模式
     * @param array $Tags 高性能计算集群关联的标签列表
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
        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CvmQuotaTotal",$param) and $param["CvmQuotaTotal"] !== null) {
            $this->CvmQuotaTotal = $param["CvmQuotaTotal"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("HpcClusterType",$param) and $param["HpcClusterType"] !== null) {
            $this->HpcClusterType = $param["HpcClusterType"];
        }

        if (array_key_exists("HpcClusterBusinessId",$param) and $param["HpcClusterBusinessId"] !== null) {
            $this->HpcClusterBusinessId = $param["HpcClusterBusinessId"];
        }

        if (array_key_exists("HpcClusterNetMode",$param) and $param["HpcClusterNetMode"] !== null) {
            $this->HpcClusterNetMode = $param["HpcClusterNetMode"];
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
