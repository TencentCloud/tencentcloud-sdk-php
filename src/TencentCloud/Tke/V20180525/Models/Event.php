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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务事件
 *
 * @method string getPodName() 获取pod名称
 * @method void setPodName(string $PodName) 设置pod名称
 * @method string getReason() 获取事件原因内容
 * @method void setReason(string $Reason) 设置事件原因内容
 * @method string getType() 获取事件类型
 * @method void setType(string $Type) 设置事件类型
 * @method integer getCount() 获取事件出现次数
 * @method void setCount(integer $Count) 设置事件出现次数
 * @method string getFirstTimestamp() 获取事件第一次出现时间
 * @method void setFirstTimestamp(string $FirstTimestamp) 设置事件第一次出现时间
 * @method string getLastTimestamp() 获取事件最后一次出现时间
 * @method void setLastTimestamp(string $LastTimestamp) 设置事件最后一次出现时间
 * @method string getMessage() 获取事件内容
 * @method void setMessage(string $Message) 设置事件内容
 */
class Event extends AbstractModel
{
    /**
     * @var string pod名称
     */
    public $PodName;

    /**
     * @var string 事件原因内容
     */
    public $Reason;

    /**
     * @var string 事件类型
     */
    public $Type;

    /**
     * @var integer 事件出现次数
     */
    public $Count;

    /**
     * @var string 事件第一次出现时间
     */
    public $FirstTimestamp;

    /**
     * @var string 事件最后一次出现时间
     */
    public $LastTimestamp;

    /**
     * @var string 事件内容
     */
    public $Message;

    /**
     * @param string $PodName pod名称
     * @param string $Reason 事件原因内容
     * @param string $Type 事件类型
     * @param integer $Count 事件出现次数
     * @param string $FirstTimestamp 事件第一次出现时间
     * @param string $LastTimestamp 事件最后一次出现时间
     * @param string $Message 事件内容
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
        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("FirstTimestamp",$param) and $param["FirstTimestamp"] !== null) {
            $this->FirstTimestamp = $param["FirstTimestamp"];
        }

        if (array_key_exists("LastTimestamp",$param) and $param["LastTimestamp"] !== null) {
            $this->LastTimestamp = $param["LastTimestamp"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
