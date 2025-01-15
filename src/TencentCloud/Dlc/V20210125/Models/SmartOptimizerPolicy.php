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
 * SmartOptimizerPolicy
 *
 * @method string getInherit() 获取是否继承
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInherit(string $Inherit) 设置是否继承
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResources() 获取ResourceInfo
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResources(array $Resources) 设置ResourceInfo
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartOptimizerWrittenPolicy getWritten() 获取SmartOptimizerWrittenPolicy
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWritten(SmartOptimizerWrittenPolicy $Written) 设置SmartOptimizerWrittenPolicy
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartOptimizerLifecyclePolicy getLifecycle() 获取SmartOptimizerLifecyclePolicy
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifecycle(SmartOptimizerLifecyclePolicy $Lifecycle) 设置SmartOptimizerLifecyclePolicy
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartOptimizerIndexPolicy getIndex() 获取SmartOptimizerIndexPolicy
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(SmartOptimizerIndexPolicy $Index) 设置SmartOptimizerIndexPolicy
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartOptimizerChangeTablePolicy getChangeTable() 获取SmartOptimizerChangeTablePolicy
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChangeTable(SmartOptimizerChangeTablePolicy $ChangeTable) 设置SmartOptimizerChangeTablePolicy
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmartOptimizerPolicy extends AbstractModel
{
    /**
     * @var string 是否继承
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Inherit;

    /**
     * @var array ResourceInfo
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resources;

    /**
     * @var SmartOptimizerWrittenPolicy SmartOptimizerWrittenPolicy
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Written;

    /**
     * @var SmartOptimizerLifecyclePolicy SmartOptimizerLifecyclePolicy
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lifecycle;

    /**
     * @var SmartOptimizerIndexPolicy SmartOptimizerIndexPolicy
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var SmartOptimizerChangeTablePolicy SmartOptimizerChangeTablePolicy
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChangeTable;

    /**
     * @param string $Inherit 是否继承
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Resources ResourceInfo
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartOptimizerWrittenPolicy $Written SmartOptimizerWrittenPolicy
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartOptimizerLifecyclePolicy $Lifecycle SmartOptimizerLifecyclePolicy
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartOptimizerIndexPolicy $Index SmartOptimizerIndexPolicy
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartOptimizerChangeTablePolicy $ChangeTable SmartOptimizerChangeTablePolicy
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
        if (array_key_exists("Inherit",$param) and $param["Inherit"] !== null) {
            $this->Inherit = $param["Inherit"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ResourceInfo();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Written",$param) and $param["Written"] !== null) {
            $this->Written = new SmartOptimizerWrittenPolicy();
            $this->Written->deserialize($param["Written"]);
        }

        if (array_key_exists("Lifecycle",$param) and $param["Lifecycle"] !== null) {
            $this->Lifecycle = new SmartOptimizerLifecyclePolicy();
            $this->Lifecycle->deserialize($param["Lifecycle"]);
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = new SmartOptimizerIndexPolicy();
            $this->Index->deserialize($param["Index"]);
        }

        if (array_key_exists("ChangeTable",$param) and $param["ChangeTable"] !== null) {
            $this->ChangeTable = new SmartOptimizerChangeTablePolicy();
            $this->ChangeTable->deserialize($param["ChangeTable"]);
        }
    }
}
