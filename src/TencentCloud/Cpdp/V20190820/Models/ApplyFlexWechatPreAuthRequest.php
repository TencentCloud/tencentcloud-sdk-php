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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyFlexWechatPreAuth请求参数结构体
 *
 * @method string getAuthNo() 获取商家核身单号
 * @method void setAuthNo(string $AuthNo) 设置商家核身单号
 * @method string getOpenId() 获取微信用户标识
 * @method void setOpenId(string $OpenId) 设置微信用户标识
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getEmployerName() 获取用工单位名称
 * @method void setEmployerName(string $EmployerName) 设置用工单位名称
 * @method string getUserName() 获取用户姓名
 * @method void setUserName(string $UserName) 设置用户姓名
 * @method string getIdNo() 获取用户证件号
 * @method void setIdNo(string $IdNo) 设置用户证件号
 * @method string getEmploymentType() 获取用工类型
LONG_TERM_EMPLOYMENT：长期用工，
SHORT_TERM_EMPLOYMENT： 短期用工，
COOPERATION_EMPLOYMENT：合作关系
 * @method void setEmploymentType(string $EmploymentType) 设置用工类型
LONG_TERM_EMPLOYMENT：长期用工，
SHORT_TERM_EMPLOYMENT： 短期用工，
COOPERATION_EMPLOYMENT：合作关系
 * @method string getAuthType() 获取核身类型
SIGN_IN：考勤、签到打卡类型
INSURANCE：投保类型
CONTRACT：签约类型
 * @method void setAuthType(string $AuthType) 设置核身类型
SIGN_IN：考勤、签到打卡类型
INSURANCE：投保类型
CONTRACT：签约类型
 * @method string getEnvironment() 获取环境类型
test 测试
release 生产
sandbox 沙箱
 * @method void setEnvironment(string $Environment) 设置环境类型
test 测试
release 生产
sandbox 沙箱
 */
class ApplyFlexWechatPreAuthRequest extends AbstractModel
{
    /**
     * @var string 商家核身单号
     */
    public $AuthNo;

    /**
     * @var string 微信用户标识
     */
    public $OpenId;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var string 用工单位名称
     */
    public $EmployerName;

    /**
     * @var string 用户姓名
     */
    public $UserName;

    /**
     * @var string 用户证件号
     */
    public $IdNo;

    /**
     * @var string 用工类型
LONG_TERM_EMPLOYMENT：长期用工，
SHORT_TERM_EMPLOYMENT： 短期用工，
COOPERATION_EMPLOYMENT：合作关系
     */
    public $EmploymentType;

    /**
     * @var string 核身类型
SIGN_IN：考勤、签到打卡类型
INSURANCE：投保类型
CONTRACT：签约类型
     */
    public $AuthType;

    /**
     * @var string 环境类型
test 测试
release 生产
sandbox 沙箱
     */
    public $Environment;

    /**
     * @param string $AuthNo 商家核身单号
     * @param string $OpenId 微信用户标识
     * @param string $ProjectName 项目名称
     * @param string $EmployerName 用工单位名称
     * @param string $UserName 用户姓名
     * @param string $IdNo 用户证件号
     * @param string $EmploymentType 用工类型
LONG_TERM_EMPLOYMENT：长期用工，
SHORT_TERM_EMPLOYMENT： 短期用工，
COOPERATION_EMPLOYMENT：合作关系
     * @param string $AuthType 核身类型
SIGN_IN：考勤、签到打卡类型
INSURANCE：投保类型
CONTRACT：签约类型
     * @param string $Environment 环境类型
test 测试
release 生产
sandbox 沙箱
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
        if (array_key_exists("AuthNo",$param) and $param["AuthNo"] !== null) {
            $this->AuthNo = $param["AuthNo"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("EmployerName",$param) and $param["EmployerName"] !== null) {
            $this->EmployerName = $param["EmployerName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("IdNo",$param) and $param["IdNo"] !== null) {
            $this->IdNo = $param["IdNo"];
        }

        if (array_key_exists("EmploymentType",$param) and $param["EmploymentType"] !== null) {
            $this->EmploymentType = $param["EmploymentType"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
