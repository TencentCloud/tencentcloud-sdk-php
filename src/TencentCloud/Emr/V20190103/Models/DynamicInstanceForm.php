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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建DynamicInstance提交的表单数据
 *
 * @method string getDynamicInstanceName() 获取<p>DynamicInstance名，长度限制1-64字符，只能包含小写字母</p>
 * @method void setDynamicInstanceName(string $DynamicInstanceName) 设置<p>DynamicInstance名，长度限制1-64字符，只能包含小写字母</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method boolean getSupportHA() 获取<p>是否支持高可用</p>
 * @method void setSupportHA(boolean $SupportHA) 设置<p>是否支持高可用</p>
 * @method CustomImage getCustomImage() 获取<p>自定义镜像信息</p>
 * @method void setCustomImage(CustomImage $CustomImage) 设置<p>自定义镜像信息</p>
 * @method array getDynamicInstanceGroups() 获取<p>资源组配置</p>
 * @method void setDynamicInstanceGroups(array $DynamicInstanceGroups) 设置<p>资源组配置</p>
 * @method boolean getSupportPV() 获取<p>是否支持存储配置</p>
 * @method void setSupportPV(boolean $SupportPV) 设置<p>是否支持存储配置</p>
 * @method array getCBSVolumes() 获取<p>cbs存储卷列表</p>
 * @method void setCBSVolumes(array $CBSVolumes) 设置<p>cbs存储卷列表</p>
 * @method array getCFSVolumes() 获取<p>cfs存储卷列表，只包含cfs，不包含cfs turbo</p>
 * @method void setCFSVolumes(array $CFSVolumes) 设置<p>cfs存储卷列表，只包含cfs，不包含cfs turbo</p>
 * @method array getCOSVolumes() 获取<p>cos存储卷列表</p>
 * @method void setCOSVolumes(array $COSVolumes) 设置<p>cos存储卷列表</p>
 * @method array getVolumeMounts() 获取<p>挂载卷列表</p>
 * @method void setVolumeMounts(array $VolumeMounts) 设置<p>挂载卷列表</p>
 * @method array getLabels() 获取<p>pod标签</p>
 * @method void setLabels(array $Labels) 设置<p>pod标签</p>
 * @method array getTolerations() 获取<p>Tolerations定义</p>
 * @method void setTolerations(array $Tolerations) 设置<p>Tolerations定义</p>
 * @method array getEnvs() 获取<p>环境变量</p>
 * @method void setEnvs(array $Envs) 设置<p>环境变量</p>
 * @method array getDependServices() 获取<p>依赖外部组件</p>
 * @method void setDependServices(array $DependServices) 设置<p>依赖外部组件</p>
 * @method boolean getSupportToken() 获取<p>是否开启token鉴权</p>
 * @method void setSupportToken(boolean $SupportToken) 设置<p>是否开启token鉴权</p>
 * @method array getCFSTurboVolumes() 获取<p>cfs trubo挂载列表，不包含标准版cfs</p>
 * @method void setCFSTurboVolumes(array $CFSTurboVolumes) 设置<p>cfs trubo挂载列表，不包含标准版cfs</p>
 */
class DynamicInstanceForm extends AbstractModel
{
    /**
     * @var string <p>DynamicInstance名，长度限制1-64字符，只能包含小写字母</p>
     */
    public $DynamicInstanceName;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var boolean <p>是否支持高可用</p>
     */
    public $SupportHA;

    /**
     * @var CustomImage <p>自定义镜像信息</p>
     */
    public $CustomImage;

    /**
     * @var array <p>资源组配置</p>
     */
    public $DynamicInstanceGroups;

    /**
     * @var boolean <p>是否支持存储配置</p>
     */
    public $SupportPV;

    /**
     * @var array <p>cbs存储卷列表</p>
     */
    public $CBSVolumes;

    /**
     * @var array <p>cfs存储卷列表，只包含cfs，不包含cfs turbo</p>
     */
    public $CFSVolumes;

    /**
     * @var array <p>cos存储卷列表</p>
     */
    public $COSVolumes;

    /**
     * @var array <p>挂载卷列表</p>
     */
    public $VolumeMounts;

    /**
     * @var array <p>pod标签</p>
     */
    public $Labels;

    /**
     * @var array <p>Tolerations定义</p>
     */
    public $Tolerations;

    /**
     * @var array <p>环境变量</p>
     */
    public $Envs;

    /**
     * @var array <p>依赖外部组件</p>
     */
    public $DependServices;

    /**
     * @var boolean <p>是否开启token鉴权</p>
     */
    public $SupportToken;

    /**
     * @var array <p>cfs trubo挂载列表，不包含标准版cfs</p>
     */
    public $CFSTurboVolumes;

    /**
     * @param string $DynamicInstanceName <p>DynamicInstance名，长度限制1-64字符，只能包含小写字母</p>
     * @param string $Namespace <p>命名空间</p>
     * @param boolean $SupportHA <p>是否支持高可用</p>
     * @param CustomImage $CustomImage <p>自定义镜像信息</p>
     * @param array $DynamicInstanceGroups <p>资源组配置</p>
     * @param boolean $SupportPV <p>是否支持存储配置</p>
     * @param array $CBSVolumes <p>cbs存储卷列表</p>
     * @param array $CFSVolumes <p>cfs存储卷列表，只包含cfs，不包含cfs turbo</p>
     * @param array $COSVolumes <p>cos存储卷列表</p>
     * @param array $VolumeMounts <p>挂载卷列表</p>
     * @param array $Labels <p>pod标签</p>
     * @param array $Tolerations <p>Tolerations定义</p>
     * @param array $Envs <p>环境变量</p>
     * @param array $DependServices <p>依赖外部组件</p>
     * @param boolean $SupportToken <p>是否开启token鉴权</p>
     * @param array $CFSTurboVolumes <p>cfs trubo挂载列表，不包含标准版cfs</p>
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
        if (array_key_exists("DynamicInstanceName",$param) and $param["DynamicInstanceName"] !== null) {
            $this->DynamicInstanceName = $param["DynamicInstanceName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("CustomImage",$param) and $param["CustomImage"] !== null) {
            $this->CustomImage = new CustomImage();
            $this->CustomImage->deserialize($param["CustomImage"]);
        }

        if (array_key_exists("DynamicInstanceGroups",$param) and $param["DynamicInstanceGroups"] !== null) {
            $this->DynamicInstanceGroups = [];
            foreach ($param["DynamicInstanceGroups"] as $key => $value){
                $obj = new DynamicInstanceGroup();
                $obj->deserialize($value);
                array_push($this->DynamicInstanceGroups, $obj);
            }
        }

        if (array_key_exists("SupportPV",$param) and $param["SupportPV"] !== null) {
            $this->SupportPV = $param["SupportPV"];
        }

        if (array_key_exists("CBSVolumes",$param) and $param["CBSVolumes"] !== null) {
            $this->CBSVolumes = [];
            foreach ($param["CBSVolumes"] as $key => $value){
                $obj = new CBSVolume();
                $obj->deserialize($value);
                array_push($this->CBSVolumes, $obj);
            }
        }

        if (array_key_exists("CFSVolumes",$param) and $param["CFSVolumes"] !== null) {
            $this->CFSVolumes = [];
            foreach ($param["CFSVolumes"] as $key => $value){
                $obj = new CFSVolume();
                $obj->deserialize($value);
                array_push($this->CFSVolumes, $obj);
            }
        }

        if (array_key_exists("COSVolumes",$param) and $param["COSVolumes"] !== null) {
            $this->COSVolumes = [];
            foreach ($param["COSVolumes"] as $key => $value){
                $obj = new COSVolume();
                $obj->deserialize($value);
                array_push($this->COSVolumes, $obj);
            }
        }

        if (array_key_exists("VolumeMounts",$param) and $param["VolumeMounts"] !== null) {
            $this->VolumeMounts = [];
            foreach ($param["VolumeMounts"] as $key => $value){
                $obj = new VolumeMount();
                $obj->deserialize($value);
                array_push($this->VolumeMounts, $obj);
            }
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TkeLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Tolerations",$param) and $param["Tolerations"] !== null) {
            $this->Tolerations = [];
            foreach ($param["Tolerations"] as $key => $value){
                $obj = new Toleration();
                $obj->deserialize($value);
                array_push($this->Tolerations, $obj);
            }
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new NameValue();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("DependServices",$param) and $param["DependServices"] !== null) {
            $this->DependServices = [];
            foreach ($param["DependServices"] as $key => $value){
                $obj = new DependService();
                $obj->deserialize($value);
                array_push($this->DependServices, $obj);
            }
        }

        if (array_key_exists("SupportToken",$param) and $param["SupportToken"] !== null) {
            $this->SupportToken = $param["SupportToken"];
        }

        if (array_key_exists("CFSTurboVolumes",$param) and $param["CFSTurboVolumes"] !== null) {
            $this->CFSTurboVolumes = [];
            foreach ($param["CFSTurboVolumes"] as $key => $value){
                $obj = new CFSTurboVolume();
                $obj->deserialize($value);
                array_push($this->CFSTurboVolumes, $obj);
            }
        }
    }
}
