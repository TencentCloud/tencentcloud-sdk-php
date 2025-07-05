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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostUploadUpdateRecordDetail请求参数结构体
 *
 * @method integer getDeployRecordId() 获取托管记录ID
 * @method void setDeployRecordId(integer $DeployRecordId) 设置托管记录ID
 * @method integer getLimit() 获取每页数量，默认为10，最大为200， 超过200则为200
 * @method void setLimit(integer $Limit) 设置每页数量，默认为10，最大为200， 超过200则为200
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 */
class DescribeHostUploadUpdateRecordDetailRequest extends AbstractModel
{
    /**
     * @var integer 托管记录ID
     */
    public $DeployRecordId;

    /**
     * @var integer 每页数量，默认为10，最大为200， 超过200则为200
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @param integer $DeployRecordId 托管记录ID
     * @param integer $Limit 每页数量，默认为10，最大为200， 超过200则为200
     * @param integer $Offset 偏移量，默认为0
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
        if (array_key_exists("DeployRecordId",$param) and $param["DeployRecordId"] !== null) {
            $this->DeployRecordId = $param["DeployRecordId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
