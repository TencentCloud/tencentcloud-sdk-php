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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了k8s集群相关配置与信息。
 *
 * @method integer getDesiredPodNumber() 获取该节点属于podCIDR大小自定义模式时，可指定节点上运行的pod数量上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesiredPodNumber(integer $DesiredPodNumber) 设置该节点属于podCIDR大小自定义模式时，可指定节点上运行的pod数量上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPreStartUserScript() 获取base64 编码的用户脚本，在初始化节点之前执行，目前只对添加已有节点生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreStartUserScript(string $PreStartUserScript) 设置base64 编码的用户脚本，在初始化节点之前执行，目前只对添加已有节点生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuntimeConfig getRuntimeConfig() 获取运行时描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeConfig(RuntimeConfig $RuntimeConfig) 设置运行时描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserScript() 获取base64 编码的用户脚本, 此脚本会在 k8s 组件运行后执行, 需要用户保证脚本的可重入及重试逻辑, 脚本及其生成的日志文件可在节点的 /data/ccs_userscript/ 路径查看, 如果要求节点需要在进行初始化完成后才可加入调度, 可配合 unschedulable 参数使用, 在 userScript 最后初始化完成后, 添加 kubectl uncordon nodename --kubeconfig=/root/.kube/config 命令使节点加入调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserScript(string $UserScript) 设置base64 编码的用户脚本, 此脚本会在 k8s 组件运行后执行, 需要用户保证脚本的可重入及重试逻辑, 脚本及其生成的日志文件可在节点的 /data/ccs_userscript/ 路径查看, 如果要求节点需要在进行初始化完成后才可加入调度, 可配合 unschedulable 参数使用, 在 userScript 最后初始化完成后, 添加 kubectl uncordon nodename --kubeconfig=/root/.kube/config 命令使节点加入调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceExtraArgs getExtraArgs() 获取节点相关的自定义参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraArgs(InstanceExtraArgs $ExtraArgs) 设置节点相关的自定义参数信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceAdvancedSettings extends AbstractModel
{
    /**
     * @var integer 该节点属于podCIDR大小自定义模式时，可指定节点上运行的pod数量上限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DesiredPodNumber;

    /**
     * @var string base64 编码的用户脚本，在初始化节点之前执行，目前只对添加已有节点生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreStartUserScript;

    /**
     * @var RuntimeConfig 运行时描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeConfig;

    /**
     * @var string base64 编码的用户脚本, 此脚本会在 k8s 组件运行后执行, 需要用户保证脚本的可重入及重试逻辑, 脚本及其生成的日志文件可在节点的 /data/ccs_userscript/ 路径查看, 如果要求节点需要在进行初始化完成后才可加入调度, 可配合 unschedulable 参数使用, 在 userScript 最后初始化完成后, 添加 kubectl uncordon nodename --kubeconfig=/root/.kube/config 命令使节点加入调度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserScript;

    /**
     * @var InstanceExtraArgs 节点相关的自定义参数信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraArgs;

    /**
     * @param integer $DesiredPodNumber 该节点属于podCIDR大小自定义模式时，可指定节点上运行的pod数量上限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PreStartUserScript base64 编码的用户脚本，在初始化节点之前执行，目前只对添加已有节点生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuntimeConfig $RuntimeConfig 运行时描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserScript base64 编码的用户脚本, 此脚本会在 k8s 组件运行后执行, 需要用户保证脚本的可重入及重试逻辑, 脚本及其生成的日志文件可在节点的 /data/ccs_userscript/ 路径查看, 如果要求节点需要在进行初始化完成后才可加入调度, 可配合 unschedulable 参数使用, 在 userScript 最后初始化完成后, 添加 kubectl uncordon nodename --kubeconfig=/root/.kube/config 命令使节点加入调度
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceExtraArgs $ExtraArgs 节点相关的自定义参数信息
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
        if (array_key_exists("DesiredPodNumber",$param) and $param["DesiredPodNumber"] !== null) {
            $this->DesiredPodNumber = $param["DesiredPodNumber"];
        }

        if (array_key_exists("PreStartUserScript",$param) and $param["PreStartUserScript"] !== null) {
            $this->PreStartUserScript = $param["PreStartUserScript"];
        }

        if (array_key_exists("RuntimeConfig",$param) and $param["RuntimeConfig"] !== null) {
            $this->RuntimeConfig = new RuntimeConfig();
            $this->RuntimeConfig->deserialize($param["RuntimeConfig"]);
        }

        if (array_key_exists("UserScript",$param) and $param["UserScript"] !== null) {
            $this->UserScript = $param["UserScript"];
        }

        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new InstanceExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }
    }
}
