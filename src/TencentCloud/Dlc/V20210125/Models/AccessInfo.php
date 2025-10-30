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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎的访问信息
 *
 * @method string getAccessType() 获取访问引擎的方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessType(string $AccessType) 设置访问引擎的方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAccessConnectionInfos() 获取访问引擎的url，内部的部分参数需要根据实际情况替换
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessConnectionInfos(array $AccessConnectionInfos) 设置访问引擎的url，内部的部分参数需要根据实际情况替换
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccessInfo extends AbstractModel
{
    /**
     * @var string 访问引擎的方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessType;

    /**
     * @var array 访问引擎的url，内部的部分参数需要根据实际情况替换
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessConnectionInfos;

    /**
     * @param string $AccessType 访问引擎的方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AccessConnectionInfos 访问引擎的url，内部的部分参数需要根据实际情况替换
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AccessConnectionInfos",$param) and $param["AccessConnectionInfos"] !== null) {
            $this->AccessConnectionInfos = $param["AccessConnectionInfos"];
        }
    }
}
