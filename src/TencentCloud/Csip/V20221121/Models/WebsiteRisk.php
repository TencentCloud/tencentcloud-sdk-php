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
 * 网站风险对象
 *
 * @method string getAffectAsset() 获取影响资产
 * @method void setAffectAsset(string $AffectAsset) 设置影响资产
 * @method string getLevel() 获取风险等级
 * @method void setLevel(string $Level) 设置风险等级
 * @method string getRecentTime() 获取最近识别时间
 * @method void setRecentTime(string $RecentTime) 设置最近识别时间
 * @method string getFirstTime() 获取首次识别时间
 * @method void setFirstTime(string $FirstTime) 设置首次识别时间
 * @method integer getStatus() 获取状态，0未处理、1已处置、2已忽略
 * @method void setStatus(integer $Status) 设置状态，0未处理、1已处置、2已忽略
 * @method string getId() 获取资产唯一id
 * @method void setId(string $Id) 设置资产唯一id
 * @method string getIndex() 获取前端索引
 * @method void setIndex(string $Index) 设置前端索引
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
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
 * @method string getURL() 获取风险链接
 * @method void setURL(string $URL) 设置风险链接
 * @method string getURLPath() 获取风险文件地址
 * @method void setURLPath(string $URLPath) 设置风险文件地址
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getDetectEngine() 获取类型
 * @method void setDetectEngine(string $DetectEngine) 设置类型
 * @method string getResultDescribe() 获取结果描述
 * @method void setResultDescribe(string $ResultDescribe) 设置结果描述
 * @method string getSourceURL() 获取源地址url
 * @method void setSourceURL(string $SourceURL) 设置源地址url
 * @method string getSourceURLPath() 获取源文件地址
 * @method void setSourceURLPath(string $SourceURLPath) 设置源文件地址
 */
class WebsiteRisk extends AbstractModel
{
    /**
     * @var string 影响资产
     */
    public $AffectAsset;

    /**
     * @var string 风险等级
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
    public $Status;

    /**
     * @var string 资产唯一id
     */
    public $Id;

    /**
     * @var string 前端索引
     */
    public $Index;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $InstanceName;

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
     * @var string 风险链接
     */
    public $URL;

    /**
     * @var string 风险文件地址
     */
    public $URLPath;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 类型
     */
    public $DetectEngine;

    /**
     * @var string 结果描述
     */
    public $ResultDescribe;

    /**
     * @var string 源地址url
     */
    public $SourceURL;

    /**
     * @var string 源文件地址
     */
    public $SourceURLPath;

    /**
     * @param string $AffectAsset 影响资产
     * @param string $Level 风险等级
     * @param string $RecentTime 最近识别时间
     * @param string $FirstTime 首次识别时间
     * @param integer $Status 状态，0未处理、1已处置、2已忽略
     * @param string $Id 资产唯一id
     * @param string $Index 前端索引
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名
     * @param string $AppId 用户appid
     * @param string $Nick 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $URL 风险链接
     * @param string $URLPath 风险文件地址
     * @param string $InstanceType 实例类型
     * @param string $DetectEngine 类型
     * @param string $ResultDescribe 结果描述
     * @param string $SourceURL 源地址url
     * @param string $SourceURLPath 源文件地址
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
        if (array_key_exists("AffectAsset",$param) and $param["AffectAsset"] !== null) {
            $this->AffectAsset = $param["AffectAsset"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("URLPath",$param) and $param["URLPath"] !== null) {
            $this->URLPath = $param["URLPath"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DetectEngine",$param) and $param["DetectEngine"] !== null) {
            $this->DetectEngine = $param["DetectEngine"];
        }

        if (array_key_exists("ResultDescribe",$param) and $param["ResultDescribe"] !== null) {
            $this->ResultDescribe = $param["ResultDescribe"];
        }

        if (array_key_exists("SourceURL",$param) and $param["SourceURL"] !== null) {
            $this->SourceURL = $param["SourceURL"];
        }

        if (array_key_exists("SourceURLPath",$param) and $param["SourceURLPath"] !== null) {
            $this->SourceURLPath = $param["SourceURLPath"];
        }
    }
}
