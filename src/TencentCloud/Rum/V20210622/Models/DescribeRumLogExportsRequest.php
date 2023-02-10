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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRumLogExports请求参数结构体
 *
 * @method integer getPageSize() 获取页面大小
 * @method void setPageSize(integer $PageSize) 设置页面大小
 * @method integer getPageNum() 获取页数，第几页
 * @method void setPageNum(integer $PageNum) 设置页数，第几页
 * @method integer getID() 获取项目ID（必填）
 * @method void setID(integer $ID) 设置项目ID（必填）
 */
class DescribeRumLogExportsRequest extends AbstractModel
{
    /**
     * @var integer 页面大小
     */
    public $PageSize;

    /**
     * @var integer 页数，第几页
     */
    public $PageNum;

    /**
     * @var integer 项目ID（必填）
     */
    public $ID;

    /**
     * @param integer $PageSize 页面大小
     * @param integer $PageNum 页数，第几页
     * @param integer $ID 项目ID（必填）
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
