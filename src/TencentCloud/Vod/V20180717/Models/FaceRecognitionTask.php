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
 * 人脸识别任务
 *
 * @method integer getDefinition() 获取<p>人脸识别模板编号</p>
 * @method void setDefinition(integer $Definition) 设置<p>人脸识别模板编号</p>
 * @method array getOutputFile() 获取<p>输出文件信息</p>
 * @method void setOutputFile(array $OutputFile) 设置<p>输出文件信息</p>
 */
class FaceRecognitionTask extends AbstractModel
{
    /**
     * @var integer <p>人脸识别模板编号</p>
     */
    public $Definition;

    /**
     * @var array <p>输出文件信息</p>
     */
    public $OutputFile;

    /**
     * @param integer $Definition <p>人脸识别模板编号</p>
     * @param array $OutputFile <p>输出文件信息</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("OutputFile",$param) and $param["OutputFile"] !== null) {
            $this->OutputFile = [];
            foreach ($param["OutputFile"] as $key => $value){
                $obj = new FaceRecognitionOutputFileInfo();
                $obj->deserialize($value);
                array_push($this->OutputFile, $obj);
            }
        }
    }
}
