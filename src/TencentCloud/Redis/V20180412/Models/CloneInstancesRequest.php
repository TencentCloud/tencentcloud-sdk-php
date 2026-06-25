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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloneInstances请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定待克隆的源实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定待克隆的源实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method integer getGoodsNum() 获取<p>单次克隆实例的数量。</p><ul><li>包年包月每次购买最大数量为100。</li><li>按量计费每次购买最大数量为30。</li></ul>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>单次克隆实例的数量。</p><ul><li>包年包月每次购买最大数量为100。</li><li>按量计费每次购买最大数量为30。</li></ul>
 * @method integer getZoneId() 获取<p>克隆实例所属的可用区ID。当前所支持的可用区 ID，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a> 。</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>克隆实例所属的可用区ID。当前所支持的可用区 ID，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a> 。</p>
 * @method integer getBillingMode() 获取<p>付费方式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
 * @method void setBillingMode(integer $BillingMode) 设置<p>付费方式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
 * @method integer getPeriod() 获取<p>购买实例时长。<ul><li>单位：月。</li><li>付费方式选择包年包月计费时，取值范围为[1,2,3,4,5,6,7,8,9,10,11,12,24,36,48,60]。</li><li>付费方式选择按量计费时，设置为1。</li></ul></p>
 * @method void setPeriod(integer $Period) 设置<p>购买实例时长。<ul><li>单位：月。</li><li>付费方式选择包年包月计费时，取值范围为[1,2,3,4,5,6,7,8,9,10,11,12,24,36,48,60]。</li><li>付费方式选择按量计费时，设置为1。</li></ul></p>
 * @method array getSecurityGroupIdList() 获取<p>安全组ID。请通过 <a href="https://cloud.tencent.com/document/product/239/34447">DescribeInstanceSecurityGroup</a> 接口获取实例的安全组 ID。</p>
 * @method void setSecurityGroupIdList(array $SecurityGroupIdList) 设置<p>安全组ID。请通过 <a href="https://cloud.tencent.com/document/product/239/34447">DescribeInstanceSecurityGroup</a> 接口获取实例的安全组 ID。</p>
 * @method string getBackupId() 获取<p>克隆实例使用的备份ID。请通过接口<a href="https://cloud.tencent.com/document/product/239/20011">DescribeInstanceBackups</a>获取备份ID。</p>
 * @method void setBackupId(string $BackupId) 设置<p>克隆实例使用的备份ID。请通过接口<a href="https://cloud.tencent.com/document/product/239/20011">DescribeInstanceBackups</a>获取备份ID。</p>
 * @method boolean getNoAuth() 获取<p>配置克隆实例是否支持免密访问。开启 SSL 与外网均不支持免密访问。<ul><li>true：免密实例，</li><li>false：非免密实例。默认为非免密实例。</li></ul></p>
 * @method void setNoAuth(boolean $NoAuth) 设置<p>配置克隆实例是否支持免密访问。开启 SSL 与外网均不支持免密访问。<ul><li>true：免密实例，</li><li>false：非免密实例。默认为非免密实例。</li></ul></p>
 * @method string getVpcId() 获取<p>配置克隆实例的私有网络ID。如果未配置该参数，默认选择基础网络。</p>
 * @method void setVpcId(string $VpcId) 设置<p>配置克隆实例的私有网络ID。如果未配置该参数，默认选择基础网络。</p>
 * @method string getSubnetId() 获取<p>配置克隆实例所属私有网络的子网。基础网络时该参数无需配置。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>配置克隆实例所属私有网络的子网。基础网络时该参数无需配置。</p>
 * @method string getInstanceName() 获取<p>克隆实例的名称。<br>仅支持长度小于60的中文、英文或者数字，短划线&quot;-&quot;、下划线&quot;_&quot;。<br></p>
 * @method void setInstanceName(string $InstanceName) 设置<p>克隆实例的名称。<br>仅支持长度小于60的中文、英文或者数字，短划线&quot;-&quot;、下划线&quot;_&quot;。<br></p>
 * @method string getPassword() 获取<p>克隆实例的访问密码。<ul><li>当输入参数<b>NoAuth</b>为<b>true</b>时，可不设置该参数。</li><li>当实例为Redis2.8、4.0和5.0时，其密码格式为：8-30个字符，至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种，不能以&quot;/&quot;开头；</li><li>当实例为CKV 3.2时，其密码格式为：8-30个字符，必须包含字母和数字，且不包含其他字符。</li></ul></p>
 * @method void setPassword(string $Password) 设置<p>克隆实例的访问密码。<ul><li>当输入参数<b>NoAuth</b>为<b>true</b>时，可不设置该参数。</li><li>当实例为Redis2.8、4.0和5.0时，其密码格式为：8-30个字符，至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种，不能以&quot;/&quot;开头；</li><li>当实例为CKV 3.2时，其密码格式为：8-30个字符，必须包含字母和数字，且不包含其他字符。</li></ul></p>
 * @method integer getAutoRenew() 获取<p>自动续费标识。<ul><li>0：默认状态，手动续费。</li><li>1：自动续费。</li><li>2：不自动续费，到期自动隔离。</li></ul></p>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>自动续费标识。<ul><li>0：默认状态，手动续费。</li><li>1：自动续费。</li><li>2：不自动续费，到期自动隔离。</li></ul></p>
 * @method integer getVPort() 获取<p>用户自定义的端口，默认为6379，取值范围[1024,65535]。</p>
 * @method void setVPort(integer $VPort) 设置<p>用户自定义的端口，默认为6379，取值范围[1024,65535]。</p>
 * @method array getNodeSet() 获取<p>实例的节点信息。<ul><li>目前支持配置节点的类型（主节点或者副本节点），及其节点的可用区信息。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/20022#RedisNodeInfo">RedisNodeInfo</a>。</li><li>单可用区部署可不配置该参数。</li></ul></p>
 * @method void setNodeSet(array $NodeSet) 设置<p>实例的节点信息。<ul><li>目前支持配置节点的类型（主节点或者副本节点），及其节点的可用区信息。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/20022#RedisNodeInfo">RedisNodeInfo</a>。</li><li>单可用区部署可不配置该参数。</li></ul></p>
 * @method integer getProjectId() 获取<p>项目 ID。登录<a href="https://console.cloud.tencent.com/redis#/">Redis 控制台</a>，可在右上角的<b>账号中心</b> &gt; <b>项目管理</b>中查找项目ID。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 ID。登录<a href="https://console.cloud.tencent.com/redis#/">Redis 控制台</a>，可在右上角的<b>账号中心</b> &gt; <b>项目管理</b>中查找项目ID。</p>
 * @method array getResourceTags() 获取<p>克隆实例需绑定的标签。</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>克隆实例需绑定的标签。</p>
 * @method string getTemplateId() 获取<p>指定克隆实例相关的参数模板 ID。</p><ul><li>若不配置该参数，则系统会依据所选择的兼容版本及架构，自动适配对应的默认模板。</li><li>请通过<a href="https://cloud.tencent.com/document/product/239/58750">DescribeParamTemplates</a>接口，查询实例的参数模板列表，获取模板 ID 编号。</li></ul>
 * @method void setTemplateId(string $TemplateId) 设置<p>指定克隆实例相关的参数模板 ID。</p><ul><li>若不配置该参数，则系统会依据所选择的兼容版本及架构，自动适配对应的默认模板。</li><li>请通过<a href="https://cloud.tencent.com/document/product/239/58750">DescribeParamTemplates</a>接口，查询实例的参数模板列表，获取模板 ID 编号。</li></ul>
 * @method array getAlarmPolicyList() 获取<p>指定克隆实例的告警策略 ID。请登录<a href="https://console.cloud.tencent.com/monitor/alarm2/policy">腾讯云可观测平台控制台</a>，在 <b>告警管理</b> &gt; <b>策略管理</b>页面获取策略 ID 信息。</p>
 * @method void setAlarmPolicyList(array $AlarmPolicyList) 设置<p>指定克隆实例的告警策略 ID。请登录<a href="https://console.cloud.tencent.com/monitor/alarm2/policy">腾讯云可观测平台控制台</a>，在 <b>告警管理</b> &gt; <b>策略管理</b>页面获取策略 ID 信息。</p>
 * @method string getCloneTime() 获取<p>克隆指定恢复数据的时间。<br>仅支持已开通秒级备份的实例</p>
 * @method void setCloneTime(string $CloneTime) 设置<p>克隆指定恢复数据的时间。<br>仅支持已开通秒级备份的实例</p>
 * @method boolean getEncryptPassword() 获取<p>是否加密密码</p>
 * @method void setEncryptPassword(boolean $EncryptPassword) 设置<p>是否加密密码</p>
 * @method PasswordPolicy getPasswordPolicy() 获取<p>实例密码复杂度策略</p><p>入参限制：未传或 Enabled=false 视为不启用，按默认规则校验</p>
 * @method void setPasswordPolicy(PasswordPolicy $PasswordPolicy) 设置<p>实例密码复杂度策略</p><p>入参限制：未传或 Enabled=false 视为不启用，按默认规则校验</p>
 * @method boolean getEnableSSL() 获取<p>是否开启 SSL 加密传输。</p><p>枚举值：</p><ul><li>true： 开启。</li><li>false： 关闭（默认值）。</li></ul><p>默认值：false</p>
 * @method void setEnableSSL(boolean $EnableSSL) 设置<p>是否开启 SSL 加密传输。</p><p>枚举值：</p><ul><li>true： 开启。</li><li>false： 关闭（默认值）。</li></ul><p>默认值：false</p>
 * @method boolean getSSLBindPrivateIPv4() 获取<p>开启 SSL 时，是否将实例的内网 IPv4 地址写入证书的域名别名（SAN）中。仅在 EnableSSL 为 true 时生效。</p><p>枚举值：</p><ul><li>true： 允许使用内网 IP 进行 SSL 证书校验。</li><li>false： 不添加证书的 SAN 扩展信息。</li></ul><p>默认值：false</p>
 * @method void setSSLBindPrivateIPv4(boolean $SSLBindPrivateIPv4) 设置<p>开启 SSL 时，是否将实例的内网 IPv4 地址写入证书的域名别名（SAN）中。仅在 EnableSSL 为 true 时生效。</p><p>枚举值：</p><ul><li>true： 允许使用内网 IP 进行 SSL 证书校验。</li><li>false： 不添加证书的 SAN 扩展信息。</li></ul><p>默认值：false</p>
 */
class CloneInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>指定待克隆的源实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>单次克隆实例的数量。</p><ul><li>包年包月每次购买最大数量为100。</li><li>按量计费每次购买最大数量为30。</li></ul>
     */
    public $GoodsNum;

    /**
     * @var integer <p>克隆实例所属的可用区ID。当前所支持的可用区 ID，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a> 。</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>付费方式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
     */
    public $BillingMode;

    /**
     * @var integer <p>购买实例时长。<ul><li>单位：月。</li><li>付费方式选择包年包月计费时，取值范围为[1,2,3,4,5,6,7,8,9,10,11,12,24,36,48,60]。</li><li>付费方式选择按量计费时，设置为1。</li></ul></p>
     */
    public $Period;

    /**
     * @var array <p>安全组ID。请通过 <a href="https://cloud.tencent.com/document/product/239/34447">DescribeInstanceSecurityGroup</a> 接口获取实例的安全组 ID。</p>
     */
    public $SecurityGroupIdList;

    /**
     * @var string <p>克隆实例使用的备份ID。请通过接口<a href="https://cloud.tencent.com/document/product/239/20011">DescribeInstanceBackups</a>获取备份ID。</p>
     */
    public $BackupId;

    /**
     * @var boolean <p>配置克隆实例是否支持免密访问。开启 SSL 与外网均不支持免密访问。<ul><li>true：免密实例，</li><li>false：非免密实例。默认为非免密实例。</li></ul></p>
     */
    public $NoAuth;

    /**
     * @var string <p>配置克隆实例的私有网络ID。如果未配置该参数，默认选择基础网络。</p>
     */
    public $VpcId;

    /**
     * @var string <p>配置克隆实例所属私有网络的子网。基础网络时该参数无需配置。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>克隆实例的名称。<br>仅支持长度小于60的中文、英文或者数字，短划线&quot;-&quot;、下划线&quot;_&quot;。<br></p>
     */
    public $InstanceName;

    /**
     * @var string <p>克隆实例的访问密码。<ul><li>当输入参数<b>NoAuth</b>为<b>true</b>时，可不设置该参数。</li><li>当实例为Redis2.8、4.0和5.0时，其密码格式为：8-30个字符，至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种，不能以&quot;/&quot;开头；</li><li>当实例为CKV 3.2时，其密码格式为：8-30个字符，必须包含字母和数字，且不包含其他字符。</li></ul></p>
     */
    public $Password;

    /**
     * @var integer <p>自动续费标识。<ul><li>0：默认状态，手动续费。</li><li>1：自动续费。</li><li>2：不自动续费，到期自动隔离。</li></ul></p>
     */
    public $AutoRenew;

    /**
     * @var integer <p>用户自定义的端口，默认为6379，取值范围[1024,65535]。</p>
     */
    public $VPort;

    /**
     * @var array <p>实例的节点信息。<ul><li>目前支持配置节点的类型（主节点或者副本节点），及其节点的可用区信息。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/20022#RedisNodeInfo">RedisNodeInfo</a>。</li><li>单可用区部署可不配置该参数。</li></ul></p>
     */
    public $NodeSet;

    /**
     * @var integer <p>项目 ID。登录<a href="https://console.cloud.tencent.com/redis#/">Redis 控制台</a>，可在右上角的<b>账号中心</b> &gt; <b>项目管理</b>中查找项目ID。</p>
     */
    public $ProjectId;

    /**
     * @var array <p>克隆实例需绑定的标签。</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>指定克隆实例相关的参数模板 ID。</p><ul><li>若不配置该参数，则系统会依据所选择的兼容版本及架构，自动适配对应的默认模板。</li><li>请通过<a href="https://cloud.tencent.com/document/product/239/58750">DescribeParamTemplates</a>接口，查询实例的参数模板列表，获取模板 ID 编号。</li></ul>
     */
    public $TemplateId;

    /**
     * @var array <p>指定克隆实例的告警策略 ID。请登录<a href="https://console.cloud.tencent.com/monitor/alarm2/policy">腾讯云可观测平台控制台</a>，在 <b>告警管理</b> &gt; <b>策略管理</b>页面获取策略 ID 信息。</p>
     */
    public $AlarmPolicyList;

    /**
     * @var string <p>克隆指定恢复数据的时间。<br>仅支持已开通秒级备份的实例</p>
     */
    public $CloneTime;

    /**
     * @var boolean <p>是否加密密码</p>
     */
    public $EncryptPassword;

    /**
     * @var PasswordPolicy <p>实例密码复杂度策略</p><p>入参限制：未传或 Enabled=false 视为不启用，按默认规则校验</p>
     */
    public $PasswordPolicy;

    /**
     * @var boolean <p>是否开启 SSL 加密传输。</p><p>枚举值：</p><ul><li>true： 开启。</li><li>false： 关闭（默认值）。</li></ul><p>默认值：false</p>
     */
    public $EnableSSL;

    /**
     * @var boolean <p>开启 SSL 时，是否将实例的内网 IPv4 地址写入证书的域名别名（SAN）中。仅在 EnableSSL 为 true 时生效。</p><p>枚举值：</p><ul><li>true： 允许使用内网 IP 进行 SSL 证书校验。</li><li>false： 不添加证书的 SAN 扩展信息。</li></ul><p>默认值：false</p>
     */
    public $SSLBindPrivateIPv4;

    /**
     * @param string $InstanceId <p>指定待克隆的源实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param integer $GoodsNum <p>单次克隆实例的数量。</p><ul><li>包年包月每次购买最大数量为100。</li><li>按量计费每次购买最大数量为30。</li></ul>
     * @param integer $ZoneId <p>克隆实例所属的可用区ID。当前所支持的可用区 ID，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a> 。</p>
     * @param integer $BillingMode <p>付费方式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
     * @param integer $Period <p>购买实例时长。<ul><li>单位：月。</li><li>付费方式选择包年包月计费时，取值范围为[1,2,3,4,5,6,7,8,9,10,11,12,24,36,48,60]。</li><li>付费方式选择按量计费时，设置为1。</li></ul></p>
     * @param array $SecurityGroupIdList <p>安全组ID。请通过 <a href="https://cloud.tencent.com/document/product/239/34447">DescribeInstanceSecurityGroup</a> 接口获取实例的安全组 ID。</p>
     * @param string $BackupId <p>克隆实例使用的备份ID。请通过接口<a href="https://cloud.tencent.com/document/product/239/20011">DescribeInstanceBackups</a>获取备份ID。</p>
     * @param boolean $NoAuth <p>配置克隆实例是否支持免密访问。开启 SSL 与外网均不支持免密访问。<ul><li>true：免密实例，</li><li>false：非免密实例。默认为非免密实例。</li></ul></p>
     * @param string $VpcId <p>配置克隆实例的私有网络ID。如果未配置该参数，默认选择基础网络。</p>
     * @param string $SubnetId <p>配置克隆实例所属私有网络的子网。基础网络时该参数无需配置。</p>
     * @param string $InstanceName <p>克隆实例的名称。<br>仅支持长度小于60的中文、英文或者数字，短划线&quot;-&quot;、下划线&quot;_&quot;。<br></p>
     * @param string $Password <p>克隆实例的访问密码。<ul><li>当输入参数<b>NoAuth</b>为<b>true</b>时，可不设置该参数。</li><li>当实例为Redis2.8、4.0和5.0时，其密码格式为：8-30个字符，至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种，不能以&quot;/&quot;开头；</li><li>当实例为CKV 3.2时，其密码格式为：8-30个字符，必须包含字母和数字，且不包含其他字符。</li></ul></p>
     * @param integer $AutoRenew <p>自动续费标识。<ul><li>0：默认状态，手动续费。</li><li>1：自动续费。</li><li>2：不自动续费，到期自动隔离。</li></ul></p>
     * @param integer $VPort <p>用户自定义的端口，默认为6379，取值范围[1024,65535]。</p>
     * @param array $NodeSet <p>实例的节点信息。<ul><li>目前支持配置节点的类型（主节点或者副本节点），及其节点的可用区信息。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/20022#RedisNodeInfo">RedisNodeInfo</a>。</li><li>单可用区部署可不配置该参数。</li></ul></p>
     * @param integer $ProjectId <p>项目 ID。登录<a href="https://console.cloud.tencent.com/redis#/">Redis 控制台</a>，可在右上角的<b>账号中心</b> &gt; <b>项目管理</b>中查找项目ID。</p>
     * @param array $ResourceTags <p>克隆实例需绑定的标签。</p>
     * @param string $TemplateId <p>指定克隆实例相关的参数模板 ID。</p><ul><li>若不配置该参数，则系统会依据所选择的兼容版本及架构，自动适配对应的默认模板。</li><li>请通过<a href="https://cloud.tencent.com/document/product/239/58750">DescribeParamTemplates</a>接口，查询实例的参数模板列表，获取模板 ID 编号。</li></ul>
     * @param array $AlarmPolicyList <p>指定克隆实例的告警策略 ID。请登录<a href="https://console.cloud.tencent.com/monitor/alarm2/policy">腾讯云可观测平台控制台</a>，在 <b>告警管理</b> &gt; <b>策略管理</b>页面获取策略 ID 信息。</p>
     * @param string $CloneTime <p>克隆指定恢复数据的时间。<br>仅支持已开通秒级备份的实例</p>
     * @param boolean $EncryptPassword <p>是否加密密码</p>
     * @param PasswordPolicy $PasswordPolicy <p>实例密码复杂度策略</p><p>入参限制：未传或 Enabled=false 视为不启用，按默认规则校验</p>
     * @param boolean $EnableSSL <p>是否开启 SSL 加密传输。</p><p>枚举值：</p><ul><li>true： 开启。</li><li>false： 关闭（默认值）。</li></ul><p>默认值：false</p>
     * @param boolean $SSLBindPrivateIPv4 <p>开启 SSL 时，是否将实例的内网 IPv4 地址写入证书的域名别名（SAN）中。仅在 EnableSSL 为 true 时生效。</p><p>枚举值：</p><ul><li>true： 允许使用内网 IP 进行 SSL 证书校验。</li><li>false： 不添加证书的 SAN 扩展信息。</li></ul><p>默认值：false</p>
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

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("SecurityGroupIdList",$param) and $param["SecurityGroupIdList"] !== null) {
            $this->SecurityGroupIdList = $param["SecurityGroupIdList"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("AlarmPolicyList",$param) and $param["AlarmPolicyList"] !== null) {
            $this->AlarmPolicyList = $param["AlarmPolicyList"];
        }

        if (array_key_exists("CloneTime",$param) and $param["CloneTime"] !== null) {
            $this->CloneTime = $param["CloneTime"];
        }

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }

        if (array_key_exists("PasswordPolicy",$param) and $param["PasswordPolicy"] !== null) {
            $this->PasswordPolicy = new PasswordPolicy();
            $this->PasswordPolicy->deserialize($param["PasswordPolicy"]);
        }

        if (array_key_exists("EnableSSL",$param) and $param["EnableSSL"] !== null) {
            $this->EnableSSL = $param["EnableSSL"];
        }

        if (array_key_exists("SSLBindPrivateIPv4",$param) and $param["SSLBindPrivateIPv4"] !== null) {
            $this->SSLBindPrivateIPv4 = $param["SSLBindPrivateIPv4"];
        }
    }
}
