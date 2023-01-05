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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotFiles请求参数结构体
 *
 * @method string getBusinessType() 获取业务类型，目前支持安全组：securitygroup。
 * @method void setBusinessType(string $BusinessType) 设置业务类型，目前支持安全组：securitygroup。
 * @method string getInstanceId() 获取实例Id。
 * @method void setInstanceId(string $InstanceId) 设置实例Id。
 * @method string getStartDate() 获取开始日期，格式%Y-%m-%d %H:%M:%S。
 * @method void setStartDate(string $StartDate) 设置开始日期，格式%Y-%m-%d %H:%M:%S。
 * @method string getEndDate() 获取结束日期，格式%Y-%m-%d %H:%M:%S。
 * @method void setEndDate(string $EndDate) 设置结束日期，格式%Y-%m-%d %H:%M:%S。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大为200。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大为200。
 */
class DescribeSnapshotFilesRequest extends AbstractModel
{
    /**
     * @var string 业务类型，目前支持安全组：securitygroup。
     */
    public $BusinessType;

    /**
     * @var string 实例Id。
     */
    public $InstanceId;

    /**
     * @var string 开始日期，格式%Y-%m-%d %H:%M:%S。
     */
    public $StartDate;

    /**
     * @var string 结束日期，格式%Y-%m-%d %H:%M:%S。
     */
    public $EndDate;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大为200。
     */
    public $Limit;

    /**
     * @param string $BusinessType 业务类型，目前支持安全组：securitygroup。
     * @param string $InstanceId 实例Id。
     * @param string $StartDate 开始日期，格式%Y-%m-%d %H:%M:%S。
     * @param string $EndDate 结束日期，格式%Y-%m-%d %H:%M:%S。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大为200。
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
        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
