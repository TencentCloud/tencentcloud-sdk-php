<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyConditionList.ConfigManual.CalcType
 *
 * @method array getKeys() 获取CalcType 取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeys(array $Keys) 设置CalcType 取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNeed() 获取是否必须
 * @method void setNeed(boolean $Need) 设置是否必须
 */
class DescribePolicyConditionListConfigManualCalcType extends AbstractModel
{
    /**
     * @var array CalcType 取值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keys;

    /**
     * @var boolean 是否必须
     */
    public $Need;

    /**
     * @param array $Keys CalcType 取值
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Need 是否必须
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
        if (array_key_exists('Keys',$param) and $param['Keys'] !== null) {
            $this->Keys = $param['Keys'];
        }

        if (array_key_exists('Need',$param) and $param['Need'] !== null) {
            $this->Need = $param['Need'];
        }
    }
}
