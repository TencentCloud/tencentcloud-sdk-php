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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 外部联系人事件信息
 *
 * @method string getEventCode() 获取事件编码, 添加外部联系人(ADD_EXTERNAL_CUSTOMER)/成员删除外部联系人(DELETE_EXTERNAL_CUSTOMER)/外部联系人删除成员(DELETE_FOLLOW_USER)
 * @method void setEventCode(string $EventCode) 设置事件编码, 添加外部联系人(ADD_EXTERNAL_CUSTOMER)/成员删除外部联系人(DELETE_EXTERNAL_CUSTOMER)/外部联系人删除成员(DELETE_FOLLOW_USER)
 * @method string getExternalUserId() 获取外部联系人id
 * @method void setExternalUserId(string $ExternalUserId) 设置外部联系人id
 * @method string getSalesId() 获取企微SaaS的成员id
 * @method void setSalesId(string $SalesId) 设置企微SaaS的成员id
 * @method integer getEventTime() 获取事件上报时间戳，单位：秒
 * @method void setEventTime(integer $EventTime) 设置事件上报时间戳，单位：秒
 */
class ExternalUserEventInfo extends AbstractModel
{
    /**
     * @var string 事件编码, 添加外部联系人(ADD_EXTERNAL_CUSTOMER)/成员删除外部联系人(DELETE_EXTERNAL_CUSTOMER)/外部联系人删除成员(DELETE_FOLLOW_USER)
     */
    public $EventCode;

    /**
     * @var string 外部联系人id
     */
    public $ExternalUserId;

    /**
     * @var string 企微SaaS的成员id
     */
    public $SalesId;

    /**
     * @var integer 事件上报时间戳，单位：秒
     */
    public $EventTime;

    /**
     * @param string $EventCode 事件编码, 添加外部联系人(ADD_EXTERNAL_CUSTOMER)/成员删除外部联系人(DELETE_EXTERNAL_CUSTOMER)/外部联系人删除成员(DELETE_FOLLOW_USER)
     * @param string $ExternalUserId 外部联系人id
     * @param string $SalesId 企微SaaS的成员id
     * @param integer $EventTime 事件上报时间戳，单位：秒
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
        if (array_key_exists("EventCode",$param) and $param["EventCode"] !== null) {
            $this->EventCode = $param["EventCode"];
        }

        if (array_key_exists("ExternalUserId",$param) and $param["ExternalUserId"] !== null) {
            $this->ExternalUserId = $param["ExternalUserId"];
        }

        if (array_key_exists("SalesId",$param) and $param["SalesId"] !== null) {
            $this->SalesId = $param["SalesId"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }
    }
}
