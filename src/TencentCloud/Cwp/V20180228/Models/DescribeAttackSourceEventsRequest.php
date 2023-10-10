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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAttackSourceEvents请求参数结构体
 *
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method string getBeginDate() 获取开始日期
 * @method void setBeginDate(string $BeginDate) 设置开始日期
 * @method string getEndDate() 获取结束日期
 * @method void setEndDate(string $EndDate) 设置结束日期
 * @method string getEventInfoParam() 获取接口DescribeAttackSource 返回的EventInfoParam
 * @method void setEventInfoParam(string $EventInfoParam) 设置接口DescribeAttackSource 返回的EventInfoParam
 * @method integer getLimit() 获取限制分页条数默认10
 * @method void setLimit(integer $Limit) 设置限制分页条数默认10
 * @method integer getOffset() 获取起始步长默认0
 * @method void setOffset(integer $Offset) 设置起始步长默认0
 */
class DescribeAttackSourceEventsRequest extends AbstractModel
{
    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var string 开始日期
     */
    public $BeginDate;

    /**
     * @var string 结束日期
     */
    public $EndDate;

    /**
     * @var string 接口DescribeAttackSource 返回的EventInfoParam
     */
    public $EventInfoParam;

    /**
     * @var integer 限制分页条数默认10
     */
    public $Limit;

    /**
     * @var integer 起始步长默认0
     */
    public $Offset;

    /**
     * @param string $Uuid 主机uuid
     * @param string $BeginDate 开始日期
     * @param string $EndDate 结束日期
     * @param string $EventInfoParam 接口DescribeAttackSource 返回的EventInfoParam
     * @param integer $Limit 限制分页条数默认10
     * @param integer $Offset 起始步长默认0
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("EventInfoParam",$param) and $param["EventInfoParam"] !== null) {
            $this->EventInfoParam = $param["EventInfoParam"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
