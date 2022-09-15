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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 举报网址信息
 *
 * @method integer getFakeURLId() 获取xxx
 * @method void setFakeURLId(integer $FakeURLId) 设置xxx
 * @method string getDetectTime() 获取xxx
 * @method void setDetectTime(string $DetectTime) 设置xxx
 * @method string getProtectURL() 获取xxx
 * @method void setProtectURL(string $ProtectURL) 设置xxx
 * @method string getProtectWeb() 获取xxx
 * @method void setProtectWeb(string $ProtectWeb) 设置xxx
 * @method string getFakeURL() 获取xxx
 * @method void setFakeURL(string $FakeURL) 设置xxx
 * @method string getSnapshot() 获取xxx
 * @method void setSnapshot(string $Snapshot) 设置xxx
 * @method string getIP() 获取xxx
 * @method void setIP(string $IP) 设置xxx
 * @method string getIPLoc() 获取xxx
 * @method void setIPLoc(string $IPLoc) 设置xxx
 * @method integer getHeat() 获取xxx
 * @method void setHeat(integer $Heat) 设置xxx
 * @method integer getStatus() 获取xxx
 * @method void setStatus(integer $Status) 设置xxx
 * @method string getNote() 获取xxx
 * @method void setNote(string $Note) 设置xxx
 * @method string getFakeURLCompany() 获取xxx
 * @method void setFakeURLCompany(string $FakeURLCompany) 设置xxx
 * @method string getFakeURLAttr() 获取xxx
 * @method void setFakeURLAttr(string $FakeURLAttr) 设置xxx
 * @method string getFakeURLName() 获取xxx
 * @method void setFakeURLName(string $FakeURLName) 设置xxx
 * @method string getFakeURLICP() 获取xxx
 * @method void setFakeURLICP(string $FakeURLICP) 设置xxx
 * @method string getFakeURLCreateTime() 获取xxx
 * @method void setFakeURLCreateTime(string $FakeURLCreateTime) 设置xxx
 * @method string getFakeURLExpireTime() 获取xxx
 * @method void setFakeURLExpireTime(string $FakeURLExpireTime) 设置xxx
 * @method string getBlockTime() 获取xxx
 * @method void setBlockTime(string $BlockTime) 设置xxx
 */
class ReportFakeURLInfo extends AbstractModel
{
    /**
     * @var integer xxx
     */
    public $FakeURLId;

    /**
     * @var string xxx
     */
    public $DetectTime;

    /**
     * @var string xxx
     */
    public $ProtectURL;

    /**
     * @var string xxx
     */
    public $ProtectWeb;

    /**
     * @var string xxx
     */
    public $FakeURL;

    /**
     * @var string xxx
     */
    public $Snapshot;

    /**
     * @var string xxx
     */
    public $IP;

    /**
     * @var string xxx
     */
    public $IPLoc;

    /**
     * @var integer xxx
     */
    public $Heat;

    /**
     * @var integer xxx
     */
    public $Status;

    /**
     * @var string xxx
     */
    public $Note;

    /**
     * @var string xxx
     */
    public $FakeURLCompany;

    /**
     * @var string xxx
     */
    public $FakeURLAttr;

    /**
     * @var string xxx
     */
    public $FakeURLName;

    /**
     * @var string xxx
     */
    public $FakeURLICP;

    /**
     * @var string xxx
     */
    public $FakeURLCreateTime;

    /**
     * @var string xxx
     */
    public $FakeURLExpireTime;

    /**
     * @var string xxx
     */
    public $BlockTime;

    /**
     * @param integer $FakeURLId xxx
     * @param string $DetectTime xxx
     * @param string $ProtectURL xxx
     * @param string $ProtectWeb xxx
     * @param string $FakeURL xxx
     * @param string $Snapshot xxx
     * @param string $IP xxx
     * @param string $IPLoc xxx
     * @param integer $Heat xxx
     * @param integer $Status xxx
     * @param string $Note xxx
     * @param string $FakeURLCompany xxx
     * @param string $FakeURLAttr xxx
     * @param string $FakeURLName xxx
     * @param string $FakeURLICP xxx
     * @param string $FakeURLCreateTime xxx
     * @param string $FakeURLExpireTime xxx
     * @param string $BlockTime xxx
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
        if (array_key_exists("FakeURLId",$param) and $param["FakeURLId"] !== null) {
            $this->FakeURLId = $param["FakeURLId"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("ProtectURL",$param) and $param["ProtectURL"] !== null) {
            $this->ProtectURL = $param["ProtectURL"];
        }

        if (array_key_exists("ProtectWeb",$param) and $param["ProtectWeb"] !== null) {
            $this->ProtectWeb = $param["ProtectWeb"];
        }

        if (array_key_exists("FakeURL",$param) and $param["FakeURL"] !== null) {
            $this->FakeURL = $param["FakeURL"];
        }

        if (array_key_exists("Snapshot",$param) and $param["Snapshot"] !== null) {
            $this->Snapshot = $param["Snapshot"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("IPLoc",$param) and $param["IPLoc"] !== null) {
            $this->IPLoc = $param["IPLoc"];
        }

        if (array_key_exists("Heat",$param) and $param["Heat"] !== null) {
            $this->Heat = $param["Heat"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("FakeURLCompany",$param) and $param["FakeURLCompany"] !== null) {
            $this->FakeURLCompany = $param["FakeURLCompany"];
        }

        if (array_key_exists("FakeURLAttr",$param) and $param["FakeURLAttr"] !== null) {
            $this->FakeURLAttr = $param["FakeURLAttr"];
        }

        if (array_key_exists("FakeURLName",$param) and $param["FakeURLName"] !== null) {
            $this->FakeURLName = $param["FakeURLName"];
        }

        if (array_key_exists("FakeURLICP",$param) and $param["FakeURLICP"] !== null) {
            $this->FakeURLICP = $param["FakeURLICP"];
        }

        if (array_key_exists("FakeURLCreateTime",$param) and $param["FakeURLCreateTime"] !== null) {
            $this->FakeURLCreateTime = $param["FakeURLCreateTime"];
        }

        if (array_key_exists("FakeURLExpireTime",$param) and $param["FakeURLExpireTime"] !== null) {
            $this->FakeURLExpireTime = $param["FakeURLExpireTime"];
        }

        if (array_key_exists("BlockTime",$param) and $param["BlockTime"] !== null) {
            $this->BlockTime = $param["BlockTime"];
        }
    }
}
