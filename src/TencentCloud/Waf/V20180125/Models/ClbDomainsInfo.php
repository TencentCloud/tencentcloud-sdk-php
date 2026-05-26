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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡型WAF域名详情
 *
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getDomainId() 获取<p>域名唯一ID</p>
 * @method void setDomainId(string $DomainId) 设置<p>域名唯一ID</p>
 * @method string getInstanceId() 获取<p>域名所属实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>域名所属实例ID</p>
 * @method string getInstanceName() 获取<p>域名所属实例名</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>域名所属实例名</p>
 * @method string getEdition() 获取<p>域名所属实例类型</p>
 * @method void setEdition(string $Edition) 设置<p>域名所属实例类型</p>
 * @method integer getIsCdn() 获取<p>waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP</p>
 * @method void setIsCdn(integer $IsCdn) 设置<p>waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP</p>
 * @method array getLoadBalancerSet() 获取<p>负载均衡类型为clb时，对应的负载均衡器信息</p>
 * @method void setLoadBalancerSet(array $LoadBalancerSet) 设置<p>负载均衡类型为clb时，对应的负载均衡器信息</p>
 * @method integer getFlowMode() 获取<p>负载均衡型WAF的流量模式，1：清洗模式，0：镜像模式</p>
 * @method void setFlowMode(integer $FlowMode) 设置<p>负载均衡型WAF的流量模式，1：清洗模式，0：镜像模式</p>
 * @method integer getState() 获取<p>域名绑定负载均衡器状态</p>
 * @method void setState(integer $State) 设置<p>域名绑定负载均衡器状态</p>
 * @method string getAlbType() 获取<p>负载均衡类型，clb或者apisix</p>
 * @method void setAlbType(string $AlbType) 设置<p>负载均衡类型，clb或者apisix</p>
 * @method array getIpHeaders() 获取<p>IsCdn=3时，表示自定义header</p>
 * @method void setIpHeaders(array $IpHeaders) 设置<p>IsCdn=3时，表示自定义header</p>
 * @method string getCdcClusters() 获取<p>cdc-clb-waf类型WAF的CDC集群信息</p>
 * @method void setCdcClusters(string $CdcClusters) 设置<p>cdc-clb-waf类型WAF的CDC集群信息</p>
 * @method string getCloudType() 获取<p>云类型:public:公有云；private:私有云;hybrid:混合云</p>
 * @method void setCloudType(string $CloudType) 设置<p>云类型:public:公有云；private:私有云;hybrid:混合云</p>
 * @method string getNote() 获取<p>域名备注信息</p>
 * @method void setNote(string $Note) 设置<p>域名备注信息</p>
 * @method array getLabels() 获取<p>域名标签</p>
 * @method void setLabels(array $Labels) 设置<p>域名标签</p>
 * @method integer getAccessStatus() 获取<p>clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”</p>
 * @method void setAccessStatus(integer $AccessStatus) 设置<p>clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”</p>
 * @method array getTagInfos() 获取<p>标签信息</p>
 * @method void setTagInfos(array $TagInfos) 设置<p>标签信息</p>
 */
class ClbDomainsInfo extends AbstractModel
{
    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>域名唯一ID</p>
     */
    public $DomainId;

    /**
     * @var string <p>域名所属实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>域名所属实例名</p>
     */
    public $InstanceName;

    /**
     * @var string <p>域名所属实例类型</p>
     */
    public $Edition;

    /**
     * @var integer <p>waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP</p>
     */
    public $IsCdn;

    /**
     * @var array <p>负载均衡类型为clb时，对应的负载均衡器信息</p>
     */
    public $LoadBalancerSet;

    /**
     * @var integer <p>负载均衡型WAF的流量模式，1：清洗模式，0：镜像模式</p>
     */
    public $FlowMode;

    /**
     * @var integer <p>域名绑定负载均衡器状态</p>
     */
    public $State;

    /**
     * @var string <p>负载均衡类型，clb或者apisix</p>
     */
    public $AlbType;

    /**
     * @var array <p>IsCdn=3时，表示自定义header</p>
     */
    public $IpHeaders;

    /**
     * @var string <p>cdc-clb-waf类型WAF的CDC集群信息</p>
     */
    public $CdcClusters;

    /**
     * @var string <p>云类型:public:公有云；private:私有云;hybrid:混合云</p>
     */
    public $CloudType;

    /**
     * @var string <p>域名备注信息</p>
     */
    public $Note;

    /**
     * @var array <p>域名标签</p>
     */
    public $Labels;

    /**
     * @var integer <p>clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”</p>
     */
    public $AccessStatus;

    /**
     * @var array <p>标签信息</p>
     */
    public $TagInfos;

    /**
     * @param string $Domain <p>域名</p>
     * @param string $DomainId <p>域名唯一ID</p>
     * @param string $InstanceId <p>域名所属实例ID</p>
     * @param string $InstanceName <p>域名所属实例名</p>
     * @param string $Edition <p>域名所属实例类型</p>
     * @param integer $IsCdn <p>waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP</p>
     * @param array $LoadBalancerSet <p>负载均衡类型为clb时，对应的负载均衡器信息</p>
     * @param integer $FlowMode <p>负载均衡型WAF的流量模式，1：清洗模式，0：镜像模式</p>
     * @param integer $State <p>域名绑定负载均衡器状态</p>
     * @param string $AlbType <p>负载均衡类型，clb或者apisix</p>
     * @param array $IpHeaders <p>IsCdn=3时，表示自定义header</p>
     * @param string $CdcClusters <p>cdc-clb-waf类型WAF的CDC集群信息</p>
     * @param string $CloudType <p>云类型:public:公有云；private:私有云;hybrid:混合云</p>
     * @param string $Note <p>域名备注信息</p>
     * @param array $Labels <p>域名标签</p>
     * @param integer $AccessStatus <p>clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”</p>
     * @param array $TagInfos <p>标签信息</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("LoadBalancerSet",$param) and $param["LoadBalancerSet"] !== null) {
            $this->LoadBalancerSet = [];
            foreach ($param["LoadBalancerSet"] as $key => $value){
                $obj = new LoadBalancerPackageNew();
                $obj->deserialize($value);
                array_push($this->LoadBalancerSet, $obj);
            }
        }

        if (array_key_exists("FlowMode",$param) and $param["FlowMode"] !== null) {
            $this->FlowMode = $param["FlowMode"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("CdcClusters",$param) and $param["CdcClusters"] !== null) {
            $this->CdcClusters = $param["CdcClusters"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("AccessStatus",$param) and $param["AccessStatus"] !== null) {
            $this->AccessStatus = $param["AccessStatus"];
        }

        if (array_key_exists("TagInfos",$param) and $param["TagInfos"] !== null) {
            $this->TagInfos = [];
            foreach ($param["TagInfos"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfos, $obj);
            }
        }
    }
}
