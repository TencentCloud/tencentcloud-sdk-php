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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流的统计数据列表。
 *
 * @method integer getTimestamp() 获取时间戳。
 * @method void setTimestamp(integer $Timestamp) 设置时间戳。
 * @method array getFlowStatistics() 获取每个会话的统计数据。
 * @method void setFlowStatistics(array $FlowStatistics) 设置每个会话的统计数据。
 */
class FlowStatisticsArray extends AbstractModel
{
    /**
     * @var integer 时间戳。
     */
    public $Timestamp;

    /**
     * @var array 每个会话的统计数据。
     */
    public $FlowStatistics;

    /**
     * @param integer $Timestamp 时间戳。
     * @param array $FlowStatistics 每个会话的统计数据。
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("FlowStatistics",$param) and $param["FlowStatistics"] !== null) {
            $this->FlowStatistics = [];
            foreach ($param["FlowStatistics"] as $key => $value){
                $obj = new FlowStatistics();
                $obj->deserialize($value);
                array_push($this->FlowStatistics, $obj);
            }
        }
    }
}
