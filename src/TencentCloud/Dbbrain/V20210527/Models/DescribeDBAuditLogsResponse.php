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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBAuditLogs返回参数结构体
 *
 * @method integer getTotalCount() 获取<p>满足条件的总条数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置<p>满足条件的总条数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFilteredRecords() 获取<p>过滤后记录数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilteredRecords(integer $FilteredRecords) 设置<p>过滤后记录数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProxyLogs() 获取<p>Proxy 层审计日志列表。LogType=Proxy 或 All 时返回，字段结构参见 AuditProxyLogItem。</p>
 * @method void setProxyLogs(array $ProxyLogs) 设置<p>Proxy 层审计日志列表。LogType=Proxy 或 All 时返回，字段结构参见 AuditProxyLogItem。</p>
 * @method array getDBLogs() 获取<p>DB 层审计日志列表。LogType=DB 或 All 时返回，字段结构参见 AuditDBLogItem。</p>
 * @method void setDBLogs(array $DBLogs) 设置<p>DB 层审计日志列表。LogType=DB 或 All 时返回，字段结构参见 AuditDBLogItem。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBAuditLogsResponse extends AbstractModel
{
    /**
     * @var integer <p>满足条件的总条数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer <p>过滤后记录数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilteredRecords;

    /**
     * @var array <p>Proxy 层审计日志列表。LogType=Proxy 或 All 时返回，字段结构参见 AuditProxyLogItem。</p>
     */
    public $ProxyLogs;

    /**
     * @var array <p>DB 层审计日志列表。LogType=DB 或 All 时返回，字段结构参见 AuditDBLogItem。</p>
     */
    public $DBLogs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount <p>满足条件的总条数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FilteredRecords <p>过滤后记录数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProxyLogs <p>Proxy 层审计日志列表。LogType=Proxy 或 All 时返回，字段结构参见 AuditProxyLogItem。</p>
     * @param array $DBLogs <p>DB 层审计日志列表。LogType=DB 或 All 时返回，字段结构参见 AuditDBLogItem。</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("FilteredRecords",$param) and $param["FilteredRecords"] !== null) {
            $this->FilteredRecords = $param["FilteredRecords"];
        }

        if (array_key_exists("ProxyLogs",$param) and $param["ProxyLogs"] !== null) {
            $this->ProxyLogs = [];
            foreach ($param["ProxyLogs"] as $key => $value){
                $obj = new AuditProxyLogItem();
                $obj->deserialize($value);
                array_push($this->ProxyLogs, $obj);
            }
        }

        if (array_key_exists("DBLogs",$param) and $param["DBLogs"] !== null) {
            $this->DBLogs = [];
            foreach ($param["DBLogs"] as $key => $value){
                $obj = new AuditDBLogItem();
                $obj->deserialize($value);
                array_push($this->DBLogs, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
