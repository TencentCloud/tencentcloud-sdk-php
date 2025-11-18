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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 展示apm业务系统与其他云产品关联关系返回体
 *
 * @method string getPeerId() 获取关联产品的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeerId(string $PeerId) 设置关联产品的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取关联关系状态：1（启用）、2（不启用）、3（已失效）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置关联关系状态：1（启用）、2（不启用）、3（已失效）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取CKafka消息主题
 * @method void setTopic(string $Topic) 设置CKafka消息主题
 */
class ApmAssociation extends AbstractModel
{
    /**
     * @var string 关联产品的实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeerId;

    /**
     * @var integer 关联关系状态：1（启用）、2（不启用）、3（已失效）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string CKafka消息主题
     */
    public $Topic;

    /**
     * @param string $PeerId 关联产品的实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 关联关系状态：1（启用）、2（不启用）、3（已失效）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic CKafka消息主题
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
        if (array_key_exists("PeerId",$param) and $param["PeerId"] !== null) {
            $this->PeerId = $param["PeerId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }
    }
}
