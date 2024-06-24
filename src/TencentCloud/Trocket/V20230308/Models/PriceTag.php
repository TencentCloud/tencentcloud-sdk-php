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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 价格标签信息
 *
 * @method string getName() 获取计价名称
 * @method void setName(string $Name) 设置计价名称
 * @method integer getStep() 获取步长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStep(integer $Step) 设置步长
注意：此字段可能返回 null，表示取不到有效值。
 */
class PriceTag extends AbstractModel
{
    /**
     * @var string 计价名称
     */
    public $Name;

    /**
     * @var integer 步长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Step;

    /**
     * @param string $Name 计价名称
     * @param integer $Step 步长
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }
    }
}
