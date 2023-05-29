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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SparkSQL批任务日志操作信息。
 *
 * @method string getText() 获取操作提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置操作提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperate() 获取操作类型：COPY、LOG、UI、RESULT、List、TAB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperate(string $Operate) 设置操作类型：COPY、LOG、UI、RESULT、List、TAB
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSupplement() 获取补充信息：如：taskid、sessionid、sparkui等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupplement(array $Supplement) 设置补充信息：如：taskid、sessionid、sparkui等
注意：此字段可能返回 null，表示取不到有效值。
 */
class SparkSessionBatchLogOperate extends AbstractModel
{
    /**
     * @var string 操作提示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 操作类型：COPY、LOG、UI、RESULT、List、TAB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operate;

    /**
     * @var array 补充信息：如：taskid、sessionid、sparkui等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Supplement;

    /**
     * @param string $Text 操作提示
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operate 操作类型：COPY、LOG、UI、RESULT、List、TAB
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Supplement 补充信息：如：taskid、sessionid、sparkui等
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("Supplement",$param) and $param["Supplement"] !== null) {
            $this->Supplement = [];
            foreach ($param["Supplement"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Supplement, $obj);
            }
        }
    }
}
