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
 * 账号dspm信息
 *
 * @method integer getAppID() 获取APPID
 * @method void setAppID(integer $AppID) 设置APPID
 * @method string getUin() 获取UIN
 * @method void setUin(string $Uin) 设置UIN
 * @method string getNickName() 获取账号昵称
 * @method void setNickName(string $NickName) 设置账号昵称
 * @method integer getAssetNum() 获取账号下数据库资产数量
 * @method void setAssetNum(integer $AssetNum) 设置账号下数据库资产数量
 * @method integer getUsedAssetNum() 获取账号下开启安全分析数据库资产数量
 * @method void setUsedAssetNum(integer $UsedAssetNum) 设置账号下开启安全分析数据库资产数量
 * @method integer getIsShared() 获取是否被共享，1-被共享，2-未被共享
 * @method void setIsShared(integer $IsShared) 设置是否被共享，1-被共享，2-未被共享
 * @method integer getIsSelfBuy() 获取是否单独购买，1-单独购买，2-未单独购买
 * @method void setIsSelfBuy(integer $IsSelfBuy) 设置是否单独购买，1-单独购买，2-未单独购买
 * @method integer getShareFromAppID() 获取配额来源账号
 * @method void setShareFromAppID(integer $ShareFromAppID) 设置配额来源账号
 * @method integer getCloudType() 获取云类型（0：腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云）
 * @method void setCloudType(integer $CloudType) 设置云类型（0：腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云）
 * @method boolean getIsIsolating() 获取账号是否隔离中
 * @method void setIsIsolating(boolean $IsIsolating) 设置账号是否隔离中
 * @method boolean getIsDataCleaning() 获取是否正在数据清理
 * @method void setIsDataCleaning(boolean $IsDataCleaning) 设置是否正在数据清理
 */
class UserDspmInfo extends AbstractModel
{
    /**
     * @var integer APPID
     */
    public $AppID;

    /**
     * @var string UIN
     */
    public $Uin;

    /**
     * @var string 账号昵称
     */
    public $NickName;

    /**
     * @var integer 账号下数据库资产数量
     */
    public $AssetNum;

    /**
     * @var integer 账号下开启安全分析数据库资产数量
     */
    public $UsedAssetNum;

    /**
     * @var integer 是否被共享，1-被共享，2-未被共享
     */
    public $IsShared;

    /**
     * @var integer 是否单独购买，1-单独购买，2-未单独购买
     */
    public $IsSelfBuy;

    /**
     * @var integer 配额来源账号
     */
    public $ShareFromAppID;

    /**
     * @var integer 云类型（0：腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云）
     */
    public $CloudType;

    /**
     * @var boolean 账号是否隔离中
     */
    public $IsIsolating;

    /**
     * @var boolean 是否正在数据清理
     */
    public $IsDataCleaning;

    /**
     * @param integer $AppID APPID
     * @param string $Uin UIN
     * @param string $NickName 账号昵称
     * @param integer $AssetNum 账号下数据库资产数量
     * @param integer $UsedAssetNum 账号下开启安全分析数据库资产数量
     * @param integer $IsShared 是否被共享，1-被共享，2-未被共享
     * @param integer $IsSelfBuy 是否单独购买，1-单独购买，2-未单独购买
     * @param integer $ShareFromAppID 配额来源账号
     * @param integer $CloudType 云类型（0：腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云）
     * @param boolean $IsIsolating 账号是否隔离中
     * @param boolean $IsDataCleaning 是否正在数据清理
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("AssetNum",$param) and $param["AssetNum"] !== null) {
            $this->AssetNum = $param["AssetNum"];
        }

        if (array_key_exists("UsedAssetNum",$param) and $param["UsedAssetNum"] !== null) {
            $this->UsedAssetNum = $param["UsedAssetNum"];
        }

        if (array_key_exists("IsShared",$param) and $param["IsShared"] !== null) {
            $this->IsShared = $param["IsShared"];
        }

        if (array_key_exists("IsSelfBuy",$param) and $param["IsSelfBuy"] !== null) {
            $this->IsSelfBuy = $param["IsSelfBuy"];
        }

        if (array_key_exists("ShareFromAppID",$param) and $param["ShareFromAppID"] !== null) {
            $this->ShareFromAppID = $param["ShareFromAppID"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("IsIsolating",$param) and $param["IsIsolating"] !== null) {
            $this->IsIsolating = $param["IsIsolating"];
        }

        if (array_key_exists("IsDataCleaning",$param) and $param["IsDataCleaning"] !== null) {
            $this->IsDataCleaning = $param["IsDataCleaning"];
        }
    }
}
