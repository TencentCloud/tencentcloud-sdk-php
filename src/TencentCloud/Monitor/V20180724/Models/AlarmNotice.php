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
 * 告警通知模板详情
 *
 * @method string getId() 获取<p>告警通知模板 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置<p>告警通知模板 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>告警通知模板名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>告警通知模板名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取<p>上次修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>上次修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedBy() 获取<p>上次修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedBy(string $UpdatedBy) 设置<p>上次修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNoticeType() 获取<p>告警通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=全部通知</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeType(string $NoticeType) 设置<p>告警通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=全部通知</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserNotices() 获取<p>用户通知列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserNotices(array $UserNotices) 设置<p>用户通知列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getURLNotices() 获取<p>回调通知列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURLNotices(array $URLNotices) 设置<p>回调通知列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsPreset() 获取<p>是否是系统预设通知模板 0=否 1=是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPreset(integer $IsPreset) 设置<p>是否是系统预设通知模板 0=否 1=是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNoticeLanguage() 获取<p>通知语言 zh-CN=中文 en-US=英文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeLanguage(string $NoticeLanguage) 设置<p>通知语言 zh-CN=中文 en-US=英文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPolicyIds() 获取<p>告警通知模板绑定的告警策略ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyIds(array $PolicyIds) 设置<p>告警通知模板绑定的告警策略ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAMPConsumerId() 获取<p>后台 amp consumer id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAMPConsumerId(string $AMPConsumerId) 设置<p>后台 amp consumer id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCLSNotices() 获取<p>推送cls渠道</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLSNotices(array $CLSNotices) 设置<p>推送cls渠道</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>通知模板绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>通知模板绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsLoginFree() 获取<p>是否免登录，0-否，1-是</p>
 * @method void setIsLoginFree(integer $IsLoginFree) 设置<p>是否免登录，0-否，1-是</p>
 * @method string getTimeZoneName() 获取<p>IANA 时区名</p>
 * @method void setTimeZoneName(string $TimeZoneName) 设置<p>IANA 时区名</p>
 */
class AlarmNotice extends AbstractModel
{
    /**
     * @var string <p>告警通知模板 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>告警通知模板名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>上次修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string <p>上次修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedBy;

    /**
     * @var string <p>告警通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=全部通知</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeType;

    /**
     * @var array <p>用户通知列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserNotices;

    /**
     * @var array <p>回调通知列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URLNotices;

    /**
     * @var integer <p>是否是系统预设通知模板 0=否 1=是</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPreset;

    /**
     * @var string <p>通知语言 zh-CN=中文 en-US=英文</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeLanguage;

    /**
     * @var array <p>告警通知模板绑定的告警策略ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyIds;

    /**
     * @var string <p>后台 amp consumer id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AMPConsumerId;

    /**
     * @var array <p>推送cls渠道</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLSNotices;

    /**
     * @var array <p>通知模板绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer <p>是否免登录，0-否，1-是</p>
     */
    public $IsLoginFree;

    /**
     * @var string <p>IANA 时区名</p>
     */
    public $TimeZoneName;

    /**
     * @param string $Id <p>告警通知模板 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>告警通知模板名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt <p>上次修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedBy <p>上次修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NoticeType <p>告警通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=全部通知</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserNotices <p>用户通知列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $URLNotices <p>回调通知列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsPreset <p>是否是系统预设通知模板 0=否 1=是</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NoticeLanguage <p>通知语言 zh-CN=中文 en-US=英文</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PolicyIds <p>告警通知模板绑定的告警策略ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AMPConsumerId <p>后台 amp consumer id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CLSNotices <p>推送cls渠道</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>通知模板绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("UpdatedBy",$param) and $param["UpdatedBy"] !== null) {
            $this->UpdatedBy = $param["UpdatedBy"];
        }

        if (array_key_exists("NoticeType",$param) and $param["NoticeType"] !== null) {
            $this->NoticeType = $param["NoticeType"];
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

        if (array_key_exists("IsPreset",$param) and $param["IsPreset"] !== null) {
            $this->IsPreset = $param["IsPreset"];
        }

        if (array_key_exists("NoticeLanguage",$param) and $param["NoticeLanguage"] !== null) {
            $this->NoticeLanguage = $param["NoticeLanguage"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("AMPConsumerId",$param) and $param["AMPConsumerId"] !== null) {
            $this->AMPConsumerId = $param["AMPConsumerId"];
        }

        if (array_key_exists("CLSNotices",$param) and $param["CLSNotices"] !== null) {
            $this->CLSNotices = [];
            foreach ($param["CLSNotices"] as $key => $value){
                $obj = new CLSNotice();
                $obj->deserialize($value);
                array_push($this->CLSNotices, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IsLoginFree",$param) and $param["IsLoginFree"] !== null) {
            $this->IsLoginFree = $param["IsLoginFree"];
        }

        if (array_key_exists("TimeZoneName",$param) and $param["TimeZoneName"] !== null) {
            $this->TimeZoneName = $param["TimeZoneName"];
        }
    }
}
