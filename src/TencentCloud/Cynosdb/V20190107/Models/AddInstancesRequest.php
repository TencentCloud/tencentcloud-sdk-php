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
 * AddInstances请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method integer getCpu() 获取<p>Cpu核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>Cpu核数</p>
 * @method integer getMemory() 获取<p>内存，单位为GB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存，单位为GB</p>
 * @method integer getReadOnlyCount() 获取<p>新增只读实例数，取值范围为(0,15]</p>
 * @method void setReadOnlyCount(integer $ReadOnlyCount) 设置<p>新增只读实例数，取值范围为(0,15]</p>
 * @method string getDeviceType() 获取<p>实例机器类型，支持值如下：</p><ul><li>common：表示通用型</li><li>exclusive：表示独享型</li></ul>
 * @method void setDeviceType(string $DeviceType) 设置<p>实例机器类型，支持值如下：</p><ul><li>common：表示通用型</li><li>exclusive：表示独享型</li></ul>
 * @method string getInstanceGrpId() 获取<p>实例组ID，在已有RO组中新增实例时使用，不传则新增RO组。当前版本不建议传输该值。</p>
 * @method void setInstanceGrpId(string $InstanceGrpId) 设置<p>实例组ID，在已有RO组中新增实例时使用，不传则新增RO组。当前版本不建议传输该值。</p>
 * @method string getVpcId() 获取<p>所属VPC网络ID。</p>
 * @method void setVpcId(string $VpcId) 设置<p>所属VPC网络ID。</p>
 * @method string getSubnetId() 获取<p>所属子网ID，如果设置了VpcId，则SubnetId必填。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>所属子网ID，如果设置了VpcId，则SubnetId必填。</p>
 * @method integer getPort() 获取<p>新增RO组时使用的Port，取值范围为[0,65535)</p>
 * @method void setPort(integer $Port) 设置<p>新增RO组时使用的Port，取值范围为[0,65535)</p>
 * @method string getInstanceName() 获取<p>实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，&#39;_&#39;,&#39;-&#39;,&#39;.&#39;</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，&#39;_&#39;,&#39;-&#39;,&#39;.&#39;</p>
 * @method integer getAutoVoucher() 获取<p>是否自动选择代金券 1是 0否 默认为0</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动选择代金券 1是 0否 默认为0</p>
 * @method string getDbType() 获取<p>数据库类型，取值范围: </p><li> MYSQL </li>
 * @method void setDbType(string $DbType) 设置<p>数据库类型，取值范围: </p><li> MYSQL </li>
 * @method string getOrderSource() 获取<p>订单来源，字符串长度范围为[0,64)</p>
 * @method void setOrderSource(string $OrderSource) 设置<p>订单来源，字符串长度范围为[0,64)</p>
 * @method integer getDealMode() 获取<p>交易模式 0-下单并支付 1-下单</p>
 * @method void setDealMode(integer $DealMode) 设置<p>交易模式 0-下单并支付 1-下单</p>
 * @method integer getParamTemplateId() 获取<p>参数模板ID</p>
 * @method void setParamTemplateId(integer $ParamTemplateId) 设置<p>参数模板ID</p>
 * @method array getInstanceParams() 获取<p>参数列表，ParamTemplateId 传入时InstanceParams才有效</p>
 * @method void setInstanceParams(array $InstanceParams) 设置<p>参数列表，ParamTemplateId 传入时InstanceParams才有效</p>
 * @method array getSecurityGroupIds() 获取<p>安全组ID，新建只读实例时可以指定安全组。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组ID，新建只读实例时可以指定安全组。</p>
 * @method UpgradeProxy getUpgradeProxy() 获取<p>proxy同步升级</p>
 * @method void setUpgradeProxy(UpgradeProxy $UpgradeProxy) 设置<p>proxy同步升级</p>
 */
class AddInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Cpu核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存，单位为GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>新增只读实例数，取值范围为(0,15]</p>
     */
    public $ReadOnlyCount;

    /**
     * @var string <p>实例机器类型，支持值如下：</p><ul><li>common：表示通用型</li><li>exclusive：表示独享型</li></ul>
     */
    public $DeviceType;

    /**
     * @var string <p>实例组ID，在已有RO组中新增实例时使用，不传则新增RO组。当前版本不建议传输该值。</p>
     * @deprecated
     */
    public $InstanceGrpId;

    /**
     * @var string <p>所属VPC网络ID。</p>
     */
    public $VpcId;

    /**
     * @var string <p>所属子网ID，如果设置了VpcId，则SubnetId必填。</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>新增RO组时使用的Port，取值范围为[0,65535)</p>
     */
    public $Port;

    /**
     * @var string <p>实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，&#39;_&#39;,&#39;-&#39;,&#39;.&#39;</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>是否自动选择代金券 1是 0否 默认为0</p>
     */
    public $AutoVoucher;

    /**
     * @var string <p>数据库类型，取值范围: </p><li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var string <p>订单来源，字符串长度范围为[0,64)</p>
     */
    public $OrderSource;

    /**
     * @var integer <p>交易模式 0-下单并支付 1-下单</p>
     */
    public $DealMode;

    /**
     * @var integer <p>参数模板ID</p>
     */
    public $ParamTemplateId;

    /**
     * @var array <p>参数列表，ParamTemplateId 传入时InstanceParams才有效</p>
     */
    public $InstanceParams;

    /**
     * @var array <p>安全组ID，新建只读实例时可以指定安全组。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var UpgradeProxy <p>proxy同步升级</p>
     */
    public $UpgradeProxy;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param integer $Cpu <p>Cpu核数</p>
     * @param integer $Memory <p>内存，单位为GB</p>
     * @param integer $ReadOnlyCount <p>新增只读实例数，取值范围为(0,15]</p>
     * @param string $DeviceType <p>实例机器类型，支持值如下：</p><ul><li>common：表示通用型</li><li>exclusive：表示独享型</li></ul>
     * @param string $InstanceGrpId <p>实例组ID，在已有RO组中新增实例时使用，不传则新增RO组。当前版本不建议传输该值。</p>
     * @param string $VpcId <p>所属VPC网络ID。</p>
     * @param string $SubnetId <p>所属子网ID，如果设置了VpcId，则SubnetId必填。</p>
     * @param integer $Port <p>新增RO组时使用的Port，取值范围为[0,65535)</p>
     * @param string $InstanceName <p>实例名称，字符串长度范围为[0,64)，取值范围为大小写字母，0-9数字，&#39;_&#39;,&#39;-&#39;,&#39;.&#39;</p>
     * @param integer $AutoVoucher <p>是否自动选择代金券 1是 0否 默认为0</p>
     * @param string $DbType <p>数据库类型，取值范围: </p><li> MYSQL </li>
     * @param string $OrderSource <p>订单来源，字符串长度范围为[0,64)</p>
     * @param integer $DealMode <p>交易模式 0-下单并支付 1-下单</p>
     * @param integer $ParamTemplateId <p>参数模板ID</p>
     * @param array $InstanceParams <p>参数列表，ParamTemplateId 传入时InstanceParams才有效</p>
     * @param array $SecurityGroupIds <p>安全组ID，新建只读实例时可以指定安全组。</p>
     * @param UpgradeProxy $UpgradeProxy <p>proxy同步升级</p>
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

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
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

        if (array_key_exists("UpgradeProxy",$param) and $param["UpgradeProxy"] !== null) {
            $this->UpgradeProxy = new UpgradeProxy();
            $this->UpgradeProxy->deserialize($param["UpgradeProxy"]);
        }
    }
}
