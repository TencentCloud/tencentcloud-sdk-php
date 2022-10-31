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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExtensions请求参数结构体
 *
 * @method integer getSdkAppId() 获取TCCC 实例应用 ID
 * @method void setSdkAppId(integer $SdkAppId) 设置TCCC 实例应用 ID
 * @method integer getPageNumber() 获取分页页号（从0开始）
 * @method void setPageNumber(integer $PageNumber) 设置分页页号（从0开始）
 * @method array getExtensionIds() 获取筛选分机号列表
 * @method void setExtensionIds(array $ExtensionIds) 设置筛选分机号列表
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method string getFuzzingKeyWord() 获取模糊查询字段（模糊查询分机号、分机名称、坐席邮箱、坐席名称）
 * @method void setFuzzingKeyWord(string $FuzzingKeyWord) 设置模糊查询字段（模糊查询分机号、分机名称、坐席邮箱、坐席名称）
 * @method boolean getIsNeedStatus() 获取是否需要返回话机当前状态
 * @method void setIsNeedStatus(boolean $IsNeedStatus) 设置是否需要返回话机当前状态
 */
class DescribeExtensionsRequest extends AbstractModel
{
    /**
     * @var integer TCCC 实例应用 ID
     */
    public $SdkAppId;

    /**
     * @var integer 分页页号（从0开始）
     */
    public $PageNumber;

    /**
     * @var array 筛选分机号列表
     */
    public $ExtensionIds;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var string 模糊查询字段（模糊查询分机号、分机名称、坐席邮箱、坐席名称）
     */
    public $FuzzingKeyWord;

    /**
     * @var boolean 是否需要返回话机当前状态
     */
    public $IsNeedStatus;

    /**
     * @param integer $SdkAppId TCCC 实例应用 ID
     * @param integer $PageNumber 分页页号（从0开始）
     * @param array $ExtensionIds 筛选分机号列表
     * @param integer $PageSize 分页大小
     * @param string $FuzzingKeyWord 模糊查询字段（模糊查询分机号、分机名称、坐席邮箱、坐席名称）
     * @param boolean $IsNeedStatus 是否需要返回话机当前状态
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("ExtensionIds",$param) and $param["ExtensionIds"] !== null) {
            $this->ExtensionIds = $param["ExtensionIds"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("FuzzingKeyWord",$param) and $param["FuzzingKeyWord"] !== null) {
            $this->FuzzingKeyWord = $param["FuzzingKeyWord"];
        }

        if (array_key_exists("IsNeedStatus",$param) and $param["IsNeedStatus"] !== null) {
            $this->IsNeedStatus = $param["IsNeedStatus"];
        }
    }
}
