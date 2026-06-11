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
 * 异步获取 AIGC 人脸信息输出
 *
 * @method array getFaceInfoSet() 获取<p>人脸信息。</p>
 * @method void setFaceInfoSet(array $FaceInfoSet) 设置<p>人脸信息。</p>
 */
class DescribeAigcFaceInfoAsyncOutput extends AbstractModel
{
    /**
     * @var array <p>人脸信息。</p>
     */
    public $FaceInfoSet;

    /**
     * @param array $FaceInfoSet <p>人脸信息。</p>
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
        if (array_key_exists("FaceInfoSet",$param) and $param["FaceInfoSet"] !== null) {
            $this->FaceInfoSet = [];
            foreach ($param["FaceInfoSet"] as $key => $value){
                $obj = new AigcFaceInfo();
                $obj->deserialize($value);
                array_push($this->FaceInfoSet, $obj);
            }
        }
    }
}
