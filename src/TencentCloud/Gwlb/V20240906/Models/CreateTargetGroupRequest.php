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
 * @method string getTargetGroupName() 获取<p>目标组名称，限定60个字符。</p>
 * @method void setTargetGroupName(string $TargetGroupName) 设置<p>目标组名称，限定60个字符。</p>
 * @method string getVpcId() 获取<p>网关负载均衡后端目标组所属的网络 ID，如vpc-12345678，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>  接口获取。 不填此参数则默认为DefaultVPC。</p>
 * @method void setVpcId(string $VpcId) 设置<p>网关负载均衡后端目标组所属的网络 ID，如vpc-12345678，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>  接口获取。 不填此参数则默认为DefaultVPC。</p>
 * @method integer getPort() 获取<p>目标组的默认端口， 后续添加服务器时可使用该默认端口。Port和TargetGroupInstances.N中的port二者必填其一。仅支持6081。</p>
 * @method void setPort(integer $Port) 设置<p>目标组的默认端口， 后续添加服务器时可使用该默认端口。Port和TargetGroupInstances.N中的port二者必填其一。仅支持6081。</p>
 * @method array getTargetGroupInstances() 获取<p>目标组绑定的后端服务器</p>
 * @method void setTargetGroupInstances(array $TargetGroupInstances) 设置<p>目标组绑定的后端服务器</p>
 * @method string getProtocol() 获取<p>网关负载均衡目标组协议。- TENCENT_GENEVE ：GENEVE 标准协议- AWS_GENEVE：GENEVE 兼容协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>网关负载均衡目标组协议。- TENCENT_GENEVE ：GENEVE 标准协议- AWS_GENEVE：GENEVE 兼容协议</p>
 * @method TargetGroupHealthCheck getHealthCheck() 获取<p>健康检查设置。</p>
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) 设置<p>健康检查设置。</p>
 * @method string getScheduleAlgorithm() 获取<p>均衡算法。</p><ul><li>IP_HASH_2_CONSISTENT：二元组一致性哈希</li><li>IP_HASH_3_CONSISTENT：三元组一致性哈希</li><li>IP_HASH_5_CONSISTENT：五元组一致性哈希</li></ul>
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) 设置<p>均衡算法。</p><ul><li>IP_HASH_2_CONSISTENT：二元组一致性哈希</li><li>IP_HASH_3_CONSISTENT：三元组一致性哈希</li><li>IP_HASH_5_CONSISTENT：五元组一致性哈希</li></ul>
 * @method boolean getAllDeadToAlive() 获取<p>是否支持全死全活。默认支持。</p>
 * @method void setAllDeadToAlive(boolean $AllDeadToAlive) 设置<p>是否支持全死全活。默认支持。</p>
 * @method array getTags() 获取<p>标签。</p>
 * @method void setTags(array $Tags) 设置<p>标签。</p>
 * @method string getForwardingMode() 获取<p>流量分发方式</p><ul><li>STATELESS：无状态</li><li>STATEFUL： 有状态</li></ul>
 * @method void setForwardingMode(string $ForwardingMode) 设置<p>流量分发方式</p><ul><li>STATELESS：无状态</li><li>STATEFUL： 有状态</li></ul>
 * @method integer getTcpIdleConnectTimeout() 获取<p>TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。</p>
 * @method void setTcpIdleConnectTimeout(integer $TcpIdleConnectTimeout) 设置<p>TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。</p>
 * @method integer getOthersIdleConnectTimeout() 获取<p>其他协议连接空闲超时时间，可配置5s-180s，默认120s</p>
 * @method void setOthersIdleConnectTimeout(integer $OthersIdleConnectTimeout) 设置<p>其他协议连接空闲超时时间，可配置5s-180s，默认120s</p>
 * @method boolean getRescheduleUnbindRs() 获取<p>重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。</p>
 * @method void setRescheduleUnbindRs(boolean $RescheduleUnbindRs) 设置<p>重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。</p>
 * @method integer getRescheduleUnbindRsStartTime() 获取<p>解绑RS后开启重调度的时间，可配置0s-3600s，默认0s</p>
 * @method void setRescheduleUnbindRsStartTime(integer $RescheduleUnbindRsStartTime) 设置<p>解绑RS后开启重调度的时间，可配置0s-3600s，默认0s</p>
 * @method boolean getRescheduleUnhealthy() 获取<p>重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。</p>
 * @method void setRescheduleUnhealthy(boolean $RescheduleUnhealthy) 设置<p>重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。</p>
 * @method integer getRescheduleUnhealthyStartTime() 获取<p>后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s</p>
 * @method void setRescheduleUnhealthyStartTime(integer $RescheduleUnhealthyStartTime) 设置<p>后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s</p>
 */
class CreateTargetGroupRequest extends AbstractModel
{
    /**
     * @var string <p>目标组名称，限定60个字符。</p>
     */
    public $TargetGroupName;

    /**
     * @var string <p>网关负载均衡后端目标组所属的网络 ID，如vpc-12345678，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>  接口获取。 不填此参数则默认为DefaultVPC。</p>
     */
    public $VpcId;

    /**
     * @var integer <p>目标组的默认端口， 后续添加服务器时可使用该默认端口。Port和TargetGroupInstances.N中的port二者必填其一。仅支持6081。</p>
     */
    public $Port;

    /**
     * @var array <p>目标组绑定的后端服务器</p>
     */
    public $TargetGroupInstances;

    /**
     * @var string <p>网关负载均衡目标组协议。- TENCENT_GENEVE ：GENEVE 标准协议- AWS_GENEVE：GENEVE 兼容协议</p>
     */
    public $Protocol;

    /**
     * @var TargetGroupHealthCheck <p>健康检查设置。</p>
     */
    public $HealthCheck;

    /**
     * @var string <p>均衡算法。</p><ul><li>IP_HASH_2_CONSISTENT：二元组一致性哈希</li><li>IP_HASH_3_CONSISTENT：三元组一致性哈希</li><li>IP_HASH_5_CONSISTENT：五元组一致性哈希</li></ul>
     */
    public $ScheduleAlgorithm;

    /**
     * @var boolean <p>是否支持全死全活。默认支持。</p>
     */
    public $AllDeadToAlive;

    /**
     * @var array <p>标签。</p>
     */
    public $Tags;

    /**
     * @var string <p>流量分发方式</p><ul><li>STATELESS：无状态</li><li>STATEFUL： 有状态</li></ul>
     */
    public $ForwardingMode;

    /**
     * @var integer <p>TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。</p>
     */
    public $TcpIdleConnectTimeout;

    /**
     * @var integer <p>其他协议连接空闲超时时间，可配置5s-180s，默认120s</p>
     */
    public $OthersIdleConnectTimeout;

    /**
     * @var boolean <p>重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。</p>
     */
    public $RescheduleUnbindRs;

    /**
     * @var integer <p>解绑RS后开启重调度的时间，可配置0s-3600s，默认0s</p>
     */
    public $RescheduleUnbindRsStartTime;

    /**
     * @var boolean <p>重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。</p>
     */
    public $RescheduleUnhealthy;

    /**
     * @var integer <p>后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s</p>
     */
    public $RescheduleUnhealthyStartTime;

    /**
     * @param string $TargetGroupName <p>目标组名称，限定60个字符。</p>
     * @param string $VpcId <p>网关负载均衡后端目标组所属的网络 ID，如vpc-12345678，可以通过 <a href="https://cloud.tencent.com/document/product/215/15778">DescribeVpcs</a>  接口获取。 不填此参数则默认为DefaultVPC。</p>
     * @param integer $Port <p>目标组的默认端口， 后续添加服务器时可使用该默认端口。Port和TargetGroupInstances.N中的port二者必填其一。仅支持6081。</p>
     * @param array $TargetGroupInstances <p>目标组绑定的后端服务器</p>
     * @param string $Protocol <p>网关负载均衡目标组协议。- TENCENT_GENEVE ：GENEVE 标准协议- AWS_GENEVE：GENEVE 兼容协议</p>
     * @param TargetGroupHealthCheck $HealthCheck <p>健康检查设置。</p>
     * @param string $ScheduleAlgorithm <p>均衡算法。</p><ul><li>IP_HASH_2_CONSISTENT：二元组一致性哈希</li><li>IP_HASH_3_CONSISTENT：三元组一致性哈希</li><li>IP_HASH_5_CONSISTENT：五元组一致性哈希</li></ul>
     * @param boolean $AllDeadToAlive <p>是否支持全死全活。默认支持。</p>
     * @param array $Tags <p>标签。</p>
     * @param string $ForwardingMode <p>流量分发方式</p><ul><li>STATELESS：无状态</li><li>STATEFUL： 有状态</li></ul>
     * @param integer $TcpIdleConnectTimeout <p>TCP协议连接空闲超时时间，可配置60s-6000s，默认350s。</p>
     * @param integer $OthersIdleConnectTimeout <p>其他协议连接空闲超时时间，可配置5s-180s，默认120s</p>
     * @param boolean $RescheduleUnbindRs <p>重新调度功能内的解绑后端服务开关，开关打开后解绑后端服务会触发重新调度。</p>
     * @param integer $RescheduleUnbindRsStartTime <p>解绑RS后开启重调度的时间，可配置0s-3600s，默认0s</p>
     * @param boolean $RescheduleUnhealthy <p>重新调度功能内的后端服务健康探测异常开关，开关打开后后端服务健康检查异常会触发重新调度。</p>
     * @param integer $RescheduleUnhealthyStartTime <p>后端服务健康探测异常后开启重调度的时间，可配置0s-3600s，默认0s</p>
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

        if (array_key_exists("ForwardingMode",$param) and $param["ForwardingMode"] !== null) {
            $this->ForwardingMode = $param["ForwardingMode"];
        }

        if (array_key_exists("TcpIdleConnectTimeout",$param) and $param["TcpIdleConnectTimeout"] !== null) {
            $this->TcpIdleConnectTimeout = $param["TcpIdleConnectTimeout"];
        }

        if (array_key_exists("OthersIdleConnectTimeout",$param) and $param["OthersIdleConnectTimeout"] !== null) {
            $this->OthersIdleConnectTimeout = $param["OthersIdleConnectTimeout"];
        }

        if (array_key_exists("RescheduleUnbindRs",$param) and $param["RescheduleUnbindRs"] !== null) {
            $this->RescheduleUnbindRs = $param["RescheduleUnbindRs"];
        }

        if (array_key_exists("RescheduleUnbindRsStartTime",$param) and $param["RescheduleUnbindRsStartTime"] !== null) {
            $this->RescheduleUnbindRsStartTime = $param["RescheduleUnbindRsStartTime"];
        }

        if (array_key_exists("RescheduleUnhealthy",$param) and $param["RescheduleUnhealthy"] !== null) {
            $this->RescheduleUnhealthy = $param["RescheduleUnhealthy"];
        }

        if (array_key_exists("RescheduleUnhealthyStartTime",$param) and $param["RescheduleUnhealthyStartTime"] !== null) {
            $this->RescheduleUnhealthyStartTime = $param["RescheduleUnhealthyStartTime"];
        }
    }
}
