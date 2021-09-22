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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务器风险Top的主机信息
 *
 * @method integer getEventLevel() 获取危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventLevel(integer $EventLevel) 设置危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventCount() 获取漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventCount(integer $EventCount) 设置漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineEventLevelInfo extends AbstractModel
{
    /**
     * @var integer 危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventLevel;

    /**
     * @var integer 漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventCount;

    /**
     * @param integer $EventLevel 危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventCount 漏洞数量
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
        if (array_key_exists("EventLevel",$param) and $param["EventLevel"] !== null) {
            $this->EventLevel = $param["EventLevel"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }
    }
}
