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
 * @method integer getAppID() 获取<p>APPID</p>
 * @method void setAppID(integer $AppID) 设置<p>APPID</p>
 * @method string getUin() 获取<p>UIN</p>
 * @method void setUin(string $Uin) 设置<p>UIN</p>
 * @method string getNickName() 获取<p>账号昵称</p>
 * @method void setNickName(string $NickName) 设置<p>账号昵称</p>
 * @method integer getAssetNum() 获取<p>账号下数据库资产数量</p>
 * @method void setAssetNum(integer $AssetNum) 设置<p>账号下数据库资产数量</p>
 * @method integer getUsedAssetNum() 获取<p>账号下开启安全分析数据库资产数量</p>
 * @method void setUsedAssetNum(integer $UsedAssetNum) 设置<p>账号下开启安全分析数据库资产数量</p>
 * @method integer getIsShared() 获取<p>是否被共享，1-被共享，2-未被共享</p>
 * @method void setIsShared(integer $IsShared) 设置<p>是否被共享，1-被共享，2-未被共享</p>
 * @method integer getIsSelfBuy() 获取<p>是否单独购买，1-单独购买，2-未单独购买</p>
 * @method void setIsSelfBuy(integer $IsSelfBuy) 设置<p>是否单独购买，1-单独购买，2-未单独购买</p>
 * @method integer getShareFromAppID() 获取<p>配额来源账号</p>
 * @method void setShareFromAppID(integer $ShareFromAppID) 设置<p>配额来源账号</p>
 * @method integer getCloudType() 获取<p>云类型（0：腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云）</p>
 * @method void setCloudType(integer $CloudType) 设置<p>云类型（0：腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云）</p>
 * @method boolean getIsIsolating() 获取<p>账号是否隔离中</p>
 * @method void setIsIsolating(boolean $IsIsolating) 设置<p>账号是否隔离中</p>
 * @method boolean getIsDataCleaning() 获取<p>是否正在数据清理</p>
 * @method void setIsDataCleaning(boolean $IsDataCleaning) 设置<p>是否正在数据清理</p>
 * @method string getRole() 获取<p>集团账号角色（member-普通成员/admin-管理员/delegatedAdmin-委派管理员），非集团账号为空</p>
 * @method void setRole(string $Role) 设置<p>集团账号角色（member-普通成员/admin-管理员/delegatedAdmin-委派管理员），非集团账号为空</p>
 * @method string getNodeName() 获取<p>所属部门名称，未分配部门或非集团账号为空</p>
 * @method void setNodeName(string $NodeName) 设置<p>所属部门名称，未分配部门或非集团账号为空</p>
 */
class UserDspmInfo extends AbstractModel
{
    /**
     * @var integer <p>APPID</p>
     */
    public $AppID;

    /**
     * @var string <p>UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>账号昵称</p>
     */
    public $NickName;

    /**
     * @var integer <p>账号下数据库资产数量</p>
     */
    public $AssetNum;

    /**
     * @var integer <p>账号下开启安全分析数据库资产数量</p>
     */
    public $UsedAssetNum;

    /**
     * @var integer <p>是否被共享，1-被共享，2-未被共享</p>
     */
    public $IsShared;

    /**
     * @var integer <p>是否单独购买，1-单独购买，2-未单独购买</p>
     */
    public $IsSelfBuy;

    /**
     * @var integer <p>配额来源账号</p>
     */
    public $ShareFromAppID;

    /**
     * @var integer <p>云类型（0：腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云）</p>
     */
    public $CloudType;

    /**
     * @var boolean <p>账号是否隔离中</p>
     */
    public $IsIsolating;

    /**
     * @var boolean <p>是否正在数据清理</p>
     */
    public $IsDataCleaning;

    /**
     * @var string <p>集团账号角色（member-普通成员/admin-管理员/delegatedAdmin-委派管理员），非集团账号为空</p>
     */
    public $Role;

    /**
     * @var string <p>所属部门名称，未分配部门或非集团账号为空</p>
     */
    public $NodeName;

    /**
     * @param integer $AppID <p>APPID</p>
     * @param string $Uin <p>UIN</p>
     * @param string $NickName <p>账号昵称</p>
     * @param integer $AssetNum <p>账号下数据库资产数量</p>
     * @param integer $UsedAssetNum <p>账号下开启安全分析数据库资产数量</p>
     * @param integer $IsShared <p>是否被共享，1-被共享，2-未被共享</p>
     * @param integer $IsSelfBuy <p>是否单独购买，1-单独购买，2-未单独购买</p>
     * @param integer $ShareFromAppID <p>配额来源账号</p>
     * @param integer $CloudType <p>云类型（0：腾讯云 1:亚马逊云 2:微软云 3:谷歌云 4:阿里云 5:华为云）</p>
     * @param boolean $IsIsolating <p>账号是否隔离中</p>
     * @param boolean $IsDataCleaning <p>是否正在数据清理</p>
     * @param string $Role <p>集团账号角色（member-普通成员/admin-管理员/delegatedAdmin-委派管理员），非集团账号为空</p>
     * @param string $NodeName <p>所属部门名称，未分配部门或非集团账号为空</p>
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

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}
