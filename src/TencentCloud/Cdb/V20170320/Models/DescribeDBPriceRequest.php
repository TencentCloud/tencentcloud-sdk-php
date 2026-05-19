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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBPrice请求参数结构体
 *
 * @method integer getPeriod() 获取<p>实例时长，单位：月，最小值 1，最大值为 36；查询按量计费价格时，该字段无效。</p>
 * @method void setPeriod(integer $Period) 设置<p>实例时长，单位：月，最小值 1，最大值为 36；查询按量计费价格时，该字段无效。</p>
 * @method string getZone() 获取<p>可用区信息，格式如 &quot;ap-guangzhou-2&quot;。具体能设置的值请通过 <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> 接口查询。InstanceId为空时该参数为必填项。</p>
 * @method void setZone(string $Zone) 设置<p>可用区信息，格式如 &quot;ap-guangzhou-2&quot;。具体能设置的值请通过 <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> 接口查询。InstanceId为空时该参数为必填项。</p>
 * @method integer getGoodsNum() 获取<p>实例数量，默认值为 1，最小值 1，最大值为 100。InstanceId为空时该参数为必填项。</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>实例数量，默认值为 1，最小值 1，最大值为 100。InstanceId为空时该参数为必填项。</p>
 * @method integer getMemory() 获取<p>实例内存大小，单位：MB。InstanceId 为空时该参数为必填项。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的实例内存大小范围。</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存大小，单位：MB。InstanceId 为空时该参数为必填项。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的实例内存大小范围。</p>
 * @method integer getVolume() 获取<p>实例硬盘大小，单位：GB。InstanceId 为空时该参数为必填项。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的硬盘大小范围。</p>
 * @method void setVolume(integer $Volume) 设置<p>实例硬盘大小，单位：GB。InstanceId 为空时该参数为必填项。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的硬盘大小范围。</p>
 * @method string getInstanceRole() 获取<p>实例类型，默认为 master，支持值包括：master - 表示主实例，ro - 表示只读实例，dr - 表示灾备实例。InstanceId为空时该参数为必填项。</p>
 * @method void setInstanceRole(string $InstanceRole) 设置<p>实例类型，默认为 master，支持值包括：master - 表示主实例，ro - 表示只读实例，dr - 表示灾备实例。InstanceId为空时该参数为必填项。</p>
 * @method string getPayType() 获取<p>付费类型，支持值包括：PRE_PAID - 包年包月，HOUR_PAID - 按量计费。InstanceId为空时该参数为必填项。</p>
 * @method void setPayType(string $PayType) 设置<p>付费类型，支持值包括：PRE_PAID - 包年包月，HOUR_PAID - 按量计费。InstanceId为空时该参数为必填项。</p>
 * @method integer getProtectMode() 获取<p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
 * @method void setProtectMode(integer $ProtectMode) 设置<p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
 * @method string getDeviceType() 获取<p>实例隔离类型。</p><p>枚举值：</p><ul><li>UNIVERSAL： 通用型实例</li><li>EXCLUSIVE： 独享型实例</li><li>CLOUD_NATIVE_CLUSTER： 云盘版标准型</li><li>CLOUD_NATIVE_CLUSTER_EXCLUSIVE： 云盘版加强型</li><li>CLOUD_NATIVE_CLUSTER_ULTRA： 云盘版旗舰型</li></ul><p>默认值：UNIVERSAL</p><p>如需查询单节点云盘版实例的价格，请设置此参数为 CLOUD_NATIVE_CLUSTER，并且指定参数 InstanceNodes 为1。</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>实例隔离类型。</p><p>枚举值：</p><ul><li>UNIVERSAL： 通用型实例</li><li>EXCLUSIVE： 独享型实例</li><li>CLOUD_NATIVE_CLUSTER： 云盘版标准型</li><li>CLOUD_NATIVE_CLUSTER_EXCLUSIVE： 云盘版加强型</li><li>CLOUD_NATIVE_CLUSTER_ULTRA： 云盘版旗舰型</li></ul><p>默认值：UNIVERSAL</p><p>如需查询单节点云盘版实例的价格，请设置此参数为 CLOUD_NATIVE_CLUSTER，并且指定参数 InstanceNodes 为1。</p>
 * @method integer getInstanceNodes() 获取<p>实例节点数。<br>1.查询 RO 实例或者单节点实例价格时，此字段值为1。<br>2.查询双节点实例价格时，此字段值为2。<br>3.查询三节点实例价格时，此字段值为3。<br>4.查询云盘版实例价格时，此字段值范围可输入2 - 6，取值为2表示云盘版实例下对应有1个读写节点 + 1个只读节点；取值为6表示云盘版实例下对应有1个读写节点 + 5个只读节点；其余取值（3 - 5）按1个读写节点 +（取值数 - 1）个只读节点规则类推。</p>
 * @method void setInstanceNodes(integer $InstanceNodes) 设置<p>实例节点数。<br>1.查询 RO 实例或者单节点实例价格时，此字段值为1。<br>2.查询双节点实例价格时，此字段值为2。<br>3.查询三节点实例价格时，此字段值为3。<br>4.查询云盘版实例价格时，此字段值范围可输入2 - 6，取值为2表示云盘版实例下对应有1个读写节点 + 1个只读节点；取值为6表示云盘版实例下对应有1个读写节点 + 5个只读节点；其余取值（3 - 5）按1个读写节点 +（取值数 - 1）个只读节点规则类推。</p>
 * @method integer getCpu() 获取<p>询价实例的CPU核心数目，单位：核，为保证传入 CPU 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的核心数目，当未指定该值时，将按照 Memory 大小补全一个默认值。</p>
 * @method void setCpu(integer $Cpu) 设置<p>询价实例的CPU核心数目，单位：核，为保证传入 CPU 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的核心数目，当未指定该值时，将按照 Memory 大小补全一个默认值。</p>
 * @method string getInstanceId() 获取<p>询价续费实例ID。如需查询实例续费价格，填写InstanceId和Period即可。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>询价续费实例ID。如需查询实例续费价格，填写InstanceId和Period即可。</p>
 * @method integer getLadder() 获取<p>按量计费阶梯。仅PayType=HOUR_PAID有效，支持值包括：1，2，3。阶梯时长见https://cloud.tencent.com/document/product/236/18335。</p>
 * @method void setLadder(integer $Ladder) 设置<p>按量计费阶梯。仅PayType=HOUR_PAID有效，支持值包括：1，2，3。阶梯时长见https://cloud.tencent.com/document/product/236/18335。</p>
 * @method string getDiskType() 获取<p>磁盘类型，查询云盘版、单节点云盘版实例价格可以指定该参数。默认值为 SSD 云硬盘。<br>支持值包括：<br>&quot;CLOUD_SSD&quot; - SSD 云硬盘。<br>&quot;CLOUD_HSSD&quot; - 增强型 SSD 云硬盘。<br>&quot;CLOUD_PREMIUM&quot; - 高性能云硬盘。</p>
 * @method void setDiskType(string $DiskType) 设置<p>磁盘类型，查询云盘版、单节点云盘版实例价格可以指定该参数。默认值为 SSD 云硬盘。<br>支持值包括：<br>&quot;CLOUD_SSD&quot; - SSD 云硬盘。<br>&quot;CLOUD_HSSD&quot; - 增强型 SSD 云硬盘。<br>&quot;CLOUD_PREMIUM&quot; - 高性能云硬盘。</p>
 */
class DescribeDBPriceRequest extends AbstractModel
{
    /**
     * @var integer <p>实例时长，单位：月，最小值 1，最大值为 36；查询按量计费价格时，该字段无效。</p>
     */
    public $Period;

    /**
     * @var string <p>可用区信息，格式如 &quot;ap-guangzhou-2&quot;。具体能设置的值请通过 <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> 接口查询。InstanceId为空时该参数为必填项。</p>
     */
    public $Zone;

    /**
     * @var integer <p>实例数量，默认值为 1，最小值 1，最大值为 100。InstanceId为空时该参数为必填项。</p>
     */
    public $GoodsNum;

    /**
     * @var integer <p>实例内存大小，单位：MB。InstanceId 为空时该参数为必填项。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的实例内存大小范围。</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例硬盘大小，单位：GB。InstanceId 为空时该参数为必填项。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的硬盘大小范围。</p>
     */
    public $Volume;

    /**
     * @var string <p>实例类型，默认为 master，支持值包括：master - 表示主实例，ro - 表示只读实例，dr - 表示灾备实例。InstanceId为空时该参数为必填项。</p>
     */
    public $InstanceRole;

    /**
     * @var string <p>付费类型，支持值包括：PRE_PAID - 包年包月，HOUR_PAID - 按量计费。InstanceId为空时该参数为必填项。</p>
     */
    public $PayType;

    /**
     * @var integer <p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
     */
    public $ProtectMode;

    /**
     * @var string <p>实例隔离类型。</p><p>枚举值：</p><ul><li>UNIVERSAL： 通用型实例</li><li>EXCLUSIVE： 独享型实例</li><li>CLOUD_NATIVE_CLUSTER： 云盘版标准型</li><li>CLOUD_NATIVE_CLUSTER_EXCLUSIVE： 云盘版加强型</li><li>CLOUD_NATIVE_CLUSTER_ULTRA： 云盘版旗舰型</li></ul><p>默认值：UNIVERSAL</p><p>如需查询单节点云盘版实例的价格，请设置此参数为 CLOUD_NATIVE_CLUSTER，并且指定参数 InstanceNodes 为1。</p>
     */
    public $DeviceType;

    /**
     * @var integer <p>实例节点数。<br>1.查询 RO 实例或者单节点实例价格时，此字段值为1。<br>2.查询双节点实例价格时，此字段值为2。<br>3.查询三节点实例价格时，此字段值为3。<br>4.查询云盘版实例价格时，此字段值范围可输入2 - 6，取值为2表示云盘版实例下对应有1个读写节点 + 1个只读节点；取值为6表示云盘版实例下对应有1个读写节点 + 5个只读节点；其余取值（3 - 5）按1个读写节点 +（取值数 - 1）个只读节点规则类推。</p>
     */
    public $InstanceNodes;

    /**
     * @var integer <p>询价实例的CPU核心数目，单位：核，为保证传入 CPU 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的核心数目，当未指定该值时，将按照 Memory 大小补全一个默认值。</p>
     */
    public $Cpu;

    /**
     * @var string <p>询价续费实例ID。如需查询实例续费价格，填写InstanceId和Period即可。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>按量计费阶梯。仅PayType=HOUR_PAID有效，支持值包括：1，2，3。阶梯时长见https://cloud.tencent.com/document/product/236/18335。</p>
     */
    public $Ladder;

    /**
     * @var string <p>磁盘类型，查询云盘版、单节点云盘版实例价格可以指定该参数。默认值为 SSD 云硬盘。<br>支持值包括：<br>&quot;CLOUD_SSD&quot; - SSD 云硬盘。<br>&quot;CLOUD_HSSD&quot; - 增强型 SSD 云硬盘。<br>&quot;CLOUD_PREMIUM&quot; - 高性能云硬盘。</p>
     */
    public $DiskType;

    /**
     * @param integer $Period <p>实例时长，单位：月，最小值 1，最大值为 36；查询按量计费价格时，该字段无效。</p>
     * @param string $Zone <p>可用区信息，格式如 &quot;ap-guangzhou-2&quot;。具体能设置的值请通过 <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> 接口查询。InstanceId为空时该参数为必填项。</p>
     * @param integer $GoodsNum <p>实例数量，默认值为 1，最小值 1，最大值为 100。InstanceId为空时该参数为必填项。</p>
     * @param integer $Memory <p>实例内存大小，单位：MB。InstanceId 为空时该参数为必填项。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的实例内存大小范围。</p>
     * @param integer $Volume <p>实例硬盘大小，单位：GB。InstanceId 为空时该参数为必填项。为保证传入值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的硬盘大小范围。</p>
     * @param string $InstanceRole <p>实例类型，默认为 master，支持值包括：master - 表示主实例，ro - 表示只读实例，dr - 表示灾备实例。InstanceId为空时该参数为必填项。</p>
     * @param string $PayType <p>付费类型，支持值包括：PRE_PAID - 包年包月，HOUR_PAID - 按量计费。InstanceId为空时该参数为必填项。</p>
     * @param integer $ProtectMode <p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
     * @param string $DeviceType <p>实例隔离类型。</p><p>枚举值：</p><ul><li>UNIVERSAL： 通用型实例</li><li>EXCLUSIVE： 独享型实例</li><li>CLOUD_NATIVE_CLUSTER： 云盘版标准型</li><li>CLOUD_NATIVE_CLUSTER_EXCLUSIVE： 云盘版加强型</li><li>CLOUD_NATIVE_CLUSTER_ULTRA： 云盘版旗舰型</li></ul><p>默认值：UNIVERSAL</p><p>如需查询单节点云盘版实例的价格，请设置此参数为 CLOUD_NATIVE_CLUSTER，并且指定参数 InstanceNodes 为1。</p>
     * @param integer $InstanceNodes <p>实例节点数。<br>1.查询 RO 实例或者单节点实例价格时，此字段值为1。<br>2.查询双节点实例价格时，此字段值为2。<br>3.查询三节点实例价格时，此字段值为3。<br>4.查询云盘版实例价格时，此字段值范围可输入2 - 6，取值为2表示云盘版实例下对应有1个读写节点 + 1个只读节点；取值为6表示云盘版实例下对应有1个读写节点 + 5个只读节点；其余取值（3 - 5）按1个读写节点 +（取值数 - 1）个只读节点规则类推。</p>
     * @param integer $Cpu <p>询价实例的CPU核心数目，单位：核，为保证传入 CPU 值有效，请使用 <a href="https://cloud.tencent.com/document/product/236/17229">获取云数据库可售卖规格</a> 接口获取可售卖的核心数目，当未指定该值时，将按照 Memory 大小补全一个默认值。</p>
     * @param string $InstanceId <p>询价续费实例ID。如需查询实例续费价格，填写InstanceId和Period即可。</p>
     * @param integer $Ladder <p>按量计费阶梯。仅PayType=HOUR_PAID有效，支持值包括：1，2，3。阶梯时长见https://cloud.tencent.com/document/product/236/18335。</p>
     * @param string $DiskType <p>磁盘类型，查询云盘版、单节点云盘版实例价格可以指定该参数。默认值为 SSD 云硬盘。<br>支持值包括：<br>&quot;CLOUD_SSD&quot; - SSD 云硬盘。<br>&quot;CLOUD_HSSD&quot; - 增强型 SSD 云硬盘。<br>&quot;CLOUD_PREMIUM&quot; - 高性能云硬盘。</p>
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("InstanceNodes",$param) and $param["InstanceNodes"] !== null) {
            $this->InstanceNodes = $param["InstanceNodes"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ladder",$param) and $param["Ladder"] !== null) {
            $this->Ladder = $param["Ladder"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }
    }
}
