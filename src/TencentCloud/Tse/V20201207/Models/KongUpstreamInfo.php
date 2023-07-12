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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务的后端配置
 *
 * @method string getHost() 获取IP或域名
 * @method void setHost(string $Host) 设置IP或域名
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getSourceID() 获取服务来源ID
 * @method void setSourceID(string $SourceID) 设置服务来源ID
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getServiceName() 获取服务（注册中心或Kubernetes中的服务）名字
 * @method void setServiceName(string $ServiceName) 设置服务（注册中心或Kubernetes中的服务）名字
 * @method array getTargets() 获取服务后端类型是IPList时提供
 * @method void setTargets(array $Targets) 设置服务后端类型是IPList时提供
 * @method string getSourceType() 获取服务来源类型
 * @method void setSourceType(string $SourceType) 设置服务来源类型
 * @method string getScfType() 获取SCF函数类型
 * @method void setScfType(string $ScfType) 设置SCF函数类型
 * @method string getScfNamespace() 获取SCF函数命名空间
 * @method void setScfNamespace(string $ScfNamespace) 设置SCF函数命名空间
 * @method string getScfLambdaName() 获取SCF函数名
 * @method void setScfLambdaName(string $ScfLambdaName) 设置SCF函数名
 * @method string getScfLambdaQualifier() 获取SCF函数版本
 * @method void setScfLambdaQualifier(string $ScfLambdaQualifier) 设置SCF函数版本
 * @method integer getSlowStart() 获取冷启动时间，单位秒
 * @method void setSlowStart(integer $SlowStart) 设置冷启动时间，单位秒
 * @method string getAlgorithm() 获取负载均衡算法，默认为 round-robin，还支持 least-connections，consisten_hashing
 * @method void setAlgorithm(string $Algorithm) 设置负载均衡算法，默认为 round-robin，还支持 least-connections，consisten_hashing
 * @method string getAutoScalingGroupID() 获取CVM弹性伸缩组ID
 * @method void setAutoScalingGroupID(string $AutoScalingGroupID) 设置CVM弹性伸缩组ID
 * @method integer getAutoScalingCvmPort() 获取CVM弹性伸缩组端口
 * @method void setAutoScalingCvmPort(integer $AutoScalingCvmPort) 设置CVM弹性伸缩组端口
 * @method string getAutoScalingTatCmdStatus() 获取CVM弹性伸缩组使用的CVM TAT命令状态
 * @method void setAutoScalingTatCmdStatus(string $AutoScalingTatCmdStatus) 设置CVM弹性伸缩组使用的CVM TAT命令状态
 * @method string getAutoScalingHookStatus() 获取CVM弹性伸缩组生命周期挂钩状态
 * @method void setAutoScalingHookStatus(string $AutoScalingHookStatus) 设置CVM弹性伸缩组生命周期挂钩状态
 * @method string getSourceName() 获取服务来源的名字
 * @method void setSourceName(string $SourceName) 设置服务来源的名字
 * @method string getRealSourceType() 获取精确的服务来源类型，新建服务来源时候传入的类型
 * @method void setRealSourceType(string $RealSourceType) 设置精确的服务来源类型，新建服务来源时候传入的类型
 */
class KongUpstreamInfo extends AbstractModel
{
    /**
     * @var string IP或域名
     */
    public $Host;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string 服务来源ID
     */
    public $SourceID;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 服务（注册中心或Kubernetes中的服务）名字
     */
    public $ServiceName;

    /**
     * @var array 服务后端类型是IPList时提供
     */
    public $Targets;

    /**
     * @var string 服务来源类型
     */
    public $SourceType;

    /**
     * @var string SCF函数类型
     */
    public $ScfType;

    /**
     * @var string SCF函数命名空间
     */
    public $ScfNamespace;

    /**
     * @var string SCF函数名
     */
    public $ScfLambdaName;

    /**
     * @var string SCF函数版本
     */
    public $ScfLambdaQualifier;

    /**
     * @var integer 冷启动时间，单位秒
     */
    public $SlowStart;

    /**
     * @var string 负载均衡算法，默认为 round-robin，还支持 least-connections，consisten_hashing
     */
    public $Algorithm;

    /**
     * @var string CVM弹性伸缩组ID
     */
    public $AutoScalingGroupID;

    /**
     * @var integer CVM弹性伸缩组端口
     */
    public $AutoScalingCvmPort;

    /**
     * @var string CVM弹性伸缩组使用的CVM TAT命令状态
     */
    public $AutoScalingTatCmdStatus;

    /**
     * @var string CVM弹性伸缩组生命周期挂钩状态
     */
    public $AutoScalingHookStatus;

    /**
     * @var string 服务来源的名字
     */
    public $SourceName;

    /**
     * @var string 精确的服务来源类型，新建服务来源时候传入的类型
     */
    public $RealSourceType;

    /**
     * @param string $Host IP或域名
     * @param integer $Port 端口
     * @param string $SourceID 服务来源ID
     * @param string $Namespace 命名空间
     * @param string $ServiceName 服务（注册中心或Kubernetes中的服务）名字
     * @param array $Targets 服务后端类型是IPList时提供
     * @param string $SourceType 服务来源类型
     * @param string $ScfType SCF函数类型
     * @param string $ScfNamespace SCF函数命名空间
     * @param string $ScfLambdaName SCF函数名
     * @param string $ScfLambdaQualifier SCF函数版本
     * @param integer $SlowStart 冷启动时间，单位秒
     * @param string $Algorithm 负载均衡算法，默认为 round-robin，还支持 least-connections，consisten_hashing
     * @param string $AutoScalingGroupID CVM弹性伸缩组ID
     * @param integer $AutoScalingCvmPort CVM弹性伸缩组端口
     * @param string $AutoScalingTatCmdStatus CVM弹性伸缩组使用的CVM TAT命令状态
     * @param string $AutoScalingHookStatus CVM弹性伸缩组生命周期挂钩状态
     * @param string $SourceName 服务来源的名字
     * @param string $RealSourceType 精确的服务来源类型，新建服务来源时候传入的类型
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("SourceID",$param) and $param["SourceID"] !== null) {
            $this->SourceID = $param["SourceID"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new KongTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("ScfType",$param) and $param["ScfType"] !== null) {
            $this->ScfType = $param["ScfType"];
        }

        if (array_key_exists("ScfNamespace",$param) and $param["ScfNamespace"] !== null) {
            $this->ScfNamespace = $param["ScfNamespace"];
        }

        if (array_key_exists("ScfLambdaName",$param) and $param["ScfLambdaName"] !== null) {
            $this->ScfLambdaName = $param["ScfLambdaName"];
        }

        if (array_key_exists("ScfLambdaQualifier",$param) and $param["ScfLambdaQualifier"] !== null) {
            $this->ScfLambdaQualifier = $param["ScfLambdaQualifier"];
        }

        if (array_key_exists("SlowStart",$param) and $param["SlowStart"] !== null) {
            $this->SlowStart = $param["SlowStart"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("AutoScalingGroupID",$param) and $param["AutoScalingGroupID"] !== null) {
            $this->AutoScalingGroupID = $param["AutoScalingGroupID"];
        }

        if (array_key_exists("AutoScalingCvmPort",$param) and $param["AutoScalingCvmPort"] !== null) {
            $this->AutoScalingCvmPort = $param["AutoScalingCvmPort"];
        }

        if (array_key_exists("AutoScalingTatCmdStatus",$param) and $param["AutoScalingTatCmdStatus"] !== null) {
            $this->AutoScalingTatCmdStatus = $param["AutoScalingTatCmdStatus"];
        }

        if (array_key_exists("AutoScalingHookStatus",$param) and $param["AutoScalingHookStatus"] !== null) {
            $this->AutoScalingHookStatus = $param["AutoScalingHookStatus"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("RealSourceType",$param) and $param["RealSourceType"] !== null) {
            $this->RealSourceType = $param["RealSourceType"];
        }
    }
}
