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
 * @method File3D getFile3D() 获取<p>源3D模型文件。<br>Type可选值：OBJ，GLB</p>
 * @method void setFile3D(File3D $File3D) 设置<p>源3D模型文件。<br>Type可选值：OBJ，GLB</p>
 * @method string getPrompt() 获取<p>文生3D，3D内容的描述，中文正向提示词。<br>最多支持200个 utf-8 字符。<br>文生3D, image、image_url和 prompt必填其一，且prompt和image/image_url不能同时存在。</p>
 * @method void setPrompt(string $Prompt) 设置<p>文生3D，3D内容的描述，中文正向提示词。<br>最多支持200个 utf-8 字符。<br>文生3D, image、image_url和 prompt必填其一，且prompt和image/image_url不能同时存在。</p>
 * @method Image getImage() 获取<p>3D模型纹理参考图 Base64 数据和参考图 Url。</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。</li><li>图片限制：单边分辨率小于4096且大于128，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。</li></ul>
 * @method void setImage(Image $Image) 设置<p>3D模型纹理参考图 Base64 数据和参考图 Url。</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。</li><li>图片限制：单边分辨率小于4096且大于128，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。</li></ul>
 * @method boolean getEnablePBR() 获取<p>是否开启 PBR材质生成，默认 false。</p>
 * @method void setEnablePBR(boolean $EnablePBR) 设置<p>是否开启 PBR材质生成，默认 false。</p>
 */
class SubmitTextureTo3DJobRequest extends AbstractModel
{
    /**
     * @var File3D <p>源3D模型文件。<br>Type可选值：OBJ，GLB</p>
     */
    public $File3D;

    /**
     * @var string <p>文生3D，3D内容的描述，中文正向提示词。<br>最多支持200个 utf-8 字符。<br>文生3D, image、image_url和 prompt必填其一，且prompt和image/image_url不能同时存在。</p>
     */
    public $Prompt;

    /**
     * @var Image <p>3D模型纹理参考图 Base64 数据和参考图 Url。</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。</li><li>图片限制：单边分辨率小于4096且大于128，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。</li></ul>
     */
    public $Image;

    /**
     * @var boolean <p>是否开启 PBR材质生成，默认 false。</p>
     */
    public $EnablePBR;

    /**
     * @param File3D $File3D <p>源3D模型文件。<br>Type可选值：OBJ，GLB</p>
     * @param string $Prompt <p>文生3D，3D内容的描述，中文正向提示词。<br>最多支持200个 utf-8 字符。<br>文生3D, image、image_url和 prompt必填其一，且prompt和image/image_url不能同时存在。</p>
     * @param Image $Image <p>3D模型纹理参考图 Base64 数据和参考图 Url。</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。</li><li>图片限制：单边分辨率小于4096且大于128，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。</li></ul>
     * @param boolean $EnablePBR <p>是否开启 PBR材质生成，默认 false。</p>
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
