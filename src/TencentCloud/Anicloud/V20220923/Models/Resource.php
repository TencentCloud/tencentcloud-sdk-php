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
namespace TencentCloud\Anicloud\V20220923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源信息
 *
 * @method string getUIN() 获取资源拥有者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUIN(string $UIN) 设置资源拥有者
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取云平台应用ID，一般来说与uin存在一一对应的关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置云平台应用ID，一般来说与uin存在一一对应的关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取资源id，会展示到通知内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源id，会展示到通知内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取区域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置区域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取资源状态，1正常，2隔离，3销毁(如果资源已经删除或销毁，不需要返回)，4冻结/封禁
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置资源状态，1正常，2隔离，3销毁(如果资源已经删除或销毁，不需要返回)，4冻结/封禁
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedTimestamp() 获取资源隔离时间，未隔离传"0000-00-00 00:00:00"，资源由隔离变回正常传"0000-00-00 00:00:00"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTimestamp(string $IsolatedTimestamp) 设置资源隔离时间，未隔离传"0000-00-00 00:00:00"，资源由隔离变回正常传"0000-00-00 00:00:00"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取资源创建时间，用于更新新购订单的资源开始时间，按时长退费时的资源结束时间取自订单的资源结束时间，
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置资源创建时间，用于更新新购订单的资源开始时间，按时长退费时的资源结束时间取自订单的资源结束时间，
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取0后付费 1预付费 2预留实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(integer $PayMode) 设置0后付费 1预付费 2预留实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取资源名称，账单中资源别名，生命周期通知中的资源名称，不返回则通知中展示为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置资源名称，账单中资源别名，生命周期通知中的资源名称，不返回则通知中展示为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method GoodsDetail getGoodsDetail() 获取购买详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsDetail(GoodsDetail $GoodsDetail) 设置购买详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRenewFlag() 获取预付费必填 ，自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费，用户开通了预付费不停服特权也会进行自动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(integer $RenewFlag) 设置预付费必填 ，自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费，用户开通了预付费不停服特权也会进行自动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取（仅预付费）资源到期时间，无到期概念传"0000-00-00 00:00:00"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置（仅预付费）资源到期时间，无到期概念传"0000-00-00 00:00:00"
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegion() 获取地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(integer $Region) 设置地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSdkAppId() 获取sdk appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSdkAppId(string $SdkAppId) 设置sdk appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppName() 获取app名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppName(string $AppName) 设置app名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取app的package名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageName(string $PackageName) 设置app的package名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getURL() 获取资源链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURL(string $URL) 设置资源链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEntry() 获取app的entry
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntry(string $Entry) 设置app的entry
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstType() 获取0：sdk 1：素材
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstType(integer $InstType) 设置0：sdk 1：素材
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取license的秘钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置license的秘钥
注意：此字段可能返回 null，表示取不到有效值。
 */
class Resource extends AbstractModel
{
    /**
     * @var string 资源拥有者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UIN;

    /**
     * @var integer 云平台应用ID，一般来说与uin存在一一对应的关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 资源id，会展示到通知内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var integer 区域ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var integer 资源状态，1正常，2隔离，3销毁(如果资源已经删除或销毁，不需要返回)，4冻结/封禁
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 资源隔离时间，未隔离传"0000-00-00 00:00:00"，资源由隔离变回正常传"0000-00-00 00:00:00"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTimestamp;

    /**
     * @var string 资源创建时间，用于更新新购订单的资源开始时间，按时长退费时的资源结束时间取自订单的资源结束时间，
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 0后付费 1预付费 2预留实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var string 资源名称，账单中资源别名，生命周期通知中的资源名称，不返回则通知中展示为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var GoodsDetail 购买详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsDetail;

    /**
     * @var integer 预付费必填 ，自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费，用户开通了预付费不停服特权也会进行自动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var string （仅预付费）资源到期时间，无到期概念传"0000-00-00 00:00:00"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var integer 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string sdk appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SdkAppId;

    /**
     * @var string app名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppName;

    /**
     * @var string app的package名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageName;

    /**
     * @var string 资源链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URL;

    /**
     * @var string app的entry
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Entry;

    /**
     * @var integer 0：sdk 1：素材
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstType;

    /**
     * @var string license的秘钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @param string $UIN 资源拥有者
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 云平台应用ID，一般来说与uin存在一一对应的关系
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId 资源id，会展示到通知内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId 区域ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 资源状态，1正常，2隔离，3销毁(如果资源已经删除或销毁，不需要返回)，4冻结/封禁
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedTimestamp 资源隔离时间，未隔离传"0000-00-00 00:00:00"，资源由隔离变回正常传"0000-00-00 00:00:00"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 资源创建时间，用于更新新购订单的资源开始时间，按时长退费时的资源结束时间取自订单的资源结束时间，
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode 0后付费 1预付费 2预留实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias 资源名称，账单中资源别名，生命周期通知中的资源名称，不返回则通知中展示为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param GoodsDetail $GoodsDetail 购买详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenewFlag 预付费必填 ，自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费，用户开通了预付费不停服特权也会进行自动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)，若业务无续费概念或无需自动续费，需要设置为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime （仅预付费）资源到期时间，无到期概念传"0000-00-00 00:00:00"
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Region 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SdkAppId sdk appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppName app名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName app的package名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $URL 资源链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Entry app的entry
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstType 0：sdk 1：素材
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key license的秘钥
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
        if (array_key_exists("UIN",$param) and $param["UIN"] !== null) {
            $this->UIN = $param["UIN"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsolatedTimestamp",$param) and $param["IsolatedTimestamp"] !== null) {
            $this->IsolatedTimestamp = $param["IsolatedTimestamp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("GoodsDetail",$param) and $param["GoodsDetail"] !== null) {
            $this->GoodsDetail = new GoodsDetail();
            $this->GoodsDetail->deserialize($param["GoodsDetail"]);
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("Entry",$param) and $param["Entry"] !== null) {
            $this->Entry = $param["Entry"];
        }

        if (array_key_exists("InstType",$param) and $param["InstType"] !== null) {
            $this->InstType = $param["InstType"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
