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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 更新时间策略
 *
 * @method integer getUpdatePeriodH() 获取文档更新频率类型：0不更新 -H 小时粒度,当前仅支持24(1天)，72(3天)，168(7天) 仅source=2 腾讯文档类型有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatePeriodH(integer $UpdatePeriodH) 设置文档更新频率类型：0不更新 -H 小时粒度,当前仅支持24(1天)，72(3天)，168(7天) 仅source=2 腾讯文档类型有效
注意：此字段可能返回 null，表示取不到有效值。
 */
class UpdatePeriodInfo extends AbstractModel
{
    /**
     * @var integer 文档更新频率类型：0不更新 -H 小时粒度,当前仅支持24(1天)，72(3天)，168(7天) 仅source=2 腾讯文档类型有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatePeriodH;

    /**
     * @param integer $UpdatePeriodH 文档更新频率类型：0不更新 -H 小时粒度,当前仅支持24(1天)，72(3天)，168(7天) 仅source=2 腾讯文档类型有效
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
        if (array_key_exists("UpdatePeriodH",$param) and $param["UpdatePeriodH"] !== null) {
            $this->UpdatePeriodH = $param["UpdatePeriodH"];
        }
    }
}
