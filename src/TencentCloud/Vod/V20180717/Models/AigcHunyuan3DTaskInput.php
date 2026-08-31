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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 混元 3D 任务的输入。
 *
 * @method array getImageInfos() 获取<p>生成 3D 的参考图片信息。</p>
 * @method void setImageInfos(array $ImageInfos) 设置<p>生成 3D 的参考图片信息。</p>
 * @method array getMultiViewImageInfos() 获取<p>用于生成 3D 模型的多视角图片信息。</p><p>数组长度必须在2-8之间，且必须包含 front 视角。</p>
 * @method void setMultiViewImageInfos(array $MultiViewImageInfos) 设置<p>用于生成 3D 模型的多视角图片信息。</p><p>数组长度必须在2-8之间，且必须包含 front 视角。</p>
 * @method string getPrompt() 获取<p>生成 3D 模型的提示词。</p>
 * @method void setPrompt(string $Prompt) 设置<p>生成 3D 模型的提示词。</p>
 * @method string getGenerateType() 获取<p>生成类型。</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）；</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）；</li><li>Texture： 只生成纹理（需要填写 MeshInfos）</li></ul>
 * @method void setGenerateType(string $GenerateType) 设置<p>生成类型。</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）；</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）；</li><li>Texture： 只生成纹理（需要填写 MeshInfos）</li></ul>
 * @method array getMeshInfos() 获取<p>用于生成 3D 模型的参考 3D 模型。</p>
 * @method void setMeshInfos(array $MeshInfos) 设置<p>用于生成 3D 模型的参考 3D 模型。</p>
 * @method string getEnablePBR() 获取<p>是否开启输出 PBR 材质。</p><p>枚举值：</p><ul><li>Enabled： 开启；</li><li>Disabled： 关闭。</li></ul>
 * @method void setEnablePBR(string $EnablePBR) 设置<p>是否开启输出 PBR 材质。</p><p>枚举值：</p><ul><li>Enabled： 开启；</li><li>Disabled： 关闭。</li></ul>
 * @method integer getFaceCount() 获取<p>面片数。仅 GenerateType 取值为 Normal  和 Geometry 时生效。</p>
 * @method void setFaceCount(integer $FaceCount) 设置<p>面片数。仅 GenerateType 取值为 Normal  和 Geometry 时生效。</p>
 * @method string getKeepUV() 获取<p>是否保留 UV 展开。</p><p>枚举值：</p><ul><li>Enabled： 保留；</li><li>Disabled： 不保留。</li></ul>
 * @method void setKeepUV(string $KeepUV) 设置<p>是否保留 UV 展开。</p><p>枚举值：</p><ul><li>Enabled： 保留；</li><li>Disabled： 不保留。</li></ul>
 * @method string getResultFormat() 获取<p>结果格式。除默认返回的 obj 和 glb 外，附加输出的一种格式。</p><p>枚举值：</p><ul><li>FBX： FBX 格式文件。</li></ul>
 * @method void setResultFormat(string $ResultFormat) 设置<p>结果格式。除默认返回的 obj 和 glb 外，附加输出的一种格式。</p><p>枚举值：</p><ul><li>FBX： FBX 格式文件。</li></ul>
 * @method integer getSeed() 获取<p>随机种子，同一 Seed 输入下结果可复现。</p>
 * @method void setSeed(integer $Seed) 设置<p>随机种子，同一 Seed 输入下结果可复现。</p>
 * @method string getStyle() 获取<p>风格控制词。</p>
 * @method void setStyle(string $Style) 设置<p>风格控制词。</p>
 * @method AigcHunyuan3DOutputConfig getOutputConfig() 获取<p>任务的输出媒体文件配置。</p>
 * @method void setOutputConfig(AigcHunyuan3DOutputConfig $OutputConfig) 设置<p>任务的输出媒体文件配置。</p>
 */
class AigcHunyuan3DTaskInput extends AbstractModel
{
    /**
     * @var array <p>生成 3D 的参考图片信息。</p>
     */
    public $ImageInfos;

    /**
     * @var array <p>用于生成 3D 模型的多视角图片信息。</p><p>数组长度必须在2-8之间，且必须包含 front 视角。</p>
     */
    public $MultiViewImageInfos;

    /**
     * @var string <p>生成 3D 模型的提示词。</p>
     */
    public $Prompt;

    /**
     * @var string <p>生成类型。</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）；</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）；</li><li>Texture： 只生成纹理（需要填写 MeshInfos）</li></ul>
     */
    public $GenerateType;

    /**
     * @var array <p>用于生成 3D 模型的参考 3D 模型。</p>
     */
    public $MeshInfos;

    /**
     * @var string <p>是否开启输出 PBR 材质。</p><p>枚举值：</p><ul><li>Enabled： 开启；</li><li>Disabled： 关闭。</li></ul>
     */
    public $EnablePBR;

    /**
     * @var integer <p>面片数。仅 GenerateType 取值为 Normal  和 Geometry 时生效。</p>
     */
    public $FaceCount;

    /**
     * @var string <p>是否保留 UV 展开。</p><p>枚举值：</p><ul><li>Enabled： 保留；</li><li>Disabled： 不保留。</li></ul>
     */
    public $KeepUV;

    /**
     * @var string <p>结果格式。除默认返回的 obj 和 glb 外，附加输出的一种格式。</p><p>枚举值：</p><ul><li>FBX： FBX 格式文件。</li></ul>
     */
    public $ResultFormat;

    /**
     * @var integer <p>随机种子，同一 Seed 输入下结果可复现。</p>
     */
    public $Seed;

    /**
     * @var string <p>风格控制词。</p>
     */
    public $Style;

    /**
     * @var AigcHunyuan3DOutputConfig <p>任务的输出媒体文件配置。</p>
     */
    public $OutputConfig;

    /**
     * @param array $ImageInfos <p>生成 3D 的参考图片信息。</p>
     * @param array $MultiViewImageInfos <p>用于生成 3D 模型的多视角图片信息。</p><p>数组长度必须在2-8之间，且必须包含 front 视角。</p>
     * @param string $Prompt <p>生成 3D 模型的提示词。</p>
     * @param string $GenerateType <p>生成类型。</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）；</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）；</li><li>Texture： 只生成纹理（需要填写 MeshInfos）</li></ul>
     * @param array $MeshInfos <p>用于生成 3D 模型的参考 3D 模型。</p>
     * @param string $EnablePBR <p>是否开启输出 PBR 材质。</p><p>枚举值：</p><ul><li>Enabled： 开启；</li><li>Disabled： 关闭。</li></ul>
     * @param integer $FaceCount <p>面片数。仅 GenerateType 取值为 Normal  和 Geometry 时生效。</p>
     * @param string $KeepUV <p>是否保留 UV 展开。</p><p>枚举值：</p><ul><li>Enabled： 保留；</li><li>Disabled： 不保留。</li></ul>
     * @param string $ResultFormat <p>结果格式。除默认返回的 obj 和 glb 外，附加输出的一种格式。</p><p>枚举值：</p><ul><li>FBX： FBX 格式文件。</li></ul>
     * @param integer $Seed <p>随机种子，同一 Seed 输入下结果可复现。</p>
     * @param string $Style <p>风格控制词。</p>
     * @param AigcHunyuan3DOutputConfig $OutputConfig <p>任务的输出媒体文件配置。</p>
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
        if (array_key_exists("ImageInfos",$param) and $param["ImageInfos"] !== null) {
            $this->ImageInfos = [];
            foreach ($param["ImageInfos"] as $key => $value){
                $obj = new AigcHunyuan3DReferenceImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfos, $obj);
            }
        }

        if (array_key_exists("MultiViewImageInfos",$param) and $param["MultiViewImageInfos"] !== null) {
            $this->MultiViewImageInfos = [];
            foreach ($param["MultiViewImageInfos"] as $key => $value){
                $obj = new AigcHunyuan3DMultiViewImageInfo();
                $obj->deserialize($value);
                array_push($this->MultiViewImageInfos, $obj);
            }
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("MeshInfos",$param) and $param["MeshInfos"] !== null) {
            $this->MeshInfos = [];
            foreach ($param["MeshInfos"] as $key => $value){
                $obj = new AigcHunyuan3DMeshInfo();
                $obj->deserialize($value);
                array_push($this->MeshInfos, $obj);
            }
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

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcHunyuan3DOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
