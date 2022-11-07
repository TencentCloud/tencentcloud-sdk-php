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
 * DescribeStandardRuleDetailInfoList请求参数结构体
 *
 * @method string getProjectId() 获取空间、项目id
 * @method void setProjectId(string $ProjectId) 设置空间、项目id
 * @method integer getType() 获取标准分类11编码映射 12数据过滤 13字符串转换 14数据元定义 15正则表达 16术语词典
 * @method void setType(integer $Type) 设置标准分类11编码映射 12数据过滤 13字符串转换 14数据元定义 15正则表达 16术语词典
 */
class DescribeStandardRuleDetailInfoListRequest extends AbstractModel
{
    /**
     * @var string 空间、项目id
     */
    public $ProjectId;

    /**
     * @var integer 标准分类11编码映射 12数据过滤 13字符串转换 14数据元定义 15正则表达 16术语词典
     */
    public $Type;

    /**
     * @param string $ProjectId 空间、项目id
     * @param integer $Type 标准分类11编码映射 12数据过滤 13字符串转换 14数据元定义 15正则表达 16术语词典
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
