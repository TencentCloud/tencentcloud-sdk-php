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
 * 镜像资产详情
 *
 * @method string getImageDigest() 获取<p>镜像摘要</p>
 * @method void setImageDigest(string $ImageDigest) 设置<p>镜像摘要</p>
 * @method string getImageRepoAddress() 获取<p>仓库地址</p>
 * @method void setImageRepoAddress(string $ImageRepoAddress) 设置<p>仓库地址</p>
 * @method string getRegistryType() 获取<p>仓库类型</p>
 * @method void setRegistryType(string $RegistryType) 设置<p>仓库类型</p>
 * @method string getImageName() 获取<p>镜像名</p>
 * @method void setImageName(string $ImageName) 设置<p>镜像名</p>
 * @method string getImageTag() 获取<p>镜像tag</p>
 * @method void setImageTag(string $ImageTag) 设置<p>镜像tag</p>
 * @method string getLatestScanTime() 获取<p>最后扫描时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestScanTime(string $LatestScanTime) 设置<p>最后扫描时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method integer getScanStatus() 获取<p>扫描状态</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 已下发</li><li>2： 扫描中</li><li>3： 扫描完成</li><li>4： 扫描超时</li><li>5： 扫描失败</li></ul>
 * @method void setScanStatus(integer $ScanStatus) 设置<p>扫描状态</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 已下发</li><li>2： 扫描中</li><li>3： 扫描完成</li><li>4： 扫描超时</li><li>5： 扫描失败</li></ul>
 * @method integer getVulCnt() 获取<p>漏洞数</p>
 * @method void setVulCnt(integer $VulCnt) 设置<p>漏洞数</p>
 * @method integer getVirusCnt() 获取<p>木马数</p>
 * @method void setVirusCnt(integer $VirusCnt) 设置<p>木马数</p>
 * @method integer getSensitiveCnt() 获取<p>敏感信息数</p>
 * @method void setSensitiveCnt(integer $SensitiveCnt) 设置<p>敏感信息数</p>
 * @method string getInstanceId() 获取<p>仓库实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>仓库实例id</p>
 * @method string getInstanceName() 获取<p>镜像仓库名</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>镜像仓库名</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method integer getIsAuthorized() 获取<p>是否授权</p>
 * @method void setIsAuthorized(integer $IsAuthorized) 设置<p>是否授权</p>
 * @method integer getImageSize() 获取<p>镜像大小</p>
 * @method void setImageSize(integer $ImageSize) 设置<p>镜像大小</p>
 * @method string getImageId() 获取<p>镜像id</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像id</p>
 * @method string getRegistryRegion() 获取<p>仓库所在地域</p>
 * @method void setRegistryRegion(string $RegistryRegion) 设置<p>仓库所在地域</p>
 * @method string getImageCreateTime() 获取<p>镜像创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setImageCreateTime(string $ImageCreateTime) 设置<p>镜像创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getId() 获取<p>id</p>
 * @method void setId(string $Id) 设置<p>id</p>
 * @method string getOwnerAccountName() 获取<p>镜像所属账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>镜像所属账号名</p>
 * @method string getOwnerUin() 获取<p>镜像所属账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>镜像所属账号uin</p>
 * @method integer getOwnerAppId() 获取<p>镜像所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>镜像所属账号appid</p>
 * @method integer getLowLevelVulCnt() 获取<p>低风险漏洞数</p>
 * @method void setLowLevelVulCnt(integer $LowLevelVulCnt) 设置<p>低风险漏洞数</p>
 * @method integer getMediumLevelVulCnt() 获取<p>中风险漏洞数</p>
 * @method void setMediumLevelVulCnt(integer $MediumLevelVulCnt) 设置<p>中风险漏洞数</p>
 * @method integer getHighLevelVulCnt() 获取<p>高风险漏洞数</p>
 * @method void setHighLevelVulCnt(integer $HighLevelVulCnt) 设置<p>高风险漏洞数</p>
 * @method integer getCriticalLevelVulCnt() 获取<p>严重风险漏洞数</p>
 * @method void setCriticalLevelVulCnt(integer $CriticalLevelVulCnt) 设置<p>严重风险漏洞数</p>
 * @method integer getLowLevelVirusCnt() 获取<p>低危木马数</p>
 * @method void setLowLevelVirusCnt(integer $LowLevelVirusCnt) 设置<p>低危木马数</p>
 * @method integer getMediumLevelVirusCnt() 获取<p>中危木马数</p>
 * @method void setMediumLevelVirusCnt(integer $MediumLevelVirusCnt) 设置<p>中危木马数</p>
 * @method integer getHighLevelVirusCnt() 获取<p>高危木马数</p>
 * @method void setHighLevelVirusCnt(integer $HighLevelVirusCnt) 设置<p>高危木马数</p>
 * @method integer getCriticalLevelVirusCnt() 获取<p>严重木马数</p>
 * @method void setCriticalLevelVirusCnt(integer $CriticalLevelVirusCnt) 设置<p>严重木马数</p>
 * @method integer getEmergencyVulCnt() 获取<p>应急漏洞数</p>
 * @method void setEmergencyVulCnt(integer $EmergencyVulCnt) 设置<p>应急漏洞数</p>
 * @method integer getLowLevelSensitiveCnt() 获取<p>低危敏感信息数</p>
 * @method void setLowLevelSensitiveCnt(integer $LowLevelSensitiveCnt) 设置<p>低危敏感信息数</p>
 * @method integer getMediumLevelSensitiveCnt() 获取<p>中危敏感信息数</p>
 * @method void setMediumLevelSensitiveCnt(integer $MediumLevelSensitiveCnt) 设置<p>中危敏感信息数</p>
 * @method integer getHighLevelSensitiveCnt() 获取<p>高危敏感信息数</p>
 * @method void setHighLevelSensitiveCnt(integer $HighLevelSensitiveCnt) 设置<p>高危敏感信息数</p>
 * @method integer getCriticalLevelSensitiveCnt() 获取<p>严重敏感信息数</p>
 * @method void setCriticalLevelSensitiveCnt(integer $CriticalLevelSensitiveCnt) 设置<p>严重敏感信息数</p>
 */
class ImageAssetDetail extends AbstractModel
{
    /**
     * @var string <p>镜像摘要</p>
     */
    public $ImageDigest;

    /**
     * @var string <p>仓库地址</p>
     */
    public $ImageRepoAddress;

    /**
     * @var string <p>仓库类型</p>
     */
    public $RegistryType;

    /**
     * @var string <p>镜像名</p>
     */
    public $ImageName;

    /**
     * @var string <p>镜像tag</p>
     */
    public $ImageTag;

    /**
     * @var string <p>最后扫描时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestScanTime;

    /**
     * @var integer <p>扫描状态</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 已下发</li><li>2： 扫描中</li><li>3： 扫描完成</li><li>4： 扫描超时</li><li>5： 扫描失败</li></ul>
     */
    public $ScanStatus;

    /**
     * @var integer <p>漏洞数</p>
     */
    public $VulCnt;

    /**
     * @var integer <p>木马数</p>
     */
    public $VirusCnt;

    /**
     * @var integer <p>敏感信息数</p>
     */
    public $SensitiveCnt;

    /**
     * @var string <p>仓库实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>镜像仓库名</p>
     */
    public $InstanceName;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var integer <p>是否授权</p>
     */
    public $IsAuthorized;

    /**
     * @var integer <p>镜像大小</p>
     */
    public $ImageSize;

    /**
     * @var string <p>镜像id</p>
     */
    public $ImageId;

    /**
     * @var string <p>仓库所在地域</p>
     */
    public $RegistryRegion;

    /**
     * @var string <p>镜像创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $ImageCreateTime;

    /**
     * @var string <p>id</p>
     */
    public $Id;

    /**
     * @var string <p>镜像所属账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>镜像所属账号uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>镜像所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var integer <p>低风险漏洞数</p>
     */
    public $LowLevelVulCnt;

    /**
     * @var integer <p>中风险漏洞数</p>
     */
    public $MediumLevelVulCnt;

    /**
     * @var integer <p>高风险漏洞数</p>
     */
    public $HighLevelVulCnt;

    /**
     * @var integer <p>严重风险漏洞数</p>
     */
    public $CriticalLevelVulCnt;

    /**
     * @var integer <p>低危木马数</p>
     */
    public $LowLevelVirusCnt;

    /**
     * @var integer <p>中危木马数</p>
     */
    public $MediumLevelVirusCnt;

    /**
     * @var integer <p>高危木马数</p>
     */
    public $HighLevelVirusCnt;

    /**
     * @var integer <p>严重木马数</p>
     */
    public $CriticalLevelVirusCnt;

    /**
     * @var integer <p>应急漏洞数</p>
     */
    public $EmergencyVulCnt;

    /**
     * @var integer <p>低危敏感信息数</p>
     */
    public $LowLevelSensitiveCnt;

    /**
     * @var integer <p>中危敏感信息数</p>
     */
    public $MediumLevelSensitiveCnt;

    /**
     * @var integer <p>高危敏感信息数</p>
     */
    public $HighLevelSensitiveCnt;

    /**
     * @var integer <p>严重敏感信息数</p>
     */
    public $CriticalLevelSensitiveCnt;

    /**
     * @param string $ImageDigest <p>镜像摘要</p>
     * @param string $ImageRepoAddress <p>仓库地址</p>
     * @param string $RegistryType <p>仓库类型</p>
     * @param string $ImageName <p>镜像名</p>
     * @param string $ImageTag <p>镜像tag</p>
     * @param string $LatestScanTime <p>最后扫描时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param integer $ScanStatus <p>扫描状态</p><p>枚举值：</p><ul><li>0： 初始状态</li><li>1： 已下发</li><li>2： 扫描中</li><li>3： 扫描完成</li><li>4： 扫描超时</li><li>5： 扫描失败</li></ul>
     * @param integer $VulCnt <p>漏洞数</p>
     * @param integer $VirusCnt <p>木马数</p>
     * @param integer $SensitiveCnt <p>敏感信息数</p>
     * @param string $InstanceId <p>仓库实例id</p>
     * @param string $InstanceName <p>镜像仓库名</p>
     * @param string $Namespace <p>命名空间</p>
     * @param integer $IsAuthorized <p>是否授权</p>
     * @param integer $ImageSize <p>镜像大小</p>
     * @param string $ImageId <p>镜像id</p>
     * @param string $RegistryRegion <p>仓库所在地域</p>
     * @param string $ImageCreateTime <p>镜像创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $Id <p>id</p>
     * @param string $OwnerAccountName <p>镜像所属账号名</p>
     * @param string $OwnerUin <p>镜像所属账号uin</p>
     * @param integer $OwnerAppId <p>镜像所属账号appid</p>
     * @param integer $LowLevelVulCnt <p>低风险漏洞数</p>
     * @param integer $MediumLevelVulCnt <p>中风险漏洞数</p>
     * @param integer $HighLevelVulCnt <p>高风险漏洞数</p>
     * @param integer $CriticalLevelVulCnt <p>严重风险漏洞数</p>
     * @param integer $LowLevelVirusCnt <p>低危木马数</p>
     * @param integer $MediumLevelVirusCnt <p>中危木马数</p>
     * @param integer $HighLevelVirusCnt <p>高危木马数</p>
     * @param integer $CriticalLevelVirusCnt <p>严重木马数</p>
     * @param integer $EmergencyVulCnt <p>应急漏洞数</p>
     * @param integer $LowLevelSensitiveCnt <p>低危敏感信息数</p>
     * @param integer $MediumLevelSensitiveCnt <p>中危敏感信息数</p>
     * @param integer $HighLevelSensitiveCnt <p>高危敏感信息数</p>
     * @param integer $CriticalLevelSensitiveCnt <p>严重敏感信息数</p>
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
        if (array_key_exists("ImageDigest",$param) and $param["ImageDigest"] !== null) {
            $this->ImageDigest = $param["ImageDigest"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("VulCnt",$param) and $param["VulCnt"] !== null) {
            $this->VulCnt = $param["VulCnt"];
        }

        if (array_key_exists("VirusCnt",$param) and $param["VirusCnt"] !== null) {
            $this->VirusCnt = $param["VirusCnt"];
        }

        if (array_key_exists("SensitiveCnt",$param) and $param["SensitiveCnt"] !== null) {
            $this->SensitiveCnt = $param["SensitiveCnt"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("LowLevelVulCnt",$param) and $param["LowLevelVulCnt"] !== null) {
            $this->LowLevelVulCnt = $param["LowLevelVulCnt"];
        }

        if (array_key_exists("MediumLevelVulCnt",$param) and $param["MediumLevelVulCnt"] !== null) {
            $this->MediumLevelVulCnt = $param["MediumLevelVulCnt"];
        }

        if (array_key_exists("HighLevelVulCnt",$param) and $param["HighLevelVulCnt"] !== null) {
            $this->HighLevelVulCnt = $param["HighLevelVulCnt"];
        }

        if (array_key_exists("CriticalLevelVulCnt",$param) and $param["CriticalLevelVulCnt"] !== null) {
            $this->CriticalLevelVulCnt = $param["CriticalLevelVulCnt"];
        }

        if (array_key_exists("LowLevelVirusCnt",$param) and $param["LowLevelVirusCnt"] !== null) {
            $this->LowLevelVirusCnt = $param["LowLevelVirusCnt"];
        }

        if (array_key_exists("MediumLevelVirusCnt",$param) and $param["MediumLevelVirusCnt"] !== null) {
            $this->MediumLevelVirusCnt = $param["MediumLevelVirusCnt"];
        }

        if (array_key_exists("HighLevelVirusCnt",$param) and $param["HighLevelVirusCnt"] !== null) {
            $this->HighLevelVirusCnt = $param["HighLevelVirusCnt"];
        }

        if (array_key_exists("CriticalLevelVirusCnt",$param) and $param["CriticalLevelVirusCnt"] !== null) {
            $this->CriticalLevelVirusCnt = $param["CriticalLevelVirusCnt"];
        }

        if (array_key_exists("EmergencyVulCnt",$param) and $param["EmergencyVulCnt"] !== null) {
            $this->EmergencyVulCnt = $param["EmergencyVulCnt"];
        }

        if (array_key_exists("LowLevelSensitiveCnt",$param) and $param["LowLevelSensitiveCnt"] !== null) {
            $this->LowLevelSensitiveCnt = $param["LowLevelSensitiveCnt"];
        }

        if (array_key_exists("MediumLevelSensitiveCnt",$param) and $param["MediumLevelSensitiveCnt"] !== null) {
            $this->MediumLevelSensitiveCnt = $param["MediumLevelSensitiveCnt"];
        }

        if (array_key_exists("HighLevelSensitiveCnt",$param) and $param["HighLevelSensitiveCnt"] !== null) {
            $this->HighLevelSensitiveCnt = $param["HighLevelSensitiveCnt"];
        }

        if (array_key_exists("CriticalLevelSensitiveCnt",$param) and $param["CriticalLevelSensitiveCnt"] !== null) {
            $this->CriticalLevelSensitiveCnt = $param["CriticalLevelSensitiveCnt"];
        }
    }
}
