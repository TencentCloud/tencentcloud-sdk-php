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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePathTrees请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getKeyword() 获取关键字
 * @method void setKeyword(string $Keyword) 设置关键字
 * @method string getIncludeFile() 获取是否包含文件
 * @method void setIncludeFile(string $IncludeFile) 设置是否包含文件
 * @method integer getMaxDepth() 获取最大深度
 * @method void setMaxDepth(integer $MaxDepth) 设置最大深度
 * @method string getFileNotUsed() 获取文件是否被引用
 * @method void setFileNotUsed(string $FileNotUsed) 设置文件是否被引用
 */
class DescribePathTreesRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 关键字
     */
    public $Keyword;

    /**
     * @var string 是否包含文件
     */
    public $IncludeFile;

    /**
     * @var integer 最大深度
     */
    public $MaxDepth;

    /**
     * @var string 文件是否被引用
     */
    public $FileNotUsed;

    /**
     * @param string $ProjectId 项目ID
     * @param string $Keyword 关键字
     * @param string $IncludeFile 是否包含文件
     * @param integer $MaxDepth 最大深度
     * @param string $FileNotUsed 文件是否被引用
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("IncludeFile",$param) and $param["IncludeFile"] !== null) {
            $this->IncludeFile = $param["IncludeFile"];
        }

        if (array_key_exists("MaxDepth",$param) and $param["MaxDepth"] !== null) {
            $this->MaxDepth = $param["MaxDepth"];
        }

        if (array_key_exists("FileNotUsed",$param) and $param["FileNotUsed"] !== null) {
            $this->FileNotUsed = $param["FileNotUsed"];
        }
    }
}
