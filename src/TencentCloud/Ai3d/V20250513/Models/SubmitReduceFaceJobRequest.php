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
 * SubmitReduceFaceJob请求参数结构体
 *
 * @method File3D getFile3D() 获取<p>源3D模型文件。其中参数 Type 和 Url 必填，参数 PreviewImageUrl 无意义，可忽略。Type可选值：OBJ，GLB，FBX</p>
 * @method void setFile3D(File3D $File3D) 设置<p>源3D模型文件。其中参数 Type 和 Url 必填，参数 PreviewImageUrl 无意义，可忽略。Type可选值：OBJ，GLB，FBX</p>
 * @method string getPolygonType() 获取<p>多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:<br>triangle:三角形面。<br>quadrilateral：四边形面。</p>
 * @method void setPolygonType(string $PolygonType) 设置<p>多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:<br>triangle:三角形面。<br>quadrilateral：四边形面。</p>
 * @method string getFaceLevel() 获取<p>减面后面数档位类型，可选值：high，medium, low。</p>
 * @method void setFaceLevel(string $FaceLevel) 设置<p>减面后面数档位类型，可选值：high，medium, low。</p>
 */
class SubmitReduceFaceJobRequest extends AbstractModel
{
    /**
     * @var File3D <p>源3D模型文件。其中参数 Type 和 Url 必填，参数 PreviewImageUrl 无意义，可忽略。Type可选值：OBJ，GLB，FBX</p>
     */
    public $File3D;

    /**
     * @var string <p>多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:<br>triangle:三角形面。<br>quadrilateral：四边形面。</p>
     */
    public $PolygonType;

    /**
     * @var string <p>减面后面数档位类型，可选值：high，medium, low。</p>
     */
    public $FaceLevel;

    /**
     * @param File3D $File3D <p>源3D模型文件。其中参数 Type 和 Url 必填，参数 PreviewImageUrl 无意义，可忽略。Type可选值：OBJ，GLB，FBX</p>
     * @param string $PolygonType <p>多边形类型，表示模型的表面由几边形网格构成，默认为triangle,参考值:<br>triangle:三角形面。<br>quadrilateral：四边形面。</p>
     * @param string $FaceLevel <p>减面后面数档位类型，可选值：high，medium, low。</p>
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

        if (array_key_exists("PolygonType",$param) and $param["PolygonType"] !== null) {
            $this->PolygonType = $param["PolygonType"];
        }

        if (array_key_exists("FaceLevel",$param) and $param["FaceLevel"] !== null) {
            $this->FaceLevel = $param["FaceLevel"];
        }
    }
}
