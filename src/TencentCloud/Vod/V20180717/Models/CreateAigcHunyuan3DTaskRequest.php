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
 * CreateAigcHunyuan3DTask请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method array getImageInfos() 获取<p>生成 3D 模型的参考图片信息。</p><p>入参限制：数组长度最大为1。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
 * @method void setImageInfos(array $ImageInfos) 设置<p>生成 3D 模型的参考图片信息。</p><p>入参限制：数组长度最大为1。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
 * @method array getMultiViewImageInfos() 获取<p>用于生成 3D 模型的多视角图片信息。</p><p>入参限制：数组长度必须在2-8之间，且必须包含 front 视角。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
 * @method void setMultiViewImageInfos(array $MultiViewImageInfos) 设置<p>用于生成 3D 模型的多视角图片信息。</p><p>入参限制：数组长度必须在2-8之间，且必须包含 front 视角。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
 * @method string getPrompt() 获取<p>生成 3D 模型的提示词。</p><p>入参限制：最长 1024 个 utf-8 字符。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
 * @method void setPrompt(string $Prompt) 设置<p>生成 3D 模型的提示词。</p><p>入参限制：最长 1024 个 utf-8 字符。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
 * @method string getGenerateType() 获取<p>生成类型。</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）；</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）；</li><li>Texture： 只生成纹理（需要填写 MeshInfos）</li></ul><p>默认值：Normal</p>
 * @method void setGenerateType(string $GenerateType) 设置<p>生成类型。</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）；</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）；</li><li>Texture： 只生成纹理（需要填写 MeshInfos）</li></ul><p>默认值：Normal</p>
 * @method array getMeshInfos() 获取<p>用于生成 3D 模型的参考 3D 模型。</p><p>入参限制：当填写 MeshInfos 时，则 GenerateType 取值必须为 Texture（贴纹理场景）。</p>
 * @method void setMeshInfos(array $MeshInfos) 设置<p>用于生成 3D 模型的参考 3D 模型。</p><p>入参限制：当填写 MeshInfos 时，则 GenerateType 取值必须为 Texture（贴纹理场景）。</p>
 * @method string getEnablePBR() 获取<p>是否开启输出 PBR 材质。</p><p>枚举值：</p><ul><li>Enabled： 开启；</li><li>Disabled： 关闭。</li></ul><p>默认值：Disabled</p>
 * @method void setEnablePBR(string $EnablePBR) 设置<p>是否开启输出 PBR 材质。</p><p>枚举值：</p><ul><li>Enabled： 开启；</li><li>Disabled： 关闭。</li></ul><p>默认值：Disabled</p>
 * @method integer getFaceCount() 获取<p>面片数。仅 GenerateType 取值为 Normal  和 Geometry 时生效。</p><p>取值范围：[3000, 1500000]</p><p>默认值：500000</p>
 * @method void setFaceCount(integer $FaceCount) 设置<p>面片数。仅 GenerateType 取值为 Normal  和 Geometry 时生效。</p><p>取值范围：[3000, 1500000]</p><p>默认值：500000</p>
 * @method string getKeepUV() 获取<p>是否保留 UV 展开。</p><p>枚举值：</p><ul><li>Enabled： 保留；</li><li>Disabled： 不保留。</li></ul><p>默认值：Disabled</p>
 * @method void setKeepUV(string $KeepUV) 设置<p>是否保留 UV 展开。</p><p>枚举值：</p><ul><li>Enabled： 保留；</li><li>Disabled： 不保留。</li></ul><p>默认值：Disabled</p>
 * @method string getResultFormat() 获取<p>结果格式。除默认返回的 obj 和 glb 外，附加输出的一种格式。</p><p>枚举值：</p><ul><li>FBX： FBX 格式文件。</li></ul>
 * @method void setResultFormat(string $ResultFormat) 设置<p>结果格式。除默认返回的 obj 和 glb 外，附加输出的一种格式。</p><p>枚举值：</p><ul><li>FBX： FBX 格式文件。</li></ul>
 * @method integer getSeed() 获取<p>随机种子，同一 Seed 输入下结果可复现。</p><p>取值范围：[0, 2147483647]</p>
 * @method void setSeed(integer $Seed) 设置<p>随机种子，同一 Seed 输入下结果可复现。</p><p>取值范围：[0, 2147483647]</p>
 * @method string getStyle() 获取<p>风格控制词。</p>
 * @method void setStyle(string $Style) 设置<p>风格控制词。</p>
 * @method AigcHunyuan3DOutputConfig getOutputConfig() 获取<p>任务的输出媒体文件配置。</p>
 * @method void setOutputConfig(AigcHunyuan3DOutputConfig $OutputConfig) 设置<p>任务的输出媒体文件配置。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method integer getTasksPriority() 获取<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 */
class CreateAigcHunyuan3DTaskRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var array <p>生成 3D 模型的参考图片信息。</p><p>入参限制：数组长度最大为1。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
     */
    public $ImageInfos;

    /**
     * @var array <p>用于生成 3D 模型的多视角图片信息。</p><p>入参限制：数组长度必须在2-8之间，且必须包含 front 视角。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
     */
    public $MultiViewImageInfos;

    /**
     * @var string <p>生成 3D 模型的提示词。</p><p>入参限制：最长 1024 个 utf-8 字符。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
     */
    public $Prompt;

    /**
     * @var string <p>生成类型。</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）；</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）；</li><li>Texture： 只生成纹理（需要填写 MeshInfos）</li></ul><p>默认值：Normal</p>
     */
    public $GenerateType;

    /**
     * @var array <p>用于生成 3D 模型的参考 3D 模型。</p><p>入参限制：当填写 MeshInfos 时，则 GenerateType 取值必须为 Texture（贴纹理场景）。</p>
     */
    public $MeshInfos;

    /**
     * @var string <p>是否开启输出 PBR 材质。</p><p>枚举值：</p><ul><li>Enabled： 开启；</li><li>Disabled： 关闭。</li></ul><p>默认值：Disabled</p>
     */
    public $EnablePBR;

    /**
     * @var integer <p>面片数。仅 GenerateType 取值为 Normal  和 Geometry 时生效。</p><p>取值范围：[3000, 1500000]</p><p>默认值：500000</p>
     */
    public $FaceCount;

    /**
     * @var string <p>是否保留 UV 展开。</p><p>枚举值：</p><ul><li>Enabled： 保留；</li><li>Disabled： 不保留。</li></ul><p>默认值：Disabled</p>
     */
    public $KeepUV;

    /**
     * @var string <p>结果格式。除默认返回的 obj 和 glb 外，附加输出的一种格式。</p><p>枚举值：</p><ul><li>FBX： FBX 格式文件。</li></ul>
     */
    public $ResultFormat;

    /**
     * @var integer <p>随机种子，同一 Seed 输入下结果可复现。</p><p>取值范围：[0, 2147483647]</p>
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
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param array $ImageInfos <p>生成 3D 模型的参考图片信息。</p><p>入参限制：数组长度最大为1。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
     * @param array $MultiViewImageInfos <p>用于生成 3D 模型的多视角图片信息。</p><p>入参限制：数组长度必须在2-8之间，且必须包含 front 视角。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
     * @param string $Prompt <p>生成 3D 模型的提示词。</p><p>入参限制：最长 1024 个 utf-8 字符。</p><p>ImageInfos、MultiViewImageInfos、Prompt 三个入参各自互斥，有且只能填写一个。</p>
     * @param string $GenerateType <p>生成类型。</p><p>枚举值：</p><ul><li>Normal： 生成完整 3D 资产（几何 + 纹理）；</li><li>Geometry： 只生成几何体（无纹理，输出速度更快）；</li><li>Texture： 只生成纹理（需要填写 MeshInfos）</li></ul><p>默认值：Normal</p>
     * @param array $MeshInfos <p>用于生成 3D 模型的参考 3D 模型。</p><p>入参限制：当填写 MeshInfos 时，则 GenerateType 取值必须为 Texture（贴纹理场景）。</p>
     * @param string $EnablePBR <p>是否开启输出 PBR 材质。</p><p>枚举值：</p><ul><li>Enabled： 开启；</li><li>Disabled： 关闭。</li></ul><p>默认值：Disabled</p>
     * @param integer $FaceCount <p>面片数。仅 GenerateType 取值为 Normal  和 Geometry 时生效。</p><p>取值范围：[3000, 1500000]</p><p>默认值：500000</p>
     * @param string $KeepUV <p>是否保留 UV 展开。</p><p>枚举值：</p><ul><li>Enabled： 保留；</li><li>Disabled： 不保留。</li></ul><p>默认值：Disabled</p>
     * @param string $ResultFormat <p>结果格式。除默认返回的 obj 和 glb 外，附加输出的一种格式。</p><p>枚举值：</p><ul><li>FBX： FBX 格式文件。</li></ul>
     * @param integer $Seed <p>随机种子，同一 Seed 输入下结果可复现。</p><p>取值范围：[0, 2147483647]</p>
     * @param string $Style <p>风格控制词。</p>
     * @param AigcHunyuan3DOutputConfig $OutputConfig <p>任务的输出媒体文件配置。</p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
     * @param integer $TasksPriority <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }
    }
}
