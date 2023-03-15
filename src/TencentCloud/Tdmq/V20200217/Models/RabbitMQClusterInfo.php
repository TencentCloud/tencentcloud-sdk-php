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
 * RabbiteMQ集群基本信息
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
 * @method array getVpcs() 获取VPC及网络信息
 * @method void setVpcs(array $Vpcs) 设置VPC及网络信息
 * @method integer getVirtualHostNumber() 获取虚拟主机数量
 * @method void setVirtualHostNumber(integer $VirtualHostNumber) 设置虚拟主机数量
 * @method integer getQueueNumber() 获取队列数量
 * @method void setQueueNumber(integer $QueueNumber) 设置队列数量
 * @method float getMessagePublishRate() 获取每秒生产消息数 单位：条/秒
 * @method void setMessagePublishRate(float $MessagePublishRate) 设置每秒生产消息数 单位：条/秒
 * @method integer getMessageStackNumber() 获取堆积消息数 单位：条
 * @method void setMessageStackNumber(integer $MessageStackNumber) 设置堆积消息数 单位：条
 * @method integer getExpireTime() 获取过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间
 * @method integer getChannelNumber() 获取Channel数量
 * @method void setChannelNumber(integer $ChannelNumber) 设置Channel数量
 * @method integer getConnectionNumber() 获取Connection数量
 * @method void setConnectionNumber(integer $ConnectionNumber) 设置Connection数量
 * @method integer getConsumerNumber() 获取Consumer数量
 * @method void setConsumerNumber(integer $ConsumerNumber) 设置Consumer数量
 * @method integer getExchangeNumber() 获取Exchang数量
 * @method void setExchangeNumber(integer $ExchangeNumber) 设置Exchang数量
 * @method string getExceptionInformation() 获取集群异常。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionInformation(string $ExceptionInformation) 设置集群异常。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterStatus() 获取实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterStatus(integer $ClusterStatus) 设置实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQClusterInfo extends AbstractModel
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
     * @var array VPC及网络信息
     */
    public $Vpcs;

    /**
     * @var integer 虚拟主机数量
     */
    public $VirtualHostNumber;

    /**
     * @var integer 队列数量
     */
    public $QueueNumber;

    /**
     * @var float 每秒生产消息数 单位：条/秒
     */
    public $MessagePublishRate;

    /**
     * @var integer 堆积消息数 单位：条
     */
    public $MessageStackNumber;

    /**
     * @var integer 过期时间
     */
    public $ExpireTime;

    /**
     * @var integer Channel数量
     */
    public $ChannelNumber;

    /**
     * @var integer Connection数量
     */
    public $ConnectionNumber;

    /**
     * @var integer Consumer数量
     */
    public $ConsumerNumber;

    /**
     * @var integer Exchang数量
     */
    public $ExchangeNumber;

    /**
     * @var string 集群异常。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionInformation;

    /**
     * @var integer 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterStatus;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $Region 地域信息
     * @param integer $CreateTime 创建时间，毫秒为单位
     * @param string $Remark 集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Vpcs VPC及网络信息
     * @param integer $VirtualHostNumber 虚拟主机数量
     * @param integer $QueueNumber 队列数量
     * @param float $MessagePublishRate 每秒生产消息数 单位：条/秒
     * @param integer $MessageStackNumber 堆积消息数 单位：条
     * @param integer $ExpireTime 过期时间
     * @param integer $ChannelNumber Channel数量
     * @param integer $ConnectionNumber Connection数量
     * @param integer $ConsumerNumber Consumer数量
     * @param integer $ExchangeNumber Exchang数量
     * @param string $ExceptionInformation 集群异常。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterStatus 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
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

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new VpcEndpointInfo();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("VirtualHostNumber",$param) and $param["VirtualHostNumber"] !== null) {
            $this->VirtualHostNumber = $param["VirtualHostNumber"];
        }

        if (array_key_exists("QueueNumber",$param) and $param["QueueNumber"] !== null) {
            $this->QueueNumber = $param["QueueNumber"];
        }

        if (array_key_exists("MessagePublishRate",$param) and $param["MessagePublishRate"] !== null) {
            $this->MessagePublishRate = $param["MessagePublishRate"];
        }

        if (array_key_exists("MessageStackNumber",$param) and $param["MessageStackNumber"] !== null) {
            $this->MessageStackNumber = $param["MessageStackNumber"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChannelNumber",$param) and $param["ChannelNumber"] !== null) {
            $this->ChannelNumber = $param["ChannelNumber"];
        }

        if (array_key_exists("ConnectionNumber",$param) and $param["ConnectionNumber"] !== null) {
            $this->ConnectionNumber = $param["ConnectionNumber"];
        }

        if (array_key_exists("ConsumerNumber",$param) and $param["ConsumerNumber"] !== null) {
            $this->ConsumerNumber = $param["ConsumerNumber"];
        }

        if (array_key_exists("ExchangeNumber",$param) and $param["ExchangeNumber"] !== null) {
            $this->ExchangeNumber = $param["ExchangeNumber"];
        }

        if (array_key_exists("ExceptionInformation",$param) and $param["ExceptionInformation"] !== null) {
            $this->ExceptionInformation = $param["ExceptionInformation"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }
    }
}
