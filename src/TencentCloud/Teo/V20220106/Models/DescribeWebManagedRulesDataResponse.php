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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebManagedRulesData返回参数结构体
 *
 * @method array getData() 获取Web攻击日志实体。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置Web攻击日志实体。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取请求响应状态，取值有：
<li>1 ：失败 ；</li>
<li>0 ：成功 。</li>
 * @method void setStatus(integer $Status) 设置请求响应状态，取值有：
<li>1 ：失败 ；</li>
<li>0 ：成功 。</li>
 * @method string getMsg() 获取请求响应消息。
 * @method void setMsg(string $Msg) 设置请求响应消息。
 * @method string getInterval() 获取查询时间粒度，取值有：
<li>min ：1分钟 ；</li>
<li>5min ：5分钟 ；</li>
<li>hour ：1小时 ；</li>
<li>day ：1天 。</li>
 * @method void setInterval(string $Interval) 设置查询时间粒度，取值有：
<li>min ：1分钟 ；</li>
<li>5min ：5分钟 ；</li>
<li>hour ：1小时 ；</li>
<li>day ：1天 。</li>
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWebManagedRulesDataResponse extends AbstractModel
{
    /**
     * @var array Web攻击日志实体。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var integer 请求响应状态，取值有：
<li>1 ：失败 ；</li>
<li>0 ：成功 。</li>
     */
    public $Status;

    /**
     * @var string 请求响应消息。
     */
    public $Msg;

    /**
     * @var string 查询时间粒度，取值有：
<li>min ：1分钟 ；</li>
<li>5min ：5分钟 ；</li>
<li>hour ：1小时 ；</li>
<li>day ：1天 。</li>
     */
    public $Interval;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data Web攻击日志实体。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 请求响应状态，取值有：
<li>1 ：失败 ；</li>
<li>0 ：成功 。</li>
     * @param string $Msg 请求响应消息。
     * @param string $Interval 查询时间粒度，取值有：
<li>min ：1分钟 ；</li>
<li>5min ：5分钟 ；</li>
<li>hour ：1小时 ；</li>
<li>day ：1天 。</li>
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SecEntry();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
