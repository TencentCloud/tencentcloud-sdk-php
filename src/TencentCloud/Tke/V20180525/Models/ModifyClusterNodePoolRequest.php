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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterNodePool请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getNodePoolId() 获取<p>节点池ID</p>
 * @method void setNodePoolId(string $NodePoolId) 设置<p>节点池ID</p>
 * @method string getName() 获取<p>名称，最长63个字符，只能包含小写字母、数字及分隔符“_”，且必须以小写字母开头，数字或小写字母结尾</p>
 * @method void setName(string $Name) 设置<p>名称，最长63个字符，只能包含小写字母、数字及分隔符“_”，且必须以小写字母开头，数字或小写字母结尾</p>
 * @method integer getMaxNodesNum() 获取<p>最大节点数</p>
 * @method void setMaxNodesNum(integer $MaxNodesNum) 设置<p>最大节点数</p>
 * @method integer getMinNodesNum() 获取<p>最小节点数</p>
 * @method void setMinNodesNum(integer $MinNodesNum) 设置<p>最小节点数</p>
 * @method array getLabels() 获取<p>标签</p>
 * @method void setLabels(array $Labels) 设置<p>标签</p>
 * @method array getTaints() 获取<p>污点</p>
 * @method void setTaints(array $Taints) 设置<p>污点</p>
 * @method array getAnnotations() 获取<p>节点 Annotation 列表</p>
 * @method void setAnnotations(array $Annotations) 设置<p>节点 Annotation 列表</p>
 * @method boolean getEnableAutoscale() 获取<p>是否开启伸缩</p>
 * @method void setEnableAutoscale(boolean $EnableAutoscale) 设置<p>是否开启伸缩</p>
 * @method string getOsName() 获取<p>操作系统名称</p>
 * @method void setOsName(string $OsName) 设置<p>操作系统名称</p>
 * @method string getOsCustomizeType() 获取<p>镜像版本，&quot;DOCKER_CUSTOMIZE&quot;(容器定制版),&quot;GENERAL&quot;(普通版本，默认值)</p>
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置<p>镜像版本，&quot;DOCKER_CUSTOMIZE&quot;(容器定制版),&quot;GENERAL&quot;(普通版本，默认值)</p>
 * @method GPUArgs getGPUArgs() 获取<p>GPU驱动版本，CUDA版本，cuDNN版本以及是否启用MIG特性</p>
 * @method void setGPUArgs(GPUArgs $GPUArgs) 设置<p>GPU驱动版本，CUDA版本，cuDNN版本以及是否启用MIG特性</p>
 * @method string getUserScript() 获取<p>base64编码后的自定义脚本</p>
 * @method void setUserScript(string $UserScript) 设置<p>base64编码后的自定义脚本</p>
 * @method boolean getIgnoreExistedNode() 获取<p>更新label和taint时忽略存量节点</p>
 * @method void setIgnoreExistedNode(boolean $IgnoreExistedNode) 设置<p>更新label和taint时忽略存量节点</p>
 * @method InstanceExtraArgs getExtraArgs() 获取<p>节点自定义参数</p>
 * @method void setExtraArgs(InstanceExtraArgs $ExtraArgs) 设置<p>节点自定义参数</p>
 * @method array getTags() 获取<p>资源标签</p>
 * @method void setTags(array $Tags) 设置<p>资源标签</p>
 * @method integer getUnschedulable() 获取<p>设置加入的节点是否参与调度，默认值为0，表示参与调度；非0表示不参与调度, 待节点初始化完成之后, 可执行kubectl uncordon nodename使node加入调度.</p>
 * @method void setUnschedulable(integer $Unschedulable) 设置<p>设置加入的节点是否参与调度，默认值为0，表示参与调度；非0表示不参与调度, 待节点初始化完成之后, 可执行kubectl uncordon nodename使node加入调度.</p>
 * @method boolean getDeletionProtection() 获取<p>删除保护开关</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>删除保护开关</p>
 * @method string getDockerGraphPath() 获取<p>dockerd --graph 指定值, 默认为 /var/lib/docker</p>
 * @method void setDockerGraphPath(string $DockerGraphPath) 设置<p>dockerd --graph 指定值, 默认为 /var/lib/docker</p>
 * @method string getPreStartUserScript() 获取<p>base64编码后的自定义脚本</p>
 * @method void setPreStartUserScript(string $PreStartUserScript) 设置<p>base64编码后的自定义脚本</p>
 */
class ModifyClusterNodePoolRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>节点池ID</p>
     */
    public $NodePoolId;

    /**
     * @var string <p>名称，最长63个字符，只能包含小写字母、数字及分隔符“_”，且必须以小写字母开头，数字或小写字母结尾</p>
     */
    public $Name;

    /**
     * @var integer <p>最大节点数</p>
     */
    public $MaxNodesNum;

    /**
     * @var integer <p>最小节点数</p>
     */
    public $MinNodesNum;

    /**
     * @var array <p>标签</p>
     */
    public $Labels;

    /**
     * @var array <p>污点</p>
     */
    public $Taints;

    /**
     * @var array <p>节点 Annotation 列表</p>
     */
    public $Annotations;

    /**
     * @var boolean <p>是否开启伸缩</p>
     */
    public $EnableAutoscale;

    /**
     * @var string <p>操作系统名称</p>
     */
    public $OsName;

    /**
     * @var string <p>镜像版本，&quot;DOCKER_CUSTOMIZE&quot;(容器定制版),&quot;GENERAL&quot;(普通版本，默认值)</p>
     */
    public $OsCustomizeType;

    /**
     * @var GPUArgs <p>GPU驱动版本，CUDA版本，cuDNN版本以及是否启用MIG特性</p>
     */
    public $GPUArgs;

    /**
     * @var string <p>base64编码后的自定义脚本</p>
     */
    public $UserScript;

    /**
     * @var boolean <p>更新label和taint时忽略存量节点</p>
     */
    public $IgnoreExistedNode;

    /**
     * @var InstanceExtraArgs <p>节点自定义参数</p>
     */
    public $ExtraArgs;

    /**
     * @var array <p>资源标签</p>
     */
    public $Tags;

    /**
     * @var integer <p>设置加入的节点是否参与调度，默认值为0，表示参与调度；非0表示不参与调度, 待节点初始化完成之后, 可执行kubectl uncordon nodename使node加入调度.</p>
     */
    public $Unschedulable;

    /**
     * @var boolean <p>删除保护开关</p>
     */
    public $DeletionProtection;

    /**
     * @var string <p>dockerd --graph 指定值, 默认为 /var/lib/docker</p>
     */
    public $DockerGraphPath;

    /**
     * @var string <p>base64编码后的自定义脚本</p>
     */
    public $PreStartUserScript;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $NodePoolId <p>节点池ID</p>
     * @param string $Name <p>名称，最长63个字符，只能包含小写字母、数字及分隔符“_”，且必须以小写字母开头，数字或小写字母结尾</p>
     * @param integer $MaxNodesNum <p>最大节点数</p>
     * @param integer $MinNodesNum <p>最小节点数</p>
     * @param array $Labels <p>标签</p>
     * @param array $Taints <p>污点</p>
     * @param array $Annotations <p>节点 Annotation 列表</p>
     * @param boolean $EnableAutoscale <p>是否开启伸缩</p>
     * @param string $OsName <p>操作系统名称</p>
     * @param string $OsCustomizeType <p>镜像版本，&quot;DOCKER_CUSTOMIZE&quot;(容器定制版),&quot;GENERAL&quot;(普通版本，默认值)</p>
     * @param GPUArgs $GPUArgs <p>GPU驱动版本，CUDA版本，cuDNN版本以及是否启用MIG特性</p>
     * @param string $UserScript <p>base64编码后的自定义脚本</p>
     * @param boolean $IgnoreExistedNode <p>更新label和taint时忽略存量节点</p>
     * @param InstanceExtraArgs $ExtraArgs <p>节点自定义参数</p>
     * @param array $Tags <p>资源标签</p>
     * @param integer $Unschedulable <p>设置加入的节点是否参与调度，默认值为0，表示参与调度；非0表示不参与调度, 待节点初始化完成之后, 可执行kubectl uncordon nodename使node加入调度.</p>
     * @param boolean $DeletionProtection <p>删除保护开关</p>
     * @param string $DockerGraphPath <p>dockerd --graph 指定值, 默认为 /var/lib/docker</p>
     * @param string $PreStartUserScript <p>base64编码后的自定义脚本</p>
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

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MaxNodesNum",$param) and $param["MaxNodesNum"] !== null) {
            $this->MaxNodesNum = $param["MaxNodesNum"];
        }

        if (array_key_exists("MinNodesNum",$param) and $param["MinNodesNum"] !== null) {
            $this->MinNodesNum = $param["MinNodesNum"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new AnnotationValue();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
            }
        }

        if (array_key_exists("EnableAutoscale",$param) and $param["EnableAutoscale"] !== null) {
            $this->EnableAutoscale = $param["EnableAutoscale"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("GPUArgs",$param) and $param["GPUArgs"] !== null) {
            $this->GPUArgs = new GPUArgs();
            $this->GPUArgs->deserialize($param["GPUArgs"]);
        }

        if (array_key_exists("UserScript",$param) and $param["UserScript"] !== null) {
            $this->UserScript = $param["UserScript"];
        }

        if (array_key_exists("IgnoreExistedNode",$param) and $param["IgnoreExistedNode"] !== null) {
            $this->IgnoreExistedNode = $param["IgnoreExistedNode"];
        }

        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new InstanceExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("DockerGraphPath",$param) and $param["DockerGraphPath"] !== null) {
            $this->DockerGraphPath = $param["DockerGraphPath"];
        }

        if (array_key_exists("PreStartUserScript",$param) and $param["PreStartUserScript"] !== null) {
            $this->PreStartUserScript = $param["PreStartUserScript"];
        }
    }
}
