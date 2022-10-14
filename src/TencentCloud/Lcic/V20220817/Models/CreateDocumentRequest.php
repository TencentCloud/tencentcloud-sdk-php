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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDocument请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。
 * @method string getDocumentUrl() 获取文档地址。
 * @method void setDocumentUrl(string $DocumentUrl) 设置文档地址。
 * @method string getDocumentName() 获取文档名称。
 * @method void setDocumentName(string $DocumentName) 设置文档名称。
 * @method string getOwner() 获取文档所有者的Id
 * @method void setOwner(string $Owner) 设置文档所有者的Id
 * @method integer getTranscodeType() 获取转码类型，可以有如下取值：
0 无需转码（默认）
1 需要转码的文档，ppt，pptx，pdf，doc，docx
2 需要转码的视频，mp4，3pg，mpeg，avi，flv，wmv，rm，h264等
2 需要转码的音频，mp3，wav，wma，aac，flac，opus
 * @method void setTranscodeType(integer $TranscodeType) 设置转码类型，可以有如下取值：
0 无需转码（默认）
1 需要转码的文档，ppt，pptx，pdf，doc，docx
2 需要转码的视频，mp4，3pg，mpeg，avi，flv，wmv，rm，h264等
2 需要转码的音频，mp3，wav，wma，aac，flac，opus
 * @method integer getPermission() 获取权限，可以有如下取值：
0 私有文档（默认）
1 公共文档
 * @method void setPermission(integer $Permission) 设置权限，可以有如下取值：
0 私有文档（默认）
1 公共文档
 * @method string getDocumentType() 获取文档后缀名。
 * @method void setDocumentType(string $DocumentType) 设置文档后缀名。
 * @method integer getDocumentSize() 获取文档大小，单位 字节
 * @method void setDocumentSize(integer $DocumentSize) 设置文档大小，单位 字节
 */
class CreateDocumentRequest extends AbstractModel
{
    /**
     * @var integer 低代码互动课堂的SdkAppId。
     */
    public $SdkAppId;

    /**
     * @var string 文档地址。
     */
    public $DocumentUrl;

    /**
     * @var string 文档名称。
     */
    public $DocumentName;

    /**
     * @var string 文档所有者的Id
     */
    public $Owner;

    /**
     * @var integer 转码类型，可以有如下取值：
0 无需转码（默认）
1 需要转码的文档，ppt，pptx，pdf，doc，docx
2 需要转码的视频，mp4，3pg，mpeg，avi，flv，wmv，rm，h264等
2 需要转码的音频，mp3，wav，wma，aac，flac，opus
     */
    public $TranscodeType;

    /**
     * @var integer 权限，可以有如下取值：
0 私有文档（默认）
1 公共文档
     */
    public $Permission;

    /**
     * @var string 文档后缀名。
     */
    public $DocumentType;

    /**
     * @var integer 文档大小，单位 字节
     */
    public $DocumentSize;

    /**
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。
     * @param string $DocumentUrl 文档地址。
     * @param string $DocumentName 文档名称。
     * @param string $Owner 文档所有者的Id
     * @param integer $TranscodeType 转码类型，可以有如下取值：
0 无需转码（默认）
1 需要转码的文档，ppt，pptx，pdf，doc，docx
2 需要转码的视频，mp4，3pg，mpeg，avi，flv，wmv，rm，h264等
2 需要转码的音频，mp3，wav，wma，aac，flac，opus
     * @param integer $Permission 权限，可以有如下取值：
0 私有文档（默认）
1 公共文档
     * @param string $DocumentType 文档后缀名。
     * @param integer $DocumentSize 文档大小，单位 字节
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("DocumentUrl",$param) and $param["DocumentUrl"] !== null) {
            $this->DocumentUrl = $param["DocumentUrl"];
        }

        if (array_key_exists("DocumentName",$param) and $param["DocumentName"] !== null) {
            $this->DocumentName = $param["DocumentName"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("TranscodeType",$param) and $param["TranscodeType"] !== null) {
            $this->TranscodeType = $param["TranscodeType"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("DocumentType",$param) and $param["DocumentType"] !== null) {
            $this->DocumentType = $param["DocumentType"];
        }

        if (array_key_exists("DocumentSize",$param) and $param["DocumentSize"] !== null) {
            $this->DocumentSize = $param["DocumentSize"];
        }
    }
}
