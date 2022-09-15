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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBusinessLogConfigs请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，取值范围大于等于0，默认值为0
 * @method void setOffset(integer $Offset) 设置偏移量，取值范围大于等于0，默认值为0
 * @method integer getLimit() 获取单页请求配置数量，取值范围[1, 50]，默认值为10
 * @method void setLimit(integer $Limit) 设置单页请求配置数量，取值范围[1, 50]，默认值为10
 * @method string getSearchWord() 获取模糊匹配关键词
 * @method void setSearchWord(string $SearchWord) 设置模糊匹配关键词
 * @method boolean getDisableProgramAuthCheck() 获取无
 * @method void setDisableProgramAuthCheck(boolean $DisableProgramAuthCheck) 设置无
 * @method array getConfigIdList() 获取无
 * @method void setConfigIdList(array $ConfigIdList) 设置无
 */
class DescribeBusinessLogConfigsRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，取值范围大于等于0，默认值为0
     */
    public $Offset;

    /**
     * @var integer 单页请求配置数量，取值范围[1, 50]，默认值为10
     */
    public $Limit;

    /**
     * @var string 模糊匹配关键词
     */
    public $SearchWord;

    /**
     * @var boolean 无
     */
    public $DisableProgramAuthCheck;

    /**
     * @var array 无
     */
    public $ConfigIdList;

    /**
     * @param integer $Offset 偏移量，取值范围大于等于0，默认值为0
     * @param integer $Limit 单页请求配置数量，取值范围[1, 50]，默认值为10
     * @param string $SearchWord 模糊匹配关键词
     * @param boolean $DisableProgramAuthCheck 无
     * @param array $ConfigIdList 无
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("DisableProgramAuthCheck",$param) and $param["DisableProgramAuthCheck"] !== null) {
            $this->DisableProgramAuthCheck = $param["DisableProgramAuthCheck"];
        }

        if (array_key_exists("ConfigIdList",$param) and $param["ConfigIdList"] !== null) {
            $this->ConfigIdList = $param["ConfigIdList"];
        }
    }
}
