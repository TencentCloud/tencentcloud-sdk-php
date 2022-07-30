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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFiles请求参数结构体
 *
 * @method array getProjectIds() 获取项目 ID 数组
 * @method void setProjectIds(array $ProjectIds) 设置项目 ID 数组
 * @method array getFileIds() 获取文件 ID 数组
 * @method void setFileIds(array $FileIds) 设置文件 ID 数组
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method integer getOffset() 获取偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0
 * @method integer getLimit() 获取返回数量，默认为 20，最大为 100
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大为 100
 * @method integer getKind() 获取文件种类，参数文件-1，协议文件-2，请求文件-3
 * @method void setKind(integer $Kind) 设置文件种类，参数文件-1，协议文件-2，请求文件-3
 */
class DescribeFilesRequest extends AbstractModel
{
    /**
     * @var array 项目 ID 数组
     */
    public $ProjectIds;

    /**
     * @var array 文件 ID 数组
     */
    public $FileIds;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var integer 偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20，最大为 100
     */
    public $Limit;

    /**
     * @var integer 文件种类，参数文件-1，协议文件-2，请求文件-3
     */
    public $Kind;

    /**
     * @param array $ProjectIds 项目 ID 数组
     * @param array $FileIds 文件 ID 数组
     * @param string $FileName 文件名
     * @param integer $Offset 偏移量，默认为 0
     * @param integer $Limit 返回数量，默认为 20，最大为 100
     * @param integer $Kind 文件种类，参数文件-1，协议文件-2，请求文件-3
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
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }
    }
}
