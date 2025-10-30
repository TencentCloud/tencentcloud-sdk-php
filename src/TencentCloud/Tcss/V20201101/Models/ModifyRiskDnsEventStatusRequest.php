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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRiskDnsEventStatus请求参数结构体
 *
 * @method array getEventIDSet() 获取恶意请求事件ID数组。加白时必需，否则Filters和EventIDSet二者选其一。
 * @method void setEventIDSet(array $EventIDSet) 设置恶意请求事件ID数组。加白时必需，否则Filters和EventIDSet二者选其一。
 * @method string getEventStatus() 获取标记事件的状态：
EVENT_UNDEAL:未处理（取消忽略），
EVENT_DEALED:已处理，
EVENT_IGNORE:忽略，
EVENT_DELETE：已删除
EVENT_ADD_WHITE：加白
EVENT_ISOLATE_CONTAINER：隔离容器
EVENT_RESOTRE_CONTAINER：恢复容器
 * @method void setEventStatus(string $EventStatus) 设置标记事件的状态：
EVENT_UNDEAL:未处理（取消忽略），
EVENT_DEALED:已处理，
EVENT_IGNORE:忽略，
EVENT_DELETE：已删除
EVENT_ADD_WHITE：加白
EVENT_ISOLATE_CONTAINER：隔离容器
EVENT_RESOTRE_CONTAINER：恢复容器
 * @method string getAddress() 获取白名单域名/IP
 * @method void setAddress(string $Address) 设置白名单域名/IP
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method boolean getAllSameEventAddWhite() 获取相同的请求域名/IP事件加白处理
 * @method void setAllSameEventAddWhite(boolean $AllSameEventAddWhite) 设置相同的请求域名/IP事件加白处理
 * @method string getAddWhiteEventType() 获取加白的事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP
 * @method void setAddWhiteEventType(string $AddWhiteEventType) 设置加白的事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP
 */
class ModifyRiskDnsEventStatusRequest extends AbstractModel
{
    /**
     * @var array 恶意请求事件ID数组。加白时必需，否则Filters和EventIDSet二者选其一。
     */
    public $EventIDSet;

    /**
     * @var string 标记事件的状态：
EVENT_UNDEAL:未处理（取消忽略），
EVENT_DEALED:已处理，
EVENT_IGNORE:忽略，
EVENT_DELETE：已删除
EVENT_ADD_WHITE：加白
EVENT_ISOLATE_CONTAINER：隔离容器
EVENT_RESOTRE_CONTAINER：恢复容器
     */
    public $EventStatus;

    /**
     * @var string 白名单域名/IP
     */
    public $Address;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var boolean 相同的请求域名/IP事件加白处理
     */
    public $AllSameEventAddWhite;

    /**
     * @var string 加白的事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP
     */
    public $AddWhiteEventType;

    /**
     * @param array $EventIDSet 恶意请求事件ID数组。加白时必需，否则Filters和EventIDSet二者选其一。
     * @param string $EventStatus 标记事件的状态：
EVENT_UNDEAL:未处理（取消忽略），
EVENT_DEALED:已处理，
EVENT_IGNORE:忽略，
EVENT_DELETE：已删除
EVENT_ADD_WHITE：加白
EVENT_ISOLATE_CONTAINER：隔离容器
EVENT_RESOTRE_CONTAINER：恢复容器
     * @param string $Address 白名单域名/IP
     * @param string $Remark 备注
     * @param boolean $AllSameEventAddWhite 相同的请求域名/IP事件加白处理
     * @param string $AddWhiteEventType 加白的事件类型，恶意域名请求：DOMAIN，恶意IP请求：IP
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
        if (array_key_exists("EventIDSet",$param) and $param["EventIDSet"] !== null) {
            $this->EventIDSet = $param["EventIDSet"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AllSameEventAddWhite",$param) and $param["AllSameEventAddWhite"] !== null) {
            $this->AllSameEventAddWhite = $param["AllSameEventAddWhite"];
        }

        if (array_key_exists("AddWhiteEventType",$param) and $param["AddWhiteEventType"] !== null) {
            $this->AddWhiteEventType = $param["AddWhiteEventType"];
        }
    }
}
