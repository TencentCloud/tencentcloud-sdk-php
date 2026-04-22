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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmNotice请求参数结构体
 *
 * @method string getModule() 获取<p>模块名，这里填“monitor”</p>
 * @method void setModule(string $Module) 设置<p>模块名，这里填“monitor”</p>
 * @method string getName() 获取<p>告警通知规则名称 60字符以内</p>
 * @method void setName(string $Name) 设置<p>告警通知规则名称 60字符以内</p>
 * @method string getNoticeType() 获取<p>通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=都通知</p>
 * @method void setNoticeType(string $NoticeType) 设置<p>通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=都通知</p>
 * @method string getNoticeLanguage() 获取<p>通知语言 zh-CN=中文 en-US=英文</p>
 * @method void setNoticeLanguage(string $NoticeLanguage) 设置<p>通知语言 zh-CN=中文 en-US=英文</p>
 * @method string getNoticeId() 获取<p>告警通知模板 ID</p>
 * @method void setNoticeId(string $NoticeId) 设置<p>告警通知模板 ID</p>
 * @method array getUserNotices() 获取<p>用户通知 最多5个</p>
 * @method void setUserNotices(array $UserNotices) 设置<p>用户通知 最多5个</p>
 * @method array getURLNotices() 获取<p>回调通知 最多6个</p>
 * @method void setURLNotices(array $URLNotices) 设置<p>回调通知 最多6个</p>
 * @method array getCLSNotices() 获取<p>告警通知推送到CLS服务 最多1个</p>
 * @method void setCLSNotices(array $CLSNotices) 设置<p>告警通知推送到CLS服务 最多1个</p>
 * @method array getPolicyIds() 获取<p>告警通知模板绑定的告警策略ID列表</p>
 * @method void setPolicyIds(array $PolicyIds) 设置<p>告警通知模板绑定的告警策略ID列表</p>
 * @method integer getIsLoginFree() 获取<p>是否免登录，0-否，1-是</p>
 * @method void setIsLoginFree(integer $IsLoginFree) 设置<p>是否免登录，0-否，1-是</p>
 * @method string getTimeZoneName() 获取<p>IANA 时区名</p>
 * @method void setTimeZoneName(string $TimeZoneName) 设置<p>IANA 时区名</p>
 */
class ModifyAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string <p>模块名，这里填“monitor”</p>
     */
    public $Module;

    /**
     * @var string <p>告警通知规则名称 60字符以内</p>
     */
    public $Name;

    /**
     * @var string <p>通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=都通知</p>
     */
    public $NoticeType;

    /**
     * @var string <p>通知语言 zh-CN=中文 en-US=英文</p>
     */
    public $NoticeLanguage;

    /**
     * @var string <p>告警通知模板 ID</p>
     */
    public $NoticeId;

    /**
     * @var array <p>用户通知 最多5个</p>
     */
    public $UserNotices;

    /**
     * @var array <p>回调通知 最多6个</p>
     */
    public $URLNotices;

    /**
     * @var array <p>告警通知推送到CLS服务 最多1个</p>
     */
    public $CLSNotices;

    /**
     * @var array <p>告警通知模板绑定的告警策略ID列表</p>
     */
    public $PolicyIds;

    /**
     * @var integer <p>是否免登录，0-否，1-是</p>
     */
    public $IsLoginFree;

    /**
     * @var string <p>IANA 时区名</p>
     */
    public $TimeZoneName;

    /**
     * @param string $Module <p>模块名，这里填“monitor”</p>
     * @param string $Name <p>告警通知规则名称 60字符以内</p>
     * @param string $NoticeType <p>通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=都通知</p>
     * @param string $NoticeLanguage <p>通知语言 zh-CN=中文 en-US=英文</p>
     * @param string $NoticeId <p>告警通知模板 ID</p>
     * @param array $UserNotices <p>用户通知 最多5个</p>
     * @param array $URLNotices <p>回调通知 最多6个</p>
     * @param array $CLSNotices <p>告警通知推送到CLS服务 最多1个</p>
     * @param array $PolicyIds <p>告警通知模板绑定的告警策略ID列表</p>
     * @param integer $IsLoginFree <p>是否免登录，0-否，1-是</p>
     * @param string $TimeZoneName <p>IANA 时区名</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NoticeType",$param) and $param["NoticeType"] !== null) {
            $this->NoticeType = $param["NoticeType"];
        }

        if (array_key_exists("NoticeLanguage",$param) and $param["NoticeLanguage"] !== null) {
            $this->NoticeLanguage = $param["NoticeLanguage"];
        }

        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("UserNotices",$param) and $param["UserNotices"] !== null) {
            $this->UserNotices = [];
            foreach ($param["UserNotices"] as $key => $value){
                $obj = new UserNotice();
                $obj->deserialize($value);
                array_push($this->UserNotices, $obj);
            }
        }

        if (array_key_exists("URLNotices",$param) and $param["URLNotices"] !== null) {
            $this->URLNotices = [];
            foreach ($param["URLNotices"] as $key => $value){
                $obj = new URLNotice();
                $obj->deserialize($value);
                array_push($this->URLNotices, $obj);
            }
        }

        if (array_key_exists("CLSNotices",$param) and $param["CLSNotices"] !== null) {
            $this->CLSNotices = [];
            foreach ($param["CLSNotices"] as $key => $value){
                $obj = new CLSNotice();
                $obj->deserialize($value);
                array_push($this->CLSNotices, $obj);
            }
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("IsLoginFree",$param) and $param["IsLoginFree"] !== null) {
            $this->IsLoginFree = $param["IsLoginFree"];
        }

        if (array_key_exists("TimeZoneName",$param) and $param["TimeZoneName"] !== null) {
            $this->TimeZoneName = $param["TimeZoneName"];
        }
    }
}
