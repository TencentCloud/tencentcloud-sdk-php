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
 * 企业成员SaaS使用明细数据
 *
 * @method string getEventCode() 获取事件码
 * @method void setEventCode(string $EventCode) 设置事件码
 * @method integer getEventType() 获取事件类型
 * @method void setEventType(integer $EventType) 设置事件类型
 * @method integer getEventSource() 获取事件来源
 * @method void setEventSource(integer $EventSource) 设置事件来源
 * @method integer getSalesId() 获取销售顾问id
 * @method void setSalesId(integer $SalesId) 设置销售顾问id
 * @method integer getMaterialType() 获取素材类型
 * @method void setMaterialType(integer $MaterialType) 设置素材类型
 * @method integer getMaterialId() 获取素材编号id
 * @method void setMaterialId(integer $MaterialId) 设置素材编号id
 * @method integer getEventTime() 获取事件上报时间，单位：秒
 * @method void setEventTime(integer $EventTime) 设置事件上报时间，单位：秒
 */
class SalesActionEventDetail extends AbstractModel
{
    /**
     * @var string 事件码
     */
    public $EventCode;

    /**
     * @var integer 事件类型
     */
    public $EventType;

    /**
     * @var integer 事件来源
     */
    public $EventSource;

    /**
     * @var integer 销售顾问id
     */
    public $SalesId;

    /**
     * @var integer 素材类型
     */
    public $MaterialType;

    /**
     * @var integer 素材编号id
     */
    public $MaterialId;

    /**
     * @var integer 事件上报时间，单位：秒
     */
    public $EventTime;

    /**
     * @param string $EventCode 事件码
     * @param integer $EventType 事件类型
     * @param integer $EventSource 事件来源
     * @param integer $SalesId 销售顾问id
     * @param integer $MaterialType 素材类型
     * @param integer $MaterialId 素材编号id
     * @param integer $EventTime 事件上报时间，单位：秒
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

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventSource",$param) and $param["EventSource"] !== null) {
            $this->EventSource = $param["EventSource"];
        }

        if (array_key_exists("SalesId",$param) and $param["SalesId"] !== null) {
            $this->SalesId = $param["SalesId"];
        }

        if (array_key_exists("MaterialType",$param) and $param["MaterialType"] !== null) {
            $this->MaterialType = $param["MaterialType"];
        }

        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }
    }
}
