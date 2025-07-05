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
namespace TencentCloud\Tchd\V20230306\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品可用性事件详情列表
 *
 * @method array getEventList() 获取事件详情列表
 * @method void setEventList(array $EventList) 设置事件详情列表
 */
class ProductEventList extends AbstractModel
{
    /**
     * @var array 事件详情列表
     */
    public $EventList;

    /**
     * @param array $EventList 事件详情列表
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
        if (array_key_exists("EventList",$param) and $param["EventList"] !== null) {
            $this->EventList = [];
            foreach ($param["EventList"] as $key => $value){
                $obj = new EventDetail();
                $obj->deserialize($value);
                array_push($this->EventList, $obj);
            }
        }
    }
}
