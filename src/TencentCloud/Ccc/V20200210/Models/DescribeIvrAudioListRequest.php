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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIvrAudioList请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method integer getPageSize() 获取分页尺寸，上限 50
 * @method void setPageSize(integer $PageSize) 设置分页尺寸，上限 50
 * @method integer getPageNumber() 获取分页页码，从 0 开始
 * @method void setPageNumber(integer $PageNumber) 设置分页页码，从 0 开始
 * @method array getCustomFileName() 获取文件别名
 * @method void setCustomFileName(array $CustomFileName) 设置文件别名
 * @method array getAudioFileName() 获取文件名
 * @method void setAudioFileName(array $AudioFileName) 设置文件名
 * @method array getFileId() 获取文件ID
 * @method void setFileId(array $FileId) 设置文件ID
 */
class DescribeIvrAudioListRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var integer 分页尺寸，上限 50
     */
    public $PageSize;

    /**
     * @var integer 分页页码，从 0 开始
     */
    public $PageNumber;

    /**
     * @var array 文件别名
     */
    public $CustomFileName;

    /**
     * @var array 文件名
     */
    public $AudioFileName;

    /**
     * @var array 文件ID
     */
    public $FileId;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param integer $PageSize 分页尺寸，上限 50
     * @param integer $PageNumber 分页页码，从 0 开始
     * @param array $CustomFileName 文件别名
     * @param array $AudioFileName 文件名
     * @param array $FileId 文件ID
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("CustomFileName",$param) and $param["CustomFileName"] !== null) {
            $this->CustomFileName = $param["CustomFileName"];
        }

        if (array_key_exists("AudioFileName",$param) and $param["AudioFileName"] !== null) {
            $this->AudioFileName = $param["AudioFileName"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
