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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAppTrigger请求参数结构体
 *
 * @method string getAppId() 获取<p>应用ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用ID</p>
 * @method integer getScope() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
 * @method void setScope(integer $Scope) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
 * @method AppTrigger getTrigger() 获取<p>触发器信息</p>
 * @method void setTrigger(AppTrigger $Trigger) 设置<p>触发器信息</p>
 * @method string getTriggerId() 获取<p>触发器唯一ID</p>
 * @method void setTriggerId(string $TriggerId) 设置<p>触发器唯一ID</p>
 * @method FieldMask getUpdateMask() 获取<p>修改字段</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) 设置<p>修改字段</p>
 * @method string getUserId() 获取<p>访客ID</p>
 * @method void setUserId(string $UserId) 设置<p>访客ID</p>
 */
class ModifyAppTriggerRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
     */
    public $Scope;

    /**
     * @var AppTrigger <p>触发器信息</p>
     */
    public $Trigger;

    /**
     * @var string <p>触发器唯一ID</p>
     */
    public $TriggerId;

    /**
     * @var FieldMask <p>修改字段</p>
     */
    public $UpdateMask;

    /**
     * @var string <p>访客ID</p>
     */
    public $UserId;

    /**
     * @param string $AppId <p>应用ID</p>
     * @param integer $Scope <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TRIGGER_SCOPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>APP_TRIGGER_SCOPE_APP</td><td>1</td><td>B 端管理员</td></tr><tr><td>APP_TRIGGER_SCOPE_USER</td><td>2</td><td>C 端访客</td></tr></tbody></table>
     * @param AppTrigger $Trigger <p>触发器信息</p>
     * @param string $TriggerId <p>触发器唯一ID</p>
     * @param FieldMask $UpdateMask <p>修改字段</p>
     * @param string $UserId <p>访客ID</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = new AppTrigger();
            $this->Trigger->deserialize($param["Trigger"]);
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
