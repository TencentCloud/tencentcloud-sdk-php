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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端节点服务对象。
 *
 * @method string getEndPointServiceId() 获取终端节点服务ID
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID
 * @method string getVpcId() 获取VPCID。
 * @method void setVpcId(string $VpcId) 设置VPCID。
 * @method string getServiceOwner() 获取APPID。
 * @method void setServiceOwner(string $ServiceOwner) 设置APPID。
 * @method string getServiceName() 获取终端节点服务名称。
 * @method void setServiceName(string $ServiceName) 设置终端节点服务名称。
 * @method string getServiceVip() 获取后端服务的VIP。
 * @method void setServiceVip(string $ServiceVip) 设置后端服务的VIP。
 * @method string getServiceInstanceId() 获取后端服务的ID，比如lb-lip4e6bp。
 * @method void setServiceInstanceId(string $ServiceInstanceId) 设置后端服务的ID，比如lb-lip4e6bp。
 * @method boolean getAutoAcceptFlag() 获取是否自动接受。
 * @method void setAutoAcceptFlag(boolean $AutoAcceptFlag) 设置是否自动接受。
 * @method integer getEndPointCount() 获取关联的终端节点个数。
 * @method void setEndPointCount(integer $EndPointCount) 设置关联的终端节点个数。
 * @method array getEndPointSet() 获取终端节点对象数组。
 * @method void setEndPointSet(array $EndPointSet) 设置终端节点对象数组。
 * @method string getCreateTime() 获取创建时间。格式为YYYY-MM-DD HH:MM:SS字符串。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。格式为YYYY-MM-DD HH:MM:SS字符串。
 * @method string getServiceType() 获取挂载的PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡）。
 * @method void setServiceType(string $ServiceType) 设置挂载的PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡）。
 * @method string getCdcId() 获取CDC 集群唯一 ID
 * @method void setCdcId(string $CdcId) 设置CDC 集群唯一 ID
 * @method string getServiceUin() 获取终端节点服务Uin。
 * @method void setServiceUin(string $ServiceUin) 设置终端节点服务Uin。
 * @method integer getBusinessIpType() 获取服务IP类型
 * @method void setBusinessIpType(integer $BusinessIpType) 设置服务IP类型
 * @method array getTagSet() 获取标签键值对。	
 * @method void setTagSet(array $TagSet) 设置标签键值对。	
 */
class EndPointService extends AbstractModel
{
    /**
     * @var string 终端节点服务ID
     */
    public $EndPointServiceId;

    /**
     * @var string VPCID。
     */
    public $VpcId;

    /**
     * @var string APPID。
     */
    public $ServiceOwner;

    /**
     * @var string 终端节点服务名称。
     */
    public $ServiceName;

    /**
     * @var string 后端服务的VIP。
     */
    public $ServiceVip;

    /**
     * @var string 后端服务的ID，比如lb-lip4e6bp。
     */
    public $ServiceInstanceId;

    /**
     * @var boolean 是否自动接受。
     */
    public $AutoAcceptFlag;

    /**
     * @var integer 关联的终端节点个数。
     */
    public $EndPointCount;

    /**
     * @var array 终端节点对象数组。
     */
    public $EndPointSet;

    /**
     * @var string 创建时间。格式为YYYY-MM-DD HH:MM:SS字符串。
     */
    public $CreateTime;

    /**
     * @var string 挂载的PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡）。
     */
    public $ServiceType;

    /**
     * @var string CDC 集群唯一 ID
     */
    public $CdcId;

    /**
     * @var string 终端节点服务Uin。
     */
    public $ServiceUin;

    /**
     * @var integer 服务IP类型
     */
    public $BusinessIpType;

    /**
     * @var array 标签键值对。	
     */
    public $TagSet;

    /**
     * @param string $EndPointServiceId 终端节点服务ID
     * @param string $VpcId VPCID。
     * @param string $ServiceOwner APPID。
     * @param string $ServiceName 终端节点服务名称。
     * @param string $ServiceVip 后端服务的VIP。
     * @param string $ServiceInstanceId 后端服务的ID，比如lb-lip4e6bp。
     * @param boolean $AutoAcceptFlag 是否自动接受。
     * @param integer $EndPointCount 关联的终端节点个数。
     * @param array $EndPointSet 终端节点对象数组。
     * @param string $CreateTime 创建时间。格式为YYYY-MM-DD HH:MM:SS字符串。
     * @param string $ServiceType 挂载的PAAS服务类型，CLB（负载均衡），CDB（云数据库 MySQL），CRS（云数据库 Redis），GWLB（网关负载均衡）。
     * @param string $CdcId CDC 集群唯一 ID
     * @param string $ServiceUin 终端节点服务Uin。
     * @param integer $BusinessIpType 服务IP类型
     * @param array $TagSet 标签键值对。	
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
        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ServiceOwner",$param) and $param["ServiceOwner"] !== null) {
            $this->ServiceOwner = $param["ServiceOwner"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("ServiceInstanceId",$param) and $param["ServiceInstanceId"] !== null) {
            $this->ServiceInstanceId = $param["ServiceInstanceId"];
        }

        if (array_key_exists("AutoAcceptFlag",$param) and $param["AutoAcceptFlag"] !== null) {
            $this->AutoAcceptFlag = $param["AutoAcceptFlag"];
        }

        if (array_key_exists("EndPointCount",$param) and $param["EndPointCount"] !== null) {
            $this->EndPointCount = $param["EndPointCount"];
        }

        if (array_key_exists("EndPointSet",$param) and $param["EndPointSet"] !== null) {
            $this->EndPointSet = [];
            foreach ($param["EndPointSet"] as $key => $value){
                $obj = new EndPoint();
                $obj->deserialize($value);
                array_push($this->EndPointSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("ServiceUin",$param) and $param["ServiceUin"] !== null) {
            $this->ServiceUin = $param["ServiceUin"];
        }

        if (array_key_exists("BusinessIpType",$param) and $param["BusinessIpType"] !== null) {
            $this->BusinessIpType = $param["BusinessIpType"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
