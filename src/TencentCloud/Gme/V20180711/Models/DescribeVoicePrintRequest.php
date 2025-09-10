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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVoicePrint请求参数结构体
 *
 * @method integer getDescribeMode() 获取查询方式，0表示查询特定VoicePrintId，1表示分页查询
 * @method void setDescribeMode(integer $DescribeMode) 设置查询方式，0表示查询特定VoicePrintId，1表示分页查询
 * @method array getVoicePrintIdList() 获取声纹ID
 * @method void setVoicePrintIdList(array $VoicePrintIdList) 设置声纹ID
 * @method integer getPageIndex() 获取当前页码,从1开始,DescribeMode为1时填写
 * @method void setPageIndex(integer $PageIndex) 设置当前页码,从1开始,DescribeMode为1时填写
 * @method integer getPageSize() 获取每页条数 最少20,DescribeMode为1时填写
 * @method void setPageSize(integer $PageSize) 设置每页条数 最少20,DescribeMode为1时填写
 */
class DescribeVoicePrintRequest extends AbstractModel
{
    /**
     * @var integer 查询方式，0表示查询特定VoicePrintId，1表示分页查询
     */
    public $DescribeMode;

    /**
     * @var array 声纹ID
     */
    public $VoicePrintIdList;

    /**
     * @var integer 当前页码,从1开始,DescribeMode为1时填写
     */
    public $PageIndex;

    /**
     * @var integer 每页条数 最少20,DescribeMode为1时填写
     */
    public $PageSize;

    /**
     * @param integer $DescribeMode 查询方式，0表示查询特定VoicePrintId，1表示分页查询
     * @param array $VoicePrintIdList 声纹ID
     * @param integer $PageIndex 当前页码,从1开始,DescribeMode为1时填写
     * @param integer $PageSize 每页条数 最少20,DescribeMode为1时填写
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
        if (array_key_exists("DescribeMode",$param) and $param["DescribeMode"] !== null) {
            $this->DescribeMode = $param["DescribeMode"];
        }

        if (array_key_exists("VoicePrintIdList",$param) and $param["VoicePrintIdList"] !== null) {
            $this->VoicePrintIdList = $param["VoicePrintIdList"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
