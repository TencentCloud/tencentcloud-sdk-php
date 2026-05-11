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
 * @method string getInstanceId() 获取<p>实例名称</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例名称</p>
 * @method string getSnapshotName() 获取<p>快照名称</p>
 * @method void setSnapshotName(string $SnapshotName) 设置<p>快照名称</p>
 * @method string getIndices() 获取<p>索引名称</p>
 * @method void setIndices(string $Indices) 设置<p>索引名称</p>
 * @method integer getEsRepositoryType() 获取<p>0 腾讯云仓库; 1 客户仓库</p>
 * @method void setEsRepositoryType(integer $EsRepositoryType) 设置<p>0 腾讯云仓库; 1 客户仓库</p>
 * @method string getUserEsRepository() 获取<p>客户快照仓库名称</p>
 * @method void setUserEsRepository(string $UserEsRepository) 设置<p>客户快照仓库名称</p>
 * @method integer getStorageDuration() 获取<p>快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天</p>
 * @method void setStorageDuration(integer $StorageDuration) 设置<p>快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天</p>
 * @method integer getCosRetention() 获取<p>备份锁定 0 不锁定; 1 锁定</p>
 * @method void setCosRetention(integer $CosRetention) 设置<p>备份锁定 0 不锁定; 1 锁定</p>
 * @method string getRetainUntilDate() 获取<p>锁定截止日期 2022-12-10T08:34:48.000Z</p>
 * @method void setRetainUntilDate(string $RetainUntilDate) 设置<p>锁定截止日期 2022-12-10T08:34:48.000Z</p>
 * @method integer getRetentionGraceTime() 获取<p>锁定宽限期,单位天</p>
 * @method void setRetentionGraceTime(integer $RetentionGraceTime) 设置<p>锁定宽限期,单位天</p>
 * @method integer getRemoteCos() 获取<p>跨地域备份 0 不跨地域; 1 跨地域</p>
 * @method void setRemoteCos(integer $RemoteCos) 设置<p>跨地域备份 0 不跨地域; 1 跨地域</p>
 * @method string getRemoteCosRegion() 获取<p>跨地域备份地域名称 ap-guangzhou</p>
 * @method void setRemoteCosRegion(string $RemoteCosRegion) 设置<p>跨地域备份地域名称 ap-guangzhou</p>
 * @method integer getMultiAz() 获取<p>cos多AZ备份 0 单AZ; 1 多AZ</p>
 * @method void setMultiAz(integer $MultiAz) 设置<p>cos多AZ备份 0 单AZ; 1 多AZ</p>
 * @method string getMaxSnapshotPerSec() 获取<p>快照创建速率（单位mb）</p>
 * @method void setMaxSnapshotPerSec(string $MaxSnapshotPerSec) 设置<p>快照创建速率（单位mb）</p>
 */
class CreateClusterSnapshotRequest extends AbstractModel
{
    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceId;

    /**
     * @var string <p>快照名称</p>
     */
    public $SnapshotName;

    /**
     * @var string <p>索引名称</p>
     */
    public $Indices;

    /**
     * @var integer <p>0 腾讯云仓库; 1 客户仓库</p>
     */
    public $EsRepositoryType;

    /**
     * @var string <p>客户快照仓库名称</p>
     */
    public $UserEsRepository;

    /**
     * @var integer <p>快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天</p>
     */
    public $StorageDuration;

    /**
     * @var integer <p>备份锁定 0 不锁定; 1 锁定</p>
     */
    public $CosRetention;

    /**
     * @var string <p>锁定截止日期 2022-12-10T08:34:48.000Z</p>
     */
    public $RetainUntilDate;

    /**
     * @var integer <p>锁定宽限期,单位天</p>
     */
    public $RetentionGraceTime;

    /**
     * @var integer <p>跨地域备份 0 不跨地域; 1 跨地域</p>
     */
    public $RemoteCos;

    /**
     * @var string <p>跨地域备份地域名称 ap-guangzhou</p>
     */
    public $RemoteCosRegion;

    /**
     * @var integer <p>cos多AZ备份 0 单AZ; 1 多AZ</p>
     */
    public $MultiAz;

    /**
     * @var string <p>快照创建速率（单位mb）</p>
     */
    public $MaxSnapshotPerSec;

    /**
     * @param string $InstanceId <p>实例名称</p>
     * @param string $SnapshotName <p>快照名称</p>
     * @param string $Indices <p>索引名称</p>
     * @param integer $EsRepositoryType <p>0 腾讯云仓库; 1 客户仓库</p>
     * @param string $UserEsRepository <p>客户快照仓库名称</p>
     * @param integer $StorageDuration <p>快照存储周期 单位天，范围[0, INF), 如果没有设置则默认7天</p>
     * @param integer $CosRetention <p>备份锁定 0 不锁定; 1 锁定</p>
     * @param string $RetainUntilDate <p>锁定截止日期 2022-12-10T08:34:48.000Z</p>
     * @param integer $RetentionGraceTime <p>锁定宽限期,单位天</p>
     * @param integer $RemoteCos <p>跨地域备份 0 不跨地域; 1 跨地域</p>
     * @param string $RemoteCosRegion <p>跨地域备份地域名称 ap-guangzhou</p>
     * @param integer $MultiAz <p>cos多AZ备份 0 单AZ; 1 多AZ</p>
     * @param string $MaxSnapshotPerSec <p>快照创建速率（单位mb）</p>
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

        if (array_key_exists("MaxSnapshotPerSec",$param) and $param["MaxSnapshotPerSec"] !== null) {
            $this->MaxSnapshotPerSec = $param["MaxSnapshotPerSec"];
        }
    }
}
