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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云开发内置 AI 模型信息
 *
 * @method string getGroupName() 获取<p>模型分组</p>
 * @method void setGroupName(string $GroupName) 设置<p>模型分组</p>
 * @method array getModels() 获取<p>模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModels(array $Models) 设置<p>模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 */
class ManagedAIModelGroup extends AbstractModel
{
    /**
     * @var string <p>模型分组</p>
     */
    public $GroupName;

    /**
     * @var array <p>模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Models;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @param string $GroupName <p>模型分组</p>
     * @param array $Models <p>模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark <p>备注</p>
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Models",$param) and $param["Models"] !== null) {
            $this->Models = [];
            foreach ($param["Models"] as $key => $value){
                $obj = new ManagedAIModel();
                $obj->deserialize($value);
                array_push($this->Models, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
