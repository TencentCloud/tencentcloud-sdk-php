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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAsrHotwords请求参数结构体
 *
 * @method string getHotwordsId() 获取热词库 id 
如果热词库是文本热词：Name 和 Content 至少填一个 
如果热词库是：Name、FileContent 和 FileName 至少填一个 

 * @method void setHotwordsId(string $HotwordsId) 设置热词库 id 
如果热词库是文本热词：Name 和 Content 至少填一个 
如果热词库是：Name、FileContent 和 FileName 至少填一个 

 * @method string getName() 获取热词库名称
 * @method void setName(string $Name) 设置热词库名称
 * @method string getContent() 获取热词库文本
 * @method void setContent(string $Content) 设置热词库文本
 * @method string getFileContent() 获取热词库文件的 base64 的内容，Type 为 1 必选



 * @method void setFileContent(string $FileContent) 设置热词库文件的 base64 的内容，Type 为 1 必选



 * @method string getFileName() 获取热词文件上传时的文件名
 * @method void setFileName(string $FileName) 设置热词文件上传时的文件名
 */
class ModifyAsrHotwordsRequest extends AbstractModel
{
    /**
     * @var string 热词库 id 
如果热词库是文本热词：Name 和 Content 至少填一个 
如果热词库是：Name、FileContent 和 FileName 至少填一个 

     */
    public $HotwordsId;

    /**
     * @var string 热词库名称
     */
    public $Name;

    /**
     * @var string 热词库文本
     */
    public $Content;

    /**
     * @var string 热词库文件的 base64 的内容，Type 为 1 必选



     */
    public $FileContent;

    /**
     * @var string 热词文件上传时的文件名
     */
    public $FileName;

    /**
     * @param string $HotwordsId 热词库 id 
如果热词库是文本热词：Name 和 Content 至少填一个 
如果热词库是：Name、FileContent 和 FileName 至少填一个 

     * @param string $Name 热词库名称
     * @param string $Content 热词库文本
     * @param string $FileContent 热词库文件的 base64 的内容，Type 为 1 必选



     * @param string $FileName 热词文件上传时的文件名
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
        if (array_key_exists("HotwordsId",$param) and $param["HotwordsId"] !== null) {
            $this->HotwordsId = $param["HotwordsId"];
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
