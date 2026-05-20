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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddLibraDBInstances请求参数结构体
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getCpu() 获取Cpu核数
 * @method void setCpu(integer $Cpu) 设置Cpu核数
 * @method integer getMem() 获取内存，单位为GB
 * @method void setMem(integer $Mem) 设置内存，单位为GB
 * @method integer getStorageSize() 获取磁盘大小
 * @method void setStorageSize(integer $StorageSize) 设置磁盘大小
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method Objects getObjects() 获取同步对象列表
 * @method void setObjects(Objects $Objects) 设置同步对象列表
 * @method integer getPort() 获取新增RO组时使用的Port，取值范围为[0,65535)
 * @method void setPort(integer $Port) 设置新增RO组时使用的Port，取值范围为[0,65535)
 * @method integer getGoodsNum() 获取新增只读实例数，取值范围为(0,15]
 * @method void setGoodsNum(integer $GoodsNum) 设置新增只读实例数，取值范围为(0,15]
 * @method string getInstanceName() 获取实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，'_','-','.'
 * @method void setInstanceName(string $InstanceName) 设置实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，'_','-','.'
 * @method integer getReplicasNum() 获取副本数
 * @method void setReplicasNum(integer $ReplicasNum) 设置副本数
 * @method string getInstanceType() 获取ReplicasNum>1或者ReplicasNum=1且Cpu>=32核的时候取值为'Exclusive'，其余场景取值'Common'
 * @method void setInstanceType(string $InstanceType) 设置ReplicasNum>1或者ReplicasNum=1且Cpu>=32核的时候取值为'Exclusive'，其余场景取值'Common'
 * @method string getStorageType() 获取磁盘类型
 * @method void setStorageType(string $StorageType) 设置磁盘类型
 * @method integer getAutoVoucher() 获取是否自动选择代金券 1是 0否 默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券 1是 0否 默认为0
 * @method string getOrderSource() 获取订单来源，字符串长度范围为[0,64)
 * @method void setOrderSource(string $OrderSource) 设置订单来源，字符串长度范围为[0,64)
 * @method integer getDealMode() 获取交易模式 0-下单并支付 1-下单
 * @method void setDealMode(integer $DealMode) 设置交易模式 0-下单并支付 1-下单
 * @method string getVpcId() 获取所属VPC网络ID。
 * @method void setVpcId(string $VpcId) 设置所属VPC网络ID。
 * @method string getSubnetId() 获取所属子网ID，如果设置了VpcId，则SubnetId必填。
 * @method void setSubnetId(string $SubnetId) 设置所属子网ID，如果设置了VpcId，则SubnetId必填。
 * @method array getSecurityGroupIds() 获取安全组ID，新建只读实例时可以指定安全组。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID，新建只读实例时可以指定安全组。
 * @method string getLibraDBVersion() 获取分析引擎版本
 * @method void setLibraDBVersion(string $LibraDBVersion) 设置分析引擎版本
 * @method integer getTimeSpan() 获取购买时长,与TimeUnit组合才能生效
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长,与TimeUnit组合才能生效
 * @method string getTimeUnit() 获取购买时长单位, 与TimeSpan组合生效，可选:日:d,月:m
 * @method void setTimeUnit(string $TimeUnit) 设置购买时长单位, 与TimeSpan组合生效，可选:日:d,月:m
 * @method string getSrcInstanceId() 获取源端实例id
 * @method void setSrcInstanceId(string $SrcInstanceId) 设置源端实例id
 */
class AddLibraDBInstancesRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer Cpu核数
     */
    public $Cpu;

    /**
     * @var integer 内存，单位为GB
     */
    public $Mem;

    /**
     * @var integer 磁盘大小
     */
    public $StorageSize;

    /**
     * @var integer 付费模式
     */
    public $PayMode;

    /**
     * @var Objects 同步对象列表
     */
    public $Objects;

    /**
     * @var integer 新增RO组时使用的Port，取值范围为[0,65535)
     */
    public $Port;

    /**
     * @var integer 新增只读实例数，取值范围为(0,15]
     */
    public $GoodsNum;

    /**
     * @var string 实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，'_','-','.'
     */
    public $InstanceName;

    /**
     * @var integer 副本数
     */
    public $ReplicasNum;

    /**
     * @var string ReplicasNum>1或者ReplicasNum=1且Cpu>=32核的时候取值为'Exclusive'，其余场景取值'Common'
     */
    public $InstanceType;

    /**
     * @var string 磁盘类型
     */
    public $StorageType;

    /**
     * @var integer 是否自动选择代金券 1是 0否 默认为0
     */
    public $AutoVoucher;

    /**
     * @var string 订单来源，字符串长度范围为[0,64)
     */
    public $OrderSource;

    /**
     * @var integer 交易模式 0-下单并支付 1-下单
     */
    public $DealMode;

    /**
     * @var string 所属VPC网络ID。
     */
    public $VpcId;

    /**
     * @var string 所属子网ID，如果设置了VpcId，则SubnetId必填。
     */
    public $SubnetId;

    /**
     * @var array 安全组ID，新建只读实例时可以指定安全组。
     */
    public $SecurityGroupIds;

    /**
     * @var string 分析引擎版本
     */
    public $LibraDBVersion;

    /**
     * @var integer 购买时长,与TimeUnit组合才能生效
     */
    public $TimeSpan;

    /**
     * @var string 购买时长单位, 与TimeSpan组合生效，可选:日:d,月:m
     */
    public $TimeUnit;

    /**
     * @var string 源端实例id
     */
    public $SrcInstanceId;

    /**
     * @param string $Zone 可用区
     * @param string $ClusterId 集群ID
     * @param integer $Cpu Cpu核数
     * @param integer $Mem 内存，单位为GB
     * @param integer $StorageSize 磁盘大小
     * @param integer $PayMode 付费模式
     * @param Objects $Objects 同步对象列表
     * @param integer $Port 新增RO组时使用的Port，取值范围为[0,65535)
     * @param integer $GoodsNum 新增只读实例数，取值范围为(0,15]
     * @param string $InstanceName 实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，'_','-','.'
     * @param integer $ReplicasNum 副本数
     * @param string $InstanceType ReplicasNum>1或者ReplicasNum=1且Cpu>=32核的时候取值为'Exclusive'，其余场景取值'Common'
     * @param string $StorageType 磁盘类型
     * @param integer $AutoVoucher 是否自动选择代金券 1是 0否 默认为0
     * @param string $OrderSource 订单来源，字符串长度范围为[0,64)
     * @param integer $DealMode 交易模式 0-下单并支付 1-下单
     * @param string $VpcId 所属VPC网络ID。
     * @param string $SubnetId 所属子网ID，如果设置了VpcId，则SubnetId必填。
     * @param array $SecurityGroupIds 安全组ID，新建只读实例时可以指定安全组。
     * @param string $LibraDBVersion 分析引擎版本
     * @param integer $TimeSpan 购买时长,与TimeUnit组合才能生效
     * @param string $TimeUnit 购买时长单位, 与TimeSpan组合生效，可选:日:d,月:m
     * @param string $SrcInstanceId 源端实例id
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new Objects();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ReplicasNum",$param) and $param["ReplicasNum"] !== null) {
            $this->ReplicasNum = $param["ReplicasNum"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LibraDBVersion",$param) and $param["LibraDBVersion"] !== null) {
            $this->LibraDBVersion = $param["LibraDBVersion"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }
    }
}
