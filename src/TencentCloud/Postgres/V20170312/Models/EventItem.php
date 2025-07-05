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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改参数条目，以参数为维度
 *
 * @method string getParamName() 获取参数名
 * @method void setParamName(string $ParamName) 设置参数名
 * @method integer getEventCount() 获取修改事件数
 * @method void setEventCount(integer $EventCount) 设置修改事件数
 * @method array getEventDetail() 获取修改时间详情
 * @method void setEventDetail(array $EventDetail) 设置修改时间详情
 */
class EventItem extends AbstractModel
{
    /**
     * @var string 参数名
     */
    public $ParamName;

    /**
     * @var integer 修改事件数
     */
    public $EventCount;

    /**
     * @var array 修改时间详情
     */
    public $EventDetail;

    /**
     * @param string $ParamName 参数名
     * @param integer $EventCount 修改事件数
     * @param array $EventDetail 修改时间详情
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("EventDetail",$param) and $param["EventDetail"] !== null) {
            $this->EventDetail = [];
            foreach ($param["EventDetail"] as $key => $value){
                $obj = new EventInfo();
                $obj->deserialize($value);
                array_push($this->EventDetail, $obj);
            }
        }
    }
}
