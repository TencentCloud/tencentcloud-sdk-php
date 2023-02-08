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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances请求参数结构体
 *
 * @method integer getTypeId() 获取产品版本。
14：当前仅支持混合存储版。
 * @method void setTypeId(integer $TypeId) 设置产品版本。
14：当前仅支持混合存储版。
 * @method string getUniqVpcId() 获取私有网络唯一ID。
请登录控制台在私有网络列表查询，如：vpc-azlk3***。
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络唯一ID。
请登录控制台在私有网络列表查询，如：vpc-azlk3***。
 * @method string getUniqSubnetId() 获取私有网络所属子网唯一ID。
请登录控制台在私有网络列表查询，如：subnet-8abje***。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有网络所属子网唯一ID。
请登录控制台在私有网络列表查询，如：subnet-8abje***。
 * @method integer getBillingMode() 获取计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
 * @method void setBillingMode(integer $BillingMode) 设置计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
 * @method integer getGoodsNum() 获取实例数量，单次最大购买数量以查询产品售卖规格返回的数量为准。
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，单次最大购买数量以查询产品售卖规格返回的数量为准。
 * @method integer getPeriod() 获取选择包年包月计费模式（BillingMode 设置为1）时，您需要选择购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。按量计费（BillingMode 设置为0）实例该参数设置为1即可。
 * @method void setPeriod(integer $Period) 设置选择包年包月计费模式（BillingMode 设置为1）时，您需要选择购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。按量计费（BillingMode 设置为0）实例该参数设置为1即可。
 * @method integer getShardNum() 获取分片数量，支持选择3、5、6、8、9、10、12、15、16、18、20、21、24、25、27、30、32、33、35、36、39、40、42、45、48、50、51、54、55、56、57、60、63、64分片。
 * @method void setShardNum(integer $ShardNum) 设置分片数量，支持选择3、5、6、8、9、10、12、15、16、18、20、21、24、25、27、30、32、33、35、36、39、40、42、45、48、50、51、54、55、56、57、60、63、64分片。
 * @method integer getReplicasNum() 获取副本数。当前仅支持设置1个副本节点，即每一个分片仅包含1个主节点与1个副本节点，数据主从实时热备。
 * @method void setReplicasNum(integer $ReplicasNum) 设置副本数。当前仅支持设置1个副本节点，即每一个分片仅包含1个主节点与1个副本节点，数据主从实时热备。
 * @method integer getMachineCpu() 获取计算cpu核心数。
 * @method void setMachineCpu(integer $MachineCpu) 设置计算cpu核心数。
 * @method integer getMachineMemory() 获取实例内存容量，单位：GB。
KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
 * @method void setMachineMemory(integer $MachineMemory) 设置实例内存容量，单位：GB。
KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
 * @method integer getZoneId() 获取实例所属的可用区ID。<ul><li>具体取值，请参见[地域和可用区](https://cloud.tencent.com/document/product/239/4106)获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></u>
 * @method void setZoneId(integer $ZoneId) 设置实例所属的可用区ID。<ul><li>具体取值，请参见[地域和可用区](https://cloud.tencent.com/document/product/239/4106)获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></u>
 * @method string getZoneName() 获取实例所属的可用区名称。<ul><li>具体取值，请参见[地域和可用区](https://cloud.tencent.com/document/product/239/4106)获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></u>
 * @method void setZoneName(string $ZoneName) 设置实例所属的可用区名称。<ul><li>具体取值，请参见[地域和可用区](https://cloud.tencent.com/document/product/239/4106)获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></u>
 * @method string getInstanceName() 获取创建实例的名称。
仅支持长度小于60的中文、英文或者数字，短划线"-"、下划线"_"。
 * @method void setInstanceName(string $InstanceName) 设置创建实例的名称。
仅支持长度小于60的中文、英文或者数字，短划线"-"、下划线"_"。
 * @method boolean getNoAuth() 获取指明创建的实例是否需要支持免密访问。<ul><li>true：免密实例。</li><li>false：非免密实例，默认为非免密实例。此时，需要设置访问密码。</li></ul>
 * @method void setNoAuth(boolean $NoAuth) 设置指明创建的实例是否需要支持免密访问。<ul><li>true：免密实例。</li><li>false：非免密实例，默认为非免密实例。此时，需要设置访问密码。</li></ul>
 * @method string getPassword() 获取实例访问密码。<ul><li>当参数<b>NoAuth</b>为<b>true</b>时，Password为无需设置，否则Password为必填参数。</li>
<li>密码复杂度要求：<ul><li>8-30个字符。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&*-+=_|{}[]:;<>,.?/ 中的2种。</li><li>不能以"/"开头。</li></ul></li></ul>
 * @method void setPassword(string $Password) 设置实例访问密码。<ul><li>当参数<b>NoAuth</b>为<b>true</b>时，Password为无需设置，否则Password为必填参数。</li>
<li>密码复杂度要求：<ul><li>8-30个字符。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&*-+=_|{}[]:;<>,.?/ 中的2种。</li><li>不能以"/"开头。</li></ul></li></ul>
 * @method integer getVPort() 获取自定义端口。默认为6379，范围[1024,65535]。
 * @method void setVPort(integer $VPort) 设置自定义端口。默认为6379，范围[1024,65535]。
 * @method integer getAutoRenew() 获取包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</ul>
 * @method void setAutoRenew(integer $AutoRenew) 设置包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</ul>
 * @method array getSecurityGroupIdList() 获取给实例设置安全组 ID 数组。
 * @method void setSecurityGroupIdList(array $SecurityGroupIdList) 设置给实例设置安全组 ID 数组。
 * @method array getResourceTags() 获取给实例绑定标签。
 * @method void setResourceTags(array $ResourceTags) 设置给实例绑定标签。
 * @method integer getMemSize() 获取混合存储版，单分片持久化内存容量，单位：GB。
KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
 * @method void setMemSize(integer $MemSize) 设置混合存储版，单分片持久化内存容量，单位：GB。
KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
 * @method integer getDiskSize() 获取每个分片硬盘的容量。单位：GB。
每一缓存分片容量，对应的磁盘容量范围不同。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
 * @method void setDiskSize(integer $DiskSize) 设置每个分片硬盘的容量。单位：GB。
每一缓存分片容量，对应的磁盘容量范围不同。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
 * @method integer getProjectId() 获取项目id，取值以用户账户>用户账户相关接口查询>项目列表返回的projectId为准。
 * @method void setProjectId(integer $ProjectId) 设置项目id，取值以用户账户>用户账户相关接口查询>项目列表返回的projectId为准。
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var integer 产品版本。
14：当前仅支持混合存储版。
     */
    public $TypeId;

    /**
     * @var string 私有网络唯一ID。
请登录控制台在私有网络列表查询，如：vpc-azlk3***。
     */
    public $UniqVpcId;

    /**
     * @var string 私有网络所属子网唯一ID。
请登录控制台在私有网络列表查询，如：subnet-8abje***。
     */
    public $UniqSubnetId;

    /**
     * @var integer 计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
     */
    public $BillingMode;

    /**
     * @var integer 实例数量，单次最大购买数量以查询产品售卖规格返回的数量为准。
     */
    public $GoodsNum;

    /**
     * @var integer 选择包年包月计费模式（BillingMode 设置为1）时，您需要选择购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。按量计费（BillingMode 设置为0）实例该参数设置为1即可。
     */
    public $Period;

    /**
     * @var integer 分片数量，支持选择3、5、6、8、9、10、12、15、16、18、20、21、24、25、27、30、32、33、35、36、39、40、42、45、48、50、51、54、55、56、57、60、63、64分片。
     */
    public $ShardNum;

    /**
     * @var integer 副本数。当前仅支持设置1个副本节点，即每一个分片仅包含1个主节点与1个副本节点，数据主从实时热备。
     */
    public $ReplicasNum;

    /**
     * @var integer 计算cpu核心数。
     */
    public $MachineCpu;

    /**
     * @var integer 实例内存容量，单位：GB。
KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
     */
    public $MachineMemory;

    /**
     * @var integer 实例所属的可用区ID。<ul><li>具体取值，请参见[地域和可用区](https://cloud.tencent.com/document/product/239/4106)获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></u>
     */
    public $ZoneId;

    /**
     * @var string 实例所属的可用区名称。<ul><li>具体取值，请参见[地域和可用区](https://cloud.tencent.com/document/product/239/4106)获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></u>
     */
    public $ZoneName;

    /**
     * @var string 创建实例的名称。
仅支持长度小于60的中文、英文或者数字，短划线"-"、下划线"_"。
     */
    public $InstanceName;

    /**
     * @var boolean 指明创建的实例是否需要支持免密访问。<ul><li>true：免密实例。</li><li>false：非免密实例，默认为非免密实例。此时，需要设置访问密码。</li></ul>
     */
    public $NoAuth;

    /**
     * @var string 实例访问密码。<ul><li>当参数<b>NoAuth</b>为<b>true</b>时，Password为无需设置，否则Password为必填参数。</li>
<li>密码复杂度要求：<ul><li>8-30个字符。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&*-+=_|{}[]:;<>,.?/ 中的2种。</li><li>不能以"/"开头。</li></ul></li></ul>
     */
    public $Password;

    /**
     * @var integer 自定义端口。默认为6379，范围[1024,65535]。
     */
    public $VPort;

    /**
     * @var integer 包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</ul>
     */
    public $AutoRenew;

    /**
     * @var array 给实例设置安全组 ID 数组。
     */
    public $SecurityGroupIdList;

    /**
     * @var array 给实例绑定标签。
     */
    public $ResourceTags;

    /**
     * @var integer 混合存储版，单分片持久化内存容量，单位：GB。
KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
     */
    public $MemSize;

    /**
     * @var integer 每个分片硬盘的容量。单位：GB。
每一缓存分片容量，对应的磁盘容量范围不同。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
     */
    public $DiskSize;

    /**
     * @var integer 项目id，取值以用户账户>用户账户相关接口查询>项目列表返回的projectId为准。
     */
    public $ProjectId;

    /**
     * @param integer $TypeId 产品版本。
14：当前仅支持混合存储版。
     * @param string $UniqVpcId 私有网络唯一ID。
请登录控制台在私有网络列表查询，如：vpc-azlk3***。
     * @param string $UniqSubnetId 私有网络所属子网唯一ID。
请登录控制台在私有网络列表查询，如：subnet-8abje***。
     * @param integer $BillingMode 计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
     * @param integer $GoodsNum 实例数量，单次最大购买数量以查询产品售卖规格返回的数量为准。
     * @param integer $Period 选择包年包月计费模式（BillingMode 设置为1）时，您需要选择购买实例的时长。单位：月，取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。按量计费（BillingMode 设置为0）实例该参数设置为1即可。
     * @param integer $ShardNum 分片数量，支持选择3、5、6、8、9、10、12、15、16、18、20、21、24、25、27、30、32、33、35、36、39、40、42、45、48、50、51、54、55、56、57、60、63、64分片。
     * @param integer $ReplicasNum 副本数。当前仅支持设置1个副本节点，即每一个分片仅包含1个主节点与1个副本节点，数据主从实时热备。
     * @param integer $MachineCpu 计算cpu核心数。
     * @param integer $MachineMemory 实例内存容量，单位：GB。
KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
     * @param integer $ZoneId 实例所属的可用区ID。<ul><li>具体取值，请参见[地域和可用区](https://cloud.tencent.com/document/product/239/4106)获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></u>
     * @param string $ZoneName 实例所属的可用区名称。<ul><li>具体取值，请参见[地域和可用区](https://cloud.tencent.com/document/product/239/4106)获取。</li><li>参数<b>ZoneId</b>和<b>ZoneName</b>至少配置其中一个。</li></u>
     * @param string $InstanceName 创建实例的名称。
仅支持长度小于60的中文、英文或者数字，短划线"-"、下划线"_"。
     * @param boolean $NoAuth 指明创建的实例是否需要支持免密访问。<ul><li>true：免密实例。</li><li>false：非免密实例，默认为非免密实例。此时，需要设置访问密码。</li></ul>
     * @param string $Password 实例访问密码。<ul><li>当参数<b>NoAuth</b>为<b>true</b>时，Password为无需设置，否则Password为必填参数。</li>
<li>密码复杂度要求：<ul><li>8-30个字符。</li><li>至少包含小写字母、大写字母、数字和字符 ()`~!@#$%^&*-+=_|{}[]:;<>,.?/ 中的2种。</li><li>不能以"/"开头。</li></ul></li></ul>
     * @param integer $VPort 自定义端口。默认为6379，范围[1024,65535]。
     * @param integer $AutoRenew 包年包月计费的续费模式。<ul><li>0：默认状态，指手动续费。</li><li>1：自动续费。</li><li>2：到期不再续费。</ul>
     * @param array $SecurityGroupIdList 给实例设置安全组 ID 数组。
     * @param array $ResourceTags 给实例绑定标签。
     * @param integer $MemSize 混合存储版，单分片持久化内存容量，单位：GB。
KeeWiDB 内存容量<b>MachineMemory</b>与持久内存容量<b>MemSize</b>为固定搭配，即2GB内存，固定分配8GB的持久内存，不可选择。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
     * @param integer $DiskSize 每个分片硬盘的容量。单位：GB。
每一缓存分片容量，对应的磁盘容量范围不同。具体信息，请参见[产品规格](https://cloud.tencent.com/document/product/1520/80808)。
     * @param integer $ProjectId 项目id，取值以用户账户>用户账户相关接口查询>项目列表返回的projectId为准。
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

        if (array_key_exists("MachineCpu",$param) and $param["MachineCpu"] !== null) {
            $this->MachineCpu = $param["MachineCpu"];
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
