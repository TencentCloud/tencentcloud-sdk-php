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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances请求参数结构体
 *
 * @method integer getTypeId() 获取<p>产品版本。14：极速版。</p>
 * @method void setTypeId(integer $TypeId) 设置<p>产品版本。14：极速版。</p>
 * @method string getUniqVpcId() 获取<p>私有网络唯一ID。请登录控制台在私有网络列表查询，如：vpc-azlk3***。</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>私有网络唯一ID。请登录控制台在私有网络列表查询，如：vpc-azlk3***。</p>
 * @method string getUniqSubnetId() 获取<p>私有网络所属子网唯一ID。请登录控制台在私有网络列表查询，如：subnet-8abje***。</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置<p>私有网络所属子网唯一ID。请登录控制台在私有网络列表查询，如：subnet-8abje***。</p>
 * @method integer getBillingMode() 获取<p>计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
 * @method void setBillingMode(integer $BillingMode) 设置<p>计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
 * @method integer getGoodsNum() 获取<p>实例数量，单次最大购买数量以查询产品售卖规格返回的数量为准。</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>实例数量，单次最大购买数量以查询产品售卖规格返回的数量为准。</p>
 * @method integer getPeriod() 获取<p>选择包年包月计费模式（BillingMode 设置为1）时，您需要选择购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。按量计费（BillingMode 设置为0）实例该参数设置为1即可。</p>
 * @method void setPeriod(integer $Period) 设置<p>选择包年包月计费模式（BillingMode 设置为1）时，您需要选择购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。按量计费（BillingMode 设置为0）实例该参数设置为1即可。</p>
 * @method integer getShardNum() 获取<p>分片数量，支持选择3、5、6、8、9、10、12、15、16、18、20、21、24、25、27、30、32、33、35、36、39、40、42、45、48、50、51、54、55、56、57、60、63、64分片。</p>
 * @method void setShardNum(integer $ShardNum) 设置<p>分片数量，支持选择3、5、6、8、9、10、12、15、16、18、20、21、24、25、27、30、32、33、35、36、39、40、42、45、48、50、51、54、55、56、57、60、63、64分片。</p>
 * @method integer getReplicasNum() 获取<p>副本数。当前仅支持设置1个副本节点，即每一个分片仅包含1个主节点与1个副本节点，数据主从实时热备。</p>
 * @method void setReplicasNum(integer $ReplicasNum) 设置<p>副本数。当前仅支持设置1个副本节点，即每一个分片仅包含1个主节点与1个副本节点，数据主从实时热备。</p>
 * @method integer getMachineMemory() 获取<p>实例内存容量，单位：GB。KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
 * @method void setMachineMemory(integer $MachineMemory) 设置<p>实例内存容量，单位：GB。KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
 * @method integer getZoneId() 获取<p>实例所属的可用区ID。<ul><li>具体取值，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></ul></p>
 * @method void setZoneId(integer $ZoneId) 设置<p>实例所属的可用区ID。<ul><li>具体取值，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></ul></p>
 * @method string getZoneName() 获取<p>实例所属的可用区名称。<ul><li>具体取值，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></ul></p>
 * @method void setZoneName(string $ZoneName) 设置<p>实例所属的可用区名称。<ul><li>具体取值，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></ul></p>
 * @method string getInstanceName() 获取<p>创建实例的名称。仅支持长度小于60的中文、英文或者数字，短划线"-"、下划线"_"。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>创建实例的名称。仅支持长度小于60的中文、英文或者数字，短划线"-"、下划线"_"。</p>
 * @method boolean getNoAuth() 获取<p>指明创建的实例是否需要支持免密访问。<ul><li>true：免密实例。</li><li>false：非免密实例，默认为非免密实例。此时，需要设置访问密码。</li></ul></p>
 * @method void setNoAuth(boolean $NoAuth) 设置<p>指明创建的实例是否需要支持免密访问。<ul><li>true：免密实例。</li><li>false：非免密实例，默认为非免密实例。此时，需要设置访问密码。</li></ul></p>
 * @method string getPassword() 获取<p>实例访问密码。<ul><li>当参数<b>NoAuth</b>为<b>true</b>时，Password为无需设置，否则Password为必填参数。</li><li>密码复杂度要求：<ul><li>8-30个字符。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种。</li><li>不能以"/"开头。</li></ul></li></ul></p>
 * @method void setPassword(string $Password) 设置<p>实例访问密码。<ul><li>当参数<b>NoAuth</b>为<b>true</b>时，Password为无需设置，否则Password为必填参数。</li><li>密码复杂度要求：<ul><li>8-30个字符。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种。</li><li>不能以"/"开头。</li></ul></li></ul></p>
 * @method integer getVPort() 获取<p>自定义端口。默认为6379，范围[1024,65535]。</p>
 * @method void setVPort(integer $VPort) 设置<p>自定义端口。默认为6379，范围[1024,65535]。</p>
 * @method integer getAutoRenew() 获取<p>包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</li></ul></p>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</li></ul></p>
 * @method array getSecurityGroupIdList() 获取<p>给实例设置安全组 ID 数组。</p>
 * @method void setSecurityGroupIdList(array $SecurityGroupIdList) 设置<p>给实例设置安全组 ID 数组。</p>
 * @method array getResourceTags() 获取<p>给实例绑定标签。</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>给实例绑定标签。</p>
 * @method integer getMemSize() 获取<p>极速版，单分片持久化内存容量。KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>单位：GB。
 * @method void setMemSize(integer $MemSize) 设置<p>极速版，单分片持久化内存容量。KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>单位：GB。
 * @method integer getDiskSize() 获取<p>每个分片硬盘的容量。单位：GB。每一缓存分片容量，对应的磁盘容量范围不同。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>每个分片硬盘的容量。单位：GB。每一缓存分片容量，对应的磁盘容量范围不同。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
 * @method integer getMachineCpu() 获取<p>计算 CPU 核数，可忽略不传。CPU 核数与内存为固定搭配，具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
 * @method void setMachineCpu(integer $MachineCpu) 设置<p>计算 CPU 核数，可忽略不传。CPU 核数与内存为固定搭配，具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
 * @method integer getProjectId() 获取<p>项目id，取值以用户账户&gt;用户账户相关接口查询&gt;项目列表返回的projectId为准。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目id，取值以用户账户&gt;用户账户相关接口查询&gt;项目列表返回的projectId为准。</p>
 * @method string getCompression() 获取<p>数据压缩开关。<ul><li>ON：开启，默认开启压缩。</li><li>OFF：关闭。</li></ul></p>
 * @method void setCompression(string $Compression) 设置<p>数据压缩开关。<ul><li>ON：开启，默认开启压缩。</li><li>OFF：关闭。</li></ul></p>
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var integer <p>产品版本。14：极速版。</p>
     */
    public $TypeId;

    /**
     * @var string <p>私有网络唯一ID。请登录控制台在私有网络列表查询，如：vpc-azlk3***。</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>私有网络所属子网唯一ID。请登录控制台在私有网络列表查询，如：subnet-8abje***。</p>
     */
    public $UniqSubnetId;

    /**
     * @var integer <p>计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
     */
    public $BillingMode;

    /**
     * @var integer <p>实例数量，单次最大购买数量以查询产品售卖规格返回的数量为准。</p>
     */
    public $GoodsNum;

    /**
     * @var integer <p>选择包年包月计费模式（BillingMode 设置为1）时，您需要选择购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。按量计费（BillingMode 设置为0）实例该参数设置为1即可。</p>
     */
    public $Period;

    /**
     * @var integer <p>分片数量，支持选择3、5、6、8、9、10、12、15、16、18、20、21、24、25、27、30、32、33、35、36、39、40、42、45、48、50、51、54、55、56、57、60、63、64分片。</p>
     */
    public $ShardNum;

    /**
     * @var integer <p>副本数。当前仅支持设置1个副本节点，即每一个分片仅包含1个主节点与1个副本节点，数据主从实时热备。</p>
     */
    public $ReplicasNum;

    /**
     * @var integer <p>实例内存容量，单位：GB。KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
     */
    public $MachineMemory;

    /**
     * @var integer <p>实例所属的可用区ID。<ul><li>具体取值，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></ul></p>
     */
    public $ZoneId;

    /**
     * @var string <p>实例所属的可用区名称。<ul><li>具体取值，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></ul></p>
     */
    public $ZoneName;

    /**
     * @var string <p>创建实例的名称。仅支持长度小于60的中文、英文或者数字，短划线"-"、下划线"_"。</p>
     */
    public $InstanceName;

    /**
     * @var boolean <p>指明创建的实例是否需要支持免密访问。<ul><li>true：免密实例。</li><li>false：非免密实例，默认为非免密实例。此时，需要设置访问密码。</li></ul></p>
     */
    public $NoAuth;

    /**
     * @var string <p>实例访问密码。<ul><li>当参数<b>NoAuth</b>为<b>true</b>时，Password为无需设置，否则Password为必填参数。</li><li>密码复杂度要求：<ul><li>8-30个字符。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种。</li><li>不能以"/"开头。</li></ul></li></ul></p>
     */
    public $Password;

    /**
     * @var integer <p>自定义端口。默认为6379，范围[1024,65535]。</p>
     */
    public $VPort;

    /**
     * @var integer <p>包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</li></ul></p>
     */
    public $AutoRenew;

    /**
     * @var array <p>给实例设置安全组 ID 数组。</p>
     */
    public $SecurityGroupIdList;

    /**
     * @var array <p>给实例绑定标签。</p>
     */
    public $ResourceTags;

    /**
     * @var integer <p>极速版，单分片持久化内存容量。KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>单位：GB。
     */
    public $MemSize;

    /**
     * @var integer <p>每个分片硬盘的容量。单位：GB。每一缓存分片容量，对应的磁盘容量范围不同。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
     */
    public $DiskSize;

    /**
     * @var integer <p>计算 CPU 核数，可忽略不传。CPU 核数与内存为固定搭配，具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
     */
    public $MachineCpu;

    /**
     * @var integer <p>项目id，取值以用户账户&gt;用户账户相关接口查询&gt;项目列表返回的projectId为准。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>数据压缩开关。<ul><li>ON：开启，默认开启压缩。</li><li>OFF：关闭。</li></ul></p>
     */
    public $Compression;

    /**
     * @param integer $TypeId <p>产品版本。14：极速版。</p>
     * @param string $UniqVpcId <p>私有网络唯一ID。请登录控制台在私有网络列表查询，如：vpc-azlk3***。</p>
     * @param string $UniqSubnetId <p>私有网络所属子网唯一ID。请登录控制台在私有网络列表查询，如：subnet-8abje***。</p>
     * @param integer $BillingMode <p>计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
     * @param integer $GoodsNum <p>实例数量，单次最大购买数量以查询产品售卖规格返回的数量为准。</p>
     * @param integer $Period <p>选择包年包月计费模式（BillingMode 设置为1）时，您需要选择购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。按量计费（BillingMode 设置为0）实例该参数设置为1即可。</p>
     * @param integer $ShardNum <p>分片数量，支持选择3、5、6、8、9、10、12、15、16、18、20、21、24、25、27、30、32、33、35、36、39、40、42、45、48、50、51、54、55、56、57、60、63、64分片。</p>
     * @param integer $ReplicasNum <p>副本数。当前仅支持设置1个副本节点，即每一个分片仅包含1个主节点与1个副本节点，数据主从实时热备。</p>
     * @param integer $MachineMemory <p>实例内存容量，单位：GB。KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
     * @param integer $ZoneId <p>实例所属的可用区ID。<ul><li>具体取值，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></ul></p>
     * @param string $ZoneName <p>实例所属的可用区名称。<ul><li>具体取值，请参见<a href="https://cloud.tencent.com/document/product/239/4106">地域和可用区</a>获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></ul></p>
     * @param string $InstanceName <p>创建实例的名称。仅支持长度小于60的中文、英文或者数字，短划线"-"、下划线"_"。</p>
     * @param boolean $NoAuth <p>指明创建的实例是否需要支持免密访问。<ul><li>true：免密实例。</li><li>false：非免密实例，默认为非免密实例。此时，需要设置访问密码。</li></ul></p>
     * @param string $Password <p>实例访问密码。<ul><li>当参数<b>NoAuth</b>为<b>true</b>时，Password为无需设置，否则Password为必填参数。</li><li>密码复杂度要求：<ul><li>8-30个字符。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/ 中的2种。</li><li>不能以"/"开头。</li></ul></li></ul></p>
     * @param integer $VPort <p>自定义端口。默认为6379，范围[1024,65535]。</p>
     * @param integer $AutoRenew <p>包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</li></ul></p>
     * @param array $SecurityGroupIdList <p>给实例设置安全组 ID 数组。</p>
     * @param array $ResourceTags <p>给实例绑定标签。</p>
     * @param integer $MemSize <p>极速版，单分片持久化内存容量。KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>单位：GB。
     * @param integer $DiskSize <p>每个分片硬盘的容量。单位：GB。每一缓存分片容量，对应的磁盘容量范围不同。具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
     * @param integer $MachineCpu <p>计算 CPU 核数，可忽略不传。CPU 核数与内存为固定搭配，具体信息，请参见<a href="https://cloud.tencent.com/document/product/1520/80808">产品规格</a>。</p>
     * @param integer $ProjectId <p>项目id，取值以用户账户&gt;用户账户相关接口查询&gt;项目列表返回的projectId为准。</p>
     * @param string $Compression <p>数据压缩开关。<ul><li>ON：开启，默认开启压缩。</li><li>OFF：关闭。</li></ul></p>
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

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("ReplicasNum",$param) and $param["ReplicasNum"] !== null) {
            $this->ReplicasNum = $param["ReplicasNum"];
        }

        if (array_key_exists("MachineMemory",$param) and $param["MachineMemory"] !== null) {
            $this->MachineMemory = $param["MachineMemory"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("SecurityGroupIdList",$param) and $param["SecurityGroupIdList"] !== null) {
            $this->SecurityGroupIdList = $param["SecurityGroupIdList"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("MachineCpu",$param) and $param["MachineCpu"] !== null) {
            $this->MachineCpu = $param["MachineCpu"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }
    }
}
