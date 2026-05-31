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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 排行列表中的单个对象用量项，含对象标识、时间周期内的统计值（Stats）和时间周期内的时序点列表（Series，仅 ShowAll=false 时返回）。
 *
 * @method integer getRank() 获取全局排名（从 1 起）。分页场景下仍为全量排序中的位次，非页内序号
 * @method void setRank(integer $Rank) 设置全局排名（从 1 起）。分页场景下仍为全量排序中的位次，非页内序号
 * @method string getKey() 获取对象标识。apikey 维度为 APIKey ID；endpoint 维度为接入点；model 维度为模型名。
 * @method void setKey(string $Key) 设置对象标识。apikey 维度为 APIKey ID；endpoint 维度为接入点；model 维度为模型名。
 * @method string getName() 获取对象展示名。apikey 维度返回 APIKey 名称（已删除的 APIKey 仍保留原名）；
endpoint / model 维度等于 Key。
 * @method void setName(string $Name) 设置对象展示名。apikey 维度返回 APIKey 名称（已删除的 APIKey 仍保留原名）；
endpoint / model 维度等于 Key。
 * @method UsageStats getStats() 获取时间周期内的统计值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStats(UsageStats $Stats) 设置时间周期内的统计值
注意：此字段可能返回 null，表示取不到有效值。
 * @method UsageSeries getSeries() 获取时间周期内的时序点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeries(UsageSeries $Series) 设置时间周期内的时序点列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsageRankItem extends AbstractModel
{
    /**
     * @var integer 全局排名（从 1 起）。分页场景下仍为全量排序中的位次，非页内序号
     */
    public $Rank;

    /**
     * @var string 对象标识。apikey 维度为 APIKey ID；endpoint 维度为接入点；model 维度为模型名。
     */
    public $Key;

    /**
     * @var string 对象展示名。apikey 维度返回 APIKey 名称（已删除的 APIKey 仍保留原名）；
endpoint / model 维度等于 Key。
     */
    public $Name;

    /**
     * @var UsageStats 时间周期内的统计值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Stats;

    /**
     * @var UsageSeries 时间周期内的时序点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Series;

    /**
     * @param integer $Rank 全局排名（从 1 起）。分页场景下仍为全量排序中的位次，非页内序号
     * @param string $Key 对象标识。apikey 维度为 APIKey ID；endpoint 维度为接入点；model 维度为模型名。
     * @param string $Name 对象展示名。apikey 维度返回 APIKey 名称（已删除的 APIKey 仍保留原名）；
endpoint / model 维度等于 Key。
     * @param UsageStats $Stats 时间周期内的统计值
注意：此字段可能返回 null，表示取不到有效值。
     * @param UsageSeries $Series 时间周期内的时序点列表
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
        if (array_key_exists("Rank",$param) and $param["Rank"] !== null) {
            $this->Rank = $param["Rank"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Stats",$param) and $param["Stats"] !== null) {
            $this->Stats = new UsageStats();
            $this->Stats->deserialize($param["Stats"]);
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = new UsageSeries();
            $this->Series->deserialize($param["Series"]);
        }
    }
}
