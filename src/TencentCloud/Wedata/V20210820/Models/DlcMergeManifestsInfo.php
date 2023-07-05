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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合并元数据Manifests治理项
 *
 * @method string getMergeManifestsEnable() 获取是否启用合并元数据Manifests文件治理项：enable、none
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMergeManifestsEnable(string $MergeManifestsEnable) 设置是否启用合并元数据Manifests文件治理项：enable、none
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngine() 获取用于运行合并元数据Manifests文件治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngine(string $Engine) 设置用于运行合并元数据Manifests文件治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntervalMin() 获取合并元数据Manifests文件治理运行周期，单位为分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntervalMin(integer $IntervalMin) 设置合并元数据Manifests文件治理运行周期，单位为分钟
注意：此字段可能返回 null，表示取不到有效值。
 */
class DlcMergeManifestsInfo extends AbstractModel
{
    /**
     * @var string 是否启用合并元数据Manifests文件治理项：enable、none
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MergeManifestsEnable;

    /**
     * @var string 用于运行合并元数据Manifests文件治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Engine;

    /**
     * @var integer 合并元数据Manifests文件治理运行周期，单位为分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntervalMin;

    /**
     * @param string $MergeManifestsEnable 是否启用合并元数据Manifests文件治理项：enable、none
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Engine 用于运行合并元数据Manifests文件治理项的引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntervalMin 合并元数据Manifests文件治理运行周期，单位为分钟
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
        if (array_key_exists("MergeManifestsEnable",$param) and $param["MergeManifestsEnable"] !== null) {
            $this->MergeManifestsEnable = $param["MergeManifestsEnable"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("IntervalMin",$param) and $param["IntervalMin"] !== null) {
            $this->IntervalMin = $param["IntervalMin"];
        }
    }
}
