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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务结果数据
 *
 * @method ShowInfo getShowInfo() 获取节目粒度结构化结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowInfo(ShowInfo $ShowInfo) 设置节目粒度结构化结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class Data extends AbstractModel
{
    /**
     * @var ShowInfo 节目粒度结构化结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowInfo;

    /**
     * @param ShowInfo $ShowInfo 节目粒度结构化结果
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
        if (array_key_exists("ShowInfo",$param) and $param["ShowInfo"] !== null) {
            $this->ShowInfo = new ShowInfo();
            $this->ShowInfo->deserialize($param["ShowInfo"]);
        }
    }
}
