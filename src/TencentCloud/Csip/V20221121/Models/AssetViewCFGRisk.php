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
 * 资产视角配置风险
 *
 * @method string getId() 获取唯一id
 * @method void setId(string $Id) 设置唯一id
 * @method string getCFGName() 获取配置名
 * @method void setCFGName(string $CFGName) 设置配置名
 * @method string getCheckType() 获取检查类型
 * @method void setCheckType(string $CheckType) 设置检查类型
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getAffectAsset() 获取影响资产
 * @method void setAffectAsset(string $AffectAsset) 设置影响资产
 * @method string getLevel() 获取风险等级
 * @method void setLevel(string $Level) 设置风险等级
 * @method string getFirstTime() 获取首次识别时间
 * @method void setFirstTime(string $FirstTime) 设置首次识别时间
 * @method string getRecentTime() 获取最近识别时间
 * @method void setRecentTime(string $RecentTime) 设置最近识别时间
 * @method string getFrom() 获取来源
 * @method void setFrom(string $From) 设置来源
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getCFGSTD() 获取-
 * @method void setCFGSTD(string $CFGSTD) 设置-
 * @method string getCFGDescribe() 获取配置详情
 * @method void setCFGDescribe(string $CFGDescribe) 设置配置详情
 * @method string getCFGFix() 获取修复建议
 * @method void setCFGFix(string $CFGFix) 设置修复建议
 * @method string getCFGHelpURL() 获取帮助文档链接
 * @method void setCFGHelpURL(string $CFGHelpURL) 设置帮助文档链接
 * @method string getIndex() 获取前端使用索引
 * @method void setIndex(string $Index) 设置前端使用索引
 * @method string getAppId() 获取用户appid
 * @method void setAppId(string $AppId) 设置用户appid
 * @method string getNick() 获取用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNick(string $Nick) 设置用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户uin
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetViewCFGRisk extends AbstractModel
{
    /**
     * @var string 唯一id
     */
    public $Id;

    /**
     * @var string 配置名
     */
    public $CFGName;

    /**
     * @var string 检查类型
     */
    public $CheckType;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 影响资产
     */
    public $AffectAsset;

    /**
     * @var string 风险等级
     */
    public $Level;

    /**
     * @var string 首次识别时间
     */
    public $FirstTime;

    /**
     * @var string 最近识别时间
     */
    public $RecentTime;

    /**
     * @var string 来源
     */
    public $From;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string -
     */
    public $CFGSTD;

    /**
     * @var string 配置详情
     */
    public $CFGDescribe;

    /**
     * @var string 修复建议
     */
    public $CFGFix;

    /**
     * @var string 帮助文档链接
     */
    public $CFGHelpURL;

    /**
     * @var string 前端使用索引
     */
    public $Index;

    /**
     * @var string 用户appid
     */
    public $AppId;

    /**
     * @var string 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nick;

    /**
     * @var string 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @param string $Id 唯一id
     * @param string $CFGName 配置名
     * @param string $CheckType 检查类型
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名
     * @param string $InstanceType 实例类型
     * @param string $AffectAsset 影响资产
     * @param string $Level 风险等级
     * @param string $FirstTime 首次识别时间
     * @param string $RecentTime 最近识别时间
     * @param string $From 来源
     * @param integer $Status 状态
     * @param string $CFGSTD -
     * @param string $CFGDescribe 配置详情
     * @param string $CFGFix 修复建议
     * @param string $CFGHelpURL 帮助文档链接
     * @param string $Index 前端使用索引
     * @param string $AppId 用户appid
     * @param string $Nick 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户uin
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CFGName",$param) and $param["CFGName"] !== null) {
            $this->CFGName = $param["CFGName"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("AffectAsset",$param) and $param["AffectAsset"] !== null) {
            $this->AffectAsset = $param["AffectAsset"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("RecentTime",$param) and $param["RecentTime"] !== null) {
            $this->RecentTime = $param["RecentTime"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CFGSTD",$param) and $param["CFGSTD"] !== null) {
            $this->CFGSTD = $param["CFGSTD"];
        }

        if (array_key_exists("CFGDescribe",$param) and $param["CFGDescribe"] !== null) {
            $this->CFGDescribe = $param["CFGDescribe"];
        }

        if (array_key_exists("CFGFix",$param) and $param["CFGFix"] !== null) {
            $this->CFGFix = $param["CFGFix"];
        }

        if (array_key_exists("CFGHelpURL",$param) and $param["CFGHelpURL"] !== null) {
            $this->CFGHelpURL = $param["CFGHelpURL"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
