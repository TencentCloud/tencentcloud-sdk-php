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
 * 访问密钥资产信息（源IP角度）
 *
 * @method integer getID() 获取源IP id
 * @method void setID(integer $ID) 设置源IP id
 * @method string getSourceIP() 获取源IP
 * @method void setSourceIP(string $SourceIP) 设置源IP
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getAppID() 获取账号所属APPID
 * @method void setAppID(integer $AppID) 设置账号所属APPID
 * @method string getRegion() 获取IP地域
 * @method void setRegion(string $Region) 设置IP地域
 * @method integer getEventType() 获取调用方式
-1:未统计
0:控制台调用
1:API
 * @method void setEventType(integer $EventType) 设置调用方式
-1:未统计
0:控制台调用
1:API
 * @method integer getIPType() 获取IP类型
0:账号内（未备注）
1:账号外（未备注）
2:账号内   (已备注)
3:账号外   (已备注)
 * @method void setIPType(integer $IPType) 设置IP类型
0:账号内（未备注）
1:账号外（未备注）
2:账号内   (已备注)
3:账号外   (已备注)
 * @method array getAccessKeyAlarmList() 获取告警信息列表
 * @method void setAccessKeyAlarmList(array $AccessKeyAlarmList) 设置告警信息列表
 * @method array getAKInfo() 获取ak信息列表
 * @method void setAKInfo(array $AKInfo) 设置ak信息列表
 * @method integer getActionCount() 获取调用接口数量
 * @method void setActionCount(integer $ActionCount) 设置调用接口数量
 * @method string getLastAccessTime() 获取最近访问时间
 * @method void setLastAccessTime(string $LastAccessTime) 设置最近访问时间
 * @method string getInstanceID() 获取IP关联实例ID，如果为空字符串，代表非账号内资产
 * @method void setInstanceID(string $InstanceID) 设置IP关联实例ID，如果为空字符串，代表非账号内资产
 * @method string getInstanceName() 获取IP关联实例名称
 * @method void setInstanceName(string $InstanceName) 设置IP关联实例名称
 * @method string getUin() 获取账号所属Uin
 * @method void setUin(string $Uin) 设置账号所属Uin
 * @method string getNickname() 获取昵称
 * @method void setNickname(string $Nickname) 设置昵称
 * @method boolean getShowStatus() 获取展示状态
 * @method void setShowStatus(boolean $ShowStatus) 设置展示状态
 * @method string getISP() 获取运营商字段
 * @method void setISP(string $ISP) 设置运营商字段
 * @method array getVpcInfo() 获取账号外vpc信息
 * @method void setVpcInfo(array $VpcInfo) 设置账号外vpc信息
 * @method integer getCloudType() 获取云类型
0为腾讯云
 * @method void setCloudType(integer $CloudType) 设置云类型
0为腾讯云
 */
class SourceIPAsset extends AbstractModel
{
    /**
     * @var integer 源IP id
     */
    public $ID;

    /**
     * @var string 源IP
     */
    public $SourceIP;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 账号所属APPID
     */
    public $AppID;

    /**
     * @var string IP地域
     */
    public $Region;

    /**
     * @var integer 调用方式
-1:未统计
0:控制台调用
1:API
     */
    public $EventType;

    /**
     * @var integer IP类型
0:账号内（未备注）
1:账号外（未备注）
2:账号内   (已备注)
3:账号外   (已备注)
     */
    public $IPType;

    /**
     * @var array 告警信息列表
     */
    public $AccessKeyAlarmList;

    /**
     * @var array ak信息列表
     */
    public $AKInfo;

    /**
     * @var integer 调用接口数量
     */
    public $ActionCount;

    /**
     * @var string 最近访问时间
     */
    public $LastAccessTime;

    /**
     * @var string IP关联实例ID，如果为空字符串，代表非账号内资产
     */
    public $InstanceID;

    /**
     * @var string IP关联实例名称
     */
    public $InstanceName;

    /**
     * @var string 账号所属Uin
     */
    public $Uin;

    /**
     * @var string 昵称
     */
    public $Nickname;

    /**
     * @var boolean 展示状态
     */
    public $ShowStatus;

    /**
     * @var string 运营商字段
     */
    public $ISP;

    /**
     * @var array 账号外vpc信息
     */
    public $VpcInfo;

    /**
     * @var integer 云类型
0为腾讯云
     */
    public $CloudType;

    /**
     * @param integer $ID 源IP id
     * @param string $SourceIP 源IP
     * @param string $Remark 备注
     * @param integer $AppID 账号所属APPID
     * @param string $Region IP地域
     * @param integer $EventType 调用方式
-1:未统计
0:控制台调用
1:API
     * @param integer $IPType IP类型
0:账号内（未备注）
1:账号外（未备注）
2:账号内   (已备注)
3:账号外   (已备注)
     * @param array $AccessKeyAlarmList 告警信息列表
     * @param array $AKInfo ak信息列表
     * @param integer $ActionCount 调用接口数量
     * @param string $LastAccessTime 最近访问时间
     * @param string $InstanceID IP关联实例ID，如果为空字符串，代表非账号内资产
     * @param string $InstanceName IP关联实例名称
     * @param string $Uin 账号所属Uin
     * @param string $Nickname 昵称
     * @param boolean $ShowStatus 展示状态
     * @param string $ISP 运营商字段
     * @param array $VpcInfo 账号外vpc信息
     * @param integer $CloudType 云类型
0为腾讯云
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("IPType",$param) and $param["IPType"] !== null) {
            $this->IPType = $param["IPType"];
        }

        if (array_key_exists("AccessKeyAlarmList",$param) and $param["AccessKeyAlarmList"] !== null) {
            $this->AccessKeyAlarmList = [];
            foreach ($param["AccessKeyAlarmList"] as $key => $value){
                $obj = new AccessKeyAlarmInfo();
                $obj->deserialize($value);
                array_push($this->AccessKeyAlarmList, $obj);
            }
        }

        if (array_key_exists("AKInfo",$param) and $param["AKInfo"] !== null) {
            $this->AKInfo = [];
            foreach ($param["AKInfo"] as $key => $value){
                $obj = new AKInfo();
                $obj->deserialize($value);
                array_push($this->AKInfo, $obj);
            }
        }

        if (array_key_exists("ActionCount",$param) and $param["ActionCount"] !== null) {
            $this->ActionCount = $param["ActionCount"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("ShowStatus",$param) and $param["ShowStatus"] !== null) {
            $this->ShowStatus = $param["ShowStatus"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = [];
            foreach ($param["VpcInfo"] as $key => $value){
                $obj = new SourceIPVpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfo, $obj);
            }
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
