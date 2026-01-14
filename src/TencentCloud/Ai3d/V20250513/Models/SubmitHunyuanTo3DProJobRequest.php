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
 * SubmitHunyuanTo3DProJob请求参数结构体
 *
 * @method string getModel() 获取混元生3D生成模型版本，默认为3.0，可选项：3.0，3.1
选择3.1版本时，LowPoly参数不可用。
 * @method void setModel(string $Model) 设置混元生3D生成模型版本，默认为3.0，可选项：3.0，3.1
选择3.1版本时，LowPoly参数不可用。
 * @method string getPrompt() 获取文生3D，3D内容的描述，中文正向提示词。
最多支持1024个 utf-8 字符。
ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
 * @method void setPrompt(string $Prompt) 设置文生3D，3D内容的描述，中文正向提示词。
最多支持1024个 utf-8 字符。
ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
 * @method string getImageBase64() 获取输入图 Base64 数据。
大小: 单边分辨率要求不小于128，不大于5000，大小≤6m (因base64编码后会大30%左右)
格式: jpg，png，jpeg，webp.
lmageBase64、lmageUr和 Prompt必填其一，且Prompt和lmageBase64/mageUr不能同时存在。
 * @method void setImageBase64(string $ImageBase64) 设置输入图 Base64 数据。
大小: 单边分辨率要求不小于128，不大于5000，大小≤6m (因base64编码后会大30%左右)
格式: jpg，png，jpeg，webp.
lmageBase64、lmageUr和 Prompt必填其一，且Prompt和lmageBase64/mageUr不能同时存在。
 * @method string getImageUrl() 获取输入图Url
大小: 单边分辨率要求不小于128，不大于5000，大小≤8m
格式: jpg，png，jpeg，webp.
lmageBase64、lmageUr和 Prompt必填其一，且Prompt和lmageBase64/mageUr不能同时存在。
 * @method void setImageUrl(string $ImageUrl) 设置输入图Url
大小: 单边分辨率要求不小于128，不大于5000，大小≤8m
格式: jpg，png，jpeg，webp.
lmageBase64、lmageUr和 Prompt必填其一，且Prompt和lmageBase64/mageUr不能同时存在。
 * @method array getMultiViewImages() 获取多视角的模型图片，视角参考值：
left：左视图；
right：右视图；
back：后视图；
top：顶视图（仅3.1版本支持）；
bottom：底视图（仅3.1版本支持）；
left_front：左前45°视图（仅3.1版本支持）；
right_front：右前45°视图（仅3.1版本支持）；

每个视角仅限制一张图片。
●图片大小限制：编码后所有图片大小总和不可超过8M。（base64编码下图片大小总和不超过6M，因base64编码后图片大小会大30%左右）
●图片分辨率限制：单边分辨率小于5000且大于128。
●支持图片格式：支持jpg或png
 * @method void setMultiViewImages(array $MultiViewImages) 设置多视角的模型图片，视角参考值：
left：左视图；
right：右视图；
back：后视图；
top：顶视图（仅3.1版本支持）；
bottom：底视图（仅3.1版本支持）；
left_front：左前45°视图（仅3.1版本支持）；
right_front：右前45°视图（仅3.1版本支持）；

每个视角仅限制一张图片。
●图片大小限制：编码后所有图片大小总和不可超过8M。（base64编码下图片大小总和不超过6M，因base64编码后图片大小会大30%左右）
●图片分辨率限制：单边分辨率小于5000且大于128。
●支持图片格式：支持jpg或png
 * @method boolean getEnablePBR() 获取是否开启 PBR材质生成，默认 false。
 * @method void setEnablePBR(boolean $EnablePBR) 设置是否开启 PBR材质生成，默认 false。
 * @method integer getFaceCount() 获取生成3D模型的面数，默认值为500000。
可支持生成面数范围，参考值：10000-1500000。
GenerateType中选择LowPoly时，参考值：3000-1500000。
 * @method void setFaceCount(integer $FaceCount) 设置生成3D模型的面数，默认值为500000。
可支持生成面数范围，参考值：10000-1500000。
GenerateType中选择LowPoly时，参考值：3000-1500000。
 * @method string getGenerateType() 获取生成任务类型，默认Normal，参考值：
Normal：可生成带纹理的几何模型。
LowPoly：可生成智能拓扑后的模型，选择此参数时，面数最低可到达3000面。
Geometry：可生成不带纹理的几何模型（白模），选择此任务时，EnablePBR参数不生效。
Sketch：可输入草图或线稿图生成模型，此模式下prompt和ImageUrl/ImageBase64可一起输入。
 * @method void setGenerateType(string $GenerateType) 设置生成任务类型，默认Normal，参考值：
Normal：可生成带纹理的几何模型。
LowPoly：可生成智能拓扑后的模型，选择此参数时，面数最低可到达3000面。
Geometry：可生成不带纹理的几何模型（白模），选择此任务时，EnablePBR参数不生效。
Sketch：可输入草图或线稿图生成模型，此模式下prompt和ImageUrl/ImageBase64可一起输入。
 * @method string getPolygonType() 获取该参数仅在GenerateType中选择LowPoly模式可生效。

多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:
triangle: 三角形面。
quadrilateral: 四边形面与三角形面混合生成。
 * @method void setPolygonType(string $PolygonType) 设置该参数仅在GenerateType中选择LowPoly模式可生效。

多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:
triangle: 三角形面。
quadrilateral: 四边形面与三角形面混合生成。
 * @method string getResultFormat() 获取生成模型的格式，仅限制生成一种格式； 生成模型文件组默认返回obj、glb格式（开启时Geometry参数时，默认为glb格式）； 可选值：STL，USDZ，FBX；
 * @method void setResultFormat(string $ResultFormat) 设置生成模型的格式，仅限制生成一种格式； 生成模型文件组默认返回obj、glb格式（开启时Geometry参数时，默认为glb格式）； 可选值：STL，USDZ，FBX；
 */
class SubmitHunyuanTo3DProJobRequest extends AbstractModel
{
    /**
     * @var string 混元生3D生成模型版本，默认为3.0，可选项：3.0，3.1
选择3.1版本时，LowPoly参数不可用。
     */
    public $Model;

    /**
     * @var string 文生3D，3D内容的描述，中文正向提示词。
最多支持1024个 utf-8 字符。
ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
     */
    public $Prompt;

    /**
     * @var string 输入图 Base64 数据。
大小: 单边分辨率要求不小于128，不大于5000，大小≤6m (因base64编码后会大30%左右)
格式: jpg，png，jpeg，webp.
lmageBase64、lmageUr和 Prompt必填其一，且Prompt和lmageBase64/mageUr不能同时存在。
     */
    public $ImageBase64;

    /**
     * @var string 输入图Url
大小: 单边分辨率要求不小于128，不大于5000，大小≤8m
格式: jpg，png，jpeg，webp.
lmageBase64、lmageUr和 Prompt必填其一，且Prompt和lmageBase64/mageUr不能同时存在。
     */
    public $ImageUrl;

    /**
     * @var array 多视角的模型图片，视角参考值：
left：左视图；
right：右视图；
back：后视图；
top：顶视图（仅3.1版本支持）；
bottom：底视图（仅3.1版本支持）；
left_front：左前45°视图（仅3.1版本支持）；
right_front：右前45°视图（仅3.1版本支持）；

每个视角仅限制一张图片。
●图片大小限制：编码后所有图片大小总和不可超过8M。（base64编码下图片大小总和不超过6M，因base64编码后图片大小会大30%左右）
●图片分辨率限制：单边分辨率小于5000且大于128。
●支持图片格式：支持jpg或png
     */
    public $MultiViewImages;

    /**
     * @var boolean 是否开启 PBR材质生成，默认 false。
     */
    public $EnablePBR;

    /**
     * @var integer 生成3D模型的面数，默认值为500000。
可支持生成面数范围，参考值：10000-1500000。
GenerateType中选择LowPoly时，参考值：3000-1500000。
     */
    public $FaceCount;

    /**
     * @var string 生成任务类型，默认Normal，参考值：
Normal：可生成带纹理的几何模型。
LowPoly：可生成智能拓扑后的模型，选择此参数时，面数最低可到达3000面。
Geometry：可生成不带纹理的几何模型（白模），选择此任务时，EnablePBR参数不生效。
Sketch：可输入草图或线稿图生成模型，此模式下prompt和ImageUrl/ImageBase64可一起输入。
     */
    public $GenerateType;

    /**
     * @var string 该参数仅在GenerateType中选择LowPoly模式可生效。

多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:
triangle: 三角形面。
quadrilateral: 四边形面与三角形面混合生成。
     */
    public $PolygonType;

    /**
     * @var string 生成模型的格式，仅限制生成一种格式； 生成模型文件组默认返回obj、glb格式（开启时Geometry参数时，默认为glb格式）； 可选值：STL，USDZ，FBX；
     */
    public $ResultFormat;

    /**
     * @param string $Model 混元生3D生成模型版本，默认为3.0，可选项：3.0，3.1
选择3.1版本时，LowPoly参数不可用。
     * @param string $Prompt 文生3D，3D内容的描述，中文正向提示词。
最多支持1024个 utf-8 字符。
ImageBase64、ImageUrl和 Prompt必填其一，且Prompt和ImageBase64/ImageUrl不能同时存在。
     * @param string $ImageBase64 输入图 Base64 数据。
大小: 单边分辨率要求不小于128，不大于5000，大小≤6m (因base64编码后会大30%左右)
格式: jpg，png，jpeg，webp.
lmageBase64、lmageUr和 Prompt必填其一，且Prompt和lmageBase64/mageUr不能同时存在。
     * @param string $ImageUrl 输入图Url
大小: 单边分辨率要求不小于128，不大于5000，大小≤8m
格式: jpg，png，jpeg，webp.
lmageBase64、lmageUr和 Prompt必填其一，且Prompt和lmageBase64/mageUr不能同时存在。
     * @param array $MultiViewImages 多视角的模型图片，视角参考值：
left：左视图；
right：右视图；
back：后视图；
top：顶视图（仅3.1版本支持）；
bottom：底视图（仅3.1版本支持）；
left_front：左前45°视图（仅3.1版本支持）；
right_front：右前45°视图（仅3.1版本支持）；

每个视角仅限制一张图片。
●图片大小限制：编码后所有图片大小总和不可超过8M。（base64编码下图片大小总和不超过6M，因base64编码后图片大小会大30%左右）
●图片分辨率限制：单边分辨率小于5000且大于128。
●支持图片格式：支持jpg或png
     * @param boolean $EnablePBR 是否开启 PBR材质生成，默认 false。
     * @param integer $FaceCount 生成3D模型的面数，默认值为500000。
可支持生成面数范围，参考值：10000-1500000。
GenerateType中选择LowPoly时，参考值：3000-1500000。
     * @param string $GenerateType 生成任务类型，默认Normal，参考值：
Normal：可生成带纹理的几何模型。
LowPoly：可生成智能拓扑后的模型，选择此参数时，面数最低可到达3000面。
Geometry：可生成不带纹理的几何模型（白模），选择此任务时，EnablePBR参数不生效。
Sketch：可输入草图或线稿图生成模型，此模式下prompt和ImageUrl/ImageBase64可一起输入。
     * @param string $PolygonType 该参数仅在GenerateType中选择LowPoly模式可生效。

多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:
triangle: 三角形面。
quadrilateral: 四边形面与三角形面混合生成。
     * @param string $ResultFormat 生成模型的格式，仅限制生成一种格式； 生成模型文件组默认返回obj、glb格式（开启时Geometry参数时，默认为glb格式）； 可选值：STL，USDZ，FBX；
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
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

        if (array_key_exists("MultiViewImages",$param) and $param["MultiViewImages"] !== null) {
            $this->MultiViewImages = [];
            foreach ($param["MultiViewImages"] as $key => $value){
                $obj = new ViewImage();
                $obj->deserialize($value);
                array_push($this->MultiViewImages, $obj);
            }
        }

        if (array_key_exists("EnablePBR",$param) and $param["EnablePBR"] !== null) {
            $this->EnablePBR = $param["EnablePBR"];
        }

        if (array_key_exists("FaceCount",$param) and $param["FaceCount"] !== null) {
            $this->FaceCount = $param["FaceCount"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("PolygonType",$param) and $param["PolygonType"] !== null) {
            $this->PolygonType = $param["PolygonType"];
        }

        if (array_key_exists("ResultFormat",$param) and $param["ResultFormat"] !== null) {
            $this->ResultFormat = $param["ResultFormat"];
        }
    }
}
