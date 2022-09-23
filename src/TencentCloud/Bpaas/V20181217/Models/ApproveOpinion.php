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
namespace TencentCloud\Bpaas\V20181217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审批意见
 *
 * @method integer getType() 获取方式 1:输入文字反馈  2:预设选项
 * @method void setType(integer $Type) 设置方式 1:输入文字反馈  2:预设选项
 * @method array getContent() 获取审批意见
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(array $Content) 设置审批意见
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApproveOpinion extends AbstractModel
{
    /**
     * @var integer 方式 1:输入文字反馈  2:预设选项
     */
    public $Type;

    /**
     * @var array 审批意见
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @param integer $Type 方式 1:输入文字反馈  2:预设选项
     * @param array $Content 审批意见
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
