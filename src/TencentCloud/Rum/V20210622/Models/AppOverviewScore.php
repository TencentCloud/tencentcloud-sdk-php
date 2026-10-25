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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单应用总览评分
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method string getPlatform() 获取<p>端</p>
 * @method void setPlatform(string $Platform) 设置<p>端</p>
 * @method float getTotalScore() 获取<p>加权总分，全部缺失时省略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalScore(float $TotalScore) 设置<p>加权总分，全部缺失时省略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取<p>计分项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置<p>计分项</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppOverviewScore extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var string <p>端</p>
     */
    public $Platform;

    /**
     * @var float <p>加权总分，全部缺失时省略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalScore;

    /**
     * @var array <p>计分项</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param string $Platform <p>端</p>
     * @param float $TotalScore <p>加权总分，全部缺失时省略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items <p>计分项</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("TotalScore",$param) and $param["TotalScore"] !== null) {
            $this->TotalScore = $param["TotalScore"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new OverviewScoreItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
