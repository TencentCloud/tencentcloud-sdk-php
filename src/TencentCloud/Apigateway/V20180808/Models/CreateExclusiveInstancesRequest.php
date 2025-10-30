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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExclusiveInstances请求参数结构体
 *
 * @method array getZones() 获取可用区
 * @method void setZones(array $Zones) 设置可用区
 * @method string getInstanceType() 获取实例类型：     
basic：            基础版
professional： 专业版
enterprise：     企业版
platium：         铂金版
diamond：       钻石版
 * @method void setInstanceType(string $InstanceType) 设置实例类型：     
basic：            基础版
professional： 专业版
enterprise：     企业版
platium：         铂金版
diamond：       钻石版
 * @method InstanceNetworkConfig getNetworkConfig() 获取网络配置
 * @method void setNetworkConfig(InstanceNetworkConfig $NetworkConfig) 设置网络配置
 * @method VpcConfig getVpcConfig() 获取VPC配置
 * @method void setVpcConfig(VpcConfig $VpcConfig) 设置VPC配置
 * @method string getPayMode() 获取付费类型：
POSTPAID：后付费
PREPAID： 预付费
 * @method void setPayMode(string $PayMode) 设置付费类型：
POSTPAID：后付费
PREPAID： 预付费
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getInstanceDescription() 获取实例描述
 * @method void setInstanceDescription(string $InstanceDescription) 设置实例描述
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method integer getPeriod() 获取预付费付费时长：单位是月
 * @method void setPeriod(integer $Period) 设置预付费付费时长：单位是月
 * @method string getAutoRenewFlag() 获取预付费续费标志：
NOTIFY_AND_MANUAL_RENEW 手动续费
NOTIFY_AND_AUTO_RENEW 自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW 不续费
 * @method void setAutoRenewFlag(string $AutoRenewFlag) 设置预付费续费标志：
NOTIFY_AND_MANUAL_RENEW 手动续费
NOTIFY_AND_AUTO_RENEW 自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW 不续费
 */
class CreateExclusiveInstancesRequest extends AbstractModel
{
    /**
     * @var array 可用区
     */
    public $Zones;

    /**
     * @var string 实例类型：     
basic：            基础版
professional： 专业版
enterprise：     企业版
platium：         铂金版
diamond：       钻石版
     */
    public $InstanceType;

    /**
     * @var InstanceNetworkConfig 网络配置
     */
    public $NetworkConfig;

    /**
     * @var VpcConfig VPC配置
     */
    public $VpcConfig;

    /**
     * @var string 付费类型：
POSTPAID：后付费
PREPAID： 预付费
     */
    public $PayMode;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string 实例描述
     */
    public $InstanceDescription;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var integer 预付费付费时长：单位是月
     */
    public $Period;

    /**
     * @var string 预付费续费标志：
NOTIFY_AND_MANUAL_RENEW 手动续费
NOTIFY_AND_AUTO_RENEW 自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW 不续费
     */
    public $AutoRenewFlag;

    /**
     * @param array $Zones 可用区
     * @param string $InstanceType 实例类型：     
basic：            基础版
professional： 专业版
enterprise：     企业版
platium：         铂金版
diamond：       钻石版
     * @param InstanceNetworkConfig $NetworkConfig 网络配置
     * @param VpcConfig $VpcConfig VPC配置
     * @param string $PayMode 付费类型：
POSTPAID：后付费
PREPAID： 预付费
     * @param string $InstanceName 实例名
     * @param string $InstanceDescription 实例描述
     * @param array $Tags 标签
     * @param integer $Period 预付费付费时长：单位是月
     * @param string $AutoRenewFlag 预付费续费标志：
NOTIFY_AND_MANUAL_RENEW 手动续费
NOTIFY_AND_AUTO_RENEW 自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW 不续费
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
        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("NetworkConfig",$param) and $param["NetworkConfig"] !== null) {
            $this->NetworkConfig = new InstanceNetworkConfig();
            $this->NetworkConfig->deserialize($param["NetworkConfig"]);
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceDescription",$param) and $param["InstanceDescription"] !== null) {
            $this->InstanceDescription = $param["InstanceDescription"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
