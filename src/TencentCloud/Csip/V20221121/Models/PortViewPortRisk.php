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
 * 端口视角的端口风险对象
 *
 * @method integer getNoHandleCount() 获取影响资产
 * @method void setNoHandleCount(integer $NoHandleCount) 设置影响资产
 * @method string getLevel() 获取风险等级
 * @method void setLevel(string $Level) 设置风险等级
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getComponent() 获取组件
 * @method void setComponent(string $Component) 设置组件
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getRecentTime() 获取最近识别时间
 * @method void setRecentTime(string $RecentTime) 设置最近识别时间
 * @method string getFirstTime() 获取首次识别时间
 * @method void setFirstTime(string $FirstTime) 设置首次识别时间
 * @method integer getSuggestion() 获取处置建议,0保持现状、1限制访问、2封禁端口
 * @method void setSuggestion(integer $Suggestion) 设置处置建议,0保持现状、1限制访问、2封禁端口
 * @method string getAffectAssetCount() 获取状态，0未处理、1已处置、2已忽略
 * @method void setAffectAssetCount(string $AffectAssetCount) 设置状态，0未处理、1已处置、2已忽略
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
 * @method string getService() 获取服务
 * @method void setService(string $Service) 设置服务
 */
class PortViewPortRisk extends AbstractModel
{
    /**
     * @var integer 影响资产
     */
    public $NoHandleCount;

    /**
     * @var string 风险等级
     */
    public $Level;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 组件
     */
    public $Component;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string 最近识别时间
     */
    public $RecentTime;

    /**
     * @var string 首次识别时间
     */
    public $FirstTime;

    /**
     * @var integer 处置建议,0保持现状、1限制访问、2封禁端口
     */
    public $Suggestion;

    /**
     * @var string 状态，0未处理、1已处置、2已忽略
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
     * @var string 服务
     */
    public $Service;

    /**
     * @param integer $NoHandleCount 影响资产
     * @param string $Level 风险等级
     * @param string $Protocol 协议
     * @param string $Component 组件
     * @param integer $Port 端口
     * @param string $RecentTime 最近识别时间
     * @param string $FirstTime 首次识别时间
     * @param integer $Suggestion 处置建议,0保持现状、1限制访问、2封禁端口
     * @param string $AffectAssetCount 状态，0未处理、1已处置、2已忽略
     * @param string $Id 资产唯一id
     * @param string $From 资产子类型
     * @param string $Index 前端索引
     * @param string $AppId 用户appid
     * @param string $Nick 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Service 服务
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("RecentTime",$param) and $param["RecentTime"] !== null) {
            $this->RecentTime = $param["RecentTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
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

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }
    }
}
