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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAsrHotwords请求参数结构体
 *
 * @method integer getType() 获取0 临时热词 1 文件热词
 * @method void setType(integer $Type) 设置0 临时热词 1 文件热词
 * @method string getName() 获取热词库名称
 * @method void setName(string $Name) 设置热词库名称
 * @method string getContent() 获取热词库文本，Type为 0 必选
 * @method void setContent(string $Content) 设置热词库文本，Type为 0 必选
 * @method string getFileContent() 获取热词库文件的 base64 的内容，Type 为 1 必选


 * @method void setFileContent(string $FileContent) 设置热词库文件的 base64 的内容，Type 为 1 必选


 * @method string getFileName() 获取上传的文件名
 * @method void setFileName(string $FileName) 设置上传的文件名
 */
class CreateAsrHotwordsRequest extends AbstractModel
{
    /**
     * @var integer 0 临时热词 1 文件热词
     */
    public $Type;

    /**
     * @var string 热词库名称
     */
    public $Name;

    /**
     * @var string 热词库文本，Type为 0 必选
     */
    public $Content;

    /**
     * @var string 热词库文件的 base64 的内容，Type 为 1 必选


     */
    public $FileContent;

    /**
     * @var string 上传的文件名
     */
    public $FileName;

    /**
     * @param integer $Type 0 临时热词 1 文件热词
     * @param string $Name 热词库名称
     * @param string $Content 热词库文本，Type为 0 必选
     * @param string $FileContent 热词库文件的 base64 的内容，Type 为 1 必选


     * @param string $FileName 上传的文件名
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
