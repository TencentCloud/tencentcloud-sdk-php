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
 * InstallSoftware请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群实例号</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群实例号</p>
 * @method array getSoftInfo() 获取<p>组件版本号，例如presto-0.161，可根据InstallSoftWareInfo查看当前集群可安装的组件</p>
 * @method void setSoftInfo(array $SoftInfo) 设置<p>组件版本号，例如presto-0.161，可根据InstallSoftWareInfo查看当前集群可安装的组件</p>
 * @method string getCdbAutoRenew() 获取<p>如果需要购买CDB，如果是包年包月集群，是否为这个cdb自动续费，默认AUTO_RENEW,如不自动续费新增的CDB，则填入NOT_AUTO_RENEW</p>
 * @method void setCdbAutoRenew(string $CdbAutoRenew) 设置<p>如果需要购买CDB，如果是包年包月集群，是否为这个cdb自动续费，默认AUTO_RENEW,如不自动续费新增的CDB，则填入NOT_AUTO_RENEW</p>
 * @method string getMetaType() 获取<p>hive共享元数据库类型。取值范围：</p><li>EMR_NEW_META：表示集群默认创建</li><li>EMR_EXIT_METE：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
 * @method void setMetaType(string $MetaType) 设置<p>hive共享元数据库类型。取值范围：</p><li>EMR_NEW_META：表示集群默认创建</li><li>EMR_EXIT_METE：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
 * @method string getUnifyMetaInstanceId() 获取<p>EMR-MetaDB实例</p>
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) 设置<p>EMR-MetaDB实例</p>
 * @method CustomMetaInfo getMetaDBInfo() 获取<p>自定义MetaDB信息</p>
 * @method void setMetaDBInfo(CustomMetaInfo $MetaDBInfo) 设置<p>自定义MetaDB信息</p>
 * @method array getExternalService() 获取<p>共用组件信息</p>
 * @method void setExternalService(array $ExternalService) 设置<p>共用组件信息</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 * @method array getCloudResources() 获取<p>角色的Pod规格信息</p>
 * @method void setCloudResources(array $CloudResources) 设置<p>角色的Pod规格信息</p>
 * @method array getServiceDeployInfoList() 获取<p>自定义部署信息</p>
 * @method void setServiceDeployInfoList(array $ServiceDeployInfoList) 设置<p>自定义部署信息</p>
 * @method string getDefaultMetaVersion() 获取<p>数据库版本</p>
 * @method void setDefaultMetaVersion(string $DefaultMetaVersion) 设置<p>数据库版本</p>
 * @method integer getNeedCdbAudit() 获取<p>是否开通审计</p>
 * @method void setNeedCdbAudit(integer $NeedCdbAudit) 设置<p>是否开通审计</p>
 * @method ContainerExtraConf getContainerExtraConf() 获取<p>额外容器相关配置</p>
 * @method void setContainerExtraConf(ContainerExtraConf $ContainerExtraConf) 设置<p>额外容器相关配置</p>
 */
class InstallSoftwareRequest extends AbstractModel
{
    /**
     * @var string <p>集群实例号</p>
     */
    public $InstanceId;

    /**
     * @var array <p>组件版本号，例如presto-0.161，可根据InstallSoftWareInfo查看当前集群可安装的组件</p>
     */
    public $SoftInfo;

    /**
     * @var string <p>如果需要购买CDB，如果是包年包月集群，是否为这个cdb自动续费，默认AUTO_RENEW,如不自动续费新增的CDB，则填入NOT_AUTO_RENEW</p>
     */
    public $CdbAutoRenew;

    /**
     * @var string <p>hive共享元数据库类型。取值范围：</p><li>EMR_NEW_META：表示集群默认创建</li><li>EMR_EXIT_METE：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
     */
    public $MetaType;

    /**
     * @var string <p>EMR-MetaDB实例</p>
     */
    public $UnifyMetaInstanceId;

    /**
     * @var CustomMetaInfo <p>自定义MetaDB信息</p>
     */
    public $MetaDBInfo;

    /**
     * @var array <p>共用组件信息</p>
     */
    public $ExternalService;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @var array <p>角色的Pod规格信息</p>
     */
    public $CloudResources;

    /**
     * @var array <p>自定义部署信息</p>
     */
    public $ServiceDeployInfoList;

    /**
     * @var string <p>数据库版本</p>
     */
    public $DefaultMetaVersion;

    /**
     * @var integer <p>是否开通审计</p>
     */
    public $NeedCdbAudit;

    /**
     * @var ContainerExtraConf <p>额外容器相关配置</p>
     */
    public $ContainerExtraConf;

    /**
     * @param string $InstanceId <p>集群实例号</p>
     * @param array $SoftInfo <p>组件版本号，例如presto-0.161，可根据InstallSoftWareInfo查看当前集群可安装的组件</p>
     * @param string $CdbAutoRenew <p>如果需要购买CDB，如果是包年包月集群，是否为这个cdb自动续费，默认AUTO_RENEW,如不自动续费新增的CDB，则填入NOT_AUTO_RENEW</p>
     * @param string $MetaType <p>hive共享元数据库类型。取值范围：</p><li>EMR_NEW_META：表示集群默认创建</li><li>EMR_EXIT_METE：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
     * @param string $UnifyMetaInstanceId <p>EMR-MetaDB实例</p>
     * @param CustomMetaInfo $MetaDBInfo <p>自定义MetaDB信息</p>
     * @param array $ExternalService <p>共用组件信息</p>
     * @param array $Tags <p>标签信息</p>
     * @param array $CloudResources <p>角色的Pod规格信息</p>
     * @param array $ServiceDeployInfoList <p>自定义部署信息</p>
     * @param string $DefaultMetaVersion <p>数据库版本</p>
     * @param integer $NeedCdbAudit <p>是否开通审计</p>
     * @param ContainerExtraConf $ContainerExtraConf <p>额外容器相关配置</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SoftInfo",$param) and $param["SoftInfo"] !== null) {
            $this->SoftInfo = $param["SoftInfo"];
        }

        if (array_key_exists("CdbAutoRenew",$param) and $param["CdbAutoRenew"] !== null) {
            $this->CdbAutoRenew = $param["CdbAutoRenew"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("UnifyMetaInstanceId",$param) and $param["UnifyMetaInstanceId"] !== null) {
            $this->UnifyMetaInstanceId = $param["UnifyMetaInstanceId"];
        }

        if (array_key_exists("MetaDBInfo",$param) and $param["MetaDBInfo"] !== null) {
            $this->MetaDBInfo = new CustomMetaInfo();
            $this->MetaDBInfo->deserialize($param["MetaDBInfo"]);
        }

        if (array_key_exists("ExternalService",$param) and $param["ExternalService"] !== null) {
            $this->ExternalService = [];
            foreach ($param["ExternalService"] as $key => $value){
                $obj = new ExternalService();
                $obj->deserialize($value);
                array_push($this->ExternalService, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CloudResources",$param) and $param["CloudResources"] !== null) {
            $this->CloudResources = [];
            foreach ($param["CloudResources"] as $key => $value){
                $obj = new CloudResource();
                $obj->deserialize($value);
                array_push($this->CloudResources, $obj);
            }
        }

        if (array_key_exists("ServiceDeployInfoList",$param) and $param["ServiceDeployInfoList"] !== null) {
            $this->ServiceDeployInfoList = [];
            foreach ($param["ServiceDeployInfoList"] as $key => $value){
                $obj = new ServiceDeployInfo();
                $obj->deserialize($value);
                array_push($this->ServiceDeployInfoList, $obj);
            }
        }

        if (array_key_exists("DefaultMetaVersion",$param) and $param["DefaultMetaVersion"] !== null) {
            $this->DefaultMetaVersion = $param["DefaultMetaVersion"];
        }

        if (array_key_exists("NeedCdbAudit",$param) and $param["NeedCdbAudit"] !== null) {
            $this->NeedCdbAudit = $param["NeedCdbAudit"];
        }

        if (array_key_exists("ContainerExtraConf",$param) and $param["ContainerExtraConf"] !== null) {
            $this->ContainerExtraConf = new ContainerExtraConf();
            $this->ContainerExtraConf->deserialize($param["ContainerExtraConf"]);
        }
    }
}
