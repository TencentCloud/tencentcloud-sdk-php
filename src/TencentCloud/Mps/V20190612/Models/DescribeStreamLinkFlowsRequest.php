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
 * DescribeStreamLinkFlows请求参数结构体
 *
 * @method integer getPageNum() 获取当前页数，默认1。
 * @method void setPageNum(integer $PageNum) 设置当前页数，默认1。
 * @method integer getPageSize() 获取每页大小，默认10。
 * @method void setPageSize(integer $PageSize) 设置每页大小，默认10。
 */
class DescribeStreamLinkFlowsRequest extends AbstractModel
{
    /**
     * @var integer 当前页数，默认1。
     */
    public $PageNum;

    /**
     * @var integer 每页大小，默认10。
     */
    public $PageSize;

    /**
     * @param integer $PageNum 当前页数，默认1。
     * @param integer $PageSize 每页大小，默认10。
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
