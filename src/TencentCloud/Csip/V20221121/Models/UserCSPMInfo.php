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
 * 账号CSPM信息
 *
 * @method integer getAppID() 获取<p>APPID</p>
 * @method void setAppID(integer $AppID) 设置<p>APPID</p>
 * @method string getUin() 获取<p>UIN</p>
 * @method void setUin(string $Uin) 设置<p>UIN</p>
 * @method string getNickName() 获取<p>账号昵称</p>
 * @method void setNickName(string $NickName) 设置<p>账号昵称</p>
 * @method integer getCSPMNum() 获取<p>CSPM扫描配额</p>
 * @method void setCSPMNum(integer $CSPMNum) 设置<p>CSPM扫描配额</p>
 * @method integer getUsedCount() 获取<p>已消耗CSPM扫描配额</p>
 * @method void setUsedCount(integer $UsedCount) 设置<p>已消耗CSPM扫描配额</p>
 * @method integer getGrantedCSPMNum() 获取<p>赠送CSPM扫描配额</p>
 * @method void setGrantedCSPMNum(integer $GrantedCSPMNum) 设置<p>赠送CSPM扫描配额</p>
 * @method integer getIsShared() 获取<p>是否被共享，1-被共享，2-未被共享</p>
 * @method void setIsShared(integer $IsShared) 设置<p>是否被共享，1-被共享，2-未被共享</p>
 * @method integer getIsSelfBuy() 获取<p>是否单独购买，1-单独购买，2-未单独购买</p>
 * @method void setIsSelfBuy(integer $IsSelfBuy) 设置<p>是否单独购买，1-单独购买，2-未单独购买</p>
 * @method integer getShareFromAppID() 获取<p>配额来源账号</p>
 * @method void setShareFromAppID(integer $ShareFromAppID) 设置<p>配额来源账号</p>
 * @method string getRole() 获取<p>角色:member:成员;admin:管理员;delegatedAdmin:委派管理员</p>
 * @method void setRole(string $Role) 设置<p>角色:member:成员;admin:管理员;delegatedAdmin:委派管理员</p>
 * @method string getDepartment() 获取<p>所在部门</p>
 * @method void setDepartment(string $Department) 设置<p>所在部门</p>
 */
class UserCSPMInfo extends AbstractModel
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
     * @var integer <p>CSPM扫描配额</p>
     */
    public $CSPMNum;

    /**
     * @var integer <p>已消耗CSPM扫描配额</p>
     */
    public $UsedCount;

    /**
     * @var integer <p>赠送CSPM扫描配额</p>
     */
    public $GrantedCSPMNum;

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
     * @var string <p>角色:member:成员;admin:管理员;delegatedAdmin:委派管理员</p>
     */
    public $Role;

    /**
     * @var string <p>所在部门</p>
     */
    public $Department;

    /**
     * @param integer $AppID <p>APPID</p>
     * @param string $Uin <p>UIN</p>
     * @param string $NickName <p>账号昵称</p>
     * @param integer $CSPMNum <p>CSPM扫描配额</p>
     * @param integer $UsedCount <p>已消耗CSPM扫描配额</p>
     * @param integer $GrantedCSPMNum <p>赠送CSPM扫描配额</p>
     * @param integer $IsShared <p>是否被共享，1-被共享，2-未被共享</p>
     * @param integer $IsSelfBuy <p>是否单独购买，1-单独购买，2-未单独购买</p>
     * @param integer $ShareFromAppID <p>配额来源账号</p>
     * @param string $Role <p>角色:member:成员;admin:管理员;delegatedAdmin:委派管理员</p>
     * @param string $Department <p>所在部门</p>
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

        if (array_key_exists("CSPMNum",$param) and $param["CSPMNum"] !== null) {
            $this->CSPMNum = $param["CSPMNum"];
        }

        if (array_key_exists("UsedCount",$param) and $param["UsedCount"] !== null) {
            $this->UsedCount = $param["UsedCount"];
        }

        if (array_key_exists("GrantedCSPMNum",$param) and $param["GrantedCSPMNum"] !== null) {
            $this->GrantedCSPMNum = $param["GrantedCSPMNum"];
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

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = $param["Department"];
        }
    }
}
