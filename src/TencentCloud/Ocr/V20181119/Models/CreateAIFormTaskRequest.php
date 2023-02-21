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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAIFormTask请求参数结构体
 *
 * @method array getFileList() 获取多个文件的URL列表
 * @method void setFileList(array $FileList) 设置多个文件的URL列表
 * @method string getFirstNotes() 获取备注信息1
 * @method void setFirstNotes(string $FirstNotes) 设置备注信息1
 * @method string getSecondNotes() 获取备注信息2
 * @method void setSecondNotes(string $SecondNotes) 设置备注信息2
 */
class CreateAIFormTaskRequest extends AbstractModel
{
    /**
     * @var array 多个文件的URL列表
     */
    public $FileList;

    /**
     * @var string 备注信息1
     */
    public $FirstNotes;

    /**
     * @var string 备注信息2
     */
    public $SecondNotes;

    /**
     * @param array $FileList 多个文件的URL列表
     * @param string $FirstNotes 备注信息1
     * @param string $SecondNotes 备注信息2
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
        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = [];
            foreach ($param["FileList"] as $key => $value){
                $obj = new SmartFormFileUrl();
                $obj->deserialize($value);
                array_push($this->FileList, $obj);
            }
        }

        if (array_key_exists("FirstNotes",$param) and $param["FirstNotes"] !== null) {
            $this->FirstNotes = $param["FirstNotes"];
        }

        if (array_key_exists("SecondNotes",$param) and $param["SecondNotes"] !== null) {
            $this->SecondNotes = $param["SecondNotes"];
        }
    }
}
