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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitHunyuanTo3DJob请求参数结构体
 *
 * @method string getPrompt() 获取3D内容的描述，中文正向提示词。最多支持200个 utf-8 字符，ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
 * @method void setPrompt(string $Prompt) 设置3D内容的描述，中文正向提示词。最多支持200个 utf-8 字符，ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
 * @method string getImageBase64() 获取输入图 Base64 数据。
大小：单边分辨率要求不小于50，不大于5000。大小不超过8m（base64编码后会大30%左右，建议实际输入图片不超过6m）
格式：jpg，png，jpeg，webp。
ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
 * @method void setImageBase64(string $ImageBase64) 设置输入图 Base64 数据。
大小：单边分辨率要求不小于50，不大于5000。大小不超过8m（base64编码后会大30%左右，建议实际输入图片不超过6m）
格式：jpg，png，jpeg，webp。
ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
 * @method string getImageUrl() 获取输入图Url。
大小：单边分辨率要求不小于50，不大于5000。大小不超过8m（base64编码后会大30%左右，建议实际输入图片不超过6m）
格式：jpg，png，jpeg，webp。
ImageBase64/ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
 * @method void setImageUrl(string $ImageUrl) 设置输入图Url。
大小：单边分辨率要求不小于50，不大于5000。大小不超过8m（base64编码后会大30%左右，建议实际输入图片不超过6m）
格式：jpg，png，jpeg，webp。
ImageBase64/ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
 * @method integer getNum() 获取生成数量。默认1，当前限制只能为1。
 * @method void setNum(integer $Num) 设置生成数量。默认1，当前限制只能为1。
 */
class SubmitHunyuanTo3DJobRequest extends AbstractModel
{
    /**
     * @var string 3D内容的描述，中文正向提示词。最多支持200个 utf-8 字符，ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
     */
    public $Prompt;

    /**
     * @var string 输入图 Base64 数据。
大小：单边分辨率要求不小于50，不大于5000。大小不超过8m（base64编码后会大30%左右，建议实际输入图片不超过6m）
格式：jpg，png，jpeg，webp。
ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
     */
    public $ImageBase64;

    /**
     * @var string 输入图Url。
大小：单边分辨率要求不小于50，不大于5000。大小不超过8m（base64编码后会大30%左右，建议实际输入图片不超过6m）
格式：jpg，png，jpeg，webp。
ImageBase64/ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
     */
    public $ImageUrl;

    /**
     * @var integer 生成数量。默认1，当前限制只能为1。
     */
    public $Num;

    /**
     * @param string $Prompt 3D内容的描述，中文正向提示词。最多支持200个 utf-8 字符，ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
     * @param string $ImageBase64 输入图 Base64 数据。
大小：单边分辨率要求不小于50，不大于5000。大小不超过8m（base64编码后会大30%左右，建议实际输入图片不超过6m）
格式：jpg，png，jpeg，webp。
ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
     * @param string $ImageUrl 输入图Url。
大小：单边分辨率要求不小于50，不大于5000。大小不超过8m（base64编码后会大30%左右，建议实际输入图片不超过6m）
格式：jpg，png，jpeg，webp。
ImageBase64/ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
     * @param integer $Num 生成数量。默认1，当前限制只能为1。
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
