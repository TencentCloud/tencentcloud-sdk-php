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
 * 人脸识别的媒体信息
 *
 * @method array getFaceRecognitionTasks() 获取<p>人脸识别任务列表</p>
 * @method void setFaceRecognitionTasks(array $FaceRecognitionTasks) 设置<p>人脸识别任务列表</p>
 */
class FaceRecognitionInfo extends AbstractModel
{
    /**
     * @var array <p>人脸识别任务列表</p>
     */
    public $FaceRecognitionTasks;

    /**
     * @param array $FaceRecognitionTasks <p>人脸识别任务列表</p>
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
        if (array_key_exists("FaceRecognitionTasks",$param) and $param["FaceRecognitionTasks"] !== null) {
            $this->FaceRecognitionTasks = [];
            foreach ($param["FaceRecognitionTasks"] as $key => $value){
                $obj = new FaceRecognitionTask();
                $obj->deserialize($value);
                array_push($this->FaceRecognitionTasks, $obj);
            }
        }
    }
}
