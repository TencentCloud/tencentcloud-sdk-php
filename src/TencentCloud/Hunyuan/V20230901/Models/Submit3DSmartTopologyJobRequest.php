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
 * Submit3DSmartTopologyJob请求参数结构体
 *
 * @method InputFile3D getFile3D() 获取源3D文件模型链接，参考值：
Type：glb，obj格式文件必选其一。
Url：文件大小不超过200MB。
3D模型要求：复杂模型和拓扑过的模型暂无法支持减面操作，建议输入未拓扑过的高模，比如混元3D生成的模型，适用度比较高的类别：硬表面、游戏角色、道具、日常生活用品等。
 * @method void setFile3D(InputFile3D $File3D) 设置源3D文件模型链接，参考值：
Type：glb，obj格式文件必选其一。
Url：文件大小不超过200MB。
3D模型要求：复杂模型和拓扑过的模型暂无法支持减面操作，建议输入未拓扑过的高模，比如混元3D生成的模型，适用度比较高的类别：硬表面、游戏角色、道具、日常生活用品等。
 * @method string getPolygonType() 获取多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:
triangle:三角形面。
quadrilateral：四边形面。
 * @method void setPolygonType(string $PolygonType) 设置多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:
triangle:三角形面。
quadrilateral：四边形面。
 * @method string getFaceLevel() 获取减面后面数档位类型，可选值：high，medium, low。
 * @method void setFaceLevel(string $FaceLevel) 设置减面后面数档位类型，可选值：high，medium, low。
 */
class Submit3DSmartTopologyJobRequest extends AbstractModel
{
    /**
     * @var InputFile3D 源3D文件模型链接，参考值：
Type：glb，obj格式文件必选其一。
Url：文件大小不超过200MB。
3D模型要求：复杂模型和拓扑过的模型暂无法支持减面操作，建议输入未拓扑过的高模，比如混元3D生成的模型，适用度比较高的类别：硬表面、游戏角色、道具、日常生活用品等。
     */
    public $File3D;

    /**
     * @var string 多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:
triangle:三角形面。
quadrilateral：四边形面。
     */
    public $PolygonType;

    /**
     * @var string 减面后面数档位类型，可选值：high，medium, low。
     */
    public $FaceLevel;

    /**
     * @param InputFile3D $File3D 源3D文件模型链接，参考值：
Type：glb，obj格式文件必选其一。
Url：文件大小不超过200MB。
3D模型要求：复杂模型和拓扑过的模型暂无法支持减面操作，建议输入未拓扑过的高模，比如混元3D生成的模型，适用度比较高的类别：硬表面、游戏角色、道具、日常生活用品等。
     * @param string $PolygonType 多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:
triangle:三角形面。
quadrilateral：四边形面。
     * @param string $FaceLevel 减面后面数档位类型，可选值：high，medium, low。
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
            $this->File3D = new InputFile3D();
            $this->File3D->deserialize($param["File3D"]);
        }

        if (array_key_exists("PolygonType",$param) and $param["PolygonType"] !== null) {
            $this->PolygonType = $param["PolygonType"];
        }

        if (array_key_exists("FaceLevel",$param) and $param["FaceLevel"] !== null) {
            $this->FaceLevel = $param["FaceLevel"];
        }
    }
}
