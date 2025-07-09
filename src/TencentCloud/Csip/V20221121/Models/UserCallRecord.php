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
 * 调用记录详情
 *
 * @method string getSourceIP() 获取调用源IP
 * @method void setSourceIP(string $SourceIP) 设置调用源IP
 * @method integer getEventType() 获取调用类型
0:控制台调用
1:API
 * @method void setEventType(integer $EventType) 设置调用类型
0:控制台调用
1:API
 * @method integer getCallCount() 获取调用次数
 * @method void setCallCount(integer $CallCount) 设置调用次数
 * @method integer getCode() 获取调用错误码
0表示成功
 * @method void setCode(integer $Code) 设置调用错误码
0表示成功
 * @method string getFirstCallTime() 获取首次调用时间
 * @method void setFirstCallTime(string $FirstCallTime) 设置首次调用时间
 * @method string getLastCallTime() 获取最后调用时间
 * @method void setLastCallTime(string $LastCallTime) 设置最后调用时间
 * @method string getSourceIPRemark() 获取调用源IP备注
 * @method void setSourceIPRemark(string $SourceIPRemark) 设置调用源IP备注
 * @method string getRegion() 获取调用源IP地域
 * @method void setRegion(string $Region) 设置调用源IP地域
 * @method string getUserName() 获取用户/角色名称
 * @method void setUserName(string $UserName) 设置用户/角色名称
 * @method string getDate() 获取聚合日期
 * @method void setDate(string $Date) 设置聚合日期
 * @method integer getAppID() 获取appid
 * @method void setAppID(integer $AppID) 设置appid
 * @method string getISP() 获取运营商
 * @method void setISP(string $ISP) 设置运营商
 */
class UserCallRecord extends AbstractModel
{
    /**
     * @var string 调用源IP
     */
    public $SourceIP;

    /**
     * @var integer 调用类型
0:控制台调用
1:API
     */
    public $EventType;

    /**
     * @var integer 调用次数
     */
    public $CallCount;

    /**
     * @var integer 调用错误码
0表示成功
     */
    public $Code;

    /**
     * @var string 首次调用时间
     */
    public $FirstCallTime;

    /**
     * @var string 最后调用时间
     */
    public $LastCallTime;

    /**
     * @var string 调用源IP备注
     */
    public $SourceIPRemark;

    /**
     * @var string 调用源IP地域
     */
    public $Region;

    /**
     * @var string 用户/角色名称
     */
    public $UserName;

    /**
     * @var string 聚合日期
     */
    public $Date;

    /**
     * @var integer appid
     */
    public $AppID;

    /**
     * @var string 运营商
     */
    public $ISP;

    /**
     * @param string $SourceIP 调用源IP
     * @param integer $EventType 调用类型
0:控制台调用
1:API
     * @param integer $CallCount 调用次数
     * @param integer $Code 调用错误码
0表示成功
     * @param string $FirstCallTime 首次调用时间
     * @param string $LastCallTime 最后调用时间
     * @param string $SourceIPRemark 调用源IP备注
     * @param string $Region 调用源IP地域
     * @param string $UserName 用户/角色名称
     * @param string $Date 聚合日期
     * @param integer $AppID appid
     * @param string $ISP 运营商
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
        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("FirstCallTime",$param) and $param["FirstCallTime"] !== null) {
            $this->FirstCallTime = $param["FirstCallTime"];
        }

        if (array_key_exists("LastCallTime",$param) and $param["LastCallTime"] !== null) {
            $this->LastCallTime = $param["LastCallTime"];
        }

        if (array_key_exists("SourceIPRemark",$param) and $param["SourceIPRemark"] !== null) {
            $this->SourceIPRemark = $param["SourceIPRemark"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }
    }
}
