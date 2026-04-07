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
 * CreateInstances请求参数结构体
 *
 * @method integer getTypeId() 获取<p>实例类型。</p><ul><li>2：Redis 2.8 内存版（标准架构）。</li><li>3：CKV 3.2 内存版（标准架构）。</li><li>4：CKV 3.2 内存版（集群架构）。</li><li>6：Redis 4.0 内存版（标准架构）。</li><li>7：Redis 4.0 内存版（集群架构）。</li><li>8：Redis 5.0 内存版（标准架构）。</li><li>9：Redis 5.0 内存版（集群架构）。</li><li>15：Redis 6.2 内存版（标准架构）。</li><li>16：Redis 6.2 内存版（集群架构）。</li><li>17：Redis 7.0 内存版（标准架构）。</li><li>18：Redis 7.0 内存版（集群架构）。</li><li>200：Memcached 1.6 内存版（集群架构）。<br><strong>说明</strong>：CKV 版本当前有存量用户使用，暂时保留。</li></ul>
 * @method void setTypeId(integer $TypeId) 设置<p>实例类型。</p><ul><li>2：Redis 2.8 内存版（标准架构）。</li><li>3：CKV 3.2 内存版（标准架构）。</li><li>4：CKV 3.2 内存版（集群架构）。</li><li>6：Redis 4.0 内存版（标准架构）。</li><li>7：Redis 4.0 内存版（集群架构）。</li><li>8：Redis 5.0 内存版（标准架构）。</li><li>9：Redis 5.0 内存版（集群架构）。</li><li>15：Redis 6.2 内存版（标准架构）。</li><li>16：Redis 6.2 内存版（集群架构）。</li><li>17：Redis 7.0 内存版（标准架构）。</li><li>18：Redis 7.0 内存版（集群架构）。</li><li>200：Memcached 1.6 内存版（集群架构）。<br><strong>说明</strong>：CKV 版本当前有存量用户使用，暂时保留。</li></ul>
 * @method integer getMemSize() 获取<p>内存容量，单位为MB， 数值需为1024的整数倍。具体规格，请通过 <a href="https://cloud.tencent.com/document/api/239/30600">DescribeProductInfo</a> 接口查询全地域的售卖规格。</p><ul><li><strong>TypeId</strong>为标准架构时，<strong>MemSize</strong>是实例总内存容量；</li><li><strong>TypeId</strong>为集群架构时，<strong>MemSize</strong>是单分片内存容量。</li></ul>
 * @method void setMemSize(integer $MemSize) 设置<p>内存容量，单位为MB， 数值需为1024的整数倍。具体规格，请通过 <a href="https://cloud.tencent.com/document/api/239/30600">DescribeProductInfo</a> 接口查询全地域的售卖规格。</p><ul><li><strong>TypeId</strong>为标准架构时，<strong>MemSize</strong>是实例总内存容量；</li><li><strong>TypeId</strong>为集群架构时，<strong>MemSize</strong>是单分片内存容量。</li></ul>
 * @method integer getGoodsNum() 获取<p>实例数量，单次购买实例数量。具体信息，请通过 <a href="https://cloud.tencent.com/document/api/239/30600">DescribeProductInfo</a> 接口查询全地域的售卖规格。</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>实例数量，单次购买实例数量。具体信息，请通过 <a href="https://cloud.tencent.com/document/api/239/30600">DescribeProductInfo</a> 接口查询全地域的售卖规格。</p>
 * @method integer getPeriod() 获取<p>购买实例的时长。</p><ul><li>若 <strong>BillingMode</strong>为<strong>1</strong>，即计费方式为包年包月时，需设置该参数，指定所购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</li><li>若 <strong>BillingMode</strong>为<strong>0</strong>，即计费方式为按量计费时，该参数配置为1。</li></ul>
 * @method void setPeriod(integer $Period) 设置<p>购买实例的时长。</p><ul><li>若 <strong>BillingMode</strong>为<strong>1</strong>，即计费方式为包年包月时，需设置该参数，指定所购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</li><li>若 <strong>BillingMode</strong>为<strong>0</strong>，即计费方式为按量计费时，该参数配置为1。</li></ul>
 * @method integer getBillingMode() 获取<p>计费方式。</p><ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
 * @method void setBillingMode(integer $BillingMode) 设置<p>计费方式。</p><ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
 * @method integer getZoneId() 获取<p>实例所属的可用区ID，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>实例所属的可用区ID，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。</p>
 * @method string getPassword() 获取<p>访问实例的密码。</p><ul><li>当输入参数<strong>NoAuth</strong>为<strong>true</strong>时，指设置实例为免密码访问，Password可不用配置，否则Password为必填参数。</li><li>当实例类型<strong>TypeId</strong>为Redis 2.8 内存版标准架构、Redis 4.0、5.0、6.2、7.0内存版标准架构或集群架构时，其密码复杂度要求为：8-64个字符，至少包含小写字母、大写字母、数字和字符()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种，不能以&quot;/&quot;开头。</li><li>当实例类型<strong>TypeId</strong>为CKV 3.2 内存版标准架构或集群架构时，其密码复杂度为：8-30个字符，必须包含字母和数字，且不包含其他字符。</li></ul>
 * @method void setPassword(string $Password) 设置<p>访问实例的密码。</p><ul><li>当输入参数<strong>NoAuth</strong>为<strong>true</strong>时，指设置实例为免密码访问，Password可不用配置，否则Password为必填参数。</li><li>当实例类型<strong>TypeId</strong>为Redis 2.8 内存版标准架构、Redis 4.0、5.0、6.2、7.0内存版标准架构或集群架构时，其密码复杂度要求为：8-64个字符，至少包含小写字母、大写字母、数字和字符()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种，不能以&quot;/&quot;开头。</li><li>当实例类型<strong>TypeId</strong>为CKV 3.2 内存版标准架构或集群架构时，其密码复杂度为：8-30个字符，必须包含字母和数字，且不包含其他字符。</li></ul>
 * @method string getVpcId() 获取<p>私有网络ID。如果不配置该参数则默认选择基础网络。请登录 <a href="https://console.cloud.tencent.com/vpc">私有网络</a>控制台查询具体的ID。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID。如果不配置该参数则默认选择基础网络。请登录 <a href="https://console.cloud.tencent.com/vpc">私有网络</a>控制台查询具体的ID。</p>
 * @method string getSubnetId() 获取<p>私有网络VPC的子网。基础网络下， 该参数无需配置。请登录 <a href="https://console.cloud.tencent.com/vpc">私有网络</a>控制台查询子网列表获取具体的 ID。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>私有网络VPC的子网。基础网络下， 该参数无需配置。请登录 <a href="https://console.cloud.tencent.com/vpc">私有网络</a>控制台查询子网列表获取具体的 ID。</p>
 * @method integer getProjectId() 获取<p>项目 ID。请登录<a href="https://console.cloud.tencent.com/redis#/">Redis控制台</a>，在右上角的账户信息菜单中，选择<strong>项目管理</strong>查询项目 ID。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 ID。请登录<a href="https://console.cloud.tencent.com/redis#/">Redis控制台</a>，在右上角的账户信息菜单中，选择<strong>项目管理</strong>查询项目 ID。</p>
 * @method integer getAutoRenew() 获取<p>自动续费标识。</p><ul><li>0：默认状态（手动续费）。</li><li>1：自动续费。</li><li>2：到期不续费。</li></ul>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>自动续费标识。</p><ul><li>0：默认状态（手动续费）。</li><li>1：自动续费。</li><li>2：到期不续费。</li></ul>
 * @method array getSecurityGroupIdList() 获取<p>安全组 ID 数组。</p><ul><li>安全组是一种虚拟防火墙，对云数据库实例的网络访问进行控制。创建实例时，建议绑定相应的安全组。</li><li>请通过 <a href="https://cloud.tencent.com/document/product/239/34447">DescribeInstanceSecurityGroup</a> 接口获取实例的安全组 ID。</li></ul>
 * @method void setSecurityGroupIdList(array $SecurityGroupIdList) 设置<p>安全组 ID 数组。</p><ul><li>安全组是一种虚拟防火墙，对云数据库实例的网络访问进行控制。创建实例时，建议绑定相应的安全组。</li><li>请通过 <a href="https://cloud.tencent.com/document/product/239/34447">DescribeInstanceSecurityGroup</a> 接口获取实例的安全组 ID。</li></ul>
 * @method integer getVPort() 获取<p>用户自定义的网络端口。默认为6379，范围为 [1024,65535]。</p>
 * @method void setVPort(integer $VPort) 设置<p>用户自定义的网络端口。默认为6379，范围为 [1024,65535]。</p>
 * @method integer getRedisShardNum() 获取<p>实例分片数量。</p><ul><li>标准版实例无需配置该参数。</li><li>集群版实例，分片数量范围为：[1、3、5、8、12、16、24、32、40、48、64、80、96、128]。</li></ul>
 * @method void setRedisShardNum(integer $RedisShardNum) 设置<p>实例分片数量。</p><ul><li>标准版实例无需配置该参数。</li><li>集群版实例，分片数量范围为：[1、3、5、8、12、16、24、32、40、48、64、80、96、128]。</li></ul>
 * @method integer getRedisReplicasNum() 获取<p>实例副本数量。</p><ul><li>Redis 内存版 4.0、5.0、6.2、7.0 标准架构和集群架构支持副本数量范围为[1,5]。</li><li>Redis 2.8标准版、CKV标准版只支持1副本。</li></ul>
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) 设置<p>实例副本数量。</p><ul><li>Redis 内存版 4.0、5.0、6.2、7.0 标准架构和集群架构支持副本数量范围为[1,5]。</li><li>Redis 2.8标准版、CKV标准版只支持1副本。</li></ul>
 * @method boolean getReplicasReadonly() 获取<p>标识实例是否需支持副本只读。</p><ul><li>Redis 2.8 标准版、CKV标准版不支持副本只读。</li><li>开启副本只读，实例将自动读写分离，写请求路由到主节点，读请求路由到副本节点。</li><li>如需开启副本只读，建议副本数量大于等于2。</li></ul>
 * @method void setReplicasReadonly(boolean $ReplicasReadonly) 设置<p>标识实例是否需支持副本只读。</p><ul><li>Redis 2.8 标准版、CKV标准版不支持副本只读。</li><li>开启副本只读，实例将自动读写分离，写请求路由到主节点，读请求路由到副本节点。</li><li>如需开启副本只读，建议副本数量大于等于2。</li></ul>
 * @method string getInstanceName() 获取<p>实例名称。命名要求：仅支持长度小于60的中文、英文或者数字，短划线&quot;-&quot;、下划线&quot;_&quot;。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。命名要求：仅支持长度小于60的中文、英文或者数字，短划线&quot;-&quot;、下划线&quot;_&quot;。</p>
 * @method boolean getNoAuth() 获取<p>配置实例是否支持免密码访问。</p><ul><li>true：免密访问实例。</li><li>false：非免密访问实例。默认为非免密方式，仅VPC网络的实例支持免密码访问。</li></ul>
 * @method void setNoAuth(boolean $NoAuth) 设置<p>配置实例是否支持免密码访问。</p><ul><li>true：免密访问实例。</li><li>false：非免密访问实例。默认为非免密方式，仅VPC网络的实例支持免密码访问。</li></ul>
 * @method array getNodeSet() 获取<p>实例的节点信息，包含节点 ID、节点类型、节点可用区 ID等。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/20022">RedisNodeInfo </a>。<br>目前支持传入节点的类型（主节点或者副本节点），节点的可用区。未指定该参数时，在支持多可用区部署的地域，系统将默认创建多可用区架构实例。</p>
 * @method void setNodeSet(array $NodeSet) 设置<p>实例的节点信息，包含节点 ID、节点类型、节点可用区 ID等。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/20022">RedisNodeInfo </a>。<br>目前支持传入节点的类型（主节点或者副本节点），节点的可用区。未指定该参数时，在支持多可用区部署的地域，系统将默认创建多可用区架构实例。</p>
 * @method array getResourceTags() 获取<p>给实例设定标签。</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>给实例设定标签。</p>
 * @method string getZoneName() 获取<p>指定实例所属的可用区名称。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。</p>
 * @method void setZoneName(string $ZoneName) 设置<p>指定实例所属的可用区名称。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。</p>
 * @method string getTemplateId() 获取<p>指定实例相关的参数模板 ID。</p><ul><li>若不配置该参数，则系统会依据所选择的兼容版本及架构，自动适配对应的默认模板。</li><li>请通过<a href="https://cloud.tencent.com/document/product/239/58750">DescribeParamTemplates</a>接口，查询实例的参数模板列表，获取模板 ID 编号。</li></ul>
 * @method void setTemplateId(string $TemplateId) 设置<p>指定实例相关的参数模板 ID。</p><ul><li>若不配置该参数，则系统会依据所选择的兼容版本及架构，自动适配对应的默认模板。</li><li>请通过<a href="https://cloud.tencent.com/document/product/239/58750">DescribeParamTemplates</a>接口，查询实例的参数模板列表，获取模板 ID 编号。</li></ul>
 * @method boolean getDryRun() 获取<p>内部参数，标识创建实例是否需要检查。</p><ul><li>false ：默认值。发送正常请求，通过检查后直接创建实例。</li><li>true：发送检查请求，不会创建实例。</li></ul>
 * @method void setDryRun(boolean $DryRun) 设置<p>内部参数，标识创建实例是否需要检查。</p><ul><li>false ：默认值。发送正常请求，通过检查后直接创建实例。</li><li>true：发送检查请求，不会创建实例。</li></ul>
 * @method string getProductVersion() 获取<p>指实例部署模式。</p><ul><li>local：传统架构，默认为 local。</li><li>cdc：独享集群。</li><li>cloud：云原生，当前已暂停售卖。</li></ul>
 * @method void setProductVersion(string $ProductVersion) 设置<p>指实例部署模式。</p><ul><li>local：传统架构，默认为 local。</li><li>cdc：独享集群。</li><li>cloud：云原生，当前已暂停售卖。</li></ul>
 * @method string getRedisClusterId() 获取<p>独享集群 ID。</p><ul><li>当 <strong>ProductVersion</strong> 设置为 <strong>cdc</strong> 时，该参数必须设置。</li><li>请通过接口<a href="https://cloud.tencent.com/document/product/239/109628"> DescribeRedisClusters</a> 获取集群 ID。</li></ul>
 * @method void setRedisClusterId(string $RedisClusterId) 设置<p>独享集群 ID。</p><ul><li>当 <strong>ProductVersion</strong> 设置为 <strong>cdc</strong> 时，该参数必须设置。</li><li>请通过接口<a href="https://cloud.tencent.com/document/product/239/109628"> DescribeRedisClusters</a> 获取集群 ID。</li></ul>
 * @method array getAlarmPolicyList() 获取<p>告警策略 ID 数组。</p><ul><li>请登录<a href="https://console.cloud.tencent.com/monitor/alarm/policy">腾讯云可观测平台-告警管理-策略管理</a>获取告警策略 ID。</li><li>若不配置该参数，则绑定默认告警策略。默认告警策略具体信息，请登录<a href="https://console.cloud.tencent.com/monitor/alarm/policy">腾讯云可观测平台-告警管理-策略管理</a>查看。</li></ul>
 * @method void setAlarmPolicyList(array $AlarmPolicyList) 设置<p>告警策略 ID 数组。</p><ul><li>请登录<a href="https://console.cloud.tencent.com/monitor/alarm/policy">腾讯云可观测平台-告警管理-策略管理</a>获取告警策略 ID。</li><li>若不配置该参数，则绑定默认告警策略。默认告警策略具体信息，请登录<a href="https://console.cloud.tencent.com/monitor/alarm/policy">腾讯云可观测平台-告警管理-策略管理</a>查看。</li></ul>
 * @method boolean getEncryptPassword() 获取<p>是否加密密码</p>
 * @method void setEncryptPassword(boolean $EncryptPassword) 设置<p>是否加密密码</p>
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var integer <p>实例类型。</p><ul><li>2：Redis 2.8 内存版（标准架构）。</li><li>3：CKV 3.2 内存版（标准架构）。</li><li>4：CKV 3.2 内存版（集群架构）。</li><li>6：Redis 4.0 内存版（标准架构）。</li><li>7：Redis 4.0 内存版（集群架构）。</li><li>8：Redis 5.0 内存版（标准架构）。</li><li>9：Redis 5.0 内存版（集群架构）。</li><li>15：Redis 6.2 内存版（标准架构）。</li><li>16：Redis 6.2 内存版（集群架构）。</li><li>17：Redis 7.0 内存版（标准架构）。</li><li>18：Redis 7.0 内存版（集群架构）。</li><li>200：Memcached 1.6 内存版（集群架构）。<br><strong>说明</strong>：CKV 版本当前有存量用户使用，暂时保留。</li></ul>
     */
    public $TypeId;

    /**
     * @var integer <p>内存容量，单位为MB， 数值需为1024的整数倍。具体规格，请通过 <a href="https://cloud.tencent.com/document/api/239/30600">DescribeProductInfo</a> 接口查询全地域的售卖规格。</p><ul><li><strong>TypeId</strong>为标准架构时，<strong>MemSize</strong>是实例总内存容量；</li><li><strong>TypeId</strong>为集群架构时，<strong>MemSize</strong>是单分片内存容量。</li></ul>
     */
    public $MemSize;

    /**
     * @var integer <p>实例数量，单次购买实例数量。具体信息，请通过 <a href="https://cloud.tencent.com/document/api/239/30600">DescribeProductInfo</a> 接口查询全地域的售卖规格。</p>
     */
    public $GoodsNum;

    /**
     * @var integer <p>购买实例的时长。</p><ul><li>若 <strong>BillingMode</strong>为<strong>1</strong>，即计费方式为包年包月时，需设置该参数，指定所购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</li><li>若 <strong>BillingMode</strong>为<strong>0</strong>，即计费方式为按量计费时，该参数配置为1。</li></ul>
     */
    public $Period;

    /**
     * @var integer <p>计费方式。</p><ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
     */
    public $BillingMode;

    /**
     * @var integer <p>实例所属的可用区ID，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>访问实例的密码。</p><ul><li>当输入参数<strong>NoAuth</strong>为<strong>true</strong>时，指设置实例为免密码访问，Password可不用配置，否则Password为必填参数。</li><li>当实例类型<strong>TypeId</strong>为Redis 2.8 内存版标准架构、Redis 4.0、5.0、6.2、7.0内存版标准架构或集群架构时，其密码复杂度要求为：8-64个字符，至少包含小写字母、大写字母、数字和字符()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种，不能以&quot;/&quot;开头。</li><li>当实例类型<strong>TypeId</strong>为CKV 3.2 内存版标准架构或集群架构时，其密码复杂度为：8-30个字符，必须包含字母和数字，且不包含其他字符。</li></ul>
     */
    public $Password;

    /**
     * @var string <p>私有网络ID。如果不配置该参数则默认选择基础网络。请登录 <a href="https://console.cloud.tencent.com/vpc">私有网络</a>控制台查询具体的ID。</p>
     */
    public $VpcId;

    /**
     * @var string <p>私有网络VPC的子网。基础网络下， 该参数无需配置。请登录 <a href="https://console.cloud.tencent.com/vpc">私有网络</a>控制台查询子网列表获取具体的 ID。</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>项目 ID。请登录<a href="https://console.cloud.tencent.com/redis#/">Redis控制台</a>，在右上角的账户信息菜单中，选择<strong>项目管理</strong>查询项目 ID。</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>自动续费标识。</p><ul><li>0：默认状态（手动续费）。</li><li>1：自动续费。</li><li>2：到期不续费。</li></ul>
     */
    public $AutoRenew;

    /**
     * @var array <p>安全组 ID 数组。</p><ul><li>安全组是一种虚拟防火墙，对云数据库实例的网络访问进行控制。创建实例时，建议绑定相应的安全组。</li><li>请通过 <a href="https://cloud.tencent.com/document/product/239/34447">DescribeInstanceSecurityGroup</a> 接口获取实例的安全组 ID。</li></ul>
     */
    public $SecurityGroupIdList;

    /**
     * @var integer <p>用户自定义的网络端口。默认为6379，范围为 [1024,65535]。</p>
     */
    public $VPort;

    /**
     * @var integer <p>实例分片数量。</p><ul><li>标准版实例无需配置该参数。</li><li>集群版实例，分片数量范围为：[1、3、5、8、12、16、24、32、40、48、64、80、96、128]。</li></ul>
     */
    public $RedisShardNum;

    /**
     * @var integer <p>实例副本数量。</p><ul><li>Redis 内存版 4.0、5.0、6.2、7.0 标准架构和集群架构支持副本数量范围为[1,5]。</li><li>Redis 2.8标准版、CKV标准版只支持1副本。</li></ul>
     */
    public $RedisReplicasNum;

    /**
     * @var boolean <p>标识实例是否需支持副本只读。</p><ul><li>Redis 2.8 标准版、CKV标准版不支持副本只读。</li><li>开启副本只读，实例将自动读写分离，写请求路由到主节点，读请求路由到副本节点。</li><li>如需开启副本只读，建议副本数量大于等于2。</li></ul>
     */
    public $ReplicasReadonly;

    /**
     * @var string <p>实例名称。命名要求：仅支持长度小于60的中文、英文或者数字，短划线&quot;-&quot;、下划线&quot;_&quot;。</p>
     */
    public $InstanceName;

    /**
     * @var boolean <p>配置实例是否支持免密码访问。</p><ul><li>true：免密访问实例。</li><li>false：非免密访问实例。默认为非免密方式，仅VPC网络的实例支持免密码访问。</li></ul>
     */
    public $NoAuth;

    /**
     * @var array <p>实例的节点信息，包含节点 ID、节点类型、节点可用区 ID等。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/20022">RedisNodeInfo </a>。<br>目前支持传入节点的类型（主节点或者副本节点），节点的可用区。未指定该参数时，在支持多可用区部署的地域，系统将默认创建多可用区架构实例。</p>
     */
    public $NodeSet;

    /**
     * @var array <p>给实例设定标签。</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>指定实例所属的可用区名称。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。</p>
     */
    public $ZoneName;

    /**
     * @var string <p>指定实例相关的参数模板 ID。</p><ul><li>若不配置该参数，则系统会依据所选择的兼容版本及架构，自动适配对应的默认模板。</li><li>请通过<a href="https://cloud.tencent.com/document/product/239/58750">DescribeParamTemplates</a>接口，查询实例的参数模板列表，获取模板 ID 编号。</li></ul>
     */
    public $TemplateId;

    /**
     * @var boolean <p>内部参数，标识创建实例是否需要检查。</p><ul><li>false ：默认值。发送正常请求，通过检查后直接创建实例。</li><li>true：发送检查请求，不会创建实例。</li></ul>
     */
    public $DryRun;

    /**
     * @var string <p>指实例部署模式。</p><ul><li>local：传统架构，默认为 local。</li><li>cdc：独享集群。</li><li>cloud：云原生，当前已暂停售卖。</li></ul>
     */
    public $ProductVersion;

    /**
     * @var string <p>独享集群 ID。</p><ul><li>当 <strong>ProductVersion</strong> 设置为 <strong>cdc</strong> 时，该参数必须设置。</li><li>请通过接口<a href="https://cloud.tencent.com/document/product/239/109628"> DescribeRedisClusters</a> 获取集群 ID。</li></ul>
     */
    public $RedisClusterId;

    /**
     * @var array <p>告警策略 ID 数组。</p><ul><li>请登录<a href="https://console.cloud.tencent.com/monitor/alarm/policy">腾讯云可观测平台-告警管理-策略管理</a>获取告警策略 ID。</li><li>若不配置该参数，则绑定默认告警策略。默认告警策略具体信息，请登录<a href="https://console.cloud.tencent.com/monitor/alarm/policy">腾讯云可观测平台-告警管理-策略管理</a>查看。</li></ul>
     */
    public $AlarmPolicyList;

    /**
     * @var boolean <p>是否加密密码</p>
     */
    public $EncryptPassword;

    /**
     * @param integer $TypeId <p>实例类型。</p><ul><li>2：Redis 2.8 内存版（标准架构）。</li><li>3：CKV 3.2 内存版（标准架构）。</li><li>4：CKV 3.2 内存版（集群架构）。</li><li>6：Redis 4.0 内存版（标准架构）。</li><li>7：Redis 4.0 内存版（集群架构）。</li><li>8：Redis 5.0 内存版（标准架构）。</li><li>9：Redis 5.0 内存版（集群架构）。</li><li>15：Redis 6.2 内存版（标准架构）。</li><li>16：Redis 6.2 内存版（集群架构）。</li><li>17：Redis 7.0 内存版（标准架构）。</li><li>18：Redis 7.0 内存版（集群架构）。</li><li>200：Memcached 1.6 内存版（集群架构）。<br><strong>说明</strong>：CKV 版本当前有存量用户使用，暂时保留。</li></ul>
     * @param integer $MemSize <p>内存容量，单位为MB， 数值需为1024的整数倍。具体规格，请通过 <a href="https://cloud.tencent.com/document/api/239/30600">DescribeProductInfo</a> 接口查询全地域的售卖规格。</p><ul><li><strong>TypeId</strong>为标准架构时，<strong>MemSize</strong>是实例总内存容量；</li><li><strong>TypeId</strong>为集群架构时，<strong>MemSize</strong>是单分片内存容量。</li></ul>
     * @param integer $GoodsNum <p>实例数量，单次购买实例数量。具体信息，请通过 <a href="https://cloud.tencent.com/document/api/239/30600">DescribeProductInfo</a> 接口查询全地域的售卖规格。</p>
     * @param integer $Period <p>购买实例的时长。</p><ul><li>若 <strong>BillingMode</strong>为<strong>1</strong>，即计费方式为包年包月时，需设置该参数，指定所购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</li><li>若 <strong>BillingMode</strong>为<strong>0</strong>，即计费方式为按量计费时，该参数配置为1。</li></ul>
     * @param integer $BillingMode <p>计费方式。</p><ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
     * @param integer $ZoneId <p>实例所属的可用区ID，可参考<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。</p>
     * @param string $Password <p>访问实例的密码。</p><ul><li>当输入参数<strong>NoAuth</strong>为<strong>true</strong>时，指设置实例为免密码访问，Password可不用配置，否则Password为必填参数。</li><li>当实例类型<strong>TypeId</strong>为Redis 2.8 内存版标准架构、Redis 4.0、5.0、6.2、7.0内存版标准架构或集群架构时，其密码复杂度要求为：8-64个字符，至少包含小写字母、大写字母、数字和字符()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种，不能以&quot;/&quot;开头。</li><li>当实例类型<strong>TypeId</strong>为CKV 3.2 内存版标准架构或集群架构时，其密码复杂度为：8-30个字符，必须包含字母和数字，且不包含其他字符。</li></ul>
     * @param string $VpcId <p>私有网络ID。如果不配置该参数则默认选择基础网络。请登录 <a href="https://console.cloud.tencent.com/vpc">私有网络</a>控制台查询具体的ID。</p>
     * @param string $SubnetId <p>私有网络VPC的子网。基础网络下， 该参数无需配置。请登录 <a href="https://console.cloud.tencent.com/vpc">私有网络</a>控制台查询子网列表获取具体的 ID。</p>
     * @param integer $ProjectId <p>项目 ID。请登录<a href="https://console.cloud.tencent.com/redis#/">Redis控制台</a>，在右上角的账户信息菜单中，选择<strong>项目管理</strong>查询项目 ID。</p>
     * @param integer $AutoRenew <p>自动续费标识。</p><ul><li>0：默认状态（手动续费）。</li><li>1：自动续费。</li><li>2：到期不续费。</li></ul>
     * @param array $SecurityGroupIdList <p>安全组 ID 数组。</p><ul><li>安全组是一种虚拟防火墙，对云数据库实例的网络访问进行控制。创建实例时，建议绑定相应的安全组。</li><li>请通过 <a href="https://cloud.tencent.com/document/product/239/34447">DescribeInstanceSecurityGroup</a> 接口获取实例的安全组 ID。</li></ul>
     * @param integer $VPort <p>用户自定义的网络端口。默认为6379，范围为 [1024,65535]。</p>
     * @param integer $RedisShardNum <p>实例分片数量。</p><ul><li>标准版实例无需配置该参数。</li><li>集群版实例，分片数量范围为：[1、3、5、8、12、16、24、32、40、48、64、80、96、128]。</li></ul>
     * @param integer $RedisReplicasNum <p>实例副本数量。</p><ul><li>Redis 内存版 4.0、5.0、6.2、7.0 标准架构和集群架构支持副本数量范围为[1,5]。</li><li>Redis 2.8标准版、CKV标准版只支持1副本。</li></ul>
     * @param boolean $ReplicasReadonly <p>标识实例是否需支持副本只读。</p><ul><li>Redis 2.8 标准版、CKV标准版不支持副本只读。</li><li>开启副本只读，实例将自动读写分离，写请求路由到主节点，读请求路由到副本节点。</li><li>如需开启副本只读，建议副本数量大于等于2。</li></ul>
     * @param string $InstanceName <p>实例名称。命名要求：仅支持长度小于60的中文、英文或者数字，短划线&quot;-&quot;、下划线&quot;_&quot;。</p>
     * @param boolean $NoAuth <p>配置实例是否支持免密码访问。</p><ul><li>true：免密访问实例。</li><li>false：非免密访问实例。默认为非免密方式，仅VPC网络的实例支持免密码访问。</li></ul>
     * @param array $NodeSet <p>实例的节点信息，包含节点 ID、节点类型、节点可用区 ID等。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/20022">RedisNodeInfo </a>。<br>目前支持传入节点的类型（主节点或者副本节点），节点的可用区。未指定该参数时，在支持多可用区部署的地域，系统将默认创建多可用区架构实例。</p>
     * @param array $ResourceTags <p>给实例设定标签。</p>
     * @param string $ZoneName <p>指定实例所属的可用区名称。具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>  。</p>
     * @param string $TemplateId <p>指定实例相关的参数模板 ID。</p><ul><li>若不配置该参数，则系统会依据所选择的兼容版本及架构，自动适配对应的默认模板。</li><li>请通过<a href="https://cloud.tencent.com/document/product/239/58750">DescribeParamTemplates</a>接口，查询实例的参数模板列表，获取模板 ID 编号。</li></ul>
     * @param boolean $DryRun <p>内部参数，标识创建实例是否需要检查。</p><ul><li>false ：默认值。发送正常请求，通过检查后直接创建实例。</li><li>true：发送检查请求，不会创建实例。</li></ul>
     * @param string $ProductVersion <p>指实例部署模式。</p><ul><li>local：传统架构，默认为 local。</li><li>cdc：独享集群。</li><li>cloud：云原生，当前已暂停售卖。</li></ul>
     * @param string $RedisClusterId <p>独享集群 ID。</p><ul><li>当 <strong>ProductVersion</strong> 设置为 <strong>cdc</strong> 时，该参数必须设置。</li><li>请通过接口<a href="https://cloud.tencent.com/document/product/239/109628"> DescribeRedisClusters</a> 获取集群 ID。</li></ul>
     * @param array $AlarmPolicyList <p>告警策略 ID 数组。</p><ul><li>请登录<a href="https://console.cloud.tencent.com/monitor/alarm/policy">腾讯云可观测平台-告警管理-策略管理</a>获取告警策略 ID。</li><li>若不配置该参数，则绑定默认告警策略。默认告警策略具体信息，请登录<a href="https://console.cloud.tencent.com/monitor/alarm/policy">腾讯云可观测平台-告警管理-策略管理</a>查看。</li></ul>
     * @param boolean $EncryptPassword <p>是否加密密码</p>
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
        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("SecurityGroupIdList",$param) and $param["SecurityGroupIdList"] !== null) {
            $this->SecurityGroupIdList = $param["SecurityGroupIdList"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("ReplicasReadonly",$param) and $param["ReplicasReadonly"] !== null) {
            $this->ReplicasReadonly = $param["ReplicasReadonly"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("RedisClusterId",$param) and $param["RedisClusterId"] !== null) {
            $this->RedisClusterId = $param["RedisClusterId"];
        }

        if (array_key_exists("AlarmPolicyList",$param) and $param["AlarmPolicyList"] !== null) {
            $this->AlarmPolicyList = $param["AlarmPolicyList"];
        }

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }
    }
}
