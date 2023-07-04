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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PreviewKafkaRecharge返回参数结构体
 *
 * @method string getLogSample() 获取日志样例，PreviewType为2时返回
 * @method void setLogSample(string $LogSample) 设置日志样例，PreviewType为2时返回
 * @method string getLogData() 获取日志预览结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogData(string $LogData) 设置日志预览结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class PreviewKafkaRechargeResponse extends AbstractModel
{
    /**
     * @var string 日志样例，PreviewType为2时返回
     */
    public $LogSample;

    /**
     * @var string 日志预览结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LogSample 日志样例，PreviewType为2时返回
     * @param string $LogData 日志预览结果
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
        if (array_key_exists("LogSample",$param) and $param["LogSample"] !== null) {
            $this->LogSample = $param["LogSample"];
        }

        if (array_key_exists("LogData",$param) and $param["LogData"] !== null) {
            $this->LogData = $param["LogData"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
