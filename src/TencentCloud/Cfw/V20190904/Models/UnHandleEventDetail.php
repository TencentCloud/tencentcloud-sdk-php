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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 未处置事件信息汇总
 *
 * @method string getEventName() 获取安全事件名称
 * @method void setEventName(string $EventName) 设置安全事件名称
 * @method integer getTotal() 获取未处置事件数量
 * @method void setTotal(integer $Total) 设置未处置事件数量
 */
class UnHandleEventDetail extends AbstractModel
{
    /**
     * @var string 安全事件名称
     */
    public $EventName;

    /**
     * @var integer 未处置事件数量
     */
    public $Total;

    /**
     * @param string $EventName 安全事件名称
     * @param integer $Total 未处置事件数量
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
