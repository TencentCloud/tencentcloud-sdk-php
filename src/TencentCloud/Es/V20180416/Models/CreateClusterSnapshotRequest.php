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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterSnapshot请求参数结构体
 *
 * @method string getInstanceId() 获取实例名称
 * @method void setInstanceId(string $InstanceId) 设置实例名称
 * @method string getSnapshotName() 获取快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
 * @method string getIndices() 获取索引名称
 * @method void setIndices(string $Indices) 设置索引名称
 * @method integer getEsRepositoryType() 获取0 腾讯云仓库; 1 客户仓库
 * @method void setEsRepositoryType(integer $EsRepositoryType) 设置0 腾讯云仓库; 1 客户仓库
 * @method string getUserEsRepository() 获取客户快照仓库名称
 * @method void setUserEsRepository(string $UserEsRepository) 设置客户快照仓库名称
 * @method integer getStorageDuration() 获取快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天
 * @method void setStorageDuration(integer $StorageDuration) 设置快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天
 * @method integer getCosRetention() 获取备份锁定 0 不锁定; 1 锁定
 * @method void setCosRetention(integer $CosRetention) 设置备份锁定 0 不锁定; 1 锁定
 * @method string getRetainUntilDate() 获取锁定截止日期 2022-12-10T08:34:48.000Z
 * @method void setRetainUntilDate(string $RetainUntilDate) 设置锁定截止日期 2022-12-10T08:34:48.000Z
 * @method integer getRetentionGraceTime() 获取锁定宽限期,单位天
 * @method void setRetentionGraceTime(integer $RetentionGraceTime) 设置锁定宽限期,单位天
 * @method integer getRemoteCos() 获取跨地域备份 0 不跨地域; 1 跨地域
 * @method void setRemoteCos(integer $RemoteCos) 设置跨地域备份 0 不跨地域; 1 跨地域
 * @method string getRemoteCosRegion() 获取跨地域备份地域名称 ap-guangzhou
 * @method void setRemoteCosRegion(string $RemoteCosRegion) 设置跨地域备份地域名称 ap-guangzhou
 * @method integer getMultiAz() 获取cos多AZ备份 0 单AZ; 1 多AZ
 * @method void setMultiAz(integer $MultiAz) 设置cos多AZ备份 0 单AZ; 1 多AZ
 */
class CreateClusterSnapshotRequest extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $InstanceId;

    /**
     * @var string 快照名称
     */
    public $SnapshotName;

    /**
     * @var string 索引名称
     */
    public $Indices;

    /**
     * @var integer 0 腾讯云仓库; 1 客户仓库
     */
    public $EsRepositoryType;

    /**
     * @var string 客户快照仓库名称
     */
    public $UserEsRepository;

    /**
     * @var integer 快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天
     */
    public $StorageDuration;

    /**
     * @var integer 备份锁定 0 不锁定; 1 锁定
     */
    public $CosRetention;

    /**
     * @var string 锁定截止日期 2022-12-10T08:34:48.000Z
     */
    public $RetainUntilDate;

    /**
     * @var integer 锁定宽限期,单位天
     */
    public $RetentionGraceTime;

    /**
     * @var integer 跨地域备份 0 不跨地域; 1 跨地域
     */
    public $RemoteCos;

    /**
     * @var string 跨地域备份地域名称 ap-guangzhou
     */
    public $RemoteCosRegion;

    /**
     * @var integer cos多AZ备份 0 单AZ; 1 多AZ
     */
    public $MultiAz;

    /**
     * @param string $InstanceId 实例名称
     * @param string $SnapshotName 快照名称
     * @param string $Indices 索引名称
     * @param integer $EsRepositoryType 0 腾讯云仓库; 1 客户仓库
     * @param string $UserEsRepository 客户快照仓库名称
     * @param integer $StorageDuration 快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天
     * @param integer $CosRetention 备份锁定 0 不锁定; 1 锁定
     * @param string $RetainUntilDate 锁定截止日期 2022-12-10T08:34:48.000Z
     * @param integer $RetentionGraceTime 锁定宽限期,单位天
     * @param integer $RemoteCos 跨地域备份 0 不跨地域; 1 跨地域
     * @param string $RemoteCosRegion 跨地域备份地域名称 ap-guangzhou
     * @param integer $MultiAz cos多AZ备份 0 单AZ; 1 多AZ
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

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Indices",$param) and $param["Indices"] !== null) {
            $this->Indices = $param["Indices"];
        }

        if (array_key_exists("EsRepositoryType",$param) and $param["EsRepositoryType"] !== null) {
            $this->EsRepositoryType = $param["EsRepositoryType"];
        }

        if (array_key_exists("UserEsRepository",$param) and $param["UserEsRepository"] !== null) {
            $this->UserEsRepository = $param["UserEsRepository"];
        }

        if (array_key_exists("StorageDuration",$param) and $param["StorageDuration"] !== null) {
            $this->StorageDuration = $param["StorageDuration"];
        }

        if (array_key_exists("CosRetention",$param) and $param["CosRetention"] !== null) {
            $this->CosRetention = $param["CosRetention"];
        }

        if (array_key_exists("RetainUntilDate",$param) and $param["RetainUntilDate"] !== null) {
            $this->RetainUntilDate = $param["RetainUntilDate"];
        }

        if (array_key_exists("RetentionGraceTime",$param) and $param["RetentionGraceTime"] !== null) {
            $this->RetentionGraceTime = $param["RetentionGraceTime"];
        }

        if (array_key_exists("RemoteCos",$param) and $param["RemoteCos"] !== null) {
            $this->RemoteCos = $param["RemoteCos"];
        }

        if (array_key_exists("RemoteCosRegion",$param) and $param["RemoteCosRegion"] !== null) {
            $this->RemoteCosRegion = $param["RemoteCosRegion"];
        }

        if (array_key_exists("MultiAz",$param) and $param["MultiAz"] !== null) {
            $this->MultiAz = $param["MultiAz"];
        }
    }
}
