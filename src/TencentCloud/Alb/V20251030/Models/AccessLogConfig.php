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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问日志配置。
 *
 * @method string getLogSetId() 获取负载均衡日志服务(CLS)的日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogSetId(string $LogSetId) 设置负载均衡日志服务(CLS)的日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogTopicId() 获取负载均衡日志服务(CLS)的日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTopicId(string $LogTopicId) 设置负载均衡日志服务(CLS)的日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccessLogConfig extends AbstractModel
{
    /**
     * @var string 负载均衡日志服务(CLS)的日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogSetId;

    /**
     * @var string 负载均衡日志服务(CLS)的日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTopicId;

    /**
     * @param string $LogSetId 负载均衡日志服务(CLS)的日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogTopicId 负载均衡日志服务(CLS)的日志主题ID
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
        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }
    }
}
