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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOceanusCluster请求参数结构体
 *
 * @method string getClusterName() 获取<p>集群名称</p><p>入参限制：支持1-50个英文、汉字、数字、连接线-或下划线_</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p><p>入参限制：支持1-50个英文、汉字、数字、连接线-或下划线_</p>
 * @method integer getRegionId() 获取<p>地域Id，可通过地域管理系统<a href="https://cloud.tencent.com/document/api/1596/77930"> DescribeRegions</a>查询Product参数设置 oceanus</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域Id，可通过地域管理系统<a href="https://cloud.tencent.com/document/api/1596/77930"> DescribeRegions</a>查询Product参数设置 oceanus</p>
 * @method integer getZoneId() 获取<p>可用区Id，可通过地域管理系统<a href="https://cloud.tencent.com/document/api/1596/77929"> DescribeZones</a>查询<br>Product参数设置 oceanus</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区Id，可通过地域管理系统<a href="https://cloud.tencent.com/document/api/1596/77929"> DescribeZones</a>查询<br>Product参数设置 oceanus</p>
 * @method string getLoginPassword() 获取<p>FlinkUI访问密码</p><p>用户名与密码将用于登录查看作业的 Flink UI 界面，集群用户名:admin</p>
 * @method void setLoginPassword(string $LoginPassword) 设置<p>FlinkUI访问密码</p><p>用户名与密码将用于登录查看作业的 Flink UI 界面，集群用户名:admin</p>
 * @method array getVpcDescriptions() 获取<p>流计算通过 VPC 和弹性网卡来访问同地域中的其他云产品资源，并需要占用一定的子网 IP 数量，请确保所选子网的可用 IP 数量充足 如现有网络不符合您的要求，请前往 VPC 控制台<a href="https://console.cloud.tencent.com/vpc/vpc?rid=undefined">新建私有网络</a> 或 <a href="https://console.cloud.tencent.com/vpc/subnet?rid=undefined">新建子网</a></p>
 * @method void setVpcDescriptions(array $VpcDescriptions) 设置<p>流计算通过 VPC 和弹性网卡来访问同地域中的其他云产品资源，并需要占用一定的子网 IP 数量，请确保所选子网的可用 IP 数量充足 如现有网络不符合您的要求，请前往 VPC 控制台<a href="https://console.cloud.tencent.com/vpc/vpc?rid=undefined">新建私有网络</a> 或 <a href="https://console.cloud.tencent.com/vpc/subnet?rid=undefined">新建子网</a></p>
 * @method string getDefaultCOSBucket() 获取<p>流计算使用对象存储 COS 来保存作业的 checkpoint、jar 包、或投递日志等，如本地域无可用存储桶，请前往<a href="https://console.cloud.tencent.com/cos5">对象存储控制台</a>新建 为了保证您的正常使用，对应COS的生命周期配置请参考<a href="https://cloud.tencent.com/document/product/436/33417?from=console_document_search">文档</a></p>
 * @method void setDefaultCOSBucket(string $DefaultCOSBucket) 设置<p>流计算使用对象存储 COS 来保存作业的 checkpoint、jar 包、或投递日志等，如本地域无可用存储桶，请前往<a href="https://console.cloud.tencent.com/cos5">对象存储控制台</a>新建 为了保证您的正常使用，对应COS的生命周期配置请参考<a href="https://cloud.tencent.com/document/product/436/33417?from=console_document_search">文档</a></p>
 * @method integer getCU() 获取<p>集群CU数， 12 CU 是流计算的最小计算资源和计费单位，1CU 包含1个 CPU 和 4GB 内存。 当CU数大于等于 48 时，减免管理节点费用。</p>
 * @method void setCU(integer $CU) 设置<p>集群CU数， 12 CU 是流计算的最小计算资源和计费单位，1CU 包含1个 CPU 和 4GB 内存。 当CU数大于等于 48 时，减免管理节点费用。</p>
 * @method string getRemark() 获取<p>集群描述</p><p>入参限制：支持1-50个英文、汉字、数字、连接线-或下划线_</p>
 * @method void setRemark(string $Remark) 设置<p>集群描述</p><p>入参限制：支持1-50个英文、汉字、数字、连接线-或下划线_</p>
 * @method integer getPeriod() 获取<p>购买时长，以月为单位</p><p>取值范围：[1, 48]</p>
 * @method void setPeriod(integer $Period) 设置<p>购买时长，以月为单位</p><p>取值范围：[1, 48]</p>
 * @method string getInstanceChargeType() 获取<p>集群计费类型</p><p>枚举值：</p><ul><li>PREPAID： 包年包月</li><li>POSTPAID_BY_SECOND： 按量计费</li></ul><p>默认值：POSTPAID_BY_SECOND</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>集群计费类型</p><p>枚举值：</p><ul><li>PREPAID： 包年包月</li><li>POSTPAID_BY_SECOND： 按量计费</li></ul><p>默认值：POSTPAID_BY_SECOND</p>
 * @method string getClusterType() 获取<p>集群类型</p><p>枚举值：</p><ul><li>MULTI_AZ_CLUSTER： 多可用区集群</li></ul>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型</p><p>枚举值：</p><ul><li>MULTI_AZ_CLUSTER： 多可用区集群</li></ul>
 * @method string getRenewFlag() 获取<p>自动续费标识</p><p>枚举值：</p><ul><li>NOTIFY_AND_MANUAL_RENEW： 通知并手动续费</li><li>NOTIFY_AND_AUTO_RENEW： 通知并自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知并不自动续费</li></ul><p>默认值：NOTIFY_AND_MANUAL_RENEW</p><p>InstanceChargeType设置PREPAID时，对应包年包月集群，需要设置自动续费标识，按量计费集群不需要设置</p>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>自动续费标识</p><p>枚举值：</p><ul><li>NOTIFY_AND_MANUAL_RENEW： 通知并手动续费</li><li>NOTIFY_AND_AUTO_RENEW： 通知并自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知并不自动续费</li></ul><p>默认值：NOTIFY_AND_MANUAL_RENEW</p><p>InstanceChargeType设置PREPAID时，对应包年包月集群，需要设置自动续费标识，按量计费集群不需要设置</p>
 * @method string getFlinkWebUINetworkAccessType() 获取<p>Flink UI访问类型设置</p><p>枚举值：</p><ul><li>NetworkAccess_INTERNAL： 内网访问</li><li>NetworkAccess_EXTERNAL： 公网访问</li></ul><p>默认值：NetworkAccess_EXTERNAL</p>
 * @method void setFlinkWebUINetworkAccessType(string $FlinkWebUINetworkAccessType) 设置<p>Flink UI访问类型设置</p><p>枚举值：</p><ul><li>NetworkAccess_INTERNAL： 内网访问</li><li>NetworkAccess_EXTERNAL： 公网访问</li></ul><p>默认值：NetworkAccess_EXTERNAL</p>
 * @method array getSlaveVpcDescriptions() 获取<p>多可用区VPC</p>
 * @method void setSlaveVpcDescriptions(array $SlaveVpcDescriptions) 设置<p>多可用区VPC</p>
 * @method integer getCUMemory() 获取<p>核心内存比值，只支持 [0，2，4，8]</p>
 * @method void setCUMemory(integer $CUMemory) 设置<p>核心内存比值，只支持 [0，2，4，8]</p>
 */
class CreateOceanusClusterRequest extends AbstractModel
{
    /**
     * @var string <p>集群名称</p><p>入参限制：支持1-50个英文、汉字、数字、连接线-或下划线_</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>地域Id，可通过地域管理系统<a href="https://cloud.tencent.com/document/api/1596/77930"> DescribeRegions</a>查询Product参数设置 oceanus</p>
     */
    public $RegionId;

    /**
     * @var integer <p>可用区Id，可通过地域管理系统<a href="https://cloud.tencent.com/document/api/1596/77929"> DescribeZones</a>查询<br>Product参数设置 oceanus</p>
     */
    public $ZoneId;

    /**
     * @var string <p>FlinkUI访问密码</p><p>用户名与密码将用于登录查看作业的 Flink UI 界面，集群用户名:admin</p>
     */
    public $LoginPassword;

    /**
     * @var array <p>流计算通过 VPC 和弹性网卡来访问同地域中的其他云产品资源，并需要占用一定的子网 IP 数量，请确保所选子网的可用 IP 数量充足 如现有网络不符合您的要求，请前往 VPC 控制台<a href="https://console.cloud.tencent.com/vpc/vpc?rid=undefined">新建私有网络</a> 或 <a href="https://console.cloud.tencent.com/vpc/subnet?rid=undefined">新建子网</a></p>
     */
    public $VpcDescriptions;

    /**
     * @var string <p>流计算使用对象存储 COS 来保存作业的 checkpoint、jar 包、或投递日志等，如本地域无可用存储桶，请前往<a href="https://console.cloud.tencent.com/cos5">对象存储控制台</a>新建 为了保证您的正常使用，对应COS的生命周期配置请参考<a href="https://cloud.tencent.com/document/product/436/33417?from=console_document_search">文档</a></p>
     */
    public $DefaultCOSBucket;

    /**
     * @var integer <p>集群CU数， 12 CU 是流计算的最小计算资源和计费单位，1CU 包含1个 CPU 和 4GB 内存。 当CU数大于等于 48 时，减免管理节点费用。</p>
     */
    public $CU;

    /**
     * @var string <p>集群描述</p><p>入参限制：支持1-50个英文、汉字、数字、连接线-或下划线_</p>
     */
    public $Remark;

    /**
     * @var integer <p>购买时长，以月为单位</p><p>取值范围：[1, 48]</p>
     */
    public $Period;

    /**
     * @var string <p>集群计费类型</p><p>枚举值：</p><ul><li>PREPAID： 包年包月</li><li>POSTPAID_BY_SECOND： 按量计费</li></ul><p>默认值：POSTPAID_BY_SECOND</p>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>集群类型</p><p>枚举值：</p><ul><li>MULTI_AZ_CLUSTER： 多可用区集群</li></ul>
     */
    public $ClusterType;

    /**
     * @var string <p>自动续费标识</p><p>枚举值：</p><ul><li>NOTIFY_AND_MANUAL_RENEW： 通知并手动续费</li><li>NOTIFY_AND_AUTO_RENEW： 通知并自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知并不自动续费</li></ul><p>默认值：NOTIFY_AND_MANUAL_RENEW</p><p>InstanceChargeType设置PREPAID时，对应包年包月集群，需要设置自动续费标识，按量计费集群不需要设置</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>Flink UI访问类型设置</p><p>枚举值：</p><ul><li>NetworkAccess_INTERNAL： 内网访问</li><li>NetworkAccess_EXTERNAL： 公网访问</li></ul><p>默认值：NetworkAccess_EXTERNAL</p>
     */
    public $FlinkWebUINetworkAccessType;

    /**
     * @var array <p>多可用区VPC</p>
     */
    public $SlaveVpcDescriptions;

    /**
     * @var integer <p>核心内存比值，只支持 [0，2，4，8]</p>
     */
    public $CUMemory;

    /**
     * @param string $ClusterName <p>集群名称</p><p>入参限制：支持1-50个英文、汉字、数字、连接线-或下划线_</p>
     * @param integer $RegionId <p>地域Id，可通过地域管理系统<a href="https://cloud.tencent.com/document/api/1596/77930"> DescribeRegions</a>查询Product参数设置 oceanus</p>
     * @param integer $ZoneId <p>可用区Id，可通过地域管理系统<a href="https://cloud.tencent.com/document/api/1596/77929"> DescribeZones</a>查询<br>Product参数设置 oceanus</p>
     * @param string $LoginPassword <p>FlinkUI访问密码</p><p>用户名与密码将用于登录查看作业的 Flink UI 界面，集群用户名:admin</p>
     * @param array $VpcDescriptions <p>流计算通过 VPC 和弹性网卡来访问同地域中的其他云产品资源，并需要占用一定的子网 IP 数量，请确保所选子网的可用 IP 数量充足 如现有网络不符合您的要求，请前往 VPC 控制台<a href="https://console.cloud.tencent.com/vpc/vpc?rid=undefined">新建私有网络</a> 或 <a href="https://console.cloud.tencent.com/vpc/subnet?rid=undefined">新建子网</a></p>
     * @param string $DefaultCOSBucket <p>流计算使用对象存储 COS 来保存作业的 checkpoint、jar 包、或投递日志等，如本地域无可用存储桶，请前往<a href="https://console.cloud.tencent.com/cos5">对象存储控制台</a>新建 为了保证您的正常使用，对应COS的生命周期配置请参考<a href="https://cloud.tencent.com/document/product/436/33417?from=console_document_search">文档</a></p>
     * @param integer $CU <p>集群CU数， 12 CU 是流计算的最小计算资源和计费单位，1CU 包含1个 CPU 和 4GB 内存。 当CU数大于等于 48 时，减免管理节点费用。</p>
     * @param string $Remark <p>集群描述</p><p>入参限制：支持1-50个英文、汉字、数字、连接线-或下划线_</p>
     * @param integer $Period <p>购买时长，以月为单位</p><p>取值范围：[1, 48]</p>
     * @param string $InstanceChargeType <p>集群计费类型</p><p>枚举值：</p><ul><li>PREPAID： 包年包月</li><li>POSTPAID_BY_SECOND： 按量计费</li></ul><p>默认值：POSTPAID_BY_SECOND</p>
     * @param string $ClusterType <p>集群类型</p><p>枚举值：</p><ul><li>MULTI_AZ_CLUSTER： 多可用区集群</li></ul>
     * @param string $RenewFlag <p>自动续费标识</p><p>枚举值：</p><ul><li>NOTIFY_AND_MANUAL_RENEW： 通知并手动续费</li><li>NOTIFY_AND_AUTO_RENEW： 通知并自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW： 不通知并不自动续费</li></ul><p>默认值：NOTIFY_AND_MANUAL_RENEW</p><p>InstanceChargeType设置PREPAID时，对应包年包月集群，需要设置自动续费标识，按量计费集群不需要设置</p>
     * @param string $FlinkWebUINetworkAccessType <p>Flink UI访问类型设置</p><p>枚举值：</p><ul><li>NetworkAccess_INTERNAL： 内网访问</li><li>NetworkAccess_EXTERNAL： 公网访问</li></ul><p>默认值：NetworkAccess_EXTERNAL</p>
     * @param array $SlaveVpcDescriptions <p>多可用区VPC</p>
     * @param integer $CUMemory <p>核心内存比值，只支持 [0，2，4，8]</p>
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("LoginPassword",$param) and $param["LoginPassword"] !== null) {
            $this->LoginPassword = $param["LoginPassword"];
        }

        if (array_key_exists("VpcDescriptions",$param) and $param["VpcDescriptions"] !== null) {
            $this->VpcDescriptions = [];
            foreach ($param["VpcDescriptions"] as $key => $value){
                $obj = new VPCDescription();
                $obj->deserialize($value);
                array_push($this->VpcDescriptions, $obj);
            }
        }

        if (array_key_exists("DefaultCOSBucket",$param) and $param["DefaultCOSBucket"] !== null) {
            $this->DefaultCOSBucket = $param["DefaultCOSBucket"];
        }

        if (array_key_exists("CU",$param) and $param["CU"] !== null) {
            $this->CU = $param["CU"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("FlinkWebUINetworkAccessType",$param) and $param["FlinkWebUINetworkAccessType"] !== null) {
            $this->FlinkWebUINetworkAccessType = $param["FlinkWebUINetworkAccessType"];
        }

        if (array_key_exists("SlaveVpcDescriptions",$param) and $param["SlaveVpcDescriptions"] !== null) {
            $this->SlaveVpcDescriptions = [];
            foreach ($param["SlaveVpcDescriptions"] as $key => $value){
                $obj = new SlaveVpcDescriptions();
                $obj->deserialize($value);
                array_push($this->SlaveVpcDescriptions, $obj);
            }
        }

        if (array_key_exists("CUMemory",$param) and $param["CUMemory"] !== null) {
            $this->CUMemory = $param["CUMemory"];
        }
    }
}
