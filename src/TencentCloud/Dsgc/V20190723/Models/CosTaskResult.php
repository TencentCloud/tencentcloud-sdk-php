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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos批量操作返回结果结构体
 *
 * @method string getResult() 获取结果类型。
 * @method void setResult(string $Result) 设置结果类型。
 * @method string getResultDescription() 获取结果描述。
 * @method void setResultDescription(string $ResultDescription) 设置结果描述。
 * @method ErrDescription getErrDescription() 获取错误信息描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrDescription(ErrDescription $ErrDescription) 设置错误信息描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取资源ID。
 * @method void setResourceId(string $ResourceId) 设置资源ID。
 */
class CosTaskResult extends AbstractModel
{
    /**
     * @var string 结果类型。
     */
    public $Result;

    /**
     * @var string 结果描述。
     */
    public $ResultDescription;

    /**
     * @var ErrDescription 错误信息描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrDescription;

    /**
     * @var string 资源ID。
     */
    public $ResourceId;

    /**
     * @param string $Result 结果类型。
     * @param string $ResultDescription 结果描述。
     * @param ErrDescription $ErrDescription 错误信息描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId 资源ID。
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ResultDescription",$param) and $param["ResultDescription"] !== null) {
            $this->ResultDescription = $param["ResultDescription"];
        }

        if (array_key_exists("ErrDescription",$param) and $param["ErrDescription"] !== null) {
            $this->ErrDescription = new ErrDescription();
            $this->ErrDescription->deserialize($param["ErrDescription"]);
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
