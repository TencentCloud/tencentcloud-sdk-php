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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像仓库信息
 *
 * @method integer getRegistryId() 获取<p>仓库id</p>
 * @method void setRegistryId(integer $RegistryId) 设置<p>仓库id</p>
 * @method string getName() 获取<p>仓库名</p>
 * @method void setName(string $Name) 设置<p>仓库名</p>
 * @method string getRegistryType() 获取<p>仓库类型</p>
 * @method void setRegistryType(string $RegistryType) 设置<p>仓库类型</p>
 * @method string getUrl() 获取<p>仓库url</p>
 * @method void setUrl(string $Url) 设置<p>仓库url</p>
 * @method string getNetType() 获取<p>网络连接类型</p>
 * @method void setNetType(string $NetType) 设置<p>网络连接类型</p>
 * @method string getRegistryRegion() 获取<p>仓库所在地域</p>
 * @method void setRegistryRegion(string $RegistryRegion) 设置<p>仓库所在地域</p>
 * @method string getRegistryVersion() 获取<p>仓库版本</p>
 * @method void setRegistryVersion(string $RegistryVersion) 设置<p>仓库版本</p>
 * @method string getInstanceID() 获取<p>仓库实例id</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>仓库实例id</p>
 * @method string getLatestSyncTime() 获取<p>最后同步时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestSyncTime(string $LatestSyncTime) 设置<p>最后同步时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getSyncSolution() 获取<p>同步失败解决方案</p>
 * @method void setSyncSolution(string $SyncSolution) 设置<p>同步失败解决方案</p>
 * @method integer getSyncMode() 获取<p>同步方式</p>
 * @method void setSyncMode(integer $SyncMode) 设置<p>同步方式</p>
 * @method array getConnDetectDetail() 获取<p>连接探测详情</p>
 * @method void setConnDetectDetail(array $ConnDetectDetail) 设置<p>连接探测详情</p>
 * @method string getConnDetectType() 获取<p>连接类型</p>
 * @method void setConnDetectType(string $ConnDetectType) 设置<p>连接类型</p>
 * @method string getOwnerAccountName() 获取<p>仓库所属账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>仓库所属账号名</p>
 * @method integer getOwnerAppId() 获取<p>仓库所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>仓库所属账号appid</p>
 * @method string getOwnerUin() 获取<p>仓库所属账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>仓库所属账号uin</p>
 * @method string getSyncStatus() 获取<p>同步状态</p><p>枚举值：</p><ul><li>doing： 同步中</li><li>success： 同步成功</li><li>failed： 同步失败</li></ul>
 * @method void setSyncStatus(string $SyncStatus) 设置<p>同步状态</p><p>枚举值：</p><ul><li>doing： 同步中</li><li>success： 同步成功</li><li>failed： 同步失败</li></ul>
 * @method string getSyncFailReason() 获取<p>同步失败原因</p>
 * @method void setSyncFailReason(string $SyncFailReason) 设置<p>同步失败原因</p>
 * @method RegionInfo getRegionInfo() 获取<p>地域信息</p>
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置<p>地域信息</p>
 * @method string getUserName() 获取<p>镜像仓库用户名</p>
 * @method void setUserName(string $UserName) 设置<p>镜像仓库用户名</p>
 */
class ImageRegistryInfo extends AbstractModel
{
    /**
     * @var integer <p>仓库id</p>
     */
    public $RegistryId;

    /**
     * @var string <p>仓库名</p>
     */
    public $Name;

    /**
     * @var string <p>仓库类型</p>
     */
    public $RegistryType;

    /**
     * @var string <p>仓库url</p>
     */
    public $Url;

    /**
     * @var string <p>网络连接类型</p>
     */
    public $NetType;

    /**
     * @var string <p>仓库所在地域</p>
     */
    public $RegistryRegion;

    /**
     * @var string <p>仓库版本</p>
     */
    public $RegistryVersion;

    /**
     * @var string <p>仓库实例id</p>
     */
    public $InstanceID;

    /**
     * @var string <p>最后同步时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestSyncTime;

    /**
     * @var string <p>同步失败解决方案</p>
     */
    public $SyncSolution;

    /**
     * @var integer <p>同步方式</p>
     */
    public $SyncMode;

    /**
     * @var array <p>连接探测详情</p>
     */
    public $ConnDetectDetail;

    /**
     * @var string <p>连接类型</p>
     */
    public $ConnDetectType;

    /**
     * @var string <p>仓库所属账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>仓库所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>仓库所属账号uin</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>同步状态</p><p>枚举值：</p><ul><li>doing： 同步中</li><li>success： 同步成功</li><li>failed： 同步失败</li></ul>
     */
    public $SyncStatus;

    /**
     * @var string <p>同步失败原因</p>
     */
    public $SyncFailReason;

    /**
     * @var RegionInfo <p>地域信息</p>
     */
    public $RegionInfo;

    /**
     * @var string <p>镜像仓库用户名</p>
     */
    public $UserName;

    /**
     * @param integer $RegistryId <p>仓库id</p>
     * @param string $Name <p>仓库名</p>
     * @param string $RegistryType <p>仓库类型</p>
     * @param string $Url <p>仓库url</p>
     * @param string $NetType <p>网络连接类型</p>
     * @param string $RegistryRegion <p>仓库所在地域</p>
     * @param string $RegistryVersion <p>仓库版本</p>
     * @param string $InstanceID <p>仓库实例id</p>
     * @param string $LatestSyncTime <p>最后同步时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $SyncSolution <p>同步失败解决方案</p>
     * @param integer $SyncMode <p>同步方式</p>
     * @param array $ConnDetectDetail <p>连接探测详情</p>
     * @param string $ConnDetectType <p>连接类型</p>
     * @param string $OwnerAccountName <p>仓库所属账号名</p>
     * @param integer $OwnerAppId <p>仓库所属账号appid</p>
     * @param string $OwnerUin <p>仓库所属账号uin</p>
     * @param string $SyncStatus <p>同步状态</p><p>枚举值：</p><ul><li>doing： 同步中</li><li>success： 同步成功</li><li>failed： 同步失败</li></ul>
     * @param string $SyncFailReason <p>同步失败原因</p>
     * @param RegionInfo $RegionInfo <p>地域信息</p>
     * @param string $UserName <p>镜像仓库用户名</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryVersion",$param) and $param["RegistryVersion"] !== null) {
            $this->RegistryVersion = $param["RegistryVersion"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("LatestSyncTime",$param) and $param["LatestSyncTime"] !== null) {
            $this->LatestSyncTime = $param["LatestSyncTime"];
        }

        if (array_key_exists("SyncSolution",$param) and $param["SyncSolution"] !== null) {
            $this->SyncSolution = $param["SyncSolution"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("ConnDetectDetail",$param) and $param["ConnDetectDetail"] !== null) {
            $this->ConnDetectDetail = [];
            foreach ($param["ConnDetectDetail"] as $key => $value){
                $obj = new RegistryConnDetectResult();
                $obj->deserialize($value);
                array_push($this->ConnDetectDetail, $obj);
            }
        }

        if (array_key_exists("ConnDetectType",$param) and $param["ConnDetectType"] !== null) {
            $this->ConnDetectType = $param["ConnDetectType"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SyncFailReason",$param) and $param["SyncFailReason"] !== null) {
            $this->SyncFailReason = $param["SyncFailReason"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
