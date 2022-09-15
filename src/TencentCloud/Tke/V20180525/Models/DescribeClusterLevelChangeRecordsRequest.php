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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterLevelChangeRecords请求参数结构体
 *
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getStartAt() 获取开始时间
 * @method void setStartAt(string $StartAt) 设置开始时间
 * @method string getEndAt() 获取结束时间
 * @method void setEndAt(string $EndAt) 设置结束时间
 * @method integer getOffset() 获取偏移量,默认0
 * @method void setOffset(integer $Offset) 设置偏移量,默认0
 * @method integer getLimit() 获取最大输出条数，默认20
 * @method void setLimit(integer $Limit) 设置最大输出条数，默认20
 */
class DescribeClusterLevelChangeRecordsRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 开始时间
     */
    public $StartAt;

    /**
     * @var string 结束时间
     */
    public $EndAt;

    /**
     * @var integer 偏移量,默认0
     */
    public $Offset;

    /**
     * @var integer 最大输出条数，默认20
     */
    public $Limit;

    /**
     * @param string $ClusterID 集群ID
     * @param string $StartAt 开始时间
     * @param string $EndAt 结束时间
     * @param integer $Offset 偏移量,默认0
     * @param integer $Limit 最大输出条数，默认20
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("EndAt",$param) and $param["EndAt"] !== null) {
            $this->EndAt = $param["EndAt"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
