<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * domain列表
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getDomainId() 获取域名ID
 * @method void setDomainId(string $DomainId) 设置域名ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getCname() 获取cname地址
 * @method void setCname(string $Cname) 设置cname地址
 * @method string getEdition() 获取域名所属实例类型。
sparta-waf：SaaS型WAF实例
clb-waf：负载均衡型WAF实例
cdc-clb-waf：CDC环境下负载均衡型WAF实例
 * @method void setEdition(string $Edition) 设置域名所属实例类型。
sparta-waf：SaaS型WAF实例
clb-waf：负载均衡型WAF实例
cdc-clb-waf：CDC环境下负载均衡型WAF实例
 * @method string getRegion() 获取地域。
"多伦多": "ca"
"广州": "gz"
"成都": "cd"
"福州": "fzec"
"深圳": "szx"
"印度": "in"
"济南": "jnec"
"重庆": "cq"
"天津": "tsn"
"欧洲东北": "ru"
"南京": "nj"
"美国硅谷": "usw"
"泰国": "th"
"广州Open": "gzopen"
"深圳金融": "szjr"
"法兰克福": "de"
"日本": "jp"
"弗吉尼亚": "use"
"北京": "bj"
"中国香港": "hk"
"杭州": "hzec"
"北京金融": "bjjr"
"上海金融": "shjr"
"台北": "tpe"
"首尔": "kr"
"上海": "sh"
"新加坡": "sg"
"清远": "qy"
 * @method void setRegion(string $Region) 设置地域。
"多伦多": "ca"
"广州": "gz"
"成都": "cd"
"福州": "fzec"
"深圳": "szx"
"印度": "in"
"济南": "jnec"
"重庆": "cq"
"天津": "tsn"
"欧洲东北": "ru"
"南京": "nj"
"美国硅谷": "usw"
"泰国": "th"
"广州Open": "gzopen"
"深圳金融": "szjr"
"法兰克福": "de"
"日本": "jp"
"弗吉尼亚": "use"
"北京": "bj"
"中国香港": "hk"
"杭州": "hzec"
"北京金融": "bjjr"
"上海金融": "shjr"
"台北": "tpe"
"首尔": "kr"
"上海": "sh"
"新加坡": "sg"
"清远": "qy"
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method integer getClsStatus() 获取访问日志开关状态。
0：关闭
1：开启
 * @method void setClsStatus(integer $ClsStatus) 设置访问日志开关状态。
0：关闭
1：开启
 * @method integer getFlowMode() 获取负载均衡型WAF使用模式。
0：镜像模式 
1：清洗模式
 * @method void setFlowMode(integer $FlowMode) 设置负载均衡型WAF使用模式。
0：镜像模式 
1：清洗模式
 * @method integer getStatus() 获取waf开关状态。
0：关闭 
1：开启
 * @method void setStatus(integer $Status) 设置waf开关状态。
0：关闭 
1：开启
 * @method integer getMode() 获取规则引擎防护模式。
0：观察模式 
1：拦截模式
 * @method void setMode(integer $Mode) 设置规则引擎防护模式。
0：观察模式 
1：拦截模式
 * @method integer getEngine() 获取规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
 * @method void setEngine(integer $Engine) 设置规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
 * @method array getCCList() 获取沙箱集群回源出口IP列表
 * @method void setCCList(array $CCList) 设置沙箱集群回源出口IP列表
 * @method array getRsList() 获取生产集群回源出口IP列表
 * @method void setRsList(array $RsList) 设置生产集群回源出口IP列表
 * @method array getPorts() 获取服务端口配置
 * @method void setPorts(array $Ports) 设置服务端口配置
 * @method array getLoadBalancerSet() 获取负载均衡器相关配置
 * @method void setLoadBalancerSet(array $LoadBalancerSet) 设置负载均衡器相关配置
 * @method integer getAppId() 获取用户id
 * @method void setAppId(integer $AppId) 设置用户id
 * @method integer getState() 获取负载均衡型WAF域名LB监听器状态。
0：操作成功 
4：正在绑定LB 
6：正在解绑LB 
7：解绑LB失败 
8：绑定LB失败 
10：内部错误
 * @method void setState(integer $State) 设置负载均衡型WAF域名LB监听器状态。
0：操作成功 
4：正在绑定LB 
6：正在解绑LB 
7：解绑LB失败 
8：绑定LB失败 
10：内部错误
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getIpv6Status() 获取Ipv6开关状态。
0：关闭 
1：开启
 * @method void setIpv6Status(integer $Ipv6Status) 设置Ipv6开关状态。
0：关闭 
1：开启
 * @method integer getBotStatus() 获取BOT开关状态。
0：关闭 
1：关闭
2：开启
3：开启
 * @method void setBotStatus(integer $BotStatus) 设置BOT开关状态。
0：关闭 
1：关闭
2：开启
3：开启
 * @method integer getLevel() 获取实例版本信息。
101：小微敏捷版 
102：小微超轻版
2：高级版
3：企业版
4：旗舰版
6：独享版
 * @method void setLevel(integer $Level) 设置实例版本信息。
101：小微敏捷版 
102：小微超轻版
2：高级版
3：企业版
4：旗舰版
6：独享版
 * @method integer getPostCLSStatus() 获取投递CLS状态。
0：关闭 
1：开启
 * @method void setPostCLSStatus(integer $PostCLSStatus) 设置投递CLS状态。
0：关闭 
1：开启
 * @method integer getPostCKafkaStatus() 获取投递CKafka状态。
0：关闭 
1：开启
 * @method void setPostCKafkaStatus(integer $PostCKafkaStatus) 设置投递CKafka状态。
0：关闭 
1：开启
 * @method string getCdcClusters() 获取cdc实例域名接入的集群信息,非cdc实例忽略。
 * @method void setCdcClusters(string $CdcClusters) 设置cdc实例域名接入的集群信息,非cdc实例忽略。
 * @method integer getApiStatus() 获取api安全开关状态。
0：关闭 
1：开启
 * @method void setApiStatus(integer $ApiStatus) 设置api安全开关状态。
0：关闭 
1：开启
 * @method string getAlbType() 获取应用型负载均衡类型，默认clb。
clb：七层负载均衡器类型
apisix：apisix网关型
 * @method void setAlbType(string $AlbType) 设置应用型负载均衡类型，默认clb。
clb：七层负载均衡器类型
apisix：apisix网关型
 * @method integer getSgState() 获取安全组状态。
0：不展示
1：非腾讯云源站
2：安全组绑定失败
3：安全组发生变更
 * @method void setSgState(integer $SgState) 设置安全组状态。
0：不展示
1：非腾讯云源站
2：安全组绑定失败
3：安全组发生变更
 * @method string getSgDetail() 获取安全组状态的详细解释
 * @method void setSgDetail(string $SgDetail) 设置安全组状态的详细解释
 * @method string getCloudType() 获取域名云环境。hybrid：混合云域名
public：公有云域名
 * @method void setCloudType(string $CloudType) 设置域名云环境。hybrid：混合云域名
public：公有云域名
 * @method string getNote() 获取域名备注信息
 * @method void setNote(string $Note) 设置域名备注信息
 * @method array getSrcList() 获取SAASWAF源站IP列表
 * @method void setSrcList(array $SrcList) 设置SAASWAF源站IP列表
 * @method array getUpstreamDomainList() 获取SAASWAF源站域名列表
 * @method void setUpstreamDomainList(array $UpstreamDomainList) 设置SAASWAF源站域名列表
 * @method string getSgID() 获取安全组ID
 * @method void setSgID(string $SgID) 设置安全组ID
 * @method integer getAccessStatus() 获取clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”
 * @method void setAccessStatus(integer $AccessStatus) 设置clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”
 * @method array getLabels() 获取域名标签
 * @method void setLabels(array $Labels) 设置域名标签
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名ID
     */
    public $DomainId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string cname地址
     */
    public $Cname;

    /**
     * @var string 域名所属实例类型。
sparta-waf：SaaS型WAF实例
clb-waf：负载均衡型WAF实例
cdc-clb-waf：CDC环境下负载均衡型WAF实例
     */
    public $Edition;

    /**
     * @var string 地域。
"多伦多": "ca"
"广州": "gz"
"成都": "cd"
"福州": "fzec"
"深圳": "szx"
"印度": "in"
"济南": "jnec"
"重庆": "cq"
"天津": "tsn"
"欧洲东北": "ru"
"南京": "nj"
"美国硅谷": "usw"
"泰国": "th"
"广州Open": "gzopen"
"深圳金融": "szjr"
"法兰克福": "de"
"日本": "jp"
"弗吉尼亚": "use"
"北京": "bj"
"中国香港": "hk"
"杭州": "hzec"
"北京金融": "bjjr"
"上海金融": "shjr"
"台北": "tpe"
"首尔": "kr"
"上海": "sh"
"新加坡": "sg"
"清远": "qy"
     */
    public $Region;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var integer 访问日志开关状态。
0：关闭
1：开启
     */
    public $ClsStatus;

    /**
     * @var integer 负载均衡型WAF使用模式。
0：镜像模式 
1：清洗模式
     */
    public $FlowMode;

    /**
     * @var integer waf开关状态。
0：关闭 
1：开启
     */
    public $Status;

    /**
     * @var integer 规则引擎防护模式。
0：观察模式 
1：拦截模式
     */
    public $Mode;

    /**
     * @var integer 规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
     */
    public $Engine;

    /**
     * @var array 沙箱集群回源出口IP列表
     */
    public $CCList;

    /**
     * @var array 生产集群回源出口IP列表
     */
    public $RsList;

    /**
     * @var array 服务端口配置
     */
    public $Ports;

    /**
     * @var array 负载均衡器相关配置
     */
    public $LoadBalancerSet;

    /**
     * @var integer 用户id
     */
    public $AppId;

    /**
     * @var integer 负载均衡型WAF域名LB监听器状态。
0：操作成功 
4：正在绑定LB 
6：正在解绑LB 
7：解绑LB失败 
8：绑定LB失败 
10：内部错误
     */
    public $State;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer Ipv6开关状态。
0：关闭 
1：开启
     */
    public $Ipv6Status;

    /**
     * @var integer BOT开关状态。
0：关闭 
1：关闭
2：开启
3：开启
     */
    public $BotStatus;

    /**
     * @var integer 实例版本信息。
101：小微敏捷版 
102：小微超轻版
2：高级版
3：企业版
4：旗舰版
6：独享版
     */
    public $Level;

    /**
     * @var integer 投递CLS状态。
0：关闭 
1：开启
     */
    public $PostCLSStatus;

    /**
     * @var integer 投递CKafka状态。
0：关闭 
1：开启
     */
    public $PostCKafkaStatus;

    /**
     * @var string cdc实例域名接入的集群信息,非cdc实例忽略。
     */
    public $CdcClusters;

    /**
     * @var integer api安全开关状态。
0：关闭 
1：开启
     */
    public $ApiStatus;

    /**
     * @var string 应用型负载均衡类型，默认clb。
clb：七层负载均衡器类型
apisix：apisix网关型
     */
    public $AlbType;

    /**
     * @var integer 安全组状态。
0：不展示
1：非腾讯云源站
2：安全组绑定失败
3：安全组发生变更
     */
    public $SgState;

    /**
     * @var string 安全组状态的详细解释
     */
    public $SgDetail;

    /**
     * @var string 域名云环境。hybrid：混合云域名
public：公有云域名
     */
    public $CloudType;

    /**
     * @var string 域名备注信息
     */
    public $Note;

    /**
     * @var array SAASWAF源站IP列表
     */
    public $SrcList;

    /**
     * @var array SAASWAF源站域名列表
     */
    public $UpstreamDomainList;

    /**
     * @var string 安全组ID
     */
    public $SgID;

    /**
     * @var integer clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”
     */
    public $AccessStatus;

    /**
     * @var array 域名标签
     */
    public $Labels;

    /**
     * @param string $Domain 域名
     * @param string $DomainId 域名ID
     * @param string $InstanceId 实例ID
     * @param string $Cname cname地址
     * @param string $Edition 域名所属实例类型。
sparta-waf：SaaS型WAF实例
clb-waf：负载均衡型WAF实例
cdc-clb-waf：CDC环境下负载均衡型WAF实例
     * @param string $Region 地域。
"多伦多": "ca"
"广州": "gz"
"成都": "cd"
"福州": "fzec"
"深圳": "szx"
"印度": "in"
"济南": "jnec"
"重庆": "cq"
"天津": "tsn"
"欧洲东北": "ru"
"南京": "nj"
"美国硅谷": "usw"
"泰国": "th"
"广州Open": "gzopen"
"深圳金融": "szjr"
"法兰克福": "de"
"日本": "jp"
"弗吉尼亚": "use"
"北京": "bj"
"中国香港": "hk"
"杭州": "hzec"
"北京金融": "bjjr"
"上海金融": "shjr"
"台北": "tpe"
"首尔": "kr"
"上海": "sh"
"新加坡": "sg"
"清远": "qy"
     * @param string $InstanceName 实例名
     * @param integer $ClsStatus 访问日志开关状态。
0：关闭
1：开启
     * @param integer $FlowMode 负载均衡型WAF使用模式。
0：镜像模式 
1：清洗模式
     * @param integer $Status waf开关状态。
0：关闭 
1：开启
     * @param integer $Mode 规则引擎防护模式。
0：观察模式 
1：拦截模式
     * @param integer $Engine 规则引擎和AI引擎防护模式联合状态。
1:初始状态,规则引擎拦截&&AI引擎未操作开关状态
10：规则引擎观察&&AI引擎关闭模式 
11：规则引擎观察&&AI引擎观察模式 
12：规则引擎观察&&AI引擎拦截模式 
20：规则引擎拦截&&AI引擎关闭模式 
21：规则引擎拦截&&AI引擎观察模式 
22：规则引擎拦截&&AI引擎拦截模式
     * @param array $CCList 沙箱集群回源出口IP列表
     * @param array $RsList 生产集群回源出口IP列表
     * @param array $Ports 服务端口配置
     * @param array $LoadBalancerSet 负载均衡器相关配置
     * @param integer $AppId 用户id
     * @param integer $State 负载均衡型WAF域名LB监听器状态。
0：操作成功 
4：正在绑定LB 
6：正在解绑LB 
7：解绑LB失败 
8：绑定LB失败 
10：内部错误
     * @param string $CreateTime 创建时间
     * @param integer $Ipv6Status Ipv6开关状态。
0：关闭 
1：开启
     * @param integer $BotStatus BOT开关状态。
0：关闭 
1：关闭
2：开启
3：开启
     * @param integer $Level 实例版本信息。
101：小微敏捷版 
102：小微超轻版
2：高级版
3：企业版
4：旗舰版
6：独享版
     * @param integer $PostCLSStatus 投递CLS状态。
0：关闭 
1：开启
     * @param integer $PostCKafkaStatus 投递CKafka状态。
0：关闭 
1：开启
     * @param string $CdcClusters cdc实例域名接入的集群信息,非cdc实例忽略。
     * @param integer $ApiStatus api安全开关状态。
0：关闭 
1：开启
     * @param string $AlbType 应用型负载均衡类型，默认clb。
clb：七层负载均衡器类型
apisix：apisix网关型
     * @param integer $SgState 安全组状态。
0：不展示
1：非腾讯云源站
2：安全组绑定失败
3：安全组发生变更
     * @param string $SgDetail 安全组状态的详细解释
     * @param string $CloudType 域名云环境。hybrid：混合云域名
public：公有云域名
     * @param string $Note 域名备注信息
     * @param array $SrcList SAASWAF源站IP列表
     * @param array $UpstreamDomainList SAASWAF源站域名列表
     * @param string $SgID 安全组ID
     * @param integer $AccessStatus clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”
     * @param array $Labels 域名标签
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

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ClsStatus",$param) and $param["ClsStatus"] !== null) {
            $this->ClsStatus = $param["ClsStatus"];
        }

        if (array_key_exists("FlowMode",$param) and $param["FlowMode"] !== null) {
            $this->FlowMode = $param["FlowMode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("CCList",$param) and $param["CCList"] !== null) {
            $this->CCList = $param["CCList"];
        }

        if (array_key_exists("RsList",$param) and $param["RsList"] !== null) {
            $this->RsList = $param["RsList"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new PortInfo();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("LoadBalancerSet",$param) and $param["LoadBalancerSet"] !== null) {
            $this->LoadBalancerSet = [];
            foreach ($param["LoadBalancerSet"] as $key => $value){
                $obj = new LoadBalancerPackageNew();
                $obj->deserialize($value);
                array_push($this->LoadBalancerSet, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Ipv6Status",$param) and $param["Ipv6Status"] !== null) {
            $this->Ipv6Status = $param["Ipv6Status"];
        }

        if (array_key_exists("BotStatus",$param) and $param["BotStatus"] !== null) {
            $this->BotStatus = $param["BotStatus"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("PostCLSStatus",$param) and $param["PostCLSStatus"] !== null) {
            $this->PostCLSStatus = $param["PostCLSStatus"];
        }

        if (array_key_exists("PostCKafkaStatus",$param) and $param["PostCKafkaStatus"] !== null) {
            $this->PostCKafkaStatus = $param["PostCKafkaStatus"];
        }

        if (array_key_exists("CdcClusters",$param) and $param["CdcClusters"] !== null) {
            $this->CdcClusters = $param["CdcClusters"];
        }

        if (array_key_exists("ApiStatus",$param) and $param["ApiStatus"] !== null) {
            $this->ApiStatus = $param["ApiStatus"];
        }

        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }

        if (array_key_exists("SgState",$param) and $param["SgState"] !== null) {
            $this->SgState = $param["SgState"];
        }

        if (array_key_exists("SgDetail",$param) and $param["SgDetail"] !== null) {
            $this->SgDetail = $param["SgDetail"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("SrcList",$param) and $param["SrcList"] !== null) {
            $this->SrcList = $param["SrcList"];
        }

        if (array_key_exists("UpstreamDomainList",$param) and $param["UpstreamDomainList"] !== null) {
            $this->UpstreamDomainList = $param["UpstreamDomainList"];
        }

        if (array_key_exists("SgID",$param) and $param["SgID"] !== null) {
            $this->SgID = $param["SgID"];
        }

        if (array_key_exists("AccessStatus",$param) and $param["AccessStatus"] !== null) {
            $this->AccessStatus = $param["AccessStatus"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }
    }
}
