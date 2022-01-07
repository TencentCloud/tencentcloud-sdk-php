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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述如何提取数据
 *
 * @method string getExtractionInputPath() 获取JsonPath, 不指定则使用默认值$.
 * @method void setExtractionInputPath(string $ExtractionInputPath) 设置JsonPath, 不指定则使用默认值$.
 * @method string getFormat() 获取取值: TEXT/JSON
 * @method void setFormat(string $Format) 设置取值: TEXT/JSON
 * @method TextParams getTextParams() 获取仅在Text需要传递
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextParams(TextParams $TextParams) 设置仅在Text需要传递
注意：此字段可能返回 null，表示取不到有效值。
 */
class Extraction extends AbstractModel
{
    /**
     * @var string JsonPath, 不指定则使用默认值$.
     */
    public $ExtractionInputPath;

    /**
     * @var string 取值: TEXT/JSON
     */
    public $Format;

    /**
     * @var TextParams 仅在Text需要传递
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextParams;

    /**
     * @param string $ExtractionInputPath JsonPath, 不指定则使用默认值$.
     * @param string $Format 取值: TEXT/JSON
     * @param TextParams $TextParams 仅在Text需要传递
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
        if (array_key_exists("ExtractionInputPath",$param) and $param["ExtractionInputPath"] !== null) {
            $this->ExtractionInputPath = $param["ExtractionInputPath"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("TextParams",$param) and $param["TextParams"] !== null) {
            $this->TextParams = new TextParams();
            $this->TextParams->deserialize($param["TextParams"]);
        }
    }
}
