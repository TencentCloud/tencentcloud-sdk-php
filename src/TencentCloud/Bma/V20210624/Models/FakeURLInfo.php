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
 * 仿冒网站信息
 *
 * @method integer getFakeURLId() 获取仿冒网址ID
 * @method void setFakeURLId(integer $FakeURLId) 设置仿冒网址ID
 * @method string getProtectWeb() 获取保护网站
 * @method void setProtectWeb(string $ProtectWeb) 设置保护网站
 * @method string getDetectTime() 获取检测时间
 * @method void setDetectTime(string $DetectTime) 设置检测时间
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
 * @method integer getStatus() 获取网址状态
 * @method void setStatus(integer $Status) 设置网址状态
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 * @method string getFakeURLCompany() 获取仿冒网站所属单位
 * @method void setFakeURLCompany(string $FakeURLCompany) 设置仿冒网站所属单位
 * @method string getFakeURLAttr() 获取仿冒网站性质
 * @method void setFakeURLAttr(string $FakeURLAttr) 设置仿冒网站性质
 * @method string getFakeURLName() 获取仿冒网站名称
 * @method void setFakeURLName(string $FakeURLName) 设置仿冒网站名称
 * @method string getFakeURLICP() 获取仿冒网站备案号
 * @method void setFakeURLICP(string $FakeURLICP) 设置仿冒网站备案号
 * @method string getFakeURLCreateTime() 获取仿冒网站创建时间
 * @method void setFakeURLCreateTime(string $FakeURLCreateTime) 设置仿冒网站创建时间
 * @method string getFakeURLExpireTime() 获取仿冒网站过期时间
 * @method void setFakeURLExpireTime(string $FakeURLExpireTime) 设置仿冒网站过期时间
 */
class FakeURLInfo extends AbstractModel
{
    /**
     * @var integer 仿冒网址ID
     */
    public $FakeURLId;

    /**
     * @var string 保护网站
     */
    public $ProtectWeb;

    /**
     * @var string 检测时间
     */
    public $DetectTime;

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
     * @var integer 网址状态
     */
    public $Status;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @var string 仿冒网站所属单位
     */
    public $FakeURLCompany;

    /**
     * @var string 仿冒网站性质
     */
    public $FakeURLAttr;

    /**
     * @var string 仿冒网站名称
     */
    public $FakeURLName;

    /**
     * @var string 仿冒网站备案号
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
     * @param integer $FakeURLId 仿冒网址ID
     * @param string $ProtectWeb 保护网站
     * @param string $DetectTime 检测时间
     * @param string $FakeURL 仿冒网址
     * @param string $Snapshot 截图
     * @param string $IP IP地址
     * @param string $IPLoc IP地理位置
     * @param integer $Heat 热度
     * @param integer $Status 网址状态
     * @param string $Note 备注
     * @param string $FakeURLCompany 仿冒网站所属单位
     * @param string $FakeURLAttr 仿冒网站性质
     * @param string $FakeURLName 仿冒网站名称
     * @param string $FakeURLICP 仿冒网站备案号
     * @param string $FakeURLCreateTime 仿冒网站创建时间
     * @param string $FakeURLExpireTime 仿冒网站过期时间
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

        if (array_key_exists("ProtectWeb",$param) and $param["ProtectWeb"] !== null) {
            $this->ProtectWeb = $param["ProtectWeb"];
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
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
    }
}
