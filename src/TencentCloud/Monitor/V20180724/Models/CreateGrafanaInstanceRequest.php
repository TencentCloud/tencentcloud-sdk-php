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
 * @method string getInstanceName() 获取<p>实例名</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名</p>
 * @method string getVpcId() 获取<p>VPC ID (私有网络 ID)</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID (私有网络 ID)</p>
 * @method array getSubnetIds() 获取<p>子网 ID 数组(VPC ID下的子网 ID，只取第一个)。<br>注意：并不是所有可用区都可用（可通过 monitor:DescribePrometheusZones 接口获取可用区状态，选择 ZoneState 和ZoneResourceState 都为1的可用区）</p>
 * @method void setSubnetIds(array $SubnetIds) 设置<p>子网 ID 数组(VPC ID下的子网 ID，只取第一个)。<br>注意：并不是所有可用区都可用（可通过 monitor:DescribePrometheusZones 接口获取可用区状态，选择 ZoneState 和ZoneResourceState 都为1的可用区）</p>
 * @method boolean getEnableInternet() 获取<p>是否启用外网</p>
 * @method void setEnableInternet(boolean $EnableInternet) 设置<p>是否启用外网</p>
 * @method string getGrafanaInitPassword() 获取<p>Grafana 初始密码(国际站用户必填，国内站用户可不填，不填时会生成随机密码并给主账号发送通知)</p>
 * @method void setGrafanaInitPassword(string $GrafanaInitPassword) 设置<p>Grafana 初始密码(国际站用户必填，国内站用户可不填，不填时会生成随机密码并给主账号发送通知)</p>
 * @method array getTagSpecification() 获取<p>标签</p>
 * @method void setTagSpecification(array $TagSpecification) 设置<p>标签</p>
 * @method string getDockerImage() 获取<p>自定义版本，可用版本从 DescribeGrafanaVersions 接口获取</p>
 * @method void setDockerImage(string $DockerImage) 设置<p>自定义版本，可用版本从 DescribeGrafanaVersions 接口获取</p>
 * @method boolean getAutoVoucher() 获取<p>是否自动选择代金券，默认为 false</p>
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置<p>是否自动选择代金券，默认为 false</p>
 */
class CreateGrafanaInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例名</p>
     */
    public $InstanceName;

    /**
     * @var string <p>VPC ID (私有网络 ID)</p>
     */
    public $VpcId;

    /**
     * @var array <p>子网 ID 数组(VPC ID下的子网 ID，只取第一个)。<br>注意：并不是所有可用区都可用（可通过 monitor:DescribePrometheusZones 接口获取可用区状态，选择 ZoneState 和ZoneResourceState 都为1的可用区）</p>
     */
    public $SubnetIds;

    /**
     * @var boolean <p>是否启用外网</p>
     */
    public $EnableInternet;

    /**
     * @var string <p>Grafana 初始密码(国际站用户必填，国内站用户可不填，不填时会生成随机密码并给主账号发送通知)</p>
     */
    public $GrafanaInitPassword;

    /**
     * @var array <p>标签</p>
     */
    public $TagSpecification;

    /**
     * @var string <p>自定义版本，可用版本从 DescribeGrafanaVersions 接口获取</p>
     */
    public $DockerImage;

    /**
     * @var boolean <p>是否自动选择代金券，默认为 false</p>
     */
    public $AutoVoucher;

    /**
     * @param string $InstanceName <p>实例名</p>
     * @param string $VpcId <p>VPC ID (私有网络 ID)</p>
     * @param array $SubnetIds <p>子网 ID 数组(VPC ID下的子网 ID，只取第一个)。<br>注意：并不是所有可用区都可用（可通过 monitor:DescribePrometheusZones 接口获取可用区状态，选择 ZoneState 和ZoneResourceState 都为1的可用区）</p>
     * @param boolean $EnableInternet <p>是否启用外网</p>
     * @param string $GrafanaInitPassword <p>Grafana 初始密码(国际站用户必填，国内站用户可不填，不填时会生成随机密码并给主账号发送通知)</p>
     * @param array $TagSpecification <p>标签</p>
     * @param string $DockerImage <p>自定义版本，可用版本从 DescribeGrafanaVersions 接口获取</p>
     * @param boolean $AutoVoucher <p>是否自动选择代金券，默认为 false</p>
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

        if (array_key_exists("DockerImage",$param) and $param["DockerImage"] !== null) {
            $this->DockerImage = $param["DockerImage"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
