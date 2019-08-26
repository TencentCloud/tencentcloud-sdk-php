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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getFaces() 获取公众人物识别结果数组。如果检测不到人脸，返回为空；最多可以返回10个人脸识别结果。
 * @method void setFaces(array $Faces) 设置公众人物识别结果数组。如果检测不到人脸，返回为空；最多可以返回10个人脸识别结果。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DetectCelebrity返回参数结构体
 */
class DetectCelebrityResponse extends AbstractModel
{
    /**
     * @var array 公众人物识别结果数组。如果检测不到人脸，返回为空；最多可以返回10个人脸识别结果。
     */
    public $Faces;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param array $Faces 公众人物识别结果数组。如果检测不到人脸，返回为空；最多可以返回10个人脸识别结果。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Faces",$param) and $param["Faces"] !== null) {
            $this->Faces = [];
            foreach ($param["Faces"] as $key => $value){
                $obj = new Face();
                $obj->deserialize($value);
                array_push($this->Faces, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
