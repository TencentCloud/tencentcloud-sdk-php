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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStorageCredential请求参数结构体
 *
 * @method string getBotBizId() 获取<p>应用ID，参数非必填不代表不需要填写，下面不同的参数组合会获取到不同的权限，具体请参考 https://cloud.tencent.com/document/product/1759/116238</p>
 * @method void setBotBizId(string $BotBizId) 设置<p>应用ID，参数非必填不代表不需要填写，下面不同的参数组合会获取到不同的权限，具体请参考 https://cloud.tencent.com/document/product/1759/116238</p>
 * @method string getFileType() 获取<p>文件类型,正常的文件名类型后缀，支持 docx、doc、pdf、txt、md、wps、pages、html、mhtml、epub、xml、json、log、xlsx、xls、csv、tsv、numbers、pptx、ppt、ppsx、ppsm、key、png、jpg、jpeg、gif、bmp、tiff、webp、heif、heic、jp2、eps、icns、im、pcx、ppm、xbm、xmind</p>
 * @method void setFileType(string $FileType) 设置<p>文件类型,正常的文件名类型后缀，支持 docx、doc、pdf、txt、md、wps、pages、html、mhtml、epub、xml、json、log、xlsx、xls、csv、tsv、numbers、pptx、ppt、ppsx、ppsm、key、png、jpg、jpeg、gif、bmp、tiff、webp、heif、heic、jp2、eps、icns、im、pcx、ppm、xbm、xmind</p>
 * @method boolean getIsPublic() 获取<p>IsPublic用于上传文件或图片时选择场景，当上传对话端图片时IsPublic为true，上传文件（包括文档库文件/图片等和对话端文件）时IsPublic为false</p>
 * @method void setIsPublic(boolean $IsPublic) 设置<p>IsPublic用于上传文件或图片时选择场景，当上传对话端图片时IsPublic为true，上传文件（包括文档库文件/图片等和对话端文件）时IsPublic为false</p>
 * @method string getTypeKey() 获取<p>存储类型: offline:离线文件，realtime:实时文件；为空默认为offline</p>
 * @method void setTypeKey(string $TypeKey) 设置<p>存储类型: offline:离线文件，realtime:实时文件；为空默认为offline</p>
 */
class DescribeStorageCredentialRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID，参数非必填不代表不需要填写，下面不同的参数组合会获取到不同的权限，具体请参考 https://cloud.tencent.com/document/product/1759/116238</p>
     */
    public $BotBizId;

    /**
     * @var string <p>文件类型,正常的文件名类型后缀，支持 docx、doc、pdf、txt、md、wps、pages、html、mhtml、epub、xml、json、log、xlsx、xls、csv、tsv、numbers、pptx、ppt、ppsx、ppsm、key、png、jpg、jpeg、gif、bmp、tiff、webp、heif、heic、jp2、eps、icns、im、pcx、ppm、xbm、xmind</p>
     */
    public $FileType;

    /**
     * @var boolean <p>IsPublic用于上传文件或图片时选择场景，当上传对话端图片时IsPublic为true，上传文件（包括文档库文件/图片等和对话端文件）时IsPublic为false</p>
     */
    public $IsPublic;

    /**
     * @var string <p>存储类型: offline:离线文件，realtime:实时文件；为空默认为offline</p>
     */
    public $TypeKey;

    /**
     * @param string $BotBizId <p>应用ID，参数非必填不代表不需要填写，下面不同的参数组合会获取到不同的权限，具体请参考 https://cloud.tencent.com/document/product/1759/116238</p>
     * @param string $FileType <p>文件类型,正常的文件名类型后缀，支持 docx、doc、pdf、txt、md、wps、pages、html、mhtml、epub、xml、json、log、xlsx、xls、csv、tsv、numbers、pptx、ppt、ppsx、ppsm、key、png、jpg、jpeg、gif、bmp、tiff、webp、heif、heic、jp2、eps、icns、im、pcx、ppm、xbm、xmind</p>
     * @param boolean $IsPublic <p>IsPublic用于上传文件或图片时选择场景，当上传对话端图片时IsPublic为true，上传文件（包括文档库文件/图片等和对话端文件）时IsPublic为false</p>
     * @param string $TypeKey <p>存储类型: offline:离线文件，realtime:实时文件；为空默认为offline</p>
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("TypeKey",$param) and $param["TypeKey"] !== null) {
            $this->TypeKey = $param["TypeKey"];
        }
    }
}
