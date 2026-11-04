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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件到达触发信息
 *
 * @method string getCosBucket() 获取<p>运行命中的文件所在COS桶名</p><p>举例：dlc-sh-store-139153****</p><p>入参不填，如果填写则忽略；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucket(string $CosBucket) 设置<p>运行命中的文件所在COS桶名</p><p>举例：dlc-sh-store-139153****</p><p>入参不填，如果填写则忽略；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosRegion() 获取<p>运行命中的文件所在COS地域</p><p>举例：ap-shanghai</p><p>入参不填，如果填写则忽略；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosRegion(string $CosRegion) 设置<p>运行命中的文件所在COS地域</p><p>举例：ap-shanghai</p><p>入参不填，如果填写则忽略；</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileStoragePath() 获取<p>文件存储路径</p><p>举例：cosn://dlc-sh-store-139153****/test/</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileStoragePath(string $FileStoragePath) 设置<p>文件存储路径</p><p>举例：cosn://dlc-sh-store-139153****/test/</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileNamePattern() 获取<p>文件名匹配规则</p><p>举例：</p><ul><li>空: 当前监听范围内的全部文件</li><li><code>*.csv: 任意以 .csv 结尾的文件名</code></li><li><code>orders_*.csv: orders_ 开头且以 .csv 结尾的文件名</code></li><li>orders.csv: 精确匹配 orders.csv</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileNamePattern(string $FileNamePattern) 设置<p>文件名匹配规则</p><p>举例：</p><ul><li>空: 当前监听范围内的全部文件</li><li><code>*.csv: 任意以 .csv 结尾的文件名</code></li><li><code>orders_*.csv: orders_ 开头且以 .csv 结尾的文件名</code></li><li>orders.csv: 精确匹配 orders.csv</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRecursive() 获取<p>是否包含子目录</p><p>默认值：false</p><p>是否递归匹配子目录，默认 false</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecursive(boolean $Recursive) 设置<p>是否包含子目录</p><p>默认值：false</p><p>是否递归匹配子目录，默认 false</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMinTriggerIntervalTime() 获取<p>最小触发间隔时间</p><p>参数格式：数字</p><p>默认值：300</p><p>单位：秒；默认 300秒（5 分钟）；60-86400 秒（1–1440 分钟）；两次触发之间的最小间隔。期间内到达的文件，需等待该时间结束后才会触发运行。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinTriggerIntervalTime(string $MinTriggerIntervalTime) 设置<p>最小触发间隔时间</p><p>参数格式：数字</p><p>默认值：300</p><p>单位：秒；默认 300秒（5 分钟）；60-86400 秒（1–1440 分钟）；两次触发之间的最小间隔。期间内到达的文件，需等待该时间结束后才会触发运行。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBatchWaitTime() 获取<p>批次等待时间</p><p>参数格式：数字</p><p>默认值：120</p><p>单位：秒；默认 120秒（2 分钟）；60-3600 秒（1–60 分钟）；文件到达后等待该时长才触发运行。若等待期间再次有新文件到达，则重新开始计时。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchWaitTime(string $BatchWaitTime) 设置<p>批次等待时间</p><p>参数格式：数字</p><p>默认值：120</p><p>单位：秒；默认 120秒（2 分钟）；60-3600 秒（1–60 分钟）；文件到达后等待该时长才触发运行。若等待期间再次有新文件到达，则重新开始计时。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileArrivalConfig extends AbstractModel
{
    /**
     * @var string <p>运行命中的文件所在COS桶名</p><p>举例：dlc-sh-store-139153****</p><p>入参不填，如果填写则忽略；</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucket;

    /**
     * @var string <p>运行命中的文件所在COS地域</p><p>举例：ap-shanghai</p><p>入参不填，如果填写则忽略；</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosRegion;

    /**
     * @var string <p>文件存储路径</p><p>举例：cosn://dlc-sh-store-139153****/test/</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileStoragePath;

    /**
     * @var string <p>文件名匹配规则</p><p>举例：</p><ul><li>空: 当前监听范围内的全部文件</li><li><code>*.csv: 任意以 .csv 结尾的文件名</code></li><li><code>orders_*.csv: orders_ 开头且以 .csv 结尾的文件名</code></li><li>orders.csv: 精确匹配 orders.csv</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileNamePattern;

    /**
     * @var boolean <p>是否包含子目录</p><p>默认值：false</p><p>是否递归匹配子目录，默认 false</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Recursive;

    /**
     * @var string <p>最小触发间隔时间</p><p>参数格式：数字</p><p>默认值：300</p><p>单位：秒；默认 300秒（5 分钟）；60-86400 秒（1–1440 分钟）；两次触发之间的最小间隔。期间内到达的文件，需等待该时间结束后才会触发运行。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinTriggerIntervalTime;

    /**
     * @var string <p>批次等待时间</p><p>参数格式：数字</p><p>默认值：120</p><p>单位：秒；默认 120秒（2 分钟）；60-3600 秒（1–60 分钟）；文件到达后等待该时长才触发运行。若等待期间再次有新文件到达，则重新开始计时。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchWaitTime;

    /**
     * @param string $CosBucket <p>运行命中的文件所在COS桶名</p><p>举例：dlc-sh-store-139153****</p><p>入参不填，如果填写则忽略；</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosRegion <p>运行命中的文件所在COS地域</p><p>举例：ap-shanghai</p><p>入参不填，如果填写则忽略；</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileStoragePath <p>文件存储路径</p><p>举例：cosn://dlc-sh-store-139153****/test/</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileNamePattern <p>文件名匹配规则</p><p>举例：</p><ul><li>空: 当前监听范围内的全部文件</li><li><code>*.csv: 任意以 .csv 结尾的文件名</code></li><li><code>orders_*.csv: orders_ 开头且以 .csv 结尾的文件名</code></li><li>orders.csv: 精确匹配 orders.csv</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Recursive <p>是否包含子目录</p><p>默认值：false</p><p>是否递归匹配子目录，默认 false</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MinTriggerIntervalTime <p>最小触发间隔时间</p><p>参数格式：数字</p><p>默认值：300</p><p>单位：秒；默认 300秒（5 分钟）；60-86400 秒（1–1440 分钟）；两次触发之间的最小间隔。期间内到达的文件，需等待该时间结束后才会触发运行。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BatchWaitTime <p>批次等待时间</p><p>参数格式：数字</p><p>默认值：120</p><p>单位：秒；默认 120秒（2 分钟）；60-3600 秒（1–60 分钟）；文件到达后等待该时长才触发运行。若等待期间再次有新文件到达，则重新开始计时。</p>
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
        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("FileStoragePath",$param) and $param["FileStoragePath"] !== null) {
            $this->FileStoragePath = $param["FileStoragePath"];
        }

        if (array_key_exists("FileNamePattern",$param) and $param["FileNamePattern"] !== null) {
            $this->FileNamePattern = $param["FileNamePattern"];
        }

        if (array_key_exists("Recursive",$param) and $param["Recursive"] !== null) {
            $this->Recursive = $param["Recursive"];
        }

        if (array_key_exists("MinTriggerIntervalTime",$param) and $param["MinTriggerIntervalTime"] !== null) {
            $this->MinTriggerIntervalTime = $param["MinTriggerIntervalTime"];
        }

        if (array_key_exists("BatchWaitTime",$param) and $param["BatchWaitTime"] !== null) {
            $this->BatchWaitTime = $param["BatchWaitTime"];
        }
    }
}
