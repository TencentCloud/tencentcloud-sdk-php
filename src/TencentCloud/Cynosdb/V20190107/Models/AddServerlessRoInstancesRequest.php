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
 * AddServerlessRoInstances请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群Id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群Id</p>
 * @method float getMinCpu() 获取<p>ro实例最小规格</p>
 * @method void setMinCpu(float $MinCpu) 设置<p>ro实例最小规格</p>
 * @method float getMaxCpu() 获取<p>ro实例最大规格</p>
 * @method void setMaxCpu(float $MaxCpu) 设置<p>ro实例最大规格</p>
 * @method string getInstanceName() 获取<p>ro实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>ro实例名称</p>
 * @method string getVpcId() 获取<p>所属VPC网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>所属VPC网络ID</p>
 * @method string getSubnetId() 获取<p>所属子网ID，如果设置了VpcId，则SubnetId必填</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>所属子网ID，如果设置了VpcId，则SubnetId必填</p>
 * @method integer getPort() 获取<p>新增RO组时使用的Port，取值范围为[0,65535)</p>
 * @method void setPort(integer $Port) 设置<p>新增RO组时使用的Port，取值范围为[0,65535)</p>
 * @method array getSecurityGroupIds() 获取<p>安全组ID，新建只读实例时可以指定安全组</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组ID，新建只读实例时可以指定安全组</p>
 * @method string getAutoPause() 获取<p>是否自动暂停</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
 * @method void setAutoPause(string $AutoPause) 设置<p>是否自动暂停</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
 * @method integer getAutoPauseDelay() 获取<p>自动暂停时间</p><p>单位：秒</p>
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) 设置<p>自动暂停时间</p><p>单位：秒</p>
 * @method array getInstanceParams() 获取<p>实例参数</p>
 * @method void setInstanceParams(array $InstanceParams) 设置<p>实例参数</p>
 * @method integer getParamTemplateId() 获取<p>参数模板</p>
 * @method void setParamTemplateId(integer $ParamTemplateId) 设置<p>参数模板</p>
 * @method integer getRoCount() 获取<p>新增的只读实例数量</p>
 * @method void setRoCount(integer $RoCount) 设置<p>新增的只读实例数量</p>
 */
class AddServerlessRoInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>集群Id</p>
     */
    public $ClusterId;

    /**
     * @var float <p>ro实例最小规格</p>
     */
    public $MinCpu;

    /**
     * @var float <p>ro实例最大规格</p>
     */
    public $MaxCpu;

    /**
     * @var string <p>ro实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>所属VPC网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>所属子网ID，如果设置了VpcId，则SubnetId必填</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>新增RO组时使用的Port，取值范围为[0,65535)</p>
     */
    public $Port;

    /**
     * @var array <p>安全组ID，新建只读实例时可以指定安全组</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>是否自动暂停</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
     */
    public $AutoPause;

    /**
     * @var integer <p>自动暂停时间</p><p>单位：秒</p>
     */
    public $AutoPauseDelay;

    /**
     * @var array <p>实例参数</p>
     */
    public $InstanceParams;

    /**
     * @var integer <p>参数模板</p>
     */
    public $ParamTemplateId;

    /**
     * @var integer <p>新增的只读实例数量</p>
     */
    public $RoCount;

    /**
     * @param string $ClusterId <p>集群Id</p>
     * @param float $MinCpu <p>ro实例最小规格</p>
     * @param float $MaxCpu <p>ro实例最大规格</p>
     * @param string $InstanceName <p>ro实例名称</p>
     * @param string $VpcId <p>所属VPC网络ID</p>
     * @param string $SubnetId <p>所属子网ID，如果设置了VpcId，则SubnetId必填</p>
     * @param integer $Port <p>新增RO组时使用的Port，取值范围为[0,65535)</p>
     * @param array $SecurityGroupIds <p>安全组ID，新建只读实例时可以指定安全组</p>
     * @param string $AutoPause <p>是否自动暂停</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
     * @param integer $AutoPauseDelay <p>自动暂停时间</p><p>单位：秒</p>
     * @param array $InstanceParams <p>实例参数</p>
     * @param integer $ParamTemplateId <p>参数模板</p>
     * @param integer $RoCount <p>新增的只读实例数量</p>
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

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("AutoPauseDelay",$param) and $param["AutoPauseDelay"] !== null) {
            $this->AutoPauseDelay = $param["AutoPauseDelay"];
        }

        if (array_key_exists("InstanceParams",$param) and $param["InstanceParams"] !== null) {
            $this->InstanceParams = [];
            foreach ($param["InstanceParams"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->InstanceParams, $obj);
            }
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("RoCount",$param) and $param["RoCount"] !== null) {
            $this->RoCount = $param["RoCount"];
        }
    }
}
