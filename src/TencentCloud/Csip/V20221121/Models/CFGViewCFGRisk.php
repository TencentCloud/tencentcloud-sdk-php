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
 * 配置视角的配置风险对象
 *
 * @method integer getNoHandleCount() 获取影响资产
 * @method void setNoHandleCount(integer $NoHandleCount) 设置影响资产
 * @method string getLevel() 获取风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
 * @method void setLevel(string $Level) 设置风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
 * @method string getRecentTime() 获取最近识别时间
 * @method void setRecentTime(string $RecentTime) 设置最近识别时间
 * @method string getFirstTime() 获取首次识别时间
 * @method void setFirstTime(string $FirstTime) 设置首次识别时间
 * @method integer getAffectAssetCount() 获取状态，0未处理、1已处置、2已忽略
 * @method void setAffectAssetCount(integer $AffectAssetCount) 设置状态，0未处理、1已处置、2已忽略
 * @method string getId() 获取资产唯一id
 * @method void setId(string $Id) 设置资产唯一id
 * @method string getFrom() 获取资产子类型
 * @method void setFrom(string $From) 设置资产子类型
 * @method string getIndex() 获取前端索引
 * @method void setIndex(string $Index) 设置前端索引
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
 * @method string getCFGName() 获取配置名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFGName(string $CFGName) 设置配置名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckType() 获取检查类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckType(string $CheckType) 设置检查类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCFGSTD() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFGSTD(string $CFGSTD) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCFGDescribe() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFGDescribe(string $CFGDescribe) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCFGFix() 获取修复建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFGFix(string $CFGFix) 设置修复建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCFGHelpURL() 获取帮助文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCFGHelpURL(string $CFGHelpURL) 设置帮助文档
注意：此字段可能返回 null，表示取不到有效值。
 */
class CFGViewCFGRisk extends AbstractModel
{
    /**
     * @var integer 影响资产
     */
    public $NoHandleCount;

    /**
     * @var string 风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
     */
    public $Level;

    /**
     * @var string 最近识别时间
     */
    public $RecentTime;

    /**
     * @var string 首次识别时间
     */
    public $FirstTime;

    /**
     * @var integer 状态，0未处理、1已处置、2已忽略
     */
    public $AffectAssetCount;

    /**
     * @var string 资产唯一id
     */
    public $Id;

    /**
     * @var string 资产子类型
     */
    public $From;

    /**
     * @var string 前端索引
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
     * @var string 配置名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFGName;

    /**
     * @var string 检查类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckType;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFGSTD;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFGDescribe;

    /**
     * @var string 修复建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFGFix;

    /**
     * @var string 帮助文档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CFGHelpURL;

    /**
     * @param integer $NoHandleCount 影响资产
     * @param string $Level 风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
     * @param string $RecentTime 最近识别时间
     * @param string $FirstTime 首次识别时间
     * @param integer $AffectAssetCount 状态，0未处理、1已处置、2已忽略
     * @param string $Id 资产唯一id
     * @param string $From 资产子类型
     * @param string $Index 前端索引
     * @param string $AppId 用户appid
     * @param string $Nick 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CFGName 配置名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckType 检查类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CFGSTD -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CFGDescribe 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CFGFix 修复建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CFGHelpURL 帮助文档
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
        if (array_key_exists("NoHandleCount",$param) and $param["NoHandleCount"] !== null) {
            $this->NoHandleCount = $param["NoHandleCount"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("RecentTime",$param) and $param["RecentTime"] !== null) {
            $this->RecentTime = $param["RecentTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("AffectAssetCount",$param) and $param["AffectAssetCount"] !== null) {
            $this->AffectAssetCount = $param["AffectAssetCount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
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

        if (array_key_exists("CFGName",$param) and $param["CFGName"] !== null) {
            $this->CFGName = $param["CFGName"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
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
    }
}
