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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFace返回参数结构体
 *
 * @method integer getSucFaceNum() 获取<p>加入成功的人脸数量。</p>
 * @method void setSucFaceNum(integer $SucFaceNum) 设置<p>加入成功的人脸数量。</p>
 * @method array getSucFaceIds() 获取<p>加入成功的人脸ID列表。</p>
 * @method void setSucFaceIds(array $SucFaceIds) 设置<p>加入成功的人脸ID列表。</p>
 * @method array getRetCode() 获取<p>每张人脸图片添加结果。</p><ul><li>其他非 0 值代表算法服务异常，取值范围：<br>-1101 代表未检测到人脸。<br>-1102 代表图片解码失败。<br>-1109 代表图片尺寸过大或者过小。<br>-1601代表不符合图片质量控制要求。<br>-1604 代表人脸相似度没有超过FaceMatchThreshold。 </li><li>RetCode的顺序和入参中 Images 或 Urls 的顺序一致。</li></ul>
 * @method void setRetCode(array $RetCode) 设置<p>每张人脸图片添加结果。</p><ul><li>其他非 0 值代表算法服务异常，取值范围：<br>-1101 代表未检测到人脸。<br>-1102 代表图片解码失败。<br>-1109 代表图片尺寸过大或者过小。<br>-1601代表不符合图片质量控制要求。<br>-1604 代表人脸相似度没有超过FaceMatchThreshold。 </li><li>RetCode的顺序和入参中 Images 或 Urls 的顺序一致。</li></ul>
 * @method array getSucIndexes() 获取<p>加入成功的人脸索引。</p><ul><li>索引顺序和入参中 Images 或 Urls 的顺序一致。 </li><li>例如， Urls 中 有 3 个 url，第二个 url 失败，则 SucIndexes 值为 [0,2] 。</li></ul>
 * @method void setSucIndexes(array $SucIndexes) 设置<p>加入成功的人脸索引。</p><ul><li>索引顺序和入参中 Images 或 Urls 的顺序一致。 </li><li>例如， Urls 中 有 3 个 url，第二个 url 失败，则 SucIndexes 值为 [0,2] 。</li></ul>
 * @method array getSucFaceRects() 获取<p>加入成功的人脸框位置。顺序和入参中 Images 或 Urls 的顺序一致。</p>
 * @method void setSucFaceRects(array $SucFaceRects) 设置<p>加入成功的人脸框位置。顺序和入参中 Images 或 Urls 的顺序一致。</p>
 * @method string getFaceModelVersion() 获取<p>人脸识别所用的算法模型版本。</p>
 * @method void setFaceModelVersion(string $FaceModelVersion) 设置<p>人脸识别所用的算法模型版本。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateFaceResponse extends AbstractModel
{
    /**
     * @var integer <p>加入成功的人脸数量。</p>
     */
    public $SucFaceNum;

    /**
     * @var array <p>加入成功的人脸ID列表。</p>
     */
    public $SucFaceIds;

    /**
     * @var array <p>每张人脸图片添加结果。</p><ul><li>其他非 0 值代表算法服务异常，取值范围：<br>-1101 代表未检测到人脸。<br>-1102 代表图片解码失败。<br>-1109 代表图片尺寸过大或者过小。<br>-1601代表不符合图片质量控制要求。<br>-1604 代表人脸相似度没有超过FaceMatchThreshold。 </li><li>RetCode的顺序和入参中 Images 或 Urls 的顺序一致。</li></ul>
     */
    public $RetCode;

    /**
     * @var array <p>加入成功的人脸索引。</p><ul><li>索引顺序和入参中 Images 或 Urls 的顺序一致。 </li><li>例如， Urls 中 有 3 个 url，第二个 url 失败，则 SucIndexes 值为 [0,2] 。</li></ul>
     */
    public $SucIndexes;

    /**
     * @var array <p>加入成功的人脸框位置。顺序和入参中 Images 或 Urls 的顺序一致。</p>
     */
    public $SucFaceRects;

    /**
     * @var string <p>人脸识别所用的算法模型版本。</p>
     */
    public $FaceModelVersion;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SucFaceNum <p>加入成功的人脸数量。</p>
     * @param array $SucFaceIds <p>加入成功的人脸ID列表。</p>
     * @param array $RetCode <p>每张人脸图片添加结果。</p><ul><li>其他非 0 值代表算法服务异常，取值范围：<br>-1101 代表未检测到人脸。<br>-1102 代表图片解码失败。<br>-1109 代表图片尺寸过大或者过小。<br>-1601代表不符合图片质量控制要求。<br>-1604 代表人脸相似度没有超过FaceMatchThreshold。 </li><li>RetCode的顺序和入参中 Images 或 Urls 的顺序一致。</li></ul>
     * @param array $SucIndexes <p>加入成功的人脸索引。</p><ul><li>索引顺序和入参中 Images 或 Urls 的顺序一致。 </li><li>例如， Urls 中 有 3 个 url，第二个 url 失败，则 SucIndexes 值为 [0,2] 。</li></ul>
     * @param array $SucFaceRects <p>加入成功的人脸框位置。顺序和入参中 Images 或 Urls 的顺序一致。</p>
     * @param string $FaceModelVersion <p>人脸识别所用的算法模型版本。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SucFaceNum",$param) and $param["SucFaceNum"] !== null) {
            $this->SucFaceNum = $param["SucFaceNum"];
        }

        if (array_key_exists("SucFaceIds",$param) and $param["SucFaceIds"] !== null) {
            $this->SucFaceIds = $param["SucFaceIds"];
        }

        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }

        if (array_key_exists("SucIndexes",$param) and $param["SucIndexes"] !== null) {
            $this->SucIndexes = $param["SucIndexes"];
        }

        if (array_key_exists("SucFaceRects",$param) and $param["SucFaceRects"] !== null) {
            $this->SucFaceRects = [];
            foreach ($param["SucFaceRects"] as $key => $value){
                $obj = new FaceRect();
                $obj->deserialize($value);
                array_push($this->SucFaceRects, $obj);
            }
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
