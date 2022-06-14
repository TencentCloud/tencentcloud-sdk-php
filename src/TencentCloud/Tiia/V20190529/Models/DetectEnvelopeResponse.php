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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectEnvelope返回参数结构体
 *
 * @method array getFirstTags() 获取一级标签结果数组。识别是否文件封。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstTags(array $FirstTags) 设置一级标签结果数组。识别是否文件封。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecondTags() 获取二级标签结果数组。识别文件封正反面。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondTags(array $SecondTags) 设置二级标签结果数组。识别文件封正反面。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DetectEnvelopeResponse extends AbstractModel
{
    /**
     * @var array 一级标签结果数组。识别是否文件封。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstTags;

    /**
     * @var array 二级标签结果数组。识别文件封正反面。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondTags;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FirstTags 一级标签结果数组。识别是否文件封。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecondTags 二级标签结果数组。识别文件封正反面。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FirstTags",$param) and $param["FirstTags"] !== null) {
            $this->FirstTags = [];
            foreach ($param["FirstTags"] as $key => $value){
                $obj = new ImageTag();
                $obj->deserialize($value);
                array_push($this->FirstTags, $obj);
            }
        }

        if (array_key_exists("SecondTags",$param) and $param["SecondTags"] !== null) {
            $this->SecondTags = [];
            foreach ($param["SecondTags"] as $key => $value){
                $obj = new ImageTag();
                $obj->deserialize($value);
                array_push($this->SecondTags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
