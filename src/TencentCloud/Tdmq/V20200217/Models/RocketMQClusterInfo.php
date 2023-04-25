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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RocketMQ集群基本信息
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method integer getCreateTime() 获取创建时间，毫秒为单位
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，毫秒为单位
 * @method string getRemark() 获取集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicEndPoint() 获取公网接入地址
 * @method void setPublicEndPoint(string $PublicEndPoint) 设置公网接入地址
 * @method string getVpcEndPoint() 获取VPC接入地址
 * @method void setVpcEndPoint(string $VpcEndPoint) 设置VPC接入地址
 * @method boolean getSupportNamespaceEndpoint() 获取是否支持命名空间接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportNamespaceEndpoint(boolean $SupportNamespaceEndpoint) 设置是否支持命名空间接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcs() 获取VPC信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcs(array $Vpcs) 设置VPC信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVip() 获取是否为专享实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVip(boolean $IsVip) 设置是否为专享实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRocketMQFlag() 获取Rocketmq集群标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRocketMQFlag(boolean $RocketMQFlag) 设置Rocketmq集群标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取计费状态，1表示正常，2表示已停服，3表示已销毁
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置计费状态，1表示正常，2表示已停服，3表示已销毁
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsolateTime() 获取欠费停服时间，毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateTime(integer $IsolateTime) 设置欠费停服时间，毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpPublicEndpoint() 获取HTTP协议公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpPublicEndpoint(string $HttpPublicEndpoint) 设置HTTP协议公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpVpcEndpoint() 获取HTTP协议VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpVpcEndpoint(string $HttpVpcEndpoint) 设置HTTP协议VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternalEndpoint() 获取TCP内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalEndpoint(string $InternalEndpoint) 设置TCP内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpInternalEndpoint() 获取HTTP协议内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpInternalEndpoint(string $HttpInternalEndpoint) 设置HTTP协议内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQClusterInfo extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var integer 创建时间，毫秒为单位
     */
    public $CreateTime;

    /**
     * @var string 集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 公网接入地址
     */
    public $PublicEndPoint;

    /**
     * @var string VPC接入地址
     */
    public $VpcEndPoint;

    /**
     * @var boolean 是否支持命名空间接入点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportNamespaceEndpoint;

    /**
     * @var array VPC信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vpcs;

    /**
     * @var boolean 是否为专享实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVip;

    /**
     * @var boolean Rocketmq集群标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RocketMQFlag;

    /**
     * @var integer 计费状态，1表示正常，2表示已停服，3表示已销毁
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 欠费停服时间，毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateTime;

    /**
     * @var string HTTP协议公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpPublicEndpoint;

    /**
     * @var string HTTP协议VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpVpcEndpoint;

    /**
     * @var string TCP内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalEndpoint;

    /**
     * @var string HTTP协议内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpInternalEndpoint;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $Region 地域信息
     * @param integer $CreateTime 创建时间，毫秒为单位
     * @param string $Remark 集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicEndPoint 公网接入地址
     * @param string $VpcEndPoint VPC接入地址
     * @param boolean $SupportNamespaceEndpoint 是否支持命名空间接入点
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Vpcs VPC信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVip 是否为专享实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RocketMQFlag Rocketmq集群标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 计费状态，1表示正常，2表示已停服，3表示已销毁
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsolateTime 欠费停服时间，毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpPublicEndpoint HTTP协议公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpVpcEndpoint HTTP协议VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternalEndpoint TCP内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpInternalEndpoint HTTP协议内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PublicEndPoint",$param) and $param["PublicEndPoint"] !== null) {
            $this->PublicEndPoint = $param["PublicEndPoint"];
        }

        if (array_key_exists("VpcEndPoint",$param) and $param["VpcEndPoint"] !== null) {
            $this->VpcEndPoint = $param["VpcEndPoint"];
        }

        if (array_key_exists("SupportNamespaceEndpoint",$param) and $param["SupportNamespaceEndpoint"] !== null) {
            $this->SupportNamespaceEndpoint = $param["SupportNamespaceEndpoint"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new VpcConfig();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("RocketMQFlag",$param) and $param["RocketMQFlag"] !== null) {
            $this->RocketMQFlag = $param["RocketMQFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("HttpPublicEndpoint",$param) and $param["HttpPublicEndpoint"] !== null) {
            $this->HttpPublicEndpoint = $param["HttpPublicEndpoint"];
        }

        if (array_key_exists("HttpVpcEndpoint",$param) and $param["HttpVpcEndpoint"] !== null) {
            $this->HttpVpcEndpoint = $param["HttpVpcEndpoint"];
        }

        if (array_key_exists("InternalEndpoint",$param) and $param["InternalEndpoint"] !== null) {
            $this->InternalEndpoint = $param["InternalEndpoint"];
        }

        if (array_key_exists("HttpInternalEndpoint",$param) and $param["HttpInternalEndpoint"] !== null) {
            $this->HttpInternalEndpoint = $param["HttpInternalEndpoint"];
        }
    }
}
