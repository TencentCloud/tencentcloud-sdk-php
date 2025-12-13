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
namespace TencentCloud\Ai3d\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitTextureTo3DJob请求参数结构体
 *
 * @method File3D getFile3D() 获取源3D模型文件。
Type可选值：OBJ，GLB
 * @method void setFile3D(File3D $File3D) 设置源3D模型文件。
Type可选值：OBJ，GLB
 * @method string getPrompt() 获取文生3D，3D内容的描述，中文正向提示词。
最多支持200个 utf-8 字符。
文生3D, image、image_url和 prompt必填其一，且prompt和image/image_url不能同时存在。
 * @method void setPrompt(string $Prompt) 设置文生3D，3D内容的描述，中文正向提示词。
最多支持200个 utf-8 字符。
文生3D, image、image_url和 prompt必填其一，且prompt和image/image_url不能同时存在。
 * @method Image getImage() 获取3D模型纹理参考图 Base64 数据和参考图图 Url。
- Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
- 图片限制：单边分辨率小于4096且大于128，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。
 * @method void setImage(Image $Image) 设置3D模型纹理参考图 Base64 数据和参考图图 Url。
- Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
- 图片限制：单边分辨率小于4096且大于128，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。
 * @method boolean getEnablePBR() 获取是否开启 PBR材质生成，默认 false。
 * @method void setEnablePBR(boolean $EnablePBR) 设置是否开启 PBR材质生成，默认 false。
 */
class SubmitTextureTo3DJobRequest extends AbstractModel
{
    /**
     * @var File3D 源3D模型文件。
Type可选值：OBJ，GLB
     */
    public $File3D;

    /**
     * @var string 文生3D，3D内容的描述，中文正向提示词。
最多支持200个 utf-8 字符。
文生3D, image、image_url和 prompt必填其一，且prompt和image/image_url不能同时存在。
     */
    public $Prompt;

    /**
     * @var Image 3D模型纹理参考图 Base64 数据和参考图图 Url。
- Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
- 图片限制：单边分辨率小于4096且大于128，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。
     */
    public $Image;

    /**
     * @var boolean 是否开启 PBR材质生成，默认 false。
     */
    public $EnablePBR;

    /**
     * @param File3D $File3D 源3D模型文件。
Type可选值：OBJ，GLB
     * @param string $Prompt 文生3D，3D内容的描述，中文正向提示词。
最多支持200个 utf-8 字符。
文生3D, image、image_url和 prompt必填其一，且prompt和image/image_url不能同时存在。
     * @param Image $Image 3D模型纹理参考图 Base64 数据和参考图图 Url。
- Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
- 图片限制：单边分辨率小于4096且大于128，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。
     * @param boolean $EnablePBR 是否开启 PBR材质生成，默认 false。
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
        if (array_key_exists("File3D",$param) and $param["File3D"] !== null) {
            $this->File3D = new File3D();
            $this->File3D->deserialize($param["File3D"]);
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new Image();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("EnablePBR",$param) and $param["EnablePBR"] !== null) {
            $this->EnablePBR = $param["EnablePBR"];
        }
    }
}
