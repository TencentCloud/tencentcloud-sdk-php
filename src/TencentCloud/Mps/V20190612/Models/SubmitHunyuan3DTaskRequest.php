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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitHunyuan3DTask请求参数结构体
 *
 * @method string getPrompt() 获取<p>文生 3D 的提示词</p><p>入参限制：最长 1024 utf-8 字符</p>
 * @method void setPrompt(string $Prompt) 设置<p>文生 3D 的提示词</p><p>入参限制：最长 1024 utf-8 字符</p>
 * @method string getImageUrl() 获取<p>图生 3D 的图片 URL（http/https）</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图生 3D 的图片 URL（http/https）</p>
 * @method array getMultiViewImages() 获取<p>多视角图生 3D，至少 2 张，且必须包含 front 视角</p>
 * @method void setMultiViewImages(array $MultiViewImages) 设置<p>多视角图生 3D，至少 2 张，且必须包含 front 视角</p>
 * @method string getGenerateType() 获取<p>生成类型</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）</li><li>Texture： 只生成纹理（需要传 MeshUrl）</li></ul><p>默认值：Normal</p>
 * @method void setGenerateType(string $GenerateType) 设置<p>生成类型</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）</li><li>Texture： 只生成纹理（需要传 MeshUrl）</li></ul><p>默认值：Normal</p>
 * @method string getMeshUrl() 获取<p>已有 3D 模型的 URL（仅支持 .glb / .obj）。传了 MeshUrl → 强制 GenerateType=Texture（贴纹理场景）</p>
 * @method void setMeshUrl(string $MeshUrl) 设置<p>已有 3D 模型的 URL（仅支持 .glb / .obj）。传了 MeshUrl → 强制 GenerateType=Texture（贴纹理场景）</p>
 * @method boolean getEnablePBR() 获取<p>是否输出 PBR 材质</p><p>默认值：false</p>
 * @method void setEnablePBR(boolean $EnablePBR) 设置<p>是否输出 PBR 材质</p><p>默认值：false</p>
 * @method integer getFaceCount() 获取<p>面片数，范围 [3000, 1500000]。仅 Normal / Geometry 分支生效</p><p>取值范围：[3000, 1500000]</p><p>默认值：500000</p>
 * @method void setFaceCount(integer $FaceCount) 设置<p>面片数，范围 [3000, 1500000]。仅 Normal / Geometry 分支生效</p><p>取值范围：[3000, 1500000]</p><p>默认值：500000</p>
 * @method boolean getKeepUV() 获取<p>是否保留 UV 展开</p><p>默认值：false</p>
 * @method void setKeepUV(boolean $KeepUV) 设置<p>是否保留 UV 展开</p><p>默认值：false</p>
 * @method string getResultFormat() 获取<p>除默认返回的 obj + glb 外，附加输出的一种格式。当前仅支持 FBX</p>
 * @method void setResultFormat(string $ResultFormat) 设置<p>除默认返回的 obj + glb 外，附加输出的一种格式。当前仅支持 FBX</p>
 * @method integer getSeed() 获取<p>随机种子，同一 Seed 输入下结果可复现</p>
 * @method void setSeed(integer $Seed) 设置<p>随机种子，同一 Seed 输入下结果可复现</p>
 * @method string getStyle() 获取<p>风格控制词</p>
 * @method void setStyle(string $Style) 设置<p>风格控制词</p>
 */
class SubmitHunyuan3DTaskRequest extends AbstractModel
{
    /**
     * @var string <p>文生 3D 的提示词</p><p>入参限制：最长 1024 utf-8 字符</p>
     */
    public $Prompt;

    /**
     * @var string <p>图生 3D 的图片 URL（http/https）</p>
     */
    public $ImageUrl;

    /**
     * @var array <p>多视角图生 3D，至少 2 张，且必须包含 front 视角</p>
     */
    public $MultiViewImages;

    /**
     * @var string <p>生成类型</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）</li><li>Texture： 只生成纹理（需要传 MeshUrl）</li></ul><p>默认值：Normal</p>
     */
    public $GenerateType;

    /**
     * @var string <p>已有 3D 模型的 URL（仅支持 .glb / .obj）。传了 MeshUrl → 强制 GenerateType=Texture（贴纹理场景）</p>
     */
    public $MeshUrl;

    /**
     * @var boolean <p>是否输出 PBR 材质</p><p>默认值：false</p>
     */
    public $EnablePBR;

    /**
     * @var integer <p>面片数，范围 [3000, 1500000]。仅 Normal / Geometry 分支生效</p><p>取值范围：[3000, 1500000]</p><p>默认值：500000</p>
     */
    public $FaceCount;

    /**
     * @var boolean <p>是否保留 UV 展开</p><p>默认值：false</p>
     */
    public $KeepUV;

    /**
     * @var string <p>除默认返回的 obj + glb 外，附加输出的一种格式。当前仅支持 FBX</p>
     */
    public $ResultFormat;

    /**
     * @var integer <p>随机种子，同一 Seed 输入下结果可复现</p>
     */
    public $Seed;

    /**
     * @var string <p>风格控制词</p>
     */
    public $Style;

    /**
     * @param string $Prompt <p>文生 3D 的提示词</p><p>入参限制：最长 1024 utf-8 字符</p>
     * @param string $ImageUrl <p>图生 3D 的图片 URL（http/https）</p>
     * @param array $MultiViewImages <p>多视角图生 3D，至少 2 张，且必须包含 front 视角</p>
     * @param string $GenerateType <p>生成类型</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）</li><li>Texture： 只生成纹理（需要传 MeshUrl）</li></ul><p>默认值：Normal</p>
     * @param string $MeshUrl <p>已有 3D 模型的 URL（仅支持 .glb / .obj）。传了 MeshUrl → 强制 GenerateType=Texture（贴纹理场景）</p>
     * @param boolean $EnablePBR <p>是否输出 PBR 材质</p><p>默认值：false</p>
     * @param integer $FaceCount <p>面片数，范围 [3000, 1500000]。仅 Normal / Geometry 分支生效</p><p>取值范围：[3000, 1500000]</p><p>默认值：500000</p>
     * @param boolean $KeepUV <p>是否保留 UV 展开</p><p>默认值：false</p>
     * @param string $ResultFormat <p>除默认返回的 obj + glb 外，附加输出的一种格式。当前仅支持 FBX</p>
     * @param integer $Seed <p>随机种子，同一 Seed 输入下结果可复现</p>
     * @param string $Style <p>风格控制词</p>
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

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("MultiViewImages",$param) and $param["MultiViewImages"] !== null) {
            $this->MultiViewImages = [];
            foreach ($param["MultiViewImages"] as $key => $value){
                $obj = new ViewImage();
                $obj->deserialize($value);
                array_push($this->MultiViewImages, $obj);
            }
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("MeshUrl",$param) and $param["MeshUrl"] !== null) {
            $this->MeshUrl = $param["MeshUrl"];
        }

        if (array_key_exists("EnablePBR",$param) and $param["EnablePBR"] !== null) {
            $this->EnablePBR = $param["EnablePBR"];
        }

        if (array_key_exists("FaceCount",$param) and $param["FaceCount"] !== null) {
            $this->FaceCount = $param["FaceCount"];
        }

        if (array_key_exists("KeepUV",$param) and $param["KeepUV"] !== null) {
            $this->KeepUV = $param["KeepUV"];
        }

        if (array_key_exists("ResultFormat",$param) and $param["ResultFormat"] !== null) {
            $this->ResultFormat = $param["ResultFormat"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }
    }
}
