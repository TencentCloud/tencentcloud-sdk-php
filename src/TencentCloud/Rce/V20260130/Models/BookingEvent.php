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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预约事件详情（营销保护）
 *
 * @method string getBookingScene() 获取<p>预约场景。例如：预订机票、预订酒店</p>
 * @method void setBookingScene(string $BookingScene) 设置<p>预约场景。例如：预订机票、预订酒店</p>
 * @method string getBookingTime() 获取<p>预约时间。要求符合ISO-8601标准的带时区的毫秒级时间，格式&quot;YYYY-MM-DDTHH:mm:ss.sssZ&quot; ，例如&quot;2025-10-19T09:11:10.145+08:00&quot;。</p>
 * @method void setBookingTime(string $BookingTime) 设置<p>预约时间。要求符合ISO-8601标准的带时区的毫秒级时间，格式&quot;YYYY-MM-DDTHH:mm:ss.sssZ&quot; ，例如&quot;2025-10-19T09:11:10.145+08:00&quot;。</p>
 * @method string getBookingId() 获取<p>预约单唯一ID。</p>
 * @method void setBookingId(string $BookingId) 设置<p>预约单唯一ID。</p>
 * @method array getCust() 获取<p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。<br>示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。<br>示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class BookingEvent extends AbstractModel
{
    /**
     * @var string <p>预约场景。例如：预订机票、预订酒店</p>
     */
    public $BookingScene;

    /**
     * @var string <p>预约时间。要求符合ISO-8601标准的带时区的毫秒级时间，格式&quot;YYYY-MM-DDTHH:mm:ss.sssZ&quot; ，例如&quot;2025-10-19T09:11:10.145+08:00&quot;。</p>
     */
    public $BookingTime;

    /**
     * @var string <p>预约单唯一ID。</p>
     */
    public $BookingId;

    /**
     * @var array <p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。<br>示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param string $BookingScene <p>预约场景。例如：预订机票、预订酒店</p>
     * @param string $BookingTime <p>预约时间。要求符合ISO-8601标准的带时区的毫秒级时间，格式&quot;YYYY-MM-DDTHH:mm:ss.sssZ&quot; ，例如&quot;2025-10-19T09:11:10.145+08:00&quot;。</p>
     * @param string $BookingId <p>预约单唯一ID。</p>
     * @param array $Cust <p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。<br>示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
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
        if (array_key_exists("BookingScene",$param) and $param["BookingScene"] !== null) {
            $this->BookingScene = $param["BookingScene"];
        }

        if (array_key_exists("BookingTime",$param) and $param["BookingTime"] !== null) {
            $this->BookingTime = $param["BookingTime"];
        }

        if (array_key_exists("BookingId",$param) and $param["BookingId"] !== null) {
            $this->BookingId = $param["BookingId"];
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
