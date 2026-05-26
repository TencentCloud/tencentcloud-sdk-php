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
 * domain列表
 *
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getDomainId() 获取<p>域名ID</p>
 * @method void setDomainId(string $DomainId) 设置<p>域名ID</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getCname() 获取<p>cname地址</p>
 * @method void setCname(string $Cname) 设置<p>cname地址</p>
 * @method string getEdition() 获取<p>域名所属实例类型。<br>sparta-waf：SaaS型WAF实例<br>clb-waf：负载均衡型WAF实例<br>cdc-clb-waf：CDC环境下负载均衡型WAF实例</p>
 * @method void setEdition(string $Edition) 设置<p>域名所属实例类型。<br>sparta-waf：SaaS型WAF实例<br>clb-waf：负载均衡型WAF实例<br>cdc-clb-waf：CDC环境下负载均衡型WAF实例</p>
 * @method string getRegion() 获取<p>地域。<br>&quot;多伦多&quot;: &quot;ca&quot;<br>&quot;广州&quot;: &quot;gz&quot;<br>&quot;成都&quot;: &quot;cd&quot;<br>&quot;福州&quot;: &quot;fzec&quot;<br>&quot;深圳&quot;: &quot;szx&quot;<br>&quot;印度&quot;: &quot;in&quot;<br>&quot;济南&quot;: &quot;jnec&quot;<br>&quot;重庆&quot;: &quot;cq&quot;<br>&quot;天津&quot;: &quot;tsn&quot;<br>&quot;欧洲东北&quot;: &quot;ru&quot;<br>&quot;南京&quot;: &quot;nj&quot;<br>&quot;美国硅谷&quot;: &quot;usw&quot;<br>&quot;泰国&quot;: &quot;th&quot;<br>&quot;广州Open&quot;: &quot;gzopen&quot;<br>&quot;深圳金融&quot;: &quot;szjr&quot;<br>&quot;法兰克福&quot;: &quot;de&quot;<br>&quot;日本&quot;: &quot;jp&quot;<br>&quot;弗吉尼亚&quot;: &quot;use&quot;<br>&quot;北京&quot;: &quot;bj&quot;<br>&quot;中国香港&quot;: &quot;hk&quot;<br>&quot;杭州&quot;: &quot;hzec&quot;<br>&quot;北京金融&quot;: &quot;bjjr&quot;<br>&quot;上海金融&quot;: &quot;shjr&quot;<br>&quot;台北&quot;: &quot;tpe&quot;<br>&quot;首尔&quot;: &quot;kr&quot;<br>&quot;上海&quot;: &quot;sh&quot;<br>&quot;新加坡&quot;: &quot;sg&quot;<br>&quot;清远&quot;: &quot;qy&quot;</p>
 * @method void setRegion(string $Region) 设置<p>地域。<br>&quot;多伦多&quot;: &quot;ca&quot;<br>&quot;广州&quot;: &quot;gz&quot;<br>&quot;成都&quot;: &quot;cd&quot;<br>&quot;福州&quot;: &quot;fzec&quot;<br>&quot;深圳&quot;: &quot;szx&quot;<br>&quot;印度&quot;: &quot;in&quot;<br>&quot;济南&quot;: &quot;jnec&quot;<br>&quot;重庆&quot;: &quot;cq&quot;<br>&quot;天津&quot;: &quot;tsn&quot;<br>&quot;欧洲东北&quot;: &quot;ru&quot;<br>&quot;南京&quot;: &quot;nj&quot;<br>&quot;美国硅谷&quot;: &quot;usw&quot;<br>&quot;泰国&quot;: &quot;th&quot;<br>&quot;广州Open&quot;: &quot;gzopen&quot;<br>&quot;深圳金融&quot;: &quot;szjr&quot;<br>&quot;法兰克福&quot;: &quot;de&quot;<br>&quot;日本&quot;: &quot;jp&quot;<br>&quot;弗吉尼亚&quot;: &quot;use&quot;<br>&quot;北京&quot;: &quot;bj&quot;<br>&quot;中国香港&quot;: &quot;hk&quot;<br>&quot;杭州&quot;: &quot;hzec&quot;<br>&quot;北京金融&quot;: &quot;bjjr&quot;<br>&quot;上海金融&quot;: &quot;shjr&quot;<br>&quot;台北&quot;: &quot;tpe&quot;<br>&quot;首尔&quot;: &quot;kr&quot;<br>&quot;上海&quot;: &quot;sh&quot;<br>&quot;新加坡&quot;: &quot;sg&quot;<br>&quot;清远&quot;: &quot;qy&quot;</p>
 * @method string getInstanceName() 获取<p>实例名</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名</p>
 * @method integer getClsStatus() 获取<p>访问日志开关状态。<br>0：关闭<br>1：开启</p>
 * @method void setClsStatus(integer $ClsStatus) 设置<p>访问日志开关状态。<br>0：关闭<br>1：开启</p>
 * @method integer getFlowMode() 获取<p>负载均衡型WAF使用模式。<br>0：镜像模式<br>1：清洗模式</p>
 * @method void setFlowMode(integer $FlowMode) 设置<p>负载均衡型WAF使用模式。<br>0：镜像模式<br>1：清洗模式</p>
 * @method integer getStatus() 获取<p>waf开关状态。<br>0：关闭<br>1：开启</p>
 * @method void setStatus(integer $Status) 设置<p>waf开关状态。<br>0：关闭<br>1：开启</p>
 * @method integer getMode() 获取<p>规则引擎防护模式。<br>0：观察模式<br>1：拦截模式</p>
 * @method void setMode(integer $Mode) 设置<p>规则引擎防护模式。<br>0：观察模式<br>1：拦截模式</p>
 * @method integer getEngine() 获取<p>规则引擎和AI引擎防护模式联合状态。<br>1:初始状态,规则引擎拦截&amp;&amp;AI引擎未操作开关状态<br>10：规则引擎观察&amp;&amp;AI引擎关闭模式<br>11：规则引擎观察&amp;&amp;AI引擎观察模式<br>12：规则引擎观察&amp;&amp;AI引擎拦截模式<br>20：规则引擎拦截&amp;&amp;AI引擎关闭模式<br>21：规则引擎拦截&amp;&amp;AI引擎观察模式<br>22：规则引擎拦截&amp;&amp;AI引擎拦截模式</p>
 * @method void setEngine(integer $Engine) 设置<p>规则引擎和AI引擎防护模式联合状态。<br>1:初始状态,规则引擎拦截&amp;&amp;AI引擎未操作开关状态<br>10：规则引擎观察&amp;&amp;AI引擎关闭模式<br>11：规则引擎观察&amp;&amp;AI引擎观察模式<br>12：规则引擎观察&amp;&amp;AI引擎拦截模式<br>20：规则引擎拦截&amp;&amp;AI引擎关闭模式<br>21：规则引擎拦截&amp;&amp;AI引擎观察模式<br>22：规则引擎拦截&amp;&amp;AI引擎拦截模式</p>
 * @method array getCCList() 获取<p>沙箱集群回源出口IP列表</p>
 * @method void setCCList(array $CCList) 设置<p>沙箱集群回源出口IP列表</p>
 * @method array getRsList() 获取<p>生产集群回源出口IP列表</p>
 * @method void setRsList(array $RsList) 设置<p>生产集群回源出口IP列表</p>
 * @method array getPorts() 获取<p>服务端口配置</p>
 * @method void setPorts(array $Ports) 设置<p>服务端口配置</p>
 * @method array getLoadBalancerSet() 获取<p>负载均衡器相关配置</p>
 * @method void setLoadBalancerSet(array $LoadBalancerSet) 设置<p>负载均衡器相关配置</p>
 * @method integer getAppId() 获取<p>用户id</p>
 * @method void setAppId(integer $AppId) 设置<p>用户id</p>
 * @method integer getState() 获取<p>SAAS型WAF域名状态：<br>-2：配置下发失败<br>-1：配置下发中<br>0：DNS解析中<br>1：无DNS解析记录，请接入WAF<br>10：DNS解析未知，域名启用了代理<br>11：DNS解析异常，使用A记录接入WAF IP<br>200：检测源站不可达<br>220：源站不支持长连接<br>311：证书过期<br>312：证书即将过期<br>310：证书异常<br>316：备案异常<br>5：WAF回源已变更<br>负载均衡型WAF域名LB监听器状态：<br>0：操作成功<br>4：正在绑定LB<br>6：正在解绑LB<br>7：解绑LB失败<br>8：绑定LB失败<br>10：内部错误</p>
 * @method void setState(integer $State) 设置<p>SAAS型WAF域名状态：<br>-2：配置下发失败<br>-1：配置下发中<br>0：DNS解析中<br>1：无DNS解析记录，请接入WAF<br>10：DNS解析未知，域名启用了代理<br>11：DNS解析异常，使用A记录接入WAF IP<br>200：检测源站不可达<br>220：源站不支持长连接<br>311：证书过期<br>312：证书即将过期<br>310：证书异常<br>316：备案异常<br>5：WAF回源已变更<br>负载均衡型WAF域名LB监听器状态：<br>0：操作成功<br>4：正在绑定LB<br>6：正在解绑LB<br>7：解绑LB失败<br>8：绑定LB失败<br>10：内部错误</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>编辑时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>编辑时间</p>
 * @method integer getIpv6Status() 获取<p>Ipv6开关状态。<br>0：关闭<br>1：开启</p>
 * @method void setIpv6Status(integer $Ipv6Status) 设置<p>Ipv6开关状态。<br>0：关闭<br>1：开启</p>
 * @method integer getBotStatus() 获取<p>BOT开关状态。<br>0：关闭<br>1：关闭<br>2：开启<br>3：开启</p>
 * @method void setBotStatus(integer $BotStatus) 设置<p>BOT开关状态。<br>0：关闭<br>1：关闭<br>2：开启<br>3：开启</p>
 * @method integer getLevel() 获取<p>实例版本信息。<br>101：小微敏捷版<br>102：小微超轻版<br>2：高级版<br>3：企业版<br>4：旗舰版<br>6：独享版</p>
 * @method void setLevel(integer $Level) 设置<p>实例版本信息。<br>101：小微敏捷版<br>102：小微超轻版<br>2：高级版<br>3：企业版<br>4：旗舰版<br>6：独享版</p>
 * @method integer getPostCLSStatus() 获取<p>投递CLS状态。<br>0：关闭<br>1：开启</p>
 * @method void setPostCLSStatus(integer $PostCLSStatus) 设置<p>投递CLS状态。<br>0：关闭<br>1：开启</p>
 * @method integer getPostCKafkaStatus() 获取<p>投递CKafka状态。<br>0：关闭<br>1：开启</p>
 * @method void setPostCKafkaStatus(integer $PostCKafkaStatus) 设置<p>投递CKafka状态。<br>0：关闭<br>1：开启</p>
 * @method string getCdcClusters() 获取<p>cdc实例域名接入的集群信息,非cdc实例忽略。</p>
 * @method void setCdcClusters(string $CdcClusters) 设置<p>cdc实例域名接入的集群信息,非cdc实例忽略。</p>
 * @method integer getApiStatus() 获取<p>api安全开关状态。<br>0：关闭<br>1：开启</p>
 * @method void setApiStatus(integer $ApiStatus) 设置<p>api安全开关状态。<br>0：关闭<br>1：开启</p>
 * @method string getAlbType() 获取<p>应用型负载均衡类型，默认clb。<br>clb：七层负载均衡器类型<br>apisix：apisix网关型</p>
 * @method void setAlbType(string $AlbType) 设置<p>应用型负载均衡类型，默认clb。<br>clb：七层负载均衡器类型<br>apisix：apisix网关型</p>
 * @method integer getSgState() 获取<p>安全组状态。<br>0：不展示<br>1：非腾讯云源站<br>2：安全组绑定失败<br>3：安全组发生变更</p>
 * @method void setSgState(integer $SgState) 设置<p>安全组状态。<br>0：不展示<br>1：非腾讯云源站<br>2：安全组绑定失败<br>3：安全组发生变更</p>
 * @method string getSgDetail() 获取<p>安全组状态的详细解释</p>
 * @method void setSgDetail(string $SgDetail) 设置<p>安全组状态的详细解释</p>
 * @method string getCloudType() 获取<p>域名云环境。hybrid：混合云域名<br>public：公有云域名</p>
 * @method void setCloudType(string $CloudType) 设置<p>域名云环境。hybrid：混合云域名<br>public：公有云域名</p>
 * @method string getNote() 获取<p>域名备注信息</p>
 * @method void setNote(string $Note) 设置<p>域名备注信息</p>
 * @method array getSrcList() 获取<p>SAASWAF源站IP列表</p>
 * @method void setSrcList(array $SrcList) 设置<p>SAASWAF源站IP列表</p>
 * @method array getUpstreamDomainList() 获取<p>SAASWAF源站域名列表</p>
 * @method void setUpstreamDomainList(array $UpstreamDomainList) 设置<p>SAASWAF源站域名列表</p>
 * @method string getSgID() 获取<p>安全组ID</p>
 * @method void setSgID(string $SgID) 设置<p>安全组ID</p>
 * @method integer getAccessStatus() 获取<p>clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”</p>
 * @method void setAccessStatus(integer $AccessStatus) 设置<p>clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”</p>
 * @method array getLabels() 获取<p>域名标签</p>
 * @method void setLabels(array $Labels) 设置<p>域名标签</p>
 * @method integer getPrivateVipStatus() 获取<p>saaswaf独享ip状态，0是关闭，1是开启，2是开启中</p>
 * @method void setPrivateVipStatus(integer $PrivateVipStatus) 设置<p>saaswaf独享ip状态，0是关闭，1是开启，2是开启中</p>
 * @method integer getIsREIP() 获取<p>代表是否是四层clbwaf域名</p>
 * @method void setIsREIP(integer $IsREIP) 设置<p>代表是否是四层clbwaf域名</p>
 * @method string getREIPObjectId() 获取<p>四层关联的对象ID</p>
 * @method void setREIPObjectId(string $REIPObjectId) 设置<p>四层关联的对象ID</p>
 * @method array getTagInfos() 获取<p>标签结构体</p>
 * @method void setTagInfos(array $TagInfos) 设置<p>标签结构体</p>
 * @method integer getLLMStatus() 获取<p>大模型开关</p><p>枚举值：</p><ul><li>0： 大模型开关关闭状态</li><li>1： 大模型开关开启状态</li></ul>
 * @method void setLLMStatus(integer $LLMStatus) 设置<p>大模型开关</p><p>枚举值：</p><ul><li>0： 大模型开关关闭状态</li><li>1： 大模型开关开启状态</li></ul>
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>域名ID</p>
     */
    public $DomainId;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>cname地址</p>
     */
    public $Cname;

    /**
     * @var string <p>域名所属实例类型。<br>sparta-waf：SaaS型WAF实例<br>clb-waf：负载均衡型WAF实例<br>cdc-clb-waf：CDC环境下负载均衡型WAF实例</p>
     */
    public $Edition;

    /**
     * @var string <p>地域。<br>&quot;多伦多&quot;: &quot;ca&quot;<br>&quot;广州&quot;: &quot;gz&quot;<br>&quot;成都&quot;: &quot;cd&quot;<br>&quot;福州&quot;: &quot;fzec&quot;<br>&quot;深圳&quot;: &quot;szx&quot;<br>&quot;印度&quot;: &quot;in&quot;<br>&quot;济南&quot;: &quot;jnec&quot;<br>&quot;重庆&quot;: &quot;cq&quot;<br>&quot;天津&quot;: &quot;tsn&quot;<br>&quot;欧洲东北&quot;: &quot;ru&quot;<br>&quot;南京&quot;: &quot;nj&quot;<br>&quot;美国硅谷&quot;: &quot;usw&quot;<br>&quot;泰国&quot;: &quot;th&quot;<br>&quot;广州Open&quot;: &quot;gzopen&quot;<br>&quot;深圳金融&quot;: &quot;szjr&quot;<br>&quot;法兰克福&quot;: &quot;de&quot;<br>&quot;日本&quot;: &quot;jp&quot;<br>&quot;弗吉尼亚&quot;: &quot;use&quot;<br>&quot;北京&quot;: &quot;bj&quot;<br>&quot;中国香港&quot;: &quot;hk&quot;<br>&quot;杭州&quot;: &quot;hzec&quot;<br>&quot;北京金融&quot;: &quot;bjjr&quot;<br>&quot;上海金融&quot;: &quot;shjr&quot;<br>&quot;台北&quot;: &quot;tpe&quot;<br>&quot;首尔&quot;: &quot;kr&quot;<br>&quot;上海&quot;: &quot;sh&quot;<br>&quot;新加坡&quot;: &quot;sg&quot;<br>&quot;清远&quot;: &quot;qy&quot;</p>
     */
    public $Region;

    /**
     * @var string <p>实例名</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>访问日志开关状态。<br>0：关闭<br>1：开启</p>
     */
    public $ClsStatus;

    /**
     * @var integer <p>负载均衡型WAF使用模式。<br>0：镜像模式<br>1：清洗模式</p>
     */
    public $FlowMode;

    /**
     * @var integer <p>waf开关状态。<br>0：关闭<br>1：开启</p>
     */
    public $Status;

    /**
     * @var integer <p>规则引擎防护模式。<br>0：观察模式<br>1：拦截模式</p>
     */
    public $Mode;

    /**
     * @var integer <p>规则引擎和AI引擎防护模式联合状态。<br>1:初始状态,规则引擎拦截&amp;&amp;AI引擎未操作开关状态<br>10：规则引擎观察&amp;&amp;AI引擎关闭模式<br>11：规则引擎观察&amp;&amp;AI引擎观察模式<br>12：规则引擎观察&amp;&amp;AI引擎拦截模式<br>20：规则引擎拦截&amp;&amp;AI引擎关闭模式<br>21：规则引擎拦截&amp;&amp;AI引擎观察模式<br>22：规则引擎拦截&amp;&amp;AI引擎拦截模式</p>
     */
    public $Engine;

    /**
     * @var array <p>沙箱集群回源出口IP列表</p>
     */
    public $CCList;

    /**
     * @var array <p>生产集群回源出口IP列表</p>
     */
    public $RsList;

    /**
     * @var array <p>服务端口配置</p>
     */
    public $Ports;

    /**
     * @var array <p>负载均衡器相关配置</p>
     */
    public $LoadBalancerSet;

    /**
     * @var integer <p>用户id</p>
     */
    public $AppId;

    /**
     * @var integer <p>SAAS型WAF域名状态：<br>-2：配置下发失败<br>-1：配置下发中<br>0：DNS解析中<br>1：无DNS解析记录，请接入WAF<br>10：DNS解析未知，域名启用了代理<br>11：DNS解析异常，使用A记录接入WAF IP<br>200：检测源站不可达<br>220：源站不支持长连接<br>311：证书过期<br>312：证书即将过期<br>310：证书异常<br>316：备案异常<br>5：WAF回源已变更<br>负载均衡型WAF域名LB监听器状态：<br>0：操作成功<br>4：正在绑定LB<br>6：正在解绑LB<br>7：解绑LB失败<br>8：绑定LB失败<br>10：内部错误</p>
     */
    public $State;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>编辑时间</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>Ipv6开关状态。<br>0：关闭<br>1：开启</p>
     */
    public $Ipv6Status;

    /**
     * @var integer <p>BOT开关状态。<br>0：关闭<br>1：关闭<br>2：开启<br>3：开启</p>
     */
    public $BotStatus;

    /**
     * @var integer <p>实例版本信息。<br>101：小微敏捷版<br>102：小微超轻版<br>2：高级版<br>3：企业版<br>4：旗舰版<br>6：独享版</p>
     */
    public $Level;

    /**
     * @var integer <p>投递CLS状态。<br>0：关闭<br>1：开启</p>
     */
    public $PostCLSStatus;

    /**
     * @var integer <p>投递CKafka状态。<br>0：关闭<br>1：开启</p>
     */
    public $PostCKafkaStatus;

    /**
     * @var string <p>cdc实例域名接入的集群信息,非cdc实例忽略。</p>
     */
    public $CdcClusters;

    /**
     * @var integer <p>api安全开关状态。<br>0：关闭<br>1：开启</p>
     */
    public $ApiStatus;

    /**
     * @var string <p>应用型负载均衡类型，默认clb。<br>clb：七层负载均衡器类型<br>apisix：apisix网关型</p>
     */
    public $AlbType;

    /**
     * @var integer <p>安全组状态。<br>0：不展示<br>1：非腾讯云源站<br>2：安全组绑定失败<br>3：安全组发生变更</p>
     */
    public $SgState;

    /**
     * @var string <p>安全组状态的详细解释</p>
     */
    public $SgDetail;

    /**
     * @var string <p>域名云环境。hybrid：混合云域名<br>public：公有云域名</p>
     */
    public $CloudType;

    /**
     * @var string <p>域名备注信息</p>
     */
    public $Note;

    /**
     * @var array <p>SAASWAF源站IP列表</p>
     */
    public $SrcList;

    /**
     * @var array <p>SAASWAF源站域名列表</p>
     */
    public $UpstreamDomainList;

    /**
     * @var string <p>安全组ID</p>
     */
    public $SgID;

    /**
     * @var integer <p>clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”</p>
     */
    public $AccessStatus;

    /**
     * @var array <p>域名标签</p>
     */
    public $Labels;

    /**
     * @var integer <p>saaswaf独享ip状态，0是关闭，1是开启，2是开启中</p>
     */
    public $PrivateVipStatus;

    /**
     * @var integer <p>代表是否是四层clbwaf域名</p>
     */
    public $IsREIP;

    /**
     * @var string <p>四层关联的对象ID</p>
     */
    public $REIPObjectId;

    /**
     * @var array <p>标签结构体</p>
     */
    public $TagInfos;

    /**
     * @var integer <p>大模型开关</p><p>枚举值：</p><ul><li>0： 大模型开关关闭状态</li><li>1： 大模型开关开启状态</li></ul>
     */
    public $LLMStatus;

    /**
     * @param string $Domain <p>域名</p>
     * @param string $DomainId <p>域名ID</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Cname <p>cname地址</p>
     * @param string $Edition <p>域名所属实例类型。<br>sparta-waf：SaaS型WAF实例<br>clb-waf：负载均衡型WAF实例<br>cdc-clb-waf：CDC环境下负载均衡型WAF实例</p>
     * @param string $Region <p>地域。<br>&quot;多伦多&quot;: &quot;ca&quot;<br>&quot;广州&quot;: &quot;gz&quot;<br>&quot;成都&quot;: &quot;cd&quot;<br>&quot;福州&quot;: &quot;fzec&quot;<br>&quot;深圳&quot;: &quot;szx&quot;<br>&quot;印度&quot;: &quot;in&quot;<br>&quot;济南&quot;: &quot;jnec&quot;<br>&quot;重庆&quot;: &quot;cq&quot;<br>&quot;天津&quot;: &quot;tsn&quot;<br>&quot;欧洲东北&quot;: &quot;ru&quot;<br>&quot;南京&quot;: &quot;nj&quot;<br>&quot;美国硅谷&quot;: &quot;usw&quot;<br>&quot;泰国&quot;: &quot;th&quot;<br>&quot;广州Open&quot;: &quot;gzopen&quot;<br>&quot;深圳金融&quot;: &quot;szjr&quot;<br>&quot;法兰克福&quot;: &quot;de&quot;<br>&quot;日本&quot;: &quot;jp&quot;<br>&quot;弗吉尼亚&quot;: &quot;use&quot;<br>&quot;北京&quot;: &quot;bj&quot;<br>&quot;中国香港&quot;: &quot;hk&quot;<br>&quot;杭州&quot;: &quot;hzec&quot;<br>&quot;北京金融&quot;: &quot;bjjr&quot;<br>&quot;上海金融&quot;: &quot;shjr&quot;<br>&quot;台北&quot;: &quot;tpe&quot;<br>&quot;首尔&quot;: &quot;kr&quot;<br>&quot;上海&quot;: &quot;sh&quot;<br>&quot;新加坡&quot;: &quot;sg&quot;<br>&quot;清远&quot;: &quot;qy&quot;</p>
     * @param string $InstanceName <p>实例名</p>
     * @param integer $ClsStatus <p>访问日志开关状态。<br>0：关闭<br>1：开启</p>
     * @param integer $FlowMode <p>负载均衡型WAF使用模式。<br>0：镜像模式<br>1：清洗模式</p>
     * @param integer $Status <p>waf开关状态。<br>0：关闭<br>1：开启</p>
     * @param integer $Mode <p>规则引擎防护模式。<br>0：观察模式<br>1：拦截模式</p>
     * @param integer $Engine <p>规则引擎和AI引擎防护模式联合状态。<br>1:初始状态,规则引擎拦截&amp;&amp;AI引擎未操作开关状态<br>10：规则引擎观察&amp;&amp;AI引擎关闭模式<br>11：规则引擎观察&amp;&amp;AI引擎观察模式<br>12：规则引擎观察&amp;&amp;AI引擎拦截模式<br>20：规则引擎拦截&amp;&amp;AI引擎关闭模式<br>21：规则引擎拦截&amp;&amp;AI引擎观察模式<br>22：规则引擎拦截&amp;&amp;AI引擎拦截模式</p>
     * @param array $CCList <p>沙箱集群回源出口IP列表</p>
     * @param array $RsList <p>生产集群回源出口IP列表</p>
     * @param array $Ports <p>服务端口配置</p>
     * @param array $LoadBalancerSet <p>负载均衡器相关配置</p>
     * @param integer $AppId <p>用户id</p>
     * @param integer $State <p>SAAS型WAF域名状态：<br>-2：配置下发失败<br>-1：配置下发中<br>0：DNS解析中<br>1：无DNS解析记录，请接入WAF<br>10：DNS解析未知，域名启用了代理<br>11：DNS解析异常，使用A记录接入WAF IP<br>200：检测源站不可达<br>220：源站不支持长连接<br>311：证书过期<br>312：证书即将过期<br>310：证书异常<br>316：备案异常<br>5：WAF回源已变更<br>负载均衡型WAF域名LB监听器状态：<br>0：操作成功<br>4：正在绑定LB<br>6：正在解绑LB<br>7：解绑LB失败<br>8：绑定LB失败<br>10：内部错误</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>编辑时间</p>
     * @param integer $Ipv6Status <p>Ipv6开关状态。<br>0：关闭<br>1：开启</p>
     * @param integer $BotStatus <p>BOT开关状态。<br>0：关闭<br>1：关闭<br>2：开启<br>3：开启</p>
     * @param integer $Level <p>实例版本信息。<br>101：小微敏捷版<br>102：小微超轻版<br>2：高级版<br>3：企业版<br>4：旗舰版<br>6：独享版</p>
     * @param integer $PostCLSStatus <p>投递CLS状态。<br>0：关闭<br>1：开启</p>
     * @param integer $PostCKafkaStatus <p>投递CKafka状态。<br>0：关闭<br>1：开启</p>
     * @param string $CdcClusters <p>cdc实例域名接入的集群信息,非cdc实例忽略。</p>
     * @param integer $ApiStatus <p>api安全开关状态。<br>0：关闭<br>1：开启</p>
     * @param string $AlbType <p>应用型负载均衡类型，默认clb。<br>clb：七层负载均衡器类型<br>apisix：apisix网关型</p>
     * @param integer $SgState <p>安全组状态。<br>0：不展示<br>1：非腾讯云源站<br>2：安全组绑定失败<br>3：安全组发生变更</p>
     * @param string $SgDetail <p>安全组状态的详细解释</p>
     * @param string $CloudType <p>域名云环境。hybrid：混合云域名<br>public：公有云域名</p>
     * @param string $Note <p>域名备注信息</p>
     * @param array $SrcList <p>SAASWAF源站IP列表</p>
     * @param array $UpstreamDomainList <p>SAASWAF源站域名列表</p>
     * @param string $SgID <p>安全组ID</p>
     * @param integer $AccessStatus <p>clbwaf接入状态，0代表“尚无流量接入”，1代表“流量接入”，2代表“CLB监听器已注销”，3代表“配置生效中”，4代表“配置下发失败中”</p>
     * @param array $Labels <p>域名标签</p>
     * @param integer $PrivateVipStatus <p>saaswaf独享ip状态，0是关闭，1是开启，2是开启中</p>
     * @param integer $IsREIP <p>代表是否是四层clbwaf域名</p>
     * @param string $REIPObjectId <p>四层关联的对象ID</p>
     * @param array $TagInfos <p>标签结构体</p>
     * @param integer $LLMStatus <p>大模型开关</p><p>枚举值：</p><ul><li>0： 大模型开关关闭状态</li><li>1： 大模型开关开启状态</li></ul>
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

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
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

        if (array_key_exists("PrivateVipStatus",$param) and $param["PrivateVipStatus"] !== null) {
            $this->PrivateVipStatus = $param["PrivateVipStatus"];
        }

        if (array_key_exists("IsREIP",$param) and $param["IsREIP"] !== null) {
            $this->IsREIP = $param["IsREIP"];
        }

        if (array_key_exists("REIPObjectId",$param) and $param["REIPObjectId"] !== null) {
            $this->REIPObjectId = $param["REIPObjectId"];
        }

        if (array_key_exists("TagInfos",$param) and $param["TagInfos"] !== null) {
            $this->TagInfos = [];
            foreach ($param["TagInfos"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfos, $obj);
            }
        }

        if (array_key_exists("LLMStatus",$param) and $param["LLMStatus"] !== null) {
            $this->LLMStatus = $param["LLMStatus"];
        }
    }
}
