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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGrafanaInstance请求参数结构体
 *
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getVpcId() 获取VPC ID (私有网络 ID)
 * @method void setVpcId(string $VpcId) 设置VPC ID (私有网络 ID)
 * @method array getSubnetIds() 获取子网 ID 数组(VPC ID下的子网 ID，只取第一个)
 * @method void setSubnetIds(array $SubnetIds) 设置子网 ID 数组(VPC ID下的子网 ID，只取第一个)
 * @method boolean getEnableInternet() 获取是否启用外网
 * @method void setEnableInternet(boolean $EnableInternet) 设置是否启用外网
 * @method string getGrafanaInitPassword() 获取Grafana 初始密码(国际站用户必填，国内站用户可不填，不填时会生成随机密码并给主账号发送通知)
 * @method void setGrafanaInitPassword(string $GrafanaInitPassword) 设置Grafana 初始密码(国际站用户必填，国内站用户可不填，不填时会生成随机密码并给主账号发送通知)
 * @method array getTagSpecification() 获取标签
 * @method void setTagSpecification(array $TagSpecification) 设置标签
 * @method boolean getAutoVoucher() 获取是否自动选择代金券，默认为 false
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置是否自动选择代金券，默认为 false
 */
class CreateGrafanaInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string VPC ID (私有网络 ID)
     */
    public $VpcId;

    /**
     * @var array 子网 ID 数组(VPC ID下的子网 ID，只取第一个)
     */
    public $SubnetIds;

    /**
     * @var boolean 是否启用外网
     */
    public $EnableInternet;

    /**
     * @var string Grafana 初始密码(国际站用户必填，国内站用户可不填，不填时会生成随机密码并给主账号发送通知)
     */
    public $GrafanaInitPassword;

    /**
     * @var array 标签
     */
    public $TagSpecification;

    /**
     * @var boolean 是否自动选择代金券，默认为 false
     */
    public $AutoVoucher;

    /**
     * @param string $InstanceName 实例名
     * @param string $VpcId VPC ID (私有网络 ID)
     * @param array $SubnetIds 子网 ID 数组(VPC ID下的子网 ID，只取第一个)
     * @param boolean $EnableInternet 是否启用外网
     * @param string $GrafanaInitPassword Grafana 初始密码(国际站用户必填，国内站用户可不填，不填时会生成随机密码并给主账号发送通知)
     * @param array $TagSpecification 标签
     * @param boolean $AutoVoucher 是否自动选择代金券，默认为 false
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("EnableInternet",$param) and $param["EnableInternet"] !== null) {
            $this->EnableInternet = $param["EnableInternet"];
        }

        if (array_key_exists("GrafanaInitPassword",$param) and $param["GrafanaInitPassword"] !== null) {
            $this->GrafanaInitPassword = $param["GrafanaInitPassword"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
