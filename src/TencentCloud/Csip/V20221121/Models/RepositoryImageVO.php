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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仓库镜像列表
 *
 * @method integer getAppId() 获取用户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNickName() 获取昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickName(string $NickName) 设置昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取镜像id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置镜像id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceCreateTime() 获取镜像创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCreateTime(string $InstanceCreateTime) 设置镜像创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceSize() 获取镜像大小带单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceSize(string $InstanceSize) 设置镜像大小带单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBuildCount() 获取构建次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildCount(integer $BuildCount) 设置构建次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取镜像类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置镜像类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthStatus() 获取授权状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthStatus(integer $AuthStatus) 设置授权状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceVersion() 获取镜像版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceVersion(string $InstanceVersion) 设置镜像版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepositoryUrl() 获取仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepositoryUrl(string $RepositoryUrl) 设置仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepositoryName() 获取仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepositoryName(string $RepositoryName) 设置仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsCore() 获取是否核心
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCore(integer $IsCore) 设置是否核心
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVulRisk() 获取漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulRisk(integer $VulRisk) 设置漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCheckCount() 获取检查任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckCount(integer $CheckCount) 设置检查任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckTime() 获取体检时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckTime(string $CheckTime) 设置体检时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNewAsset() 获取是否新资产 1新
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNewAsset(integer $IsNewAsset) 设置是否新资产 1新
注意：此字段可能返回 null，表示取不到有效值。
 */
class RepositoryImageVO extends AbstractModel
{
    /**
     * @var integer 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NickName;

    /**
     * @var string 镜像id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 镜像创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCreateTime;

    /**
     * @var string 镜像大小带单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceSize;

    /**
     * @var integer 构建次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildCount;

    /**
     * @var string 镜像类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var integer 授权状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthStatus;

    /**
     * @var string 镜像版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceVersion;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepositoryUrl;

    /**
     * @var string 仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepositoryName;

    /**
     * @var integer 是否核心
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCore;

    /**
     * @var integer 漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulRisk;

    /**
     * @var integer 检查任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckCount;

    /**
     * @var string 体检时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckTime;

    /**
     * @var integer 是否新资产 1新
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNewAsset;

    /**
     * @param integer $AppId 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NickName 昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 镜像id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceCreateTime 镜像创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceSize 镜像大小带单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BuildCount 构建次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 镜像类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthStatus 授权状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceVersion 镜像版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepositoryUrl 仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepositoryName 仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsCore 是否核心
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VulRisk 漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CheckCount 检查任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckTime 体检时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNewAsset 是否新资产 1新
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceCreateTime",$param) and $param["InstanceCreateTime"] !== null) {
            $this->InstanceCreateTime = $param["InstanceCreateTime"];
        }

        if (array_key_exists("InstanceSize",$param) and $param["InstanceSize"] !== null) {
            $this->InstanceSize = $param["InstanceSize"];
        }

        if (array_key_exists("BuildCount",$param) and $param["BuildCount"] !== null) {
            $this->BuildCount = $param["BuildCount"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("AuthStatus",$param) and $param["AuthStatus"] !== null) {
            $this->AuthStatus = $param["AuthStatus"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RepositoryUrl",$param) and $param["RepositoryUrl"] !== null) {
            $this->RepositoryUrl = $param["RepositoryUrl"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("VulRisk",$param) and $param["VulRisk"] !== null) {
            $this->VulRisk = $param["VulRisk"];
        }

        if (array_key_exists("CheckCount",$param) and $param["CheckCount"] !== null) {
            $this->CheckCount = $param["CheckCount"];
        }

        if (array_key_exists("CheckTime",$param) and $param["CheckTime"] !== null) {
            $this->CheckTime = $param["CheckTime"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }
    }
}
