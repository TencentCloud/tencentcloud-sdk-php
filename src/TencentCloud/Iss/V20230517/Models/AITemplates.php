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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI模板信息
 *
 * @method string getTag() 获取AI 类别。可选值 AI(AI 分析)和 Snapshot(截图)，Templates 列表中只能出现一种类型。
 * @method void setTag(string $Tag) 设置AI 类别。可选值 AI(AI 分析)和 Snapshot(截图)，Templates 列表中只能出现一种类型。
 * @method AIConfig getAIConfig() 获取AI 分析配置。和"SnapshotConfig"二选一。
 * @method void setAIConfig(AIConfig $AIConfig) 设置AI 分析配置。和"SnapshotConfig"二选一。
 * @method SnapshotConfig getSnapshotConfig() 获取截图配置。和"AIConfig"二选一。
 * @method void setSnapshotConfig(SnapshotConfig $SnapshotConfig) 设置截图配置。和"AIConfig"二选一。
 */
class AITemplates extends AbstractModel
{
    /**
     * @var string AI 类别。可选值 AI(AI 分析)和 Snapshot(截图)，Templates 列表中只能出现一种类型。
     */
    public $Tag;

    /**
     * @var AIConfig AI 分析配置。和"SnapshotConfig"二选一。
     */
    public $AIConfig;

    /**
     * @var SnapshotConfig 截图配置。和"AIConfig"二选一。
     */
    public $SnapshotConfig;

    /**
     * @param string $Tag AI 类别。可选值 AI(AI 分析)和 Snapshot(截图)，Templates 列表中只能出现一种类型。
     * @param AIConfig $AIConfig AI 分析配置。和"SnapshotConfig"二选一。
     * @param SnapshotConfig $SnapshotConfig 截图配置。和"AIConfig"二选一。
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("AIConfig",$param) and $param["AIConfig"] !== null) {
            $this->AIConfig = new AIConfig();
            $this->AIConfig->deserialize($param["AIConfig"]);
        }

        if (array_key_exists("SnapshotConfig",$param) and $param["SnapshotConfig"] !== null) {
            $this->SnapshotConfig = new SnapshotConfig();
            $this->SnapshotConfig->deserialize($param["SnapshotConfig"]);
        }
    }
}
