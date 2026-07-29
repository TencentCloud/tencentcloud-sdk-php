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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康检查配置信息，若不指定该参数，则默认不设置健康检查。
 *
 * @method string getActionType() 获取<p>健康检查方法。HTTP：通过 HTTP 接口检查；CMD：通过执行命令检查；TCP：通过建立 TCP 连接检查。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionType(string $ActionType) 设置<p>健康检查方法。HTTP：通过 HTTP 接口检查；CMD：通过执行命令检查；TCP：通过建立 TCP 连接检查。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInitialDelaySeconds() 获取<p>容器延时启动健康检查的时间，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置<p>容器延时启动健康检查的时间，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeoutSeconds() 获取<p>每次健康检查响应的最大超时时间，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeoutSeconds(integer $TimeoutSeconds) 设置<p>每次健康检查响应的最大超时时间，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPeriodSeconds() 获取<p>进行健康检查的时间间隔，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriodSeconds(integer $PeriodSeconds) 设置<p>进行健康检查的时间间隔，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessThreshold() 获取<p>表示后端容器从失败到成功的连续健康检查成功次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessThreshold(integer $SuccessThreshold) 设置<p>表示后端容器从失败到成功的连续健康检查成功次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailureThreshold() 获取<p>表示后端容器从成功到失败的连续健康检查成功次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureThreshold(integer $FailureThreshold) 设置<p>表示后端容器从成功到失败的连续健康检查成功次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheme() 获取<p>HTTP 健康检查方法使用的检查协议。支持HTTP、HTTPS。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheme(string $Scheme) 设置<p>HTTP 健康检查方法使用的检查协议。支持HTTP、HTTPS。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取<p>健康检查端口，范围 1~65535 。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置<p>健康检查端口，范围 1~65535 。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取<p>HTTP 健康检查接口的请求路径。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置<p>HTTP 健康检查接口的请求路径。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCommand() 获取<p>执行命令检查方式，执行的命令。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommand(array $Command) 设置<p>执行命令检查方式，执行的命令。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>TSF_DEFAULT：tsf 默认就绪探针。K8S_NATIVE：k8s 原生探针。不填默认为 k8s 原生探针。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>TSF_DEFAULT：tsf 默认就绪探针。K8S_NATIVE：k8s 原生探针。不填默认为 k8s 原生探针。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class HealthCheckSetting extends AbstractModel
{
    /**
     * @var string <p>健康检查方法。HTTP：通过 HTTP 接口检查；CMD：通过执行命令检查；TCP：通过建立 TCP 连接检查。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionType;

    /**
     * @var integer <p>容器延时启动健康检查的时间，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitialDelaySeconds;

    /**
     * @var integer <p>每次健康检查响应的最大超时时间，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeoutSeconds;

    /**
     * @var integer <p>进行健康检查的时间间隔，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeriodSeconds;

    /**
     * @var integer <p>表示后端容器从失败到成功的连续健康检查成功次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessThreshold;

    /**
     * @var integer <p>表示后端容器从成功到失败的连续健康检查成功次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureThreshold;

    /**
     * @var string <p>HTTP 健康检查方法使用的检查协议。支持HTTP、HTTPS。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scheme;

    /**
     * @var integer <p>健康检查端口，范围 1~65535 。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string <p>HTTP 健康检查接口的请求路径。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var array <p>执行命令检查方式，执行的命令。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Command;

    /**
     * @var string <p>TSF_DEFAULT：tsf 默认就绪探针。K8S_NATIVE：k8s 原生探针。不填默认为 k8s 原生探针。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $ActionType <p>健康检查方法。HTTP：通过 HTTP 接口检查；CMD：通过执行命令检查；TCP：通过建立 TCP 连接检查。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InitialDelaySeconds <p>容器延时启动健康检查的时间，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeoutSeconds <p>每次健康检查响应的最大超时时间，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PeriodSeconds <p>进行健康检查的时间间隔，单位秒。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessThreshold <p>表示后端容器从失败到成功的连续健康检查成功次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailureThreshold <p>表示后端容器从成功到失败的连续健康检查成功次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scheme <p>HTTP 健康检查方法使用的检查协议。支持HTTP、HTTPS。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port <p>健康检查端口，范围 1~65535 。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path <p>HTTP 健康检查接口的请求路径。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Command <p>执行命令检查方式，执行的命令。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>TSF_DEFAULT：tsf 默认就绪探针。K8S_NATIVE：k8s 原生探针。不填默认为 k8s 原生探针。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("TimeoutSeconds",$param) and $param["TimeoutSeconds"] !== null) {
            $this->TimeoutSeconds = $param["TimeoutSeconds"];
        }

        if (array_key_exists("PeriodSeconds",$param) and $param["PeriodSeconds"] !== null) {
            $this->PeriodSeconds = $param["PeriodSeconds"];
        }

        if (array_key_exists("SuccessThreshold",$param) and $param["SuccessThreshold"] !== null) {
            $this->SuccessThreshold = $param["SuccessThreshold"];
        }

        if (array_key_exists("FailureThreshold",$param) and $param["FailureThreshold"] !== null) {
            $this->FailureThreshold = $param["FailureThreshold"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
