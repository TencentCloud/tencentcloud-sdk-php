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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAppKnowledgeDetail请求参数结构体
 *
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取页面大小
 * @method void setPageSize(integer $PageSize) 设置页面大小
 * @method array getAppBizIds() 获取应用ID列表
 * @method void setAppBizIds(array $AppBizIds) 设置应用ID列表
 */
class ListAppKnowledgeDetailRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 页面大小
     */
    public $PageSize;

    /**
     * @var array 应用ID列表
     */
    public $AppBizIds;

    /**
     * @param integer $PageNumber 页码
     * @param integer $PageSize 页面大小
     * @param array $AppBizIds 应用ID列表
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("AppBizIds",$param) and $param["AppBizIds"] !== null) {
            $this->AppBizIds = $param["AppBizIds"];
        }
    }
}
