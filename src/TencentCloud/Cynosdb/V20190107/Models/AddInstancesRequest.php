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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddInstances请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getCpu() 获取Cpu核数
 * @method void setCpu(integer $Cpu) 设置Cpu核数
 * @method integer getMemory() 获取内存，单位为GB
 * @method void setMemory(integer $Memory) 设置内存，单位为GB
 * @method integer getReadOnlyCount() 获取新增只读实例数，取值范围为[0,4]
 * @method void setReadOnlyCount(integer $ReadOnlyCount) 设置新增只读实例数，取值范围为[0,4]
 * @method string getInstanceGrpId() 获取实例组ID，在已有RO组中新增实例时使用，不传则新增RO组。当前版本不建议传输该值。当前版本已废弃。
 * @method void setInstanceGrpId(string $InstanceGrpId) 设置实例组ID，在已有RO组中新增实例时使用，不传则新增RO组。当前版本不建议传输该值。当前版本已废弃。
 * @method string getVpcId() 获取所属VPC网络ID。
 * @method void setVpcId(string $VpcId) 设置所属VPC网络ID。
 * @method string getSubnetId() 获取所属子网ID，如果设置了VpcId，则SubnetId必填。
 * @method void setSubnetId(string $SubnetId) 设置所属子网ID，如果设置了VpcId，则SubnetId必填。
 * @method integer getPort() 获取新增RO组时使用的Port，取值范围为[0,65535)
 * @method void setPort(integer $Port) 设置新增RO组时使用的Port，取值范围为[0,65535)
 * @method string getInstanceName() 获取实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，'_','-','.'
 * @method void setInstanceName(string $InstanceName) 设置实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，'_','-','.'
 * @method integer getAutoVoucher() 获取是否自动选择代金券 1是 0否 默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券 1是 0否 默认为0
 * @method string getDbType() 获取数据库类型，取值范围: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) 设置数据库类型，取值范围: 
<li> MYSQL </li>
 * @method string getOrderSource() 获取订单来源，字符串长度范围为[0,64)
 * @method void setOrderSource(string $OrderSource) 设置订单来源，字符串长度范围为[0,64)
 * @method integer getDealMode() 获取交易模式 0-下单并支付 1-下单
 * @method void setDealMode(integer $DealMode) 设置交易模式 0-下单并支付 1-下单
 * @method integer getParamTemplateId() 获取参数模版ID
 * @method void setParamTemplateId(integer $ParamTemplateId) 设置参数模版ID
 * @method array getInstanceParams() 获取参数列表，ParamTemplateId 传入时InstanceParams才有效
 * @method void setInstanceParams(array $InstanceParams) 设置参数列表，ParamTemplateId 传入时InstanceParams才有效
 * @method array getSecurityGroupIds() 获取安全组ID，新建只读实例时可以指定安全组。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID，新建只读实例时可以指定安全组。
 */
class AddInstancesRequest extends AbstractModel
{
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
    public $Memory;

    /**
     * @var integer 新增只读实例数，取值范围为[0,4]
     */
    public $ReadOnlyCount;

    /**
     * @var string 实例组ID，在已有RO组中新增实例时使用，不传则新增RO组。当前版本不建议传输该值。当前版本已废弃。
     */
    public $InstanceGrpId;

    /**
     * @var string 所属VPC网络ID。
     */
    public $VpcId;

    /**
     * @var string 所属子网ID，如果设置了VpcId，则SubnetId必填。
     */
    public $SubnetId;

    /**
     * @var integer 新增RO组时使用的Port，取值范围为[0,65535)
     */
    public $Port;

    /**
     * @var string 实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，'_','-','.'
     */
    public $InstanceName;

    /**
     * @var integer 是否自动选择代金券 1是 0否 默认为0
     */
    public $AutoVoucher;

    /**
     * @var string 数据库类型，取值范围: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var string 订单来源，字符串长度范围为[0,64)
     */
    public $OrderSource;

    /**
     * @var integer 交易模式 0-下单并支付 1-下单
     */
    public $DealMode;

    /**
     * @var integer 参数模版ID
     */
    public $ParamTemplateId;

    /**
     * @var array 参数列表，ParamTemplateId 传入时InstanceParams才有效
     */
    public $InstanceParams;

    /**
     * @var array 安全组ID，新建只读实例时可以指定安全组。
     */
    public $SecurityGroupIds;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $Cpu Cpu核数
     * @param integer $Memory 内存，单位为GB
     * @param integer $ReadOnlyCount 新增只读实例数，取值范围为[0,4]
     * @param string $InstanceGrpId 实例组ID，在已有RO组中新增实例时使用，不传则新增RO组。当前版本不建议传输该值。当前版本已废弃。
     * @param string $VpcId 所属VPC网络ID。
     * @param string $SubnetId 所属子网ID，如果设置了VpcId，则SubnetId必填。
     * @param integer $Port 新增RO组时使用的Port，取值范围为[0,65535)
     * @param string $InstanceName 实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，'_','-','.'
     * @param integer $AutoVoucher 是否自动选择代金券 1是 0否 默认为0
     * @param string $DbType 数据库类型，取值范围: 
<li> MYSQL </li>
     * @param string $OrderSource 订单来源，字符串长度范围为[0,64)
     * @param integer $DealMode 交易模式 0-下单并支付 1-下单
     * @param integer $ParamTemplateId 参数模版ID
     * @param array $InstanceParams 参数列表，ParamTemplateId 传入时InstanceParams才有效
     * @param array $SecurityGroupIds 安全组ID，新建只读实例时可以指定安全组。
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("ReadOnlyCount",$param) and $param["ReadOnlyCount"] !== null) {
            $this->ReadOnlyCount = $param["ReadOnlyCount"];
        }

        if (array_key_exists("InstanceGrpId",$param) and $param["InstanceGrpId"] !== null) {
            $this->InstanceGrpId = $param["InstanceGrpId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("InstanceParams",$param) and $param["InstanceParams"] !== null) {
            $this->InstanceParams = [];
            foreach ($param["InstanceParams"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->InstanceParams, $obj);
            }
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
