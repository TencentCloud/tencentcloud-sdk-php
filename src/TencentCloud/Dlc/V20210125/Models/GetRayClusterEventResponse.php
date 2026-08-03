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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRayClusterEvent返回参数结构体
 *
 * @method string getContext() 获取<p>翻页上下文，下一次分页请求时传入此值</p>
 * @method void setContext(string $Context) 设置<p>翻页上下文，下一次分页请求时传入此值</p>
 * @method boolean getListOver() 获取<p>是否已经返回所有符合条件的日志，true 表示已全部返回</p>
 * @method void setListOver(boolean $ListOver) 设置<p>是否已经返回所有符合条件的日志，true 表示已全部返回</p>
 * @method array getEvents() 获取<p>事件列表</p>
 * @method void setEvents(array $Events) 设置<p>事件列表</p>
 * @method integer getStartTime() 获取<p>事件开始时间</p><p>单位：毫秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>事件开始时间</p><p>单位：毫秒</p>
 * @method integer getEndTime() 获取<p>事件结束时间</p><p>单位：毫秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>事件结束时间</p><p>单位：毫秒</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetRayClusterEventResponse extends AbstractModel
{
    /**
     * @var string <p>翻页上下文，下一次分页请求时传入此值</p>
     */
    public $Context;

    /**
     * @var boolean <p>是否已经返回所有符合条件的日志，true 表示已全部返回</p>
     */
    public $ListOver;

    /**
     * @var array <p>事件列表</p>
     */
    public $Events;

    /**
     * @var integer <p>事件开始时间</p><p>单位：毫秒</p>
     */
    public $StartTime;

    /**
     * @var integer <p>事件结束时间</p><p>单位：毫秒</p>
     */
    public $EndTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Context <p>翻页上下文，下一次分页请求时传入此值</p>
     * @param boolean $ListOver <p>是否已经返回所有符合条件的日志，true 表示已全部返回</p>
     * @param array $Events <p>事件列表</p>
     * @param integer $StartTime <p>事件开始时间</p><p>单位：毫秒</p>
     * @param integer $EndTime <p>事件结束时间</p><p>单位：毫秒</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new EventItem();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
