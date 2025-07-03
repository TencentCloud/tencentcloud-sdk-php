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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDisks请求参数结构体
 *
 * @method Placement getPlacement() 获取实例所在的位置。通过该参数可以指定实例所属可用区，所属项目。若不指定项目，将在默认项目下进行创建。
 * @method void setPlacement(Placement $Placement) 设置实例所在的位置。通过该参数可以指定实例所属可用区，所属项目。若不指定项目，将在默认项目下进行创建。
 * @method string getDiskChargeType() 获取云硬盘计费类型。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDCPAID：独享集群付费<br>各类型价格请参考云硬盘[价格总览](/document/product/362/2413)。</li>
 * @method void setDiskChargeType(string $DiskChargeType) 设置云硬盘计费类型。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDCPAID：独享集群付费<br>各类型价格请参考云硬盘[价格总览](/document/product/362/2413)。</li>
 * @method string getDiskType() 获取硬盘介质类型。取值范围：<br><li>CLOUD_PREMIUM：表示高性能云硬盘</li><br><li>CLOUD_BSSD：表示通用型SSD云硬盘</li><br><li>CLOUD_SSD：表示SSD云硬盘</li><br><li>CLOUD_HSSD：表示增强型SSD云硬盘</li><br><li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>极速型SSD云硬盘（CLOUD_TSSD）仅支持随部分实例类型一同购买，暂不支持单独创建。
 * @method void setDiskType(string $DiskType) 设置硬盘介质类型。取值范围：<br><li>CLOUD_PREMIUM：表示高性能云硬盘</li><br><li>CLOUD_BSSD：表示通用型SSD云硬盘</li><br><li>CLOUD_SSD：表示SSD云硬盘</li><br><li>CLOUD_HSSD：表示增强型SSD云硬盘</li><br><li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>极速型SSD云硬盘（CLOUD_TSSD）仅支持随部分实例类型一同购买，暂不支持单独创建。
 * @method string getDiskName() 获取云盘显示名称。不传则默认为“未命名”。最大长度不能超60个字节。
 * @method void setDiskName(string $DiskName) 设置云盘显示名称。不传则默认为“未命名”。最大长度不能超60个字节。
 * @method array getTags() 获取云盘绑定的标签。
 * @method void setTags(array $Tags) 设置云盘绑定的标签。
 * @method string getSnapshotId() 获取快照ID，如果传入则根据此快照创建云硬盘，快照类型必须为数据盘快照，可通过[DescribeSnapshots](/document/product/362/15647)接口查询快照，见输出参数DiskUsage解释。
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID，如果传入则根据此快照创建云硬盘，快照类型必须为数据盘快照，可通过[DescribeSnapshots](/document/product/362/15647)接口查询快照，见输出参数DiskUsage解释。
 * @method integer getDiskCount() 获取创建云硬盘数量，不传则默认为1。单次请求最多可创建的云盘数有限制，具体参见[云硬盘使用限制](https://cloud.tencent.com/doc/product/362/5145)。
 * @method void setDiskCount(integer $DiskCount) 设置创建云硬盘数量，不传则默认为1。单次请求最多可创建的云盘数有限制，具体参见[云硬盘使用限制](https://cloud.tencent.com/doc/product/362/5145)。
 * @method integer getThroughputPerformance() 获取使用此参数可给云硬盘购买额外的性能，单位MB/s。<br>当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）。
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置使用此参数可给云硬盘购买额外的性能，单位MB/s。<br>当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）。
 * @method string getKmsKeyId() 获取购买加密盘时自定义密钥，当传入该参数时，Encrypt参数不得为空。
 * @method void setKmsKeyId(string $KmsKeyId) 设置购买加密盘时自定义密钥，当传入该参数时，Encrypt参数不得为空。
 * @method integer getDiskSize() 获取云硬盘大小，单位为GiB。<br><li>如果传入`SnapshotId`则可不传`DiskSize`，此时新建云盘的大小为快照大小</li><br><li>如果传入`SnapshotId`同时传入`DiskSize`，则云盘大小必须大于或等于快照大小</li><br><li>云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。</li>
 * @method void setDiskSize(integer $DiskSize) 设置云硬盘大小，单位为GiB。<br><li>如果传入`SnapshotId`则可不传`DiskSize`，此时新建云盘的大小为快照大小</li><br><li>如果传入`SnapshotId`同时传入`DiskSize`，则云盘大小必须大于或等于快照大小</li><br><li>云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。</li>
 * @method boolean getShareable() 获取传入True时，云盘将创建为共享型云盘，默认为False。因共享型云盘不支持加密，此参数与Encrypt参数不可同时传入。
 * @method void setShareable(boolean $Shareable) 设置传入True时，云盘将创建为共享型云盘，默认为False。因共享型云盘不支持加密，此参数与Encrypt参数不可同时传入。
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method string getEncrypt() 获取传入该参数用于创建加密云盘，取值固定为ENCRYPT。因共享型云盘不支持加密，此参数与Shareable参数不可同时传入。
 * @method void setEncrypt(string $Encrypt) 设置传入该参数用于创建加密云盘，取值固定为ENCRYPT。因共享型云盘不支持加密，此参数与Shareable参数不可同时传入。
 * @method DiskChargePrepaid getDiskChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。<br>创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。<br>创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。
 * @method integer getDeleteSnapshot() 获取销毁云盘时删除关联的非永久保留快照。0 表示非永久快照不随云盘销毁而销毁，1表示非永久快照随云盘销毁而销毁，默认取0。快照是否永久保留可以通过[DescribeSnapshots](/document/api/362/15647)接口返回的快照详情的IsPermanent字段来判断，True表示永久快照，False表示非永久快照。
 * @method void setDeleteSnapshot(integer $DeleteSnapshot) 设置销毁云盘时删除关联的非永久保留快照。0 表示非永久快照不随云盘销毁而销毁，1表示非永久快照随云盘销毁而销毁，默认取0。快照是否永久保留可以通过[DescribeSnapshots](/document/api/362/15647)接口返回的快照详情的IsPermanent字段来判断，True表示永久快照，False表示非永久快照。
 * @method AutoMountConfiguration getAutoMountConfiguration() 获取创建云盘时指定自动挂载并初始化该数据盘。因加密盘不支持自动挂载及初始化，此参数与Encrypt参数不可同时传入。
 * @method void setAutoMountConfiguration(AutoMountConfiguration $AutoMountConfiguration) 设置创建云盘时指定自动挂载并初始化该数据盘。因加密盘不支持自动挂载及初始化，此参数与Encrypt参数不可同时传入。
 * @method integer getDiskBackupQuota() 获取指定云硬盘备份点配额。
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) 设置指定云硬盘备份点配额。
 * @method boolean getBurstPerformance() 获取创建云盘时是否开启性能突发。当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）且云盘大小不小于460GiB。
 * @method void setBurstPerformance(boolean $BurstPerformance) 设置创建云盘时是否开启性能突发。当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）且云盘大小不小于460GiB。
 * @method string getEncryptType() 获取指定云硬盘加密类型，取值为ENCRYPT_V1和ENCRYPT_V2，分别表示第一代和第二代加密技术，两种加密技术互不兼容。推荐优先使用第二代加密技术ENCRYPT_V2，第一代加密技术仅支持在部分老旧机型使用。该参数仅当创建加密云硬盘时有效。
 * @method void setEncryptType(string $EncryptType) 设置指定云硬盘加密类型，取值为ENCRYPT_V1和ENCRYPT_V2，分别表示第一代和第二代加密技术，两种加密技术互不兼容。推荐优先使用第二代加密技术ENCRYPT_V2，第一代加密技术仅支持在部分老旧机型使用。该参数仅当创建加密云硬盘时有效。
 */
class CreateDisksRequest extends AbstractModel
{
    /**
     * @var Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目。若不指定项目，将在默认项目下进行创建。
     */
    public $Placement;

    /**
     * @var string 云硬盘计费类型。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDCPAID：独享集群付费<br>各类型价格请参考云硬盘[价格总览](/document/product/362/2413)。</li>
     */
    public $DiskChargeType;

    /**
     * @var string 硬盘介质类型。取值范围：<br><li>CLOUD_PREMIUM：表示高性能云硬盘</li><br><li>CLOUD_BSSD：表示通用型SSD云硬盘</li><br><li>CLOUD_SSD：表示SSD云硬盘</li><br><li>CLOUD_HSSD：表示增强型SSD云硬盘</li><br><li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>极速型SSD云硬盘（CLOUD_TSSD）仅支持随部分实例类型一同购买，暂不支持单独创建。
     */
    public $DiskType;

    /**
     * @var string 云盘显示名称。不传则默认为“未命名”。最大长度不能超60个字节。
     */
    public $DiskName;

    /**
     * @var array 云盘绑定的标签。
     */
    public $Tags;

    /**
     * @var string 快照ID，如果传入则根据此快照创建云硬盘，快照类型必须为数据盘快照，可通过[DescribeSnapshots](/document/product/362/15647)接口查询快照，见输出参数DiskUsage解释。
     */
    public $SnapshotId;

    /**
     * @var integer 创建云硬盘数量，不传则默认为1。单次请求最多可创建的云盘数有限制，具体参见[云硬盘使用限制](https://cloud.tencent.com/doc/product/362/5145)。
     */
    public $DiskCount;

    /**
     * @var integer 使用此参数可给云硬盘购买额外的性能，单位MB/s。<br>当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）。
     */
    public $ThroughputPerformance;

    /**
     * @var string 购买加密盘时自定义密钥，当传入该参数时，Encrypt参数不得为空。
     */
    public $KmsKeyId;

    /**
     * @var integer 云硬盘大小，单位为GiB。<br><li>如果传入`SnapshotId`则可不传`DiskSize`，此时新建云盘的大小为快照大小</li><br><li>如果传入`SnapshotId`同时传入`DiskSize`，则云盘大小必须大于或等于快照大小</li><br><li>云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。</li>
     */
    public $DiskSize;

    /**
     * @var boolean 传入True时，云盘将创建为共享型云盘，默认为False。因共享型云盘不支持加密，此参数与Encrypt参数不可同时传入。
     */
    public $Shareable;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     */
    public $ClientToken;

    /**
     * @var string 传入该参数用于创建加密云盘，取值固定为ENCRYPT。因共享型云盘不支持加密，此参数与Shareable参数不可同时传入。
     */
    public $Encrypt;

    /**
     * @var DiskChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。<br>创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。
     */
    public $DiskChargePrepaid;

    /**
     * @var integer 销毁云盘时删除关联的非永久保留快照。0 表示非永久快照不随云盘销毁而销毁，1表示非永久快照随云盘销毁而销毁，默认取0。快照是否永久保留可以通过[DescribeSnapshots](/document/api/362/15647)接口返回的快照详情的IsPermanent字段来判断，True表示永久快照，False表示非永久快照。
     */
    public $DeleteSnapshot;

    /**
     * @var AutoMountConfiguration 创建云盘时指定自动挂载并初始化该数据盘。因加密盘不支持自动挂载及初始化，此参数与Encrypt参数不可同时传入。
     */
    public $AutoMountConfiguration;

    /**
     * @var integer 指定云硬盘备份点配额。
     */
    public $DiskBackupQuota;

    /**
     * @var boolean 创建云盘时是否开启性能突发。当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）且云盘大小不小于460GiB。
     */
    public $BurstPerformance;

    /**
     * @var string 指定云硬盘加密类型，取值为ENCRYPT_V1和ENCRYPT_V2，分别表示第一代和第二代加密技术，两种加密技术互不兼容。推荐优先使用第二代加密技术ENCRYPT_V2，第一代加密技术仅支持在部分老旧机型使用。该参数仅当创建加密云硬盘时有效。
     */
    public $EncryptType;

    /**
     * @param Placement $Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目。若不指定项目，将在默认项目下进行创建。
     * @param string $DiskChargeType 云硬盘计费类型。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDCPAID：独享集群付费<br>各类型价格请参考云硬盘[价格总览](/document/product/362/2413)。</li>
     * @param string $DiskType 硬盘介质类型。取值范围：<br><li>CLOUD_PREMIUM：表示高性能云硬盘</li><br><li>CLOUD_BSSD：表示通用型SSD云硬盘</li><br><li>CLOUD_SSD：表示SSD云硬盘</li><br><li>CLOUD_HSSD：表示增强型SSD云硬盘</li><br><li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>极速型SSD云硬盘（CLOUD_TSSD）仅支持随部分实例类型一同购买，暂不支持单独创建。
     * @param string $DiskName 云盘显示名称。不传则默认为“未命名”。最大长度不能超60个字节。
     * @param array $Tags 云盘绑定的标签。
     * @param string $SnapshotId 快照ID，如果传入则根据此快照创建云硬盘，快照类型必须为数据盘快照，可通过[DescribeSnapshots](/document/product/362/15647)接口查询快照，见输出参数DiskUsage解释。
     * @param integer $DiskCount 创建云硬盘数量，不传则默认为1。单次请求最多可创建的云盘数有限制，具体参见[云硬盘使用限制](https://cloud.tencent.com/doc/product/362/5145)。
     * @param integer $ThroughputPerformance 使用此参数可给云硬盘购买额外的性能，单位MB/s。<br>当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）。
     * @param string $KmsKeyId 购买加密盘时自定义密钥，当传入该参数时，Encrypt参数不得为空。
     * @param integer $DiskSize 云硬盘大小，单位为GiB。<br><li>如果传入`SnapshotId`则可不传`DiskSize`，此时新建云盘的大小为快照大小</li><br><li>如果传入`SnapshotId`同时传入`DiskSize`，则云盘大小必须大于或等于快照大小</li><br><li>云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。</li>
     * @param boolean $Shareable 传入True时，云盘将创建为共享型云盘，默认为False。因共享型云盘不支持加密，此参数与Encrypt参数不可同时传入。
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     * @param string $Encrypt 传入该参数用于创建加密云盘，取值固定为ENCRYPT。因共享型云盘不支持加密，此参数与Shareable参数不可同时传入。
     * @param DiskChargePrepaid $DiskChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。<br>创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。
     * @param integer $DeleteSnapshot 销毁云盘时删除关联的非永久保留快照。0 表示非永久快照不随云盘销毁而销毁，1表示非永久快照随云盘销毁而销毁，默认取0。快照是否永久保留可以通过[DescribeSnapshots](/document/api/362/15647)接口返回的快照详情的IsPermanent字段来判断，True表示永久快照，False表示非永久快照。
     * @param AutoMountConfiguration $AutoMountConfiguration 创建云盘时指定自动挂载并初始化该数据盘。因加密盘不支持自动挂载及初始化，此参数与Encrypt参数不可同时传入。
     * @param integer $DiskBackupQuota 指定云硬盘备份点配额。
     * @param boolean $BurstPerformance 创建云盘时是否开启性能突发。当前仅支持极速型云盘（CLOUD_TSSD）和增强型SSD云硬盘（CLOUD_HSSD）且云盘大小不小于460GiB。
     * @param string $EncryptType 指定云硬盘加密类型，取值为ENCRYPT_V1和ENCRYPT_V2，分别表示第一代和第二代加密技术，两种加密技术互不兼容。推荐优先使用第二代加密技术ENCRYPT_V2，第一代加密技术仅支持在部分老旧机型使用。该参数仅当创建加密云硬盘时有效。
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("Shareable",$param) and $param["Shareable"] !== null) {
            $this->Shareable = $param["Shareable"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DeleteSnapshot",$param) and $param["DeleteSnapshot"] !== null) {
            $this->DeleteSnapshot = $param["DeleteSnapshot"];
        }

        if (array_key_exists("AutoMountConfiguration",$param) and $param["AutoMountConfiguration"] !== null) {
            $this->AutoMountConfiguration = new AutoMountConfiguration();
            $this->AutoMountConfiguration->deserialize($param["AutoMountConfiguration"]);
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }

        if (array_key_exists("BurstPerformance",$param) and $param["BurstPerformance"] !== null) {
            $this->BurstPerformance = $param["BurstPerformance"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }
    }
}
