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
 * DescribeDynamicInstanceDetail返回参数结构体
 *
 * @method string getRayClusterName() 获取<p>ray集群名</p>
 * @method void setRayClusterName(string $RayClusterName) 设置<p>ray集群名</p>
 * @method integer getRayClusterId() 获取<p>ray集群ID</p>
 * @method void setRayClusterId(integer $RayClusterId) 设置<p>ray集群ID</p>
 * @method integer getSubmitType() 获取<p>创建类型</p><p>枚举值：</p><ul><li>1： 表单创建</li><li>2： yaml创建</li></ul>
 * @method void setSubmitType(integer $SubmitType) 设置<p>创建类型</p><p>枚举值：</p><ul><li>1： 表单创建</li><li>2： yaml创建</li></ul>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method array getLabels() 获取<p>labels</p>
 * @method void setLabels(array $Labels) 设置<p>labels</p>
 * @method array getTolerations() 获取<p>Tolerations</p>
 * @method void setTolerations(array $Tolerations) 设置<p>Tolerations</p>
 * @method array getEnv() 获取<p>环境变量</p>
 * @method void setEnv(array $Env) 设置<p>环境变量</p>
 * @method boolean getSupportExternalKerberosService() 获取<p>是否依赖 Kerberos 外部组件</p>
 * @method void setSupportExternalKerberosService(boolean $SupportExternalKerberosService) 设置<p>是否依赖 Kerberos 外部组件</p>
 * @method string getKerberosCluster() 获取<p>依赖的Kerberos集群</p>
 * @method void setKerberosCluster(string $KerberosCluster) 设置<p>依赖的Kerberos集群</p>
 * @method string getToken() 获取<p>token</p>
 * @method void setToken(string $Token) 设置<p>token</p>
 * @method DynamicInstanceGroupSpec getHeadGroupSpec() 获取<p>HeadGroup</p>
 * @method void setHeadGroupSpec(DynamicInstanceGroupSpec $HeadGroupSpec) 设置<p>HeadGroup</p>
 * @method array getWorkerGroupSpecs() 获取<p>WorkerGroup</p>
 * @method void setWorkerGroupSpecs(array $WorkerGroupSpecs) 设置<p>WorkerGroup</p>
 * @method boolean getStorageConfigEnabled() 获取<p>是否开启存储配置</p>
 * @method void setStorageConfigEnabled(boolean $StorageConfigEnabled) 设置<p>是否开启存储配置</p>
 * @method RedisInstance getRedisInstance() 获取<p>Redis 实例信息</p>
 * @method void setRedisInstance(RedisInstance $RedisInstance) 设置<p>Redis 实例信息</p>
 * @method CustomImage getCustomImage() 获取<p>镜像信息</p>
 * @method void setCustomImage(CustomImage $CustomImage) 设置<p>镜像信息</p>
 * @method string getDashboardUrl() 获取<p>dashboard链接</p>
 * @method void setDashboardUrl(string $DashboardUrl) 设置<p>dashboard链接</p>
 * @method integer getTotalPodCount() 获取<p>pod 总数</p>
 * @method void setTotalPodCount(integer $TotalPodCount) 设置<p>pod 总数</p>
 * @method boolean getHighAvailability() 获取<p>是否高可用</p>
 * @method void setHighAvailability(boolean $HighAvailability) 设置<p>是否高可用</p>
 * @method PersistentVolume getPersistentVolume() 获取<p>存储信息</p>
 * @method void setPersistentVolume(PersistentVolume $PersistentVolume) 设置<p>存储信息</p>
 * @method string getRayClusterYaml() 获取<p>rayClusterYamlJson</p>
 * @method void setRayClusterYaml(string $RayClusterYaml) 设置<p>rayClusterYamlJson</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDynamicInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string <p>ray集群名</p>
     */
    public $RayClusterName;

    /**
     * @var integer <p>ray集群ID</p>
     */
    public $RayClusterId;

    /**
     * @var integer <p>创建类型</p><p>枚举值：</p><ul><li>1： 表单创建</li><li>2： yaml创建</li></ul>
     */
    public $SubmitType;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>labels</p>
     */
    public $Labels;

    /**
     * @var array <p>Tolerations</p>
     */
    public $Tolerations;

    /**
     * @var array <p>环境变量</p>
     */
    public $Env;

    /**
     * @var boolean <p>是否依赖 Kerberos 外部组件</p>
     */
    public $SupportExternalKerberosService;

    /**
     * @var string <p>依赖的Kerberos集群</p>
     */
    public $KerberosCluster;

    /**
     * @var string <p>token</p>
     */
    public $Token;

    /**
     * @var DynamicInstanceGroupSpec <p>HeadGroup</p>
     */
    public $HeadGroupSpec;

    /**
     * @var array <p>WorkerGroup</p>
     */
    public $WorkerGroupSpecs;

    /**
     * @var boolean <p>是否开启存储配置</p>
     */
    public $StorageConfigEnabled;

    /**
     * @var RedisInstance <p>Redis 实例信息</p>
     */
    public $RedisInstance;

    /**
     * @var CustomImage <p>镜像信息</p>
     */
    public $CustomImage;

    /**
     * @var string <p>dashboard链接</p>
     */
    public $DashboardUrl;

    /**
     * @var integer <p>pod 总数</p>
     */
    public $TotalPodCount;

    /**
     * @var boolean <p>是否高可用</p>
     */
    public $HighAvailability;

    /**
     * @var PersistentVolume <p>存储信息</p>
     */
    public $PersistentVolume;

    /**
     * @var string <p>rayClusterYamlJson</p>
     */
    public $RayClusterYaml;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RayClusterName <p>ray集群名</p>
     * @param integer $RayClusterId <p>ray集群ID</p>
     * @param integer $SubmitType <p>创建类型</p><p>枚举值：</p><ul><li>1： 表单创建</li><li>2： yaml创建</li></ul>
     * @param string $Namespace <p>命名空间</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param array $Labels <p>labels</p>
     * @param array $Tolerations <p>Tolerations</p>
     * @param array $Env <p>环境变量</p>
     * @param boolean $SupportExternalKerberosService <p>是否依赖 Kerberos 外部组件</p>
     * @param string $KerberosCluster <p>依赖的Kerberos集群</p>
     * @param string $Token <p>token</p>
     * @param DynamicInstanceGroupSpec $HeadGroupSpec <p>HeadGroup</p>
     * @param array $WorkerGroupSpecs <p>WorkerGroup</p>
     * @param boolean $StorageConfigEnabled <p>是否开启存储配置</p>
     * @param RedisInstance $RedisInstance <p>Redis 实例信息</p>
     * @param CustomImage $CustomImage <p>镜像信息</p>
     * @param string $DashboardUrl <p>dashboard链接</p>
     * @param integer $TotalPodCount <p>pod 总数</p>
     * @param boolean $HighAvailability <p>是否高可用</p>
     * @param PersistentVolume $PersistentVolume <p>存储信息</p>
     * @param string $RayClusterYaml <p>rayClusterYamlJson</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RayClusterName",$param) and $param["RayClusterName"] !== null) {
            $this->RayClusterName = $param["RayClusterName"];
        }

        if (array_key_exists("RayClusterId",$param) and $param["RayClusterId"] !== null) {
            $this->RayClusterId = $param["RayClusterId"];
        }

        if (array_key_exists("SubmitType",$param) and $param["SubmitType"] !== null) {
            $this->SubmitType = $param["SubmitType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new NameValue();
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

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = [];
            foreach ($param["Env"] as $key => $value){
                $obj = new NameValue();
                $obj->deserialize($value);
                array_push($this->Env, $obj);
            }
        }

        if (array_key_exists("SupportExternalKerberosService",$param) and $param["SupportExternalKerberosService"] !== null) {
            $this->SupportExternalKerberosService = $param["SupportExternalKerberosService"];
        }

        if (array_key_exists("KerberosCluster",$param) and $param["KerberosCluster"] !== null) {
            $this->KerberosCluster = $param["KerberosCluster"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("HeadGroupSpec",$param) and $param["HeadGroupSpec"] !== null) {
            $this->HeadGroupSpec = new DynamicInstanceGroupSpec();
            $this->HeadGroupSpec->deserialize($param["HeadGroupSpec"]);
        }

        if (array_key_exists("WorkerGroupSpecs",$param) and $param["WorkerGroupSpecs"] !== null) {
            $this->WorkerGroupSpecs = [];
            foreach ($param["WorkerGroupSpecs"] as $key => $value){
                $obj = new DynamicInstanceGroupSpec();
                $obj->deserialize($value);
                array_push($this->WorkerGroupSpecs, $obj);
            }
        }

        if (array_key_exists("StorageConfigEnabled",$param) and $param["StorageConfigEnabled"] !== null) {
            $this->StorageConfigEnabled = $param["StorageConfigEnabled"];
        }

        if (array_key_exists("RedisInstance",$param) and $param["RedisInstance"] !== null) {
            $this->RedisInstance = new RedisInstance();
            $this->RedisInstance->deserialize($param["RedisInstance"]);
        }

        if (array_key_exists("CustomImage",$param) and $param["CustomImage"] !== null) {
            $this->CustomImage = new CustomImage();
            $this->CustomImage->deserialize($param["CustomImage"]);
        }

        if (array_key_exists("DashboardUrl",$param) and $param["DashboardUrl"] !== null) {
            $this->DashboardUrl = $param["DashboardUrl"];
        }

        if (array_key_exists("TotalPodCount",$param) and $param["TotalPodCount"] !== null) {
            $this->TotalPodCount = $param["TotalPodCount"];
        }

        if (array_key_exists("HighAvailability",$param) and $param["HighAvailability"] !== null) {
            $this->HighAvailability = $param["HighAvailability"];
        }

        if (array_key_exists("PersistentVolume",$param) and $param["PersistentVolume"] !== null) {
            $this->PersistentVolume = new PersistentVolume();
            $this->PersistentVolume->deserialize($param["PersistentVolume"]);
        }

        if (array_key_exists("RayClusterYaml",$param) and $param["RayClusterYaml"] !== null) {
            $this->RayClusterYaml = $param["RayClusterYaml"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
