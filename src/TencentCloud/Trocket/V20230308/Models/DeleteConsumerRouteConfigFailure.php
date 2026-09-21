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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量删除路由配置的单条失败项
 *
 * @method ConsumerRouteLabelKey getKey() 获取<p>失败项标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(ConsumerRouteLabelKey $Key) 设置<p>失败项标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorInfo getError() 获取<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(ErrorInfo $Error) 设置<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeleteConsumerRouteConfigFailure extends AbstractModel
{
    /**
     * @var ConsumerRouteLabelKey <p>失败项标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var ErrorInfo <p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @param ConsumerRouteLabelKey $Key <p>失败项标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorInfo $Error <p>错误信息</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = new ConsumerRouteLabelKey();
            $this->Key->deserialize($param["Key"]);
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }
    }
}
