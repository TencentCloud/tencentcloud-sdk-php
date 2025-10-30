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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCmdTemplates请求参数结构体
 *
 * @method array getIdSet() 获取命令模板ID集合，非必需
 * @method void setIdSet(array $IdSet) 设置命令模板ID集合，非必需
 * @method string getName() 获取命令模板名，模糊查询，最大长度64字符
 * @method void setName(string $Name) 设置命令模板名，模糊查询，最大长度64字符
 * @method integer getType() 获取命令模板类型 1-内置模板 2-自定义模板
 * @method void setType(integer $Type) 设置命令模板类型 1-内置模板 2-自定义模板
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 * @method integer getLimit() 获取每页条目数量，默认20
 * @method void setLimit(integer $Limit) 设置每页条目数量，默认20
 */
class DescribeCmdTemplatesRequest extends AbstractModel
{
    /**
     * @var array 命令模板ID集合，非必需
     */
    public $IdSet;

    /**
     * @var string 命令模板名，模糊查询，最大长度64字符
     */
    public $Name;

    /**
     * @var integer 命令模板类型 1-内置模板 2-自定义模板
     */
    public $Type;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @var integer 每页条目数量，默认20
     */
    public $Limit;

    /**
     * @param array $IdSet 命令模板ID集合，非必需
     * @param string $Name 命令模板名，模糊查询，最大长度64字符
     * @param integer $Type 命令模板类型 1-内置模板 2-自定义模板
     * @param integer $Offset 分页偏移位置，默认值为0
     * @param integer $Limit 每页条目数量，默认20
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
        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
