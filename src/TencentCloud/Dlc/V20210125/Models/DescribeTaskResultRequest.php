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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskResult请求参数结构体
 *
 * @method string getTaskId() 获取任务唯一ID，仅支持30天内的任务
 * @method void setTaskId(string $TaskId) 设置任务唯一ID，仅支持30天内的任务
 * @method string getNextToken() 获取上一次请求响应返回的分页信息。第一次可以不带，从头开始返回数据，每次返回MaxResults字段设置的数据量。
 * @method void setNextToken(string $NextToken) 设置上一次请求响应返回的分页信息。第一次可以不带，从头开始返回数据，每次返回MaxResults字段设置的数据量。
 * @method integer getMaxResults() 获取返回结果的最大行数，范围0~1000，默认为1000.
 * @method void setMaxResults(integer $MaxResults) 设置返回结果的最大行数，范围0~1000，默认为1000.
 * @method boolean getIsTransformDataType() 获取是否转化数据类型
 * @method void setIsTransformDataType(boolean $IsTransformDataType) 设置是否转化数据类型
 * @method integer getDataFieldCutLen() 获取返回结果集中字段长度截取，如果字段值长度超过该长度则截取到该长度
 * @method void setDataFieldCutLen(integer $DataFieldCutLen) 设置返回结果集中字段长度截取，如果字段值长度超过该长度则截取到该长度
 */
class DescribeTaskResultRequest extends AbstractModel
{
    /**
     * @var string 任务唯一ID，仅支持30天内的任务
     */
    public $TaskId;

    /**
     * @var string 上一次请求响应返回的分页信息。第一次可以不带，从头开始返回数据，每次返回MaxResults字段设置的数据量。
     */
    public $NextToken;

    /**
     * @var integer 返回结果的最大行数，范围0~1000，默认为1000.
     */
    public $MaxResults;

    /**
     * @var boolean 是否转化数据类型
     */
    public $IsTransformDataType;

    /**
     * @var integer 返回结果集中字段长度截取，如果字段值长度超过该长度则截取到该长度
     */
    public $DataFieldCutLen;

    /**
     * @param string $TaskId 任务唯一ID，仅支持30天内的任务
     * @param string $NextToken 上一次请求响应返回的分页信息。第一次可以不带，从头开始返回数据，每次返回MaxResults字段设置的数据量。
     * @param integer $MaxResults 返回结果的最大行数，范围0~1000，默认为1000.
     * @param boolean $IsTransformDataType 是否转化数据类型
     * @param integer $DataFieldCutLen 返回结果集中字段长度截取，如果字段值长度超过该长度则截取到该长度
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("IsTransformDataType",$param) and $param["IsTransformDataType"] !== null) {
            $this->IsTransformDataType = $param["IsTransformDataType"];
        }

        if (array_key_exists("DataFieldCutLen",$param) and $param["DataFieldCutLen"] !== null) {
            $this->DataFieldCutLen = $param["DataFieldCutLen"];
        }
    }
}
