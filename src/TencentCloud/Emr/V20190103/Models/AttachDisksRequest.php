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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachDisks请求参数结构体
 *
 * @method string getInstanceId() 获取EMR集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置EMR集群实例ID
 * @method array getDiskIds() 获取需要挂载的云盘ID
 * @method void setDiskIds(array $DiskIds) 设置需要挂载的云盘ID
 * @method string getAlignType() 获取挂载模式，取值范围：
AUTO_RENEW：自动续费
ALIGN_DEADLINE：自动对其到期时间
 * @method void setAlignType(string $AlignType) 设置挂载模式，取值范围：
AUTO_RENEW：自动续费
ALIGN_DEADLINE：自动对其到期时间
 * @method array getCvmInstanceIds() 获取需要挂载的cvm节点id列表
 * @method void setCvmInstanceIds(array $CvmInstanceIds) 设置需要挂载的cvm节点id列表
 * @method boolean getCreateDisk() 获取是否是新购云盘进行挂载
 * @method void setCreateDisk(boolean $CreateDisk) 设置是否是新购云盘进行挂载
 * @method NodeSpecDiskV2 getDiskSpec() 获取新购云盘规格
 * @method void setDiskSpec(NodeSpecDiskV2 $DiskSpec) 设置新购云盘规格
 * @method boolean getDeleteWithInstance() 获取可选参数，不传该参数则仅执行挂载操作。传入True时，会在挂载成功后将云硬盘设置为随云主机销毁模式，仅对按量计费云硬盘有效。
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置可选参数，不传该参数则仅执行挂载操作。传入True时，会在挂载成功后将云硬盘设置为随云主机销毁模式，仅对按量计费云硬盘有效。
 * @method array getSelectiveConfServices() 获取新挂磁盘时可支持配置的服务名称列表
 * @method void setSelectiveConfServices(array $SelectiveConfServices) 设置新挂磁盘时可支持配置的服务名称列表
 * @method integer getChargeType() 获取磁盘计费类型（1包月、3包销）
 * @method void setChargeType(integer $ChargeType) 设置磁盘计费类型（1包月、3包销）
 * @method integer getUnderWriteDuration() 获取磁盘包销购买时长（仅支持12、24、36、48、60）
 * @method void setUnderWriteDuration(integer $UnderWriteDuration) 设置磁盘包销购买时长（仅支持12、24、36、48、60）
 */
class AttachDisksRequest extends AbstractModel
{
    /**
     * @var string EMR集群实例ID
     */
    public $InstanceId;

    /**
     * @var array 需要挂载的云盘ID
     */
    public $DiskIds;

    /**
     * @var string 挂载模式，取值范围：
AUTO_RENEW：自动续费
ALIGN_DEADLINE：自动对其到期时间
     */
    public $AlignType;

    /**
     * @var array 需要挂载的cvm节点id列表
     */
    public $CvmInstanceIds;

    /**
     * @var boolean 是否是新购云盘进行挂载
     */
    public $CreateDisk;

    /**
     * @var NodeSpecDiskV2 新购云盘规格
     */
    public $DiskSpec;

    /**
     * @var boolean 可选参数，不传该参数则仅执行挂载操作。传入True时，会在挂载成功后将云硬盘设置为随云主机销毁模式，仅对按量计费云硬盘有效。
     */
    public $DeleteWithInstance;

    /**
     * @var array 新挂磁盘时可支持配置的服务名称列表
     */
    public $SelectiveConfServices;

    /**
     * @var integer 磁盘计费类型（1包月、3包销）
     */
    public $ChargeType;

    /**
     * @var integer 磁盘包销购买时长（仅支持12、24、36、48、60）
     */
    public $UnderWriteDuration;

    /**
     * @param string $InstanceId EMR集群实例ID
     * @param array $DiskIds 需要挂载的云盘ID
     * @param string $AlignType 挂载模式，取值范围：
AUTO_RENEW：自动续费
ALIGN_DEADLINE：自动对其到期时间
     * @param array $CvmInstanceIds 需要挂载的cvm节点id列表
     * @param boolean $CreateDisk 是否是新购云盘进行挂载
     * @param NodeSpecDiskV2 $DiskSpec 新购云盘规格
     * @param boolean $DeleteWithInstance 可选参数，不传该参数则仅执行挂载操作。传入True时，会在挂载成功后将云硬盘设置为随云主机销毁模式，仅对按量计费云硬盘有效。
     * @param array $SelectiveConfServices 新挂磁盘时可支持配置的服务名称列表
     * @param integer $ChargeType 磁盘计费类型（1包月、3包销）
     * @param integer $UnderWriteDuration 磁盘包销购买时长（仅支持12、24、36、48、60）
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

        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("AlignType",$param) and $param["AlignType"] !== null) {
            $this->AlignType = $param["AlignType"];
        }

        if (array_key_exists("CvmInstanceIds",$param) and $param["CvmInstanceIds"] !== null) {
            $this->CvmInstanceIds = $param["CvmInstanceIds"];
        }

        if (array_key_exists("CreateDisk",$param) and $param["CreateDisk"] !== null) {
            $this->CreateDisk = $param["CreateDisk"];
        }

        if (array_key_exists("DiskSpec",$param) and $param["DiskSpec"] !== null) {
            $this->DiskSpec = new NodeSpecDiskV2();
            $this->DiskSpec->deserialize($param["DiskSpec"]);
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("SelectiveConfServices",$param) and $param["SelectiveConfServices"] !== null) {
            $this->SelectiveConfServices = $param["SelectiveConfServices"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("UnderWriteDuration",$param) and $param["UnderWriteDuration"] !== null) {
            $this->UnderWriteDuration = $param["UnderWriteDuration"];
        }
    }
}
