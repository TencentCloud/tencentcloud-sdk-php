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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能运维诊断参数
 *
 * @method array getJobs() 获取诊断项列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobs(array $Jobs) 设置诊断项列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndices() 获取诊断索引
 * @method void setIndices(string $Indices) 设置诊断索引
 * @method integer getInterval() 获取历史诊断时间
 * @method void setInterval(integer $Interval) 设置历史诊断时间
 */
class JobParam extends AbstractModel
{
    /**
     * @var array 诊断项列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Jobs;

    /**
     * @var string 诊断索引
     */
    public $Indices;

    /**
     * @var integer 历史诊断时间
     */
    public $Interval;

    /**
     * @param array $Jobs 诊断项列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Indices 诊断索引
     * @param integer $Interval 历史诊断时间
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
        if (array_key_exists("Jobs",$param) and $param["Jobs"] !== null) {
            $this->Jobs = $param["Jobs"];
        }

        if (array_key_exists("Indices",$param) and $param["Indices"] !== null) {
            $this->Indices = $param["Indices"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
