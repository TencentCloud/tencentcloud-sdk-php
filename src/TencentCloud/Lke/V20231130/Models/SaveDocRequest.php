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
 * SaveDoc请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getFileType() 获取文档支持下面类型
pdf、doc、docx、ppt、mhtml、pptx、wps、ppsx，单个文件不超过200MB；
xlsx、xls、md、txt、csv、html，单个文件不超过20MB；

图片支持下面类型：
jpg、png、jpeg、tiff、bmp、gif，单个文件不超过50MB
 * @method void setFileType(string $FileType) 设置文档支持下面类型
pdf、doc、docx、ppt、mhtml、pptx、wps、ppsx，单个文件不超过200MB；
xlsx、xls、md、txt、csv、html，单个文件不超过20MB；

图片支持下面类型：
jpg、png、jpeg、tiff、bmp、gif，单个文件不超过50MB
 * @method string getCosUrl() 获取平台cos路径，与DescribeStorageCredential接口查询UploadPath参数保持一致
 * @method void setCosUrl(string $CosUrl) 设置平台cos路径，与DescribeStorageCredential接口查询UploadPath参数保持一致
 * @method string getETag() 获取ETag 全称为 Entity Tag，是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化 成功上传cos后，从返回头中获取
 * @method void setETag(string $ETag) 设置ETag 全称为 Entity Tag，是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化 成功上传cos后，从返回头中获取
 * @method string getCosHash() 获取cos_hash x-cos-hash-crc64ecma 头部中的 CRC64编码进行校验上传到云端的文件和本地文件的一致性  
成功上传cos后，从返回头中获取

请注意：
cos_hash为文档唯一性标识，与文件名无关 相同的cos_hash会被判定为重复文档
 * @method void setCosHash(string $CosHash) 设置cos_hash x-cos-hash-crc64ecma 头部中的 CRC64编码进行校验上传到云端的文件和本地文件的一致性  
成功上传cos后，从返回头中获取

请注意：
cos_hash为文档唯一性标识，与文件名无关 相同的cos_hash会被判定为重复文档
 * @method string getSize() 获取文件大小
 * @method void setSize(string $Size) 设置文件大小
 * @method integer getAttrRange() 获取标签适用范围，需要传参为1
 * @method void setAttrRange(integer $AttrRange) 设置标签适用范围，需要传参为1
 * @method integer getSource() 获取来源（0 从本地文档导入），默认值为0
 * @method void setSource(integer $Source) 设置来源（0 从本地文档导入），默认值为0
 * @method string getWebUrl() 获取自定义链接地址, IsRefer为true的时候，该值才有意义
 * @method void setWebUrl(string $WebUrl) 设置自定义链接地址, IsRefer为true的时候，该值才有意义
 * @method array getAttrLabels() 获取标签引用
 * @method void setAttrLabels(array $AttrLabels) 设置标签引用
 * @method integer getReferUrlType() 获取外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
 * @method void setReferUrlType(integer $ReferUrlType) 设置外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
 * @method string getExpireStart() 获取有效开始时间，unix秒级时间戳
 * @method void setExpireStart(string $ExpireStart) 设置有效开始时间，unix秒级时间戳
 * @method string getExpireEnd() 获取有效结束时间，unix秒级时间戳，0代表永久有效
 * @method void setExpireEnd(string $ExpireEnd) 设置有效结束时间，unix秒级时间戳，0代表永久有效
 * @method boolean getIsRefer() 获取是否引用链接
 * @method void setIsRefer(boolean $IsRefer) 设置是否引用链接
 * @method integer getOpt() 获取文档操作类型：1：批量导入（批量导入问答对）；2:文档导入（正常导入单个文档） 默认为1  <br> 请注意，opt=1的时候请从腾讯云智能体开发平台页面下载excel模板
 * @method void setOpt(integer $Opt) 设置文档操作类型：1：批量导入（批量导入问答对）；2:文档导入（正常导入单个文档） 默认为1  <br> 请注意，opt=1的时候请从腾讯云智能体开发平台页面下载excel模板
 * @method string getCateBizId() 获取分类ID
 * @method void setCateBizId(string $CateBizId) 设置分类ID
 * @method boolean getIsDownload() 获取是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义
 * @method void setIsDownload(boolean $IsDownload) 设置是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义
 */
class SaveDocRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 文档支持下面类型
pdf、doc、docx、ppt、mhtml、pptx、wps、ppsx，单个文件不超过200MB；
xlsx、xls、md、txt、csv、html，单个文件不超过20MB；

图片支持下面类型：
jpg、png、jpeg、tiff、bmp、gif，单个文件不超过50MB
     */
    public $FileType;

    /**
     * @var string 平台cos路径，与DescribeStorageCredential接口查询UploadPath参数保持一致
     */
    public $CosUrl;

    /**
     * @var string ETag 全称为 Entity Tag，是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化 成功上传cos后，从返回头中获取
     */
    public $ETag;

    /**
     * @var string cos_hash x-cos-hash-crc64ecma 头部中的 CRC64编码进行校验上传到云端的文件和本地文件的一致性  
成功上传cos后，从返回头中获取

请注意：
cos_hash为文档唯一性标识，与文件名无关 相同的cos_hash会被判定为重复文档
     */
    public $CosHash;

    /**
     * @var string 文件大小
     */
    public $Size;

    /**
     * @var integer 标签适用范围，需要传参为1
     */
    public $AttrRange;

    /**
     * @var integer 来源（0 从本地文档导入），默认值为0
     */
    public $Source;

    /**
     * @var string 自定义链接地址, IsRefer为true的时候，该值才有意义
     */
    public $WebUrl;

    /**
     * @var array 标签引用
     */
    public $AttrLabels;

    /**
     * @var integer 外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
     */
    public $ReferUrlType;

    /**
     * @var string 有效开始时间，unix秒级时间戳
     */
    public $ExpireStart;

    /**
     * @var string 有效结束时间，unix秒级时间戳，0代表永久有效
     */
    public $ExpireEnd;

    /**
     * @var boolean 是否引用链接
     */
    public $IsRefer;

    /**
     * @var integer 文档操作类型：1：批量导入（批量导入问答对）；2:文档导入（正常导入单个文档） 默认为1  <br> 请注意，opt=1的时候请从腾讯云智能体开发平台页面下载excel模板
     */
    public $Opt;

    /**
     * @var string 分类ID
     */
    public $CateBizId;

    /**
     * @var boolean 是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义
     */
    public $IsDownload;

    /**
     * @param string $BotBizId 应用ID
     * @param string $FileName 文件名
     * @param string $FileType 文档支持下面类型
pdf、doc、docx、ppt、mhtml、pptx、wps、ppsx，单个文件不超过200MB；
xlsx、xls、md、txt、csv、html，单个文件不超过20MB；

图片支持下面类型：
jpg、png、jpeg、tiff、bmp、gif，单个文件不超过50MB
     * @param string $CosUrl 平台cos路径，与DescribeStorageCredential接口查询UploadPath参数保持一致
     * @param string $ETag ETag 全称为 Entity Tag，是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化 成功上传cos后，从返回头中获取
     * @param string $CosHash cos_hash x-cos-hash-crc64ecma 头部中的 CRC64编码进行校验上传到云端的文件和本地文件的一致性  
成功上传cos后，从返回头中获取

请注意：
cos_hash为文档唯一性标识，与文件名无关 相同的cos_hash会被判定为重复文档
     * @param string $Size 文件大小
     * @param integer $AttrRange 标签适用范围，需要传参为1
     * @param integer $Source 来源（0 从本地文档导入），默认值为0
     * @param string $WebUrl 自定义链接地址, IsRefer为true的时候，该值才有意义
     * @param array $AttrLabels 标签引用
     * @param integer $ReferUrlType 外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
     * @param string $ExpireStart 有效开始时间，unix秒级时间戳
     * @param string $ExpireEnd 有效结束时间，unix秒级时间戳，0代表永久有效
     * @param boolean $IsRefer 是否引用链接
     * @param integer $Opt 文档操作类型：1：批量导入（批量导入问答对）；2:文档导入（正常导入单个文档） 默认为1  <br> 请注意，opt=1的时候请从腾讯云智能体开发平台页面下载excel模板
     * @param string $CateBizId 分类ID
     * @param boolean $IsDownload 是否可下载，IsRefer为true并且ReferUrlType为0时，该值才有意义
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("ETag",$param) and $param["ETag"] !== null) {
            $this->ETag = $param["ETag"];
        }

        if (array_key_exists("CosHash",$param) and $param["CosHash"] !== null) {
            $this->CosHash = $param["CosHash"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("WebUrl",$param) and $param["WebUrl"] !== null) {
            $this->WebUrl = $param["WebUrl"];
        }

        if (array_key_exists("AttrLabels",$param) and $param["AttrLabels"] !== null) {
            $this->AttrLabels = [];
            foreach ($param["AttrLabels"] as $key => $value){
                $obj = new AttrLabelRefer();
                $obj->deserialize($value);
                array_push($this->AttrLabels, $obj);
            }
        }

        if (array_key_exists("ReferUrlType",$param) and $param["ReferUrlType"] !== null) {
            $this->ReferUrlType = $param["ReferUrlType"];
        }

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("IsRefer",$param) and $param["IsRefer"] !== null) {
            $this->IsRefer = $param["IsRefer"];
        }

        if (array_key_exists("Opt",$param) and $param["Opt"] !== null) {
            $this->Opt = $param["Opt"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("IsDownload",$param) and $param["IsDownload"] !== null) {
            $this->IsDownload = $param["IsDownload"];
        }
    }
}
