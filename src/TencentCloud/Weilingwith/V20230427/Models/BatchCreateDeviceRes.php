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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量新增设备接口返回结果
 *
 * @method array getSuccessSet() 获取新增成功的设备列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessSet(array $SuccessSet) 设置新增成功的设备列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailSet() 获取新增失败的设备列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailSet(array $FailSet) 设置新增失败的设备列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchCreateDeviceRes extends AbstractModel
{
    /**
     * @var array 新增成功的设备列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessSet;

    /**
     * @var array 新增失败的设备列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailSet;

    /**
     * @param array $SuccessSet 新增成功的设备列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FailSet 新增失败的设备列表
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
        if (array_key_exists("SuccessSet",$param) and $param["SuccessSet"] !== null) {
            $this->SuccessSet = [];
            foreach ($param["SuccessSet"] as $key => $value){
                $obj = new CreateDeviceSucceeded();
                $obj->deserialize($value);
                array_push($this->SuccessSet, $obj);
            }
        }

        if (array_key_exists("FailSet",$param) and $param["FailSet"] !== null) {
            $this->FailSet = [];
            foreach ($param["FailSet"] as $key => $value){
                $obj = new CreateDeviceFailed();
                $obj->deserialize($value);
                array_push($this->FailSet, $obj);
            }
        }
    }
}
