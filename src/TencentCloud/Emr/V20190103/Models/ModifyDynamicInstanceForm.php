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
 * 更新DynamicInstance提交的表单数据
 *
 * @method integer getModifyScope() 获取<p>更新作用域：<br>1：添加workerGroup（DynamicInstance级别）<br>2：更新存储配置（DynamicInstance级别）<br>3：更新标签配置（DynamicInstance级别）<br>4：更新高级配置（DynamicInstance级别）<br>5：更新PodCpu、PodMem（DynamicInstance-group级别）<br>6：更新PodNum、MinPodNum、MaxPodNum（DynamicInstance-group级别）<br>7：更新存储配置（DynamicInstance-group级别）<br>8：更新标签配置（DynamicInstance-group级别）</p>
 * @method void setModifyScope(integer $ModifyScope) 设置<p>更新作用域：<br>1：添加workerGroup（DynamicInstance级别）<br>2：更新存储配置（DynamicInstance级别）<br>3：更新标签配置（DynamicInstance级别）<br>4：更新高级配置（DynamicInstance级别）<br>5：更新PodCpu、PodMem（DynamicInstance-group级别）<br>6：更新PodNum、MinPodNum、MaxPodNum（DynamicInstance-group级别）<br>7：更新存储配置（DynamicInstance-group级别）<br>8：更新标签配置（DynamicInstance-group级别）</p>
 * @method DynamicInstanceGroup getAddDynamicInstanceGroup() 获取<p>添加的workerGroup信息</p>
 * @method void setAddDynamicInstanceGroup(DynamicInstanceGroup $AddDynamicInstanceGroup) 设置<p>添加的workerGroup信息</p>
 * @method boolean getSupportPV() 获取<p>是否支持存储配置</p>
 * @method void setSupportPV(boolean $SupportPV) 设置<p>是否支持存储配置</p>
 * @method array getCBSVolumes() 获取<p>cbs存储卷列表</p>
 * @method void setCBSVolumes(array $CBSVolumes) 设置<p>cbs存储卷列表</p>
 * @method array getCFSVolumes() 获取<p>cfs存储卷列表，不包含cfs turbo列表</p>
 * @method void setCFSVolumes(array $CFSVolumes) 设置<p>cfs存储卷列表，不包含cfs turbo列表</p>
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
 * @method boolean getSupportNewToken() 获取<p>是否生成新token鉴权</p>
 * @method void setSupportNewToken(boolean $SupportNewToken) 设置<p>是否生成新token鉴权</p>
 * @method DynamicInstanceGroup getModifyDynamicInstanceGroup() 获取<p>DynamicInstance-group级别的更新信息</p>
 * @method void setModifyDynamicInstanceGroup(DynamicInstanceGroup $ModifyDynamicInstanceGroup) 设置<p>DynamicInstance-group级别的更新信息</p>
 * @method array getCFSTurboVolumes() 获取<p>cfs turbo挂载列表，不包含标准版</p>
 * @method void setCFSTurboVolumes(array $CFSTurboVolumes) 设置<p>cfs turbo挂载列表，不包含标准版</p>
 */
class ModifyDynamicInstanceForm extends AbstractModel
{
    /**
     * @var integer <p>更新作用域：<br>1：添加workerGroup（DynamicInstance级别）<br>2：更新存储配置（DynamicInstance级别）<br>3：更新标签配置（DynamicInstance级别）<br>4：更新高级配置（DynamicInstance级别）<br>5：更新PodCpu、PodMem（DynamicInstance-group级别）<br>6：更新PodNum、MinPodNum、MaxPodNum（DynamicInstance-group级别）<br>7：更新存储配置（DynamicInstance-group级别）<br>8：更新标签配置（DynamicInstance-group级别）</p>
     */
    public $ModifyScope;

    /**
     * @var DynamicInstanceGroup <p>添加的workerGroup信息</p>
     */
    public $AddDynamicInstanceGroup;

    /**
     * @var boolean <p>是否支持存储配置</p>
     */
    public $SupportPV;

    /**
     * @var array <p>cbs存储卷列表</p>
     */
    public $CBSVolumes;

    /**
     * @var array <p>cfs存储卷列表，不包含cfs turbo列表</p>
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
     * @var boolean <p>是否生成新token鉴权</p>
     */
    public $SupportNewToken;

    /**
     * @var DynamicInstanceGroup <p>DynamicInstance-group级别的更新信息</p>
     */
    public $ModifyDynamicInstanceGroup;

    /**
     * @var array <p>cfs turbo挂载列表，不包含标准版</p>
     */
    public $CFSTurboVolumes;

    /**
     * @param integer $ModifyScope <p>更新作用域：<br>1：添加workerGroup（DynamicInstance级别）<br>2：更新存储配置（DynamicInstance级别）<br>3：更新标签配置（DynamicInstance级别）<br>4：更新高级配置（DynamicInstance级别）<br>5：更新PodCpu、PodMem（DynamicInstance-group级别）<br>6：更新PodNum、MinPodNum、MaxPodNum（DynamicInstance-group级别）<br>7：更新存储配置（DynamicInstance-group级别）<br>8：更新标签配置（DynamicInstance-group级别）</p>
     * @param DynamicInstanceGroup $AddDynamicInstanceGroup <p>添加的workerGroup信息</p>
     * @param boolean $SupportPV <p>是否支持存储配置</p>
     * @param array $CBSVolumes <p>cbs存储卷列表</p>
     * @param array $CFSVolumes <p>cfs存储卷列表，不包含cfs turbo列表</p>
     * @param array $COSVolumes <p>cos存储卷列表</p>
     * @param array $VolumeMounts <p>挂载卷列表</p>
     * @param array $Labels <p>pod标签</p>
     * @param array $Tolerations <p>Tolerations定义</p>
     * @param array $Envs <p>环境变量</p>
     * @param array $DependServices <p>依赖外部组件</p>
     * @param boolean $SupportNewToken <p>是否生成新token鉴权</p>
     * @param DynamicInstanceGroup $ModifyDynamicInstanceGroup <p>DynamicInstance-group级别的更新信息</p>
     * @param array $CFSTurboVolumes <p>cfs turbo挂载列表，不包含标准版</p>
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
        if (array_key_exists("ModifyScope",$param) and $param["ModifyScope"] !== null) {
            $this->ModifyScope = $param["ModifyScope"];
        }

        if (array_key_exists("AddDynamicInstanceGroup",$param) and $param["AddDynamicInstanceGroup"] !== null) {
            $this->AddDynamicInstanceGroup = new DynamicInstanceGroup();
            $this->AddDynamicInstanceGroup->deserialize($param["AddDynamicInstanceGroup"]);
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

        if (array_key_exists("SupportNewToken",$param) and $param["SupportNewToken"] !== null) {
            $this->SupportNewToken = $param["SupportNewToken"];
        }

        if (array_key_exists("ModifyDynamicInstanceGroup",$param) and $param["ModifyDynamicInstanceGroup"] !== null) {
            $this->ModifyDynamicInstanceGroup = new DynamicInstanceGroup();
            $this->ModifyDynamicInstanceGroup->deserialize($param["ModifyDynamicInstanceGroup"]);
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
