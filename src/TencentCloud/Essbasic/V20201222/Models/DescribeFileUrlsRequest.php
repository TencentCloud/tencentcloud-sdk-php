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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileUrls请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method array getBusinessIds() 获取业务编号数组，如模板编号、文档编号、印章编号、流程编号、目录编号
 * @method void setBusinessIds(array $BusinessIds) 设置业务编号数组，如模板编号、文档编号、印章编号、流程编号、目录编号
 * @method string getBusinessType() 获取业务类型：
1. TEMPLATE - 模板
2. SEAL - 印章
3. FLOW - 流程
4.CATALOG - 目录
 * @method void setBusinessType(string $BusinessType) 设置业务类型：
1. TEMPLATE - 模板
2. SEAL - 印章
3. FLOW - 流程
4.CATALOG - 目录
 * @method string getFileName() 获取下载后的文件命名，只有FileType为“ZIP”时生效
 * @method void setFileName(string $FileName) 设置下载后的文件命名，只有FileType为“ZIP”时生效
 * @method integer getResourceOffset() 获取单个业务ID多个资源情况下，指定资源起始偏移量
 * @method void setResourceOffset(integer $ResourceOffset) 设置单个业务ID多个资源情况下，指定资源起始偏移量
 * @method integer getResourceLimit() 获取单个业务ID多个资源情况下，指定资源数量
 * @method void setResourceLimit(integer $ResourceLimit) 设置单个业务ID多个资源情况下，指定资源数量
 * @method string getFileType() 获取文件类型，支持"JPG", "PDF","ZIP"等，默认为上传的文件类型
 * @method void setFileType(string $FileType) 设置文件类型，支持"JPG", "PDF","ZIP"等，默认为上传的文件类型
 */
class DescribeFileUrlsRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var array 业务编号数组，如模板编号、文档编号、印章编号、流程编号、目录编号
     */
    public $BusinessIds;

    /**
     * @var string 业务类型：
1. TEMPLATE - 模板
2. SEAL - 印章
3. FLOW - 流程
4.CATALOG - 目录
     */
    public $BusinessType;

    /**
     * @var string 下载后的文件命名，只有FileType为“ZIP”时生效
     */
    public $FileName;

    /**
     * @var integer 单个业务ID多个资源情况下，指定资源起始偏移量
     */
    public $ResourceOffset;

    /**
     * @var integer 单个业务ID多个资源情况下，指定资源数量
     */
    public $ResourceLimit;

    /**
     * @var string 文件类型，支持"JPG", "PDF","ZIP"等，默认为上传的文件类型
     */
    public $FileType;

    /**
     * @param Caller $Caller 调用方信息
     * @param array $BusinessIds 业务编号数组，如模板编号、文档编号、印章编号、流程编号、目录编号
     * @param string $BusinessType 业务类型：
1. TEMPLATE - 模板
2. SEAL - 印章
3. FLOW - 流程
4.CATALOG - 目录
     * @param string $FileName 下载后的文件命名，只有FileType为“ZIP”时生效
     * @param integer $ResourceOffset 单个业务ID多个资源情况下，指定资源起始偏移量
     * @param integer $ResourceLimit 单个业务ID多个资源情况下，指定资源数量
     * @param string $FileType 文件类型，支持"JPG", "PDF","ZIP"等，默认为上传的文件类型
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("BusinessIds",$param) and $param["BusinessIds"] !== null) {
            $this->BusinessIds = $param["BusinessIds"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ResourceOffset",$param) and $param["ResourceOffset"] !== null) {
            $this->ResourceOffset = $param["ResourceOffset"];
        }

        if (array_key_exists("ResourceLimit",$param) and $param["ResourceLimit"] !== null) {
            $this->ResourceLimit = $param["ResourceLimit"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}
