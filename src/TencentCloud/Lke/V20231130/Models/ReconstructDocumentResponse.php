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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReconstructDocument返回参数结构体
 *
 * @method string getMarkdownBase64() 获取识别生成的Markdown文件base64编码的字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarkdownBase64(string $MarkdownBase64) 设置识别生成的Markdown文件base64编码的字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInsetImagePackage() 获取输入文件中嵌入的图片放在一个文件夹中打包为.zip压缩文件，识别生成的Markdown文件通过路径关联插入本文件夹中的图片。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsetImagePackage(string $InsetImagePackage) 设置输入文件中嵌入的图片放在一个文件夹中打包为.zip压缩文件，识别生成的Markdown文件通过路径关联插入本文件夹中的图片。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDocumentRecognizeInfo() 获取输入文件中嵌入的图片中文字内容的识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocumentRecognizeInfo(array $DocumentRecognizeInfo) 设置输入文件中嵌入的图片中文字内容的识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ReconstructDocumentResponse extends AbstractModel
{
    /**
     * @var string 识别生成的Markdown文件base64编码的字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MarkdownBase64;

    /**
     * @var string 输入文件中嵌入的图片放在一个文件夹中打包为.zip压缩文件，识别生成的Markdown文件通过路径关联插入本文件夹中的图片。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsetImagePackage;

    /**
     * @var array 输入文件中嵌入的图片中文字内容的识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocumentRecognizeInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MarkdownBase64 识别生成的Markdown文件base64编码的字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InsetImagePackage 输入文件中嵌入的图片放在一个文件夹中打包为.zip压缩文件，识别生成的Markdown文件通过路径关联插入本文件夹中的图片。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DocumentRecognizeInfo 输入文件中嵌入的图片中文字内容的识别结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MarkdownBase64",$param) and $param["MarkdownBase64"] !== null) {
            $this->MarkdownBase64 = $param["MarkdownBase64"];
        }

        if (array_key_exists("InsetImagePackage",$param) and $param["InsetImagePackage"] !== null) {
            $this->InsetImagePackage = $param["InsetImagePackage"];
        }

        if (array_key_exists("DocumentRecognizeInfo",$param) and $param["DocumentRecognizeInfo"] !== null) {
            $this->DocumentRecognizeInfo = [];
            foreach ($param["DocumentRecognizeInfo"] as $key => $value){
                $obj = new DocumentRecognizeInfo();
                $obj->deserialize($value);
                array_push($this->DocumentRecognizeInfo, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
