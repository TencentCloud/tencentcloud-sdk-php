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
 * 健康报告URL信息
 *
 * @method integer getAsyncRequestId() 获取异步任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsyncRequestId(integer $AsyncRequestId) 设置异步任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportUrl() 获取报告下载地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportUrl(string $ReportUrl) 设置报告下载地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取链接过期时间，Unix时间戳（秒），-1表示永不过期。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置链接过期时间，Unix时间戳（秒），-1表示永不过期。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiagReportUrlItem extends AbstractModel
{
    /**
     * @var integer 异步任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsyncRequestId;

    /**
     * @var string 报告下载地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportUrl;

    /**
     * @var integer 链接过期时间，Unix时间戳（秒），-1表示永不过期。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @param integer $AsyncRequestId 异步任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportUrl 报告下载地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 链接过期时间，Unix时间戳（秒），-1表示永不过期。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("ReportUrl",$param) and $param["ReportUrl"] !== null) {
            $this->ReportUrl = $param["ReportUrl"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
