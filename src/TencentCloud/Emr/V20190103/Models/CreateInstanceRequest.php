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
 * CreateInstance请求参数结构体
 *
 * @method integer getProductId() 获取<p>产品ID，不同产品ID表示不同的EMR产品版本。取值范围：<br>51:表示STARROCKS-V1.4.0<br>54:表示STARROCKS-V2.0.0<br>27:表示KAFKA-V1.0.0<br>50:表示KAFKA-V2.0.0<br>16:表示EMR-V2.3.0<br>20:表示EMR-V2.5.0<br>30:表示EMR-V2.6.0<br>38:表示EMR-V2.7.0<br>25:表示EMR-V3.1.0<br>33:表示EMR-V3.2.1<br>34:表示EMR-V3.3.0<br>37:表示EMR-V3.4.0<br>44:表示EMR-V3.5.0<br>53:表示EMR-V3.6.0<br>58:表示EMR-3.6.1<br>59:表示EMR-serverless-1.0.0<br>60:表示EMR-TKE-1.1.0<br>61:表示SR-V2.1.0<br>62:表示SR-V2.1.0-SharedData<br>63:表示SR-V2.1.0.tlinux<br>64:表示统一元数据管理项目<br>65:表示EMR-TKE-AI-1.0.0<br>66:表示RSS-1.0.0<br>67:表示SR-V2.2.0<br>68:表示SR-V2.2.0.tlinux<br>69:表示EMR-AI-1.1.0<br>70:表示SR-V2.2.1<br>71:表示EMR-3.7.0<br>72:表示EMR-serverless-1.0.1<br>73:表示KAFKA-2.0.1<br>74:表示SR-V2.2.2<br>75:表示EMR-TKE-AI-1.1.0<br>76:表示EMR-V3.7.1<br>77:表示SERVERLESS-TCBASE-1.0.0<br>78:表示EMR-V3.6.2<br>79:表示STARROCKS-V2.2.2<br>80:表示EMR-AI-V1.1.1</p>
 * @method void setProductId(integer $ProductId) 设置<p>产品ID，不同产品ID表示不同的EMR产品版本。取值范围：<br>51:表示STARROCKS-V1.4.0<br>54:表示STARROCKS-V2.0.0<br>27:表示KAFKA-V1.0.0<br>50:表示KAFKA-V2.0.0<br>16:表示EMR-V2.3.0<br>20:表示EMR-V2.5.0<br>30:表示EMR-V2.6.0<br>38:表示EMR-V2.7.0<br>25:表示EMR-V3.1.0<br>33:表示EMR-V3.2.1<br>34:表示EMR-V3.3.0<br>37:表示EMR-V3.4.0<br>44:表示EMR-V3.5.0<br>53:表示EMR-V3.6.0<br>58:表示EMR-3.6.1<br>59:表示EMR-serverless-1.0.0<br>60:表示EMR-TKE-1.1.0<br>61:表示SR-V2.1.0<br>62:表示SR-V2.1.0-SharedData<br>63:表示SR-V2.1.0.tlinux<br>64:表示统一元数据管理项目<br>65:表示EMR-TKE-AI-1.0.0<br>66:表示RSS-1.0.0<br>67:表示SR-V2.2.0<br>68:表示SR-V2.2.0.tlinux<br>69:表示EMR-AI-1.1.0<br>70:表示SR-V2.2.1<br>71:表示EMR-3.7.0<br>72:表示EMR-serverless-1.0.1<br>73:表示KAFKA-2.0.1<br>74:表示SR-V2.2.2<br>75:表示EMR-TKE-AI-1.1.0<br>76:表示EMR-V3.7.1<br>77:表示SERVERLESS-TCBASE-1.0.0<br>78:表示EMR-V3.6.2<br>79:表示STARROCKS-V2.2.2<br>80:表示EMR-AI-V1.1.1</p>
 * @method array getSoftware() 获取<p>部署的组件列表。不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：<a href="https://cloud.tencent.com/document/product/589/20279">组件版本</a> ；<br>填写实例值：hive、flink。</p>
 * @method void setSoftware(array $Software) 设置<p>部署的组件列表。不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：<a href="https://cloud.tencent.com/document/product/589/20279">组件版本</a> ；<br>填写实例值：hive、flink。</p>
 * @method integer getSupportHA() 获取<p>是否开启节点高可用。取值范围：</p><li>0：表示不开启节点高可用。</li><li>1：表示开启节点高可用。</li>
 * @method void setSupportHA(integer $SupportHA) 设置<p>是否开启节点高可用。取值范围：</p><li>0：表示不开启节点高可用。</li><li>1：表示开启节点高可用。</li>
 * @method string getInstanceName() 获取<p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
 * @method integer getPayMode() 获取<p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
 * @method void setPayMode(integer $PayMode) 设置<p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
 * @method integer getTimeSpan() 获取<p>购买实例的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>购买实例的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
 * @method string getTimeUnit() 获取<p>购买实例的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>购买实例的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
 * @method LoginSettings getLoginSettings() 获取<p>实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。</p><li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li><li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。</p><li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li><li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
 * @method VPCSettings getVPCSettings() 获取<p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
 * @method void setVPCSettings(VPCSettings $VPCSettings) 设置<p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
 * @method NewResourceSpec getResourceSpec() 获取<p>节点资源的规格。</p>
 * @method void setResourceSpec(NewResourceSpec $ResourceSpec) 设置<p>节点资源的规格。</p>
 * @method COSSettings getCOSSettings() 获取<p>开启COS访问需要设置的参数。</p>
 * @method void setCOSSettings(COSSettings $COSSettings) 设置<p>开启COS访问需要设置的参数。</p>
 * @method Placement getPlacement() 获取<p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。</p>
 * @method void setPlacement(Placement $Placement) 设置<p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。</p>
 * @method string getSgId() 获取<p>实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
 * @method void setSgId(string $SgId) 设置<p>实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
 * @method array getPreExecutedFileSettings() 获取<p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
 * @method void setPreExecutedFileSettings(array $PreExecutedFileSettings) 设置<p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
 * @method integer getAutoRenew() 获取<p>包年包月实例是否自动续费。取值范围：</p><li>0：表示不自动续费。</li><li>1：表示自动续费。</li>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>包年包月实例是否自动续费。取值范围：</p><li>0：表示不自动续费。</li><li>1：表示自动续费。</li>
 * @method string getClientToken() 获取<p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
 * @method void setClientToken(string $ClientToken) 设置<p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
 * @method string getNeedMasterWan() 获取<p>是否开启集群Master节点公网。取值范围：</p><li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li><li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
 * @method void setNeedMasterWan(string $NeedMasterWan) 设置<p>是否开启集群Master节点公网。取值范围：</p><li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li><li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
 * @method integer getRemoteLoginAtCreate() 获取<p>是否需要开启外网远程登录，即22号端口。在SgId不为空时，该参数无效。</p>
 * @method void setRemoteLoginAtCreate(integer $RemoteLoginAtCreate) 设置<p>是否需要开启外网远程登录，即22号端口。在SgId不为空时，该参数无效。</p>
 * @method integer getCheckSecurity() 获取<p>是否开启安全集群。0表示不开启，非0表示开启。</p>
 * @method void setCheckSecurity(integer $CheckSecurity) 设置<p>是否开启安全集群。0表示不开启，非0表示开启。</p>
 * @method string getExtendFsField() 获取<p>访问外部文件系统。</p>
 * @method void setExtendFsField(string $ExtendFsField) 设置<p>访问外部文件系统。</p>
 * @method array getTags() 获取<p>标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。</p>
 * @method void setTags(array $Tags) 设置<p>标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。</p>
 * @method array getDisasterRecoverGroupIds() 获取<p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/15486">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置<p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/15486">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
 * @method integer getCbsEncrypt() 获取<p>集群维度CBS加密盘，默认0表示不加密，1表示加密</p>
 * @method void setCbsEncrypt(integer $CbsEncrypt) 设置<p>集群维度CBS加密盘，默认0表示不加密，1表示加密</p>
 * @method string getMetaType() 获取<p>hive共享元数据库类型。取值范围：</p><li>EMR_DEFAULT_META：表示集群默认创建</li><li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
 * @method void setMetaType(string $MetaType) 设置<p>hive共享元数据库类型。取值范围：</p><li>EMR_DEFAULT_META：表示集群默认创建</li><li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
 * @method string getUnifyMetaInstanceId() 获取<p>EMR-MetaDB实例</p>
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) 设置<p>EMR-MetaDB实例</p>
 * @method CustomMetaInfo getMetaDBInfo() 获取<p>自定义MetaDB信息</p>
 * @method void setMetaDBInfo(CustomMetaInfo $MetaDBInfo) 设置<p>自定义MetaDB信息</p>
 * @method string getApplicationRole() 获取<p>自定义应用角色。</p>
 * @method void setApplicationRole(string $ApplicationRole) 设置<p>自定义应用角色。</p>
 * @method string getSceneName() 获取<p>场景化取值：<br>Hadoop-Kudu<br>Hadoop-Zookeeper<br>Hadoop-Presto<br>Hadoop-Hbase</p>
 * @method void setSceneName(string $SceneName) 设置<p>场景化取值：<br>Hadoop-Kudu<br>Hadoop-Zookeeper<br>Hadoop-Presto<br>Hadoop-Hbase</p>
 * @method array getExternalService() 获取<p>共享组件信息</p>
 * @method void setExternalService(array $ExternalService) 设置<p>共享组件信息</p>
 * @method integer getVersionID() 获取<p>如果为0，则MultiZone、MultiDeployStrategy、MultiZoneSettings是disable的状态，如果为1，则废弃ResourceSpec，使用MultiZoneSettings。</p>
 * @method void setVersionID(integer $VersionID) 设置<p>如果为0，则MultiZone、MultiDeployStrategy、MultiZoneSettings是disable的状态，如果为1，则废弃ResourceSpec，使用MultiZoneSettings。</p>
 * @method boolean getMultiZone() 获取<p>true表示开启跨AZ部署；仅为新建集群时的用户参数，后续不支持调整。</p>
 * @method void setMultiZone(boolean $MultiZone) 设置<p>true表示开启跨AZ部署；仅为新建集群时的用户参数，后续不支持调整。</p>
 * @method array getMultiZoneSettings() 获取<p>节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。</p>
 * @method void setMultiZoneSettings(array $MultiZoneSettings) 设置<p>节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。</p>
 * @method string getCosBucket() 获取<p>cos桶路径，创建StarRocks存算分离集群时用到</p>
 * @method void setCosBucket(string $CosBucket) 设置<p>cos桶路径，创建StarRocks存算分离集群时用到</p>
 * @method array getNodeMarks() 获取<p>节点标识信息，目前只提供给tf平台使用</p>
 * @method void setNodeMarks(array $NodeMarks) 设置<p>节点标识信息，目前只提供给tf平台使用</p>
 * @method string getLoadBalancerId() 获取<p>CLB id</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>CLB id</p>
 * @method string getDefaultMetaVersion() 获取<p>数据库类型：mysql8/tdsql8</p>
 * @method void setDefaultMetaVersion(string $DefaultMetaVersion) 设置<p>数据库类型：mysql8/tdsql8</p>
 * @method integer getNeedCdbAudit() 获取<p>是否开通审计：0:不开通,1:开通</p>
 * @method void setNeedCdbAudit(integer $NeedCdbAudit) 设置<p>是否开通审计：0:不开通,1:开通</p>
 * @method string getSgIP() 获取<p>安全组指定来源ip</p>
 * @method void setSgIP(string $SgIP) 设置<p>安全组指定来源ip</p>
 * @method integer getPartitionNumber() 获取<p>分区置放群组分区</p>
 * @method void setPartitionNumber(integer $PartitionNumber) 设置<p>分区置放群组分区</p>
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var integer <p>产品ID，不同产品ID表示不同的EMR产品版本。取值范围：<br>51:表示STARROCKS-V1.4.0<br>54:表示STARROCKS-V2.0.0<br>27:表示KAFKA-V1.0.0<br>50:表示KAFKA-V2.0.0<br>16:表示EMR-V2.3.0<br>20:表示EMR-V2.5.0<br>30:表示EMR-V2.6.0<br>38:表示EMR-V2.7.0<br>25:表示EMR-V3.1.0<br>33:表示EMR-V3.2.1<br>34:表示EMR-V3.3.0<br>37:表示EMR-V3.4.0<br>44:表示EMR-V3.5.0<br>53:表示EMR-V3.6.0<br>58:表示EMR-3.6.1<br>59:表示EMR-serverless-1.0.0<br>60:表示EMR-TKE-1.1.0<br>61:表示SR-V2.1.0<br>62:表示SR-V2.1.0-SharedData<br>63:表示SR-V2.1.0.tlinux<br>64:表示统一元数据管理项目<br>65:表示EMR-TKE-AI-1.0.0<br>66:表示RSS-1.0.0<br>67:表示SR-V2.2.0<br>68:表示SR-V2.2.0.tlinux<br>69:表示EMR-AI-1.1.0<br>70:表示SR-V2.2.1<br>71:表示EMR-3.7.0<br>72:表示EMR-serverless-1.0.1<br>73:表示KAFKA-2.0.1<br>74:表示SR-V2.2.2<br>75:表示EMR-TKE-AI-1.1.0<br>76:表示EMR-V3.7.1<br>77:表示SERVERLESS-TCBASE-1.0.0<br>78:表示EMR-V3.6.2<br>79:表示STARROCKS-V2.2.2<br>80:表示EMR-AI-V1.1.1</p>
     */
    public $ProductId;

    /**
     * @var array <p>部署的组件列表。不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：<a href="https://cloud.tencent.com/document/product/589/20279">组件版本</a> ；<br>填写实例值：hive、flink。</p>
     */
    public $Software;

    /**
     * @var integer <p>是否开启节点高可用。取值范围：</p><li>0：表示不开启节点高可用。</li><li>1：表示开启节点高可用。</li>
     */
    public $SupportHA;

    /**
     * @var string <p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
     */
    public $InstanceName;

    /**
     * @var integer <p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
     */
    public $PayMode;

    /**
     * @var integer <p>购买实例的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
     */
    public $TimeSpan;

    /**
     * @var string <p>购买实例的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
     */
    public $TimeUnit;

    /**
     * @var LoginSettings <p>实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。</p><li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li><li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
     */
    public $LoginSettings;

    /**
     * @var VPCSettings <p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
     */
    public $VPCSettings;

    /**
     * @var NewResourceSpec <p>节点资源的规格。</p>
     */
    public $ResourceSpec;

    /**
     * @var COSSettings <p>开启COS访问需要设置的参数。</p>
     */
    public $COSSettings;

    /**
     * @var Placement <p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。</p>
     */
    public $Placement;

    /**
     * @var string <p>实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
     */
    public $SgId;

    /**
     * @var array <p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
     */
    public $PreExecutedFileSettings;

    /**
     * @var integer <p>包年包月实例是否自动续费。取值范围：</p><li>0：表示不自动续费。</li><li>1：表示自动续费。</li>
     */
    public $AutoRenew;

    /**
     * @var string <p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
     */
    public $ClientToken;

    /**
     * @var string <p>是否开启集群Master节点公网。取值范围：</p><li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li><li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
     */
    public $NeedMasterWan;

    /**
     * @var integer <p>是否需要开启外网远程登录，即22号端口。在SgId不为空时，该参数无效。</p>
     */
    public $RemoteLoginAtCreate;

    /**
     * @var integer <p>是否开启安全集群。0表示不开启，非0表示开启。</p>
     */
    public $CheckSecurity;

    /**
     * @var string <p>访问外部文件系统。</p>
     */
    public $ExtendFsField;

    /**
     * @var array <p>标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。</p>
     */
    public $Tags;

    /**
     * @var array <p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/15486">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var integer <p>集群维度CBS加密盘，默认0表示不加密，1表示加密</p>
     */
    public $CbsEncrypt;

    /**
     * @var string <p>hive共享元数据库类型。取值范围：</p><li>EMR_DEFAULT_META：表示集群默认创建</li><li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
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
     * @var string <p>自定义应用角色。</p>
     */
    public $ApplicationRole;

    /**
     * @var string <p>场景化取值：<br>Hadoop-Kudu<br>Hadoop-Zookeeper<br>Hadoop-Presto<br>Hadoop-Hbase</p>
     */
    public $SceneName;

    /**
     * @var array <p>共享组件信息</p>
     */
    public $ExternalService;

    /**
     * @var integer <p>如果为0，则MultiZone、MultiDeployStrategy、MultiZoneSettings是disable的状态，如果为1，则废弃ResourceSpec，使用MultiZoneSettings。</p>
     */
    public $VersionID;

    /**
     * @var boolean <p>true表示开启跨AZ部署；仅为新建集群时的用户参数，后续不支持调整。</p>
     */
    public $MultiZone;

    /**
     * @var array <p>节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。</p>
     */
    public $MultiZoneSettings;

    /**
     * @var string <p>cos桶路径，创建StarRocks存算分离集群时用到</p>
     */
    public $CosBucket;

    /**
     * @var array <p>节点标识信息，目前只提供给tf平台使用</p>
     */
    public $NodeMarks;

    /**
     * @var string <p>CLB id</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>数据库类型：mysql8/tdsql8</p>
     */
    public $DefaultMetaVersion;

    /**
     * @var integer <p>是否开通审计：0:不开通,1:开通</p>
     */
    public $NeedCdbAudit;

    /**
     * @var string <p>安全组指定来源ip</p>
     */
    public $SgIP;

    /**
     * @var integer <p>分区置放群组分区</p>
     */
    public $PartitionNumber;

    /**
     * @param integer $ProductId <p>产品ID，不同产品ID表示不同的EMR产品版本。取值范围：<br>51:表示STARROCKS-V1.4.0<br>54:表示STARROCKS-V2.0.0<br>27:表示KAFKA-V1.0.0<br>50:表示KAFKA-V2.0.0<br>16:表示EMR-V2.3.0<br>20:表示EMR-V2.5.0<br>30:表示EMR-V2.6.0<br>38:表示EMR-V2.7.0<br>25:表示EMR-V3.1.0<br>33:表示EMR-V3.2.1<br>34:表示EMR-V3.3.0<br>37:表示EMR-V3.4.0<br>44:表示EMR-V3.5.0<br>53:表示EMR-V3.6.0<br>58:表示EMR-3.6.1<br>59:表示EMR-serverless-1.0.0<br>60:表示EMR-TKE-1.1.0<br>61:表示SR-V2.1.0<br>62:表示SR-V2.1.0-SharedData<br>63:表示SR-V2.1.0.tlinux<br>64:表示统一元数据管理项目<br>65:表示EMR-TKE-AI-1.0.0<br>66:表示RSS-1.0.0<br>67:表示SR-V2.2.0<br>68:表示SR-V2.2.0.tlinux<br>69:表示EMR-AI-1.1.0<br>70:表示SR-V2.2.1<br>71:表示EMR-3.7.0<br>72:表示EMR-serverless-1.0.1<br>73:表示KAFKA-2.0.1<br>74:表示SR-V2.2.2<br>75:表示EMR-TKE-AI-1.1.0<br>76:表示EMR-V3.7.1<br>77:表示SERVERLESS-TCBASE-1.0.0<br>78:表示EMR-V3.6.2<br>79:表示STARROCKS-V2.2.2<br>80:表示EMR-AI-V1.1.1</p>
     * @param array $Software <p>部署的组件列表。不同的EMR产品ID（ProductId：具体含义参考入参ProductId字段）对应不同可选组件列表，不同产品版本可选组件列表查询：<a href="https://cloud.tencent.com/document/product/589/20279">组件版本</a> ；<br>填写实例值：hive、flink。</p>
     * @param integer $SupportHA <p>是否开启节点高可用。取值范围：</p><li>0：表示不开启节点高可用。</li><li>1：表示开启节点高可用。</li>
     * @param string $InstanceName <p>实例名称。</p><li>长度限制为6-36个字符。</li><li>只允许包含中文、字母、数字、-、_。</li>
     * @param integer $PayMode <p>实例计费模式。取值范围：</p><li>0：表示按量计费。</li><li>1：表示包年包月。</li>
     * @param integer $TimeSpan <p>购买实例的时长。结合TimeUnit一起使用。</p><li>TimeUnit为s时，该参数只能填写3600，表示按量计费实例。</li><li>TimeUnit为m时，该参数填写的数字表示包年包月实例的购买时长，如1表示购买一个月</li>
     * @param string $TimeUnit <p>购买实例的时间单位。取值范围：</p><li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li><li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
     * @param LoginSettings $LoginSettings <p>实例登录设置。通过该参数可以设置所购买节点的登录方式密码或者密钥。</p><li>设置密钥时，密码仅用于组件原生WebUI快捷入口登录。</li><li>未设置密钥时，密码用于登录所购节点以及组件原生WebUI快捷入口登录。</li>
     * @param VPCSettings $VPCSettings <p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
     * @param NewResourceSpec $ResourceSpec <p>节点资源的规格。</p>
     * @param COSSettings $COSSettings <p>开启COS访问需要设置的参数。</p>
     * @param Placement $Placement <p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。</p>
     * @param string $SgId <p>实例所属安全组的ID，形如sg-xxxxxxxx。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
     * @param array $PreExecutedFileSettings <p><a href="https://cloud.tencent.com/document/product/589/35656">引导操作</a>脚本设置。</p>
     * @param integer $AutoRenew <p>包年包月实例是否自动续费。取值范围：</p><li>0：表示不自动续费。</li><li>1：表示自动续费。</li>
     * @param string $ClientToken <p>唯一随机标识，时效5分钟，需要调用者指定 防止客户端重新创建资源，例如 a9a90aa6-<strong><strong>-</strong></strong>-****-fae36063280</p>
     * @param string $NeedMasterWan <p>是否开启集群Master节点公网。取值范围：</p><li>NEED_MASTER_WAN：表示开启集群Master节点公网。</li><li>NOT_NEED_MASTER_WAN：表示不开启。</li>默认开启集群Master节点公网。
     * @param integer $RemoteLoginAtCreate <p>是否需要开启外网远程登录，即22号端口。在SgId不为空时，该参数无效。</p>
     * @param integer $CheckSecurity <p>是否开启安全集群。0表示不开启，非0表示开启。</p>
     * @param string $ExtendFsField <p>访问外部文件系统。</p>
     * @param array $Tags <p>标签描述列表。通过指定该参数可以同时绑定标签到相应的实例。</p>
     * @param array $DisasterRecoverGroupIds <p>分散置放群组ID列表，当前只支持指定一个。<br>该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/213/15486">DescribeSecurityGroups</a> 的返回值中的SecurityGroupId字段来获取。</p>
     * @param integer $CbsEncrypt <p>集群维度CBS加密盘，默认0表示不加密，1表示加密</p>
     * @param string $MetaType <p>hive共享元数据库类型。取值范围：</p><li>EMR_DEFAULT_META：表示集群默认创建</li><li>EMR_EXIST_META：表示集群使用指定EMR-MetaDB。</li><li>USER_CUSTOM_META：表示集群使用自定义MetaDB。</li>
     * @param string $UnifyMetaInstanceId <p>EMR-MetaDB实例</p>
     * @param CustomMetaInfo $MetaDBInfo <p>自定义MetaDB信息</p>
     * @param string $ApplicationRole <p>自定义应用角色。</p>
     * @param string $SceneName <p>场景化取值：<br>Hadoop-Kudu<br>Hadoop-Zookeeper<br>Hadoop-Presto<br>Hadoop-Hbase</p>
     * @param array $ExternalService <p>共享组件信息</p>
     * @param integer $VersionID <p>如果为0，则MultiZone、MultiDeployStrategy、MultiZoneSettings是disable的状态，如果为1，则废弃ResourceSpec，使用MultiZoneSettings。</p>
     * @param boolean $MultiZone <p>true表示开启跨AZ部署；仅为新建集群时的用户参数，后续不支持调整。</p>
     * @param array $MultiZoneSettings <p>节点资源的规格，有几个可用区，就填几个，按顺序第一个为主可用区，第二个为备可用区，第三个为仲裁可用区。如果没有开启跨AZ，则长度为1即可。</p>
     * @param string $CosBucket <p>cos桶路径，创建StarRocks存算分离集群时用到</p>
     * @param array $NodeMarks <p>节点标识信息，目前只提供给tf平台使用</p>
     * @param string $LoadBalancerId <p>CLB id</p>
     * @param string $DefaultMetaVersion <p>数据库类型：mysql8/tdsql8</p>
     * @param integer $NeedCdbAudit <p>是否开通审计：0:不开通,1:开通</p>
     * @param string $SgIP <p>安全组指定来源ip</p>
     * @param integer $PartitionNumber <p>分区置放群组分区</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Software",$param) and $param["Software"] !== null) {
            $this->Software = $param["Software"];
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new NewResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("COSSettings",$param) and $param["COSSettings"] !== null) {
            $this->COSSettings = new COSSettings();
            $this->COSSettings->deserialize($param["COSSettings"]);
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("SgId",$param) and $param["SgId"] !== null) {
            $this->SgId = $param["SgId"];
        }

        if (array_key_exists("PreExecutedFileSettings",$param) and $param["PreExecutedFileSettings"] !== null) {
            $this->PreExecutedFileSettings = [];
            foreach ($param["PreExecutedFileSettings"] as $key => $value){
                $obj = new PreExecuteFileSettings();
                $obj->deserialize($value);
                array_push($this->PreExecutedFileSettings, $obj);
            }
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("NeedMasterWan",$param) and $param["NeedMasterWan"] !== null) {
            $this->NeedMasterWan = $param["NeedMasterWan"];
        }

        if (array_key_exists("RemoteLoginAtCreate",$param) and $param["RemoteLoginAtCreate"] !== null) {
            $this->RemoteLoginAtCreate = $param["RemoteLoginAtCreate"];
        }

        if (array_key_exists("CheckSecurity",$param) and $param["CheckSecurity"] !== null) {
            $this->CheckSecurity = $param["CheckSecurity"];
        }

        if (array_key_exists("ExtendFsField",$param) and $param["ExtendFsField"] !== null) {
            $this->ExtendFsField = $param["ExtendFsField"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("CbsEncrypt",$param) and $param["CbsEncrypt"] !== null) {
            $this->CbsEncrypt = $param["CbsEncrypt"];
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

        if (array_key_exists("ApplicationRole",$param) and $param["ApplicationRole"] !== null) {
            $this->ApplicationRole = $param["ApplicationRole"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("ExternalService",$param) and $param["ExternalService"] !== null) {
            $this->ExternalService = [];
            foreach ($param["ExternalService"] as $key => $value){
                $obj = new ExternalService();
                $obj->deserialize($value);
                array_push($this->ExternalService, $obj);
            }
        }

        if (array_key_exists("VersionID",$param) and $param["VersionID"] !== null) {
            $this->VersionID = $param["VersionID"];
        }

        if (array_key_exists("MultiZone",$param) and $param["MultiZone"] !== null) {
            $this->MultiZone = $param["MultiZone"];
        }

        if (array_key_exists("MultiZoneSettings",$param) and $param["MultiZoneSettings"] !== null) {
            $this->MultiZoneSettings = [];
            foreach ($param["MultiZoneSettings"] as $key => $value){
                $obj = new MultiZoneSetting();
                $obj->deserialize($value);
                array_push($this->MultiZoneSettings, $obj);
            }
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("NodeMarks",$param) and $param["NodeMarks"] !== null) {
            $this->NodeMarks = [];
            foreach ($param["NodeMarks"] as $key => $value){
                $obj = new NodeMark();
                $obj->deserialize($value);
                array_push($this->NodeMarks, $obj);
            }
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("DefaultMetaVersion",$param) and $param["DefaultMetaVersion"] !== null) {
            $this->DefaultMetaVersion = $param["DefaultMetaVersion"];
        }

        if (array_key_exists("NeedCdbAudit",$param) and $param["NeedCdbAudit"] !== null) {
            $this->NeedCdbAudit = $param["NeedCdbAudit"];
        }

        if (array_key_exists("SgIP",$param) and $param["SgIP"] !== null) {
            $this->SgIP = $param["SgIP"];
        }

        if (array_key_exists("PartitionNumber",$param) and $param["PartitionNumber"] !== null) {
            $this->PartitionNumber = $param["PartitionNumber"];
        }
    }
}
