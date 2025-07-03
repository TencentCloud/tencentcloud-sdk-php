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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据运维脚本信息
 *
 * @method string getScriptContent() 获取脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosPath() 获取脚本所在COS的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosPath(string $CosPath) 设置脚本所在COS的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosRegion() 获取脚本所在COS的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosRegion(string $CosRegion) 设置脚本所在COS的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosBucketName() 获取脚本所在COS的桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucketName(string $CosBucketName) 设置脚本所在COS的桶名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiopsScriptInfo extends AbstractModel
{
    /**
     * @var string 脚本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContent;

    /**
     * @var string 脚本所在COS的路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosPath;

    /**
     * @var string 脚本所在COS的地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosRegion;

    /**
     * @var string 脚本所在COS的桶名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucketName;

    /**
     * @param string $ScriptContent 脚本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosPath 脚本所在COS的路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosRegion 脚本所在COS的地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosBucketName 脚本所在COS的桶名称
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
        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }
    }
}
