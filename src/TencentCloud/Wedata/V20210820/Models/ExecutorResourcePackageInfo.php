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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行资源包
 *
 * @method integer getResourcePackageNum() 获取资源包规格相关：资源包个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePackageNum(integer $ResourcePackageNum) 设置资源包规格相关：资源包个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuNum() 获取资源包规格相关：cpu个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuNum(integer $CpuNum) 设置资源包规格相关：cpu个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorResourcePackageId() 获取资源包id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorResourcePackageId(string $ExecutorResourcePackageId) 设置资源包id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemSize() 获取资源包规格相关：内存大小，单位:G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemSize(integer $MemSize) 设置资源包规格相关：内存大小，单位:G
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取资源包状态， /**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
    EXPIRED(9);
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置资源包状态， /**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
    EXPIRED(9);
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDescription() 获取资源包状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDescription(string $StatusDescription) 设置资源包状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取资源包到期时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置资源包到期时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExecutorResourcePackageExtInfo getExtInfo() 获取资源包额外属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtInfo(ExecutorResourcePackageExtInfo $ExtInfo) 设置资源包额外属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取绑定的项目id，可为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置绑定的项目id，可为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectBindTime() 获取资源组绑定的时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectBindTime(integer $ProjectBindTime) 设置资源组绑定的时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExecutorResourcePackageUsageInfo getResourcePackageUsage() 获取资源包使用状态: cpu使用，内存使用及趋势
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePackageUsage(ExecutorResourcePackageUsageInfo $ResourcePackageUsage) 设置资源包使用状态: cpu使用，内存使用及趋势
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProductResourceIdList() 获取计费相关：产品资源id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductResourceIdList(array $ProductResourceIdList) 设置计费相关：产品资源id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLifeTime() 获取生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeTime(integer $LifeTime) 设置生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcName() 获取私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcName(string $VpcName) 设置私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetName() 获取子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetName(string $SubnetName) 设置子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceStandard() 获取执行资源相关：资源规格描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceStandard(string $ResourceStandard) 设置执行资源相关：资源规格描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalMemory() 获取内存总数
 * @method void setTotalMemory(integer $TotalMemory) 设置内存总数
 */
class ExecutorResourcePackageInfo extends AbstractModel
{
    /**
     * @var integer 资源包规格相关：资源包个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePackageNum;

    /**
     * @var integer 资源包规格相关：cpu个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuNum;

    /**
     * @var string 资源包id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorResourcePackageId;

    /**
     * @var integer 资源包规格相关：内存大小，单位:G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemSize;

    /**
     * @var integer 资源包状态， /**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
    EXPIRED(9);
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 资源包状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDescription;

    /**
     * @var integer 资源包到期时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var ExecutorResourcePackageExtInfo 资源包额外属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtInfo;

    /**
     * @var string 绑定的项目id，可为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 资源组绑定的时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectBindTime;

    /**
     * @var ExecutorResourcePackageUsageInfo 资源包使用状态: cpu使用，内存使用及趋势
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePackageUsage;

    /**
     * @var array 计费相关：产品资源id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductResourceIdList;

    /**
     * @var integer 生命周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeTime;

    /**
     * @var string 私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcName;

    /**
     * @var string 子网Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 子网名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetName;

    /**
     * @var string 执行资源相关：资源规格描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceStandard;

    /**
     * @var integer 内存总数
     */
    public $TotalMemory;

    /**
     * @param integer $ResourcePackageNum 资源包规格相关：资源包个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuNum 资源包规格相关：cpu个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorResourcePackageId 资源包id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemSize 资源包规格相关：内存大小，单位:G
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 资源包状态， /**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
    EXPIRED(9);
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDescription 资源包状态描述：保存创建失败，运行异常和更新失败的原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 资源包到期时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExecutorResourcePackageExtInfo $ExtInfo 资源包额外属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 绑定的项目id，可为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectBindTime 资源组绑定的时间，时间戳毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExecutorResourcePackageUsageInfo $ResourcePackageUsage 资源包使用状态: cpu使用，内存使用及趋势
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProductResourceIdList 计费相关：产品资源id列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LifeTime 生命周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcName 私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetName 子网名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceStandard 执行资源相关：资源规格描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalMemory 内存总数
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
        if (array_key_exists("ResourcePackageNum",$param) and $param["ResourcePackageNum"] !== null) {
            $this->ResourcePackageNum = $param["ResourcePackageNum"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("ExecutorResourcePackageId",$param) and $param["ExecutorResourcePackageId"] !== null) {
            $this->ExecutorResourcePackageId = $param["ExecutorResourcePackageId"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDescription",$param) and $param["StatusDescription"] !== null) {
            $this->StatusDescription = $param["StatusDescription"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = new ExecutorResourcePackageExtInfo();
            $this->ExtInfo->deserialize($param["ExtInfo"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectBindTime",$param) and $param["ProjectBindTime"] !== null) {
            $this->ProjectBindTime = $param["ProjectBindTime"];
        }

        if (array_key_exists("ResourcePackageUsage",$param) and $param["ResourcePackageUsage"] !== null) {
            $this->ResourcePackageUsage = new ExecutorResourcePackageUsageInfo();
            $this->ResourcePackageUsage->deserialize($param["ResourcePackageUsage"]);
        }

        if (array_key_exists("ProductResourceIdList",$param) and $param["ProductResourceIdList"] !== null) {
            $this->ProductResourceIdList = $param["ProductResourceIdList"];
        }

        if (array_key_exists("LifeTime",$param) and $param["LifeTime"] !== null) {
            $this->LifeTime = $param["LifeTime"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("ResourceStandard",$param) and $param["ResourceStandard"] !== null) {
            $this->ResourceStandard = $param["ResourceStandard"];
        }

        if (array_key_exists("TotalMemory",$param) and $param["TotalMemory"] !== null) {
            $this->TotalMemory = $param["TotalMemory"];
        }
    }
}
