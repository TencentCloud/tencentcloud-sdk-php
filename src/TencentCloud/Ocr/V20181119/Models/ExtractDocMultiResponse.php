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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExtractDocMulti返回参数结构体
 *
 * @method float getAngle() 获取<p>图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负</p>
 * @method void setAngle(float $Angle) 设置<p>图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负</p>
 * @method array getStructuralList() 获取<p>配置结构化文本信息</p>
 * @method void setStructuralList(array $StructuralList) 设置<p>配置结构化文本信息</p>
 * @method array getWordList() 获取<p>还原文本信息</p>
 * @method void setWordList(array $WordList) 设置<p>还原文本信息</p>
 * @method integer getTokenNum() 获取<p>样本识别字段数</p>
 * @method void setTokenNum(integer $TokenNum) 设置<p>样本识别字段数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ExtractDocMultiResponse extends AbstractModel
{
    /**
     * @var float <p>图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负</p>
     */
    public $Angle;

    /**
     * @var array <p>配置结构化文本信息</p>
     */
    public $StructuralList;

    /**
     * @var array <p>还原文本信息</p>
     */
    public $WordList;

    /**
     * @var integer <p>样本识别字段数</p>
     */
    public $TokenNum;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Angle <p>图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负</p>
     * @param array $StructuralList <p>配置结构化文本信息</p>
     * @param array $WordList <p>还原文本信息</p>
     * @param integer $TokenNum <p>样本识别字段数</p>
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
        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("StructuralList",$param) and $param["StructuralList"] !== null) {
            $this->StructuralList = [];
            foreach ($param["StructuralList"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->StructuralList, $obj);
            }
        }

        if (array_key_exists("WordList",$param) and $param["WordList"] !== null) {
            $this->WordList = [];
            foreach ($param["WordList"] as $key => $value){
                $obj = new WordItem();
                $obj->deserialize($value);
                array_push($this->WordList, $obj);
            }
        }

        if (array_key_exists("TokenNum",$param) and $param["TokenNum"] !== null) {
            $this->TokenNum = $param["TokenNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
