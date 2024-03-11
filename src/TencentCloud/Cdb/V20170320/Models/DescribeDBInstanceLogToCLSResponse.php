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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceLogToCLS返回参数结构体
 *
 * @method LogToCLSConfig getErrorLog() 获取错误日志投递CLS配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorLog(LogToCLSConfig $ErrorLog) 设置错误日志投递CLS配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method LogToCLSConfig getSlowLog() 获取慢日志投递CLS配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlowLog(LogToCLSConfig $SlowLog) 设置慢日志投递CLS配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceLogToCLSResponse extends AbstractModel
{
    /**
     * @var LogToCLSConfig 错误日志投递CLS配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorLog;

    /**
     * @var LogToCLSConfig 慢日志投递CLS配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlowLog;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param LogToCLSConfig $ErrorLog 错误日志投递CLS配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param LogToCLSConfig $SlowLog 慢日志投递CLS配置
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ErrorLog",$param) and $param["ErrorLog"] !== null) {
            $this->ErrorLog = new LogToCLSConfig();
            $this->ErrorLog->deserialize($param["ErrorLog"]);
        }

        if (array_key_exists("SlowLog",$param) and $param["SlowLog"] !== null) {
            $this->SlowLog = new LogToCLSConfig();
            $this->SlowLog->deserialize($param["SlowLog"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
