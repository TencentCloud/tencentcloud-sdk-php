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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调用记录详情
 *
 * @method string getCallID() 获取调用记录ID
 * @method void setCallID(string $CallID) 设置调用记录ID
 * @method string getAccessKey() 获取访问密钥
 * @method void setAccessKey(string $AccessKey) 设置访问密钥
 * @method string getAccessKeyRemark() 获取访问密钥备注
 * @method void setAccessKeyRemark(string $AccessKeyRemark) 设置访问密钥备注
 * @method integer getAccessKeyID() 获取访问密钥ID
 * @method void setAccessKeyID(integer $AccessKeyID) 设置访问密钥ID
 * @method string getSourceIP() 获取调用源IP
 * @method void setSourceIP(string $SourceIP) 设置调用源IP
 * @method string getSourceIPRemark() 获取调用源IP备注
 * @method void setSourceIPRemark(string $SourceIPRemark) 设置调用源IP备注
 * @method string getRegion() 获取调用源IP地域
 * @method void setRegion(string $Region) 设置调用源IP地域
 * @method integer getIPType() 获取IP类型 0:账号内（未备注） 1:账号外（未备注） 2:账号内 (已备注) 3:账号外 (已备注)
 * @method void setIPType(integer $IPType) 设置IP类型 0:账号内（未备注） 1:账号外（未备注） 2:账号内 (已备注) 3:账号外 (已备注)
 * @method string getEventName() 获取调用接口名称
 * @method void setEventName(string $EventName) 设置调用接口名称
 * @method string getProductName() 获取调用产品名称
 * @method void setProductName(string $ProductName) 设置调用产品名称
 * @method integer getEventType() 获取调用类型
0:控制台调用
1:API
 * @method void setEventType(integer $EventType) 设置调用类型
0:控制台调用
1:API
 * @method string getUserType() 获取用户类型
CAMUser/root/AssumedRole

 * @method void setUserType(string $UserType) 设置用户类型
CAMUser/root/AssumedRole

 * @method string getUserName() 获取用户/角色名称
 * @method void setUserName(string $UserName) 设置用户/角色名称
 * @method array getPolicySet() 获取策略列表
 * @method void setPolicySet(array $PolicySet) 设置策略列表
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
 * @method string getInstanceID() 获取IP关联资产ID，如果为空字符串，表示没有关联
 * @method void setInstanceID(string $InstanceID) 设置IP关联资产ID，如果为空字符串，表示没有关联
 * @method string getInstanceName() 获取IP关联资产名称
 * @method void setInstanceName(string $InstanceName) 设置IP关联资产名称
 * @method string getDate() 获取聚合日期
 * @method void setDate(string $Date) 设置聚合日期
 * @method integer getAppID() 获取appid
 * @method void setAppID(integer $AppID) 设置appid
 * @method boolean getShowStatus() 获取展示状态
 * @method void setShowStatus(boolean $ShowStatus) 设置展示状态
 * @method string getISP() 获取运营商
 * @method void setISP(string $ISP) 设置运营商
 */
class CallRecord extends AbstractModel
{
    /**
     * @var string 调用记录ID
     */
    public $CallID;

    /**
     * @var string 访问密钥
     */
    public $AccessKey;

    /**
     * @var string 访问密钥备注
     */
    public $AccessKeyRemark;

    /**
     * @var integer 访问密钥ID
     */
    public $AccessKeyID;

    /**
     * @var string 调用源IP
     */
    public $SourceIP;

    /**
     * @var string 调用源IP备注
     */
    public $SourceIPRemark;

    /**
     * @var string 调用源IP地域
     */
    public $Region;

    /**
     * @var integer IP类型 0:账号内（未备注） 1:账号外（未备注） 2:账号内 (已备注) 3:账号外 (已备注)
     */
    public $IPType;

    /**
     * @var string 调用接口名称
     */
    public $EventName;

    /**
     * @var string 调用产品名称
     */
    public $ProductName;

    /**
     * @var integer 调用类型
0:控制台调用
1:API
     */
    public $EventType;

    /**
     * @var string 用户类型
CAMUser/root/AssumedRole

     */
    public $UserType;

    /**
     * @var string 用户/角色名称
     */
    public $UserName;

    /**
     * @var array 策略列表
     */
    public $PolicySet;

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
     * @var string IP关联资产ID，如果为空字符串，表示没有关联
     */
    public $InstanceID;

    /**
     * @var string IP关联资产名称
     */
    public $InstanceName;

    /**
     * @var string 聚合日期
     */
    public $Date;

    /**
     * @var integer appid
     */
    public $AppID;

    /**
     * @var boolean 展示状态
     */
    public $ShowStatus;

    /**
     * @var string 运营商
     */
    public $ISP;

    /**
     * @param string $CallID 调用记录ID
     * @param string $AccessKey 访问密钥
     * @param string $AccessKeyRemark 访问密钥备注
     * @param integer $AccessKeyID 访问密钥ID
     * @param string $SourceIP 调用源IP
     * @param string $SourceIPRemark 调用源IP备注
     * @param string $Region 调用源IP地域
     * @param integer $IPType IP类型 0:账号内（未备注） 1:账号外（未备注） 2:账号内 (已备注) 3:账号外 (已备注)
     * @param string $EventName 调用接口名称
     * @param string $ProductName 调用产品名称
     * @param integer $EventType 调用类型
0:控制台调用
1:API
     * @param string $UserType 用户类型
CAMUser/root/AssumedRole

     * @param string $UserName 用户/角色名称
     * @param array $PolicySet 策略列表
     * @param integer $CallCount 调用次数
     * @param integer $Code 调用错误码
0表示成功
     * @param string $FirstCallTime 首次调用时间
     * @param string $LastCallTime 最后调用时间
     * @param string $InstanceID IP关联资产ID，如果为空字符串，表示没有关联
     * @param string $InstanceName IP关联资产名称
     * @param string $Date 聚合日期
     * @param integer $AppID appid
     * @param boolean $ShowStatus 展示状态
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
        if (array_key_exists("CallID",$param) and $param["CallID"] !== null) {
            $this->CallID = $param["CallID"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("AccessKeyRemark",$param) and $param["AccessKeyRemark"] !== null) {
            $this->AccessKeyRemark = $param["AccessKeyRemark"];
        }

        if (array_key_exists("AccessKeyID",$param) and $param["AccessKeyID"] !== null) {
            $this->AccessKeyID = $param["AccessKeyID"];
        }

        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }

        if (array_key_exists("SourceIPRemark",$param) and $param["SourceIPRemark"] !== null) {
            $this->SourceIPRemark = $param["SourceIPRemark"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("IPType",$param) and $param["IPType"] !== null) {
            $this->IPType = $param["IPType"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PolicySet",$param) and $param["PolicySet"] !== null) {
            $this->PolicySet = $param["PolicySet"];
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

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ShowStatus",$param) and $param["ShowStatus"] !== null) {
            $this->ShowStatus = $param["ShowStatus"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }
    }
}
