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
 * Dspm访问记录
 *
 * @method DspmDbAsset getAsset() 获取资产信息
 * @method void setAsset(DspmDbAsset $Asset) 设置资产信息
 * @method array getAccounts() 获取账号
 * @method void setAccounts(array $Accounts) 设置账号
 * @method array getSourceIpList() 获取来源ip信息
 * @method void setSourceIpList(array $SourceIpList) 设置来源ip信息
 * @method string getRecordTime() 获取记录时间
 * @method void setRecordTime(string $RecordTime) 设置记录时间
 * @method integer getLoginSuccessCount() 获取登录成功次数
 * @method void setLoginSuccessCount(integer $LoginSuccessCount) 设置登录成功次数
 * @method integer getLoginFailedCount() 获取登录失败次数
 * @method void setLoginFailedCount(integer $LoginFailedCount) 设置登录失败次数
 */
class DspmAccessRecord extends AbstractModel
{
    /**
     * @var DspmDbAsset 资产信息
     */
    public $Asset;

    /**
     * @var array 账号
     */
    public $Accounts;

    /**
     * @var array 来源ip信息
     */
    public $SourceIpList;

    /**
     * @var string 记录时间
     */
    public $RecordTime;

    /**
     * @var integer 登录成功次数
     */
    public $LoginSuccessCount;

    /**
     * @var integer 登录失败次数
     */
    public $LoginFailedCount;

    /**
     * @param DspmDbAsset $Asset 资产信息
     * @param array $Accounts 账号
     * @param array $SourceIpList 来源ip信息
     * @param string $RecordTime 记录时间
     * @param integer $LoginSuccessCount 登录成功次数
     * @param integer $LoginFailedCount 登录失败次数
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
        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = new DspmDbAsset();
            $this->Asset->deserialize($param["Asset"]);
        }

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new DspmAssetAccount();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("SourceIpList",$param) and $param["SourceIpList"] !== null) {
            $this->SourceIpList = [];
            foreach ($param["SourceIpList"] as $key => $value){
                $obj = new DspmIp();
                $obj->deserialize($value);
                array_push($this->SourceIpList, $obj);
            }
        }

        if (array_key_exists("RecordTime",$param) and $param["RecordTime"] !== null) {
            $this->RecordTime = $param["RecordTime"];
        }

        if (array_key_exists("LoginSuccessCount",$param) and $param["LoginSuccessCount"] !== null) {
            $this->LoginSuccessCount = $param["LoginSuccessCount"];
        }

        if (array_key_exists("LoginFailedCount",$param) and $param["LoginFailedCount"] !== null) {
            $this->LoginFailedCount = $param["LoginFailedCount"];
        }
    }
}
