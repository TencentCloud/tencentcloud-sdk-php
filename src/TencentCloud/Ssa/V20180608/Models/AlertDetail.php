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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警详情
 *
 * @method AlertType getBaseInfo() 获取告警基础信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaseInfo(AlertType $BaseInfo) 设置告警基础信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetail() 获取告警详情，json序列化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(string $Detail) 设置告警详情，json序列化
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlertDetail extends AbstractModel
{
    /**
     * @var AlertType 告警基础信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaseInfo;

    /**
     * @var string 告警详情，json序列化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @param AlertType $BaseInfo 告警基础信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Detail 告警详情，json序列化
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
        if (array_key_exists("BaseInfo",$param) and $param["BaseInfo"] !== null) {
            $this->BaseInfo = new AlertType();
            $this->BaseInfo->deserialize($param["BaseInfo"]);
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }
    }
}
