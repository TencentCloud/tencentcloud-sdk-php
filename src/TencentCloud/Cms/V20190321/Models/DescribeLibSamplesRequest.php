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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLibSamples请求参数结构体
 *
 * @method integer getLimit() 获取单页条数，最大为100条
 * @method void setLimit(integer $Limit) 设置单页条数，最大为100条
 * @method integer getOffset() 获取条数偏移量
 * @method void setOffset(integer $Offset) 设置条数偏移量
 * @method string getLibID() 获取词库ID
 * @method void setLibID(string $LibID) 设置词库ID
 * @method string getContent() 获取词内容过滤
 * @method void setContent(string $Content) 设置词内容过滤
 * @method array getEvilTypeList() 获取违规类型列表过滤
 * @method void setEvilTypeList(array $EvilTypeList) 设置违规类型列表过滤
 * @method array getSampleIDs() 获取样本词ID列表过滤
 * @method void setSampleIDs(array $SampleIDs) 设置样本词ID列表过滤
 */
class DescribeLibSamplesRequest extends AbstractModel
{
    /**
     * @var integer 单页条数，最大为100条
     */
    public $Limit;

    /**
     * @var integer 条数偏移量
     */
    public $Offset;

    /**
     * @var string 词库ID
     */
    public $LibID;

    /**
     * @var string 词内容过滤
     */
    public $Content;

    /**
     * @var array 违规类型列表过滤
     */
    public $EvilTypeList;

    /**
     * @var array 样本词ID列表过滤
     */
    public $SampleIDs;

    /**
     * @param integer $Limit 单页条数，最大为100条
     * @param integer $Offset 条数偏移量
     * @param string $LibID 词库ID
     * @param string $Content 词内容过滤
     * @param array $EvilTypeList 违规类型列表过滤
     * @param array $SampleIDs 样本词ID列表过滤
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("LibID",$param) and $param["LibID"] !== null) {
            $this->LibID = $param["LibID"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("EvilTypeList",$param) and $param["EvilTypeList"] !== null) {
            $this->EvilTypeList = $param["EvilTypeList"];
        }

        if (array_key_exists("SampleIDs",$param) and $param["SampleIDs"] !== null) {
            $this->SampleIDs = $param["SampleIDs"];
        }
    }
}
