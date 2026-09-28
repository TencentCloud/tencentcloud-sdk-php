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
 * DescribeDeadLockLogs返回参数结构体
 *
 * @method boolean getHasMore() 获取<p>是否还有更多分页。true 表示 Offset+Limit &lt; TotalCount，客户端可用 Offset+Limit 与本次 ResultVersion 继续翻页。</p>
 * @method void setHasMore(boolean $HasMore) 设置<p>是否还有更多分页。true 表示 Offset+Limit &lt; TotalCount，客户端可用 Offset+Limit 与本次 ResultVersion 继续翻页。</p>
 * @method integer getTotalCount() 获取<p>当前查询窗口内可用的死锁事件总数（去重、关联、时间窗口过滤后）。</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>当前查询窗口内可用的死锁事件总数（去重、关联、时间窗口过滤后）。</p>
 * @method string getResultVersion() 获取<p>结果集版本号（SHA-256 十六进制）。同一批数据在同一查询条件下保持不变；数据发生变化时版本变化。翻页必须透传。</p>
 * @method void setResultVersion(string $ResultVersion) 设置<p>结果集版本号（SHA-256 十六进制）。同一批数据在同一查询条件下保持不变；数据发生变化时版本变化。翻页必须透传。</p>
 * @method array getItems() 获取<p>死锁事件列表。按事件时间倒序排列（最近的死锁在前）。</p>
 * @method void setItems(array $Items) 设置<p>死锁事件列表。按事件时间倒序排列（最近的死锁在前）。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDeadLockLogsResponse extends AbstractModel
{
    /**
     * @var boolean <p>是否还有更多分页。true 表示 Offset+Limit &lt; TotalCount，客户端可用 Offset+Limit 与本次 ResultVersion 继续翻页。</p>
     */
    public $HasMore;

    /**
     * @var integer <p>当前查询窗口内可用的死锁事件总数（去重、关联、时间窗口过滤后）。</p>
     */
    public $TotalCount;

    /**
     * @var string <p>结果集版本号（SHA-256 十六进制）。同一批数据在同一查询条件下保持不变；数据发生变化时版本变化。翻页必须透传。</p>
     */
    public $ResultVersion;

    /**
     * @var array <p>死锁事件列表。按事件时间倒序排列（最近的死锁在前）。</p>
     */
    public $Items;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $HasMore <p>是否还有更多分页。true 表示 Offset+Limit &lt; TotalCount，客户端可用 Offset+Limit 与本次 ResultVersion 继续翻页。</p>
     * @param integer $TotalCount <p>当前查询窗口内可用的死锁事件总数（去重、关联、时间窗口过滤后）。</p>
     * @param string $ResultVersion <p>结果集版本号（SHA-256 十六进制）。同一批数据在同一查询条件下保持不变；数据发生变化时版本变化。翻页必须透传。</p>
     * @param array $Items <p>死锁事件列表。按事件时间倒序排列（最近的死锁在前）。</p>
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
        if (array_key_exists("HasMore",$param) and $param["HasMore"] !== null) {
            $this->HasMore = $param["HasMore"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ResultVersion",$param) and $param["ResultVersion"] !== null) {
            $this->ResultVersion = $param["ResultVersion"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new DeadLockLogItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
