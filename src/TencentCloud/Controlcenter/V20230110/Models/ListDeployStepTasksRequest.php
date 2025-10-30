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
namespace TencentCloud\Controlcenter\V20230110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDeployStepTasks请求参数结构体
 *
 * @method string getIdentifier() 获取功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
 * @method void setIdentifier(string $Identifier) 设置功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
 * @method integer getLimit() 获取返回记录最大数目,取值范围0~200。
 * @method void setLimit(integer $Limit) 设置返回记录最大数目,取值范围0~200。
 * @method integer getOffset() 获取偏移量，取值范围大于等于0。
 * @method void setOffset(integer $Offset) 设置偏移量，取值范围大于等于0。
 */
class ListDeployStepTasksRequest extends AbstractModel
{
    /**
     * @var string 功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
     */
    public $Identifier;

    /**
     * @var integer 返回记录最大数目,取值范围0~200。
     */
    public $Limit;

    /**
     * @var integer 偏移量，取值范围大于等于0。
     */
    public $Offset;

    /**
     * @param string $Identifier 功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
     * @param integer $Limit 返回记录最大数目,取值范围0~200。
     * @param integer $Offset 偏移量，取值范围大于等于0。
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
