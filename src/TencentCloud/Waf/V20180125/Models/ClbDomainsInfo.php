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
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getDomainId() 获取域名唯一ID
 * @method void setDomainId(string $DomainId) 设置域名唯一ID
 * @method string getInstanceId() 获取域名所属实例ID
 * @method void setInstanceId(string $InstanceId) 设置域名所属实例ID
 * @method string getInstanceName() 获取域名所属实例名
 * @method void setInstanceName(string $InstanceName) 设置域名所属实例名
 * @method string getEdition() 获取域名所属实例类型
 * @method void setEdition(string $Edition) 设置域名所属实例类型
 * @method integer getIsCdn() 获取waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
 * @method void setIsCdn(integer $IsCdn) 设置waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
 * @method array getLoadBalancerSet() 获取负载均衡类型为clb时，对应的负载均衡器信息
 * @method void setLoadBalancerSet(array $LoadBalancerSet) 设置负载均衡类型为clb时，对应的负载均衡器信息
 * @method integer getFlowMode() 获取负载均衡型WAF的流量模式，1：清洗模式，0：镜像模式
 * @method void setFlowMode(integer $FlowMode) 设置负载均衡型WAF的流量模式，1：清洗模式，0：镜像模式
 * @method integer getState() 获取域名绑定负载均衡器状态
 * @method void setState(integer $State) 设置域名绑定负载均衡器状态
 * @method string getAlbType() 获取负载均衡类型，clb或者apisix
 * @method void setAlbType(string $AlbType) 设置负载均衡类型，clb或者apisix
 * @method array getIpHeaders() 获取IsCdn=3时，表示自定义header
 * @method void setIpHeaders(array $IpHeaders) 设置IsCdn=3时，表示自定义header
 * @method string getCdcClusters() 获取cdc-clb-waf类型WAF的CDC集群信息
 * @method void setCdcClusters(string $CdcClusters) 设置cdc-clb-waf类型WAF的CDC集群信息
 * @method string getCloudType() 获取云类型:public:公有云；private:私有云;hybrid:混合云
 * @method void setCloudType(string $CloudType) 设置云类型:public:公有云；private:私有云;hybrid:混合云
 * @method string getNote() 获取域名备注信息
 * @method void setNote(string $Note) 设置域名备注信息
 * @method array getLabels() 获取域名标签
 * @method void setLabels(array $Labels) 设置域名标签
 * @method integer getAccessStatus() 获取clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”
 * @method void setAccessStatus(integer $AccessStatus) 设置clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”
 */
class ClbDomainsInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名唯一ID
     */
    public $DomainId;

    /**
     * @var string 域名所属实例ID
     */
    public $InstanceId;

    /**
     * @var string 域名所属实例名
     */
    public $InstanceName;

    /**
     * @var string 域名所属实例类型
     */
    public $Edition;

    /**
     * @var integer waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
     */
    public $IsCdn;

    /**
     * @var array 负载均衡类型为clb时，对应的负载均衡器信息
     */
    public $LoadBalancerSet;

    /**
     * @var integer 负载均衡型WAF的流量模式，1：清洗模式，0：镜像模式
     */
    public $FlowMode;

    /**
     * @var integer 域名绑定负载均衡器状态
     */
    public $State;

    /**
     * @var string 负载均衡类型，clb或者apisix
     */
    public $AlbType;

    /**
     * @var array IsCdn=3时，表示自定义header
     */
    public $IpHeaders;

    /**
     * @var string cdc-clb-waf类型WAF的CDC集群信息
     */
    public $CdcClusters;

    /**
     * @var string 云类型:public:公有云；private:私有云;hybrid:混合云
     */
    public $CloudType;

    /**
     * @var string 域名备注信息
     */
    public $Note;

    /**
     * @var array 域名标签
     */
    public $Labels;

    /**
     * @var integer clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”
     */
    public $AccessStatus;

    /**
     * @param string $Domain 域名
     * @param string $DomainId 域名唯一ID
     * @param string $InstanceId 域名所属实例ID
     * @param string $InstanceName 域名所属实例名
     * @param string $Edition 域名所属实例类型
     * @param integer $IsCdn waf前是否部署有七层代理服务。 0：没有部署代理服务 1：有部署代理服务，waf将使用XFF获取客户端IP 2：有部署代理服务，waf将使用remote_addr获取客户端IP 3：有部署代理服务，waf将使用ip_headers中的自定义header获取客户端IP
     * @param array $LoadBalancerSet 负载均衡类型为clb时，对应的负载均衡器信息
     * @param integer $FlowMode 负载均衡型WAF的流量模式，1：清洗模式，0：镜像模式
     * @param integer $State 域名绑定负载均衡器状态
     * @param string $AlbType 负载均衡类型，clb或者apisix
     * @param array $IpHeaders IsCdn=3时，表示自定义header
     * @param string $CdcClusters cdc-clb-waf类型WAF的CDC集群信息
     * @param string $CloudType 云类型:public:公有云；private:私有云;hybrid:混合云
     * @param string $Note 域名备注信息
     * @param array $Labels 域名标签
     * @param integer $AccessStatus clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”
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
    }
}
