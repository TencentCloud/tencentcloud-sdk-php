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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSampleLogs返回参数结构体
 *
 * @method integer getTotal() 获取日志总数
 * @method void setTotal(integer $Total) 设置日志总数
 * @method string getContext() 获取日志上下文，加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContext(string $Context) 设置日志上下文，加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSampleLogs() 获取采样日志数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleLogs(array $SampleLogs) 设置采样日志数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSampleLogsResponse extends AbstractModel
{
    /**
     * @var integer 日志总数
     */
    public $Total;

    /**
     * @var string 日志上下文，加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Context;

    /**
     * @var array 采样日志数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleLogs;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 日志总数
     * @param string $Context 日志上下文，加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SampleLogs 采样日志数组
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("SampleLogs",$param) and $param["SampleLogs"] !== null) {
            $this->SampleLogs = [];
            foreach ($param["SampleLogs"] as $key => $value){
                $obj = new SampleLog();
                $obj->deserialize($value);
                array_push($this->SampleLogs, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
