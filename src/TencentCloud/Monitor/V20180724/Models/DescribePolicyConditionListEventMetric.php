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
 * DescribePolicyConditionList.EventMetric
 *
 * @method integer getEventId() 获取<p>事件id</p>
 * @method void setEventId(integer $EventId) 设置<p>事件id</p>
 * @method string getEventShowName() 获取<p>事件名称</p>
 * @method void setEventShowName(string $EventShowName) 设置<p>事件名称</p>
 * @method boolean getNeedRecovered() 获取<p>是否需要恢复</p>
 * @method void setNeedRecovered(boolean $NeedRecovered) 设置<p>是否需要恢复</p>
 * @method integer getType() 获取<p>事件类型，预留字段，当前固定取值为2</p>
 * @method void setType(integer $Type) 设置<p>事件类型，预留字段，当前固定取值为2</p>
 */
class DescribePolicyConditionListEventMetric extends AbstractModel
{
    /**
     * @var integer <p>事件id</p>
     */
    public $EventId;

    /**
     * @var string <p>事件名称</p>
     */
    public $EventShowName;

    /**
     * @var boolean <p>是否需要恢复</p>
     */
    public $NeedRecovered;

    /**
     * @var integer <p>事件类型，预留字段，当前固定取值为2</p>
     */
    public $Type;

    /**
     * @param integer $EventId <p>事件id</p>
     * @param string $EventShowName <p>事件名称</p>
     * @param boolean $NeedRecovered <p>是否需要恢复</p>
     * @param integer $Type <p>事件类型，预留字段，当前固定取值为2</p>
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventShowName",$param) and $param["EventShowName"] !== null) {
            $this->EventShowName = $param["EventShowName"];
        }

        if (array_key_exists("NeedRecovered",$param) and $param["NeedRecovered"] !== null) {
            $this->NeedRecovered = $param["NeedRecovered"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
