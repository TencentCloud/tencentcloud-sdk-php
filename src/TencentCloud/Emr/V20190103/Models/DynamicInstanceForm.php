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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDynamicInstanceName(string $DynamicInstanceName) 设置<p>DynamicInstance名，长度限制1-64字符，只能包含小写字母</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取<p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportHA() 获取<p>是否支持高可用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportHA(boolean $SupportHA) 设置<p>是否支持高可用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CustomImage getCustomImage() 获取<p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomImage(CustomImage $CustomImage) 设置<p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDynamicInstanceGroups() 获取<p>资源组配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDynamicInstanceGroups(array $DynamicInstanceGroups) 设置<p>资源组配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportPV() 获取<p>是否支持存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportPV(boolean $SupportPV) 设置<p>是否支持存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCBSVolumes() 获取<p>cbs存储卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCBSVolumes(array $CBSVolumes) 设置<p>cbs存储卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCFSVolumes() 获取<p>cfs存储卷列表，只包含cfs，不包含cfs turbo</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFSVolumes(array $CFSVolumes) 设置<p>cfs存储卷列表，只包含cfs，不包含cfs turbo</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCOSVolumes() 获取<p>cos存储卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCOSVolumes(array $COSVolumes) 设置<p>cos存储卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVolumeMounts() 获取<p>挂载卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeMounts(array $VolumeMounts) 设置<p>挂载卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取<p>pod标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置<p>pod标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTolerations() 获取<p>Tolerations定义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTolerations(array $Tolerations) 设置<p>Tolerations定义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnvs() 获取<p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvs(array $Envs) 设置<p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDependServices() 获取<p>依赖外部组件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDependServices(array $DependServices) 设置<p>依赖外部组件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportToken() 获取<p>是否开启token鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportToken(boolean $SupportToken) 设置<p>是否开启token鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCFSTurboVolumes() 获取<p>cfs trubo挂载列表，不包含标准版cfs</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFSTurboVolumes(array $CFSTurboVolumes) 设置<p>cfs trubo挂载列表，不包含标准版cfs</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfoV2 getImageInfoV2() 获取<p>自定义镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageInfoV2(ImageInfoV2 $ImageInfoV2) 设置<p>自定义镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGooseFSVolumes() 获取<p>GooseFS盘</p>
 * @method void setGooseFSVolumes(array $GooseFSVolumes) 设置<p>GooseFS盘</p>
 */
class DynamicInstanceForm extends AbstractModel
{
    /**
     * @var string <p>DynamicInstance名，长度限制1-64字符，只能包含小写字母</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DynamicInstanceName;

    /**
     * @var string <p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var boolean <p>是否支持高可用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportHA;

    /**
     * @var CustomImage <p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomImage;

    /**
     * @var array <p>资源组配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DynamicInstanceGroups;

    /**
     * @var boolean <p>是否支持存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportPV;

    /**
     * @var array <p>cbs存储卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CBSVolumes;

    /**
     * @var array <p>cfs存储卷列表，只包含cfs，不包含cfs turbo</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFSVolumes;

    /**
     * @var array <p>cos存储卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $COSVolumes;

    /**
     * @var array <p>挂载卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeMounts;

    /**
     * @var array <p>pod标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var array <p>Tolerations定义</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tolerations;

    /**
     * @var array <p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Envs;

    /**
     * @var array <p>依赖外部组件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DependServices;

    /**
     * @var boolean <p>是否开启token鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportToken;

    /**
     * @var array <p>cfs trubo挂载列表，不包含标准版cfs</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFSTurboVolumes;

    /**
     * @var ImageInfoV2 <p>自定义镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageInfoV2;

    /**
     * @var array <p>GooseFS盘</p>
     */
    public $GooseFSVolumes;

    /**
     * @param string $DynamicInstanceName <p>DynamicInstance名，长度限制1-64字符，只能包含小写字母</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace <p>命名空间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportHA <p>是否支持高可用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CustomImage $CustomImage <p>自定义镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DynamicInstanceGroups <p>资源组配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportPV <p>是否支持存储配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CBSVolumes <p>cbs存储卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CFSVolumes <p>cfs存储卷列表，只包含cfs，不包含cfs turbo</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $COSVolumes <p>cos存储卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VolumeMounts <p>挂载卷列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels <p>pod标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tolerations <p>Tolerations定义</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Envs <p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DependServices <p>依赖外部组件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportToken <p>是否开启token鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CFSTurboVolumes <p>cfs trubo挂载列表，不包含标准版cfs</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfoV2 $ImageInfoV2 <p>自定义镜像</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GooseFSVolumes <p>GooseFS盘</p>
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

        if (array_key_exists("ImageInfoV2",$param) and $param["ImageInfoV2"] !== null) {
            $this->ImageInfoV2 = new ImageInfoV2();
            $this->ImageInfoV2->deserialize($param["ImageInfoV2"]);
        }

        if (array_key_exists("GooseFSVolumes",$param) and $param["GooseFSVolumes"] !== null) {
            $this->GooseFSVolumes = [];
            foreach ($param["GooseFSVolumes"] as $key => $value){
                $obj = new GooseFSVolume();
                $obj->deserialize($value);
                array_push($this->GooseFSVolumes, $obj);
            }
        }
    }
}
