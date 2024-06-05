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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FuseFaceUltra请求参数结构体
 *
 * @method string getRspImgType() 获取返回融合结果图片方式（url 或 base64) ，二选一。url有效期为1天。
 * @method void setRspImgType(string $RspImgType) 设置返回融合结果图片方式（url 或 base64) ，二选一。url有效期为1天。
 * @method array getMergeInfos() 获取用户人脸图片、素材模板图的人脸位置信息。主要用于素材模版中人脸以及用作融合的用户人脸相关信息，两种人脸都需要提供人脸图片，可选择提供人脸框位置，具体见MergeInfo说明 
目前最多支持融合模板图片中的6张人脸。
 * @method void setMergeInfos(array $MergeInfos) 设置用户人脸图片、素材模板图的人脸位置信息。主要用于素材模版中人脸以及用作融合的用户人脸相关信息，两种人脸都需要提供人脸图片，可选择提供人脸框位置，具体见MergeInfo说明 
目前最多支持融合模板图片中的6张人脸。
 * @method string getModelUrl() 获取素材模版图片的url地址。
●base64 和 url 必须提供一个，如果都提供以 base64 为准。
●素材图片限制：图片中面部尺寸大于34 * 34；图片尺寸大于64 * 64，小于8000 * 8000（单边限制）。图片url或者图片 base64 数据，base64 编码后大小不可超过10M（图片编码之后可能会大30%左右，建议合理控制图片大小）
●图片格式：支持jpg或png
 * @method void setModelUrl(string $ModelUrl) 设置素材模版图片的url地址。
●base64 和 url 必须提供一个，如果都提供以 base64 为准。
●素材图片限制：图片中面部尺寸大于34 * 34；图片尺寸大于64 * 64，小于8000 * 8000（单边限制）。图片url或者图片 base64 数据，base64 编码后大小不可超过10M（图片编码之后可能会大30%左右，建议合理控制图片大小）
●图片格式：支持jpg或png
 * @method string getModelImage() 获取素材模版图片base64数据。
●base64 和 url 必须提供一个，如果都提供以 base64 为准。
●素材图片限制：图片中面部尺寸大于34 * 34；图片尺寸大于64 * 64，小于8000*8000（单边限制）。图片url或者图片 base64 数据，base64 编码后大小不可超过10M（图片编码之后可能会大30%左右，建议合理控制图片大小）
●支持图片格式：支持jpg或png
 * @method void setModelImage(string $ModelImage) 设置素材模版图片base64数据。
●base64 和 url 必须提供一个，如果都提供以 base64 为准。
●素材图片限制：图片中面部尺寸大于34 * 34；图片尺寸大于64 * 64，小于8000*8000（单边限制）。图片url或者图片 base64 数据，base64 编码后大小不可超过10M（图片编码之后可能会大30%左右，建议合理控制图片大小）
●支持图片格式：支持jpg或png
 * @method FusionUltraParam getFusionUltraParam() 获取图片人脸融合（专业版）效果参数。
可用于设置拉脸、人脸增强、磨皮、牙齿增强等融合效果参数，生成理想的融合效果。不传默认使用接口推荐值。具体见FusionUltraParam说明

 * @method void setFusionUltraParam(FusionUltraParam $FusionUltraParam) 设置图片人脸融合（专业版）效果参数。
可用于设置拉脸、人脸增强、磨皮、牙齿增强等融合效果参数，生成理想的融合效果。不传默认使用接口推荐值。具体见FusionUltraParam说明

 * @method integer getLogoAdd() 获取为融合结果图添加合成标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图使用了人脸融合技术，是AI合成的图片。
 * @method void setLogoAdd(integer $LogoAdd) 设置为融合结果图添加合成标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图使用了人脸融合技术，是AI合成的图片。
 * @method LogoParam getLogoParam() 获取标识内容设置。
默认在融合结果图右下角添加“本图片为AI合成图片”字样，您可根据自身需要替换为其他的Logo图片。
 * @method void setLogoParam(LogoParam $LogoParam) 设置标识内容设置。
默认在融合结果图右下角添加“本图片为AI合成图片”字样，您可根据自身需要替换为其他的Logo图片。
 * @method integer getSwapModelType() 获取融合模型类型参数：默认为1。
图片人脸融合（专业版）针对不同场景，提供多种模型供选择。如您的产品是泛娱乐场景，推荐使用1；如您主要用于影像场景，推荐使用5。其他模型类型也可以结合您的产品使用场景进行选择，也许会有意想不到的效果
1：默认泛娱乐场景，画面偏锐。
2：影视级场景，画面偏自然。
3：影视级场景，高分辨率，画面偏自然。
4：影视级场景，高分辨率，画面偏自然。
5：影视级场景，高分辨率，对闭眼和遮挡更友好。
 * @method void setSwapModelType(integer $SwapModelType) 设置融合模型类型参数：默认为1。
图片人脸融合（专业版）针对不同场景，提供多种模型供选择。如您的产品是泛娱乐场景，推荐使用1；如您主要用于影像场景，推荐使用5。其他模型类型也可以结合您的产品使用场景进行选择，也许会有意想不到的效果
1：默认泛娱乐场景，画面偏锐。
2：影视级场景，画面偏自然。
3：影视级场景，高分辨率，画面偏自然。
4：影视级场景，高分辨率，画面偏自然。
5：影视级场景，高分辨率，对闭眼和遮挡更友好。
 */
class FuseFaceUltraRequest extends AbstractModel
{
    /**
     * @var string 返回融合结果图片方式（url 或 base64) ，二选一。url有效期为1天。
     */
    public $RspImgType;

    /**
     * @var array 用户人脸图片、素材模板图的人脸位置信息。主要用于素材模版中人脸以及用作融合的用户人脸相关信息，两种人脸都需要提供人脸图片，可选择提供人脸框位置，具体见MergeInfo说明 
目前最多支持融合模板图片中的6张人脸。
     */
    public $MergeInfos;

    /**
     * @var string 素材模版图片的url地址。
●base64 和 url 必须提供一个，如果都提供以 base64 为准。
●素材图片限制：图片中面部尺寸大于34 * 34；图片尺寸大于64 * 64，小于8000 * 8000（单边限制）。图片url或者图片 base64 数据，base64 编码后大小不可超过10M（图片编码之后可能会大30%左右，建议合理控制图片大小）
●图片格式：支持jpg或png
     */
    public $ModelUrl;

    /**
     * @var string 素材模版图片base64数据。
●base64 和 url 必须提供一个，如果都提供以 base64 为准。
●素材图片限制：图片中面部尺寸大于34 * 34；图片尺寸大于64 * 64，小于8000*8000（单边限制）。图片url或者图片 base64 数据，base64 编码后大小不可超过10M（图片编码之后可能会大30%左右，建议合理控制图片大小）
●支持图片格式：支持jpg或png
     */
    public $ModelImage;

    /**
     * @var FusionUltraParam 图片人脸融合（专业版）效果参数。
可用于设置拉脸、人脸增强、磨皮、牙齿增强等融合效果参数，生成理想的融合效果。不传默认使用接口推荐值。具体见FusionUltraParam说明

     */
    public $FusionUltraParam;

    /**
     * @var integer 为融合结果图添加合成标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图使用了人脸融合技术，是AI合成的图片。
     */
    public $LogoAdd;

    /**
     * @var LogoParam 标识内容设置。
默认在融合结果图右下角添加“本图片为AI合成图片”字样，您可根据自身需要替换为其他的Logo图片。
     */
    public $LogoParam;

    /**
     * @var integer 融合模型类型参数：默认为1。
图片人脸融合（专业版）针对不同场景，提供多种模型供选择。如您的产品是泛娱乐场景，推荐使用1；如您主要用于影像场景，推荐使用5。其他模型类型也可以结合您的产品使用场景进行选择，也许会有意想不到的效果
1：默认泛娱乐场景，画面偏锐。
2：影视级场景，画面偏自然。
3：影视级场景，高分辨率，画面偏自然。
4：影视级场景，高分辨率，画面偏自然。
5：影视级场景，高分辨率，对闭眼和遮挡更友好。
     */
    public $SwapModelType;

    /**
     * @param string $RspImgType 返回融合结果图片方式（url 或 base64) ，二选一。url有效期为1天。
     * @param array $MergeInfos 用户人脸图片、素材模板图的人脸位置信息。主要用于素材模版中人脸以及用作融合的用户人脸相关信息，两种人脸都需要提供人脸图片，可选择提供人脸框位置，具体见MergeInfo说明 
目前最多支持融合模板图片中的6张人脸。
     * @param string $ModelUrl 素材模版图片的url地址。
●base64 和 url 必须提供一个，如果都提供以 base64 为准。
●素材图片限制：图片中面部尺寸大于34 * 34；图片尺寸大于64 * 64，小于8000 * 8000（单边限制）。图片url或者图片 base64 数据，base64 编码后大小不可超过10M（图片编码之后可能会大30%左右，建议合理控制图片大小）
●图片格式：支持jpg或png
     * @param string $ModelImage 素材模版图片base64数据。
●base64 和 url 必须提供一个，如果都提供以 base64 为准。
●素材图片限制：图片中面部尺寸大于34 * 34；图片尺寸大于64 * 64，小于8000*8000（单边限制）。图片url或者图片 base64 数据，base64 编码后大小不可超过10M（图片编码之后可能会大30%左右，建议合理控制图片大小）
●支持图片格式：支持jpg或png
     * @param FusionUltraParam $FusionUltraParam 图片人脸融合（专业版）效果参数。
可用于设置拉脸、人脸增强、磨皮、牙齿增强等融合效果参数，生成理想的融合效果。不传默认使用接口推荐值。具体见FusionUltraParam说明

     * @param integer $LogoAdd 为融合结果图添加合成标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图使用了人脸融合技术，是AI合成的图片。
     * @param LogoParam $LogoParam 标识内容设置。
默认在融合结果图右下角添加“本图片为AI合成图片”字样，您可根据自身需要替换为其他的Logo图片。
     * @param integer $SwapModelType 融合模型类型参数：默认为1。
图片人脸融合（专业版）针对不同场景，提供多种模型供选择。如您的产品是泛娱乐场景，推荐使用1；如您主要用于影像场景，推荐使用5。其他模型类型也可以结合您的产品使用场景进行选择，也许会有意想不到的效果
1：默认泛娱乐场景，画面偏锐。
2：影视级场景，画面偏自然。
3：影视级场景，高分辨率，画面偏自然。
4：影视级场景，高分辨率，画面偏自然。
5：影视级场景，高分辨率，对闭眼和遮挡更友好。
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
        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }

        if (array_key_exists("MergeInfos",$param) and $param["MergeInfos"] !== null) {
            $this->MergeInfos = [];
            foreach ($param["MergeInfos"] as $key => $value){
                $obj = new MergeInfo();
                $obj->deserialize($value);
                array_push($this->MergeInfos, $obj);
            }
        }

        if (array_key_exists("ModelUrl",$param) and $param["ModelUrl"] !== null) {
            $this->ModelUrl = $param["ModelUrl"];
        }

        if (array_key_exists("ModelImage",$param) and $param["ModelImage"] !== null) {
            $this->ModelImage = $param["ModelImage"];
        }

        if (array_key_exists("FusionUltraParam",$param) and $param["FusionUltraParam"] !== null) {
            $this->FusionUltraParam = new FusionUltraParam();
            $this->FusionUltraParam->deserialize($param["FusionUltraParam"]);
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("SwapModelType",$param) and $param["SwapModelType"] !== null) {
            $this->SwapModelType = $param["SwapModelType"];
        }
    }
}
