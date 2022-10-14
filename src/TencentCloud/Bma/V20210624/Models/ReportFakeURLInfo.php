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
 * @method integer getFakeURLId() 获取仿冒网址ID
 * @method void setFakeURLId(integer $FakeURLId) 设置仿冒网址ID
 * @method string getDetectTime() 获取检测时间
 * @method void setDetectTime(string $DetectTime) 设置检测时间
 * @method string getProtectURL() 获取保护网站
 * @method void setProtectURL(string $ProtectURL) 设置保护网站
 * @method string getProtectWeb() 获取保护网站名称
 * @method void setProtectWeb(string $ProtectWeb) 设置保护网站名称
 * @method string getFakeURL() 获取仿冒网址
 * @method void setFakeURL(string $FakeURL) 设置仿冒网址
 * @method string getSnapshot() 获取截图
 * @method void setSnapshot(string $Snapshot) 设置截图
 * @method string getIP() 获取IP地址
 * @method void setIP(string $IP) 设置IP地址
 * @method string getIPLoc() 获取IP地理位置
 * @method void setIPLoc(string $IPLoc) 设置IP地理位置
 * @method integer getHeat() 获取热度
 * @method void setHeat(integer $Heat) 设置热度
 * @method integer getStatus() 获取网站状态
 * @method void setStatus(integer $Status) 设置网站状态
 * @method string getNote() 获取网站不处理原因
 * @method void setNote(string $Note) 设置网站不处理原因
 * @method string getFakeURLCompany() 获取仿冒网站的企业名称
 * @method void setFakeURLCompany(string $FakeURLCompany) 设置仿冒网站的企业名称
 * @method string getFakeURLAttr() 获取仿冒网站的网站性质
 * @method void setFakeURLAttr(string $FakeURLAttr) 设置仿冒网站的网站性质
 * @method string getFakeURLName() 获取仿冒网站的网站名称
 * @method void setFakeURLName(string $FakeURLName) 设置仿冒网站的网站名称
 * @method string getFakeURLICP() 获取仿冒网站的备案
 * @method void setFakeURLICP(string $FakeURLICP) 设置仿冒网站的备案
 * @method string getFakeURLCreateTime() 获取仿冒网站创建时间
 * @method void setFakeURLCreateTime(string $FakeURLCreateTime) 设置仿冒网站创建时间
 * @method string getFakeURLExpireTime() 获取仿冒网站过期时间
 * @method void setFakeURLExpireTime(string $FakeURLExpireTime) 设置仿冒网站过期时间
 * @method string getBlockTime() 获取协查处置时间
 * @method void setBlockTime(string $BlockTime) 设置协查处置时间
 */
class ReportFakeURLInfo extends AbstractModel
{
    /**
     * @var integer 仿冒网址ID
     */
    public $FakeURLId;

    /**
     * @var string 检测时间
     */
    public $DetectTime;

    /**
     * @var string 保护网站
     */
    public $ProtectURL;

    /**
     * @var string 保护网站名称
     */
    public $ProtectWeb;

    /**
     * @var string 仿冒网址
     */
    public $FakeURL;

    /**
     * @var string 截图
     */
    public $Snapshot;

    /**
     * @var string IP地址
     */
    public $IP;

    /**
     * @var string IP地理位置
     */
    public $IPLoc;

    /**
     * @var integer 热度
     */
    public $Heat;

    /**
     * @var integer 网站状态
     */
    public $Status;

    /**
     * @var string 网站不处理原因
     */
    public $Note;

    /**
     * @var string 仿冒网站的企业名称
     */
    public $FakeURLCompany;

    /**
     * @var string 仿冒网站的网站性质
     */
    public $FakeURLAttr;

    /**
     * @var string 仿冒网站的网站名称
     */
    public $FakeURLName;

    /**
     * @var string 仿冒网站的备案
     */
    public $FakeURLICP;

    /**
     * @var string 仿冒网站创建时间
     */
    public $FakeURLCreateTime;

    /**
     * @var string 仿冒网站过期时间
     */
    public $FakeURLExpireTime;

    /**
     * @var string 协查处置时间
     */
    public $BlockTime;

    /**
     * @param integer $FakeURLId 仿冒网址ID
     * @param string $DetectTime 检测时间
     * @param string $ProtectURL 保护网站
     * @param string $ProtectWeb 保护网站名称
     * @param string $FakeURL 仿冒网址
     * @param string $Snapshot 截图
     * @param string $IP IP地址
     * @param string $IPLoc IP地理位置
     * @param integer $Heat 热度
     * @param integer $Status 网站状态
     * @param string $Note 网站不处理原因
     * @param string $FakeURLCompany 仿冒网站的企业名称
     * @param string $FakeURLAttr 仿冒网站的网站性质
     * @param string $FakeURLName 仿冒网站的网站名称
     * @param string $FakeURLICP 仿冒网站的备案
     * @param string $FakeURLCreateTime 仿冒网站创建时间
     * @param string $FakeURLExpireTime 仿冒网站过期时间
     * @param string $BlockTime 协查处置时间
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
