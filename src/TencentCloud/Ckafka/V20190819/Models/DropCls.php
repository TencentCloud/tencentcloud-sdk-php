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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * dip失败消息写入cls的配置
 *
 * @method boolean getDropInvalidMessageToCls() 获取是否投递到cls
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropInvalidMessageToCls(boolean $DropInvalidMessageToCls) 设置是否投递到cls
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDropClsRegion() 获取投递cls的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropClsRegion(string $DropClsRegion) 设置投递cls的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDropClsOwneruin() 获取投递cls的账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropClsOwneruin(string $DropClsOwneruin) 设置投递cls的账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDropClsTopicId() 获取投递cls的主题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropClsTopicId(string $DropClsTopicId) 设置投递cls的主题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDropClsLogSet() 获取投递cls的日志集id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropClsLogSet(string $DropClsLogSet) 设置投递cls的日志集id
注意：此字段可能返回 null，表示取不到有效值。
 */
class DropCls extends AbstractModel
{
    /**
     * @var boolean 是否投递到cls
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropInvalidMessageToCls;

    /**
     * @var string 投递cls的地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropClsRegion;

    /**
     * @var string 投递cls的账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropClsOwneruin;

    /**
     * @var string 投递cls的主题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropClsTopicId;

    /**
     * @var string 投递cls的日志集id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropClsLogSet;

    /**
     * @param boolean $DropInvalidMessageToCls 是否投递到cls
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DropClsRegion 投递cls的地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DropClsOwneruin 投递cls的账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DropClsTopicId 投递cls的主题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DropClsLogSet 投递cls的日志集id
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
        if (array_key_exists("DropInvalidMessageToCls",$param) and $param["DropInvalidMessageToCls"] !== null) {
            $this->DropInvalidMessageToCls = $param["DropInvalidMessageToCls"];
        }

        if (array_key_exists("DropClsRegion",$param) and $param["DropClsRegion"] !== null) {
            $this->DropClsRegion = $param["DropClsRegion"];
        }

        if (array_key_exists("DropClsOwneruin",$param) and $param["DropClsOwneruin"] !== null) {
            $this->DropClsOwneruin = $param["DropClsOwneruin"];
        }

        if (array_key_exists("DropClsTopicId",$param) and $param["DropClsTopicId"] !== null) {
            $this->DropClsTopicId = $param["DropClsTopicId"];
        }

        if (array_key_exists("DropClsLogSet",$param) and $param["DropClsLogSet"] !== null) {
            $this->DropClsLogSet = $param["DropClsLogSet"];
        }
    }
}
