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
 * CreateClusterNodePool请求参数结构体
 *
 * @method string getClusterId() 获取<p>cluster id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>cluster id</p>
 * @method string getAutoScalingGroupPara() 获取<p>AutoScalingGroupPara AS组参数，参考 https://cloud.tencent.com/document/product/377/20440</p>
 * @method void setAutoScalingGroupPara(string $AutoScalingGroupPara) 设置<p>AutoScalingGroupPara AS组参数，参考 https://cloud.tencent.com/document/product/377/20440</p>
 * @method string getLaunchConfigurePara() 获取<p>LaunchConfigurePara 运行参数，参考 https://cloud.tencent.com/document/product/377/20447</p>
 * @method void setLaunchConfigurePara(string $LaunchConfigurePara) 设置<p>LaunchConfigurePara 运行参数，参考 https://cloud.tencent.com/document/product/377/20447</p>
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取<p>InstanceAdvancedSettings</p>
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置<p>InstanceAdvancedSettings</p>
 * @method boolean getEnableAutoscale() 获取<p>是否启用自动伸缩</p>
 * @method void setEnableAutoscale(boolean $EnableAutoscale) 设置<p>是否启用自动伸缩</p>
 * @method string getName() 获取<p>节点池名称</p>
 * @method void setName(string $Name) 设置<p>节点池名称</p>
 * @method array getLabels() 获取<p>Labels标签</p>
 * @method void setLabels(array $Labels) 设置<p>Labels标签</p>
 * @method array getTaints() 获取<p>Taints互斥</p>
 * @method void setTaints(array $Taints) 设置<p>Taints互斥</p>
 * @method array getAnnotations() 获取<p>节点Annotation 列表</p>
 * @method void setAnnotations(array $Annotations) 设置<p>节点Annotation 列表</p>
 * @method string getContainerRuntime() 获取<p>节点池纬度运行时类型及版本</p>
 * @method void setContainerRuntime(string $ContainerRuntime) 设置<p>节点池纬度运行时类型及版本</p>
 * @method string getRuntimeVersion() 获取<p>运行时版本</p>
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置<p>运行时版本</p>
 * @method string getNodePoolOs() 获取<p>节点池os，当为自定义镜像时，传镜像id；否则为公共镜像的osName</p>
 * @method void setNodePoolOs(string $NodePoolOs) 设置<p>节点池os，当为自定义镜像时，传镜像id；否则为公共镜像的osName</p>
 * @method string getOsCustomizeType() 获取<p>容器的镜像版本，&quot;DOCKER_CUSTOMIZE&quot;(容器定制版),&quot;GENERAL&quot;(普通版本，默认值)</p>
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置<p>容器的镜像版本，&quot;DOCKER_CUSTOMIZE&quot;(容器定制版),&quot;GENERAL&quot;(普通版本，默认值)</p>
 * @method array getTags() 获取<p>资源标签</p>
 * @method void setTags(array $Tags) 设置<p>资源标签</p>
 * @method boolean getDeletionProtection() 获取<p>删除保护开关</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>删除保护开关</p>
 */
class CreateClusterNodePoolRequest extends AbstractModel
{
    /**
     * @var string <p>cluster id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>AutoScalingGroupPara AS组参数，参考 https://cloud.tencent.com/document/product/377/20440</p>
     */
    public $AutoScalingGroupPara;

    /**
     * @var string <p>LaunchConfigurePara 运行参数，参考 https://cloud.tencent.com/document/product/377/20447</p>
     */
    public $LaunchConfigurePara;

    /**
     * @var InstanceAdvancedSettings <p>InstanceAdvancedSettings</p>
     */
    public $InstanceAdvancedSettings;

    /**
     * @var boolean <p>是否启用自动伸缩</p>
     */
    public $EnableAutoscale;

    /**
     * @var string <p>节点池名称</p>
     */
    public $Name;

    /**
     * @var array <p>Labels标签</p>
     */
    public $Labels;

    /**
     * @var array <p>Taints互斥</p>
     */
    public $Taints;

    /**
     * @var array <p>节点Annotation 列表</p>
     */
    public $Annotations;

    /**
     * @var string <p>节点池纬度运行时类型及版本</p>
     */
    public $ContainerRuntime;

    /**
     * @var string <p>运行时版本</p>
     */
    public $RuntimeVersion;

    /**
     * @var string <p>节点池os，当为自定义镜像时，传镜像id；否则为公共镜像的osName</p>
     */
    public $NodePoolOs;

    /**
     * @var string <p>容器的镜像版本，&quot;DOCKER_CUSTOMIZE&quot;(容器定制版),&quot;GENERAL&quot;(普通版本，默认值)</p>
     */
    public $OsCustomizeType;

    /**
     * @var array <p>资源标签</p>
     */
    public $Tags;

    /**
     * @var boolean <p>删除保护开关</p>
     */
    public $DeletionProtection;

    /**
     * @param string $ClusterId <p>cluster id</p>
     * @param string $AutoScalingGroupPara <p>AutoScalingGroupPara AS组参数，参考 https://cloud.tencent.com/document/product/377/20440</p>
     * @param string $LaunchConfigurePara <p>LaunchConfigurePara 运行参数，参考 https://cloud.tencent.com/document/product/377/20447</p>
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings <p>InstanceAdvancedSettings</p>
     * @param boolean $EnableAutoscale <p>是否启用自动伸缩</p>
     * @param string $Name <p>节点池名称</p>
     * @param array $Labels <p>Labels标签</p>
     * @param array $Taints <p>Taints互斥</p>
     * @param array $Annotations <p>节点Annotation 列表</p>
     * @param string $ContainerRuntime <p>节点池纬度运行时类型及版本</p>
     * @param string $RuntimeVersion <p>运行时版本</p>
     * @param string $NodePoolOs <p>节点池os，当为自定义镜像时，传镜像id；否则为公共镜像的osName</p>
     * @param string $OsCustomizeType <p>容器的镜像版本，&quot;DOCKER_CUSTOMIZE&quot;(容器定制版),&quot;GENERAL&quot;(普通版本，默认值)</p>
     * @param array $Tags <p>资源标签</p>
     * @param boolean $DeletionProtection <p>删除保护开关</p>
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

        if (array_key_exists("AutoScalingGroupPara",$param) and $param["AutoScalingGroupPara"] !== null) {
            $this->AutoScalingGroupPara = $param["AutoScalingGroupPara"];
        }

        if (array_key_exists("LaunchConfigurePara",$param) and $param["LaunchConfigurePara"] !== null) {
            $this->LaunchConfigurePara = $param["LaunchConfigurePara"];
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("EnableAutoscale",$param) and $param["EnableAutoscale"] !== null) {
            $this->EnableAutoscale = $param["EnableAutoscale"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("NodePoolOs",$param) and $param["NodePoolOs"] !== null) {
            $this->NodePoolOs = $param["NodePoolOs"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
