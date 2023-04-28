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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当前WAF威胁情报封禁模块详情
 *
 * @method array getTags() 获取封禁属性标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置封禁属性标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefenseStatus() 获取封禁模组启用状态
 * @method void setDefenseStatus(integer $DefenseStatus) 设置封禁模组启用状态
 * @method string getLastUpdateTime() 获取最后更新时间
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置最后更新时间
 */
class WafThreatenIntelligenceDetails extends AbstractModel
{
    /**
     * @var array 封禁属性标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 封禁模组启用状态
     */
    public $DefenseStatus;

    /**
     * @var string 最后更新时间
     */
    public $LastUpdateTime;

    /**
     * @param array $Tags 封禁属性标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefenseStatus 封禁模组启用状态
     * @param string $LastUpdateTime 最后更新时间
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("DefenseStatus",$param) and $param["DefenseStatus"] !== null) {
            $this->DefenseStatus = $param["DefenseStatus"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }
    }
}
