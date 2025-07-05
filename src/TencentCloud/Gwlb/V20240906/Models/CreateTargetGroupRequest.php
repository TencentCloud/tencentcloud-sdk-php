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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTargetGroup请求参数结构体
 *
 * @method string getTargetGroupName() 获取目标组名称，限定60个字符。
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组名称，限定60个字符。
 * @method string getVpcId() 获取网关负载均衡后端目标组所属的网络 ID，如vpc-12345678，可以通过 [DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)  接口获取。 不填此参数则默认为DefaultVPC。
 * @method void setVpcId(string $VpcId) 设置网关负载均衡后端目标组所属的网络 ID，如vpc-12345678，可以通过 [DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)  接口获取。 不填此参数则默认为DefaultVPC。
 * @method integer getPort() 获取目标组的默认端口， 后续添加服务器时可使用该默认端口。Port和TargetGroupInstances.N中的port二者必填其一。仅支持6081。
 * @method void setPort(integer $Port) 设置目标组的默认端口， 后续添加服务器时可使用该默认端口。Port和TargetGroupInstances.N中的port二者必填其一。仅支持6081。
 * @method array getTargetGroupInstances() 获取目标组绑定的后端服务器
 * @method void setTargetGroupInstances(array $TargetGroupInstances) 设置目标组绑定的后端服务器
 * @method string getProtocol() 获取网关负载均衡目标组协议。
- TENCENT_GENEVE ：GENEVE 标准协议
- AWS_GENEVE：GENEVE 兼容协议
 * @method void setProtocol(string $Protocol) 设置网关负载均衡目标组协议。
- TENCENT_GENEVE ：GENEVE 标准协议
- AWS_GENEVE：GENEVE 兼容协议
 * @method TargetGroupHealthCheck getHealthCheck() 获取健康检查设置。
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) 设置健康检查设置。
 * @method string getScheduleAlgorithm() 获取均衡算法。
- IP_HASH_3_ELASTIC：弹性哈希
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) 设置均衡算法。
- IP_HASH_3_ELASTIC：弹性哈希
 * @method boolean getAllDeadToAlive() 获取是否支持全死全活。默认支持。
 * @method void setAllDeadToAlive(boolean $AllDeadToAlive) 设置是否支持全死全活。默认支持。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 */
class CreateTargetGroupRequest extends AbstractModel
{
    /**
     * @var string 目标组名称，限定60个字符。
     */
    public $TargetGroupName;

    /**
     * @var string 网关负载均衡后端目标组所属的网络 ID，如vpc-12345678，可以通过 [DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)  接口获取。 不填此参数则默认为DefaultVPC。
     */
    public $VpcId;

    /**
     * @var integer 目标组的默认端口， 后续添加服务器时可使用该默认端口。Port和TargetGroupInstances.N中的port二者必填其一。仅支持6081。
     */
    public $Port;

    /**
     * @var array 目标组绑定的后端服务器
     */
    public $TargetGroupInstances;

    /**
     * @var string 网关负载均衡目标组协议。
- TENCENT_GENEVE ：GENEVE 标准协议
- AWS_GENEVE：GENEVE 兼容协议
     */
    public $Protocol;

    /**
     * @var TargetGroupHealthCheck 健康检查设置。
     */
    public $HealthCheck;

    /**
     * @var string 均衡算法。
- IP_HASH_3_ELASTIC：弹性哈希
     */
    public $ScheduleAlgorithm;

    /**
     * @var boolean 是否支持全死全活。默认支持。
     */
    public $AllDeadToAlive;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @param string $TargetGroupName 目标组名称，限定60个字符。
     * @param string $VpcId 网关负载均衡后端目标组所属的网络 ID，如vpc-12345678，可以通过 [DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)  接口获取。 不填此参数则默认为DefaultVPC。
     * @param integer $Port 目标组的默认端口， 后续添加服务器时可使用该默认端口。Port和TargetGroupInstances.N中的port二者必填其一。仅支持6081。
     * @param array $TargetGroupInstances 目标组绑定的后端服务器
     * @param string $Protocol 网关负载均衡目标组协议。
- TENCENT_GENEVE ：GENEVE 标准协议
- AWS_GENEVE：GENEVE 兼容协议
     * @param TargetGroupHealthCheck $HealthCheck 健康检查设置。
     * @param string $ScheduleAlgorithm 均衡算法。
- IP_HASH_3_ELASTIC：弹性哈希
     * @param boolean $AllDeadToAlive 是否支持全死全活。默认支持。
     * @param array $Tags 标签。
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
        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetGroupInstances",$param) and $param["TargetGroupInstances"] !== null) {
            $this->TargetGroupInstances = [];
            foreach ($param["TargetGroupInstances"] as $key => $value){
                $obj = new TargetGroupInstance();
                $obj->deserialize($value);
                array_push($this->TargetGroupInstances, $obj);
            }
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new TargetGroupHealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("ScheduleAlgorithm",$param) and $param["ScheduleAlgorithm"] !== null) {
            $this->ScheduleAlgorithm = $param["ScheduleAlgorithm"];
        }

        if (array_key_exists("AllDeadToAlive",$param) and $param["AllDeadToAlive"] !== null) {
            $this->AllDeadToAlive = $param["AllDeadToAlive"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
