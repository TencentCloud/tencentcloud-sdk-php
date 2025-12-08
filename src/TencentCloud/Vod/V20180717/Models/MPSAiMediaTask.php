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
 * MPS智能任务
 *
 * @method integer getDefinition() 获取MPS智能任务的模板 ID
 * @method void setDefinition(integer $Definition) 设置MPS智能任务的模板 ID
 * @method array getOutputFile() 获取MPS智能任务输出文件集合
 * @method void setOutputFile(array $OutputFile) 设置MPS智能任务输出文件集合
 * @method string getOutputText() 获取MPS智能任务输出
 * @method void setOutputText(string $OutputText) 设置MPS智能任务输出
 */
class MPSAiMediaTask extends AbstractModel
{
    /**
     * @var integer MPS智能任务的模板 ID
     */
    public $Definition;

    /**
     * @var array MPS智能任务输出文件集合
     */
    public $OutputFile;

    /**
     * @var string MPS智能任务输出
     */
    public $OutputText;

    /**
     * @param integer $Definition MPS智能任务的模板 ID
     * @param array $OutputFile MPS智能任务输出文件集合
     * @param string $OutputText MPS智能任务输出
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
                $obj = new MPSOutputFileInfo();
                $obj->deserialize($value);
                array_push($this->OutputFile, $obj);
            }
        }

        if (array_key_exists("OutputText",$param) and $param["OutputText"] !== null) {
            $this->OutputText = $param["OutputText"];
        }
    }
}
